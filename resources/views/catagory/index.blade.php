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
                            @foreach ($catagories as $catagory)
                      <tr>
                        
                        
                      <td>{{$catagory->id}}</td>
                      <td>{{$catagory->name}}</td>
                      <td><a href="{{route('catagory.edit',['id'=>$catagory->id])}}"><i class="far fa-edit"></i>
                        </a></td>
                      <td><a href="{{route('catagory.delete',['id'=>$catagory->id])}}"><i class="fas fa-trash-alt"></i></a></td>
                      </tr>
                      @endforeach
                      
                    </tbody>
                  </table>
       
       
        
    
</div>
@endsection
