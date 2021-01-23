@extends('user.user_master')
@section('user')

<div class="row" style="padding: 30px">
    <div class="col-sm-6" style="padding: 30px; background-color:lightgray">

<form method="POST" action="{{route('password.update')}}">
    @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Current Password</label>
      <input type="password" id="current_password" name="oldpassword" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">New Password</label>
      <input type="password" id="password" name="password" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
      <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" id="exampleInputPassword1">
    </div>

    <button type="submit" class="btn btn-primary">Update Password</button>
  </form>
</div>

</div>


@endsection
