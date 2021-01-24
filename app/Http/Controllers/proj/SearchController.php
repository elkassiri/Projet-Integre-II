<?php
namespace App\Http\Controllers\proj;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Models\Immobilier;
use Request;

class SearchController extends Controller
{
    public function index(){
    	$immobiliers=Immobilier::where(function($query){
    		$mn_price=Request::has('mn_price') ? Request::get('mn_price') : null;
    		$mx_price=Request::has('mx_price') ? Request::get('mx_price') : null;
    		$mn_area=Request::has('mn_area') ? Request::get('mn_area') : null;
    		$mx_area=Request::has('mx_area') ? Request::get('mx_area') : null;
    		$s_location=Request::has('s_location') ? Request::get('s_location'):null;
    		if(isset($mn_price) && isset($mx_price) && isset($mn_area) && isset($mx_area) ){
    			$query->where('price','>=',$mn_price)
    			->Where('price','<=',$mx_price)
    			->Where('area','>=',$mn_area)
    			->Where('area','<=',$mx_area)
    			
    			;
    		}
    	})->get();
        return view('accueil.search',compact('immobiliers'));
    }
}
