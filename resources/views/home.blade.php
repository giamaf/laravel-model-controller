<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Home</title>
</head>

<body>
    <div class="container my-4">
        <h1 class="text-center text-danger">Questa è la Home in cui potrai scegliere il tuo libro preferito</h1>
        <div class="row">
            @foreach ($movies as $movie)
                @include('includes.card')
            @endforeach
        </div>
    </div>
</body>

</html>
