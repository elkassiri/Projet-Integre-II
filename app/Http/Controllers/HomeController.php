<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Contact;
use App\Models\Immobilier;
use App\Models\Properties;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Query\JoinClause;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $prop=DB::table('users')
        ->join('immobiliers', function ($join) {
            $join->on('users.id', '=', 'immobiliers.id_user')
                 ->where('immobiliers.id_user', '=', Auth::user()->id);
        })
        ->get();
        return view('home2',compact('prop'));
    }
    public function profileupdate(Request $request)
    {
        $user_id=Auth::user()->id;
        $user=User::find($user_id);
        $user->fname=$request->input('fname');
        $user->lname=$request->input('lname');
        $user->country=$request->input('country');
        $user->phone=$request->input('phone');
        $user->email=$request->input('mail');

        $user->update();
        return redirect()->back()->with('status','profile updated');
    }
    public function contact(Request $request){
        $contacts=Contact::where('id_prop','=',$request->id)->get();
        return view('accueil.contact',compact('contacts'));
    }
     public function edit($id)
    {
        $properties=Properties::find($id);
        return view('accueil.property.edit',compact('properties','id'));
         //   ->with('properties',$properties)
           // ;
    }
    public function update(Request $request,$id){
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
        return redirect('/home2')->with('status','Data updated for property');
    }
    public function delete($id){
        $properties=Properties::find($id);
        $properties->delete();
        Session::flash('statuscode','error');
        return redirect('/home2')->with('status','Data deleted for property');

    }
}
