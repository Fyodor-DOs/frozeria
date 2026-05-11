@extends('layouts.app')

@section('title', 'Detail Barang')

@section('content')
    <div class="d-flex flex-column flex-lg-row justify-content-between align-items-lg-center gap-3 mb-4">
        <div>
            <h1 class="h3 section-title mb-1">Detail Barang</h1>
            <p class="text-muted mb-0">Informasi rinci untuk {{ $barang->nama_barang }}.</p>
        </div>
        <div>
            <a href="{{ route('dashboard') }}" class="btn btn-primary">Kembali</a>
        </div>
    </div>

    <div class="row g-4">
        <div class="col-lg-5">
            <div class="card h-100">
                <div class="card-body">
                    @if ($barang->foto)
                        <img src="{{ Storage::url($barang->foto) }}" alt="Foto {{ $barang->nama_barang }}" class="img-fluid rounded">
                    @else
                        <div class="photo-placeholder d-flex align-items-center justify-content-center text-muted">
                            Foto belum tersedia
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="card h-100">
                <div class="card-body">
                    <dl class="row mb-0">
                        <dt class="col-sm-4">Nama Barang</dt>
                        <dd class="col-sm-8">{{ $barang->nama_barang }}</dd>

                        <dt class="col-sm-4">Kategori</dt>
                        <dd class="col-sm-8">{{ $barang->kategori?->nama_kategori ?? '-' }}</dd>

                        <dt class="col-sm-4">Jumlah Stok</dt>
                        <dd class="col-sm-8">{{ $barang->jumlah_stok }}</dd>

                        <dt class="col-sm-4">Stok Minimum</dt>
                        <dd class="col-sm-8">{{ $barang->stok_minimum }}</dd>

                        <dt class="col-sm-4">Satuan</dt>
                        <dd class="col-sm-8">{{ $barang->satuan }}</dd>

                        <dt class="col-sm-4">Harga Beli</dt>
                        <dd class="col-sm-8">Rp {{ number_format($barang->harga_beli, 0, ',', '.') }}</dd>

                        <dt class="col-sm-4">Harga Jual</dt>
                        <dd class="col-sm-8">Rp {{ number_format($barang->harga_jual, 0, ',', '.') }}</dd>

                        <dt class="col-sm-4">Berat / Ukuran</dt>
                        <dd class="col-sm-8">{{ $barang->berat_ukuran ?? '-' }}</dd>

                        <dt class="col-sm-4">Lokasi Simpan</dt>
                        <dd class="col-sm-8">{{ $barang->lokasi_simpan ?? '-' }}</dd>

                        <dt class="col-sm-4">Deskripsi</dt>
                        <dd class="col-sm-8">{{ $barang->deskripsi ?? '-' }}</dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>

@endsection
