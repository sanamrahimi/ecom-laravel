@extends('master')
@section("content")

<div class="container custom-login">
<div class="row">
<div class="col-sm-4 col-sm-offset-4">

       <form>
        <div class="form-group">
        <label for="exampleInputEmail">Email address</label>
        <input type="email" class="form-control" id="exampleInputPassword" placeholder="Email">
        </div>
       <div class="form-group">
       <label for="exampleInputPassword">password</label>
       <input type="password" class="form-control" id="exmpleInputPassword" placeholder="password">
       </div>
       <button type="submib" class="btn btn-default">submit</button>
       </form>
</div>
</div>
</div>

@endsection