<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kontak extends Model
{
    use SoftDeletes;

    protected $table = "kontak";
    protected $fillable = ["nama", "email", "subject", "message"];
}
