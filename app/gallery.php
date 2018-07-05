<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gallery extends Model
{
    protected $table = 'galleries';
    protected $fillable = ['gambar'];
    public $timestamps = true;
}


