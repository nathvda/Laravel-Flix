<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laraflix</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="antialiased min-h-screen min-w-screen relative flex items-center justify-center bg-gradient-to-tr from-purple-900 via-black to-orange-900">
   
<x-navigation-bar/>

@if(count($user->profiles) < 5)
<x-homepage.choose-user-frame>
    <a href="/profile/new">+</a>
</x-homepage.choose-user-frame>
@endif

@foreach($user->profiles as $profile)
<x-homepage.choose-user-frame>
    <a href="/browse/{{$profile->id}}"><img src="/images/{{$profile->avatar->url}}"/>
    {{$profile->username}}</a>
</x-homepage.choose-user-frame>
@endforeach
</body></html>