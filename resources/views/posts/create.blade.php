@extends("layouts.app")
@section("title")
<h1>Crete post</h1>
@endsection
@section("body")
<form action="/posts/store" method="post">
    @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Title</label>
    <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <label class="text-danger">{{$errors->first("title")}}</label>

  </div>
  <label for="exampleInputEmail1" class="form-label">Author</label>
  <select name="user_id" class="form-select">
    @foreach($users as $item)
      <option value="{{$item->id}}">{{$item->name}}</option>
    @endforeach
  </select>
  <div class="mb-3">
    <label for="exampleInputPassword1" name="content" class="form-label">Content</label>
    <input type="text" name="content" class="form-control" id="exampleInputPassword1">
    <label class="text-danger">{{ $errors->first('content') }}</label>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">الصوره</label>
    <input type="file" class="form-control" required name="image">
    <label class="text-danger">{{$errors->first("image")}}</label>
</div>

  <button type="submit" class="btn btn-success">Submit</button>  
</form>
@endsection