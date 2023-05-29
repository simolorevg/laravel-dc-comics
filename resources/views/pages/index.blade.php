@extends('layouts.app')
@section('content')
    <h2 class="text-center">Tutti i fumetti</h2>
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
