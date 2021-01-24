<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{

    public function registered(){
        $users=User::all();
        return view('admin.role-register',compact('users'));
    }
    public function delete($id){
        $users=User::find($id);
        $users->delete();
        Session::flash('statuscode','error');
        return redirect('/role-register')->with('status','user deleted successfully');

    }
    public function registerdelete($id){
    	$users=User::find($id);
    	$users->delete();
    	 return redirect('/role-register')->with('status','user deleted successfully');

    }
}
