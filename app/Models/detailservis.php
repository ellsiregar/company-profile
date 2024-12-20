<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class detailservis extends Model
{
    protected $table = 'detailservis';
    protected $primaryKey = 'id';

    protected $fillable = [
        'deskripsi',

    ];
}
