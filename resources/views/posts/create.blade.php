@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Post</div>

                <div class="card-body">

                @if(count($errors)>0)
                @foreach($errors->all() as $error)

                <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
          <div class="alert alert-danger" role="alert">
              {{$error}}
            </div>
       
      </li> 
    </ul>
    @endforeach
    @endif
    

<form action="{{route('posts.store')}}" method= 'POST' enctype="multipart/form-data">
                {{csrf_field()}}

<div class="form-group">
    <label for="catagory">Catagory</label>
    <select class="custom-select " id="catagory" name="catagory_id">
        <option selected>Choose...</option>
        @foreach($catagory as $item)
    <option value="{{$item->id}}">{{$item->name}}</option>
        @endforeach
      </select>
  </div>
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" name="title"  placeholder="Enter title">
  </div>
  <div class="form-group">
    <label for="content">Descreption</label>
    <textarea class="form-control" id="content" name="content" rows="8" clos='8'></textarea>
  </div>
  <div class="form-group">
    <label for="feutured">Photo</label>
    <input type="file" class="form-control-file" id="feutured" name="feutured">
  </div>
 
  <button type="submit" class="btn btn-primary">Save</button>
</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
