<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserManagementController extends Controller
{
    /** Users List */
    public function userList()
    {
        $users = User::all();
        return view('user.userlist',compact('users'));
    }
}
