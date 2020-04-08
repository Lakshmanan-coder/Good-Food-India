@extends('layouts.user')
@section('header_type','header element_to_stick')

@section('content')
      
 <!--hero section-->
 <div class="hero_single inner_pages background-image" data-background="url(img/hero_submit.jpg)">
    <div class="opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.6)">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-9 col-lg-10 col-md-8">
                    <h1>Attract New Customers</h1>
                    <p>More bookings from diners around the corner</p>
                </div>
            </div>
            <!-- /row -->
        </div>
    </div>
</div>
<!-- /hero_single -->
    <!-- View plans -->
<main>
	<div class="container margin_60_40">
        

        <div class="row">
            <div class="col-12">
                <div class="main_title version_2">
                    <span><em></em></span>
                    <h2>All Plans</h2>
                    {{-- <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p> --}}
                    {{-- <a href="#0">View All</a> --}}
                </div>
            </div>
            @if (count($plans)>0)
            @foreach ($plans as $plan)
            @php $menus=App\Menu::where('plan_id',$plan->id)->get(); $planpicture=App\PlanPictures::where('plan_id',$plan->id)->first(); @endphp
            <div class="col-md-6">
                <div class="list_home">
                    <ul>
                        <li>
                            <a href="/plan-detail/{{$plan->id}}">
                                <figure>
                                    <img src="/storage/plan_picture/{{$planpicture->path}}" data-src="/storage/plan_picture/{{$planpicture->path}}" alt=""
                                        class="lazy" style=" ">
                                </figure>
                                {{-- <div class="score"><strong>9.5</strong></div> --}}
                                <em>{{count($menus)}} Delicious Menu</em>
                                <h3>{{$plan->plan_name}}</h3>
                                <small></small>
                                <ul>
                                    {{-- <li><span class="ribbon off">-30%</span></li> --}}
                                <li>Price Rs. {{$plan->price}}</li>
                                </ul>
                            </a>
                        </li>
                     
                  
                    </ul>
                </div>
            </div>
            @endforeach
        @endif
        </div>
        <!-- /row -->
        <p class="text-center d-block d-md-block d-lg-none"><a href="grid-listing-filterscol.html" class="btn_1">View All</a></p>
        <!-- /button visibile on tablet/mobile only -->

     
       
    </div>
    <!-- /bg_gray -->
</main>


@endsection