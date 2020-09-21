<?php

namespace App\Http\Controllers\agent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Session;

class LineManeController extends Controller
{
	public function index()
	{
		$agent = Auth::user()->id;
        $linemane = User::where('agent_id', $agent)->orderBy('id','DESC')->get();
		return view('agent.linemane.index', compact('linemane'));
	}
    public function create()
    {
    	return view('agent.linemane.create');
    }

    public function formSave(Request $request)
    {
    	   	$request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email'=>['required','unique:users,email'],
            'mobile' => ['required','unique:users,mobile', 'string', 'max:12','min:11'],
        ]);
    	$agent = Auth::user()->id;
        $company = Auth::user()->company;
    	$role_id = 3;
    	$user = new User();
    	$user->name = $request->name;
    	$user->email = $request->email;
        $user->mobile = $request->mobile;
        $user->company = $company;
        $user->agent_id = $agent;
        $user->role_id = $role_id;
    	$user->password = Hash::make('12345678');
    	$user->save();

        Session::flash('msg','Biller Man Save Success!');

        return back();
    }




        public function inactive($id)
    {
    	$db_agent = User::find($id);
    	$agent = Auth::user()->id;

    if ($agent == $db_agent->company) {
     $status = 0;	
     $user = User::find($id);
     $user->status = $status;
	  $user->save();
	  Session::flash('umsg','User Inactive Success!');
        return back();
 	}else{
 		return back();
 	}
    }

    public function active($id)
    {
    	$db_agent = User::find($id);
    	$agent = Auth::user()->id;

    if ($agent == $db_agent->company) {
     $status = 1;	
     $user = User::find($id);
     $user->status = $status;
	  $user->save();
	  Session::flash('msg','User Active Success!');
        return back();
 	}else{
 		return back();
 	}
    }

    public function delete($id)
    {
    	$db_agent = User::find($id);
    	$agent = Auth::user()->id;

    if ($agent == $db_agent->agent) {	
     $user = User::find($id);
     $bill = ClientBill::find($id);
     	$user->status = 1;
        $user->delete();
	  Session::flash('umsg','User Delete Success!');
        return back();
 	}else{
 		return back();
 	}
    }
}
