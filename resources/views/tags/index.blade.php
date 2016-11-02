@extends('main')
@section('title')
	- tags
@endsection()

@section('content')
	<h1 class="page-header">Tags</h1>
	<div class="row">
		<div class="col-md-8">
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
		    	@foreach($tags as $tag)
					<tr>
						<td>{{$tag->id}}</td>
						<td>{{$tag->name}}</td>
						<td>{{date('M j, Y H:i', strtotime($tag->created_at))}}</td>
						<td>{{date('M j, Y H:i', strtotime($tag->created_at))}}</td>
						<td>
							{!! Form::open(['method'=>'DELETE', 'action'=>['TagController@destroy', $tag->id]]) !!}
							{!! Form::submit('Delete', ['class'=>'btn btn-default btn-sm']) !!}
							{!! Form::close() !!}
						</td>
					</tr>
		    	@endforeach()
		    </tbody>
	</table>
		</div>
		<div class="col-md-4">
			{!! Form::open(['method'=>'POST', 'action'=>'TagController@store']) !!}
				{!! Form::label('name', 'Name', ['class'=>'label label-primary']) !!}
				{!! Form::text('name', null, ['class'=>'form-control']) !!}
				<br>
				{!! Form::submit('Add new', ['class'=>'btn btn-default btn-sm pull-right']) !!}
			{!! Form::close() !!}
		</div>
	</div>
@endsection()