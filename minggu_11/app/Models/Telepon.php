<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Telepon extends Model
{
    protected $table = "telepon";
 
    public function pengguna()
    {
    	return $this->belongsTo('App\Pengguna');
    }
}