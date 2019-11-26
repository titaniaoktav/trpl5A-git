<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favorit extends Model
{
    protected $table = 'favorit';
    protected $fillable = ['id','usaha_id'];

    public function usaha()
    {
    	return $this->belongsTo('App\Usaha');
    }
}
