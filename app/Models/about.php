<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class about extends Model
{
    protected $table = 'abouts';
    protected $primaryKey = 'id_about';

    protected $fillable = [
        'judul',
        'deskripsi',
        'foto',
    ];
}
