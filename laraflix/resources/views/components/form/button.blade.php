@props(['type' => 'submit'])
<div>
    <button class="bg-black text-white p-4 rounded-md" type={{$type}}>{{$slot}}</button>
</div>