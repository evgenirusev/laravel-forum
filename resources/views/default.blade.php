@include('layouts/head')
<body>
  @include('layouts/navbar')
  <div class="container">
    @yield('content')
  </div>
  @include('layouts/footer')
</body>
</html>
