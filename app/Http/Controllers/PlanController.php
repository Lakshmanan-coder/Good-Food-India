<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Plans;
use App\PlanPictures;
use App\User;
use App\Menu;
use Illuminate\Support\Facades\Auth;

class PlanController extends Controller
{
    public function addPlan()
    {
        if (Auth::user()->user_type!='admin') {
            abort(401);
        }
       return view('admin.plans.AddPlan');
    }
    public function addPlanPost(Request $request)
    {
        if (Auth::user()->user_type!='admin') {
            abort(401);
        }
        // return $request;
        $plan=new Plans;
        $plan->plan_name=$request->planname;
        $plan->one_price=$request->one_price;
        $plan->seven_price=$request->seven_price;
        $plan->fifteen_price=$request->fifteen_price;
        $plan->month_price=$request->month_price;
        $plan->tags=$request->tags;
        $plan->save();

        $menus=$request->menu;

        foreach ($menus as $menuitem) {
            $menu=new Menu;
            $menu->plan_id=$plan->id;
            $menu->title=$menuitem["title"];
            $menu->description=$menuitem["description"];
            $menu->save();
        }


        $input=$request->all();
        $images=array();
        if($files=$request->file('pictures')){
            foreach($files as $file){
                $filenameWithExt=$file->getClientOriginalName();
                $filename= pathinfo($filenameWithExt,PATHINFO_FILENAME);
                $extension=$file->getClientOriginalExtension();
                $fileNameToStore=$filename.'_'.time().'.'.$extension;
                $path=$file->storeAs('public/plan_picture/',$fileNameToStore);
                $picture=new PlanPictures;
                $picture->plan_id=$plan->id;
                $picture->path=$fileNameToStore;
                $picture->save();
            }
        }

        return redirect()->back()->with('success','Product Successfully Added');


    }

    public function ViewPlan()
    {
        if (Auth::user()->user_type!='admin') {
            abort(401);
        }
        $plans=Plans::where('status','active')->get();
        return view ('admin.plans.ViewPlans')->with('plans',$plans);
    }


    public function ViewPlanDetail($id)
    {
        if (Auth::user()->user_type!='admin') {
            abort(401);
        }
        $plan=Plans::findOrFail($id); 
      $menus=Menu::where('plan_id',$plan->id)->get();

       $planpictures=PlanPictures::where('plan_id',$plan->id)->get();
        return view ('admin.plans.ViewPlanDetail')->with([
            'plan'=>$plan,
            'menus'=>$menus,
            'planpictures'=>$planpictures,
        ]);

    }
    public function DeletePlanDetail($id)
    {
        if (Auth::user()->user_type!='admin') {
            abort(401);
        }
        $plan=Plans::findOrFail($id); 
        $plan->status="inactive";
        $plan->save();
        return redirect()->back()->with('success','Plan  Removed');


    }
    public function EditPlanDetail($id)
    {
        if (Auth::user()->user_type!='admin') {
            abort(401);
        }
        $plan=Plans::findOrFail($id); 
        $menus=Menu::where('plan_id',$plan->id)->get();
        $planpictures=PlanPictures::where('plan_id',$plan->id)->get();
        return view ('admin.plans.editPlan')->with([
            'plan'=>$plan,
            'menus'=>$menus,
            'planpictures'=>$planpictures,
        ]);

    }



    public function EditPlanDetailPost(Request $request,$id)
    {
        if (Auth::user()->user_type!='admin') {
            abort(401);
        }
        // return $request;
        $plan=Plans::findOrFail($id);
        $plan->plan_name=$request->planname;
        $plan->one_price=$request->one_price;
        $plan->seven_price=$request->seven_price;
        $plan->fifteen_price=$request->fifteen_price;
        $plan->month_price=$request->month_price;
        $plan->tags=$request->tags;
        $plan->save();

        $menus=$request->menu;

        foreach ($menus as $menuitem) {
            $menu=new Menu;
            $menu->plan_id=$plan->id;
            $menu->title=$menuitem["title"];
            $menu->description=$menuitem["description"];
            $menu->save();
        }


        $input=$request->all();
        $images=array();
        if($files=$request->file('pictures')){
            foreach($files as $file){
                $filenameWithExt=$file->getClientOriginalName();
                $filename= pathinfo($filenameWithExt,PATHINFO_FILENAME);
                $extension=$file->getClientOriginalExtension();
                $fileNameToStore=$filename.'_'.time().'.'.$extension;
                $path=$file->storeAs('public/plan_picture/',$fileNameToStore);
                $picture=new PlanPictures;
                $picture->plan_id=$plan->id;
                $picture->path=$fileNameToStore;
                $picture->save();
            }
        }

        return redirect()->back()->with('success','Product Successfully Updated');


    }


    public function deletePlanPicture($id)
    {
        if (Auth::user()->user_type!='admin') {
            abort(401);
        }
        $planpictures=PlanPictures::findOrFail($id);
        $planpictures->delete();
        return redirect()->back()->with('success','Product Image  Removed');
        

    }
    public function deleteMenuItem($id)
    {
        if (Auth::user()->user_type!='admin') {
            abort(401);
        }
        $menu=Menu::findOrFail($id);
        $menu->delete();
        return redirect()->back()->with('success','Menu Item  Removed');
        

    }
}
