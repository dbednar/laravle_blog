@extends('layouts.master')


@section('content')

<h1>Create a Post</h1>
<hr>

<form method="POST" action="/posts">

  <div class="form-group">
    <label for="title">Title:</label>
    <input type="text" class="form-control" id="title"  name="title">
  </div>

  <div class="form-group">
    <label for="body">Body:</label>
    <textarea id="body" name="body" class="form-control"></textarea>
  </div>

  {{ csrf_field() }}
  <button type="submit" class="btn btn-primary">Submit</button>
@include('layouts.error')
</form>

@endsection
