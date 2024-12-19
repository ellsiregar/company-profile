<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class servis extends Model
{
    protected $table = 'servis';
    protected $primaryKey = 'id';

    protected $fillable = [
        'fasilitas',
    ];

}
