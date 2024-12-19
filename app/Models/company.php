<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class company extends Model
{
    protected $table = 'companies';
    protected $primaryKey = 'id_company';

    protected $fillable = [
        'nama_perusahaan',
        'judul',
        'deskripsi',

    ];
}
