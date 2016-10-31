@extends('main')
  @section('title')
    - contact
  @endsection()
  @section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Contact us</h1>
                <hr>
                <form action="#">
                	<div class="form-group">
                		<label for="email"></label>
                		<input type="email" name="email" id="email" class="form-control">
                	</div>
                	<div class="form-group">
                		<label for="subject"></label>
                		<input type="text" name="subject" id="subject" class="form-control">
                	</div>
                	<div class="form-group">
                		<label for="message"></label>
                		<textarea name="message" id="message" cols="30" rows="10" placeholder="Type your message" class="form-control"></textarea>
                	</div>
                	<input type="submit" value="Send message" class="btn btn-success">
                </form>
            </div>
        </div>
    </div>
  @endsection()