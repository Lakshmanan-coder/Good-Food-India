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
        $starters=Menu::where('plan_id',$plan->id)->where('type','Starters')->get();
        $maincourses=Menu::where('plan_id',$plan->id)->where('type','MainCourse')->get();
        $desserts=Menu::where('plan_id',$plan->id)->where('type','Dessert')->get();
        $specials=Menu::where('plan_id',$plan->id)->where('type','SpecialOffers')->get();
         $planpictures=PlanPictures::where('plan_id',$plan->id)->get();
          return view ('user.plan-detail')->with([
              'plan'=>$plan,
              'starters'=>$starters,
              'maincourses'=>$maincourses,
              'desserts'=>$desserts,
              'specials'=>$specials,
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
    public function subscribe()
    {
        return view('user.subscribe');
    }
    public function checkout()
    {
        return view('user.checkout');
    }
    public function confirmed()
    {
        return view('user.confirmed');
    }
}
