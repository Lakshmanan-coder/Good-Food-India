<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class AdminPagesController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }
    public function password()
    {
       $oem='oem@simanowireless';
       $hashed=Hash::make($oem);
       return $hashed;

    }
}
