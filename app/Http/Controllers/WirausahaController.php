<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WirausahaController extends Controller
{
    public function index()
    {
    return view('wirausahawan.register');
    }
    public function create(Request $req)
    {
    $cek = \App\User::select("*")
            ->where('email','=',$req->email)
            ->first();
        if (!empty($cek)) {
            return redirect()->back()->with('gagal','Maaf Email dan Password sudah ada. Silahkan pakai email lain');
        }else if ($req->password1 !== $req->password2) {
        return redirect()->back()->with('gagal','Passwrd tidak sesuai');
        }

        else if (!is_numeric($req->nohp)) {
            return redirect()->back()->with('gagal','Nomor HP harus berupa angka');
        }

        else if (!is_numeric($req->noktp)) {
            return redirect()->back()->with('gagal','Nomor KTP harus berupa angka');
        }

        else if (!is_numeric($req->nonpwp)) {
            return redirect()->back()->with('gagal','Nomor NPWP harus berupa angka');
        }

        else if (!is_numeric($req->bpjs_ketenagakerjaan)) {
            return redirect()->back()->with('gagal','Nomor BPJS Ketenagakerjaan harus berupa angka');
        }

        else if (!is_numeric($req->bpjs_kesehatan)) {
            return redirect()->back()->with('gagal','Nomor BPJS kesehatan harus berupa angka');
        }

        // FOTO VALIDASI
        $a1 = $req->file('foto_ktp')->getClientOriginalName();
        $a2 = $req->file('foto_npwp')->getClientOriginalName();
        $a3 = $req->file('foto_formal')->getClientOriginalName();
        $a4 = $req->file('foto_bpjs_ketenagakerjaan')->getClientOriginalName();
        $a5 = $req->file('foto_bpjs_kesehatan')->getClientOriginalName();

        if ((strpos($a1, "jpg") || strpos($a1, "jpeg") || strpos($a1, "png") || strpos($a1, "JPG"))===false) {
            return redirect()->back()->with('gagal','Foto KTP harus berupa PNG, JPEG, JPG');
        }

        else if ((strpos($a4, "jpg") || strpos($a4, "jpeg") || strpos($a4, "png") || strpos($a4, "JPG"))===false) {
            return redirect()->back()->with('gagal','Foto BPJS Ketenagakerjaan harus berupa PNG, JPEG, JPG');
        }

        else if ((strpos($a5, "jpg") || strpos($a5, "jpeg") || strpos($a5, "png") || strpos($a5, "JPG"))===false) {
            return redirect()->back()->with('gagal','Foto BPJS kesehatan harus berupa PNG, JPEG, JPG');
        }

        else if ((strpos($a3, "jpg") || strpos($a3, "jpeg") || strpos($a3, "png") || strpos($a3, "JPG"))===false) {
            return redirect()->back()->with('gagal','Foto Formal harus berupa PNG, JPEG, JPG');
        }

        else if ((strpos($a2, "jpg") || strpos($a2, "jpeg") || strpos($a2, "png") || strpos($a2, "JPG"))===false) {
            return redirect()->back()->with('gagal','Foto NPWP harus berupa PNG, JPEG, JPG');
        }
        else{
            $tempatfile = ('bukti');

            $gbr1 = $req->file('foto_ktp');
            $nama_gbr1 = $a1;
            $gbr1->move($tempatfile, $nama_gbr1);

            $gbr2 = $req->file('foto_npwp');
            $nama_gbr2 = $a2;
            $gbr2->move($tempatfile, $nama_gbr2);

            $gbr3 = $req->file('foto_bpjs_ketenagakerjaan');
            $nama_gbr3 = $a3;
            $gbr3->move($tempatfile, $nama_gbr3);

            $gbr4 = $req->file('foto_bpjs_kesehatan');
            $nama_gbr4 = $a4;
            $gbr4->move($tempatfile, $nama_gbr4);

            $gbr5 = $req->file('foto_formal');
            $nama_gbr5 = $a5;
            $gbr5->move($tempatfile, $nama_gbr5);


        $w = new \App\User;
        $w->role = 'wirausahawan';
        $w->id = mt_rand(1000,9999);
        \App\Wirausaha::create([
        'id' => mt_rand(10000,99999),
        'user_id' => $w->id,
        'nama_lengkap' => $req->nama_lengkap,
        'username' => $req->username,
        'nohp' => $req->nohp,
        'noktp' => $req->noktp,
        'nonpwp' => $req->nonpwp,
        'bpjs_ketenagakerjaan' => $req->bpjs_ketenagakerjaan,
        'bpjs_kesehatan' => $req->bpjs_kesehatan,
                'foto_ktp' => $nama_gbr1,
                'foto_npwp' => $nama_gbr2,
                'foto_bpjs_ketenagakerjaan' => $nama_gbr3,
                'foto_bpjs_kesehatan' => $nama_gbr4,
                'foto_formal' => $nama_gbr5,
        ]);
        $w->name = $req->nama_lengkap;
        $w->email = $req->email;
        $w->password = bcrypt($req->password2);
        $w->save();

        return redirect('/produk-unggulan')->with('sukses','Berhasil melakukan registrasi');
        }
    }
}