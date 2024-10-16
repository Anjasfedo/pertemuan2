<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembaca extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama'
    ];

    public function bukus()
    {
        return $this->belongsToMany(Buku::class);
    }
}