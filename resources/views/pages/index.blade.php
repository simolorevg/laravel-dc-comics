@extends('layouts.app')
@section('content')
    <div class="d-flex justify-content-center p-2">
        <h2>Tutti i fumetti</h2>
        <a class="btn btn-warning mx-2" href="{{ route('pages.create') }}">Inserisci un fumetto</a>
    </div>
    <div class="comic-row">
        @foreach ($comics as $comicitem)
            <div class="comic-col">
                <div class="comic-image">
                    <img src="{{ $comicitem->thumb }}" alt="{{ $comicitem->title }}">
                </div>
                <div class="comic-text">
                    <h4>{{ $comicitem->title }}</h4>
                    <p>{{ $comicitem->series }}</p>
                    <p>{{ $comicitem->price }}</p>
                    <a class="btn btn-primary" href="{{ route('pages.show', $comicitem->id) }}">
                        Dettagli
                    </a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
