<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenerimaBansos extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'nik',
        'nomor_kk',
        'foto_ktp',
        'foto_kk',
        'umur',
        'jenis_kelamin',
        'provinsi',
        'kab_kota',
        'kecamatan',
        'kelurahan',
        'alamat',
        'rt',
        'rw',
        'penghasilan_sebelum_pandemi',
        'penghasilan_setelah_pandemi',
        'alasan_bantuan'
    ];
}
