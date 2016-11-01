@extends('main')
@section('title')
	- blog all
@endsection

@section('content')
	<div class="col-md-8 com-md-offset-2"> {{--MAIN CONTENT STARTED--}}
	<h1 class="page-header">All posts</h1>
	    @foreach($posts as $post)
	        <div class="post">
	            <h3 class="hd" style="display: inline;">{{$post->title}}</h3> <span class="small text-muted">{{date('M j, Y H:i', strtotime($post->created_at))}}</span>
	            <p>{{strlen($post->body)>300 ? substr($post->body, 0, 300).'...' : $post->body}}</p>
	            <a class="btn btn-primary btn-sm" href="{{route('blog.single', $post->slug)}}">Read more</a>
	        </div>
	        <hr>
	    @endforeach()      
	</div> {{--MAIN CONTENT ENDED--}}
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="text-center">
		  		{!! $posts->links() !!}
			</div>
		</div>
	</div>
@endsection()