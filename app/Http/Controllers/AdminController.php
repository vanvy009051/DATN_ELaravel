<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;

session_start();

class AdminController extends Controller
{
    public function AuthLogin()
    {
        $id = Session::get('user_id');
        if ($id) {
            return Redirect::to('/admin/dashboard');
        } else {
            return Redirect::to('/admin-login')->send();
        }
    }

    public function login()
    {
        return view('backend/admin.login');
    }

    // public function register()
    // {
    //     return view('backend/admin.register');
    // }

    public function dashboard()
    {
        $this->AuthLogin();
        return view('backend/admin.dashboard');
    }

    // public function profile()
    // {
    //     return view('backend/admin.profile');
    // }

    public function show_dashboard(Request $request)
    {
        // $this->AuthLogin();
        $user_email = $request->user_email;
        $user_password = md5($request->user_password);

        $result = DB::table('users')->where('email', $user_email)->where('password', $user_password)->where('role_id', '1')->first();

        if ($result) {
            Session::put('user_name', $result->fullname);
            Session::put('user_id', $result->id);
            return Redirect::to('/admin/dashboard');
        } else {
            Session::put('message', 'Email or password is incorrect. Please try again.');
            return Redirect::to('/admin-login');
        }
    }

    public function logout()
    {
        $this->AuthLogin();
        Session::put('user_name', null);
        Session::put('user_id', null);
        return Redirect::to('/admin-login');
    }
}
