<html>
<h1>Working</h1>
</html>

@foreach($searchMovies as $movie)
<b>{{ $movie->text }}</b>
<br>
@endforeach
