<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Properties;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PropertiesController extends Controller
{
    public function  index(){
        $properties=Properties::all();
        return view('admin.properties')->with('properties',$properties);
    }
    public function store(Request $request){
        $property=new Properties;
        $property->id_user=$request->input('id_user');
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
        Session::flash('statuscode','success');
        return redirect('/properties')->with('status','Property Added');

    }
    public function editprp($id)
    {
        $properties=Properties::find($id);
        return view('admin.properties.edit',compact('properties','id'));
         //   ->with('properties',$properties)
           // ;
    }
    public function updateprp(Request $request,$id){
        $properties=Properties::find($id);

        $properties->id_user=$request->input('id_user');
        $properties->type=$request->input('type');
        $properties->name=$request->input('name');
        $properties->rent_sale=$request->input('rent_sale');
        $properties->location=$request->input('location');
        $properties->price=$request->input('price');
        $properties->area=$request->input('area');
        $properties->nb_rooms=$request->input('nb_rooms');
        $properties->photo=$request->input('photo');
        $properties->description=$request->input('description');

        $properties->update();
        Session::flash('statuscode','info');
        return redirect('/properties')->with('status','Data updated for property');
    }
    public function deleteprp($id){
        $properties=Properties::find($id);
        $properties->delete();
        Session::flash('statuscode','error');
        return redirect('/properties')->with('status','Data deleted for property');

    }

}
