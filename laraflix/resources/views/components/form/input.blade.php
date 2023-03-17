@props(['name', 'type' => 'text'])
<div class="border-b border-white border-opacity-10 py-5"><div class="flex justify-between">
    <label class="text-white w-1/2" for={{$name}}>
        {{ ucfirst($name) }}
    </label>
<input class="bg-black text-white w-1/2 border border-purple-600 border-opacity-50" type={{$type}} name={{$name}} id={{$name}}/>
</div>

<x-form.errors name={{$name}}/>
</div>