@extends('layouts.app')
@section('content')
    <a class="btn btn-primary" href="{{ route('comics.index') }}">Indietro</a>
    <div class="container">
        <h2>{{ $comic->title }}</h2>
        <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
        <p>{{ $comic->series }}</p>
        <p>{{ $comic->Type }}</p>
        <p>In vendita dal: {{ $comic->sale_date }}. Prezzo: {{ $comic->price }}</p>
        <p>{{ $comic->description }}</p>
        <a class="btn btn-warning" href="{{ route('comics.edit', $comic->id) }}">
            Modifica elemento
        </a>
        <form action="{{ route('comics.destroy', $comic->id) }}">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" type="submit" value="Delete"> Elimina</button>
        </form>
    </div>
@endsection
