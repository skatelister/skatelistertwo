@extends('app')

@section('content')

	<div class="col-md-8">
		@foreach($userPosts as $post)
			<p>{{{$post->title}}}</p>
			<p>{{{$post->description}}}</p>
			<img src="{{{$post->image}}}" alt="someAlt">
		@endforeach
	</div>



@stop