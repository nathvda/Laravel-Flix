{{$profile->id}}

<h3>Your list</h3>
<div class="">
</div>

<h3>Recently released</h3>
<div class="">
@foreach($movies as $movie)
<a href="/see/{{$movie->id}}"><div class="">
    <h6>{{$movie->title}}</h6>
    <img src="/images/thumbnail.png"/>
<p>{{$movie->pitch}}</p></div></a>
@endforeach
</div>
