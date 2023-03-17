@props(['action', 'method' => 'post'])
<form class="bg-black bg-opacity-50 rounded-md p-10 bg-gradient-to-tl from-purple-900 gap-5 border border-purple-800 border-opacity-20" method={{$method}} action={{$action}}>
    @csrf
    {{$slot}}
</form>