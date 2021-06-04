<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', function () {
    return view('home');
});
Route::get('login', function () {
    return view('admin_login');
});


;
Route::get('kigali_provence', function () {
    return view('products/kigali_provence');
});

Route::get('provence_kigali', function () {
    return view('provence_kigali');
});

Route::get('/form/register', function () {
    return view('form/register');
});
Route::get('/form/adimin_form', function () {
    return view('form/adimin_form');
});
Route::get('/form/changer_password', function () {
    return view('form/changer_password');
});




use App\Http\Controllers\PassangerinforController;  
Route::resource('passangerinfors', PassangerinforController::class);

use App\Http\Controllers\AdminformController;  
Route::resource('adminform', AdminformController::class);

use App\Http\Controllers\AdminformsController;  
Route::resource('Adminforms', AdminformsController::class);

use App\Http\Controllers\tasksadsController;  
Route::resource('tasksads', tasksadsController::class);

use App\Http\Controllers\ProductController;  

Route::resource('products', ProductController::class);

