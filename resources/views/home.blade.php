@extends('layouts.main')

@section('title', 'Home')

@section('main')
    <div class="container my-4">
        <h1 class="text-center text-danger">Questa è la Home in cui potrai scegliere il tuo film preferito</h1>
        <div class="row">
            @foreach ($movies as $movie)
                @include('includes.card')
            @endforeach
        </div>
    </div>
@endsection
