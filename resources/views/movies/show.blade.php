<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>{{ $movie->title }}</title>
</head>

<body>
    <div class="container my-4">
        <h1 class="text-center text-danger">Questa è la sezione Movie</h1>
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

                        <a href="{{ route('home') }}" class="card-link">Vai al film</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
