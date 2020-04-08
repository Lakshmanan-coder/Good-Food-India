<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Plans;
use App\PlanPictures;
use App\User;
use App\Menu;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $plans=Plans::orderBy('id','desc')->paginate(6);
        return view('user.home')->with('plans',$plans);
    }
    public function plans()
    {
        $plans=Plans::orderBy('id','desc')->get();
        return view('user.plans')->with('plans',$plans);
    }
    public function planDetail($id)
    {
        $plan=Plans::findOrFail($id); 
        $menus=Menu::where('plan_id',$plan->id)->get();
  
         $planpictures=PlanPictures::where('plan_id',$plan->id)->get();
          return view ('user.plan-detail')->with([
              'plan'=>$plan,
              'menus'=>$menus,
              'planpictures'=>$planpictures,
          ]);
    }
    public function profile()
    {
        return view('user.profile');
    }
    public function wallet()
    {
        return view('user.wallet');
    }
    public function calender()
    {
        return view('user.calender');
    }
    public function subscribe(Request $request)
    {
        $plan=Plans::findOrFail($request->plan_id); 
        $planpicture=PlanPictures::where('plan_id',$plan->id)->first();
        $menus=Menu::where('plan_id',$plan->id)->get();
        return view('user.subscribe')->with([
            'plan'=>$plan,
            'picture'=>$planpicture,
            'menus'=>$menus,

        ]);
    }
    public function checkout(Request $request)
    {
        return $request;
        return view('user.checkout');
    }
    public function confirmed()
    {
        return view('user.confirmed');
    }
}
