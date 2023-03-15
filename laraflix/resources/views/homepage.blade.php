<x-navigation-bar/>

@if(count($user->profiles) < 5)

<x-homepage.choose-user-frame>
    <a href="/profile/new">+</a>
</x-homepage.choose-user-frame>

@endif