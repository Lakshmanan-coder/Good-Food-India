<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subscribe;
use App\Plans;
use App\User;

class CalenderController extends Controller
{
    public function adminCalender()
    {
        $subscribes=Subscribe::orderBy('id','desc')->get();
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
                    'title'=>$planname.'-'.$username
                ];
                array_push($data,$newdata);
            }
            
            
            // echo $actualdate;
        }
        // return $data;
        return view ('admin.calender.Calender')->with('datas',$data);
    }
}
