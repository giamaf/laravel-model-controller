@extends('layouts.main')

@section('title', $movie->title)

@section('main')
    <div class="container my-4">
        <h1 class="text-center text-primary">Questo è il film: {{ $movie->title }} </h1>
        <div class="row">
            <div class="col-12 gy-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $movie->title }}</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">Original Title:
                            {{ $movie->original_title }}</h6>
                        <h6 class="card-subtitle mb-2 text-warning">Nationality: {{ $movie->nationality }}
                        </h6>
                        <h6 class="card-subtitle mb-2 text-secondary">Date: {{ $movie->date }}</h6>
                        <h6 class="card-subtitle mb-2 text-danger">Vote: {{ $movie->vote }}</h6>

                        <a href="{{ route('home') }}" class="card-link">Torna alla Home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
