<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    protected $table = 'contact';
    protected $primaryKey = 'id_contact';

    protected $fillable = [
        'no_tlpn',
        'email',
        'lokasi',

    ];
}
