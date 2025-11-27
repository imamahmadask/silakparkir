<div>
    <div wire:ignore.self class="modal fade" id="editKorlapModal" data-bs-backdrop="static" tabindex="-1"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editKorlapModalLabel">
                        Edit Korlap
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form wire:submit="updateKorlap">
                    <div class="modal-body">                        
                        <div class="row">
                            <div class="col mb-3">
                                <label for="create-nama" class="form-label">Nama</label>
                                <input type="text" wire:model="nama" name="nama" id="create-nama"
                                    class="form-control" placeholder="Masukkan Nama" />
                                @error('nama')
                                    <span class="form-text text-xs text-danger"> {{ $message }} </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <label for="create-nik" class="form-label">NIK</label>
                                <input type="text" wire:model="nik" name="nik" id="create-nik"
                                    class="form-control" placeholder="Masukkan NIK" />
                                @error('nik')
                                    <span class="form-text text-xs text-danger"> {{ $message }} </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <label for="create-no_hp" class="form-label">No HP</label>
                                <input type="text" wire:model="no_hp" name="no_hp" id="create-no_hp"
                                    class="form-control" placeholder="Masukkan No HP" />
                                @error('no_hp')
                                    <span class="form-text text-xs text-danger"> {{ $message }} </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <label for="create-alamat" class="form-label">Alamat</label>
                                <textarea wire:model="alamat" name="alamat" id="create-alamat"
                                    class="form-control" placeholder="Masukkan Alamat" />
                                </textarea>
                                @error('alamat')
                                    <span class="form-text text-xs text-danger"> {{ $message }} </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <label for="create-status" class="form-label">Status</label>
                                <select wire:model="status" name="status" id="create-status"
                                    class="form-control">
                                    <option value="">--Pilih--</option>
                                    <option value="ASN">ASN</option>
                                    <option value="Non-ASN">Non-ASN</option>
                                </select>
                                @error('status')
                                    <span class="form-text text-xs text-danger"> {{ $message }} </span>
                                @enderror
                            </div>
                        </div>                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal" id="close-btn-edit-korlap">
                            Close
                        </button>
                        <button type="submit" class="btn btn-primary">
                            Update
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
            document.getElementById('close-btn-edit-korlap').click();
        });
    </script>
@endscript
