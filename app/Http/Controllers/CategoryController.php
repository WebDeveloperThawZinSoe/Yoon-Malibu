<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

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
}
