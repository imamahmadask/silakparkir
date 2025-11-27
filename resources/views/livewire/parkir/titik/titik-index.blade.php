<div>
    <div class="page-heading">
        <h3>Titik Parkir</h3>
    </div>

    <div class="page-content">
        <section class="row">
            <div class="col-12 col-lg-12">                
                <div class="card">
                    <div class="card-header">
                        <h4>Data Titik Parkir</h4>
                        
                        <button type="button" class="btn btn-primary mt-2" data-bs-toggle="modal"
                            data-bs-target="#AddTitikModal">
                            <i class="bi bi-plus"></i> Tambah Titik
                        </button>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-lg">
                                <thead>
                                    <tr>
                                        <th>Titik</th>
                                        <th>Lokasi</th>
                                        <th>Kecamatan</th>
                                        <th>Korlap</th>
                                        <th>Jenis</th>
                                        <th>Kategori</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($titik as $item)
                                        <tr>
                                            <td class="col-auto">
                                                {{ $item->nama }}
                                            </td>
                                            <td class="col-auto">
                                                {{ $item->lokasi }}
                                            </td>
                                            <td class="col-auto">
                                                {{ $item->kecamatan->nama }}
                                            </td>
                                            <td class="col-auto">
                                                {{ $item->korlap->nama }}
                                            </td>
                                            <td class="col-auto">
                                                {{ $item->jenis }}
                                            </td>
                                            <td class="col-auto">
                                                {{ $item->kategori }}
                                            </td>
                                            <td class="col-auto">
                                                <div class="d-flex align-items-center">
                                                    <div class="badge bg-success me-2">{{ $item->status }}</div>
                                                </div>
                                            </td>
                                            <td>
                                                <button class="btn btn-sm btn-primary me-2" wire:click="$dispatch('titik-edit', { id: {{ $item->id }} })"
                                                    type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                                    data-bs-target="#editTitikModal">Edit</button>
                                                <button class="btn btn-sm btn-danger" wire:click="$dispatch('delete-titik', { id: {{ $item->id }} })" 
                                                    wire:confirm="Are you sure you want to delete this titik?">Delete</button>                                                
                                            </td>
                                        </tr>                                                                                                                         
                                    @endforeach                                                                                                                                                          
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>                            
            </div>            
        </section>
    </div>
    @teleport('body')
        <!-- Create Regustrasi Modal -->
        @livewire('parkir.titik.titik-create')
    @endteleport
    @teleport('body')
        <!-- Edit Regustrasi Modal -->
        @livewire('parkir.titik.titik-edit')
    @endteleport
</div>
