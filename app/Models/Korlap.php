<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Korlap extends Model
{
    protected $table = 'korlaps';
    protected $fillable = ['nama', 'nik', 'alamat', 'no_hp', 'foto', 'status', 'keterangan'];

    public function titik()
    {
        return $this->hasMany(Titik::class);
    }
}
