<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SurveiModel extends Model
{
    use HasFactory;

    protected $table = 'survei_pengunjung';

    protected $fillable = [
        'nama', 'nomor_telepon', 'deskripsi_web'
    ];
}
