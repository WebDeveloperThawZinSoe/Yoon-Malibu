<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Menu;
use App\Models\MMenu;

class MenuController extends Controller
{
    //create
    public function create(){
        $category = Category::orderBy("id","desc")->get();
        return view("admin.menu.create",compact("category"));
    }

    //store
    public function store(Request $request){
        $validated = $request->validate([
            'name' => 'required',
            'category' => 'required',
            // 'price' => 'required',
            'image' => 'required'
        ]);

         //qr
         $file = $request->image;
         $imageName = time().'.'. $file->getClientOriginalExtension();
         $file->move(public_path('/menu/'), $imageName);
         $image_path = env('APP_URL') . '/menu/'. $imageName;

         Menu::insert([
            "name" => $request->name,
            "category_id" => $request->category,
            "image" => $image_path
         ]);

         session()->flash('success', 'Menu Create Success.');
        return back();
    }

    //mcreate
    public function mcreate(){
        $category = Category::orderBy("id","desc")->get();
        return view("admin.menu.mcreate",compact("category"));
    }

    //mstore
    public function mstore(Request $request){
        $validated = $request->validate([
            'name' => 'required',
            'category' => 'required',
            // 'price' => 'required',
            'image' => 'required'
        ]);

         //qr
         $file = $request->image;
         $imageName = time().'.'. $file->getClientOriginalExtension();
         $file->move(public_path('/menu/'), $imageName);
         $image_path = env('APP_URL') . '/menu/'. $imageName;

         MMenu::insert([
            "name" => $request->name,
            "category_id" => $request->category,
            // "price" => $request->price,
            "image" => $image_path
         ]);

         session()->flash('success', 'Menu Create Success.');
        return back();
    }


    //view
    public function view(){
        $datas = Menu::orderBy("id","desc")->paginate(20);
        return view("admin.menu.view",compact("datas"));
    }

    //mview
    public function mview(){
        $datas = MMenu::orderBy("id","desc")->paginate(20);
        return view("admin.menu.mview",compact("datas"));
    }

    //delete
    public function delete($id){
        Menu::find($id)->delete();
        session()->flash('success', 'Menu For Yoon Kitchen Delete Success.');
        return back();
    }

    //delete
    public function mdelete($id){
        MMenu::find($id)->delete();
        session()->flash('success', 'Menu For Malibu Delete Success.');
        return back();
    }

}

