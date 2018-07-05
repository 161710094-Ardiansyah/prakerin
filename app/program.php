<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class program extends Model
{
    protected $table = 'program';

	protected $fillable1 = array('judul', 'gambar', 'deskripsi','kategori_id');

    public function Kategori()
    {
    	return $this->belongsTo('App\Kategori','kategori_id');
    }
}
