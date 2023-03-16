<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laraflix</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="antialiased min-h-screen min-w-screen text-white p-20 relative flex flex-col items-start justify-start bg-gradient-to-tr from-purple-900 via-black to-orange-900">

<a href="{{ url()->previous() }}">←</a>
<h1 class="text-7xl text-white">{{$movie->title}}</h1>

<div class="p-10"><h4 class="text-white text-3xl">Summary</h4>
{{$movie->summary}}
</div>

<div class="p-10">
<h6 class="font-bolder">Cast</h6>
@foreach($movie->actors as $actor)
{{$actor->name}}
@endforeach
</div>

<div class="p-10">
<h6 class="font-bolder">Genres</h6>
@foreach($movie->genres as $genre)
{{$genre->name}}
@endforeach
</div>

<div class="flex w-full">
<x-add-to-list id="{{$movie->id}}" profile="{{session()->get('profile')}}"/>
<x-play-button id="{{$movie->id}}"/>
</div>

</body>
</html>