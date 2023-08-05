<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $fillable = ['id_alat', 'nama_lokasi', 'tgl_update_lokasi', 'ket_lokasi'];
}
