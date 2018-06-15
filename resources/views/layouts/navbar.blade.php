<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #ffffff;">
  <!-- <nav class="navbar navbar-light" style="background-color: #e3f2fd;"> -->
  <a class="navbar-brand" href="{{route('posts.index')}}"><span style="font-size:40px">Laravel Forum</span></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active h3">
        <a class="nav-link" href="{{ route('posts.index') }}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item h3">
        <a class="nav-link" href="{{ route('contact') }}">Contact</a>
      </li>
      <li class="nav-item h3">
        <a class="nav-link" href="{{ route('about') }}">About</a>
      </li>
    </ul>
  </div>
</nav>
<br>
