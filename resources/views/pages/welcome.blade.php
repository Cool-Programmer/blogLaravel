@extends('main')
    @section('title')
        - main
    @endsection()
    @section('content')
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron">
                    <h1>Welcome!</h1>
                    <p class="lead">Thank you for visiting. Have a nice day :)</p>
                    <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular post</a></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8"> {{--MAIN CONTENT STARTED--}}
                @foreach($posts as $post)
                    <div class="post">
                        <h3 class="hd" style="display: inline;">{{$post->title}}</h3> on <span class="small text-muted">{{date('M j, Y H:i', strtotime($post->created_at))}}</span>
                        <p>{{strlen($post->body)>300 ? substr($post->body, 0, 300).'...' : $post->body}}</p>
                        <a class="btn btn-primary btn-sm" href="#">Read more</a>
                    </div>
                    <hr>
                @endforeach()
                
            </div> {{--MAIN CONTENT ENDED--}}
            <div class="col-md-3 col-md-offset-1">{{--SIDEBAR STARTED--}}
                <h2>Sidebar</h2>
            </div>{{--SIDEBAR ENDED--}}
        </div>
    @endsection()
