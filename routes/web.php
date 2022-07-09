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

//admin

Route::get('/products', function () {
    return view('admin.cho_canh'); 
  
});

Route::get('/employees', function () {
    return view('admin.employees'); 
  
});

Route::get('/customers', function () {
    return view('admin.customers'); 
});

Route::get('/providers', function () {
    return view('admin.providers'); 
});

Route::get('/categories', function () {
    return view('admin.categories'); 
  
});

Route::get('/giongs', function () {
    return view('admin.giong_cho'); 
  
});

Route::get('/phukien', function () {
    return view('admin.phu_kien'); 
  
});

Route::get('/dogdetails', function () {
    return view('admin.dog_details'); 
  
});

Route::get('/phukiendetails', function () {
    return view('admin.phukien_details'); 
  
});

Route::get('/dogsdetails', function () {
    return view('admin.dogs_details'); 
  
});

Route::get('/employee_details', function () {
    return view('admin.employee_details'); 
  
});

Route::get('/customer_details', function () {
    return view('admin.customer_details'); 
});

Route::get('/provider_details', function () {
    return view('admin.provider_details'); 
});

Route::get('/add_dogs', function () {
    return view('admin.add_dog'); 
});

Route::get('/add_provider', function () {
    return view('admin.add_provider'); 
});

Route::get('/hdbans', function () {
    return view('admin.hoadonban');
});

Route::get('/hoadonban_details', function () {
    return view('admin.hoadonban_details');
});

Route::get('/hdnhaps', function () {
    return view('admin.hoadonnhap');
});

//home

Route::get('/home', function () {
    return view('home.index');
});

Route::get('/home1', function () {
    return view('home.index1');
});

Route::get('/product_detail', function () {
    return view('home.product_detail');
});

Route::get('/phukien_details', function () {
    return view('home.phukien_details');
});

Route::get('/shopdog', function () {
    return view('home.shopdog'); 
  
});

Route::get('/shopphukien', function () {
    return view('home.shopphukien'); 
  
});

Route::get('/shopdogdetail', function () {
    return view('home.shop_dog_details'); 
  
});

Route::get('/shop_phukien_details', function () {
    return view('home.shop_phukien_details'); 
  
});

Route::get('/shop_cart', function () {
    return view('home.shop_cart'); 
  
});

Route::get('/login', function () {
    return view('home.login'); 
  
});

Route::get('/register', function () {
    return view('home.register'); 
  
});

Route::get('/checkout', function () {
    return view('home.checkout'); 
  
}); 

Route::get('/my_account', function () {
    return view('home.my_account'); 
  
});

Route::get('/blog', function () {
    return view('home.blog'); 
  
});

Route::get('/contact', function () {
    return view('home.contact'); 
  
});