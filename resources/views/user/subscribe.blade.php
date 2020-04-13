@extends('layouts.user')
@section('pagetitle','Subscribe ')

@section('extra_styles')
        <!-- SPECIFIC CSS -->
        <link href="/css/detail-page.css" rel="stylesheet">
        <link href="/css/booking-sign_up.css" rel="stylesheet">
       
    
        <!-- YOUR CUSTOM CSS -->
        <link href="/css/custom.css" rel="stylesheet">
        <link rel="stylesheet" href="/css/date-picker.css">
        <style>
            .invalid-feedback{
                color:tomato;
            }
        </style>
@endsection
@section('header_type','header_in element_to_stick')
@section('content')
<main class="bg_gray pattern">
		
    <div class="container margin_60_40 margin_mobile">
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <div class="box_booking_2">
                    <div class="head">
                        <div class="title">
                        <h3>{{$plan->plan_name}}</h3>
                      
                    </div>
                    </div>
                    <!-- /head -->
                    <div class="main">
                        <h6>Pack  Detail</h6>
                        <div class="text-center">
                        <img src="/storage/plan_picture/{{$picture->path}}" class="img-circle img img-responsive img-thumbnail" style="height:150px; width:150px; border-radius:50%" alt="">
                        </div>
                        <div class="form-group">
                            <label for="">Plan Name</label>
                            <input class="form-control disabled" disabled value="{{$plan->plan_name}}">
                        </div>
                        <div class="form-group">
                            <label for="">Menu Items</label>
                            <input class="form-control disabled" disabled value="{{count($menus)}}">
                        </div>
                        
                    
                        {{-- <div class="d-flex justify-content-between">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                            <label class="form-check-label" for="inlineCheckbox1">Mon</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                            <label class="form-check-label" for="inlineCheckbox2">Tue</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                            <label class="form-check-label" for="inlineCheckbox3">Wed</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                            <label class="form-check-label" for="inlineCheckbox3">Thur</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                            <label class="form-check-label" for="inlineCheckbox3">Fri</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                            <label class="form-check-label" for="inlineCheckbox3">Sat</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                            <label class="form-check-label" for="inlineCheckbox3">Sun</label>
                          </div>

                        </div> --}}
                        <hr>
                        <h6>Personal details</h6>
                        <div class="form-group">
                            <input class="form-control disabled" disabled value="{{Auth::user()->name}}">
                            <i class="icon_pencil"></i>
                        </div>
                        <div class="form-group">
                            <input class="form-control" id="email" disabled value="{{Auth::user()->email}}">
                            <i class="icon_mail"></i>
                        </div>
                        <div class="form-group add_bottom_15">
                            <input class="form-control" id="phoneno" disabled value="{{Auth::user()->phoneno}}">
                            <i class="icon_phone"></i>
                        </div>
                        {{-- <a href="CheckOut.html" class="btn_1 full-width mb_5">Subscribe Now</a>		                     --}}
                       {{-- <div class="text-center"><small>No money charged on this steps</small></div> --}}
                    </div>
                </div>
                <!-- /box_booking -->
            </div>
            <!-- /col -->
           
            <div class="col-lg-4" id="sidebar_fixed">
                <div class="box_booking">
                    <form action="/checkout" method="post">
                        @csrf
                    <input type="hidden" name="plan_id" value="{{$plan->id}}">
                    <div class="head">
                        <h3>Select your Dates</h3>
                    </div>
                    <!-- /head -->
                    <div class="main">
                        <div class="form-group  margin-2rem">
                            <label for="">Duration</label>
                            <select class="form-control " name="duration" id="days">
                                <option value="1" data-price="{{$plan->one_price}}">One Day -   ₹ {{$plan->one_price}}</option>
                                <option value="7" data-price="{{$plan->seven_price}}">7 Days - ₹ {{$plan->seven_price}} </option>
                                <option value="15" data-price="{{$plan->fifteen_price}}">15 Days - ₹  {{$plan->fifteen_price}} </option>
                                <option value="30" data-price="{{$plan->month_price}}" >30 Days - ₹ {{$plan->month_price}} </option>
                            </select>
                            <input type="hidden" name="price" value="" id="price">
                        </div>
                        <label for="" >Dates <i class="fa fa-question-circle" data-toggle="tooltip" title="Select the days on which you want to receive our home made food. Select only number of  days per plan !" data-placement="right" aria-hidden="true"></i></label>
                        <input type="text" class="form-control date" name="date"  id="dates" placeholder="Pick the Prefferred dates">
                        <span id="dates-alert" class="invalid-feedback"></span>
                        <br>

                    <label for="">Address</label>

@if ($address)
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
        <input class="form-control" id="doorno" placeholder="Door no" value="{{$address->doorno}}">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <input class="form-control"  id="street" placeholder="Street" value="{{$address->street}}">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <input class="form-control" id="city" placeholder="City" value="{{$address->city}}">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <input class="form-control" id="postelcode" placeholder="Postal Code" value="{{$address->postelcode}}">
        </div>
    </div>
</div> 
@else
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <input class="form-control" id="doorno" placeholder="Door no">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <input class="form-control"  id="street" placeholder="Street">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <input class="form-control" id="city" placeholder="City">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <input class="form-control" id="postelcode" placeholder="Postal Code">
            </div>
        </div>
    </div>
@endif 


                    <span id="address-alert" class="invalid-feedback"></span>
                    <br>
                    <button type="button" class="btn_1 buy_now full-width mb_5" data-id="{{$plan->id}}">Subscribe Now</button>		                    
                    </div>
                </form>
                    
                </div>
        </div>
        <!-- /container -->
        </div>
        <!-- /row -->
        
        
    
</main>

@endsection

@section('extra_scripts')
          <!-- SPECIFIC SCRIPTS -->
          <script src="/js/sticky_sidebar.min.js"></script>
          <script src="/js/specific_detail.js"></script>
          <script src="/js/datepicker.min.js"></script>
          <script src="/js/datepicker_func_1.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
<script>

$(document).ready(function(){
    $("#days").change(function(){

            var multidate=$("#days").val();
            if (multidate!=30) {
                $(".date").datepicker('remove');
                $('.date').datepicker({
                format: 'dd-mm-yyyy',
                maxViewMode:0,
                multidate:multidate,
                startDate: '+1d'
                });
            }else{
                $(".date").attr('placeholder','Select the Start Date');
                $(".date").datepicker('remove');
                $('.date').datepicker({
                format: 'dd-mm-yyyy',
                maxViewMode:0,
                startDate: '+1d'
                });
                
            }
           

    });
});


$('.date').datepicker({
format: 'dd-mm-yyyy',
maxViewMode:0,
startDate: '+1d'
});



$(document).ready(function(){
   var email= $("#email").val();
    var price = $("#days"). children("option:selected"). data('price');
    $("#price").val(price);
    $("#days").change(function(){
        var price = $("#days"). children("option:selected"). data('price');
    $("#price").val(price);
    });
});
</script>



<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
   var paymentid
   var SITEURL = '{{URL::to('')}}';
   $.ajaxSetup({
     headers: {
         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
     }
   }); 
   $('body').on('click', '.buy_now', function(e){
     var totalAmount = $('#price').val();
     var product_id =  $(this).attr("data-id");
     var duration =  $("#days").val();
     var dates =  $("#dates").val();
     var phone=$("#phoneno").val();
     var email=$("#email").val();
     var doorno=$("#doorno").val();
     var street=$("#street").val();
     var city=$("#city").val();
     var postelcode=$("#postelcode").val();

     

     var options = {
     "key": "rzp_test_H0BJRSa7TCsNiQ",
     "amount": (totalAmount*100), // 2000 paise = INR 20
     "currency": "INR",
     "description": "Payment",
     "handler": async function (response){
      paymentid = response.razorpay_payment_id
      console.log(paymentid)
           $.ajax({
             url: SITEURL + '/checkout',
             type: 'post',
             dataType: 'json',
             data: {
            "_token": "{{ csrf_token() }}",  
              razorpay_payment_id: response.razorpay_payment_id , 
               totalAmount : totalAmount ,
               product_id : product_id,
               duration:duration,
               dates:dates,
               doorno:doorno,
               street:street,
               city:city,
               postelcode:postelcode,
             }, 
             success: function (msg) {
                // console.log(msg);
                window.location.href="/confirmed";
             },
         });
     },
    "prefill": {
         "contact": phone,
         "email":   email,
     },
     "theme": {
         "color": "#589442"
     }
   };

if (dates!="") {
    length=dates.length;
if (duration==1) {
    if (length < 10) {
        $("#dates-alert").text('Please select One Date');
    }else{
        if (doorno!="") {
      if (street!="") {
          if (city!="") {
              if (postelcode!="") {
                        var rzp1 = new Razorpay(options);
                        rzp1.open();
                        e.preventDefault();
              } else {
                $("#address-alert").text('Please Enter Postel Code');
              }
          } else {
            $("#address-alert").text('Please Enter your city');
          }
      } else {
        $("#address-alert").text('Please Enter your Street Address');
      }
  }else{
    $("#address-alert").text('Please Enter your Door No');
  }
    }
}else if(duration==7){
    if (length < 76) {
        $("#dates-alert").text('Please select 7 Dates');
    }else{
        if (doorno!="") {
      if (street!="") {
          if (city!="") {
              if (postelcode!="") {
                        var rzp1 = new Razorpay(options);
                        rzp1.open();
                        e.preventDefault();
              } else {
                $("#address-alert").text('Please Enter Postel Code');
              }
          } else {
            $("#address-alert").text('Please Enter your city');
          }
      } else {
        $("#address-alert").text('Please Enter your Street Address');
      }
  }else{
    $("#address-alert").text('Please Enter your Door No');
  }
    }
}else if(duration==15){
    if (length < 164) {
        $("#dates-alert").text('Please select 15 Dates');
    }else{
        if (doorno!="") {
      if (street!="") {
          if (city!="") {
              if (postelcode!="") {
                        var rzp1 = new Razorpay(options);
                        rzp1.open();
                        e.preventDefault();
              } else {
                $("#address-alert").text('Please Enter Postel Code');
              }
          } else {
            $("#address-alert").text('Please Enter your city');
          }
      } else {
        $("#address-alert").text('Please Enter your Street Address');
      }
  }else{
    $("#address-alert").text('Please Enter your Door No');
  }
    }
}else if(duration==30){
    if (length > 10) {
        $("#dates-alert").text('Please select the Starting  Date Only');
    }else{
        if (doorno!="") {
      if (street!="") {
          if (city!="") {
              if (postelcode!="") {
                        var rzp1 = new Razorpay(options);
                        rzp1.open();
                        e.preventDefault();
              } else {
                $("#address-alert").text('Please Enter Postel Code');
              }
          } else {
            $("#address-alert").text('Please Enter your city');
          }
      } else {
        $("#address-alert").text('Please Enter your Street Address');
      }
  }else{
    $("#address-alert").text('Please Enter your Door No');
  }
    }
}
}else{
    $("#dates-alert").text('Please Select Prefrred Dates');
}
   });
  
</script>
<script>
    $(document).ready(function(){
      $('[data-toggle="tooltip"]').tooltip();
    });
    </script>

    <script>

    </script>
@endsection