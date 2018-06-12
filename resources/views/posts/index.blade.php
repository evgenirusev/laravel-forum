@extends('default')

@section('content')
<div class="row">
  <div class="col-sm-8">
    <h1>Recent:</h1>
    <hr>
    @foreach($posts as $post)
    <div class="card">
      <h5 class="card-header">{{$post->title}}</h5>
      <div class="card-body">
        <h5 class="card-title">Posted: {{$post->created_at->diffForHumans()}}</h5>
        <p class="card-text">{{$post->description}}</p>
        <a href="{{ route('posts.show', ['id' => $post->id]) }}" class="btn btn-primary">View</a>
        <br>
        <a href="#" class="float-right">USERNAME</a><div class="float-right">Created by: </div>
      </div>
    </div>
    <br>
    @endforeach
    <hr>
    {{$posts->links()}}
    <br>
  </div>
  <div class="col-sm-4">
    ARCHIVES
  </div>
</div>
@endsection
