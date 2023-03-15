<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laraflix</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="antialiased min-h-screen min-w-screen relative flex items-center justify-center bg-gradient-to-tr from-purple-900 via-black to-orange-900">

{{$profile->id}}

<h3>Your list</h3>
<div class="">
</div>

<h3>Recently released</h3>
<div class="">
@foreach($movies as $movie)
<a href="/see/{{$movie->id}}"><div class="">
    <h6>{{$movie->title}}</h6>
    <img src="/images/thumbnail.png"/>
<p>{{$movie->pitch}}</p></div></a>
@endforeach
</div>

</body>
</html>