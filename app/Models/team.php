<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class team extends Model
{
    protected $table = 'teams';
    protected $primaryKey = 'id_team';

    protected $fillable = [
        'nama',
        'foto',
    ];
}
