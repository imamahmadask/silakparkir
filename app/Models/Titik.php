<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Titik extends Model
{
    protected $table = 'titiks';

    protected $fillable = [
        'nama',
        'lokasi',
        'gmaps',
        'koordinat',
        'sisi',
        'panjang_luas',
        'waktu_pelayanan',
        'hari_buka',
        'jenis',
        'kategori',
        'foto',
        'status',
        'tgl_terdaftar',
        'tgl_nonaktif',
        'keterangan',
        'korlap_id',
        'kelurahan_id',
        'kecamatan_id'
    ];

    public function korlap()
    {
        return $this->belongsTo(Korlap::class);
    }

    public function kelurahan()
    {
        return $this->belongsTo(Kelurahan::class);
    }

    public function kecamatan()
    {
        return $this->belongsTo(Kecamatan::class);
    }

    public function jukir()
    {
        return $this->hasMany(Jukir::class);
    }
}
