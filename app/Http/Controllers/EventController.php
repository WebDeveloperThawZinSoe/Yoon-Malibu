<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\MEvent;

class EventController extends Controller
{
    //create
    public function create(){
        return view("admin.event.create");
    }

    //store
    public function store(Request $request){
        $validated = $request->validate([
            'name' => 'required',
            'date' => 'required',
            'description' => 'required',
            'image' => 'required'
        ]);

         //qr
         $file = $request->image;
         $imageName = time().'.'. $file->getClientOriginalExtension();
         $file->move(public_path('/event/'), $imageName);
         $image_path = env('APP_URL') . '/event/'. $imageName;

         Event::insert([
            "name" => $request->name,
            "date" => $request->date,
            "description" => $request->description,
            "image" => $image_path
         ]);

         session()->flash('success', 'Event Create Success.');
        return back();
    }
    
    //mcreate
    public function mcreate(){
        return view("admin.event.mcreate");
    }

    //mstore
    public function mstore(Request $request){
        $validated = $request->validate([
            'name' => 'required',
            'date' => 'required',
            'description' => 'required',
            'image' => 'required'
        ]);

         //qr
         $file = $request->image;
         $imageName = time().'.'. $file->getClientOriginalExtension();
         $file->move(public_path('/event/'), $imageName);
         $image_path = env('APP_URL') . '/event/'. $imageName;

         MEvent::insert([
            "name" => $request->name,
            "date" => $request->date,
            "description" => $request->description,
            "image" => $image_path
         ]);

         session()->flash('success', 'Event Create Success.');
        return back();
    }


    //view
    public function view(){
        $events = Event::orderBy("id","desc")->get();
        return view("admin.event.view",compact("events"));
    }

    //view
    public function mview(){
        $events = MEvent::orderBy("id","desc")->get();
        return view("admin.event.mview",compact("events"));
    }

    //delete
    public function delete($id){
        Event::find($id)->delete();
        session()->flash('success', 'Event For Yoon Kitchen Delete Success.');
        return back();
    }


    //mdelete
    public function mdelete($id){
        MEvent::find($id)->delete();
        session()->flash('success', 'Event For Malibu Delete Success.');
        return back();
    }

    //update
    public function update(Request $request){
        $validated = $request->validate([
            'name' => 'required',
            'date' => 'required',
            'description' => 'required',
        ]);

        $id = $request->id;

         //qr
         $file = $request->image;
         if($file == null){
            Event::where("id",$id)->update([
                "name" => $request->name,
                "date" => $request->date,
                "description" => $request->description,
             ]);
         }else{
            $imageName = time().'.'. $file->getClientOriginalExtension();
            $file->move(public_path('/event/'), $imageName);
            $image_path = env('APP_URL') . '/event/'. $imageName;
   
            Event::where("id",$id)->update([
               "name" => $request->name,
               "date" => $request->date,
               "description" => $request->description,
               "image" => $image_path
            ]);
         }


         session()->flash('success', 'Event Update Success.');
        return back();
    }

    //mupdate
    public function mupdate(Request $request){
        $validated = $request->validate([
            'name' => 'required',
            'date' => 'required',
            'description' => 'required',
        ]);

        $id = $request->id;

         //qr
         $file = $request->image;
         if($file == null){
            Event::where("id",$id)->update([
                "name" => $request->name,
                "date" => $request->date,
                "description" => $request->description,
             ]);
         }else{
            $imageName = time().'.'. $file->getClientOriginalExtension();
            $file->move(public_path('/event/'), $imageName);
            $image_path = env('APP_URL') . '/event/'. $imageName;
   
            MEvent::where("id",$id)->update([
               "name" => $request->name,
               "date" => $request->date,
               "description" => $request->description,
               "image" => $image_path
            ]);
         }


         session()->flash('success', 'Event Update Success.');
        return back();
    }
}
