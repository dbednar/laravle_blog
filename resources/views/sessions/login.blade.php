@extends('layouts.master')



@section('content')
<div class="col-sm-8">
  <h1>Register</h1>

  <form method="POST" action="/login">

      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email"  name="email">
      </div>

      <div class="form-group">
        <label for="password">Password:</label>
        <input id="password" name="password" type='password' class="form-control">
      </div>


      {{ csrf_field() }}
      <button type="submit" class="btn btn-primary">Register</button>
    @include('layouts.error')


  </form>

</div>



@endsection
