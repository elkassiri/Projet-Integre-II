<?php

namespace App\Http\Controllers\proj;

use App\Http\Controllers\Controller;
use App\Models\Immobilier;
use Illuminate\Http\Request;

class PropertiesController extends Controller
{
    public function index(){
        // SELECT * FROM immobiliers;
        $immobiliers=Immobilier::all();
        // dd($immobiliers);

        return view('accueil.properties-accueil',compact('immobiliers'));
    }
}
