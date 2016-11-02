@extends('main')
	@section('title')
		- create post
	@endsection()

	{{-- CSS FOR JAVASCRIPT FORM VALIDATION --}}
	@section('stylesheets')
		{!! Html::style('css/parsley.css') !!}
		{!! Html::style('css/select2.min.css') !!}
	@endsection()

	@section('content')
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<h1>Create new post</h1>
				<hr>
				{!! Form::open(['route'=>'posts.store', 'data-parsley-validate'=>'']) !!}
					{!! Form::label('title', 'Title', ['class'=>'label label-primary']) !!}
					{!! Form::text('title', null, ['class'=>'form-control', 'data-parsley-required'=>'true', 'data-parsley-minlength'=>'5', 'data-parsley-maxlength'=>'255']) !!}
					<br>
					{!! Form::label('slug', 'Slug', ['class'=>'label label-primary']) !!}
					{!! Form::text('slug', null, ['class'=>'form-control', 'data-parsley-required'=>'true', 'data-parsley-minlength'=>'5', 'data-parsley-maxlength'=>'255']) !!}
					<br>
					{!! Form::label('category_id', 'Select a category', ['class'=>'label label-primary']) !!}
					<select name="category_id" id="category_id" class="form-control">
						<option value="">Select one</option>
						@foreach($categories as $category)
							<option value="{{$category->id}}">{{$category->name}}</option>
						@endforeach()
					</select>
					<br>
					{!! Form::label('tags', 'Select tags', ['class'=>'label label-primary']) !!}
					<select name="tags[]" id="tags" class="form-control multipleSelect" multiple="multiple">
						{{-- <option value="">Select one</option> --}}
						@foreach($tags as $tag)
							<option value="{{$tag->id}}">{{$tag->name}}</option>
						@endforeach()
					</select>
					<br>
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
		{!! Html::script('js/select2.min.js') !!}
		{!! Html::script('js/scripts.js') !!}
	@endsection()