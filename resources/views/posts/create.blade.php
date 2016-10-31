@extends('main')
	@section('title')
		- create post
	@endsection()

	{{-- CSS FOR JAVASCRIPT FORM VALIDATION --}}
	@section('stylesheets')
		{!! Html::style('css/parsley.css') !!}
	@endsection()

	@section('content')
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<h1>Create new post</h1>
				<hr>
				{!! Form::open(['route'=>'posts.store', 'data-parsley-validate'=>'']) !!}
					{!! Form::label('title', 'Title', ['class'=>'label label-primary']) !!}
					{!! Form::text('title', null, ['class'=>'form-control', 'data-parsley-required'=>'true', 'data-parsley-minlength'=>'3', 'data-parsley-maxlength'=>'255']) !!}
					<br>
					{!! Form::label('body', 'Content', ['class'=>'label label-primary']) !!}
					{!! Form::textarea('body', null, ['class'=>'form-control', 'data-parsley-required'=>'true', 'data-parsley-minlength'=>'20']) !!}
					<br>
					{!! Form::submit('Add post', ['class'=>'btn btn-primary']) !!}
				{!! Form::close() !!}
			</div>
		</div>
	@endsection()

	@section('scripts')
		{!! Html::script('js/parsley.min.js') !!}
	@endsection()