@extends('main')
	@section('title')
		- all posts
	@endsection()

	@section('content')
		<div class="row">
			<div class="col-md-10">
				<h1 class="page-header">All posts</h1>
			</div>
			<div class="col-md-2">
				<a href="{{route('posts.create')}}" class="btn btn-primary btn-lg btn-block">Create new post</a>
			</div>
			<hr>
		</div>
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<table class="table table-bordered table-hover">
				    <thead>
				      <tr>
				        <th>#</th>
				        <th>Title</th>
				        <th>Content</th>
				        <th>Created</th>
				        <th>Updated</th>
				        <th>View</th>
				        <th>Edit</th>
				      </tr>
				    </thead>
				    <tbody>
				    @foreach($posts as $post)
						<tr>
							<td>{{$post->id}}</td>
							<td>{{$post->title}}</td>
							<td>{{strlen($post->body)>20 ? substr($post->body, 0, 20) . '...' : $post->body}}</td>
							<td>{{date('M j, Y H:i', strtotime($post->created_at))}}</td>
							<td>{{date('M j, Y H:i', strtotime($post->updated_at))}}</td>
							<td><a href="{{route('posts.show', $post->id)}}" class="btn btn-default btn-sm">View</a></td>
							<td><a href="{{route('posts.edit', $post->id)}}" class="btn btn-default btn-sm">Edit</a></td>
						</tr>
				    @endforeach()
				    </tbody>
				  </table>
				  <div class="text-center">
				  	{!! $posts->links() !!}
				  </div>
			</div>
		</div>
	@endsection()