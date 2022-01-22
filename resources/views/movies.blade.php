<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <nav>
        @include('partials.nav')
    </nav>
    <main class="text-center">
        <div class="container d-flex">
            @foreach ($movies as $movie)
                <div class="card" style="width: 18rem;">
                    <div class="card-header">
                    {{ $movie['title'] }}
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">{{ $movie['original-title'] }}</li>
                        <li class="list-group-item">{{ $movie['date'] }}</li>
                        <li class="list-group-item">{{ $movie['nationality'] }}</li>
                        <li class="list-group-item">{{ $movie['vote'] }}</li>
                    </ul>
                </div>
            @endforeach
            
        </div>
    </main>
</body>
</html>