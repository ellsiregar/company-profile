<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class portfolio extends Model
{
    protected $table = 'portfolios';
    protected $primaryKey = 'id_portfolio';

    protected $fillable = [
        'id_kategori',
        'nama_portfolio',
        'deskripsi',
        'foto',
    ];

    public function kategori()
    {
    return $this->belongsTo(kategori::class, 'id_kategori', 'id_kategori');
    }
}
