@extends('main')

@section('title')
	- categories
@endsection()

	{{-- CSS FOR JAVASCRIPT FORM VALIDATION --}}
	@section('stylesheets')
		{!! Html::style('css/parsley.css') !!}
	@endsection()

@section('content')
	<div class="row">
		<div class="col-md-8">
			<h1 class="page-header">Categories</h1>
			<table class="table table-bordered table-hover">
			    <thead>
			      <tr>
			      	<th>#</th>
			      	<th>Name</th>
			      	<th>Created</th>
			      	<th>Modified</th>
			      	<th>Delete</th>
			      </tr>
			    </thead>
			    <tbody>
			    	@foreach($categories as $category)
						<tr>
							<td>{{$category->id}}</td>
							<td>{{$category->name}}</td>
							<td>{{date('M j, Y H:i', strtotime($category->created_at))}}</td>
							<td>{{date('M j, Y H:i', strtotime($category->created_at))}}</td>
							<td>
								{!! Form::open(['method'=>'DELETE', 'action'=>['CategoryController@destroy', $category->id]]) !!}
								{!! Form::submit('Delete', ['class'=>'btn btn-default btn-sm']) !!}
								{!! Form::close() !!}
							</td>
						</tr>
			    	@endforeach()
			    </tbody>
			</table>
		</div>

		<div class="col-md-4">
			{!! Form::open(['method'=>'POST', 'action'=>'CategoryController@store', 'data-parsley-validate'=>'']) !!}
				{!! Form::label('name', 'Name', ['class'=>'label label-primary']) !!}
				{!! Form::text('name', null, ['class'=>'form-control', 'data-parsley-required'=>'true', 'data-parsley-minlength'=>'2', 'data-parsley-maxlength'=>'255']) !!}
				<br>
				{!! Form::submit('Add new', ['class'=>'btn btn-primary btn-sm pull-right']) !!}
			{!! Form::close() !!}
		</div>
	</div>
@endsection()

@section('scripts')
		{!! Html::script('js/parsley.min.js') !!}
@endsection()