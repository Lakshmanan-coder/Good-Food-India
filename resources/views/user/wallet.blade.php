@extends('layouts.user')
@section('extra_styles')
      <!-- Your custom styles -->
  <link href="css/custom.css" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="/css/styles.css">
  <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
  
  <link rel ="stylesheet" href="/css/wallet.css"/>
  <style>
      header.header {
    height: auto !important;
    border: none;
}
  </style>
@endsection
{{-- @section('header_type','header_in') --}}
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

<div class="container1 ">
    <div class="left">
        <div class="info-box">
            <div class="receipt">
                  </br><span>Good Food India</span>
            </div>
            <div class="entry">
                <i class="fa fa-wallet"></i>
                <p>Amount:</br><span>Rs 500</span></p>
            </div>
            <div class="entry">
                <i class="far fa-calendar-alt"></i>
                <p>Account Start Date:</br><span>Nov 5</span></p>
            </div>
            <div class="entry">
                <i class="far fa-star"></i>
                <p>Holder:</br><span>John Snow</span></p>
            </div>
            <div class="entry">
                <i class="fas fa-poll-h"></i>
                <p>Linked Bank Acc:</br><span>0YX123580219G</span></p>
            </div>
        </div>
    </div>
    <div class="right">
        <div class="content">
            <div class="header">
                <img src="">
                <h4>Oct 18, 2015   08:30:57   PDT</h4>
            </div>
            <div class="main">
                <h3>GIF Pro Account (1 year)</h3>
                <h5>Total: RS.500.00 </h5>
            </div>
            <div class="message">
                <p>Hello John,</br>You last payment was for Rs.200.00 on Plan 3 Mughal Lunch </p>
                <small class="small-custom">It may take a few moments for this</br>transaction to appear in your account.</small>
            </div>
            <div class="footer">
                <a href="/index.html">www.goodfoodindia.com</a>
                <h6>Customer ID: 108165</h6>
            </div>
        </div>
    </div>
</div>
<div class="h-75"></div>
<br>
<br>
@endsection