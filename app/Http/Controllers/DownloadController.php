<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DownloadController extends Controller
{
    public function onDownload()
    {
    	$result = Storage::download('file/bcms.apk');
    	return $result;
    }



}
