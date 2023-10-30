<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\BrandSub;
use App\Models\Product;
use App\Models\Company;
use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $posts = Post::orderByDesc('created_at')->limit(3)->get();

        return view('home.index', compact('posts'));
    }

    public function news($id)
    {
        return view('home.show.news_show', [
            'post' => Post::findOrFail($id)
        ]);
    }
    
    public function about()
    {
        return view('home.about');
    }

    public function history()
    {
        return view('home.about.history');
    }

    public function management()
    {
        return view('home.about.management');
    }
    
    public function company()
    {
        $companies = Company::all();
        return view('home.company', compact('companies'));
    }

    public function company_show($id)
    {
        return view('home.show.company_show', [
            'company' => Company::findOrFail($id)
        ]);
    }

    public function brands()
    {
        $brands = Brand::all();
        return view('home.brands', compact('brands'));
    }

    public function brandsTest()
    {
        $brands = Brand::all();
        return view('home.brandsTest', compact('brands'));
    }

    public function brandsDasida()
    {
        $brands = Brand::all();
        return view('home.brandsDasida', compact('brands'));
    }

    public function brandsSpam()
    {
        $brands = Brand::all();
        return view('home.brandsSpam', compact('brands'));
    }

    public function brands_show($id)
    {
        return view('home.show.brand_show', [
            'brand' => Brand::findOrFail($id)
        ]);
    }

    public function brandsub_show($id, $sid)
    {
        return view('home.show.brandsub_show', [
            'brand' => Brand::findOrFail($id),
            'brandsubid' => BrandSub::findOrFail($sid)
        ]);
    }

    public function product_show($id, $sid, $pid)
    {
        return view('home.show.product_show', [
            'product' => Product::findOrFail($pid)
        ]);
    }

    public function social_responsibility()
    {
        return view('home.socialresponsibility');
    }

    public function page_thankyou()
    {
        return view('home.page.thankyou');
    }

    public function human_resource()
    {
        return view('home.hr.index');
    }

    public function careers()
    {
        return view('hr.index');
    }

    public function contact()
    {
        return view('home.contact');
    }

    public function contactFast()
    {
        return view('home.contactfast');
    }

    public function storelocation()
    {
        return view('home.storelocation');
    }
}
