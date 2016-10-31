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
                <div class="post">
                    <h3>Post title</h3>
                    <p>Lorem ipsum dolor sit amet...</p>
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>
                <hr>
                <div class="post">
                    <h3>Post title</h3>
                    <p>Lorem ipsum dolor sit amet...</p>
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>
                <hr>
                <div class="post">
                    <h3>Post title</h3>
                    <p>Lorem ipsum dolor sit amet...</p>
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>
                <hr>
                <div class="post">
                    <h3>Post title</h3>
                    <p>Lorem ipsum dolor sit amet...</p>
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>
            </div> {{--MAIN CONTENT ENDED--}}
            <div class="col-md-3 col-md-offset-1">{{--SIDEBAR STARTED--}}
                <h2>Sidebar</h2>
            </div>{{--SIDEBAR ENDED--}}
        </div>
    @endsection()
