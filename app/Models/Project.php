<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = "projects";
    protected $fillable = ["nama_kegiatan", "slug", "foto", "tanggal_kegiatan", "lokasi_kegiatan", "deskripsi","tempat_kumpul", "batas_registrasi", "link"];
}
