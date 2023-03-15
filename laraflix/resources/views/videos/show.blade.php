<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laraflix</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="antialiased min-h-screen min-w-screen relative flex items-center justify-center bg-gradient-to-tr from-purple-900 via-black to-orange-900">

<h1>{{$movie->title}}</h1>

<h4>Summary</h4>
{{$movie->summary}}

<h6>Cast</h6>
@foreach($movie->actors as $actor)
{{$actor->name}}
@endforeach

<h6>Genres</h6>
@foreach($movie->genres as $genre)
{{$genre->name}}
@endforeach

<a href="/watch/{{$movie->id}}"><button type=button">Play</button></a>

</body>
</html>