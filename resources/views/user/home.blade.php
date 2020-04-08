@extends('layouts.user')
@section('header_type','header element_to_stick')
@section('content')

<!--SLIDER-->
<div id="carousel-home">
    <div class="owl-carousel owl-theme">
        <div class="owl-slide cover" style="background-image: url(img/slides/slide_home_2.jpg);">
            <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                <div class="container">
                    <div class="row justify-content-center justify-content-md-end">
                        <div class="col-lg-6 static">
                            <div class="slide-text text-right white">
                                <h2 class="owl-slide-animated owl-slide-title">Enjoy<br>unique food</h2>
                                <p class="owl-slide-animated owl-slide-subtitle">
                                    Huge variery of food at the best price
                                </p>
                                <div class="owl-slide-animated owl-slide-cta"><a class="btn_1"
                                        href="grid-listing-filterscol.html" role="button">Read more</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/owl-slide-->
        <div class="owl-slide cover" style="background-image: url(img/slides/slide_home_1.jpg);">
            <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                <div class="container">
                    <div class="row justify-content-center justify-content-md-start">
                        <div class="col-lg-6 static">
                            <div class="slide-text white">
                                <h2 class="owl-slide-animated owl-slide-title">Discover<br>and Reserve</h2>
                                <p class="owl-slide-animated owl-slide-subtitle">
                                    The best restaurants at the best price
                                </p>
                                <div class="owl-slide-animated owl-slide-cta"><a class="btn_1"
                                        href="grid-listing-filterscol.html" role="button">Read more</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/owl-slide-->
        <div class="owl-slide cover" style="background-image: url(img/slides/slide_home_3.jpg);">
            <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.6)">
                <div class="container">
                    <div class="row justify-content-center justify-content-md-start">
                        <div class="col-lg-12 static">
                            <div class="slide-text text-center white">
                                <h2 class="owl-slide-animated owl-slide-title">Enjoy<br>a friends dinner</h2>
                                <p class="owl-slide-animated owl-slide-subtitle">
                                    The best restaurants at the best price
                                </p>
                                <div class="owl-slide-animated owl-slide-cta"><a class="btn_1"
                                        href="grid-listing-filterscol.html" role="button">Read more</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/owl-slide-->
        </div>
    </div>
    <div id="icon_drag_mobile"></div>
</div>
<!--/carousel-->



<!-- POPULAR PLANS -->

<div class="container margin_60_40">


    <div class="row">
        <div class="col-12">
            <div class="main_title version_2">
                <span><em></em></span>
                <h2>Latest Plans</h2>
                {{-- <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p> --}}
                <a href="/plans">View All</a>
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
                                <li>Price Rs. {{$plan->one_price}} - {{$plan->month_price}}</li>
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
    <p class="text-center d-block d-md-block d-lg-none"><a href="/plans" class="btn_1">View
            All</a></p>
    <!-- /button visibile on tablet/mobile only -->



</div>
<!-- /container -->


<!-- BEST DEALS -->

<div class="bg_gray">
    <div class="container margin_60_40">
        <div class="main_title center">
            <span><em></em></span>
            <h2>Best Deals</h2>
            <p>Cum doctus civibus efficiantur in imperdiet deterruisset</p>
        </div>
        <!-- /main_title -->
        <div class="owl-carousel owl-theme categories_carousel">
            <div class="item">
                <a href="#0">
                    <span>98</span>
                    <i class="icon-food_icon_pizza"></i>
                    <h3>Pizza - Italian</h3>
                    <small>Avg price $40</small>
                </a>
            </div>
            <div class="item">
                <a href="#0">
                    <span>87</span>
                    <i class="icon-food_icon_sushi"></i>
                    <h3>Japanese - Sushi</h3>
                    <small>Avg price $50</small>
                </a>
            </div>
            <div class="item">
                <a href="#0">
                    <span>96</span>
                    <i class="icon-food_icon_burgher"></i>
                    <h3>Burghers</h3>
                    <small>Avg price $55</small>
                </a>
            </div>
            <div class="item">
                <a href="#0">
                    <span>78</span>
                    <i class="icon-food_icon_vegetarian"></i>
                    <h3>Vegetarian</h3>
                    <small>Avg price $40</small>
                </a>
            </div>
            <div class="item">
                <a href="#0">
                    <span>65</span>
                    <i class="icon-food_icon_cake_2"></i>
                    <h3>Bakery</h3>
                    <small>Avg price $60</small>
                </a>
            </div>
            <div class="item">
                <a href="#0">
                    <span>65</span>
                    <i class="icon-food_icon_chinese"></i>
                    <h3>Chinese</h3>
                    <small>Avg price $40</small>
                </a>
            </div>
            <div class="item">
                <a href="#0">
                    <span>65</span>
                    <i class="icon-food_icon_burrito"></i>
                    <h3>Mexican</h3>
                    <small>Avg price $35</small>
                </a>
            </div>
        </div>
        <!-- /carousel -->
    </div>
    <!-- /container -->
</div>
<!-- /bg_gray -->

@endsection
