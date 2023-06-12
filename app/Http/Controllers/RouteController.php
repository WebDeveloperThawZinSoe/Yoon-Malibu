<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    //index
    public function index(){
        return "Home Page";
    }

    // admin_dashboard
    public function admin_dashboard(){
        return view("admin.dashboard");
    }
}
