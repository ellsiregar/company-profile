<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class menu extends Model
{
    protected $table = 'menus';
    protected $primaryKey = 'id_menu';

    protected $fillable = [
        'nama_menu',
        'foto',

    ];
}
