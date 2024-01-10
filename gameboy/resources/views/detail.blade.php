@extends('layout.template')

@section('title', $game ? $game->nama : 'Detail Bahasa')

@section('content')
    @if ($game)
        <div class="card mb-3">
            <div class="row g-0">
                <div class="col-md-9">
                    <div class="card-body">
                        <h2 class="card-title">{{ $game->nama }}</h2>
                        <p class="card-text">{{ $game->sinopsis }}</p>
                        <p class="card-text">Kategori :
                            {{ $game->category ? $game->category->nama_kategori : 'Tidak ada kategori' }}</p>
                        <p class="card-text">Tahun : {{ $game->tahun }}</p>
                        <p class="card-text">Developer : {{ $game->developer }}</p>
                        <a href="/" class="btn" style="background-color: #45526e; color: white">Kembali</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <img src="/images/{{ $game->foto_sampul }}" class="img-fluid rounded-end" alt="...">
                </div>
            </div>
        </div>
    @else
        <p>Data game tidak ditemukan.</p>
    @endif
@endsection
