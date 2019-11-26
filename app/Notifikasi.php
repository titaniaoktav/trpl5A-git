<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notifikasi extends Model
{
    protected $table = 'notifikasi';
    protected $fillable = ['id','usaha_id','wirausaha_id','isi','isread'];

    public function wirausaha()
    {
    	return $this->belongsTo('App\Wirausaha');
    }
}
