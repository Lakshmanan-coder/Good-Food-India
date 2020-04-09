@extends('layouts.user')
@section('extra_styles')

  <!-- BASE CSS -->
  <link href="css/bootstrap_customized.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">

  <!-- SPECIFIC CSS -->
  <link href="css/booking-sign_up.css" rel="stylesheet">

  <!-- YOUR CUSTOM CSS -->
  <link href="css/custom.css" rel="stylesheet">
@endsection
@section('header_type','header_in element_to_stick')
@section('content')
<main class="bg_gray pattern">
		
    <div class="container margin_60_40">
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <div class="box_booking_2">
                    <div class="head">
                        <div class="title">
                        <h3>Thank you <span class="text-capitalize" style="text-transform:capitalize">{{Auth::user()->name}}</span></h3>
                    </div>
                    </div>
                    <!-- /head -->
                    <div class="main">
                        <div id="confirm">
                            <div class="icon icon--order-success svg add_bottom_15">
                                <svg xmlns="http://www.w3.org/2000/svg" width="72" height="72">
                                    <g fill="none" stroke="#8EC343" stroke-width="2">
                                        <circle cx="36" cy="36" r="35" style="stroke-dasharray:240px, 240px; stroke-dashoffset: 480px;"></circle>
                                        <path d="M17.417,37.778l9.93,9.909l25.444-25.393" style="stroke-dasharray:50px, 50px; stroke-dashoffset: 0px;"></path>
                                    </g>
                                </svg>
                            </div>
                            <h3>Order Confirmed!</h3>
                            <p><a href="/profile">View Profile</a></p>
                        </div>
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