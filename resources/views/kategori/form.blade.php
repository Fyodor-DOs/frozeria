<div class="row g-3">
    <div class="col-12">
        <label class="form-label" for="nama_kategori">Nama Kategori</label>
        <input type="text" class="form-control" id="nama_kategori" name="nama_kategori" value="{{ old('nama_kategori', $kategori->nama_kategori ?? '') }}" required>
    </div>
    <div class="col-12">
        <label class="form-label" for="deskripsi">Deskripsi</label>
        <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3">{{ old('deskripsi', $kategori->deskripsi ?? '') }}</textarea>
    </div>
</div>
