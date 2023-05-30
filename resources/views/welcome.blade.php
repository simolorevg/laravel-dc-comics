@extends('layouts.app')
@section('content')
    <h1>Welcome</h1>
    <a class="btn btn-primary" href="{{ route('comics.index') }}">
        Guarda i fumetti
    </a>
@endsection
