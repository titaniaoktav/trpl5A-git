<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wirausaha extends Model
{
    protected $table = 'wirausaha';
    protected $fillable = ['id','user_id','nama_lengkap','username','nohp','noktp','nonpwp','bpjs_ketenagakerjaan','bpjs_kesehatan','foto_ktp','foto_npwp','foto_bpjs_ketenagakerjaan','foto_bpjs_kesehatan','foto_formal'];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
    public function usaha()
    {
    	return $this->hasMany('App\Usaha');
    }
    public function notifikasi()
    {
        return $this->hasMany('App\Notifikasi');
    }
}
