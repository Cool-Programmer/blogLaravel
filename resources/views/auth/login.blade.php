@extends('main')
@section('title')
	- login
@endsection()

@section('content')
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			{!! Form::open() !!}
				<div class="form-group">
					{!! Form::label('email', 'Email', ['class'=>'label label-primary']) !!}	
					{!! Form::email('email', null, ['class'=>'form-control']) !!}
				</div>
				<div class="form-group">
					{!! Form::label('password', 'Password', ['class'=>'label label-primary']) !!}
					{!! Form::password('password', ['class'=>'form-control']) !!}
				</div>
				<span class="text-muted pull-right"><a href="{{route('sendemail')}}">Forgot password?</a></span>
				<div class="form-group">
					{!! Form::checkbox('remember') !!}{!! Form::label('remember', 'Remember me') !!}
				</div>
				{!! Form::submit('Login', ['class'=>'btn btn-primary btn-block']) !!}
			{!! Form::close() !!}
		</div>
	</div>
@endsection()