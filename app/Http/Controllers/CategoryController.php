<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\MCategory;

class CategoryController extends Controller
{
    //create
    public function create(){
        $datas = Category::orderBy("id","desc")->get();
        return view("admin.category.create",compact("datas"));
    }

    //store
    public function store(Request $request){

        $validated = $request->validate([
            'name' => 'required',
        ]);

        $name = $request->name;
        Category::create([
            "name"=>$name,
        ]);
        session()->flash('success', 'Category Create Success.');
        return back();
    }

    //delete 
    public function delete($id){
        Category::find($id)->delete();
        session()->flash('success', 'Category Delete Success.');
        return back();
    }

    //mcreate
    public function mcreate(){
        $datas = MCategory::orderBy("id","desc")->get();
        return view("admin.category.mcreate",compact("datas"));
    }

    //mstore
    public function mstore(Request $request){

        $validated = $request->validate([
            'name' => 'required',
        ]);

        $name = $request->name;
        MCategory::create([
            "name"=>$name,
        ]);
        session()->flash('success', 'Category For Malibu Create Success.');
        return back();
    }

    //mdelete 
    public function mdelete($id){
        MCategory::find($id)->delete();
        session()->flash('success', 'Category Delete Success.');
        return back();
    }

}
