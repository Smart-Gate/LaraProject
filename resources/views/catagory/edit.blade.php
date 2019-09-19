@extends('layouts.app')

@section('content')
<div class="container">
    
<div class="card-header">Edit Catagory {{$catagory->name}}</div>

<form action="{{route('catagory.update',['id'=>$catagory->id])}}" method= 'POST' >
                {{csrf_field()}}
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" name="name"  value="{{$catagory->name}}">
  </div>
  <button type="submit" class="btn btn-primary">Update</button>
</form>
                </div>
            </div>
    
@endsection
