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