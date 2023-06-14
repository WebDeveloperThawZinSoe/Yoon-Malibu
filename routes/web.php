<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AccountManagementController;
use App\Http\Controllers\MenuController;
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
    Route::get("/category/{id}/delete",[CategoryController::class,"delete"]);

    //MCategory
    Route::get("/mcategory/create",[CategoryController::class,"mcreate"]);
    Route::post("/mcategory/create",[CategoryController::class,"mstore"]);
    Route::get("/mcategory/view",[CategoryController::class,"mview"]);
    Route::get("/mcategory/{id}/delete",[CategoryController::class,"mdelete"]);

    //Account
    Route::get("/account",[AccountManagementController::class,"index"]);
    Route::post("/account",[AccountManagementController::class,"store"]);
    Route::post("/account/delete",[AccountManagementController::class,"delete"]);
    Route::post("/account/password/update",[AccountManagementController::class,"password_update"]);

    //Menu
    Route::get("/menu/create",[MenuController::class,"create"]);
    Route::post("/menu/create",[MenuController::class,"store"]);
    Route::get("/menu/view",[MenuController::class,"view"]);

    //Menu For Malibu
    Route::get("/mmenu/create",[MenuController::class,"mcreate"]);
    Route::post("/mmenu/create",[MenuController::class,"mstore"]);
    Route::get("/mmenu/view",[MenuController::class,"mview"]);
});
