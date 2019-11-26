 public function updatesNow(Request $req)
    {
        $tempatfile = ('images');
        $gbrMakanan = $req->file('gambar');
        $nama_GbrMakanan = $gbrMakanan->getClientOriginalName();
        $gbrMakanan->move($tempatfile, $nama_GbrMakanan);
        \App\Menu::where('id','=',$req->idnya)
            ->update([
                'nama_makanan' => $req->nama,
                'harga_makanan' => $req->harga,
                'gambar' => $nama_GbrMakanan,
            ]);
        return redirect()->back()->with('sukses','berhasil mengubah data menu');    
    }