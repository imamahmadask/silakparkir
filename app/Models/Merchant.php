<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Merchant extends Model
{
    protected $table = 'merchants';
    protected $fillable = ['nmid', 'nama', 'vendor', 'tgl_terdaftar', 'kecamatan_id', 'qris'];

    public function kecamatan()
    {
        return $this->belongsTo(Kecamatan::class);
    }

    public function jukir()
    {
        return $this->belongsTo(Jukir::class);
    }

    public function parkirNonTunais()
    {
        return $this->hasMany(ParkirNonTunai::class);
    }
}
