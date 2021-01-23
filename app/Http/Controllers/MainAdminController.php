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
}
