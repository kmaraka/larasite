<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index() {
        // $allData = User::all();
        $data['allData'] = User::all();
        return view('admin.users.index', $data);
    } // End Method

    public function create() {        
        return view('admin.users.create');
    } // End Method

    public function store(Request $request) {        

        $validatedData = $request->validate([
            'email' => 'required|unique:users',
            'name' => 'required',
        ]);

        $data = new User();
        $data->usertype = $request->usertype;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = bcrypt($request->password);
        $data->save();

        $notification = array(
            'message' => 'User Inserted Successfully',
            'alert-type' => 'success',
        );
        return redirect()->route('user.view')->with($notification);


    } // End Method

    public function edit($id) {    
        $editData = User::find($id);    
        return view('admin.users.edit', compact('editData'));
    } // End Method

    public function update(Request $request, $id) {    

        $data = User::find($id);
        $data->usertype = $request->usertype;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = bcrypt($request->password);
        $data->save();

        $notification = array(
            'message' => 'User Update Successfully',
            'alert-type' => 'info',
        );
        return redirect()->route('user.view')->with($notification);

    } // End Method


    public function delete($id) {
        $user = User::find($id);
        $user->delete();

        $notification = array(
            'message' => 'User Deleted Successfully',
            'alert-type' => 'info',
        );
        return redirect()->route('user.view')->with($notification);
    } // End Method

}
