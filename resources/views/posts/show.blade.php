@extends('default')

@section('content')
<div class="row">
	<!-- Post Content Column -->
	<div class="col-lg-8">
		<!-- Title -->
		<h1 class="mt-4">{{ $post->title }}</h1>

		<!-- Author -->
		<p class="lead">
			by
			<a href="#">{{ $post->user->name }}</a>
		</p>

		<hr>

		<!-- Date/Time -->
		<p>{{ $post->created_at->diffForHumans() }}</p>

		<hr>

		<!-- Post Content -->
		<p class="lead">{{ $post->description }}</p>
		<hr>
		<!-- Comments Form -->
		<div class="card my-4">
			<h5 class="card-header">Leave a Comment:</h5>
			<div class="card-body">
				<form method="POST" action="{{route('comments.store')}}">
					@csrf
					<div class="form-group">
						<textarea class="form-control" rows="4" name="body"></textarea>
					</div>
					<input type="hidden" name="postId" value="{{ $post->id }}">
					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
		</div>
		<br>
		<!-- Single Comment -->
		@if ($post->comments->count() > 0)
		@foreach ($post->comments as $comment)
				<div class="card card-body bg-light" >
	  	 			<div class="card-block">
						<p class="card-text">
							{{ $comment->body }}
						</p>
						<h6 class='float-right'>Answer By: <a href="{{ route('user', ['id' => $comment->user->id]) }}")>{{ $comment->user->name }}</a>, {{ $comment->created_at->diffForHumans() }}</h6>
					</div>
				</div>
				<hr>
			@endforeach
			@else
			<hr>
			<p>
				There are no answers yet
			</p>
			<hr>
		@endif

	</div>
</div>
@endsection('content')
