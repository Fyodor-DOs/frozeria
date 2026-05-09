@extends('layouts.app')

@section('title', 'Bantuan')

@section('content')
    <div class="mb-4">
        <h1 class="h3 section-title mb-1">Bantuan Penggunaan</h1>
        <p class="text-muted mb-0">Panduan singkat untuk staf toko Frozeria.</p>
    </div>

    <div class="row g-3 mb-4">
        <div class="col-md-6 col-lg-4">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="mb-2">Dashboard</h5>
                    <p class="text-muted small mb-0">Menampilkan daftar barang, kartu ringkas stok, serta akses cepat ke detail dan edit.</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="mb-2">Pencarian Barang</h5>
                    <p class="text-muted small mb-0">Isi kata kunci lalu tekan tombol Cari untuk menampilkan barang sesuai nama.</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="mb-2">Filter Kategori</h5>
                    <p class="text-muted small mb-0">Pilih kategori pada dropdown untuk menampilkan barang berdasarkan kategori.</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="mb-2">Detail Barang</h5>
                    <p class="text-muted small mb-0">Menampilkan informasi lengkap dan foto barang yang dipilih.</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="mb-2">Tambah / Edit Barang</h5>
                    <p class="text-muted small mb-0">Gunakan form untuk menambah atau memperbarui data stok dan foto barang.</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="mb-2">Kategori</h5>
                    <p class="text-muted small mb-0">Kelola kategori agar data barang rapi dan mudah difilter.</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="mb-2">Hapus Data</h5>
                    <p class="text-muted small mb-0">Tombol Hapus akan menampilkan modal konfirmasi sebelum data dihapus.</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="mb-2">Bantuan</h5>
                    <p class="text-muted small mb-0">Halaman ini berisi ringkasan penggunaan aplikasi dan data diri.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <h5 class="mb-3">Data Diri</h5>
            <div class="row">
                <div class="col-md-6">
                    <div class="text-muted">Nama</div>
                    <div class="fw-semibold">Ahmed Fathir Syafaat</div>
                </div>
                <div class="col-md-6">
                    <div class="text-muted">NIM</div>
                    <div class="fw-semibold">2241720083</div>
                </div>
                <div class="col-md-6 mt-3">
                    <div class="text-muted">Kelas</div>
                    <div class="fw-semibold">TI-4H</div>
                </div>
                <div class="col-md-6 mt-3">
                    <div class="text-muted">Nomor Telepon</div>
                    <div class="fw-semibold">082110992160</div>
                </div>
                <div class="col-12 mt-3">
                    <div class="text-muted">Alamat</div>
                    <div class="fw-semibold">Jl. Simpang Bunga Andong No. 10</div>
                </div>
                <div class="col-12 mt-3">
                    <div class="text-muted">Email</div>
                    <div class="fw-semibold">fathir123t@gmail.com</div>
                </div>
            </div>
        </div>
    </div>
@endsection
