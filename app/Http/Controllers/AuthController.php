<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
    	return view('auth.login');
    }
    public function postlogin(Request $request)
    {
    	if (Auth::attempt($request->only('email','password'))) {
    		return redirect('/index');
    	}
    	return redirect()->back()->with('gagal','Email atau password salah');
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/beranda');
    }
    public function role()
    {
        $role = Auth()->user()->role;
        if (Auth()->user()->role == 'admin') {
            return view('landpage.admin');
        }else if (Auth()->user()->role == 'humas') {
            return view('landpage.humas');
        }else if (Auth()->user()->role == 'wirausahawan') {
            // BRING THIS //
            $userid = Auth::user()->id;    
            $wira = \App\Wirausaha::where('user_id','=', $userid)->first();

            return view('landpage.wirausaha',compact('wira'));
        }
    }
}
