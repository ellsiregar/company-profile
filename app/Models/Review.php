<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $primaryKey = 'id_review';
    protected $fillable = [
        'name',
        'email',
        'rating',
        'pesan',
    ];
}
