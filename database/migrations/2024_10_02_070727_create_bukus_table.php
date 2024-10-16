<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bukus', function (Blueprint $table) {
            $table->id();
            $table->string('judul', 50);
            // $table->string('penulis');
            $table->string('penerbit');
            $table->text('sinopsis');
            $table->date('tahun');
            $table->integer("stok");
            $table->enum("status", ["Tersedia", "Tidak Tersedia"]);
            $table->foreignIdFor(App\Models\Penulis::class, 'penulis_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bukus');
    }
};