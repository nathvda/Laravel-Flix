<h1>{{$movie->title}}</h1>

<h4>Summary</h4>
{{$movie->summary}}

<h6>Cast</h6>
@foreach($movie->actors as $actor)
{{$actor->name}}
@endforeach

<h6>Genres</h6>
@foreach($movie->genres as $genre)
{{$genre->name}}
@endforeach

<a href="/watch/{{$movie->id}}"><button type=button">Play</button></a>