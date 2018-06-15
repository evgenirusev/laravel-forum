@extends('default')

@section('content')
<br><br><br>
<div class="row justify-content-center">
  <div class="col-md-8">
    <div class="card">
      <div class="card-header"><h1>Sign In</h1></div>
      <div class="card-body">
        <form method="POST" action="login">
          @csrf

          <div class="form-group">
            <label for="email">Email Adress:</label>
            <input type="email" class="form-control" id="email" name="email" required>
          </div>

          <div class="form-group">
            <label for="password">Email Adress:</label>
            <input type="password" class="form-control" id="password" name="password" required>
          </div>

          <div class="form-group">
            <button type="submit" class="btn btn-primary">Sign In</button>
          </div>

        </form>
      </div>
    </div>
    @include('layouts.errors')
  </div>
</div>
<br><br><br><br>
@endsection
