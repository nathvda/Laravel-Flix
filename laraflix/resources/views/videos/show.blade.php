<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laraflix</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="antialiased min-h-screen min-w-screen relative flex items-center justify-center bg-gradient-to-tr from-purple-900 via-black to-orange-900">

<a href="{{ url()->previous() }}">←</a>
<h1 class="text-7xl text-white absolute top-16 left-16">{{$movie->title}}</h1>

<h4 class="text-white">Summary</h4>
{{$movie->summary}}

<h6>Cast</h6>
@foreach($movie->actors as $actor)
{{$actor->name}}
@endforeach

<h6>Genres</h6>
@foreach($movie->genres as $genre)
{{$genre->name}}
@endforeach

<a href="/watch/{{$movie->id}}" class="bg-purple text-white"><button type="button" class="bg-purple text-white">Play</button></a>

</body>
</html>