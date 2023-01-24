@extends("layouts.app")
@section("titleW")
    Show posts
@endsection
@section("body") 
<div class="container text-center my-5">
      <div class="card text-center" style="width: 18rem;">
        <div class="card-body">
          <h3>Title: </h3>
          <h5 class="card-title">{{$post["title"]}}</h5>
          <h3>Content: </h3>
          <p class="card-text">{{$post["content"]}}</p>
          <h3>Author: </h3>
          <p class="card-text">{{$post->user["name"]}}</p>
        </div>
      </div>
 </div>
 @endsection