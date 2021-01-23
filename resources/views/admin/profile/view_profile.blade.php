@extends('admin.admin_master')
@section('admin')



        <div class="card" style="width: 18rem; margin-left:50px; margin-top:50px;">
            <img src="{{(!empty($adminData->profile_photo_path ))?url('upload/adminimg/'.$adminData->profile_photo_path):url('upload/no_image.jpg')}}" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">Admin Name: {{$adminData->name}}</h5>
              <p class="card-text">Admin Email: {{$adminData->email}}</p>
              <a href="{{route('admin.profile.edit')}}" class="btn btn-primary">Edit Profile</a>
            </div>
          </div>

@endsection
