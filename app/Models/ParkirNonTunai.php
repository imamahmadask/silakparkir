<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ParkirNonTunai extends Model
{
    protected $table = 'parkir_non_tunais';
    
    protected $fillable = [
        'trx_id',
        'merchant_id',
        'tgl_transaksi',
        'bulan',
        'tahun',
        'issuer_name',
        'sender_name',
        'jumlah',
        'status',
        'file_name',
        'settlement',
        'area_id',
    ];

    public function merchant()
    {
        return $this->belongsTo(Merchant::class);
    }

    public function kecamatan()
    {
        return $this->belongsTo(Kecamatan::class);
    }
}
