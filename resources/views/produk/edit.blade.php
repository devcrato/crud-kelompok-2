@extends('layouts.main')

@section('content')
<div class="card shadow-sm">
    <div class="card-header bg-warning text-dark">
        <h4>Edit Produk</h4>
    </div>
    <div class="card-body">
        <form action="{{ route('produk.update', $produk->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label>Kode Produk</label>
                <input type="text" name="kode_produk" class="form-control" value="{{ $produk->kode_produk }}" required>
            </div>

            <div class="mb-3">
                <label>Nama Produk</label>
                <input type="text" name="nama_produk" class="form-control" value="{{ $produk->nama_produk }}" required>
            </div>

            <div class="mb-3">
                <label>Kategori</label>
                <input type="text" name="kategori" class="form-control" value="{{ $produk->kategori }}" required>
            </div>

            <div class="mb-3">
                <label>Merek</label>
                <input type="text" name="merek" class="form-control" value="{{ $produk->merek }}" required>
            </div>

            <div class="mb-3">
                <label>Harga</label>
                <input type="number" step="0.01" name="harga" class="form-control" value="{{ $produk->harga }}" required>
            </div>

            <div class="mb-3">
                <label>Stok</label>
                <input type="number" name="stok" class="form-control" value="{{ $produk->stok }}" required>
            </div>

            <div class="mb-3">
                <label>Keterangan</label>
                <textarea name="keterangan" class="form-control">{{ $produk->keterangan }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('produk.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>

@endsection
