<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tool extends Model
{
    use HasFactory;
    protected $fillable = [
        'nomer_alat', 'nama_alat', 'spek_alat', 'lokasi', 'kondisi_alat',
        'harga', 'keterangan', 'image'
    ];
}
