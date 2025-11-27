<?php

namespace App\Livewire\Parkir\Titik;

use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\Korlap;
use App\Models\Titik;
use Livewire\Attributes\Validate;
use Livewire\Component;

class TitikCreate extends Component
{    
    #[Validate('required')]
    public $tgl_terdaftar, $nama, $lokasi, $gmaps, $koordinat, $sisi, $panjang_luas, $waktu_pelayanan, $hari_buka, $jenis, $kategori;
    
    public $foto, $tgl_nonaktif, $keterangan, $korlap_id, $kelurahan_id, $kecamatan_id;
    
    public $kecamatans, $kelurahans, $korlaps = [];

    public $status = 'Pending';

    public function render()
    {
        return view('livewire.parkir.titik.titik-create');
    }

    public function createKorlap(){
        $this->validate();

        Titik::create([
            'nama' => $this->nama,
            'lokasi' => $this->lokasi,
            'gmaps' => $this->gmaps,
            'koordinat' => $this->koordinat,
            'sisi' => $this->sisi,
            'panjang_luas' => $this->panjang_luas,
            'waktu_pelayanan' => $this->waktu_pelayanan,
            'hari_buka' => $this->hari_buka,
            'jenis' => $this->jenis,
            'kategori' => $this->kategori,
            'foto' => $this->foto,
            'status' => $this->status,
            'tgl_terdaftar' => $this->tgl_terdaftar,
            'tgl_nonaktif' => $this->tgl_nonaktif,
            'keterangan' => $this->keterangan,
            'korlap_id' => $this->korlap_id,
            'kelurahan_id' => $this->kelurahan_id,
            'kecamatan_id' => $this->kecamatan_id,
        ]);

        $this->resetExcept(['kecamatans', 'kelurahans', 'korlaps']);     

        $this->dispatch('trigger-close-modal');
        $this->dispatch('refresh-titik');       
    }

    public function mount()
    {
        $this->kecamatans = Kecamatan::all();
        $this->kelurahans = Kelurahan::all();
        $this->korlaps = Korlap::all();
    }

    public function updatedKecamatanId($kecamatanId)
    {
        $this->kelurahans = Kelurahan::where('kecamatan_id', $kecamatanId)->get();
    }
}
