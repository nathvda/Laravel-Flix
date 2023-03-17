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
    <span class="text-white font-bolder">Welcome back, <span class="font-black">{{$profile->username}}</span>, what will you be watching today ?</span>
        <div class="flex border-l border-r px-4 gap-4 ml-auto mr-4"><a href="/home" class="text-white">Switch account</a>
        <a href="/browse/{{$profile->id}}" class="text-white">Browse</a>
        <a href="/genres" class="text-white">Genres</a>
        <a href="/countries" class="text-white">Countries</a>
        <a href="/yourlist" class="text-white">Watchlist</a>
        </div>
        <a href="/logout" class="text-white">Log out</a>

    </x-navigation-bar>

    <a href="{{ url()->previous() }}">←</a>

    <header class="-mx-10 h-3/4 p-10 relative bg-image bg-no-repeat bg-center" style="background-image:url('/media/thumbnails/{{$header->thumbnail}}');height:35rem;">
    <h1 class="text-7xl text-white p-10 pb-0">{{$header->title}}</h1>
    <p class="text-gray-100 w-2/6 p-10 font-bolder">{{$header->summary}}
    <div class="flex w-80 justify-between p-10">
    <x-play-button id="{{$header->id}}" />
    @if(!$profile->isLiked(session()->get('profile'), $header->id))
    <x-like-button id="{{$header->id}}" profile="{{session()->get('profile')}}"/>
    @else
    <x-liked id="{{$header->id}}" profile="{{session()->get('profile')}}" />
    @endif
    @if(!$profile->isDisliked(session()->get('profile'), $header->id))
                    <x-dislike-button id="{{$header->id}}" profile="{{session()->get('profile')}}"/>
                    @else
                    <x-disliked id="{{$header->id}}" profile="{{session()->get('profile')}}"/>
                    @endif
    <a href="/see/{{$header->id}}">
        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#FFFFFF" class="bi bi-info-circle" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
</svg></a></div>
    </p>
    
    </header>

    <h3 class="text-white text-xl flex items-center font-black mt-10 h-8 leading-8"><a href="/yourlist">Your list </a><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#FFFFFF" class="bi bi-chevron-right" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
        </svg></h3>
    <div class="flex gap-2 snap-x snap-mandatory overflow-x-auto scroll-mt-4 py-4  border-b border-white border-opacity-10">
        @foreach($profile->movies as $movie)
        <a href="/see/{{$movie->id}}" class="snap-start shrink-0">
            <div class="w-60 shrink-0 group relative">
                <img class="w-60 rounded-md relative" src="/media/thumbnails/{{$movie->thumbnail}}" />
                <h6 class="text-white">{{$movie->title}}</h6>
                <div class="absolute opacity-0 group-hover:opacity-100 flex justify-evenly z-20 inset-5 bottom-10 rounded-md bg-opacity-40 bg-black items-center transition-all duration-600 group-hover:duration-600">
                    <x-remove-from-list id="{{$movie->id}}" profile="{{$profile->id}}" />
                    <x-play-button id="{{$movie->id}}" />
                    @if(!$profile->isLiked(session()->get('profile'), $movie->id))
                    <x-like-button id="{{$movie->id}}" profile="{{session()->get('profile')}}" />
                    @else
                    <x-liked id="{{$movie->id}}" profile="{{session()->get('profile')}}" />
                    @endif
                    @if(!$profile->isDisliked(session()->get('profile'), $movie->id))
                    <x-dislike-button id="{{$movie->id}}" profile="{{session()->get('profile')}}"/>
                    @else
                    <x-disliked id="{{$movie->id}}" profile="{{session()->get('profile')}}"/>
                    @endif                </div>
            </div>
        </a>
        @endforeach
    </div>

    <h3 class="text-white text-xl flex items-center font-black mt-10 h-8 leading-8">Recently released <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#FFFFFF" class="bi bi-chevron-right" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
        </svg></h3>
    <div class="flex gap-2 snap-x shrink-0 overflow-x-auto snap-mandatory scroll-mt-4 py-4 border-b border-white border-opacity-10">
        @foreach($movies as $movie)
        <a href="/see/{{$movie->id}}" class="snap-start shrink-0 flex flex-col">
            <div class="w-60 group relative shrink-0">
                <img class="w-60 rounded-md" src="/media/thumbnails/{{$movie->thumbnail}}" />
                <h6 class="text-white">{{$movie->title}}</h6>
                <div class="absolute opacity-0 group-hover:opacity-100 flex justify-evenly z-20 inset-5 bottom-10 rounded-md bg-opacity-40 bg-black items-center transition-all duration-600 group-hover:duration-600"><x-add-to-list id="{{$movie->id}}" profile="{{$profile->id}}" />
                    <x-play-button id="{{$movie->id}}" />
                    @if(!$profile->isLiked(session()->get('profile'), $movie->id))
                    <x-like-button id="{{$movie->id}}" profile="{{session()->get('profile')}}" />
                    @else
                    <x-liked id="{{$movie->id}}" profile="{{session()->get('profile')}}" />
                    @endif
                    @if(!$profile->isDisliked(session()->get('profile'), $movie->id))
                    <x-dislike-button id="{{$movie->id}}" profile="{{session()->get('profile')}}"/>
                    @else
                    <x-disliked id="{{$movie->id}}" profile="{{session()->get('profile')}}"/>
                    @endif                </div>
            </div>
        </a>
        @endforeach
    </div>

    @foreach($genres as $genre)
    <h3 class="text-white text-xl flex items-center font-black mt-10 h-8 leading-8"><a href="/view/genre/{{$genre->id}}">{{$genre->name}}</a><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#FFFFFF" class="bi bi-chevron-right" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
        </svg></h3>
    <div class="flex gap-2 snap-x snap-mandatory overflow-x-auto scroll-mt-4 py-4 border-b border-white border-opacity-10">
        @foreach($genre->movies as $movie)
        <a href="/see/{{$movie->id}}" class="snap-start shrink-0 flex flex-col">
            <div class="w-60 shrink-0 group relative">
                <img class="w-60 rounded-md" src="/media/thumbnails/{{$movie->thumbnail}}" />
                <h6 class="text-white">{{$movie->title}}</h6>
                <div class="absolute opacity-0 group-hover:opacity-100 flex justify-evenly z-20 inset-5 bottom-10 rounded-md bg-opacity-40 bg-black items-center transition-all duration-600 group-hover:duration-600"><x-add-to-list id="{{$movie->id}}" profile="{{$profile->id}}" />
                    <x-play-button id="{{$movie->id}}" />
                    @if(!$profile->isLiked(session()->get('profile'), $movie->id))
                    <x-like-button id="{{$movie->id}}" profile="{{session()->get('profile')}}" />
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
    @endforeach

    <x-footer/>

</body>
</html>