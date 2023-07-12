@extends('layouts.sb')
@section('content')
<main class="py-5">
      <div class="container">
        <div class="row justify-content-md-center">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header card-title">
                <strong>Add New Contact</strong>
              </div>           
              <div class="card-body">

                <form action="{{route('contacts.store')}}" method="POST">
                @csrf
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group row">
                      <label for="first_name" class="col-md-3 col-form-label">First Name</label>
                      <div class="col-md-9">
                        <input type="text" name="first_name" id="first_name" class="form-control">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="last_name" class="col-md-3 col-form-label">Last Name</label>
                      <div class="col-md-9">
                        <input type="text" name="last_name" id="last_name" class="form-control">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="email" class="col-md-3 col-form-label">Email</label>
                      <div class="col-md-9">
                        <input type="text" name="email" id="email" class="form-control">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="phone" class="col-md-3 col-form-label">Phone</label>
                      <div class="col-md-9">
                        <input type="text" name="phone" id="phone" class="form-control">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="name" class="col-md-3 col-form-label">Address</label>
                      <div class="col-md-9">
                        <textarea name="address" id="address" rows="3" class="form-control"></textarea>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="company_id" class="col-md-3 col-form-label">Company</label>
                      <div class="col-md-9">
                        <select name="company_id" id="company_id" class="form-control">

                        @foreach($company as $row)
                        <option value="{{$row->id}}" @if($row->id == old('name')) selected @endif>{{$row->name}}</option>
                        @endforeach
                        
                        </select>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="country_id" class="col-md-3 col-form-label">Country</label>
                
                      <div class="col-md-9">
                        <select name="country_id" id="country_id" class="form-control">

                        @foreach($countries as $row)
                        <option value="{{$row->id}}" @if($row->id == old('countryName')) selected @endif>{{$row->countryName}}</option>
                        @endforeach
                        
                        </select>
                      </div>
                    </div>
                
                    <hr>
                    <div class="form-group row mb-0">
                      <div class="col-md-9 offset-md-3">
                          <button type="submit" class="btn btn-primary">Save</button>
                          <a href="{{route('contacts.index')}}" class="btn btn-outline-secondary">Cancel</a>
                      </div>
                    </div>
                  </div>
                </div>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    @endsection

    @section('title','Create New Contacts')