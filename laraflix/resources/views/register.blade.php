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

<x-form.formbody action="/register">
<x-form.input name="name"/>
<x-form.input name="email" type="email"/>
<x-form.input name="password" type="password"/>
<x-form.input name="password_confirmation" type="password"/>
<x-form.button>Submit</x-form.button>
</x-form.formbody>

</body>
</html>