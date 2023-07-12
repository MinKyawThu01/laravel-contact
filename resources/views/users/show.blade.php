@extends('layouts.sb')
@section('title', 'Detail')
@section('content')
<div class="container">

<div class="m-3">
    <a class="btn btn-outline-primary" href="{{route('users.index')}}" role="button">Back</a>
  </div>

<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
<table class="table table-info">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">{{$users->name}}</th>
    </tr>
    
    <tr>
      <th scope="col">Email</th>
      <th scope="col">{{$users->email}}</th>
    </tr>

    <tr>
      <th scope="col">Created At</th>
      <th scope="col">{{$users->created_at}}</th>
    </tr>

    <tr>
            <th scope="col">Updated At</th>
            <th scope="col">{{$users->updated_at}}</th>
          </tr>
  </thead>
 
</table>
</div>
</div>

</div>
@endsection