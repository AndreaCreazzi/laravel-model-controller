@extends('layouts.main')

@section('title', 'Home')

@section('content')

    @foreach ($movies as $movie)
        <div class="card my-3">
            <div class="card-body">
                <h5 class="card-title">{{ $movie->title }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{ $movie->original_title }}</h6>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi eveniet consequuntur et
                    alias optio eius error nulla explicabo excepturi veniam accusantium enim neque omnis rem, laboriosam ad
                    odit ipsam. Iure.</p>
                <p class="card-text">Language: <strong class="uppercase">{{ $movie->nationality }}</strong></p>
                <p class="card-text">Date: <strong>{{ $movie->date }}</strong></p>
                <p class="card-text">Vote: <strong>{{ $movie->vote }}</strong></p>
            </div>
        </div>
    @endforeach

@endsection
