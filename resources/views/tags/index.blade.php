@extends('layouts.app')

@section('content')
<div class="container">
    
            <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Name</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                            @foreach ($tags as $tag)
                      <tr>
                        
                        
                      <td>{{$tag->id}}</td>
                      <td>{{$tag->tag}}</td>
                      <td><a href="{{route('tag.edit',['id'=>$tag->id])}}"><i class="far fa-edit"></i>
                        </a></td>
                      <td><a href="{{route('tag.delete',['id'=>$tag->id])}}"><i class="fas fa-trash-alt"></i></a></td>
                      </tr>
                      @endforeach
                      
                    </tbody>
                  </table>
       
       
        
    
</div>
@endsection
