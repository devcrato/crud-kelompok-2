@extends('layouts.main')

@section('content')
<div class="card shadow-sm">
    <div class="card-header bg-primary text-white">
        <h4>Tambah Produk</h4>
    </div>
    <div class="card-body">
        <form action="{{ route('produk.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label>Kode Produk</label>
                <input type="text" name="kode_produk" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Nama Produk</label>
                <input type="text" name="nama_produk" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Kategori</label>
                <input type="text" name="kategori" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Merek</label>
                <input type="text" name="merek" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Harga</label>
                <input type="number" step="0.01" name="harga" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Stok</label>
                <input type="number" name="stok" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Keterangan</label>
                <textarea name="keterangan" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('produk.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>
@endsection
