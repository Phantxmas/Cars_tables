<?php

namespace App\Http\Controllers;

use App\Models\Owner;
use Illuminate\Http\Request;

class OwnerController extends Controller
{
function index(){


        $owner=Owner::all();

        return view("owners.index",[
            "owners"=>$owner
        ]);
    }


    function filter(Request $request){
        $owner=Owner::where('name', $request->filterName)->get();


        return view("owners.index",[
            "owners"=>$owner
        ]);
    }

   function create(){
       return view("owners.create");
   }

   function store(Request $request){
       $owner=new Owner();
       $owner->name=$request->name;
       $owner->surname=$request->surname;
       $owner->phone=$request->phone;
       $owner->save();

       return redirect()->route("owner.index");
   }

   function update($id){
       $owner=Owner::find($id);

        return view("owners.update",[
            "owner"=>$owner
        ]);
   }

   function save($id, Request $request){
       $owner=Owner::find($id);
       $owner->name=$request->name;
       $owner->surname=$request->surname;
       $owner->phone=$request->phone;
       $owner->save();
        return redirect()->route("owner.index");
   }

   function delete($id){
       Owner::destroy($id);
       return redirect()->route("owner.index");
   }
}
