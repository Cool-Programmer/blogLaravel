@extends('main')
	@section('title')
		- edit post
	@endsection()

	@section('stylesheets')
		{!! Html::style('css/parsley.css') !!}
	@endsection()

	@section('content')
		<h1>Edit {{$post->title}}</h1>
		<div class="row">
		{!! Form::model($post, ['method'=>'PATCH', 'route'=>['posts.update', $post->id], 'data-parsley-validate'=>'']) !!}
			<div class="col-md-8">
				{!! Form::label('title', 'Title', ['class'=>'label label-primary']) !!}
				{!! Form::text('title', null, ['class'=>'form-control', 'data-parsley-required'=>'true', 'data-parsley-minlength'=>'3', 'data-parsley-maxlength'=>'255']) !!}
				<br>
				{!! Form::label('slug', 'URL Slug', ['class'=>'label label-primary']) !!}
				{!! Form::text('slug', null, ['class'=>'form-control', 'data-parsley-required'=>'true', 'data-parsley-minlength'=>'3', 'data-parsley-maxlength'=>'255']) !!}
				<br>
				{!! Form::label('body', 'Content', ['class'=>'label label-primary']) !!}
				{!! Form::textarea('body', null, ['class'=>'form-control', 'data-parsley-required'=>'true', 'data-parsley-minlength'=>'20']) !!}
				<br>				
			</div>
			<div class="col-md-4">
				<div class="well">
					<dl class="dl-horizontal">
						<label>Created</label>
						<span>{{date('M j, Y H:i', strtotime($post->created_at))}}</span>
					</dl>
					<dl class="dl-horizontal">
						<label>Modified</label>
						<span>{{date('M j, Y H:i', strtotime($post->updated_at))}}</span>
					</dl>
					<hr>
					<div class="row">
						<div class="col-sm-6">
							{!! Html::linkRoute('posts.show', 'Cancel', [$post->id], ['class'=>'btn btn-danger btn-block']) !!}
						</div>
						<div class="col-sm-6">
							{!! Form::submit('Save', ['class'=>'btn btn-success btn-block']) !!}
						</div>
					</div>
				</div>
			</div>
		</div>
		{!! Form::close() !!}
	@endsection()

	@section('scripts')
		{!! Html::script('js/parsley.min.js') !!}
	@endsection()