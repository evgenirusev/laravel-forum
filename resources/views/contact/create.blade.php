@extends('default')

@section('content')
<br><br>
		<form action='{{route('contact.store')}}' method="POST"  class="form-control" >
			@csrf
			  <label for="email">Email</label>
    		<input type="email" class="form-control" name="email" required>
    		<br>
    		<label for="content">Message</label>
    		<textarea class="form-control" rows="5" name="content" required> </textarea>
    		<br>
    		<input type="submit" class="btn btn-primary" value="Send">
		</form>
		    @include('layouts.errors')
				@if(session()->has('message'))
				    <div class="alert alert-success">
				        {{ session()->get('message') }}
				    </div>
				@endif
	<br><br><br><br><br>
@endsection
