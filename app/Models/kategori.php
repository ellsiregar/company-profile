<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    protected $table = 'ketegoris';
    protected $primaryKey = 'id_kategori';

    protected $fillable = [
        'nama_kategori',
    ];
}
