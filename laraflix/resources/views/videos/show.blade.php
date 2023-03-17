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
<p class="text-gray-100 w-2/6 p-10 font-bolder">{{$movie->summary}}</p>
</div>

<div class="p-10">
<x-title-six>Cast</x-title-six>
@foreach($movie->actors as $actor)
{{$actor->name}}
@endforeach
</div>

<div class="p-10">
<x-title-six>Genre</x-title-six>
@foreach($movie->genres as $genre)
{{$genre->name}}
@endforeach
</div>

<div class="p-10">
<x-title-six>Country</x-title-six>
@foreach($movie->countries as $country)
{{$country->name}}
@endforeach
</div>


<div class="flex w-40 gap-10 border rounded-md px-5 py-2">
<x-add-to-list id="{{$movie->id}}" profile="{{session()->get('profile')}}"/>
<x-play-button id="{{$movie->id}}"/>
@if(!$profile->isLiked(session()->get('profile'), $movie->id))
    <x-like-button id="{{$movie->id}}" profile="{{session()->get('profile')}}"/>
    @else
    <x-liked id="{{$movie->id}}" profile="{{session()->get('profile')}}" />
    @endif
    @if(!$profile->isDisliked(session()->get('profile'), $movie->id))
                    <x-dislike-button id="{{$movie->id}}" profile="{{session()->get('profile')}}"/>
                    @else
                    <x-disliked id="{{$movie->id}}" profile="{{session()->get('profile')}}"/>
                    @endif
</div>

</body>
</html>