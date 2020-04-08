@extends('layouts.user')
@section('extra_styles')

    <!-- BASE CSS -->
    <link href="/css/bootstrap_customized.min.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">

    <!-- SPECIFIC CSS -->
    <link href="/css/booking-sign_up.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="/css/custom.css" rel="stylesheet">
@endsection
@section('header_type','header_in element_to_stick')
@section('content')
<main class="bg_gray pattern">
		
    <div class="container margin_60_40">
        <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 col-sm-8">
                <div class="box_booking_2">
                    <div class="head">
                        <div class="title">
                        <h3>Pizzeria da Alfredo</h3>
                        27 Old Gloucester St, 4530 - <a href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x47e66e1de36f4147:0xb6615b4092e0351f!2sAssistance+Publique+-+H%C3%B4pitaux+de+Paris+(AP-HP)+-+Si%C3%A8ge!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361" target="blank">Get directions</a>
                    </div>
                    </div>
                    <!-- /head -->
                    <div class="main">
                        <h6>Order summary</h6>
                        <ul>
                            <li>Date<span>Today 23/11/2019</span></li>
                            <li>Hour<span>08.30pm</span></li>
                            <li>Type<span>Delivery</span></li>
                            <li class="total">Total<span>$66</span></li>
                        </ul>
                        <a href="plan.html" class="btn_1 full-width outline mb_5">Change Order</a>
                        <hr>
                        <h6>Personal details</h6>
                        <div class="form-group">
                            <input class="form-control" placeholder="First and Last Name">
                            <i class="icon_pencil"></i>
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Email Address">
                            <i class="icon_mail"></i>
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Phone">
                            <i class="icon_phone"></i>
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Full Address">
                            <i class="icon_pin"></i>
                        </div>
                        <div class="row">
                            <div class="col-md-7">
                                <div class="form-group">
                                    <input class="form-control" placeholder="City">
                                    <i class="icon_pin"></i>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <input class="form-control" placeholder="Postal Code">
                                    <i class="icon_pin"></i>
                                </div>
                            </div>
                        </div>
                        <a href="confirm-delivery.html" class="btn_1 full-width mb_5">Order Now</a>          
                    </div>
                </div>
                <!-- /box_booking -->
            </div>
            <!-- /col -->

        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
    
</main>
@endsection

@section('extra_scripts')
 
@endsection