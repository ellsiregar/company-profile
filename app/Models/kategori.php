<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    protected $table = 'kategoris';
    protected $primaryKey = 'id_kategori';

    protected $fillable = [
        'nama_kategori',
    ];

    public function portfolio()
    {
    return $this->hasMany(portfolio::class, 'id_ketegori', 'id_kategori');
    }
}
