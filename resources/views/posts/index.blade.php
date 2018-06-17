@extends('default')

@section('content')
<hr>
<div class="row">
  <div class="col-sm-8">
    <h1>Recent:</h1>

    @foreach($posts as $post)
    <div class="card">
      <h5 class="card-header">{{$post->title}}</h5>
      <div class="card-body">
        <h5 class="card-title">Posted: {{$post->created_at->diffForHumans()}}</h5>
        <p class="card-text">{{$post->description}}</p>
        <a href="{{ route('posts.show', ['id' => $post->id]) }}" class="btn btn-primary">View</a>
        <br>
        <a href="user/{{$post->user->id}}" class="float-right">&nbsp{{$post->user->name}}</a><div class="float-right">Created by:</div>
      </div>
    </div>
    <br>
    @endforeach
    <hr>
    {{$posts->links()}}
    <br>
  </div>
  <div class="col-sm-2 blog-sidebar">
          <div class="sidebar-module">
            <h4>Archives</h4>
            <ol class="list-unstyled">
              <li><a href="#">March 2014</a></li>
              <li><a href="#">February 2014</a></li>
              <li><a href="#">January 2014</a></li>
              <li><a href="#">December 2013</a></li>
              <li><a href="#">November 2013</a></li>
              <li><a href="#">October 2013</a></li>
              <li><a href="#">September 2013</a></li>
              <li><a href="#">August 2013</a></li>
              <li><a href="#">July 2013</a></li>
              <li><a href="#">June 2013</a></li>
              <li><a href="#">May 2013</a></li>
              <li><a href="#">April 2013</a></li>
            </ol>
          </div>
          <div class="sidebar-module sidebar-module-inset">
            <p>
              <em>"Success is walking from failure to failure with no loss of enthusiasm."</em>
            </p>
            <h6 class="float-right"><em>-Steve Jobs</em><h6>
          </div>
        </div><!-- /.blog-sidebar -->

</div>
@endsection
