<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

// Frontend routes
Route::get('/', 'HomeController@index');
Route::get('/login', 'HomeController@login');
Route::get('/contact', 'HomeController@contact');
Route::get('/checkout', 'HomeController@checkout');


// Backend routes
Route::get('/admin/login', 'AdminController@index');
Route::get('/admin/dashboard', 'AdminController@dashboard');
