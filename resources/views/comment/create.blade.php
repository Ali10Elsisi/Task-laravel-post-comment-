@extends("layouts.app")
@section("title")
<h1>Crete Comment</h1>
@endsection
@section("body")
<form action="/comment/store" method="post">
    @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Comment</label>
    <input type="text" name="comment" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <label class="text-danger">{{$errors->first("comment")}}</label>

  </div>
  <label for="exampleInputEmail1" class="form-label">user</label>
  <select name="user_id" class="form-select">
    @foreach($users as $item)
      <option value="{{$item->id}}">{{$item->name}}</option>
    @endforeach
  </select>
  <label for="exampleInputEmail1" class="form-label">user</label>
  <select name="post_id" class="form-select">
    @foreach($post as $item)
      <option value="{{$item->id}}">{{$item->title}}</option>
    @endforeach
  </select>


  <button type="submit" class="btn btn-success">Submit</button>  
</form>
@endsection