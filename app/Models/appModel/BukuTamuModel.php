<?php

namespace App\Models\appModel;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BukuTamuModel extends Model
{
    use HasFactory;
    protected $table = 'buku_tamu';
    protected $fillable = ['nama', 'alamat', 'asal', 'no_hp', 'tujuan_kunjungan'];
}
