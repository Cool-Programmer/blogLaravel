@if(Session::has('success'))
	<div class="alert alert-success">
		<strong>Success!</strong> {{Session::get('success')}}
	</div>
@endif()

@if(count($errors)>0)
	<div class="alert alert-danger">
		<ul>
			<strong>Ooops :( </strong>
			@foreach($errors->all() as $error)
				<li class="list-unstyled">{{$error}}</li>
			@endforeach
		</ul>
	</div>
@endif()