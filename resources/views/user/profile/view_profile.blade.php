@extends('user.user_master')
@section('user')



        <div class="card" style="width: 18rem; margin-left:50px; margin-top:50px;">
            <img src="{{(!empty($user->profile_photo_path ))?url('upload/userimg/'.$user->profile_photo_path):url('upload/no_image.jpg')}}" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">User Name: {{$user->name}}</h5>
              <p class="card-text">User Email: {{$user->email}}</p>
              <a href="{{route('profile.edit')}}" class="btn btn-primary">Edit Profile</a>
            </div>
          </div>

@endsection
