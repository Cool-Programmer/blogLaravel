@extends('main')

@section('title')
	- {{$category->name}}
@endsection()

@section('content')
	<h1 class="page-header">{{$category->name}}</h1>
	<div class="col-md-8"> {{--MAIN CONTENT STARTED--}}
        @if(count($posts)>0)
		@foreach($posts as $post)

                        <h3 class="hd" style="display: inline;">{{$post->title}}</h3> on <span class="small text-muted">{{date('M j, Y H:i', strtotime($post->created_at))}}</span>
                        <p>{{strlen($post->body)>300 ? substr($post->body, 0, 300).'...' : $post->body}}</p>
                        <a class="btn btn-primary btn-sm" href="{{route('blog.single', $post->slug)}}">Read more</a>
                    
                    <hr>

			@endforeach()
        @else()
        	<p>There are currently no posts</p>  
        @endif()
    </div> {{--MAIN CONTENT ENDED--}}
@endsection()
