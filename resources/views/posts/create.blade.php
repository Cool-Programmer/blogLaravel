@extends('main')
	@section('title')
		- create post
	@endsection()
	@section('content')
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<h1>Create new post</h1>
				<hr>
				{!! Form::open(['route'=>'posts.store']) !!}
					{!! Form::label('title', 'Title', ['class'=>'label label-primary']) !!}
					{!! Form::text('title', null, ['class'=>'form-control']) !!}
					<br>
					{!! Form::label('body', 'Content', ['class'=>'label label-primary']) !!}
					{!! Form::textarea('body', null, ['class'=>'form-control']) !!}
					<br>
					{!! Form::submit('Add post', ['class'=>'btn btn-primary']) !!}
				{!! Form::close() !!}
			</div>
		</div>
	@endsection()