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
				@if(session('status'))
					<div class="alert alert-success">
						{{session('status')}}
					</div>
				@endif()
				<div class="panel-body">
					{!! Form::open(['url'=>'password/email', 'method'=>'POST']) !!}
					{!! Form::label('email', 'Email address', ['class'=>'label label-primary']) !!}
					{!! Form::text('email', null, ['class'=>'form-control']) !!}
					<br>
					{!! Form::submit('Reset', ['class'=>'btn btn-default pull-right']) !!}
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
@endsection()