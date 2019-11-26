<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usaha extends Model
{
    protected $table = 'usaha';
    protected $fillable = ['id','wirausaha_id','nama_usaha','alamat_usaha','website_usaha','nilai_investasi','gambar_usaha','status_usaha','barang_yang_dijual','status'];

    public function wirausaha()
    {
    	return $this->belongsTo('App\Wirausaha');
        // return $this->belongsTo('App\Wirausaha');
    }
    public function notifikasi()
    {
    	return $this->hasMany('App\Notifikasi');
    }
    public function favorit()
    {
        return $this->hasMany('App\Favorit');
    }
    public function deskripsiUsaha()
    {
        return $this->hasOne('App\DeskripsiUsaha');
    }
}
