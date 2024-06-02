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
        Schema::create('project', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kegiatan');
            $table->string('slug');
            $table->string('lokasi');
            $table->string('foto');
            $table->string('tanggal');
            $table->text('deskripsi');
            $table->string('tempat_kumpul');
            $table->string('batas_registrasi');
            $table->string('link');
            $table->string('status_project');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project');
    }
};