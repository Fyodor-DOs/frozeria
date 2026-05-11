@extends('layouts.app')

@section('title', 'Tambah Barang')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1 class="h3 section-title mb-1">Tambah Barang</h1>
            <p class="text-muted mb-0">Input data barang baru ke sistem.</p>
        </div>
        <a href="{{ route('dashboard') }}" class="btn btn-outline-secondary">Kembali</a>
    </div>

    @include('partials.flash')

    <div class="card">
        <div class="card-body">
            <form action="{{ route('barang.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row g-3">
                    <div class="col-md-4">
                        <label class="form-label" for="nama_barang">Nama Barang</label>
                        <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="{{ old('nama_barang') }}" required>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label" for="kategori_id">Kategori</label>
                        <select class="form-select" id="kategori_id" name="kategori_id" required>
                            <option value="">Pilih kategori</option>
                            @foreach ($kategoris as $kategori)
                                <option value="{{ $kategori->id }}" {{ old('kategori_id') == $kategori->id ? 'selected' : '' }}>
                                    {{ $kategori->nama_kategori }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label" for="jumlah_stok">Jumlah Stok</label>
                        <input type="number" class="form-control" id="jumlah_stok" name="jumlah_stok" value="{{ old('jumlah_stok', 0) }}" min="0" required>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label" for="stok_minimum">Stok Minimum</label>
                        <input type="number" class="form-control" id="stok_minimum" name="stok_minimum" value="{{ old('stok_minimum', 20) }}" min="20" required>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label" for="satuan">Satuan</label>
                        <select class="form-select" id="satuan" name="satuan" required>
                            <option value="">Pilih satuan</option>
                            <option value="pcs" {{ old('satuan') === 'pcs' ? 'selected' : '' }}>pcs</option>
                            <option value="pack" {{ old('satuan') === 'pack' ? 'selected' : '' }}>pack</option>
                            <option value="box" {{ old('satuan') === 'box' ? 'selected' : '' }}>box</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label" for="harga_beli">Harga Beli</label>
                        <div class="input-group">
                            <span class="input-group-text">Rp</span>
                            <input type="number" class="form-control" id="harga_beli" name="harga_beli" value="{{ old('harga_beli', 0) }}" min="0" step="0.01" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label" for="harga_jual">Harga Jual</label>
                        <div class="input-group">
                            <span class="input-group-text">Rp</span>
                            <input type="number" class="form-control" id="harga_jual" name="harga_jual" value="{{ old('harga_jual', 0) }}" min="0" step="0.01" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label" for="berat_ukuran">Berat / Ukuran</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="berat_ukuran" name="berat_ukuran" value="{{ old('berat_ukuran') }}" required>
                            <span class="input-group-text">gram</span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label" for="lokasi_simpan">Lokasi Simpan</label>
                        <input type="text" class="form-control" id="lokasi_simpan" name="lokasi_simpan" value="{{ old('lokasi_simpan') }}" required>
                    </div>
                    <div class="col-12">
                        <label class="form-label" for="deskripsi">Deskripsi</label>
                        <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" required>{{ old('deskripsi') }}</textarea>
                    </div>
                    <div class="col-12">
                        <label class="form-label" for="foto">Foto Barang</label>
                        <input type="file" class="form-control" id="foto" name="foto" accept="image/*" required>
                    </div>
                </div>
                <div class="mt-4 d-flex gap-2">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{ route('dashboard') }}" class="btn btn-outline-secondary">Batal</a>
                </div>
            </form>
        </div>
    </div>
@endsection
