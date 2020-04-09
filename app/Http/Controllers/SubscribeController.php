<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subscribe;
use App\User;
use App\Plans;
use App\PlanPictures;
use App\Menu;
use Illuminate\Support\Facades\Auth;


class SubscribeController extends Controller
{
    public function viewSubscriptions()
    {
        if (Auth::user()->user_type!='admin') {
            abort(401);
        }
        $subscribes=Subscribe::all();
        return view ('admin.subscriptions.ViewSubscriptions')
        ->with([
            'subscribes'=>$subscribes
        ]);
    }
    public function ViewSubscribeDetail($id)
    {
        if (Auth::user()->user_type!='admin') {
            abort(401);
        }
        $subscribe=Subscribe::findOrFail($id);
        $user=User::findOrFail($subscribe->user_id);
        $plan=Plans::findOrFail($subscribe->plan_id);
        $menus=Menu::where('plan_id',$plan->id)->get();
        $planpictures=PlanPictures::where('plan_id',$plan->id)->get();



        return view ('admin.subscriptions.ViewSubscriptionDetail')
        ->with([
            'subscribe'=>$subscribe,
            'user'=>$user,
            'plan'=>$plan,
            'menus'=>$menus,
            'planpictures'=>$planpictures,
        ]);

    }
}
