<?php

namespace App\Http\Controllers\agent;
use App\agent\Client;
use App\agent\ClientBill;
use App\agent\BillList;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Session;

class UserController extends Controller
{
    public function userForm()
    {
    	return view('agent.clients.create');
    }

    public function index()
    {
    	$agent = Auth::user()->id;
        $user = Client::where('agent', $agent)->orderBy('id','DESC')->get();
    	return view('agent.clients.index', compact('user'));
    }

    public function saveUser(Request $request)
    {

    	$agent = Auth::user()->id;
    	$request->validate([
            'name' => ['required', 'string', 'max:255','min:3'],
            'username' => ['required', 'string', 'max:255','min:3'],
            'type' => ['required'],
            'package' => ['required', 'max:255'],
            'mobile' => ['required', 'max:12','min:11'],
            'password' => ['required', 'max:10','min:4'],
            'ip' => ['required', 'max:20','min:4'],
            'mbill' => ['required','max:5','min:3'],
            'address' => ['required'],
        ]);
        $user = new Client();
        $user->name = $request->name;
        $user->username = $request->username;
        $user->type = $request->type;
        $user->package = $request->package;
        $user->mobile = $request->mobile;
        $user->password = $request->password;
        $user->ip = $request->ip;
        $user->mbill = $request->mbill;
        $user->address = $request->address;
        $user->agent = $agent;
		  $user->save();
		  Session::flash('msg','User Save Success!');
        return back();

    }


    public function viewUser($id)
    {
    	$db_agent = Client::find($id);
    	$agent = Auth::user()->id;

    if ($agent == $db_agent->agent) {
     $user = Client::find($id);
     return view('agent.clients.show', compact('user'));
 	}else{
 		return back();
 	}
    }

    public function editUser($id)
    {
    	$db_agent = Client::find($id);
    	$agent = Auth::user()->id;

    if ($agent == $db_agent->agent) {
     $user = Client::find($id);
     return view('agent.clients.edit', compact('user'));
 	}else{
 		return back();
 	}
    }

    public function update(Request $request)
    {

    	$agent = Auth::user()->id;
    	$request->validate([
            'name' => ['required', 'string', 'max:255','min:4'],
            'username' => ['required', 'string', 'max:255','min:2'],
            'type' => ['required'],
            'package' => ['required', 'max:255'],
            'mobile' => ['required','max:12','min:11'],
            'password' => ['required', 'max:10','min:4'],
            'ip' => ['required', 'max:20','min:4'],
            'mbill' => ['required','max:5','min:3'],
            'address' => ['required'],
        ]);
    	$user = Client::find($request->id);
    	$user->name = $request->name;
        $user->username = $request->username;
        $user->type = $request->type;
        $user->package = $request->package;
        $user->mobile = $request->mobile;
        $user->password = $request->password;
        $user->ip = $request->ip;
        $user->mbill = $request->mbill;
        $user->address = $request->address;
        $user->agent = $agent;
		  $user->save();
		  Session::flash('msg','User Update Success!');
        return back();
    }

    public function allActive($id)
    {
        $db_agent = Client::find($id);
        $agent = Auth::user()->id;

    if ($agent == $db_agent->agent) {
     
     $user = Client::find($id);
     $bill_list = new BillList();
     $bill_list->user_id = $user->id;
     $bill_list->name = $user->name;
     $bill_list->mobile = $user->mobile;
     $bill_list->agent = $user->agent;
     $bill_list->bill = $user->mbill;
     $status = 1;   
     $user->status = $status;
      $user->save();
      $bill_list->save();
      Session::flash('msg','User Active Success!');
        return back();
    }else{
        return back();
    }
    }

    public function inactive($id)
    {
    	$db_agent = Client::find($id);
    	$agent = Auth::user()->id;

    if ($agent == $db_agent->agent) {
     
     $data['status']=0;
     $update = DB::table('bill_lists')->where('user_id',$id)->update($data);
     $status = 0;   
     $user = Client::find($id);
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
    	$db_agent = Client::find($id);
    	$agent = Auth::user()->id;

    if ($agent == $db_agent->agent) {
     
     $data['status']=1;
     $update = DB::table('bill_lists')->where('user_id',$id)->update($data);
     $status = 1;   
     $user = Client::find($id);
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
    	$db_agent = Client::find($id);
    	$agent = Auth::user()->id;

    if ($agent == $db_agent->agent) {
    DB::table('bill_lists')->where('user_id',$id)->delete();	
     $user = Client::find($id);
     	$user->status = 1;
        $user->delete();
	  Session::flash('umsg','User Delete Success!');
        return back();
 	}else{
 		return back();
 	}
    }
}
