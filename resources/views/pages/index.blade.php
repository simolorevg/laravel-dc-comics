@extends('layouts.app')
@section('content')
    <ul>
        @foreach ($comics as $comicitem)
            <li>{{ $comicitem->title }}</li>
        @endforeach
    </ul>
@endsection
