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
    @if(isset($posts->links))
    {{$posts->links()}}
    @endif
    <br>
  </div>
  <div class="col-sm-2 blog-sidebar">
          <div class="sidebar-module">
            <h4>Archives</h4>
            <ol class="list-unstyled">
              @foreach($archives as $stats)
                <li>
                  <a href="http://localhost/laravel-forum/public/?month={{$stats->month}}&year={{ $stats->year }}">
                      {{ $stats['month'] . ' ' . $stats['year'] }}
                  </a>
                </li>
              @endforeach
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
