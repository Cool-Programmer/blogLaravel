@extends('main')

@section('title')
	- tag | {{$tag->name}}
@endsection()

@section('content')
	<div class="row">
		<div class="col-md-8">
			<h1 class="page-header" style="display: inline;">{{$tag->name}} tag</h1> <small class="text-muted">{{$tag->posts->count()}} posts</small>
		</div>
		<div class="col-md-2 col-md-offset-2">
			<a href="#" class="btn pull-right btn-block btn-primary">Edit</a>
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-md-12">
			<table class="table table-bordered table-hover">
				<thead>
					<th>#</th>
					<th>Title</th>
					<th>Tags</th>
					<th></th>
				</thead>
				
				<tbody>
				    @foreach($tag->posts as $post)
						<tr>
							<td>{{$post->id}}</td>
							<td>{{$post->title}}</td>
							<td>
								@foreach($post->tags as $tag)
									<span class="label label-primary">{{$tag->name}}</span>
								@endforeach()
							</td>
						</tr>
				    @endforeach()
			    </tbody>
			</table>
		</div>
	</div>
@endsection()