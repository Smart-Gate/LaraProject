@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Catagory</div>

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
    

<form action="{{route('tag.store')}}" method= 'POST' >
                {{csrf_field()}}
  <div class="form-group">
    <label for="tag">Tag</label>
    <input type="text" class="form-control" id="tag" name="tag"  placeholder="Enter Tag">
  </div>
  <button type="submit" class="btn btn-primary">Save</button>
</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
