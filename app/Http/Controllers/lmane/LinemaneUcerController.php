<?php

namespace App\Http\Controllers\lmane;

use App\agent\Client;
use App\agent\ClientBill;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Session;

class LinemaneUcerController extends Controller
{
    public function index()
    {
    	$agent = Auth::user()->company;
        $user = Client::where('agent', $agent)->orderBy('id','DESC')->get();
    	return view('Linemane.clients.index', compact('user'));
    }
}
