<?php

namespace App\Models;


use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ModelController extends Models
{
    public function create(){
        return view('model.create',[
            'Cars'=>Cars::all()
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $Models=new Models();
        $Models->name=$request->name;
        $Models->cars_id=$request->cars_id;
        $Models->save();

        return redirect()->route('models');
    }

    public function index(){
        return view('models.index',[
            'models'=>Models::with('cars')->get()
        ]);
    }
}
