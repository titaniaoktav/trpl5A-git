<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HumasController extends Controller
{
    public function index()
    {
    	$humas = \App\Humas::All();
    	return view('humas.index',compact('humas'));
    }
    public function create(Request $req)
    {

        $cek = \App\User::select("*")
            ->where('email','=',$req->email)
            ->first();
        if (!empty($cek)) {
            return redirect()->back()->with('gagal','Maaf Email dan Password sudah ada. Silahkan pakai email lain');
        }else{
        	$a = new \App\User;
        	$a->role = 'humas';    	
        	$a->id = mt_rand(1000,9999);
        	\App\Humas::create([
        		'id' => mt_rand(1000,9999),
        		'user_id' => $a->id,
        		'nama_lengkap' => $req->nama_lengkap,
        		'nip' => $req->nip
        	]);
        	$a->name = $req->nama_lengkap;
        	$a->email = $req->email;
        	$a->password = bcrypt($req->password);
        	$a->save();

        	return redirect()->back()->with('sukses','Berhasil membuat akun humas PTSP');
        }
    }
    public function update(Request $req)
    {
    	\App\Humas::where('id','=',$req->idhumas)
    		->update([
    			'nama_lengkap' => $req->nama_lengkap,
    			'nip' => $req->nip,
    		]);
    	\App\User::where('id','=',$req->iduser)
    		->update([
    			'email' => $req->email,
    			'name' => $req->nama_lengkap,
    		]);	

    	return redirect()->back()->with('sukses','berhasil mengubah data humas PTSP');
    }
    public function delete(Request $req)
    {
        \App\User::where('id','=',$req->iduserTo)->delete();
        \App\Humas::where('id','=',$req->idhumasTo)->delete();

        return redirect()->back()->with('sukses','berhasil melakukan delete');
    }
}
