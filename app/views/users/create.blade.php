@extends('app')

@section('content')


<div class="container">
	{{ Form::open(['method' => 'POST', 'action' => 'UsersController@store']) }}
			<!-- First Name Form Input -->
			<div class="form-group">
				{{ Form::label('first_name', 'First Name:') }}
				{{ Form::text('first_name', null, ['class' => 'form-control']) }}
			</div>
			<!-- Last Name Form Input -->
			<div class="form-group">
				{{ Form::label('last_name', 'Last Name:') }}
				{{ Form::text('last_name', null, ['class' => 'form-control']) }}
			</div>
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
			<!-- Password Confirm Form Input -->
			<div class="form-group">
				{{ Form::label('password_confirmation', 'Password Confirm:') }}
				{{ Form::password('password_confirmation', ['class' => 'form-control']) }}
			</div>

			<div class="btn-group">
	            {{ Form::submit("Sign Up", ['class' => 'btn btn-success']) }}
	        </div>
	{{ Form::close() }}
</div>

@stop