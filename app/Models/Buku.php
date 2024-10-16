<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'penulis',
        'penerbit',
        'sinopsis',
        'tahun',
        'stok',
        'status',
        'penulis_id',
    ];

    public function penulis()
    {
        return $this->belongsTo(Penulis::class);
    }

    public function peminjams()
    {
        return $this->hasMany(Buku::class);
    }

    public function pembacas()
    {
        return $this->belongsToMany(Pembaca::class);
    }
}
