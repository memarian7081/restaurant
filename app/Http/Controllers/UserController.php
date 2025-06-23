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
}
