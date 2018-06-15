@extends('default')

@section('content')
		<form action='{{route("posts.store")}}' method="post"  class="form-control" >
			@csrf
			<label for="title"><h3>Post Title</h3></label>
    		<input type="text" class="form-control" name="title" required>
    		<br>
    		<label for="description"><h5>Add More Details</h5></label>
    		<textarea class="form-control" rows="7" name="description" required> </textarea>
    		<br>
			<div class="form-group">
				<input type="submit" class="btn btn-primary" value="Submit Post">
			</div>

			@include ('layouts.errors')

		</form>

	<!-- Margin for the footer -->
	<br><br><br><br><br>
@endsection(content)
