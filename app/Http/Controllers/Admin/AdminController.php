<?php

namespace App\Http\Controllers\Admin;

use App\LogActivity;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Session;

class AdminController extends Controller
{
    public function index()
    {
    	return view('Admin.dashboard');
    }

    
    public function profile()
    {
    	return view('Admin.profile');
    }

    public function password(Request $request)
    {
    	$id = Auth::user()->id;
    	$request->validate([
            'old_password' => ['required','min:8'],
            'new_password' => ['required','max:255','min:8'],
            'password_confirmation' => ['required','max:255','min:8'],
        ]);
    	$db_pass = Auth::user()->password;
    	$old_pass = $request->old_password;
    	$new_pass = $request->new_password;
    	$con_pass = $request->password_confirmation;
    	

    	if(Hash::check($old_pass, $db_pass)) {
    		if ($new_pass === $con_pass) {
    			User::find($id)->update([
    				'password'=> Hash::make($request->new_password)
    			]);
    			Auth::logout();
    			Session::flash('pmsg','Password Change Success!!');
	    			Session::flash('css','success');
	        		return back();
    			
    		}else{
    			Session::flash('pmsg','Confirmation Password Not Match!!');
    			Session::flash('css','danger');
        		return back();
    		}
    	}else{
    		Session::flash('pmsg','Password Not Match!!');
    		Session::flash('css','danger');
        	return back();
    	}
    }
}
