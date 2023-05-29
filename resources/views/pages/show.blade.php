@extends('layouts.app')
@section('content')
    <div class="container">
        <h2>{{ $comic->title }}</h2>
        <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
        <p>{{ $comic->series }}</p>
        <p>{{ $comic->Type }}</p>
        <p>In vendita dal: {{ $comic->sale_date }}. Prezzo: {{ $comic->price }}</p>
        <p>{{ $comic->description }}</p>
    </div>
@endsection
