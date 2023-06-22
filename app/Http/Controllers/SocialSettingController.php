<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\msetting;

class SocialSettingController extends Controller
{
    //index
    public function index(){
        $setting = Setting::where("id",1)->first();
        $msetting = msetting::where("id",1)->first();
        return view("admin.setting.index",compact("setting","msetting"));
    }

    //yoon_update
    public function yoon_update(Request $request){
        $validated = $request->validate([
            'phone' => 'required',
            'email' => 'required',
            'time' => 'required',
            'address' => 'required',
            'lat' => 'required',
            'long' => 'required',
        ]);
        
        $phone = $request->phone;
        $email = $request->email;
        $time = $request->time;
        $address = $request->address;
        $fb = $request->facebook;
        $ig = $request->ig;
        $youtube = $request->youtube;
        $lat = $request->lat;
        $long = $request->long;
        
        Setting::where("id", 1)->update([
            "phone" => $phone,
            "email" => $email,
            "time" => $time,
            "address" => $address,
            "fb" => $fb,
            "ig" => $ig,
            "yt" => $youtube ,
            "lat" => $lat,
            "long" => $long
        ]);
        
        session()->flash('success', 'Setting Update Success.');
        return back();
    }

    //malibu_update
    public function malibu_update(Request $request){
        $validated = $request->validate([
            'phone' => 'required',
            'email' => 'required',
            'time' => 'required',
            'address' => 'required',
            'lat' => 'required',
            'long' => 'required',
        ]);
        
        $phone = $request->phone;
        $email = $request->email;
        $time = $request->time;
        $address = $request->address;
        $fb = $request->facebook;
        $ig = $request->ig;
        $youtube = $request->youtube;
        $lat = $request->lat;
        $long = $request->long;


        msetting::where("id", 1)->update([
            "phone" => $phone,
            "email" => $email,
            "time" => $time,
            "address" => $address,
            "fb" => $fb,
            "ig" => $ig,
            "yt" => $youtube,
            "lat" => $lat,
            "long" => $long
        ]);
        
        session()->flash('success', 'Setting Update Success.');
        return back();
    }
}
