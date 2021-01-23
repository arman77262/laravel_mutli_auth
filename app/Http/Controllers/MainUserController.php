<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class MainUserController extends Controller
{
    public function Logout(){
        Auth::logout();
        return redirect()->route('login');
    }

    public function UserProfile(){
        $id = Auth::user()->id;
        $user = User::find($id);
        return view('user.profile.view_profile',compact('user'));
    }

    public function UserProfileEdit(){
        $id = Auth::user()->id;
        $user = User::find($id);
        return view('user.profile.user_profile_edit', compact('user'));
    }

    public function UserProfileStore(Request $request){
        $data = User::find(Auth::user()->id);
        $data->name = $request->name;
        $data->email = $request->email;

        if($request->file('profile_photo_path')){
            $file = $request->file('profile_photo_path');
            @unlink(public_path('upload/userimg/'.$data->profile_photo_path));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/userimg'),$filename);
            $data['profile_photo_path'] = $filename;
        }
        $data->save();

        $notification = array(
            'message' => 'user profile updated successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('user.profile')->with($notification);
    }

    public function UserPasswordStore(){
        return view('user.password.edit_password');
    }

    public function UserPasswordUpdate(Request $request){
        $validateData = $request->validate([
            'oldpassword' => 'required',
            'password' => 'required|confirmed'
        ]);

        $hasPassword = Auth::user()->password;
        if(Hash::check($request->oldpassword, $hasPassword)){
            $user = User::find(Auth::user()->id);
            $user->password = Hash::make($request->password);
            $user->save();
            Auth::logout();
            $notification = array(
                'message' => "Password Updated Successfully",
                'alert-type' => 'success'
            );

            return redirect()->route('login')->with($notification);

        }else{
            return redirect()->back();
        }
    }
}
