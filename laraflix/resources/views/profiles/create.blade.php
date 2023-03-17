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

<x-form.formbody action="/profile/new">
    <x-form.input type="text" name="username"/>
    <legend class="text-white mb-5 mt-5">Choose an avatar</legend>
    <fieldset class="mb-5 bg-gray-900 border border-gray-800 p-10 flex gap-5 flex-wrap items-center justify-center max-w-2xl"> 
        @foreach($avatars as $avatar)
        <input class="hidden" type="radio" id="avatar_id-{{$avatar->id}}" name="avatar_id" value="{{$avatar->id}}"/>
        <label class="opacity-50 hover:opacity-100" for="avatar_id-{{$avatar->id}}"><img class="w-40 rounded-xl" src="/images/{{$avatar->url}}"></label>
        @endforeach
    </fieldset>
    <x-form.button>Let's go!</x-form.button>
</x-form.formbody>
</body>
</html>