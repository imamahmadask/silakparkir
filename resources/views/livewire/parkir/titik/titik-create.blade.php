<div>
    <div wire:ignore.self class="modal fade" id="AddTitikModal" data-bs-backdrop="static" tabindex="-1"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="AddTitikModalLabel">Tambah Titik
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form wire:submit="createKorlap">
                    <div class="modal-body">                        
                        <div class="row">
                            <div class="col mb-3">
                                <label for="create-tgl-terdaftar" class="form-label">Tanggal Terdaftar</label>
                                <input type="date" wire:model="tgl_terdaftar" name="tgl_terdaftar" id="create-tgl-terdaftar"
                                    class="form-control" placeholder="Masukkan Tanggal Terdaftar" />
                                @error('tgl_terdaftar')
                                    <span class="form-text text-xs text-danger"> {{ $message }} </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <label for="create-nama" class="form-label">Titik</label>
                                <input type="text" wire:model="nama" name="nama" id="create-nama"
                                    class="form-control" placeholder="Masukkan Nama Titik" />
                                @error('nama')
                                    <span class="form-text text-xs text-danger"> {{ $message }} </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <label for="create-lokasi" class="form-label">Lokasi</label>
                                <input type="text" wire:model="lokasi" name="lokasi" id="create-lokasi"
                                    class="form-control" placeholder="Masukkan Lokasi Titik" />
                                @error('lokasi')
                                    <span class="form-text text-xs text-danger"> {{ $message }} </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <label for="create-kecamatan" class="form-label">Kecamatan</label>
                                <select wire:model.live="kecamatan_id" name="kecamatan_id" id="create-kecamatan"
                                    class="form-control">
                                    <option value="">--Pilih Kecamatan--</option>
                                    @foreach ($kecamatans as $kecamatan)
                                        <option value="{{ $kecamatan->id }}">{{ $kecamatan->nama }}</option>
                                    @endforeach
                                </select>
                                @error('kecamatan_id')
                                    <span class="form-text text-xs text-danger"> {{ $message }} </span>
                                @enderror
                            </div>
                            <div class="col mb-3">
                                <label for="create-kelurahan" class="form-label">Kelurahan</label>
                                <select wire:model="kelurahan_id" name="kelurahan_id" id="create-kelurahan"
                                    class="form-control">
                                    <option value="">--Pilih Kelurahan--</option>
                                    @foreach ($kelurahans as $kelurahan)
                                        <option value="{{ $kelurahan->id }}">{{ $kelurahan->nama }}</option>
                                    @endforeach
                                </select>
                                @error('kelurahan_id')
                                    <span class="form-text text-xs text-danger"> {{ $message }} </span>
                                @enderror
                            </div>
                        </div>  
                        <div class="row">
                            <div class="col mb-3">
                                <label for="create-jenis" class="form-label">Jenis</label>
                                <select wire:model="jenis" name="jenis" id="create-jenis"
                                    class="form-control">
                                    <option value="">--Pilih Jenis Titik--</option>
                                    <option value="TKP">TKP</option>
                                    <option value="TJU">TJU</option>
                                </select>
                                @error('jenis')
                                    <span class="form-text text-xs text-danger"> {{ $message }} </span> 
                                @enderror
                            </div>
                            <div class="col mb-3">
                                <label for="create-kategori" class="form-label">Kategori</label>
                                <select wire:model="kategori" name="kategori" id="create-kategori"
                                    class="form-control">
                                    <option value="">--Pilih Kategori--</option>
                                    <option value="Pertokoan">Pertokoan Umum</option>
                                    <option value="Taman-TKP">Taman-TKP</option>
                                    <option value="Taman-TJU">Taman-TJU</option>
                                    <option value="Pasar-TKP">Pasar-TKP</option>
                                    <option value="Pasar-TJU">Pasar-TJU</option>
                                    <option value=""></option>
                                </select>
                                @error('kategori')
                                    <span class="form-text text-xs text-danger"> {{ $message }} </span> 
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <label for="create-gmaps" class="form-label">Gmaps</label>
                                <input type="text" wire:model="gmaps" name="gmaps" id="create-gmaps"
                                    class="form-control" placeholder="Masukkan Gmaps Titik" />
                                @error('gmaps')
                                    <span class="form-text text-xs text-danger"> {{ $message }} </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <label for="create-koordinat" class="form-label">Koordinat</label>
                                <input type="text" wire:model="koordinat" name="koordinat" id="create-koordinat"
                                    class="form-control" placeholder="Masukkan Koordinat Titik" />
                                @error('koordinat')
                                    <span class="form-text text-xs text-danger"> {{ $message }} </span>
                                @enderror
                            </div>
                        </div>  
                        <div class="row">
                            <div class="col mb-3">
                                <label for="create-sisi" class="form-label">Sisi</label>
                                <input type="text" wire:model="sisi" name="sisi" id="create-sisi"
                                    class="form-control" placeholder="Masukkan Sisi Titik" />
                                @error('sisi')
                                    <span class="form-text text-xs text-danger"> {{ $message }} </span> 
                                @enderror
                            </div>
                            <div class="col mb-3">
                                <label for="create-panjang_luas" class="form-label">Panjang Luas</label>
                                <input type="text" wire:model="panjang_luas" name="panjang_luas" id="create-panjang_luas"
                                    class="form-control" placeholder="Masukkan panjang/luas Titik" />
                                @error('panjang_luas')
                                    <span class="form-text text-xs text-danger"> {{ $message }} </span> 
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <label for="create-waktu-pelayanan" class="form-label">Waktu Pelayanan</label>
                                <select wire:model="waktu_pelayanan" name="waktu_pelayanan" id="create-waktu-pelayanan"
                                    class="form-control">
                                    <option value="">--Pilih Waktu Pelayanan--</option>
                                    <option value="Pagi-Siang">Pagi-Siang</option>
                                    <option value="Pagi-Sore">Pagi-Sore</option>
                                    <option value="Pagi-Malam">Pagi-Malam</option>
                                    <option value="Siang-Sore">Siang-Sore</option>
                                    <option value="Siang-Malam">Siang-Malam</option>
                                    <option value="Malam-Sore">Malam-Sore</option>
                                </select>
                                @error('waktu_pelayanan')
                                    <span class="form-text text-xs text-danger"> {{ $message }} </span> 
                                @enderror
                            </div>
                            <div class="col mb-3">
                                <label for="create-hari-buka" class="form-label">Hari Buka</label>
                                <input type="number" wire:model="hari_buka" name="hari_buka" id="create-hari-buka"
                                    class="form-control" placeholder="Masukkan Hari Buka Titik" />
                                @error('hari_buka')
                                    <span class="form-text text-xs text-danger"> {{ $message }} </span> 
                                @enderror
                            </div>
                        </div>                           
                        <div class="row">
                            <div class="col mb-3">
                                <label for="create-korlap" class="form-label">Korlap</label>
                                <select wire:model="korlap_id" name="korlap_id" id="create-korlap"
                                    class="form-control">
                                    <option value="">--Pilih Korlap--</option>
                                    @foreach ($korlaps as $korlap)
                                        <option value="{{ $korlap->id }}">{{ $korlap->nama }}</option>
                                    @endforeach
                                </select>
                                @error('korlap_id')
                                    <span class="form-text text-xs text-danger"> {{ $message }} </span> 
                                @enderror
                            </div>
                        </div>   
                        <div class="row">
                            <div class="col mb-3">
                                <label for="create-keterangan" class="form-label">keterangan</label>
                                <textarea wire:model="keterangan" name="keterangan" id="create-keterangan" class="form-control"></textarea>
                                @error('keterangan')
                                    <span class="form-text text-xs text-danger"> {{ $message }} </span>
                                @enderror
                            </div>
                        </div>  
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal" id="close-btn-create-titik">
                            Close
                        </button>
                        <button type="submit" class="btn btn-primary">
                            Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@script
    <script>
        $wire.on('trigger-close-modal', () => {
            document.getElementById('close-btn-create-titik').click();
        });
    </script>
@endscript
