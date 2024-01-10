@extends('layout.template')

@section('title', 'Data Movie')

@section('content')

    <h1>Data Games</h1>
    <a href="/games/create" class="btn" style="background-color: #45526e; color: white"><i class="bi bi-pencil-square"></i> Input language</a>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Kategori</th>
                <th scope="col">Tahun</th>
                <th scope="col">Developer</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($games as $game)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $game->nama }}</td>
                    <td>{{ $game->category->nama_kategori }}</td>
                    <td>{{ $game->tahun }}</td>
                    <td>{{ $game->developer }}</td>
                    <td class="text-nowrap">
                        <a href="/game/{{ $game['id'] }}/edit" class="btn btn-warning"><i class="bi bi-pen-fill"></i> Edit</a>
                        <a href="/game/delete/{{ $game->id }}" class="btn btn-danger"
                            onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i class="bi bi-x-circle"></i> Hapus</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center">
        {{ $games->links() }}
    </div>
@endsection
