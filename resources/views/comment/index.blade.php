@extends('layouts.app')
@section("title")
    Comments
@endsection

@section("body")
      <a href="/comment/create" class="btn btn-primary">Create Comment</a>
      <table class="table">
            <tr>
                <th>comment</th>
                <th>Author</th>
                <th>post</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach($comment as $item )
            <tr>
              <td>
              {{$item["comment"]}} 
              </td>
              <td>
                {{$item->user->name}}
              </td>
              <td>
                {{$item->post->title}}
              </td>        
              <td><a href="/commentedit/{{ $item->id }}" class="btn btn-warning">Edit</a></td>
              <td><a href="/commentdelete/{{ $item->id }}" class="btn btn-danger">Delete</a></td>
            </tr>
            @endforeach
      </table>
@endsection      
