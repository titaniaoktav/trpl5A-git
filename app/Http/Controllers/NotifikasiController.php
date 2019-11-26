<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class NotifikasiController extends Controller
{
    public function hasBeenRead($id)
    {
    	$userid = Auth::user()->id;
    	\App\Notifikasi::where('id','=',$id)->delete();
    	return redirect('/usaha');
    }
    
}
