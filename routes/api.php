<?php

use Illuminate\Http\Request;
use App\Http\Controllers\ApiAuthCtrl;
use App\Http\Controllers\ApiMenuCtrl;
use Illuminate\Support\Facades\Route;

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
// menu
Route::get('menus/{id_cat?}',[ApiMenuCtrl::class,'getAll']);
Route::get('menu_fav',[ApiMenuCtrl::class,'getfav']);
Route::get('category',[APIMenuCtrl::class,'getCategory']);

// Auth
Route::post('login',[ApiAuthCtrl::class,'getLogin']);
Route::post('register',[ApiAuthCtrl::class,'register']);

// transaksi
Route::get('trans/{id_cus}',[ApiTransCtrl::class,'getTrans']);

// save member 
route::post('member',[ApiCustomerCtrl::class,'save_member']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
