<?php

namespace App\Http\Controllers\proj;

use App\Http\Controllers\Controller;
use App\Models\Properties;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
class CreateProperty extends Controller
{
    public function index(Request $request) {
        return view('accueil.add');
    }
    public function store(Request $request){
        
        $property=new Properties;
        $property->id_user=Auth::user()->id;
        $property->type=$request->input('type');
        $property->name=$request->input('name');
        $property->rent_sale=$request->input('rent_sale');
        $property->location=$request->input('location');
        $property->price=$request->input('price');
        $property->area=$request->input('area');
        $property->nb_rooms=$request->input('nb_rooms');
        $property->photo=$request->input('photo');
        $property->description=$request->input('description');
        $property->save();
        return redirect('/add')->with('status','Property Added');
    }
}
