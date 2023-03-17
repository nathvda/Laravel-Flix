<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laraflix</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="antialiased overflow-x-hidden p-10 pt-14 min-h-screen min-w-screen relative flex flex-col justify-start bg-gradient-to-tr from-purple-900 via-black to-orange-900">
<x-navigation-bar><span class="text-white font-bolder">Welcome back, <span class="font-black">{{$profile->username}}</span>, what will you be watching today ?</span>
        <div class="flex border-l border-r px-4 gap-4 ml-auto mr-4"><a href="/home" class="text-white">Switch account</a>
        <a href="/browse/{{$profile->id}}" class="text-white">Browse</a>
        <a href="/genres" class="text-white">Genres</a>
        <a href="/countries" class="text-white">Countries</a>
        </div>
        <a href="/logout" class="text-white">Log out</a>

</x-navigation-bar>
    <a href="{{ url()->previous() }}">←</a>
    
    
    <h3 class="text-white text-xl flex items-center font-black mt-10 h-8 leading-8">Your list</h3>
    <div class="flex gap-2 snap-x snap-mandatory overflow-x-auto scroll-mt-4 py-4 border-b border-white border-opacity-10">
        @foreach($profile->movies as $movie)
        <a href="/see/{{$movie->id}}" class="snap-start shrink-0 flex flex-col">
            <div class="w-60 shrink-0 group relative">
                <img class="w-60 rounded-md" src="/media/thumbnails/{{$movie->thumbnail}}" />
                <h6 class="text-white">{{$movie->title}}</h6>
                <div class="absolute opacity-0 group-hover:opacity-100 flex justify-evenly z-20 inset-5 bottom-10 rounded-md bg-opacity-40 bg-black items-center transition-all duration-600 group-hover:duration-600"><x-add-to-list id="{{$movie->id}}" profile="{{session()->get('profile')}}" />
                    <x-play-button id="{{$movie->id}}" />
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
            </div>
        </a>
        @endforeach
    </div>

    <x-footer/>
</body>

</html>