<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $fillable = [
        'kategori_id',
        'nama_barang',
        'jumlah_stok',
        'stok_minimum',
        'satuan',
        'harga_jual',
        'harga_beli',
        'berat_ukuran',
        'lokasi_simpan',
        'deskripsi',
        'foto',
    ];

    protected $casts = [
        'harga_jual' => 'decimal:2',
        'harga_beli' => 'decimal:2',
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }
}
