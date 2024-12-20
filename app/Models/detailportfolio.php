<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class detailportfolio extends Model
{
    protected $table = 'detailportfolios';
    protected $primaryKey = 'id';

    protected $fillable = [
        'deskripsi',
        'foto',

    ];
}
