@extends('layouts.master')


@section('content')
<div class='container col-md-8'>
  <h1>{{$post->title}}</h1>
  <p>
  {{$post->body}}

<div class="comments">
  @foreach($post->comments as $comment)

  {{ $comment->body }}

  @endforeach

</div>

</p>


{{-- Add a comment --}}



<div class="card ">
  <hr>
  <div class="card-block">

    <form method="POST" action="/posts/{{$post->id}}/comments">
      {{ csrf_field() }}
        <div class="form-group">
          <textarea name="body" placeholder="Your commment here." class="form-control"></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
    @include('layouts.error')
  </div>
</div>


</div>
@endsection
