@extends("layouts.app")
@section("title")
<h1>Edit post</h1>
@endsection
@section("body")
<form action="/postupdate/{{ $post->id }}" method="post">
    @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Title</label>
    <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $post->title }}">
    <label class="text-danger">{{$errors->first("title")}}</label>

  </div>
  <label for="exampleInputEmail1" class="form-label">Author</label>
  <select name="user_id" class="form-select">
    @foreach($users as $item)
      <option value="{{$item->id}}">{{$item->name}}</option>
    @endforeach
  </select>
  <div class="mb-3">
    <label for="exampleInputPassword1" name="content" class="form-label" >Content</label>
    <input type="text" name="content" class="form-control" id="exampleInputPassword1" value="{{$post->content}}">
    <label class="text-danger">{{ $errors->first('content') }}</label>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">الصوره</label>
    <input type="file" class="form-control" required name="image" value="{{ $post->image }}">
    <label class="text-danger">{{$errors->first("photo")}}</label>
</div>

<input type="hidden" name="id" value="{{ $post->id }}">

  <button type="submit" class="btn btn-success">Submit</button>  
</form>
@endsection