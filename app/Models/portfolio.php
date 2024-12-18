<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class portfolio extends Model
{
    protected $table = 'portfolios';
    protected $primaryKey = 'id_portfolio';

    protected $fillable = [
        'nama_portfolio',
        'foto',
    ];
}
