<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class PemohonController extends Controller
{
    public function index()
    {
    	$usaha = \App\Usaha::where('status','=','belum')
            ->whereNotIn('id', function($query){
                $query->select('usaha_id')->from('notifikasi');
            })
    		->get();

    	return view('pemohon.index', compact('usaha'));
    }
    public function cetak($id)
    {
    	$p = \App\Usaha::where('id','=',$id)->first();
 
    	$pdf = PDF::loadview('pemohon.x',['p'=>$p]);
    	return $pdf->download('laporan-penerimaan.pdf');
    }
    public function acc(Request $req)
    {
    	$n = new \App\Notifikasi;
        $n->id = mt_rand(1000000,9999999);
        $n->wirausaha_id = $req->usernya;
        $n->usaha_id = $req->idusaha;        
    	$n->isi = 'Usaha '.$req->usahanya.' telah diverifikasi';
    	$n->isread = 'no';
    	$n->save();

    	\App\Usaha::where('id','=',$req->idusaha)
    		->update([
    			'status' => 'sudah',
    		]);
    	return redirect()->back()->with('sukses','Berhasil memverifikasi pemohon');
    }

    public function detail($id)
    {
        $data = \App\Usaha::where('id','=',$id)
            ->first();
        return view('pemohon.detail', compact('data'));
    }
}
