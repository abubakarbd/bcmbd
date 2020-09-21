<?php

namespace App\Http\Controllers\lmane;

use App\agent\ClientBill;
use App\agent\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Session;

class BillController extends Controller
{
    public function create()
    {

    	$agent = Auth::user()->company;
        $bill = Client::where('agent', $agent)->where('status', 1)->orderBy('id','DESC')->get();
    	return view('Linemane.bill.create', compact('bill'));
    }

    public function billSave(Request $request)
    {
 		$agent = Auth::user()->company;
    	$request->validate([
            'name' => ['required'],
            'mobile' => ['required'],
            'bill_date' => ['required'],
            'bill' => ['required', 'max:255','min:3'],
        ]);

        $bill = new ClientBill();
        $bill->user_id = $request->user_id;
        $bill->name = $request->name;
        $bill->mobile = $request->mobile;
        $bill->agent = $agent; 
        $bill->bill_date = $request->bill_date;
        $bill->bill = $request->bill;  
        $bill->save();
	    Session::flash('msg','User Pament Success!');
        return back();
    }
}
