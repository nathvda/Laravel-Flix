<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>
    <body class="antialiased min-h-screen min-w-screen relative flex items-center justify-center bg-gradient-to-tr from-purple-900 via-black to-orange-900">
    <nav class="bg-black px-4 absolute h-20 top-0 flex items-center justify-between left-0 right-0">
        <div class="text-white font-bold">Logo</div>
        <div class="">
        <img class="w-12 rounded-full" src="/images/default_avatar.png">
        </div>
    </nav>
    <main class="flex flex-col text-center gap-4 w-4/5 items-center justify-center">
    <h1 class="text-white font-bolder text-4xl">Laraflix</h1>
    <h2 class="text-white text-2xl">What are you watching today ?</h2>
    <div class="text-white font-lighter text-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Saepe laborum culpa vero inventore at, itaque quisquam cum veniam placeat expedita incidunt esse officiis totam tenetur ea, nisi excepturi. Libero, maiores.</div>
    <form class="p-4 border border-white border-opacity-10 bg-gray-900 mt-10">
    <div class="flex"> 
    <input class="bg-black border-none p-4" type="text" name="email" id="email" placeholder="Your email address"/>
    <button class="bg-gradient-to-tr from-orange-900 to-purple-900 via-gray-900 rounded-r-md text-white p-4 hover:bg-gradient-to-br " type="submit">
        Subscribe
    </button>
    </div>
</form>
</main>
    </body>
</html>
