<?php

namespace App\Livewire\Parkir\Titik;

use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\Korlap;
use App\Models\Titik;
use Livewire\Attributes\On;
use Livewire\Attributes\Validate;
use Livewire\Component;

class TitikEdit extends Component
{
    public $titik_id;
    public $titik;

    #[Validate('required')]
    public $tgl_terdaftar, $nama, $lokasi, $gmaps, $koordinat, $sisi, $panjang_luas, $waktu_pelayanan, $hari_buka, $jenis, $kategori;
    
    public $foto, $tgl_nonaktif, $keterangan, $korlap_id, $kelurahan_id, $kecamatan_id;
    
    public $kecamatans, $kelurahans, $korlaps = [];

    public function render()
    {
        return view('livewire.parkir.titik.titik-edit');
    }

    #[On('titik-edit')]
    public function editTitik($id)
    {
        $this->titik_id = $id;
        $this->getTitik();
    }

    public function getTitik()
    {
        $this->titik = Titik::find($this->titik_id);
        $this->tgl_terdaftar = $this->titik->tgl_terdaftar;
        $this->nama = $this->titik->nama;
        $this->lokasi = $this->titik->lokasi;
        $this->gmaps = $this->titik->gmaps;
        $this->koordinat = $this->titik->koordinat;
        $this->sisi = $this->titik->sisi;
        $this->panjang_luas = $this->titik->panjang_luas;
        $this->waktu_pelayanan = $this->titik->waktu_pelayanan;
        $this->hari_buka = $this->titik->hari_buka;
        $this->jenis = $this->titik->jenis;
        $this->kategori = $this->titik->kategori;
        $this->foto = $this->titik->foto;
        $this->tgl_nonaktif = $this->titik->tgl_nonaktif;
        $this->keterangan = $this->titik->keterangan;
        $this->korlap_id = $this->titik->korlap_id;
        $this->kelurahan_id = $this->titik->kelurahan_id;
        $this->kecamatan_id = $this->titik->kecamatan_id;
    }

    public function updateTitik()
    {
        $this->validate();

        $this->titik->update([
            'tgl_terdaftar' => $this->tgl_terdaftar,
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
}
