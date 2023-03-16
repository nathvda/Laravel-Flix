<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laraflix</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="antialiased overflow-x-hidden p-10 pt-14 min-h-screen min-w-screen relative flex flex-col justify-start bg-gradient-to-tr from-purple-900 via-black to-orange-900">
<x-navigation-bar>
    <span class="text-white font-bolder">Welcome back, {{$profile->username}}, what will you be watching today ?</span>
    <a href="/logout" class="text-white">Log out</a>
</x-navigation-bar>
<a href="{{ url()->previous() }}">←</a>
<h3 class="text-white font-bolder text-xl flex items-center">Your list <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#FFFFFF" class="bi bi-chevron-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
</svg></h3>
<div class="flex gap-2 snap-x snap-mandatory overflow-x-auto scroll-mt-4 py-4">
@foreach($profile->movies as $movie)
<a href="/see/{{$movie->id}}" class="snap-start shrink-0"">
    <div class="w-60 shrink-0">
    <img class="w-60 rounded-md" src="/media/thumbnails/{{$movie->thumbnail}}"/>
    <h6 class="text-white">{{$movie->title}}</h6>
    <x-remove-from-list id="{{$movie->id}}" profile="{{$profile->id}}"/>
    <x-play-button id="{{$movie->id}}"/>
</div></a>
@endforeach
</div>

<h3 class="text-white font-bolder text-xl flex">Recently released <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#FFFFFF" class="bi bi-chevron-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
</svg></h3>
<div class="flex gap-2 snap-x shrink-0 overflow-x-auto snap-mandatory scroll-mt-4 py-4">
@foreach($movies as $movie)
<a href="/see/{{$movie->id}}" class="snap-start shrink-0">
    <div class="w-60  shrink-0">
    <img class="w-60 rounded-md" src="/media/thumbnails/{{$movie->thumbnail}}" />
    <h6 class="text-white">{{$movie->title}}</h6>
    <x-add-to-list id="{{$movie->id}}" profile="{{$profile->id}}"/>
    <x-play-button id="{{$movie->id}}"/>
</div></a>
@endforeach
</div>

@foreach($genres as $genre)
<h3 class="text-white font-bolder text-xl flex mt-10">{{$genre->name}}<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#FFFFFF" class="bi bi-chevron-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
</svg></h3>
<div class="flex gap-2 snap-x snap-mandatory overflow-x-auto scroll-mt-4 py-4">
@foreach($genre->movies as $movie)
<a href="/see/{{$movie->id}}" class="snap-start shrink-0">
    <div class="w-60">
    <img class="w-60 rounded-md" src="/media/thumbnails/{{$movie->thumbnail}}"/>
    <h6 class="text-white">{{$movie->title}}</h6>
    <x-add-to-list id="{{$movie->id}}" profile="{{$profile->id}}"/>
    <x-play-button id="{{$movie->id}}"/>
</div></a>
@endforeach
</div>
@endforeach

</body>
</html>