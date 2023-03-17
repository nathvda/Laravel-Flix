<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laraflix</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="antialiased min-h-screen min-w-screen relative flex flex-col gap-10 items-center justify-center bg-gradient-to-tr from-purple-900 via-black to-orange-900">

<h1 class="text-7xl text-white font-bolder">Who's there?</h1>
<div class="flex gap-10">
@foreach($user->profiles as $profile)
<x-homepage.choose-user-frame>
    <a href="/browse/{{$profile->id}}"><img src="/images/{{$profile->avatar->url}}"/>
    <div class="absolute text-white text-md-center font-bold">{{$profile->username}}</div></a>
</x-homepage.choose-user-frame>
@endforeach

@if(count($user->profiles) < 5)
<x-homepage.choose-user-frame>
    <a href="/profile/new" class="text-white text-xl">+</a>
</x-homepage.choose-user-frame>
@endif
</div>

<a class="text-white text-2xl font-light p-5 bg-gradient-to-tr from-gray-500 border border-gray-500 bg-opacity-50 rounded-md mt-10 hover:bg-purple-900 transition-all duration-500">Manage accounts</a>

</body></html>