<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AccountManagementController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\SocialSettingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\AboutController;
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
Route::get("/yoon",[RouteController::class,"yoon"]);

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
    Route::post("/category/update",[CategoryController::class,"update"]);

    //MCategory
    Route::get("/mcategory/create",[CategoryController::class,"mcreate"]);
    Route::post("/mcategory/create",[CategoryController::class,"mstore"]);
    Route::get("/mcategory/view",[CategoryController::class,"mview"]);
    Route::get("/mcategory/{id}/delete",[CategoryController::class,"mdelete"]);
    Route::post("/mcategory/update",[CategoryController::class,"mupdate"]);
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
    Route::get("/menu/{id}/delete",[MenuController::class,"delete"]);
    Route::get("/mmenu/{id}/delete",[MenuController::class,"mdelete"]);

    //Social Setting
    Route::get("/social-content-setting",[SocialSettingController::class,"index"]);
    Route::post("/social-content-setting/yoon",[SocialSettingController::class,"yoon_update"]);
    Route::post("/social-content-setting/malibu",[SocialSettingController::class,"malibu_update"]);

    //contact
    Route::get("/contact-data",[ContactController::class,"contact_data"]);

    // About Content
    Route::get("/about-content",[AboutController::class,"index"]);
    Route::post("/about/update/yoon",[AboutController::class,"yoon_update"]);
    Route::post("/about/update/malibu",[AboutController::class,"malibu_update"]);
    //Event
    Route::get("/event/create",[EventController::class,"create"]);  
    Route::post("/event/create",[EventController::class,"store"]);
    Route::get("/mevent/create",[EventController::class,"mcreate"]);
    Route::post("/mevent/create",[EventController::class,"mstore"]);
    Route::get("/event/view",[EventController::class,"view"]);
    Route::get("/mevent/view",[EventController::class,"mview"]);
    Route::get("/event/{id}/delete",[EventController::class,"delete"]);
    Route::get("/mevent/{id}/delete",[EventController::class,"mdelete"]);
    Route::post("/event/update",[EventController::class,"update"]);
    Route::post("/mevent/update",[EventController::class,"mupdate"]);
});
