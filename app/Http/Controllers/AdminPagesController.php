<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class AdminPagesController extends Controller
{
    public function loginRedirect()
    {
       if (Auth::user()) {
          if (Auth::user()->user_type=='admin') {
            return redirect('/admin');
          }else{
           return redirect('/plans');
          }
       }else{
           return redirect('/');
       }
    }
    
    public function dashboard()
    {
        if (Auth::user()->user_type!='admin') {
            abort(401);
        }
        return view('admin.dashboard');
    }
}
