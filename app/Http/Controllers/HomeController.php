<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;

session_start();

class HomeController extends Controller
{
    // Home Page
    public function index()
    {
        $category = DB::table('categories')->where('status', '1')->orderby('category_id', 'DESC')->limit(5)->get();
        $brand = DB::table('brands')->where('status', '1')->orderby('brand_id', 'DESC')->limit(3)->get();
        $all_product = DB::table('products')
            ->join('categories', 'categories.category_id', '=', 'products.category_id')
            ->join('brands', 'brands.brand_id', '=', 'products.brand_id')
            ->where('products.product_status', '1')
            ->orderby('products.product_id', 'DESC')
            ->get();

        // $all_product = DB::table('products')
        //     ->join('categories', 'categories.category_id', '=', 'products.category_id')
        //     ->join('brands', 'brands.brand_id', '=', 'products.brand_id')
        //     ->orderby('products.product_id', 'ASC')->get();


        return view('pages.home')->with('brand', $brand)->with('category', $category)->with('all_product', $all_product);
    }

    public function login()
    {
        return view('frontend.login');
    }

    public function signup()
    {
        return view('frontend.signup');
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function checkout()
    {
        return view('frontend.checkout');
    }

    public function shop()
    {
        return view('frontend.store');
    }
}
