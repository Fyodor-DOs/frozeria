@extends('layouts.app')

@section('title', 'Bantuan')

@section('content')
    <div class="mb-4">
        <h1 class="h3 section-title mb-1">Bantuan Penggunaan</h1>
        <p class="text-muted mb-0">Panduan singkat untuk staf toko Frozeria.</p>
    </div>

    <div class="card mb-4">
        <div class="card-body">
            <ol class="mb-0">
                <li>Buka halaman Dashboard untuk melihat daftar barang.</li>
                <li>Gunakan kolom Cari dan filter Kategori untuk menemukan barang.</li>
                <li>Klik Tambah Barang untuk input data baru beserta foto.</li>
                <li>Gunakan tombol Detail untuk melihat informasi lengkap barang.</li>
                <li>Gunakan tombol Edit untuk memperbarui data dan stok.</li>
                <li>Gunakan tombol Hapus untuk menghapus data (konfirmasi akan muncul).</li>
                <li>Kelola kategori di halaman Kategori agar daftar barang rapi.</li>
            </ol>
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
