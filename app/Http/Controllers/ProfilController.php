<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function indexWira()
    {
    	$userid = Auth::user()->id;
    	$wira = \App\Wirausaha::where('user_id','=',$userid)->first();

    	return view('profil.wira', compact('wira'));
    }
    public function ubahInformasiNPWP(Request $req)
    {
    	if (empty($req->file('foto_npwp'))) {
    		if ($req->npwp_old == $req->nonpwp) {
	    		return redirect()->back()->with('gagal','Anda tidak melakukan perubahan apapun');
    		}else{
    			if (is_numeric($req->nonpwp)) {
	    			\App\Wirausaha::where('id','=',$req->wira_id)
	    				->update([
	    					'nonpwp' => $req->nonpwp,
	    				]);
	    			return redirect()->back()->with('sukses','Berhasil mengubah Nomor NPWP');			
    			}else{
		    		return redirect()->back()->with('gagal','Nomor NPWP harus berupa angka');
    			}
    		}
    	}else{
			if (is_numeric($req->nonpwp)) {

		        $a1 = $req->file('foto_npwp')->getClientOriginalName();

				if ((strpos($a1, "jpg") || strpos($a1, "jpeg") || strpos($a1, "png") || strpos($a1, "JPG"))===false) {
				            return redirect()->back()->with('gagal','Foto NPWP harus berupa PNG, JPEG, JPG');
		        }else{
					$tempatfile = ('bukti');

		            $gbr = $req->file('foto_npwp');
		            $nama_gbr = $gbr->getClientOriginalName();
		            $gbr->move($tempatfile, $nama_gbr);

		            \App\Wirausaha::where('id','=',$req->wira_id)
		    				->update([
		    					'nonpwp' => $req->nonpwp,
		    					'foto_npwp' => $nama_gbr,
		    				]);

		    		return redirect()->back()->with('sukses','Berhasil mengubah informasi NPWP');		
		        }		
    		}else{
	    		return redirect()->back()->with('gagal','Nomor NPWP harus berupa angka');    			
    		}	    		
    	}
    }
    public function ubahInformasiKTP(Request $req)
    {
    	if (empty($req->file('foto_ktp'))) {
    		if ($req->ktp_old == $req->noktp) {
	    		return redirect()->back()->with('gagal','Anda tidak melakukan perubahan apapun');
    		}else{
    			if (is_numeric($req->noktp)) {
	    			\App\Wirausaha::where('id','=',$req->wira_id)
	    				->update([
	    					'noktp' => $req->noktp,
	    				]);
	    			return redirect()->back()->with('sukses','Berhasil mengubah Nomor KTP');			
    			}else{
		    		return redirect()->back()->with('gagal','Nomor KTP harus berupa angka');
    			}
    		}
    	}else{
			if (is_numeric($req->noktp)) {

		        $a1 = $req->file('foto_ktp')->getClientOriginalName();

				if ((strpos($a1, "jpg") || strpos($a1, "jpeg") || strpos($a1, "png") || strpos($a1, "JPG"))===false) {
				            return redirect()->back()->with('gagal','Foto KTP harus berupa PNG, JPEG, JPG');
		        }else{
					$tempatfile = ('bukti');

		            $gbr = $req->file('foto_ktp');
		            $nama_gbr = $gbr->getClientOriginalName();
		            $gbr->move($tempatfile, $nama_gbr);

		            \App\Wirausaha::where('id','=',$req->wira_id)
		    				->update([
		    					'noktp' => $req->noktp,
		    					'foto_ktp' => $nama_gbr,
		    				]);

		    		return redirect()->back()->with('sukses','Berhasil mengubah informasi KTP');		
		        }		
    		}else{
	    		return redirect()->back()->with('gagal','Nomor KTP harus berupa angka');    			
    		}	    		
    	}
    }


    public function ubahInformasiBPJSKetenagakerjaan(Request $req)
    {
    	if (empty($req->file('foto_bpjs_ketenagakerjaan'))) {
    		if ($req->bpjs_ketenagakerjaan_old == $req->bpjs_ketenagakerjaan) {
	    		return redirect()->back()->with('gagal','Anda tidak melakukan perubahan apapun');
    		}else{
    			if (is_numeric($req->bpjs_ketenagakerjaan)) {
	    			\App\Wirausaha::where('id','=',$req->wira_id)
	    				->update([
	    					'bpjs_ketenagakerjaan' => $req->bpjs_ketenagakerjaan,
	    				]);
	    			return redirect()->back()->with('sukses','Berhasil mengubah Nomor BPJS Ketenagakerjaan');			
    			}else{
		    		return redirect()->back()->with('gagal','Nomor BPJS Ketenagakerjaan harus berupa angka');
    			}
    		}
    	}else{
			if (is_numeric($req->bpjs_ketenagakerjaan)) {

		        $a1 = $req->file('foto_bpjs_ketenagakerjaan')->getClientOriginalName();

				if ((strpos($a1, "jpg") || strpos($a1, "jpeg") || strpos($a1, "png") || strpos($a1, "JPG"))===false) {
				            return redirect()->back()->with('gagal','Foto BPJS Ketenagakerjaan harus berupa PNG, JPEG, JPG');
		        }else{
					$tempatfile = ('bukti');

		            $gbr = $req->file('foto_bpjs_ketenagakerjaan');
		            $nama_gbr = $gbr->getClientOriginalName();
		            $gbr->move($tempatfile, $nama_gbr);

		            \App\Wirausaha::where('id','=',$req->wira_id)
		    				->update([
		    					'bpjs_ketenagakerjaan' => $req->bpjs_ketenagakerjaan,
		    					'foto_bpjs_ketenagakerjaan' => $nama_gbr,
		    				]);

		    		return redirect()->back()->with('sukses','Berhasil mengubah informasi BPJS Ketenagakerjaan');		
		        }		
    		}else{
	    		return redirect()->back()->with('gagal','Nomor BPJS Ketenagakerjaan harus berupa angka');    			
    		}	    		
    	}
    }

    public function ubahInformasiBPJSKesehatan(Request $req)
    {
    	if (empty($req->file('foto_bpjs_kesehatan'))) {
    		if ($req->bpjs_kesehatan_old == $req->bpjs_kesehatan) {
	    		return redirect()->back()->with('gagal','Anda tidak melakukan perubahan apapun');
    		}else{
    			if (is_numeric($req->bpjs_kesehatan)) {
	    			\App\Wirausaha::where('id','=',$req->wira_id)
	    				->update([
	    					'bpjs_kesehatan' => $req->bpjs_kesehatan,
	    				]);
	    			return redirect()->back()->with('sukses','Berhasil mengubah Nomor BPJS Kesehatan');			
    			}else{
		    		return redirect()->back()->with('gagal','Nomor BPJS Kesehatan harus berupa angka');
    			}
    		}
    	}else{
			if (is_numeric($req->bpjs_kesehatan)) {

		        $a1 = $req->file('foto_bpjs_kesehatan')->getClientOriginalName();

				if ((strpos($a1, "jpg") || strpos($a1, "jpeg") || strpos($a1, "png") || strpos($a1, "JPG"))===false) {
				            return redirect()->back()->with('gagal','Foto BPJS Kesehatan harus berupa PNG, JPEG, JPG');
		        }else{
					$tempatfile = ('bukti');

		            $gbr = $req->file('foto_bpjs_kesehatan');
		            $nama_gbr = $gbr->getClientOriginalName();
		            $gbr->move($tempatfile, $nama_gbr);

		            \App\Wirausaha::where('id','=',$req->wira_id)
		    				->update([
		    					'bpjs_kesehatan' => $req->bpjs_kesehatan,
		    					'foto_bpjs_kesehatan' => $nama_gbr,
		    				]);

		    		return redirect()->back()->with('sukses','Berhasil mengubah informasi BPJS Kesehatan');		
		        }		
    		}else{
	    		return redirect()->back()->with('gagal','Nomor BPJS Kesehatan harus berupa angka');    			
    		}	    		
    	}
    }

    public function ubahInformasiFormal(Request $req)
    {
    	if (empty($req->file('foto_formal'))) {
    		if (($req->nama_lengkap_old == $req->nama_lengkap) && ($req->email_old == $req->email)  && ($req->nohp_old == $req->nohp) && ($req->username_old == $req->username) ) {
	    		return redirect()->back()->with('gagal','Anda tidak melakukan perubahan apapun');
    		}else{
    			if (is_numeric($req->nohp)) {
	    			
	    			$user = \App\Wirausaha::where('id','=',$req->wira_id)->first();
	
	    			\App\Wirausaha::where('id','=',$req->wira_id)
	    				->update([
	    					'nohp' => $req->nohp,
	    					'username' => $req->username,
	    					'nama_lengkap' => $req->nama_lengkap,
	    				]);
	    			\App\User::where('id','=',$user->user_id)
	    				->update([
	    					'name' => $req->nama_lengkap,
	    					'email' => $req->email,
	    				]);	
	    			return redirect()->back()->with('sukses','Berhasil mengubah Informasi Diri');			
    			}else{
		    		return redirect()->back()->with('gagal','Nomor HP harus berupa angka');
    			}
    		}
    	}else{
			if (is_numeric($req->nohp)) {

		        $a1 = $req->file('foto_formal')->getClientOriginalName();

				if ((strpos($a1, "jpg") || strpos($a1, "jpeg") || strpos($a1, "png") || strpos($a1, "JPG"))===false) {
				            return redirect()->back()->with('gagal','Foto Formal harus berupa PNG, JPEG, JPG');
		        }else{
					$tempatfile = ('bukti');

		            $gbr = $req->file('foto_formal');
		            $nama_gbr = $gbr->getClientOriginalName();
		            $gbr->move($tempatfile, $nama_gbr);

		            $user = \App\Wirausaha::where('id','=',$req->wira_id)->first();
	
	    			\App\Wirausaha::where('id','=',$req->wira_id)
	    				->update([
	    					'foto_formal' => $nama_gbr,
	    					'nohp' => $req->nohp,
	    					'username' => $req->username,
	    					'nama_lengkap' => $req->nama_lengkap,
	    				]);
	    			\App\User::where('id','=',$user->user_id)
	    				->update([
	    					'name' => $req->nama_lengkap,
	    					'email' => $req->email,
	    				]);	

		    		return redirect()->back()->with('sukses','Berhasil mengubah informasi Data Diri');		
		        }		
    		}else{
	    		return redirect()->back()->with('gagal','Nomor HP harus berupa angka');    			
    		}	    		
    	}
    }

    public function indexHumas()
    {
    	$user = Auth::user()->id;
    	$humas = \App\Humas::where('user_id','=',$user)->first();
		return view('profil.humas',compact('humas'));
    }
    public function updateHumas(Request $req)
    {
    	if (empty($req->file('foto'))) {
    		if (!is_numeric($req->nip)) {
	    		return redirect()->back()->with('gagal','NIP harus berupa Angka !');	    			
    		}else{
    			if (!is_numeric($req->nama_lengkap)) {
    				\App\Humas::where('id','=',$req->idHumas)
    				->update([
    					'nama_lengkap' => $req->nama_lengkap,
    					'nip' => $req->nip,	
    				]);
	    			\App\User::where('id','=',$req->idUser)
	    				->update([
	    					'name' => $req->nama_lengkap,
	    					'email' => $req->email,
	    				]);	
	    			return redirect()->back()->with('sukses','berhasil merubah data');
		    		
		    	}else{
    			return redirect()->back()->with('gagal','Nama Lengkap harus berupa huruf !');
    		}
	    	}
    	}else{
	        $a1 = $req->file('foto')->getClientOriginalName();

    		if (!is_numeric($req->nip)) {
	    		return redirect()->back()->with('gagal','NIP harus berupa Angka !');	    			
    		}else{
    			if (!is_numeric($req->nama_lengkap)) {

    				if ((strpos($a1, "jpg") || strpos($a1, "jpeg") || strpos($a1, "png") || strpos($a1, "JPG"))===false) {
				            return redirect()->back()->with('gagal','Foto KTP harus berupa PNG, JPEG, JPG');
			        }else{
			        	$tempatfile = ('bukti');

			            $gbr1 = $req->file('foto');
			            $nama_gbr1 = $a1;
			            $gbr1->move($tempatfile, $nama_gbr1);
	    				
	    				\App\Humas::where('id','=',$req->idHumas)
	    				->update([
	    					'foto' => $nama_gbr1,
	    					'nama_lengkap' => $req->nama_lengkap,
	    					'nip' => $req->nip,	
	    				]);
		    			\App\User::where('id','=',$req->idUser)
		    				->update([
		    					'name' => $req->nama_lengkap,
		    					'email' => $req->email,
		    				]);	
	    			return redirect()->back()->with('sukses','berhasil merubah data');
			        }
		    	}else{
    			return redirect()->back()->with('gagal','Nama Lengkap harus berupa huruf !');
    		}
	    	}
    	}
    }
}
