@extends('admin.admin_master')
@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="row" style="padding: 30px">
    <div class="col-sm-6" style="padding: 30px; background-color:lightgray">

<form method="POST" action="{{route('profile.store')}}" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">User Name</label>
      <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$adminData->name}}">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Email</label>
      <input type="email" name="email" class="form-control" id="exampleInputPassword1" value="{{$adminData->email}}">
    </div>

    <div class="mb-3">
        <label for="formFile" class="form-label">Profile Images</label>
        <input class="form-control" type="file" id="image" name="profile_photo_path">
      </div>
    <div class="mb-3">
        <img id="showimage" src="{{(!empty($adminData->profile_photo_path ))?url('upload/adminimg/'.$adminData->profile_photo_path):url('upload/no_image.jpg')}}" style="width: 200px; height:200px">
      </div>
    <button type="submit" class="btn btn-primary">Update</button>
  </form>
</div>

</div>


<script>
    $(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showimage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>

@endsection
