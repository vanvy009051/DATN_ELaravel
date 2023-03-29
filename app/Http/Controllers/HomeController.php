<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Home Page
    public function index()
    {
        return view('layout');
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
