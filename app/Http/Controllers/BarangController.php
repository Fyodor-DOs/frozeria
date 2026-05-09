<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');
        $kategoriId = $request->input('kategori');

        $query = Barang::with('kategori')
            ->when($search, function ($builder) use ($search) {
                $builder->where('nama_barang', 'like', '%' . $search . '%');
            })
            ->when($kategoriId, function ($builder) use ($kategoriId) {
                $builder->where('kategori_id', $kategoriId);
            });

        $barangs = $query->orderBy('nama_barang')->get();
        $kategoris = Kategori::orderBy('nama_kategori')->get();

        $stokMenipis = Barang::where('jumlah_stok', '>', 0)
            ->where('jumlah_stok', '<', 20)
            ->count();
        $stokHabis = Barang::where('jumlah_stok', 0)->count();
        $totalBarang = Barang::count();

        return view('barang.index', [
            'barangs' => $barangs,
            'kategoris' => $kategoris,
            'stokMenipis' => $stokMenipis,
            'stokHabis' => $stokHabis,
            'totalBarang' => $totalBarang,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('barang.create', [
            'kategoris' => Kategori::orderBy('nama_kategori')->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_barang' => 'required|string|max:255',
            'kategori_id' => 'nullable|exists:kategoris,id',
            'jumlah_stok' => 'required|integer|min:0',
            'stok_minimum' => 'nullable|integer|min:0',
            'satuan' => 'required|string|max:50',
            'harga_beli' => 'required|numeric|min:0',
            'harga_jual' => 'required|numeric|min:0',
            'berat_ukuran' => 'nullable|string|max:100',
            'lokasi_simpan' => 'nullable|string|max:255',
            'deskripsi' => 'nullable|string',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            $validated['foto'] = $request->file('foto')->store('barang', 'public');
        }

        Barang::create($validated);

        return redirect()->route('dashboard')->with('success', 'Barang berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $barang = Barang::with('kategori')->findOrFail($id);

        return view('barang.show', [
            'barang' => $barang,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $barang = Barang::findOrFail($id);

        return view('barang.edit', [
            'barang' => $barang,
            'kategoris' => Kategori::orderBy('nama_kategori')->get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $barang = Barang::findOrFail($id);

        $validated = $request->validate([
            'nama_barang' => 'required|string|max:255',
            'kategori_id' => 'nullable|exists:kategoris,id',
            'jumlah_stok' => 'required|integer|min:0',
            'stok_minimum' => 'nullable|integer|min:0',
            'satuan' => 'required|string|max:50',
            'harga_beli' => 'required|numeric|min:0',
            'harga_jual' => 'required|numeric|min:0',
            'berat_ukuran' => 'nullable|string|max:100',
            'lokasi_simpan' => 'nullable|string|max:255',
            'deskripsi' => 'nullable|string',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            if ($barang->foto) {
                Storage::disk('public')->delete($barang->foto);
            }

            $validated['foto'] = $request->file('foto')->store('barang', 'public');
        }

        $barang->update($validated);

        return redirect()->route('barang.show', $barang)->with('success', 'Barang berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $barang = Barang::findOrFail($id);

        if ($barang->foto) {
            Storage::disk('public')->delete($barang->foto);
        }

        $barang->delete();

        return redirect()->route('dashboard')->with('success', 'Barang berhasil dihapus.');
    }
}
