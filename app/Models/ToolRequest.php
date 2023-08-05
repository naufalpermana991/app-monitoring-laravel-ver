<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ToolRequest extends Model
{
    use HasFactory;
    protected $fillable = [
        'no_permintaan', 'id_alat', 'user_peminta', 'user_penyerah', 'user_penerima',
        'user_penyetuju', 'tgl_permintaan', 'status_penyetuju', 'status_penyerah',
        'status_penerima', 'tgl_kembali', 'kondisi'
    ];
}
