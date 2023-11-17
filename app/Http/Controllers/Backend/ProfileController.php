<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index() {
        $id = Auth::user()->id;
        $currentuser = User::find($id);
        return view('admin.users.view_profile', compact('currentuser'));
    }

    public function create() {   
        $id = Auth::user()->id;
        $editcurrentuser = User::find($id);     
        return view('admin.users.create_profile', compact('editcurrentuser'));
    } // End Method

    public function store(Request $request) {        

        $data = User::find(Auth::user()->id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->mobile = $request->mobile;
        $data->address = $request->address;
        $data->bio = $request->bio;
        $data->gender = $request->gender;
        
        if ($request->file('image')) {
            $file = $request->file('image');
            @unlink(public_path('upload/users_images/'.$data->image));
            $name_gen = hexdec(uniqid()).'.'.$file->getClientOriginalExtension();
            $file->move(public_path('upload/users_images'),$name_gen);
            $data['image'] = $name_gen;
        }
       
        $data->save();

        $notification = array(
            'message' => 'User Profile Updated Successfully',
            'alert-type' => 'success',
        );
        return redirect()->route('profile.view')->with($notification);


    } // End Method

    public function PasswordView() {      
        return view('admin.users.edit_password');
    } // End Method

    public function PasswordUpdate(Request $request) {

        $validatedData = $request->validate([
            'oldpassword' => 'required',
            'password' => 'required|confirmed',
        ]);

        $hashedPassword = Auth::user()->password;
        if (Hash::check($request->oldpassword,$hashedPassword)) {
            $user = User::find(Auth::id());
            $user->password = Hash::make($request->password);
            $user->save();
            Auth::logout();
            return redirect()->route('login');
        }else{
            return redirect()->back();
        }

    } // End Method
}
