<div class="row g-3">
    <div class="col-md-6">
        <label class="form-label" for="nama_barang">Nama Barang</label>
        <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="{{ old('nama_barang', $barang->nama_barang ?? '') }}" required>
    </div>
    <div class="col-md-6">
        <label class="form-label" for="kategori_id">Kategori</label>
        <select class="form-select" id="kategori_id" name="kategori_id">
            <option value="">Pilih kategori</option>
            @foreach ($kategoris as $kategori)
                <option value="{{ $kategori->id }}" {{ old('kategori_id', $barang->kategori_id ?? '') == $kategori->id ? 'selected' : '' }}>
                    {{ $kategori->nama_kategori }}
                </option>
            @endforeach
        </select>
    </div>
    <div class="col-md-4">
        <label class="form-label" for="jumlah_stok">Jumlah Stok</label>
        <input type="number" class="form-control" id="jumlah_stok" name="jumlah_stok" value="{{ old('jumlah_stok', $barang->jumlah_stok ?? 0) }}" min="0" required>
    </div>
    <div class="col-md-4">
        <label class="form-label" for="stok_minimum">Stok Minimum</label>
        <input type="number" class="form-control" id="stok_minimum" name="stok_minimum" value="{{ old('stok_minimum', $barang->stok_minimum ?? 0) }}" min="0">
    </div>
    <div class="col-md-4">
        <label class="form-label" for="satuan">Satuan</label>
        <input type="text" class="form-control" id="satuan" name="satuan" value="{{ old('satuan', $barang->satuan ?? '') }}" required>
    </div>
    <div class="col-md-6">
        <label class="form-label" for="harga_beli">Harga Beli</label>
        <input type="number" class="form-control" id="harga_beli" name="harga_beli" value="{{ old('harga_beli', $barang->harga_beli ?? 0) }}" min="0" step="0.01" required>
    </div>
    <div class="col-md-6">
        <label class="form-label" for="harga_jual">Harga Jual</label>
        <input type="number" class="form-control" id="harga_jual" name="harga_jual" value="{{ old('harga_jual', $barang->harga_jual ?? 0) }}" min="0" step="0.01" required>
    </div>
    <div class="col-md-6">
        <label class="form-label" for="berat_ukuran">Berat / Ukuran</label>
        <input type="text" class="form-control" id="berat_ukuran" name="berat_ukuran" value="{{ old('berat_ukuran', $barang->berat_ukuran ?? '') }}">
    </div>
    <div class="col-md-6">
        <label class="form-label" for="lokasi_simpan">Lokasi Simpan</label>
        <input type="text" class="form-control" id="lokasi_simpan" name="lokasi_simpan" value="{{ old('lokasi_simpan', $barang->lokasi_simpan ?? '') }}">
    </div>
    <div class="col-12">
        <label class="form-label" for="deskripsi">Deskripsi</label>
        <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3">{{ old('deskripsi', $barang->deskripsi ?? '') }}</textarea>
    </div>
    <div class="col-12">
        <label class="form-label" for="foto">Foto Barang</label>
        <input type="file" class="form-control" id="foto" name="foto" accept="image/*">
        @if (!empty($barang) && $barang->foto)
            <div class="mt-3">
                <div class="text-muted small mb-2">Foto saat ini:</div>
                <img src="{{ Storage::url($barang->foto) }}" alt="Foto {{ $barang->nama_barang }}" class="img-fluid rounded" style="max-height: 200px;">
            </div>
        @endif
    </div>
</div>
