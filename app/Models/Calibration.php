<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calibration extends Model
{
    use HasFactory;
    protected $fillable = [
        'no_kalibrasi', 'id_alat', 'tanggal_kalibrasi', 'petugas_penerima',
        'petugas_menyerahkan', 'thl_berakhirnya_masa_kalibrasi', 'ket_kalibrasi'
    ];
}
