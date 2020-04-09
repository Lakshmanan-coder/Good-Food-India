<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subscribe;

class SubscribeController extends Controller
{
    public function viewSubscriptions()
    {
        $subscribes=Subscribe::all();
        return view ('admin.subscriptions.ViewSubscriptions')
        ->with([
            'subscribes'=>$subscribes
        ]);
    }
}
