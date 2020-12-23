@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Latest news</h1>
        @foreach ($nomi as $nome)
            <p>{{ $nome }}</p>
        @endforeach
    </div>
@endsection

@section('page-title', 'Latest news - La Molisana')
