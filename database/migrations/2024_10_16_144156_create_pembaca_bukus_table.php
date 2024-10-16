<?php

use App\Models\Buku;
use App\Models\Pembaca;
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
        Schema::create('buku_pembaca', function (Blueprint $table) {
            // $table->id();
            // $table->timestamps();
            $table->foreignIdFor(Pembaca::class, 'pembaca_id')->constrained()->onDelete('cascade');
            $table->foreignIdFor(Buku::class, 'buku_id')->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembaca_bukus');
    }
};