<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    //index
    public function index(){
        return view("home");
    }

    // admin_dashboard
    public function admin_dashboard(){
        return view("admin.dashboard");
    }

    //yoon
    public function yoon(){
        return view("yoon.index");
    }
}
