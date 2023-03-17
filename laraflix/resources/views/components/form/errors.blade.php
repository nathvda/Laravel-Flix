@props(['name'])
<div class="text-red-500">
    @if($errors->has($name))
        {{$errors->first($name)}}
    @endif
</div>