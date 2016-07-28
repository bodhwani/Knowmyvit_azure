<?php
@extends('master')

@section('content')
@foreach($movie as $movie)
	{{ $movie->text }}
@endforeach
@endsection	
?>											
							?>