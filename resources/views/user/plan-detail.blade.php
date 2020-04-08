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
            <div class="col-lg-2"></div>
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
                        {{-- <li class="nav-item">
                            <a id="tab-B" href="#pane-B" class="nav-link" data-toggle="tab" role="tab">Reviews</a>
                        </li> --}}
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
                                    <h3>Starters</h3>
                                    @if (count($starters))
                                        @foreach ($starters as $starter)
                                        <div class="menu_item">
                                            <em>Qty: {{$starter->quantity}}</em>
                                            <h4>{{$starter->title}}</h4>
                                            <p>{{$starter->description}}</p>
                                        </div>
                                        @endforeach
                                    @endif
                                   
                                   
                                    <hr>
                                    <h3>Main Course</h3>
                                    @if (count($maincourses)>0)
                                    @foreach ($maincourses as $maincourse)
                                    <div class="menu_item">
                                    <em>Qty: {{$maincourse->quantity}}</em>
                                      <h4>{{$maincourse->title}}</h4>
                                      <p>{{$maincourse->description}}</p>
                                  </div>
                                    @endforeach  
                                  @endif

                                    <hr>
                                    <h3>Dessert</h3>
                              
                                    @if (count($desserts)>0)
                                    @foreach ($desserts as $dessert)
                                    <div class="menu_item">
                                    <em>Qty: {{$dessert->quantity}}</em>
                                      <h4>{{$dessert->title}}</h4>
                                      <p>{{$dessert->description}}</p>
                                  </div>
                                    @endforeach  
                                  @endif
                                    <!-- /content_more -->
                                   
                                    <div class="add_bottom_45"></div>

                                    @if (count($specials)>0)
                                    <div class="special_offers add_bottom_45">
                                        <h2>Special Offers</h2>
                                        @foreach ($specials as $special)
                                        <div class="menu_item">
                                        <em>Qty: {{$special->quantity}}</em>
                                          <h4>{{$special->title}}</h4>
                                          <p>{{$special->description}}</p>
                                      </div>
                                        @endforeach  
                                       
                                    </div>
                                    @endif
                                   
                                    <div class="d-flex justify-content-center w-100">
                                        <a href="/subscribe" class="show_hide button-sub-custom " data-content="toggle-text">Subscribe</a></div>

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

            {{-- <div class="col-lg-4" id="sidebar_fixed">
                <div class="box_booking">
                    <div class="head">
                        <h3>Book your table</h3>
                        <div class="offer">Up to -40% off</div>
                    </div>
                    <!-- /head -->
                    <div class="main">
                        <input type="text" id="datepicker_field">
                        <div id="DatePicker"></div>
                        <div class="dropdown time">
                            <a href="#" data-toggle="dropdown">Hour <span id="selected_time"></span></a>
                            <div class="dropdown-menu">
                                <div class="dropdown-menu-content">
                                    <h4>Lunch</h4>
                                    <div class="radio_select add_bottom_15">
                                        <ul>
                                            <li>
                                                <input type="radio" id="time_1" name="time" value="12.00am">
                                                <label for="time_1">12.00<em>-40%</em></label>
                                            </li>
                                            <li>
                                                <input type="radio" id="time_2" name="time" value="08.30pm">
                                                <label for="time_2">12.30<em>-40%</em></label>
                                            </li>
                                            <li>
                                                <input type="radio" id="time_3" name="time" value="09.00pm">
                                                <label for="time_3">1.00<em>-40%</em></label>
                                            </li>
                                            <li>
                                                <input type="radio" id="time_4" name="time" value="09.30pm">
                                                <label for="time_4">1.30<em>-40%</em></label>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- /time_select -->
                                    <h4>Dinner</h4>
                                    <div class="radio_select">
                                        <ul>
                                            <li>
                                                <input type="radio" id="time_5" name="time" value="08.00pm">
                                                <label for="time_1">20.00<em>-40%</em></label>
                                            </li>
                                            <li>
                                                <input type="radio" id="time_6" name="time" value="08.30pm">
                                                <label for="time_2">20.30<em>-40%</em></label>
                                            </li>
                                            <li>
                                                <input type="radio" id="time_7" name="time" value="09.00pm">
                                                <label for="time_3">21.00<em>-40%</em></label>
                                            </li>
                                            <li>
                                                <input type="radio" id="time_8" name="time" value="09.30pm">
                                                <label for="time_4">21.30<em>-40%</em></label>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- /time_select -->
                                </div>
                            </div>
                        </div>
                        <!-- /dropdown -->
                        <div class="dropdown people">
                            <a href="#" data-toggle="dropdown">People <span id="selected_people"></span></a>
                            <div class="dropdown-menu">
                                <div class="dropdown-menu-content">
                                    <h4>How many people?</h4>
                                    <div class="radio_select">
                                        <ul>
                                            <li>
                                                <input type="radio" id="people_1" name="people" value="1">
                                                <label for="people_1">1<em>-40%</em></label>
                                            </li>
                                            <li>
                                                <input type="radio" id="people_2" name="people" value="2">
                                                <label for="people_2">2<em>-40%</em></label>
                                            </li>
                                            <li>
                                                <input type="radio" id="people_3" name="people" value="3">
                                                <label for="people_3">3<em>-40%</em></label>
                                            </li>
                                            <li>
                                                <input type="radio" id="people_4" name="people" value="4">
                                                <label for="people_4">4<em>-40%</em></label>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- /people_select -->
                                </div>
                            </div>
                        </div>
                        <!-- /dropdown -->
                        <a href="Subscribe.html" class="btn_1 full-width mb_5">Reserve Now</a>
                      
                    </div>
                </div>
                <!-- /box_booking -->
                <ul class="share-buttons">
                    <li><a class="fb-share" href="#0"><i class="social_facebook"></i> Share</a></li>
                    <li><a class="twitter-share" href="#0"><i class="social_twitter"></i> Share</a></li>
                    <li><a class="gplus-share" href="#0"><i class="social_googleplus"></i> Share</a></li>
                </ul>
            </div> --}}

        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
    
</main>
@endsection