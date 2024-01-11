@extends('layout.template')

@section('title', 'Homepage')

@section('content')

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif


    <h1>Daftar Game</h1>
    <div class="row">
        @foreach ($games as $game)
            <div class="col-lg-6">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">{{ $game['nama'] }}</h5>
                                <p class="card-text">{{ Str::limit($game['sinopsis'], 200) }}</p>
                                <a href="/game/{{ $game['id'] }}" class="btn " style="background-color: #45526e; color: white;">Lihat Selanjutnya</a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <img src="/images/{{ $game['foto_sampul'] }}" class="img-fluid rounded-end" alt="..." style="height: 100%; object-fit: cover;">
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

        <div class="d-flex justify-content-center">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    @if($games->onFirstPage())
                        <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                            <span class="page-link" aria-hidden="true">&laquo;</span>
                        </li>
                    @else
                        <li class="page-item">
                            <a class="page-link" href="{{ $games->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&laquo;</a>
                        </li>
                    @endif

                    @foreach ($games->getUrlRange(1, $games->lastPage()) as $page => $url)
                        <li class="page-item {{ $page == $games->currentPage() ? 'active' : '' }}">
                            <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                        </li>
                    @endforeach

                    @if ($games->hasMorePages())
                        <li class="page-item">
                            <a class="page-link" href="{{ $games->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&raquo;</a>
                        </li>
                    @else
                        <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                            <span class="page-link" aria-hidden="true">&raquo;</span>
                        </li>
                    @endif
                </ul>
            </nav>
        </div>




    </div>



@endsection
