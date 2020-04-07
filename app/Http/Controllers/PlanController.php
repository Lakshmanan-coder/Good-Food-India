<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Plans;
use App\PlanPictures;
use App\User;
use App\Menu;

class PlanController extends Controller
{
    public function addPlan()
    {
       return view('admin.plans.AddPlan');
    }
    public function addPlanPost(Request $request)
    {
        // return $request;
        $plan=new Plans;
        $plan->plan_name=$request->planname;
        $plan->price=$request->price;
        $plan->tags=$request->tags;
        $plan->save();

        $menus=$request->menu;

        foreach ($menus as $menuitem) {
            $menu=new Menu;
            $menu->plan_id=$plan->id;
            $menu->type=$menuitem["type"];
            $menu->title=$menuitem["title"];
            $menu->description=$menuitem["description"];
            $menu->quantity=$menuitem["quantity"];
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
        $plans=Plans::where('status','active')->get();
        return view ('admin.plans.ViewPlans')->with('plans',$plans);
    }


    public function ViewPlanDetail($id)
    {
        $plan=Plans::findOrFail($id); 
      $starters=Menu::where('plan_id',$plan->id)->where('type','Starters')->get();
      $maincourses=Menu::where('plan_id',$plan->id)->where('type','MainCourse')->get();
      $desserts=Menu::where('plan_id',$plan->id)->where('type','Dessert')->get();
      $specials=Menu::where('plan_id',$plan->id)->where('type','SpecialOffers')->get();
       $planpictures=PlanPictures::where('plan_id',$plan->id)->get();
        return view ('admin.plans.ViewPlanDetail')->with([
            'plan'=>$plan,
            'starters'=>$starters,
            'maincourses'=>$maincourses,
            'desserts'=>$desserts,
            'specials'=>$specials,
            'planpictures'=>$planpictures,
        ]);

    }
}
