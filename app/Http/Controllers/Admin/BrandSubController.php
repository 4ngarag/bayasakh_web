<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BrandSubStoreRequest;
use App\Models\Brand;
use App\Models\BrandSub;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BrandSubController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brandsubs = BrandSub::all();
        return view('admin.brandsub.index', compact('brandsubs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands = Brand::all();
        return view('admin.brandsub.create', compact('brands'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BrandSubStoreRequest $request)
    {
        $logo = $request->file('logo')->store('public/brandsub');
        $slider_image = $request->file('slider_image')->store('public/brandsub/slider');

        $company = Brand::select('company_id')->where('id',$request->brand_id)->get();

        $brandsub = BrandSub::create([
            'name' => $request->name,
            'intro_en' => $request->intro_en,
            'intro_ru' => $request->intro_ru,
            'intro_mn' => $request->intro_mn,
            'logo' => $logo,
            'slider_image' => $slider_image,
            'not_brand' => $request->not_brand,
            'brand_id' => $request->brand_id,
            'company_id' => $company[0]->company_id
        ]);

        return to_route('admin.brandsub.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(BrandSub $brandsub)
    {
        $brands = Brand::all();

        return view('admin.brandsub.edit', compact('brandsub', 'brands'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BrandSub $brandsub)
    {
        $request->validate([
            'name' => 'required',
            'intro_en' => 'required',
            'intro_ru' => 'string',
            'intro_mn' => 'string',
            'not_brand' => 'required',
        ]);

        $logo = $brandsub->logo;
        $slider_image = $brandsub->slider_image;

        if($request->hasFile('logo')){
            Storage::delete($brandsub->logo);
            $logo = $request->file('logo')->store('public/brandsub');
        } elseif($request->hasFile('slider_image')){
            Storage::delete($brandsub->slider_image);
            $slider_image = $request->file('slider_image')->store('public/brandsub/slider');
        }

        $brandsub->update([
            'name' => $request->name,
            'intro_en' => $request->intro_en,
            'intro_ru' => $request->intro_ru,
            'intro_mn' => $request->intro_mn,
            'logo' => $logo,
            'slider_image' => $slider_image,
            'not_brand' => $request->not_brand,
            'brand_id' => $request->brand_id,
        ]);

        if ($request->has('brands')) {
            $brand->brands()->sync($request->brands);
        }

        return to_route('admin.brandsub.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(BrandSub $brandsub)
    {
        Storage::delete($brandsub->logo);
        Storage::delete($brandsub->slider_image);
        // $brandsub->companies()->detach();
        $brandsub->delete();

        return to_route('admin.brandsub.index');
    }
}
