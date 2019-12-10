<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class UsahaController extends Controller
{
    public function index()
    {
    	$userid = Auth::user()->id;
    	$wira = \App\Wirausaha::where('user_id','=',$userid)->first();

    	$usaha = \App\Usaha::where('wirausaha_id','=',$wira->id)
            ->orderBy('updated_at','DESC')
            ->paginate(6);
    	return view('usaha.buat', compact('usaha','wira'));
    }
    public function create(Request $req)
    {
    	if (empty($req->jenis_usaha)) {
    		return redirect()->back()->with('gagal','silahkan pilih jenis usaha, sewa atau tidak sewa');
    	}else{
    	$userid = Auth::user()->id;
    	$wira = \App\Wirausaha::where('user_id','=',$userid)->first();

    	$tempatfile = ('bukti');

        $gbr = $req->file('gambar');
        $nama_gbr = $gbr->getClientOriginalName();
        $gbr->move($tempatfile, $nama_gbr);

        $a = new \App\Usaha;
        $a->id = mt_rand(1000,9999);
        \App\DeskripsiUsaha::create([
            'id' => mt_rand(1000,9999),
            'usaha_id' => $a->id,
            'deskripsi' => $req->deskripsi,
        ]);
        $a->wirausaha_id = $wira->id;
        $a->nama_usaha = $req->nama_usaha;
        $a->alamat_usaha = $req->alamat_usaha;
        $a->website_usaha = $req->website_usaha;
        $a->nilai_investasi = $req->nilai_investasi;
        $a->gambar_usaha = $nama_gbr;
        $a->status_usaha = $req->jenis_usaha;
        $a->barang_yang_dijual = $req->barang;
        $a->status = 'belum';
        $a->save();


    	return redirect()->back()->with('sukses','Berhasil Mengajukan Usaha');
    }
    }
    public function update(Request $req)
    {
         if(!empty($req->file('gambar'))){
            $tempatfile = ('bukti');

            $gbr = $req->file('gambar');
            $nama_gbr = $gbr->getClientOriginalName();
            $gbr->move($tempatfile, $nama_gbr);

            \App\Usaha::where('id','=',$req->idnya)
                ->update([

                    'nama_usaha' => $req->nama_usaha,
                    'alamat_usaha' => $req->alamat_usaha,
                    'website_usaha' => $req->website_usaha,
                    'nilai_investasi' => $req->nilai_investasi,
                    'gambar_usaha' => $nama_gbr,
                    'status_usaha' => $req->jenis_usaha,
                    'barang_yang_dijual' => $req->barang,
                
                ]);
                return redirect()->back()->with('sukses','berhasil mengubah data');
        }else if(empty($req->file('gambar'))){
            \App\Usaha::where('id','=',$req->idnya)
                ->update([
                    'nama_usaha' => $req->nama_usaha,
                    'alamat_usaha' => $req->alamat_usaha,
                    'website_usaha' => $req->website_usaha,
                    'nilai_investasi' => $req->nilai_investasi,
                    'status_usaha' => $req->jenis_usaha,
                    'barang_yang_dijual' => $req->barang,
                
                ]);
                return redirect()->back()->with('sukses','berhasil mengubah data');
        }
    }
    // public function details()
    // {
    //     $userid = Auth::user()->id;
    //     wira = \App\Wirausaha::where('user_id','=',$userid)
    //     $usaha = \App\Usaha::select('*')
    //         ->where('status','=','sudah')
    //         ->where()
    //         ->get();
    //     return view('usaha.list', compact('usaha'))
    // }
    public function verified()
    {
        $userid = Auth::user()->id;

        $wira = \App\Wirausaha::where('user_id','=',$userid)->first();
        $usaha = \App\Usaha::where('wirausaha_id','=',$wira->id)
            ->where('status','=','sudah')
            ->get();
        return view('usaha.list', compact('usaha','wira'));    
    }
    public function dec(Request $req)
    {
        $n = new \App\Notifikasi;
        $n->id = mt_rand(1000000,9999999);
        $n->wirausaha_id = $req->usernya;
        $n->usaha_id = $req->idusaha;        
        $n->isi = 'Usaha '.$req->usahanya.' ' . $req->catatan;
        $n->isread = 'no';
        $n->save();
        return redirect()->back()->with('sukses','berhasil melakukan penolakan');
    }
    public function indexAdmin()
    {
        $usaha = \App\Usaha::where('status','=','sudah')->get();
        return view('usaha.usaha-done',compact('usaha'));
    }
    public function addFav(Request $req)
    {
        $cek = \App\Favorit::where('usaha_id','=',$req->idnya)
            ->first();
        if (empty($cek)) {
            \App\Favorit::create([
                'id' => mt_rand(100,999),
                'usaha_id' => $req->idnya,
            ]);
            return redirect()->back()->with('sukses','berhasil menambahkan ke produk unggulan');
        }
        else{
            return redirect()->back()->with('gagal','Usaha telah ada di dalam produk usaha'); 
        }
    }
    public function allVerified()
    {
        $usaha = \App\Usaha::where('status','=','sudah')->paginate(10);
        return view('usaha.usaha-verified',compact('usaha'));
    }
}
