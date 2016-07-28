@extends('layouts.look')

@section('title')
	Movie_review
@stop
@section('content')
<<!DOCTYPE html>
<html>
<head>
	<title>Reviews</title>
</head>
<body>
<div class='col-lg-4 col-lg-offset-4'>
<div class='form-group'>
	<input type='text' id='search-input' class='form-control' placeholder="Search" onkeydown="down()" onkeyup="up()" />
	<div class="col-lg-12" id='search-results'>

	</div>
	
</div>
</div>
<script src='//code.jquery.com/jquery-1.11.0.min.js'></script>
<script src='http://maxcdn.bootstrapodn.com/bootstrap/3.3.1/js/bootstrap.min.js'></script>
<script src='{{ asset('js/search.js')}}'></script>
</body>
</html>
	@foreach( $movies as $movie)
	
		{{ $movie->text}}
		{{ $movie->description }}
		</br>
		<!-- <img src="{{ asset("movie_images/lucy1.jpg") }}" alt="{{ $movie->image }}" id='{{ $movie->id = 1}}' /> -->
		{{ $movie->image}}
		
		
		
		<p>Hey there</p>
	@endforeach
@stop