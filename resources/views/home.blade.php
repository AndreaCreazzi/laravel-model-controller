@extends('layouts.main')

@section('title', 'Home')

@section('content')

    <ul>
        @foreach ($movies as $movie)
            <li>
                <p>{{ $movie->title }}</p>
            </li>
        @endforeach
    </ul>

@endsection
