<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductStoreRequest;
use App\Models\Brand;
use App\Models\BrandSub;
use App\Models\Product;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brandsubs = BrandSub::all();
        return view('admin.products.create', compact('brandsubs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductStoreRequest $request) // dd not working because StoreRequest
    {
        $logo = $request->file('logo')->store('public/products');
        $slider_image = $request->file('slider_image')->store('public/products/slider');

        $brand = BrandSub::select('brand_id')->where('id',$request->brandsub_id)->get();

        $product = Product::create([
            'name' => $request->name,
            'intro_en' => $request->intro_en,
            'intro_ru' => $request->intro_ru,
            'intro_mn' => $request->intro_mn,
            'logo' => $logo,
            'slider_image' => $slider_image,
            'start_year' => $request->start_year,
            'brand_id' => $brand[0]->brand_id,
            'brandsub_id' => $request->brandsub_id
        ]);

        return to_route('admin.products.index');
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
    public function edit(Product $product)
    {
        $brandsubs = BrandSub::all();

        return view('admin.products.edit', compact('brandsubs', 'product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
            'intro_en' => 'required',
            'intro_ru' => 'string',
            'intro_mn' => 'string',
            'start_year' => 'string',
            'brandsub_id' => 'required'
        ]);

        $logo = $product->logo;
        $slider_image = $product->slider_image;

        $brand = BrandSub::select('brand_id')->where('id',$request->brandsub_id)->get();

        if($request->hasFile('logo')){
            Storage::delete($product->logo);
            $logo = $request->file('logo')->store('public/products');
        } elseif($request->hasFile('slider_image')){
            Storage::delete($product->slider_image);
            $slider_image = $request->file('slider_image')->store('public/products/slider');
        }

        $product->update([
            'name' => $request->name,
            'intro_en' => $request->intro_en,
            'intro_ru' => $request->intro_ru,
            'intro_mn' => $request->intro_mn,
            'logo' => $logo,
            'slider_image' => $slider_image,
            'start_year' => $request->start_year,
            'brand_id' => $brand[0]->brand_id,
            'brandsub_id' => $request->brandsub_id,
        ]);

        // if ($request->has('brands')) {
        //     $brand->brands()->sync($request->brands);
        // }

        return to_route('admin.products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        Storage::delete($product->logo);
        Storage::delete($product->slider_image);
        // $product->companies()->detach();
        $product->delete();

        return to_route('admin.products.index');
    }
}
