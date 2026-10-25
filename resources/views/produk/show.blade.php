@extends('layouts.main')

@section('content')
<div class="card shadow-sm">
    <div class="card-header bg-info text-white">
        <h4>Detail Produk</h4>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <tr>
                <th width="30%">Kode Produk</th>
                <td>{{ $produk->kode_produk }}</td>
            </tr>
            <tr>
                <th>Nama Produk</th>
                <td>{{ $produk->nama_produk }}</td>
            </tr>
            <tr>
                <th>Kategori</th>
                <td>{{ $produk->kategori }}</td>
            </tr>
            <tr>
                <th>Merek</th>
                <td>{{ $produk->merek }}</td>
            </tr>
            <tr>
                <th>Harga</th>
                <td>Rp {{ number_format($produk->harga,2,',','.') }}</td>
            </tr>
            <tr>
                <th>Stok</th>
                <td>{{ $produk->stok }}</td>
            </tr>
            <tr>
                <th>Keterangan</th>
                <td>{{ $produk->keterangan ?? '-' }}</td>
            </tr>
        </table>
        <a href="{{ route('produk.index') }}" class="btn btn-secondary mt-3">Kembali ke Daftar</a>
    </div>
</div>
@endsection
