@extends('app')

@section('content')

	
	{{ Form::open(['method' => 'POST', 'action' => 'UsersController@loginAttempt']) }}
		<!-- Email Form Input -->
		<div class="form-group">
			{{ Form::label('email', 'Email:') }}
			{{ Form::text('email', null, ['class' => 'form-control']) }}
		</div>
		<!-- Password Form Input -->
		<div class="form-group">
			{{ Form::label('password', 'Password:') }}
			{{ Form::password('password', ['class' => 'form-control']) }}
		</div>

		<div class="btn-group">
            {{ Form::submit("Login", ['class' => 'btn btn-success']) }}
        </div>
	{{ Form::close() }}
	

@stop