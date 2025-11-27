<?php

namespace App\Livewire\Parkir\Korlap;

use App\Models\Korlap;
use Livewire\Attributes\On;
use Livewire\Attributes\Validate;
use Livewire\Component;

class KorlapEdit extends Component
{
    public $korlap_id;
    public $korlap;
    
    #[Validate('required')]
    public $nama, $nik, $no_hp, $alamat, $status;
    
    public $foto, $keterangan;
    
    public function render()
    {
        return view('livewire.parkir.korlap.korlap-edit');
    }

    #[On('korlap-edit')]
    public function editKorlap($id)
    {
        $this->korlap_id = $id;
        $this->getKorlap();
    }

    public function getKorlap()
    {
        $this->korlap = Korlap::find($this->korlap_id);
        $this->nama = $this->korlap->nama;
        $this->nik = $this->korlap->nik;
        $this->no_hp = $this->korlap->no_hp;
        $this->alamat = $this->korlap->alamat;
        $this->status = $this->korlap->status;
    }

    public function updateKorlap()
    {
        $this->validate();

        $this->korlap->update([
            'nama' => $this->nama,
            'nik' => $this->nik,
            'no_hp' => $this->no_hp,
            'alamat' => $this->alamat,
            'status' => $this->status,
        ]);

        $this->reset();

        $this->dispatch('trigger-close-modal');
        $this->dispatch('refresh-korlap-list');
    }
}
