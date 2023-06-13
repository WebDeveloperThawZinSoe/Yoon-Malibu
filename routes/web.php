<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\CategoryController;
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

Route::get('/',[RouteController::class,"index"]);
Route::get("/register",function(){
    return redirect("/login");
});




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get("/dashboard",[RouteController::class,"admin_dashboard"]);

    //Category
    Route::get("/category/create",[CategoryController::class,"create"]);
    Route::post("/category/create",[CategoryController::class,"store"]);
    Route::get("/category/view",[CategoryController::class,"view"]);

});
