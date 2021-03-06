<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Akta_Kelahiran extends Model
{
    use HasFactory;

    protected $table = 'akta_kelahiran';

    protected $primaryKey = 'nik';

    protected $fillable = [
        'NIK',
        'nama_lengkap',
        'jenis_kelamin',
        'tempat_lahir',
        'tanggal_waktu_lahir',
        'tempat_dilahirkan',
        'jenis_kelahiran',
        'kelahiran_ke',
        'penolong_kelahiran',
        'berat',
        'tinggi',
        'no_KK',
        'nama_kepala_keluarga',
        'noHP'
    ];
}