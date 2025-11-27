<div>
    <div class="page-heading">
        <h3>Korlap Parkir</h3>
    </div>

    <div class="page-content">
        <section class="row">
            <div class="col-12 col-lg-12">                
                <div class="card">
                    <div class="card-header">
                        <h4>Data Korlap</h4>
                        
                        <button type="button" class="btn btn-primary mt-2" data-bs-toggle="modal"
                            data-bs-target="#AddKorlapModal">
                            <i class="bi bi-plus"></i> Tambah Korlap
                        </button>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-lg">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>NIK</th>
                                        <th>No HP</th>
                                        <th>Jml Titik</th>
                                        <th>Jml Jukir</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($korlaps as $korlap)
                                        <tr>
                                            <td class="col-auto">
                                                {{ $korlap->nama }}
                                            </td>
                                            <td class="col-auto">
                                                {{ $korlap->nik }}
                                            </td>
                                            <td class="col-auto">
                                                {{ $korlap->no_hp }}
                                            </td>
                                            <td class="col-auto">
                                                20
                                            </td>
                                            <td class="col-auto">
                                                50
                                            </td>
                                            <td class="col-auto">
                                                <div class="d-flex align-items-center">
                                                    <div class="badge @if($korlap->status == 'ASN') bg-success @else bg-info @endif me-2">{{ $korlap->status }}</div>
                                                </div>
                                            </td>
                                            <td>
                                                <button class="btn btn-sm btn-primary me-2" wire:click="$dispatch('korlap-edit', { id: {{ $korlap->id }} })"
                                                    type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                                    data-bs-target="#editKorlapModal">Edit</button>
                                                <button class="btn btn-sm btn-danger" wire:click="$dispatch('delete-korlap', { id: {{ $korlap->id }} })" 
                                                    wire:confirm="Are you sure you want to delete this korlap?">Delete</button>                                                
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
        @livewire('parkir.korlap.korlap-create')
    @endteleport
    @teleport('body')
        <!-- Edit Regustrasi Modal -->
        @livewire('parkir.korlap.korlap-edit')
    @endteleport
</div>
