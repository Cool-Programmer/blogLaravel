@extends('main')

@section('title')
	- forgot password
@endsection()

@section('content')
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="panel panel-default">
				<div class="panel-heading">
					Reset password
				</div>
				<div class="panel-body">
					{!! Form::open(['url'=>'password/reset', 'method'=>'POST']) !!}

					{!! Form::hidden('token', $token) !!}
					
					{!! Form::label('email', 'Email address', ['class'=>'label label-primary']) !!}
					{!! Form::text('email', $email, ['class'=>'form-control']) !!}
<br>
					{!! Form::label('password', 'New password', ['class'=>'label label-primary']) !!}
					{!! Form::password('password', ['class'=>'form-control']) !!}
<br>
					{!! Form::label('password_confirmation', 'Confirm new password', ['class'=>'label label-primary']) !!}
					{!! Form::password('password_confirmation', ['class'=>'form-control']) !!}
					<br>
					{!! Form::submit('Reset', ['class'=>'btn btn-default pull-right']) !!}
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
@endsection()