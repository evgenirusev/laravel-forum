@extends('default')

@section('content')
<br><br>
		<form action='#' method=""  class="form-control" >
			@csrf
			<label for="title">Email</label>
    		<input type="text" class="form-control" name="title">
    		<br>
    		<label for="content">Message</label>
    		<textarea class="form-control" rows="5" name="content"> </textarea>
    		<br>
    		<input type="submit" class="btn btn-primary" value="Send">
		</form>
	<br><br><br><br><br>
@endsection
