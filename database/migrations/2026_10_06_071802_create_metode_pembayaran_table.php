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
        Schema::create('metode_pembayaran', function (Blueprint $table) {
            $table->id();
            $table->string('kode_metode', 20)->unique();
            $table->string('nama_metode', 50);
            $table->string('keterangan', 255)->nullable();
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
        Schema::dropIfExists('metode_pembayaran');
    }
};
