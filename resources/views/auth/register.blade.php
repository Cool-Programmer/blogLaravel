@extends('main')
@section('title')
	- Sign up
@endsection()

@section('content')
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			{!! Form::open() !!}
				<div class="form-group">
					{!! Form::label('name', 'Name', ['class'=>'label label-primary']) !!}
					{!! Form::text('name', null, ['class'=>'form-control']) !!}
				</div>
				<div class="form-group">
					{!! Form::label('email', 'Email', ['class'=>'label label-primary']) !!}
					{!! Form::email('email', null, ['class'=>'form-control']) !!}
				</div>
				<div class="form-group">
					{!! Form::label('password', 'Password', ['class'=>'label label-primary']) !!}
					{!! Form::password('password', ['class'=>'form-control']) !!}
				</div>
				<div class="form-group">
					{!! Form::label('password_confirmation', 'Confirm password', ['class'=>'label label-primary']) !!}
					{!! Form::password('password_confirmation', ['class'=>'form-control']) !!}
				</div>
				{!! Form::submit('Sign up', ['class'=>'btn btn-success btn-block']) !!}
			{!! Form::close() !!}
		</div>
	</div>
@endsection()

