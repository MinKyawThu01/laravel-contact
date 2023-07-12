@extends('layouts.sb')
@section('title', 'Create New Users')
@section('content')

 <!-- content -->
 <main class="py-5">
      <div class="container">
        <div class="row justify-content-md-center">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header card-title">
                <strong>Add New Users</strong>
              </div>           
              <div class="card-body">
              <form action="{{route('users.store')}}" method="POST">
            @csrf

                <div class="row">
                  <div class="col-md-12">

                    <div class="form-group row">
                      <label for="name" class="col-md-3 col-form-label">Name</label>
                      <div class="col-md-9">
                        <input type="text" name="name" id="name" class="form-control">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="email" class="col-md-3 col-form-label">Email</label>
                      <div class="col-md-9">
                        <input type="email" name="email" id="email" class="form-control">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="password" class="col-md-3 col-form-label">Password</label>
                      <div class="col-md-9">
                        <input type="password" name="password" id="password" class="form-control" placeholder="Use Enter Your Password">
                      </div>
                    </div>

                    
                    
                    <hr>
                    <div class="form-group row mb-0">
                      <div class="col-md-9 offset-md-3">
                          <button type="submit" class="btn btn-primary">Save</button>
                          <a href="{{route('users.index')}}" class="btn btn-outline-secondary">Cancel</a>
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