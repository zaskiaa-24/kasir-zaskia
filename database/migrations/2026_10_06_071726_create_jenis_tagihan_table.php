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
        Schema::create('jenis_tagihan', function (Blueprint $table) {
            $table->id();
            $table->string('kode_tagihan', 20)->unique();
            $table->string('nama_tagihan', 100);
            $table->decimal('nominal', 15, 2);
            $table->string('periode', 50);
            $table->text('keterangan')->nullable();
            $table->enum('status', ['aktif', 'non-aktif'])->default('aktif');
            $table->timestamp('created_at', 6);
            $table->timestamp('updated_at', 6);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jenis_tagihan');
    }
};
