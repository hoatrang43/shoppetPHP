<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\apichocanhcontroller;
use App\Http\Controllers\api\apigiongchocontroller;
use App\Http\Controllers\api\apiloaiphukiencontroller;
use App\Http\Controllers\api\apiphukiencontroller;
use App\Http\Controllers\api\apinhanviencontroller;
use App\Http\Controllers\api\apikhachhangcontroller;
use App\Http\Controllers\api\apinhacungcapcontroller;
use App\Http\Controllers\api\apihoadonbancontroller;
use App\Http\Controllers\api\apihoadonnhapcontroller;




/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// admin

Route::resource('products', apichocanhcontroller::class);
Route::resource('giongs', apigiongchocontroller::class);
Route::resource('categories', apiloaiphukiencontroller::class);
Route::resource('employees', apinhanviencontroller::class);
Route::resource('phukien', apiphukiencontroller::class);
Route::resource('customers', apikhachhangcontroller::class);
Route::resource('providers', apinhacungcapcontroller::class);
Route::resource('hdbans', apihoadonbancontroller::class);
Route::get('/billsban/LayCTHDBan/{id}',[apihoadonbancontroller::class,'LayCTHDBan']);
Route::get('/billsban/TTKH/{id}',[apihoadonbancontroller::class,'LayTTKH']);
Route::resource('hdnhaps', apihoadonnhapcontroller::class);


//home

Route::get('/chocanh/listSPBanChay',[apichocanhcontroller::class,'listSPBanChay']);
Route::get('/chocanh/listSPMoi',[apichocanhcontroller::class,'listSPMoi']);
Route::get('/chocanh/shopdogdetail/{id}',[apichocanhcontroller::class,'getDog']);
Route::get('/chocanh/shop_phukien_details/{id}',[apichocanhcontroller::class,'getPhukienLoai']);
Route::get('/chocanh/listPKMoi',[apiphukiencontroller::class,'listPKMoi']);
Route::get('/chocanh/TTGiong/{id}',[apichocanhcontroller::class,'TTGiong']);
route::resource("kh",apikhachhangcontroller::class);
route::get("kh1/get/{tk}&{mk}",[apikhachhangcontroller::class,"show2"]);
route::get("kh1/get/{tk}",[apikhachhangcontroller::class,"show3"]);
Route::get('/phukien/shop_phukien_details/{id}',[apiphukiencontroller::class,'getLoai']);
