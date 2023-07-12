@extends('layouts.sb')
@section('title', 'Detail')
@section('content')
<div class="container">

<div class="m-3">
    <a class="btn btn-outline-primary" href="{{route('contacts.index')}}" role="button">Back</a>
  </div>

<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
<table class="table table-info">
  <thead>
    <tr>
      <th scope="col">Company Name</th>
      <th scope="col">{{$companies->name}}</th>
    </tr>

    <tr>
      <th scope="col">Address</th>
      <th scope="col">{{$companies->address}}</th>
    </tr>

    <tr>
      <th scope="col">Email</th>
      <th scope="col">{{$companies->email}}</th>
    </tr>

    <tr>
      <th scope="col">Website</th>
      <th scope="col">{{$companies->website}}</th>
    </tr>

    <tr>
      <th scope="col">Created At</th>
      <th scope="col">{{$companies->created_at}}</th>
    </tr>

    <tr>
            <th scope="col">Updated At</th>
            <th scope="col">{{$companies->updated_at}}</th>
          </tr>
  </thead>
 
</table>
</div>
</div>

</div>
@endsection