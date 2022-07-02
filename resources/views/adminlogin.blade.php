@extends('master')
@section("content")
<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4 mx-auto">
            <form action="adminlogin" method="POST" >
                <div class="mb-3">
                  @csrf
                  <label for="exampleInputEmail1" class="form-label"><b>User ID</b></label>
                  <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your User ID">
                  
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label"></label><b>Password</b></label>
                  <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Your Password">
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
              </form>
        </div>
    </div>
</div>
@endsection