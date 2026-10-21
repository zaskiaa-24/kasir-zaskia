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
        Schema::create('guru', function (Blueprint $table) {
            $table->id();
            $table->string('nip', 20)->unique();
            $table->string('nama', 100);
            $table->string('jenis_kelamin', 10);
            $table->string('mata_pelajaran', 100);
            $table->string('no_telephone', 20)->nullable();
            $table->string('username', 50)->unique();
            $table->string('password', 255);
            $table->string('role', 50);
            $table->enum('status', ['aktif', 'nonaktif'])->default('aktif');
            $table->timestamp('created_at', 6)->nullable();
            $table->timestamp('updated_at', 6)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guru');
    }
};
