@extends('main')
	@section('title')
		- View post
	@endsection()

	@section('content')
		<div class="row">
			<div class="col-md-8">
				<h1>{{$post->title}}</h1>
				<p>{{$post->body}}</p>
			</div>
			<div class="col-md-4">
				<div class="well">
					<dl class="dl-horizontal">
						<dt>Created</dt>
						<dd>{{date('M j, Y H:i', strtotime($post->created_at))}}</dd>
					</dl>
					<dl class="dl-horizontal">
						<dt>Modified</dt>
						<dd>{{date('M j, Y H:i', strtotime($post->updated_at))}}</dd>
					</dl>
					<hr>
					<div class="row">
						<div class="col-sm-6">
							{!! Html::linkRoute('posts.edit', 'Edit', [$post->id], ['class'=>'btn btn-primary btn-block']) !!}
						</div>
						<div class="col-sm-6">
						{!! Form::open(['route'=>['posts.destroy', $post->id], 'method'=>'DELETE']) !!}
							{!! Form::submit('Delete', ['class'=>'btn btn-danger btn-block']) !!}
						{!! Form::close() !!}
						</div>
					</div>
				</div>
			</div>
		</div>
	@endsection()