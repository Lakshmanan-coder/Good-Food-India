<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubscribeController extends Controller
{
    public function viewSubscriptions()
    {
        return view ('admin.subscriptions.ViewSubscriptions');
    }
}
