<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function wira()
    {
    	$userid = Auth::user()->id;
    	$wira = \App\Wirausaha::where('user_id','=',$userid)->first();

    	return view('test', compact('wira'));
    }
}