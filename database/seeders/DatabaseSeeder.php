<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Buku;
use App\Models\Pembaca;
use App\Models\Peminjam;
use App\Models\Penulis;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $penulis1 = Penulis::create([
            'nama' => 'Mr. Lorem',
        ]);

        $buku1 = Buku::create([
            'judul' => 'Judul Buku',
            'penerbit' => 'Penerbit Buku',
            'tahun' => Carbon::create('2023'),
            'sinopsis' => 'Sinopsis Buku',
            'status' => 'Tersedia',
            'stok' => 10,
            'penulis_id' => $penulis1->id
        ]);

        $penulis2 = Penulis::create([
            'nama' => 'Mr. Ipsum',
        ]);

        $buku2 = Buku::create([
            'judul' => 'Judul Buku 2',
            'penerbit' => 'Penerbit Buku 2',
            'tahun' => Carbon::create('2024'),
            'sinopsis' => 'Sinopsis Buku 2',
            'status' => 'Tersedia',
            'stok' => 15,
            'penulis_id' => $penulis2->id
        ]);

        $peminjam1 = Peminjam::create([
            'nama' => 'arip',
            'buku_id' => $buku1->id // 1
        ]);

        $peminjam2 = Peminjam::create([
            'nama' => 'arip kunss',
            'buku_id' => $buku1->id // 1
        ]);

        $peminjam3 = Peminjam::create([
            'nama' => 'arip kun ss',
            'buku_id' => $buku1->id // 1
        ]);

        $peminjam4 = Peminjam::create([
            'nama' => 'anjas',
            'buku_id' => $buku2->id // 2
        ]);

        $peminjam5 = Peminjam::create([
            'nama' => 'anjas kunss',
            'buku_id' => $buku2->id // 2
        ]);

        $peminjam6 = Peminjam::create([
            'nama' => 'anjas kun ss',
            'buku_id' => $buku2->id // 2
        ]);

        // buku1, buku2

        $pembaca1 = Pembaca::create([
            'nama' => 'ropik'
        ]);

        $pembaca2 = Pembaca::create([
            'nama' => 'ropik kunssss'
        ]);

        $buku1->pembacas()->attach($pembaca1);
        $buku1->pembacas()->attach($pembaca1);
        $buku1->pembacas()->attach($pembaca2);

        $pembaca1->bukus()->attach($buku2);
        
        $pembaca2->bukus()->attach($buku1);
        $pembaca2->bukus()->attach($buku2);
    }
}