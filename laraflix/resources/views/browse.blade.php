<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laraflix</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="antialiased p-10 pt-14 min-h-screen min-w-screen relative flex flex-col justify-start bg-gradient-to-tr from-purple-900 via-black to-orange-900">
<x-navigation-bar>
    <span class="text-white font-bolder">Welcome back, {{$profile->username}}, what will you be watching today ?</span>
    <a href="/logout" class="text-white">Log out</a>
</x-navigation-bar>
<a href="{{ url()->previous() }}">←</a>
<h3 class="text-white font-bolder text-xl">Your list</h3>
<div class="flex gap-8 overflow-x-scroll snap-x snap-mandatory scroll-mt-4 py-4">
@foreach($profile->movies as $movie)
<a href="/see/{{$movie->id}}" class="snap-start">
    <div class="w-80">
    <img src="/media/thumbnails/{{$movie->thumbnail}}" class="rounded-md"/>
    <h6 class="text-white">{{$movie->title}}</h6>
    <x-remove-from-list id="{{$movie->id}}" profile="{{$profile->id}}"/>
    <x-play-button id="{{$movie->id}}"/>
</div></a>
@endforeach
</div>

<h3 class="text-white font-bolder text-xl">Recently released</h3>
<div class="flex gap-8 overflow-x-scroll snap-x snap-mandatory scroll-mt-4 py-4">
@foreach($movies as $movie)
<a href="/see/{{$movie->id}}" class="snap-start">
    <div class="w-80">
    <img src="/media/thumbnails/{{$movie->thumbnail}}" class="rounded-md"/>
    <h6 class="text-white">{{$movie->title}}</h6>
    <x-add-to-list id="{{$movie->id}}" profile="{{$profile->id}}"/>
    <x-play-button id="{{$movie->id}}"/>
</div></a>
@endforeach
</div>

</body>
</html>