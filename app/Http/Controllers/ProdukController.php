<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
    	$fav = \App\Favorit::All();
    	return view('favorit.index', compact('fav'));
    }
    public function indexxes()
    {
    	return redirect('/beranda');
    }
    public function detail($id)
    {
    	$data = \App\Favorit::where('id','=',$id)->first();
    	return view('favorit.detail',compact('data'));
    }
    public function produkUnggul()
    {
        $userid = Auth::user()->id;
        $wira = \App\Wirausaha::where('user_id','=',$userid)->first();
        
        $fav = \App\Favorit::All();
        return view('favorit.index-pre', compact('fav','wira'));
    }
    public function Details($id)
    {
        $userid = Auth::user()->id;
        $wira = \App\Wirausaha::where('user_id','=',$userid)->first();

        $data = \App\Favorit::where('id','=',$id)->first();
        return view('favorit.detail-pre',compact('data','wira'));
    }
    public function test()
    {
        return view('auth.beranda');
    }
}
