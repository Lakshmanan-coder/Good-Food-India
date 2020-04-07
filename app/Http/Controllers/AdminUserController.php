<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
class AdminUserController extends Controller
{
    public function viewUsers()
    {
       $users=User::where('user_type','user')->get();
       return view('admin.users.ViewUsers')->with('users',$users);
    }
    public function ViewUserDetail($id)
    {
        $user=User::findOrFail($id);
        return view('admin.users.ViewUserDetail')->with('user',$user);
    }
}
