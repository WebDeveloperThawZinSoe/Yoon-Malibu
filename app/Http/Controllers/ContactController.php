<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    //contact_data
    public function contact_data(){
        return view("admin.setting.underdeveloping");
    }
}
