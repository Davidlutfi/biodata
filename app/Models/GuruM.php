<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuruM extends Model
{
    protected $table = "guru_m_s";
    protected $fillable = ["id", "nip", "namaguru", "mapel"];
}
