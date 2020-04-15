<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subscribe;
use App\Plans;
use App\User;
use Illuminate\Support\Facades\Auth;
class CalenderController extends Controller
{
    public function adminCalender()
    {
        if (Auth::user()->user_type!='admin') {
            abort(401);
        }
        $subscribes=Subscribe::orderBy('id','desc')->get();
        $data=[];
        foreach ($subscribes as $subscribe) {
            
            if($plan=Plans::find($subscribe->plan_id)){

                        if ($plan->status=="active") {
                    
                            $planname=$plan->plan_name;
                            $user=User::findOrFail($subscribe->user_id);
                            $username=$user->name;
                            $subscribe->duration;
                            $results= explode(",",$subscribe->dates);
                            foreach ($results as $result) {
                                if($result!="" && $result!=","){

                                $date= explode("-",$result);
                                $actualdate="$date[2]-$date[1]-$date[0]";
                                $newdata=[
                                    'start'=>$actualdate,
                                    'title'=>$username.'-'.$planname
                                ];
                                array_push($data,$newdata);
                            }
                        }
                    }
                }   
            
            
            // echo $actualdate;
        }
        // return $data;
        return view ('admin.calender.Calender')->with('datas',$data);
    }
    public function usercalender()
    {
        $subscribes=Subscribe::where('user_id',Auth::user()->id)->orderBy('id','desc')->get();
        $data=[];
        foreach ($subscribes as $subscribe) {
            
            $plan=Plans::findOrFail($subscribe->plan_id);
            $planname=$plan->plan_name;
            $user=User::findOrFail($subscribe->user_id);
            $username=$user->name;
            $subscribe->duration;
            $results= explode(",",$subscribe->dates);
            foreach ($results as $result) {
                $date= explode("-",$result);
                $actualdate="$date[2]-$date[1]-$date[0]";
                $newdata=[
                    'start'=>$actualdate,
                    'title'=>$planname
                ];
                array_push($data,$newdata);
            }
            
            
            // echo $actualdate;
        }
        // return $data;
        return view ('user.calender')->with('datas',$data);
    }
}
