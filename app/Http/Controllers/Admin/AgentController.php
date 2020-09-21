<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\AgentModel;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Session;

class AgentController extends Controller
{
    
      public function index()
      {
      	$agent = User::where('role_id', 2)->orderBy('id','DESC')->get();
		return view('Admin.agent.index', compact('agent'));
      }

      public function AgentForm()
      {
    	return view('Admin.agent.create');
      }

        public function AgentFormSave(Request $request)
        {
	   	$request->validate([
        'name' => ['required', 'string', 'max:255'],
        'company' => ['required', 'string', 'max:255'],
        'email'=>['required','unique:users,email'],
        'mobile' => ['required','unique:users,mobile', 'string', 'max:12','min:11'],
        ]);
    	$role_id = 2;
    	$user = new User();
    	$user->name = $request->name;
    	$user->email = $request->email;
        $user->mobile = $request->mobile;
        $user->company = $request->company;
        $user->role_id = $role_id;
    	$user->password = Hash::make('12345678');
    	$user->save();

        Session::flash('msg','Agent Save Success!');
        return back();
    }

    
    public function inactive($id)
    {
       $status = 0;   
       $user = User::find($id);
       $user->status = $status;
       $user->save();

       Session::flash('umsg','Agent Inactive Success!');
        return back();
    }

    public function active($id)
    {
        $status = 1;   
        $user = User::find($id);
        $user->status = $status;
        $user->save();

        Session::flash('msg','Agent Active Success!');
        return back();
    }

    public function delete($id)
    {
     $bill = User::find($id);
     $user->delete();
      Session::flash('umsg','Agent Delete Success!');
        return back();
    }



//Pakage List

    public function AgentFormPakage($id)
    {
        $agent = User::find($id);
        return view('Admin.agent.pakage_create', compact('agent'));
    }

    public function AgentFormPakageSave(Request $request)
    {
            $request->validate([
            'user_id' => ['required','unique:agent_models,user_id'],
            'name' => ['required'],
            'mobile' => ['required'],
            'pakage' => ['required', 'max:5', 'min:1'],
            'bill'=>['required','max:6','min:3'],
        ]);
        $Agent = new AgentModel();
        $Agent->user_id = $request->user_id;
        $Agent->name = $request->name;
        $Agent->mobile = $request->mobile;
        $Agent->pakage = $request->pakage;
        $Agent->bill = $request->bill;
        $Agent->save();

        Session::flash('msg','Agent Pakage Save Success!');
        return back();
    }


      public function pakage()
      {
        $pakage = AgentModel::where('status', 1)->orderBy('id','DESC')->get();
        return view('Admin.agent.pakage', compact('pakage'));
      }

    public function pakageEdit($id)
    {
        $pakage = AgentModel::find($id);
        return view('Admin.agent.pakage_edit', compact('pakage'));
    }

    public function pakageUpdate(Request $request)
    {
            $request->validate([
            'pakage' => ['required', 'max:5', 'min:1'],
            'bill'=>['required','max:6','min:3'],
        ]);

        $Pakage = AgentModel::find($request->id);   
        $Pakage->pakage = $request->pakage;
        $Pakage->bill = $request->bill;
        $Pakage->save();

        Session::flash('msg','Pakage Update Success!');
        return back();
    }

}
