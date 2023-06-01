@extends('layouts.app')
@section('content')
    <div class="show-container">
        <h2>{{ $comic->title }}</h2>
        <div class="show-img-container">
            <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
        </div>
        <p>{{ $comic->series }}</p>
        <p>{{ $comic->Type }}</p>
        <p>In vendita dal: {{ $comic->sale_date }}. Prezzo: {{ $comic->price }}</p>
        <p>{{ $comic->description }}</p>
        <div class="btn-show-container">
            <a class="btn btn-warning" href="{{ route('comics.edit', $comic->id) }}">
                Modifica elemento
            </a>
            <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit" onclick="return confirm('Do you want delete this item?')"
                    value="Delete"> Elimina</button>
            </form>
            <a class="btn btn-primary" href="{{ route('comics.index') }}">Indietro</a>
        </div>
    </div>
@endsection
