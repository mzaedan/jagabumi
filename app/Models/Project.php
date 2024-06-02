<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Project extends Model
{
    use SoftDeletes;

    protected $table = "project";
    protected $fillable = ["nama_kegiatan", "slug", "lokasi", "foto", "tanggal", "lokasi_kegiatan", "deskripsi","tempat_kumpul", "batas_registrasi", "link", "status_project"];
}
