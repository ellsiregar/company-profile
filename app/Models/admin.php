<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class admin extends Model
{

    protected $table = 'admin';
    protected $primaryKey = 'id_admin';

    protected $fillable = [
        'username',
        'password',
        'nama_admin',
        
    ];

    protected $hidden = [
        'password'
    ];
}
