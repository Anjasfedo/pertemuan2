<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penulis extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama'
    ];

    // one to one
    public function buku()
    {
        return $this->hasOne(Buku::class);
    }
}
