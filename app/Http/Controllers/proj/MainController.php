<?php

namespace App\Http\Controllers\proj;

use App\Http\Controllers\Controller;
use App\Models\Immobilier;
use App\Models\Contact;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
    // SELECT * FROM immobiliers;
        $immobiliers=Immobilier::latest()->take(3)->get();
       // dd($immobiliers);

  return view('accueil.index',compact('immobiliers'));
    }
    public function property(Request $request){
       // dd($_GET);
       // echo "page produit";
        //SELECT * FROM immobiliers where id= ?;
        //dd($request->id);
        $immobilier=Immobilier::find($request->id);
        return view('accueil.property',compact('immobilier'));
    }
     public function store(Request $request){
        $message=new Contact;
        $message->fname=$request->input('fname');
        $message->lname=$request->input('lname');
        $message->mail=$request->input('mail');
        $message->phone=$request->input('phone');
        $message->message=$request->input('message');
        $message->id_prop=$request->input('id_prop');
        $message->save();
         return back();
    }
}
