<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class profil extends Model
{
    protected $table = 'profils';
    protected $fillable = ['judul','deskripsi'];
    public $timestamps = true;
}
