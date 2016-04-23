@extends('app')

@section('content')

	<div class="col-md-10">
		@foreach ($posts as $post)
			<p>{{{$post->title}}}</p>
			<p>{{{$post->description}}}</p>
			<img src="{{{$post->image}}}" alt="some alternate">
		@endforeach
	</div>



@stop