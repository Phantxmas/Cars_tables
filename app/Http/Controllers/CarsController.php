<?php

namespace App\Http\Controllers;

use App\Models\Cars;
use Illuminate\Http\Request;

class CarsController extends Controller
{
    public function create(){
        return view('Cars.create');
    }

    public function store(Request $request){
        $Car=new Cars();
        $Car->name=$request->name;
        $Car->surname=$request->surname;
        $Car->save();
        return redirect()->route('Cars');
    }

    public function index(){
        return view('cars.index',[
            'cars'=>Cars::all()
        ]);
    }
}
