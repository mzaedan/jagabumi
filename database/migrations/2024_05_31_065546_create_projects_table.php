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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kegiatan');
            $table->string('slug');
            $table->string('foto');
            $table->string('tanggal');
            $table->string('tempat');
            $table->string('deskripsi');
            $table->string('tempat kumpul');
            $table->string('batas registrasi');
            $table->string('link');
            $table->string('project_status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};