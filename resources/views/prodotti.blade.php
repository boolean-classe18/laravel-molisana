@extends('layouts.app')

@section('content')
    <div class="prodotti">
        <div class="container">
            @foreach ($formati as $tipo => $pasta)
                <h1 class="titolo-tipo">{{ $tipo }}</h1>
                <div class="card-container">
                    @foreach ($pasta as $indice => $formato)
                        <div class="card">
                            <img src="{{ $formato['src'] }}" alt="{{ $formato['titolo'] }}">
                            <div class="overlay">
                                <a href="{{ route('pagina-dettaglio', ['id' => $indice]) }}">
                                    {{ $formato['titolo'] }}
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endforeach
        </div>
    </div>
@endsection

@section('page-title', 'Tutti i prodotti - La Molisana')
