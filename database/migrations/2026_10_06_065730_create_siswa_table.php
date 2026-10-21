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
        Schema::create('siswa', function (Blueprint $table) {
            $table->id();
            $table->string('nis', 20)->unique();
            $table->string('nama', 100);
            $table->string('jenis_kelamin', 10);
            $table->string('alamat', 200)->nullable();
            $table->string('kelas_id', 20);
            $table->enum('status', ['aktif', 'tidak_aktif'])->default('aktif');
            $table->timestamp('created_at', 6)->nullable();
            $table->timestamp('updated_at', 6)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswa');
    }
};
