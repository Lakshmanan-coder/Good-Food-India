@extends('layouts.user')
@section('header_type','header element_to_stick')

@section('extra_styles')
       <!-- SPECIFIC CSS -->
       <link href="/css/detail-page.css" rel="stylesheet">
@endsection
@section('content')

    <!--hero section-->
    <div class="hero_single inner_pages background-image" data-background="url(/img/hero_submit.jpg)">
        <div class="opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.6)">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-9 col-lg-10 col-md-8">
                        <h1>{{$plan->plan_name}}</h1>
                        <p>More bookings from diners around the corner</p>
                    </div>
                </div>
                <!-- /row -->
            </div>
        </div>
    </div>
    <!-- /hero_single -->


<main>
		
    <div class="container margin_detail">
        <div class="row">
            {{-- <div class="col-lg-2"></div> --}}
            <div class="col-lg-8">
                <div class="detail_page_head clearfix margin-2rem">
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Plans</a></li>
                            <li>{{$plan->plan_name}}</li>
                        </ul>
                    </div>
                    <div class="title">
                        <h1>{{$plan->plan_name}}</h1>
                        <ul class="tags">
                            @php
                            $results= explode(",",$plan->tags);
                            @endphp
                            @foreach ($results as $result)
                            <li><a href="#0">{{$result}}</a></li>

                            @endforeach
                        </ul>
                    </div>
                    {{-- <div class="rating">
                        <div class="score"><span>Superb<em>350 Reviews</em></span><strong>8.9</strong></div>
                    </div> --}}
                </div>
                <!-- /detail_page_head -->

                <div class="owl-carousel owl-theme carousel_1 magnific-gallery">
                    @if (count($planpictures)>0)
                        @foreach ($planpictures as $picture)
                        <div class="item">
                        <a  title="Photo title" data-effect="mfp-zoom-in"><img src="/storage/plan_picture/{{$picture->path}}" alt=""></a>
                        </div>
                        @endforeach
                    @endif
                  
                   
                </div>
                <!-- /carousel -->

                <div class="tabs_detail">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a id="tab-A" href="#pane-A" class="nav-link active" data-toggle="tab" role="tab">Information</a>
                        </li>
                        <li class="nav-item">
                            <a id="tab-B" href="#pane-B" class="nav-link" data-toggle="tab" role="tab">Prices</a>
                        </li>
                    </ul>

                    <div class="tab-content" role="tablist">
                        <div id="pane-A" class="card tab-pane fade show active" role="tabpanel" aria-labelledby="tab-A">
                            <div class="card-header" role="tab" id="heading-A">
                                <h5>
                                    <a class="collapsed" data-toggle="collapse" href="#collapse-A" aria-expanded="true" aria-controls="collapse-A">
                                        Information
                                    </a>
                                </h5>
                            </div>
                            <div id="collapse-A" class="collapse" role="tabpanel" aria-labelledby="heading-A">
                                <div class="card-body info_content">
                                    <h2>{{$plan->plan_name}} Menu</h2>
                                    @if (count($menus)>0)
                                        @foreach ($menus as $menu)
                                        <div class="menu_item">
                                            <h4>{{$menu->title}}</h4>
                                            <p>{{$menu->description}}</p>
                                        </div>
                                        @endforeach
                                    @endif
                                   
                                   
                                    <hr>
                                    
                                    <!-- /content_more -->
                                   
                                    <div class="add_bottom_45"></div>

                                    
                                   
                                    {{-- <div class="d-flex justify-content-center w-100">
                                        <form action="/subscribe" method="post">
                                        <button type="submit" class="show_hide button-sub-custom ">Subscribe</button>
                                        </form>
                                    </div> --}}
                                    

                                    <!-- /special_offers -->

                                  
                                </div>
                            </div>
                        </div>
                        <div id="pane-B" class="card tab-pane fade show " role="tabpanel" aria-labelledby="tab-B">
                            <div class="card-header" role="tab" id="heading-B">
                                <h5>
                                    <a class="collapsed" data-toggle="collapse" href="#collapse-B" aria-expanded="true" aria-controls="collapse-A">
                                        Prices
                                    </a>
                                </h5>
                            </div>
                            <div id="collapse-B" class="collapse" role="tabpanel" aria-labelledby="heading-B">
                                <div class="card-body info_content">
                                   
                                    <div class="card">
                                        <div class="card-body">
                                            <table class="table table-bordered">
                                                <tr>
                                                    <th>1 Day</th>
                                                    <td>{{$plan->one_price}}</td>
                                                </tr>
                                                <tr>
                                                    <th>7 Days</th>
                                                    <td>{{$plan->seven_price}}</td>
                                                </tr>
                                                <tr>
                                                    <th>15 Days</th>
                                                    <td>{{$plan->fifteen_price}}</td>
                                                </tr>
                                                <tr>
                                                    <th>30 Days</th>
                                                    <td>{{$plan->month_price}}</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                   
                                   
                                    <hr>
                                    
                                    <!-- /content_more -->
                                   
                                    <div class="add_bottom_45"></div>

                                    
                                   
                                    {{-- <div class="d-flex justify-content-center w-100">
                                        <form action="/subscribe" method="post">
                                        <button type="submit" class="show_hide button-sub-custom ">Subscribe</button>
                                        </form>
                                    </div> --}}
                                    

                                    <!-- /special_offers -->

                                  
                                </div>
                            </div>
                        </div>
                        <!-- /tab -->

                    </div>
                    <!-- /tab-content -->
                </div>
                <!-- /tabs_detail -->
            </div>
            <!-- /col -->

            <div class="col-lg-4" id="sidebar_fixed">
                <div class="box_booking " style="margin-top:140px">
                    <div class="head">
                        <h3>Subscribe your Plan</h3>
                        {{-- <div class="offer">Up to -40% off</div> --}}
                    </div>
                    <!-- /head -->
                    <div class="main">
                       <form action="/subscribe" method="post">
                        @csrf
                       <input type="hidden" value="{{$plan->id}}" name="plan_id">
                        <button type="submit" class="btn_1 full-width mb_5">Subscribe Now</button>
                        </form>
                    </div>
                </div>
                <!-- /box_booking -->
                {{-- <ul class="share-buttons">
                    <li><a class="fb-share" href="#0"><i class="social_facebook"></i> Share</a></li>
                    <li><a class="twitter-share" href="#0"><i class="social_twitter"></i> Share</a></li>
                    <li><a class="gplus-share" href="#0"><i class="social_googleplus"></i> Share</a></li>
                </ul> --}}

                <div class="box_booking " >
                    <div class="head">
                        <h3>Recent Plans</h3>
                        {{-- <div class="offer">Up to -40% off</div> --}}
                    </div>
                    <!-- /head -->
                    <div class="main">
                        @if (count($plans=App\Plans::orderBy('id','desc')->paginate(3)))
                        @foreach ($plans as $plan)
                @php $menus=App\Menu::where('plan_id',$plan->id)->get(); $planpicture=App\PlanPictures::where('plan_id',$plan->id)->first(); @endphp
    
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
        
                        @endforeach
                    @endif
                    </div>
                </div>

            
               

            </div>

        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
    
</main>
@endsection