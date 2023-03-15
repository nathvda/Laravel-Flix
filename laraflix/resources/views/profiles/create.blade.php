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
    <fieldset class="flex"><legend>Choose an avatar</legend>
        @foreach($avatars as $avatar)
        <input class="display-none" type="radio" id="avatar_id" name="avatar_id" value="{{$avatar->id}}">
        <label for="avatar_id"><img src="/images/{{$avatar->url}}"></label>
        @endforeach
    </fieldset>
    <x-form.button>Let's go!</x-form.button>
</x-form.formbody>

</body>
</html>