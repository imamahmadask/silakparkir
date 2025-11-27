<?php

namespace App\Livewire\Parkir\Korlap;

use App\Models\Korlap;
use Livewire\Attributes\Validate;
use Livewire\Component;

class KorlapCreate extends Component
{
    #[Validate('required')]
    public $nama, $nik, $no_hp, $alamat, $status;
    
    public $foto, $keterangan;

    public function render()
    {
        return view('livewire.parkir.korlap.korlap-create');
    }

    public function createKorlap()
    {
        $this->validate();
        
        Korlap::create([
            'nama' => $this->nama,
            'nik' => $this->nik,
            'no_hp' => $this->no_hp,
            'alamat' => $this->alamat,
            'status' => $this->status,
            'foto' => $this->foto,
            'keterangan' => $this->keterangan,
        ]);

        $this->reset();

        $this->dispatch('trigger-close-modal');
        $this->dispatch('refresh-korlap-list');
    }
}
