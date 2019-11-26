<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Humas extends Model
{
    protected $table = 'humas_ptsp';
    protected $fillable = ['id','user_id','nama_lengkap','nip','foto'];

    public function getAvatar()
    {
    	if (!$this->foto) {
    		return asset('default-profil.jpg');
    	}
    	return asset('bukti/'.$this->foto);
    }

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
