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
						<label>URL</label>
						<span><a href="{{url('blog/'.$post->slug)}}">{{url('blog/'.$post->slug)}}</a></span>
					</dl>
					<dl class="dl-horizontal">
						<label>Category</label>
						<span><a href="{{route('categories.show', $post->category->id)}}">{{$post->category->name}}</a></span>
					</dl>
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
							{!! Html::linkRoute('posts.edit', 'Edit', [$post->id], ['class'=>'btn btn-primary btn-block']) !!}
						</div>
						<div class="col-sm-6">
						{!! Form::open(['route'=>['posts.destroy', $post->id], 'method'=>'DELETE']) !!}
							{!! Form::submit('Delete', ['class'=>'btn btn-danger btn-block']) !!}
						{!! Form::close() !!}
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-md-12">
							<a href="{{route('posts.index')}}" class="btn btn-default btn-block"><< See all posts</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	@endsection()