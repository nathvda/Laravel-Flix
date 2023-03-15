@props(['name'])
<span>
    @if($errors->has($name))
        {{$errors->first($name)}}
    @endif
</span>