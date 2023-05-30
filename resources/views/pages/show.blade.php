@extends('layouts.app')
@section('content')
    <a class="btn btn-primary" href="{{ route('pages.index') }}">Indietro</a>
    <div class="container">
        <h2>{{ $comic->title }}</h2>
        <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
        <p>{{ $comic->series }}</p>
        <p>{{ $comic->Type }}</p>
        <p>In vendita dal: {{ $comic->sale_date }}. Prezzo: {{ $comic->price }}</p>
        <p>{{ $comic->description }}</p>
        <a class="btn btn-warning" href="{{ route('pages.create', $comic->id) }}">
            Modifica elemento
        </a>
    </div>
@endsection