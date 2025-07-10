<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function listUser(){
        $users = User::get();
        return view('adminPanel.users.listUser',['users'=>$users]);
    }
    public function edit($id){
        $user = User::findOrFail($id);
        return view('adminPanel.users.edit',compact('user'));
    }
    public function update(Request $request,$id){
        $users = User::findOrFail($id);
        $validated = $request->validate([
            'name' => 'required|min:3|max:15',
            'email' => 'required|email|unique:users,email,',
            'userName' => 'required|unique:users,userName,',
            'phone' => 'required|min:5|max:15',
            'role' => 'required',
        ]);
        $users->update([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'userName' => $validated['userName'],
            'phone' => $validated['phone'],
            'role' => $validated['role'],
        ]);
    }
    public function destroy($id){
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->back();
    }
}
