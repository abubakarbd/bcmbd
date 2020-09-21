<?php

namespace App\Http\Controllers\agent;

use App\agent\ClientBill;
use App\agent\Client;
use App\agent\BillList;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Session;

class ClientBillController extends Controller
{
    
    public function billMonthList($month = null)
    {

        if ($month == null)
        {
            $month = date('m-Y');
        } else {
            $m = $month;
            $y = date('Y');
            $month = $m.'-'.$y;
        }

        $agent = Auth::user()->id;
      
         $bill = ClientBill::where('agent', $agent)
         ->where('bill_date', $month)
         ->orderBy('id','DESC')->get();
      
        return view('agent.clientbill.month', compact('bill'));
    }

    // Bill Pement Function
    public function create()
    {
        $agent = Auth::user()->id;
        $bill = Client::where('agent', $agent)->where('status', 1)->orderBy('id','DESC')->get();
        return view('agent.clientbill.create', compact('bill'));
    }

    // public function agentbillSave(Request $request)
    // {
    //     $id= $request->user_id;
    //     $orgDate = $request->bill_date;  
    //     $month = date("m-Y", strtotime($orgDate)); 
    //     $cb=DB::table('client_bills')->where('user_id',$id)->get();
    //     return $cb->bill_date;
    //     if($month = $db_client->bill_date){
    //         Session::flash('umsg','User Pament Allrady Exgist!');
    //         return back();
    //     }else{
    //     $agent = Auth::user()->id;
    //     $request->validate([
    //         'name' => ['required'],
    //         'mobile' => ['required'],
    //         'bill_date' => ['required'],
    //         'bill' => ['required', 'max:255','min:3'],
    //     ]);

    //     $bill = new ClientBill();
    //     $bill->user_id = $request->user_id;
    //     $bill->name = $request->name;
    //     $bill->mobile = $request->mobile;
    //     $bill->bm_mobile = $request->bm_mobile;
    //     $bill->agent = $agent; 
    //     $bill->bill_date = $month;
    //     $bill->bill = $request->bill;  
    //     $bill->save();
    //     Session::flash('msg','User Pament Success!');
    //     return back(); 
    //     }
    // }

    public function billShit()
    {
        $agent = Auth::user()->id;
        $bill = BillList::where('agent', $agent)->where('status', 1)->orderBy('id','DESC')->get();
        return view('agent.clientbill.shit', compact('bill'));
    }

    public function january(Request $request)
    {
            $m = '01';
            $y = date('Y');
        $month = $m.'-'.$y;
        $id = $request->id;
        $data['january']=1;
        $update = DB::table('bill_lists')->where('id',$id)->update($data);
        $bill = new ClientBill();
        $agent = Auth::user()->id;
        $bill->user_id = $request->id;
        $bill->name = $request->name;
        $bill->mobile = $request->mobile;
        $bill->bm_mobile = $request->bm_mobile;
        $bill->agent = $agent; 
        $bill->bill_date = $month;
        $bill->bill = $request->bill;  
        $bill->save();
          Session::flash('msg','Bill Pament Success!');
        return back();
    }

    public function february(Request $request)
    {

        $m = '02';
            $y = date('Y');
        $month = $m.'-'.$y;

        $id = $request->id;
        $data['february']=1;
        $update = DB::table('bill_lists')->where('id',$id)->update($data);

        $bill = new ClientBill();
        $agent = Auth::user()->id;
        $bill->user_id = $request->id;
        $bill->name = $request->name;
        $bill->mobile = $request->mobile;
        $bill->bm_mobile = $request->bm_mobile;
        $bill->agent = $agent; 
        $bill->bill_date = $month;
        $bill->bill = $request->bill;  
        $bill->save();
          Session::flash('msg','Bill Pament Success!');
        return back();
    }

    public function march(Request $request)
    {
        $m = '03';
            $y = date('Y');
        $month = $m.'-'.$y;

        $db_client = BillList::find($request->id);
        $db_client->march =1;
        $db_client->save();

        $bill = new ClientBill();
        $agent = Auth::user()->id;
        $bill->user_id = $request->user_id;
        $bill->name = $request->name;
        $bill->mobile = $request->mobile;
        $bill->bm_mobile = $request->bm_mobile;
        $bill->agent = $agent; 
        $bill->bill_date = $month;
        $bill->bill = $request->bill;  
        $bill->save();
          Session::flash('msg','Bill Pament Success!');
        return back();
    }

    public function april(Request $request)
    {
        $m = '04';
            $y = date('Y');
        $month = $m.'-'.$y;

        $db_client = BillList::find($request->id);
        $db_client->april =1;
        $db_client->save();

        $bill = new ClientBill();
        $agent = Auth::user()->id;
        $bill->user_id = $request->user_id;
        $bill->name = $request->name;
        $bill->mobile = $request->mobile;
        $bill->bm_mobile = $request->bm_mobile;
        $bill->agent = $agent; 
        $bill->bill_date = $month;
        $bill->bill = $request->bill;  
        $bill->save();
          Session::flash('msg','Bill Pament Success!');
        return back();
    }

    public function may(Request $request)
    {
        $m = '05';
            $y = date('Y');
        $month = $m.'-'.$y;

        $db_client = BillList::find($request->id);
        $db_client->may =1;
        $db_client->save();

        $bill = new ClientBill();
        $agent = Auth::user()->id;
        $bill->user_id = $request->user_id;
        $bill->name = $request->name;
        $bill->mobile = $request->mobile;
        $bill->bm_mobile = $request->bm_mobile;
        $bill->agent = $agent; 
        $bill->bill_date = $month;
        $bill->bill = $request->bill;  
        $bill->save();
          Session::flash('msg','Bill Pament Success!');
        return back();
    }

    public function june(Request $request)
    {
        $m = '06';
            $y = date('Y');
        $month = $m.'-'.$y;

        $db_client = BillList::find($request->id);
        $db_client->june =1;
        $db_client->save();

        $bill = new ClientBill();
        $agent = Auth::user()->id;
        $bill->user_id = $request->user_id;
        $bill->name = $request->name;
        $bill->mobile = $request->mobile;
        $bill->bm_mobile = $request->bm_mobile;
        $bill->agent = $agent; 
        $bill->bill_date = $month;
        $bill->bill = $request->bill;  
        $bill->save();
          Session::flash('msg','Bill Pament Success!');
        return back();
    }

    public function july(Request $request)
    {
        $m = '07';
            $y = date('Y');
        $month = $m.'-'.$y;

        $db_client = BillList::find($request->id);
        $db_client->july =1;
        $db_client->save();

        $bill = new ClientBill();
        $agent = Auth::user()->id;
        $bill->user_id = $request->user_id;
        $bill->name = $request->name;
        $bill->mobile = $request->mobile;
        $bill->bm_mobile = $request->bm_mobile;
        $bill->agent = $agent; 
        $bill->bill_date = $month;
        $bill->bill = $request->bill;  
        $bill->save();
          Session::flash('msg','Bill Pament Success!');
        return back();
    }

    public function august(Request $request)
    {
        $m = '08';
            $y = date('Y');
        $month = $m.'-'.$y;

        $db_client = BillList::find($request->id);
        $db_client->august =1;
        $db_client->save();

        $bill = new ClientBill();
        $agent = Auth::user()->id;
        $bill->user_id = $request->user_id;
        $bill->name = $request->name;
        $bill->mobile = $request->mobile;
        $bill->bm_mobile = $request->bm_mobile;
        $bill->agent = $agent; 
        $bill->bill_date = $month;
        $bill->bill = $request->bill;  
        $bill->save();
          Session::flash('msg','Bill Pament Success!');
        return back();
    }

    public function september(Request $request)
    {
        return ;
        $m = '09';
            $y = date('Y');
        $month = $m.'-'.$y;

        $db_client = BillList::find($request->id);
        $db_client->september =1;
        $db_client->save();

        $bill = new ClientBill();
        $agent = Auth::user()->id;
        $bill->user_id = $request->user_id;
        $bill->name = $request->name;
        $bill->mobile = $request->mobile;
        $bill->bm_mobile = $request->bm_mobile;
        $bill->agent = $agent; 
        $bill->bill_date = $month;
        $bill->bill = $request->bill;  
        $bill->save();
          Session::flash('msg','Bill Pament Success!');
        return back();
    }

    public function october(Request $request)
    {
        $m = '10';
            $y = date('Y');
        $month = $m.'-'.$y;

        $db_client = BillList::find($request->id);
        $db_client->october =1;

        $bill = new ClientBill();
        $agent = Auth::user()->id;
        $bill->user_id = $request->user_id;
        $bill->name = $request->name;
        $bill->mobile = $request->mobile;
        $bill->bm_mobile = $request->bm_mobile;
        $bill->agent = $agent; 
        $bill->bill_date = $month;
        $bill->bill = $request->bill; 

        $db_client->save(); 
        $bill->save();
          Session::flash('msg','Bill Pament Success!');
        return back();
    }

    public function november(Request $request)
    {
        $m = '11';
            $y = date('Y');
        $month = $m.'-'.$y;

        $db_client = BillList::find($request->id);
        $db_client->november =1;
        $db_client->save();

        $bill = new ClientBill();
        $agent = Auth::user()->id;
        $bill->user_id = $request->user_id;
        $bill->name = $request->name;
        $bill->mobile = $request->mobile;
        $bill->bm_mobile = $request->bm_mobile;
        $bill->agent = $agent; 
        $bill->bill_date = $month;
        $bill->bill = $request->bill;  
        $bill->save();
          Session::flash('msg','Bill Pament Success!');
        return back();
    }

    public function december(Request $request)
    {
        $m = '12';
            $y = date('Y');
        $month = $m.'-'.$y;

        $db_client = BillList::find($request->id);
        $db_client->december = 1;
        $db_client->save();

        $bill = new ClientBill();
        $agent = Auth::user()->id;
        $bill->user_id = $request->user_id;
        $bill->name = $request->name;
        $bill->mobile = $request->mobile;
        $bill->bm_mobile = $request->bm_mobile;
        $bill->agent = $agent; 
        $bill->bill_date = $month;
        $bill->bill = $request->bill;  
        $bill->save();
          Session::flash('msg','Bill Pament Success!');
        return back();
    }

}
