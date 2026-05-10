@extends('layouts.app')

@section('title', 'Bantuan')

@section('content')
    <div class="mb-4">
        <h1 class="h3 section-title mb-1">Bantuan Penggunaan</h1>
        <p class="text-muted mb-0">Panduan singkat untuk staf toko Frozeria.</p>
    </div>

    <div class="row g-3 mb-4">
        <div class="col-md-6 col-lg-12">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="mb-2">Dashboard</h5>
                    <p class="text-muted small mb-2">Menu Dashboard dipakai untuk memantau stok dan mengelola data barang dari satu layar.</p>
                    <ul class="text-muted small mb-0 ps-3">
                        <li class="mb-1">Lihat ringkasan Total Barang, Total Kategori, Stok Menipis, dan Stok Habis.</li>
                        <li class="mb-1">Gunakan kolom Cari Barang untuk mencari berdasarkan nama.</li>
                        <li class="mb-1">Pilih dropdown Kategori untuk memfilter daftar barang.</li>
                        <li class="mb-1">Klik Tambah Barang untuk membuat data baru.</li>
                        <li class="mb-1">Klik Detail untuk melihat info lengkap dan foto.</li>
                        <li>Gunakan Edit untuk memperbarui data, atau Hapus untuk menghapus dengan konfirmasi.</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-12">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="mb-2">Kategori</h5>
                    <p class="text-muted small mb-2">Menu Kategori digunakan untuk mengatur daftar kategori agar barang mudah dikelompokkan.</p>
                    <ul class="text-muted small mb-0 ps-3">
                        <li class="mb-1">Klik Tambah Kategori untuk membuat kategori baru.</li>
                        <li class="mb-1">Gunakan kolom Cari Kategori untuk menemukan nama atau deskripsi.</li>
                        <li class="mb-1">Klik Edit untuk memperbarui nama atau deskripsi kategori.</li>
                        <li class="mb-1">Klik Hapus untuk menghapus kategori dengan konfirmasi.</li>
                        <li>Menghapus kategori tidak menghapus barang, barang menjadi tanpa kategori.</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-12">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="mb-2">Bantuan</h5>
                    <p class="text-muted small mb-2">Menu Bantuan berisi ringkasan langkah penggunaan sistem dan data diri pengguna.</p>
                    <ul class="text-muted small mb-0 ps-3">
                        <li class="mb-1">Baca setiap kartu panduan untuk memahami alur kerja utama.</li>
                        <li class="mb-1">Cek bagian Data Diri untuk memastikan informasi pengguna sudah benar.</li>
                        <li>Gunakan halaman ini sebagai referensi cepat saat pelatihan staf.</li>
                    </ul>
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
                    <div class="text-muted">Alamat</div>
                    <div class="fw-semibold">Jl. Simpang Bunga Andong No. 10</div>
                </div>
                <div class="col-md-6 mt-3">
                    <div class="text-muted">NIM</div>
                    <div class="fw-semibold">2241720083</div>
                </div>
                <div class="col-md-6 mt-3">
                    <div class="text-muted">Nomor Telepon</div>
                    <div class="fw-semibold">082110992160</div>
                </div>
                <div class="col-md-6 mt-3">
                    <div class="text-muted">Kelas</div>
                    <div class="fw-semibold">TI-4H</div>
                </div>
                <div class="col-md-6 mt-3">
                    <div class="text-muted">Email</div>
                    <div class="fw-semibold">fathir123t@gmail.com</div>
                </div>
            </div>
        </div>
    </div>
@endsection
