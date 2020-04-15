<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Plans;
use App\PlanPictures;
use App\User;
use App\Menu;
use App\Subscribe;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

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
        $plans=Plans::orderBy('id','desc')->where('status','active')->paginate(6);
        return view('user.home')->with('plans',$plans);
    }
    public function plans()
    {
        $plans=Plans::orderBy('id','desc')->where('status','active')->get();
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
        $subscribes=Subscribe::where('user_id',Auth::user()->id)->get();
        return view('user.profile')->with('subscribes',$subscribes);
    }
    public function EditProfile(Request $request)
    {
        $user=User::find(Auth::user()->id);
        $user->name=$request->name;
        $user->phoneno=$request->phoneno;
        if($file=$request->file('profile_picture')){
                $filenameWithExt=$file->getClientOriginalName();
                $filename= pathinfo($filenameWithExt,PATHINFO_FILENAME);
                $extension=$file->getClientOriginalExtension();
                $fileNameToStore=$filename.'_'.time().'.'.$extension;
                $path=$file->storeAs('public/profile_picture/',$fileNameToStore);
                $user->profile_picture=$fileNameToStore;
        }
        $user->save();
        return redirect()->back()->with('success','Profile Updated');

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
        $address=Subscribe::where('user_id',Auth::user()->id)->orderBy('id','desc')->first();
        return view('user.subscribe')->with([
            'plan'=>$plan,
            'picture'=>$planpicture,
            'menus'=>$menus,
            'address'=>$address

        ]);
    }
    public function checkout(Request $request)
    {
        // return $request;
        $sub=new Subscribe;
        $sub->plan_id=$request->product_id;
        $sub->user_id=Auth::user()->id;
        $sub->payment_id=$request->razorpay_payment_id;
        $sub->totalamount=$request->totalAmount;
        $sub->duration=$request->duration;
        $sub->doorno=$request->doorno;
        $sub->street=$request->street;
        $sub->city=$request->city;
        $sub->postelcode=$request->postelcode;
        $sub->timeslot=$request->timeslot;
        if ($request->duration!=30) {
            $results= explode(",",$request->dates);
            $count=1;
            $actualdate='';
            foreach ($results as $result) {
            if ($count==1) {
            $actualdate=$result;   
            }else{
            $actualdate=$actualdate.','.$result;   
            }
            if ($count==$request->duration) {
            break;
            }
            $count++;
            }
            $sub->dates=$actualdate;
            $sub->save();
            return response()->json(['succes'=>'stored']);
        }else{
            // return response()->json(['123'=>'stored']);
            $startDate=$request->dates;
            // echo $startDate;
            $dates=$startDate;
            $newdate=$startDate;
            for($i=1; $i<30; $i++){
                $newdate=date('d-m-Y', strtotime($newdate. ' + 1 days'));
                $dates=$dates.','.$newdate;
            }
            $sub->dates=$dates;
            $sub->save();
            return response()->json(['succes'=>'stored']);
        }
       
    }
    public function confirmed()
    {
        return view('user.confirmed');
    }

    public function EditDays(Request $request)
    {
        
    //    return $request;
       $sub=Subscribe::findOrFail($request->sub_id);
       if ($request->duration!=30) {
        $results= explode(",",$sub->dates);
        $count=0;
        $dates="";
            foreach ($results as $result) {
                    if(strtotime($result) < time()) {
                        if ($count==0) {
                            $dates=$result;
                        }else{
                            $dates=$dates.','.$result;
                        }
                        $count++;
                    }  
            }
        $newdates=$dates.','.$request->dates;
        $sub->dates=$newdates;
        $sub->save();
            return redirect()->back()->with('success','Updated');
       }else{
        $startDate=$request->dates;
        // echo $startDate;
        $dates=$startDate;
        $newdate=$startDate;
        for($i=1; $i<30; $i++){
            $newdate=date('d-m-Y', strtotime($newdate. ' + 1 days'));
            $dates=$dates.','.$newdate;
            if ($i >= $request->count-1) {
                break;
            }
        }
        $sub->dates=$dates;
        $sub->save();
        return redirect()->back()->with('success','Updated');
       }
       
    }













    public function terms()
    {
        return view('user.terms');
    }
    public function privacy()
    {
        return view('user.privacy');
    }
    public function refund()
    {
        return view('user.refund');
    }




}
