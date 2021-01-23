<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainAdminController extends Controller
{
    public function AdminProfile(){
        $adminData = Admin::find(1);
        return view('admin.profile.view_profile',compact('adminData'));
    }

    public function AdminProfileEdit(){
        $adminData = Admin::find(1);
        return view('admin.profile.edit_profile', compact('adminData'));
    }

    public function AdminProfileStore(Request $request){
        $data = Admin::find(1);
        $data->name = $request->name;
        $data->email = $request->email;

        if($request->file('profile_photo_path')){
            $file = $request->file('profile_photo_path');
            @unlink(public_path('upload/adminimg/'.$data->profile_photo_path));
            $fileName = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/adminimg'),$fileName);
            $data['profile_photo_path']= $fileName;
        }

        $data->save();

        $notification = array(
            'message' => 'Admin profile updated successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.profile')->with($notification);
    }
}
