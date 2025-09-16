<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuAurumDining extends Model
{
    use HasFactory;

    protected $table = 'menu_aurum_dining';

    protected $fillable = [
        'nama_menu',
        'deskripsi_menu',
        'harga',
        'asset',
    ];
}
