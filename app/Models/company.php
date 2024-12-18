<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class company extends Model
{
    protected $table = 'companys';
    protected $primaryKey = 'id_company';

    protected $fillable = [
        'no_tlpn',
        'email',
        'lokasi',

    ];
}
