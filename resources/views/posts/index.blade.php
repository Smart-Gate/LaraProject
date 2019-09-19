@extends('layouts.app')

@section('content')
<div class="container">
    
            <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Content</th>
                        <th scope="col">Image</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                            @foreach ($posts as $post)
                      <tr>
                      <td>{{$post->title}}</td>
                      <td>{{$post->content}}</td>
                      <td><img src="{{$post->feutured}}" alt="{{$post->title}}" class="img-thumbnail" width="20%" height="20%"></td>
                      <td><a href="{{route('posts.edit',['id'=>$post->id])}}"><i class="far fa-edit"></i>
                        </a></td>
                      <td><a href="{{route('posts.delete',['id'=>$post->id])}}"><i class="fas fa-trash-alt"></i></a></td>
                      </tr>
                      @endforeach
                      
                    </tbody>
                  </table>
       
       
        
    
</div>
@endsection
