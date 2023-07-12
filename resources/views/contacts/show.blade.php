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
            <th scope="col">First Name</th>
            <th scope="col">{{$contacts->first_name}}</th>
          </tr>

          <tr>
            <th scope="col">Last Name</th>
            <th scope="col">{{$contacts->last_name}}</th>
          </tr>

          <tr>
            <th scope="col">Email</th>
            <th scope="col">{{$contacts->email}}</th>
          </tr>

          <tr>
            <th scope="col">Company Name</th>
            <th scope="col">{{$contacts->company->name}}</th>
          </tr>

          <tr>
            <th scope="col">Country</th>
            <th scope="col">{{$contacts->country->countryName}}</th>
          </tr>

          <tr>
            <th scope="col">Created At</th>
            <th scope="col">{{$contacts->created_at}}</th>
          </tr>

          <tr>
            <th scope="col">Updated At</th>
            <th scope="col">{{$contacts->updated_at}}</th>
          </tr>
        </thead>

      </table>
    </div>
  </div>

</div>
@endsection