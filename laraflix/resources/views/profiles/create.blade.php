<x-navigation-bar/>

<x-form.formbody action="/profile/new">
    <x-form.input type="text" name="username"/>
    <fieldset><legend>Choose an avatar</legend>
        @foreach($avatars as $avatar)
        <input type="radio" id="avatar_id" name="avatar_id" value="{{$avatar->id}}">
        <label for="avatar_id"><img src="/images/{{$avatar->url}}"></label>
        @endforeach
    </fieldset>
    <x-form.button>Let's go!</x-form.button>
</x-form.formbody>