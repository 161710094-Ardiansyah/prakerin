<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    //
    protected $table = 'kategori';

    protected $fillable = array('nama');

    public function program() {
		return $this->hasMany('App\program', 'kategori_id');}
}
