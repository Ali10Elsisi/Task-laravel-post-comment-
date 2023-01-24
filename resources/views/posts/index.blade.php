@extends('layouts.app')
@section("title")
    posts
@endsection

@section("body")
      <a href="/posts/create" class="btn btn-primary">Create post</a>
      <table class="table">
            <tr>
                <th>title</th>
                <th>Author</th>
                <th>Content</th>
                <th>image</th>
                <th>View</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach($posts as $item )
            <tr>
              <td>
              {{$item["title"]}} 
              </td>
              <td>
                {{$item->user->name}}
              </td>
              <td>
                {{$item["content"]}}
              </td>
              <td>
                {{$item["image"]}}
              </td>            
              <td><a href="/postsshow/{{$item->id}}" class="btn btn-primary">Show</a></td>
              <td><a href="/postedit/{{ $item->id }}" class="btn btn-warning">Edit</a></td>
              <td><a href="/postdelete/{{ $item->id }}" class="btn btn-danger">Delete</a></td>
            </tr>
            @endforeach
      </table>
@endsection      
