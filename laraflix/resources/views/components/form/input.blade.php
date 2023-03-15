@props(['name', 'type' => 'text'])
<div>
    <label for={{$name}}>
        {{ ucfirst($name) }}
    </label>
<input type={{$type}} name={{$name}} id={{$name}}/>
<x-form.errors name={{$name}}/>
</div>