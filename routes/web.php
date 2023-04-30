<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::middleware(['middleware' => 'PreventBackHistory'])->group(function () {
//     Auth::routes();
// });

// Forgot Password

Route::view('forgot_password', 'auth.reset_password')->name('password.reset');

// Frontend routes
Route::get('/', 'HomeController@index');
Route::get('/login', 'HomeController@login');
Route::get('/sign-up', 'HomeController@signup');
Route::get('/contact', 'HomeController@contact');
Route::get('/checkout', 'HomeController@checkout');
Route::get('/shop', 'HomeController@shop');

Route::get('/category/{category_id}', 'CategoryController@show_category_home');
Route::get('/brand/{brand_id}', 'BrandController@show_brand_home');


// Backend routes
// Route::get('/admin/profile', 'AdminController@profile');
// Route::get('/admin-register', 'AdminController@register');
Route::get('/admin-login', 'AdminController@login');
Route::get('/logout', 'AdminController@logout');
Route::get('/admin/dashboard', 'AdminController@dashboard');
Route::post('/admin-dashboard', 'AdminController@show_dashboard');

// User routes
Route::get('/user-logout', 'UserController@user_logout');
Route::post('/user-sign-up', 'UserController@user_sign_up');
Route::post('/user-dashboard', 'UserController@user_dashboard');

// Category routes
Route::get('/add-category', 'CategoryController@add_category');
Route::get('/edit-category/{category_id}', 'CategoryController@edit_category');
Route::get('/delete-category/{category_id}', 'CategoryController@delete_category');
Route::get('/all-category', 'CategoryController@all_category');

Route::get('/unactive-category/{category_id}', 'CategoryController@unactive_category');
Route::get('/active-category/{category_id}', 'CategoryController@active_category');

Route::post('/save-category', 'CategoryController@save_category');
Route::post('/update-category/{category_id}', 'CategoryController@update_category');

// Brands routes
Route::get('/add-brand', 'BrandController@add_brand');
Route::get('/edit-brand/{brand_id}', 'BrandController@edit_brand');
Route::get('/delete-brand/{brand_id}', 'BrandController@delete_brand');
Route::get('/all-brand', 'BrandController@all_brand');

Route::get('/unactive-brand/{brand_id}', 'BrandController@unactive_brand');
Route::get('/active-brand/{brand_id}', 'BrandController@active_brand');

Route::post('/save-brand', 'BrandController@save_brand');
Route::post('/update-brand/{brand_id}', 'BrandController@update_brand');

// Product routes
Route::get('/add-product', 'ProductController@add_product');
Route::get('/edit-product/{product_id}', 'ProductController@edit_product');
Route::get('/delete-product/{product_id}', 'ProductController@delete_product');
Route::get('/all-product', 'ProductController@all_product');

Route::get('/unactive-product/{product_id}', 'ProductController@unactive_product');
Route::get('/active-product/{product_id}', 'ProductController@active_product');

Route::post('/save-product', 'ProductController@save_product');
Route::post('/update-product/{product_id}', 'ProductController@update_product');
