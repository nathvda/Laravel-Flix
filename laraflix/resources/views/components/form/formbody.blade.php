@props(['action', 'method' => 'post'])
<form method={{$method}} action={{$action}}>
    @csrf
    {{$slot}}
</form>