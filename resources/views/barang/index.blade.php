@extends('layouts.app')

@section('title', 'Dashboard Frozeria')

@section('content')
    <div class="d-flex flex-column flex-lg-row justify-content-between align-items-lg-center gap-3 mb-4">
        <div>
            <h1 class="h3 section-title mb-1">Dashboard</h1>
            <p class="text-muted mb-0">Daftar Barang</p>
        </div>
        <a href="{{ route('barang.create') }}" class="btn btn-primary">Tambah Barang</a>
    </div>

    <div class="row g-3 mb-4">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <div class="text-muted">Total Barang</div>
                    <div class="display-6 fw-semibold">{{ $totalBarang }}</div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <div class="text-muted">Total Kategori</div>
                    <div class="display-6 fw-semibold">{{ $totalKategori }}</div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <div class="text-muted">Stok Menipis</div>
                    <div class="display-6 fw-semibold text-warning">{{ $stokMenipis }}</div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <div class="text-muted">Stok Habis</div>
                    <div class="display-6 fw-semibold text-danger">{{ $stokHabis }}</div>
                </div>
            </div>
        </div>
    </div>

    <form class="card p-3 mb-4" method="GET" action="{{ route('dashboard') }}">
        <div class="row g-3 align-items-end">
            <div class="col-lg-5">
                <label class="form-label" for="search">Cari Barang</label>
                <div class="input-group">
                    <input type="text" name="search" id="search" class="form-control" placeholder="Ketik nama barang" value="{{ request('search') }}">
                    <button class="btn btn-primary" type="submit">Cari</button>
                </div>
            </div>
            <div class="col-lg-4">
                <label class="form-label" for="kategori">Kategori</label>
                <select name="kategori" id="kategori" class="form-select" onchange="this.form.submit()">
                    <option value="">Semua kategori</option>
                    @foreach ($kategoris as $kategori)
                        <option value="{{ $kategori->id }}" {{ request('kategori') == $kategori->id ? 'selected' : '' }}>
                            {{ $kategori->nama_kategori }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="col-lg-3 text-lg-end">
                <a href="{{ route('dashboard') }}" class="btn btn-outline-secondary w-100">Reset</a>
            </div>
        </div>
    </form>

    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table align-middle mb-0">
                    <thead>
                        <tr>
                            <th style="width: 60px;">No</th>
                            <th>Nama Barang</th>
                            <th>Kategori</th>
                            <th>Stok</th>
                            <th>Satuan</th>
                            <th>Harga Jual</th>
                            <th class="text-end">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($barangs as $barang)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    <div class="fw-semibold">{{ $barang->nama_barang }}</div>
                                    <div class="text-muted small">{{ $barang->berat_ukuran ?? '-' }}</div>
                                </td>
                                <td>
                                    @if ($barang->kategori)
                                        <span class="badge badge-frozeria">{{ $barang->kategori->nama_kategori }}</span>
                                    @else
                                        <span class="text-muted">-</span>
                                    @endif
                                </td>
                                <td>
                                    <span class="fw-semibold">{{ $barang->jumlah_stok }}</span>
                                </td>
                                <td>{{ $barang->satuan }}</td>
                                <td>Rp {{ number_format($barang->harga_jual, 0, ',', '.') }}</td>
                                <td class="text-end">
                                    <div class="btn-group" role="group">
                                        <a href="{{ route('barang.show', $barang) }}" class="btn btn-outline-primary btn-sm">Detail</a>
                                        <a href="{{ route('barang.edit', $barang) }}" class="btn btn-outline-secondary btn-sm">Edit</a>
                                        <button type="button" class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal" data-action="{{ route('barang.destroy', $barang) }}" data-name="{{ $barang->nama_barang }}">Hapus</button>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center text-muted py-4">Belum ada data barang.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="modal fade" id="deleteModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Konfirmasi Hapus</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Apakah Anda yakin ingin menghapus <span class="fw-semibold" id="deleteItemName">data ini</span>?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Batal</button>
                    <form method="POST" action="" id="deleteForm">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Ya, Hapus</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        const deleteModal = document.getElementById('deleteModal');
        if (deleteModal) {
            deleteModal.addEventListener('show.bs.modal', (event) => {
                const button = event.relatedTarget;
                const action = button.getAttribute('data-action');
                const name = button.getAttribute('data-name');

                const nameTarget = deleteModal.querySelector('#deleteItemName');
                const form = deleteModal.querySelector('#deleteForm');

                nameTarget.textContent = name || 'data ini';
                form.action = action;
            });
        }
    </script>
@endpush
