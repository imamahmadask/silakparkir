<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jukir extends Model
{
    protected $table = 'jukirs';

    protected $fillable = [
        'nama',
        'nik',
        'tempat_lahir',
        'tgl_lahir',
        'agama',
        'alamat',
        'kel_alamat',
        'kec_alamat',
        'kab_alamat',
        'no_hp',
        'kode',
        'gender',
        'foto',
        'dokumen',
        'keterangan',
        'status',
        'tgl_terdaftar',
        'tgl_perjanjian',
        'no_perjanjian',
        'is_aktif',
        'is_nonaktif',
        'is_tunai',
        'is_non_tunai',
        'tgl_awal_tap',
        'tgl_nonaktif',
        'titik_id',
        'merchant_id'
    ];

    public function titik()
    {
        return $this->belongsTo(Titik::class);
    }

    public function merchant()
    {
        return $this->belongsTo(Merchant::class);
    }

    public function nonTunais()
    {
        return $this->hasMany(ParkirNonTunai::class, 'merchant_id', 'merchant_id');
    }   
}
