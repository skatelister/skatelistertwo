@extends('app')

@section('content')

	<form action="">
		<label for="title">Title</label>
		<input type="text" name="title" id="title">

		<label for="content">Content</label>
		<textarea name="content" id="content" cols="20" rows="10"></textarea>

		<input type="submit" value="Send">
	</form>