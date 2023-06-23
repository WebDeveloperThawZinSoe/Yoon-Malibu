<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;

class AboutController extends Controller
{
    //index
    public function index(){
        return view("admin.setting.about");
    }

    //yoon_update
    public function yoon_update(Request $request){
        $about = $request->about;
        About::where("id",1)->update([
            "y_about" => $about
        ]);
        session()->flash('success', 'About Update Success.');
        return back();
    }

    //malibu_update
    public function malibu_update(Request $request){
        $about = $request->about;
        About::where("id",1)->update([
            "m_about" => $about
        ]);
        session()->flash('success', 'About Update Success.');
        return back();
    }
}
