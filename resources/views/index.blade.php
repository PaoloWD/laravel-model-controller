<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/js/app.js')
    <title>Document</title>
</head>
<body class="bg-dark">
    @dump($moviesListAll)
    <div class="container">
        <div class="row gap-3 align-items-center cards-container">
            @foreach ($moviesListAll as $movie )
            <div class="card col-4">
                <div class="card-body">
                  <h5 class="card-title">{{$movie->title}}</h5>
                  <h6 class="card-subtitle mb-2">Original Title: {{$movie->original_title}}</h6>
                  <p class="card-text">Nationality: {{$movie->nationality}}</p>
                  <p class="card-text">Date: {{$movie->date}}</p>
                  <p class="card-text vote">Vote: {{$movie->vote}}</p>
                </div>
              </div>
            @endforeach
        </div>
    </div>
</body>
</html>