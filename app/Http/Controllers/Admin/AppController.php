<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\AppModel;

class AppController extends Controller
{
    public function index()
    {
    	$app = AppModel::where('status', 1)->orderBy('id','DESC');
    	return view('admin.app.index', compact('app'));
    }
}
