<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class form extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_siswa',
        'kelas',
        'jumlah_terlambat',
        'keterangan',
        'alasan'
    ];
}
