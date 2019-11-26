<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DeskripsiUsaha extends Model
{
    protected $table = 'deskripsi_usaha';
    protected $fillable = ['id','usaha_id','deskripsi'];

    public function usaha()
    {
    	return $this->belongsTo('App\Usaha');
    }
}
