<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Subscribe;
class AdminUserController extends Controller
{
    public function viewUsers()
    {
        if (Auth::user()->user_type!='admin') {
            abort(401);
        }
       $users=User::where('user_type','user')->get();
       return view('admin.users.ViewUsers')->with('users',$users);
    }
    public function ViewUserDetail($id)
    {
        if (Auth::user()->user_type!='admin') {
            abort(401);
        }
        $user=User::findOrFail($id);
        $subscribes=Subscribe::where('user_id',$id)->get();
        return view('admin.users.ViewUserDetail')->with(['user'=>$user,'subscribes'=>$subscribes]);
    }
}
