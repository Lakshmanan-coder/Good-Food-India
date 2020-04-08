@extends('layouts.user')
@section('extra_styles')
        <!-- SPECIFIC CSS -->
        <link href="/css/detail-page.css" rel="stylesheet">
        <link href="/css/booking-sign_up.css" rel="stylesheet">
       
    
        <!-- YOUR CUSTOM CSS -->
        <link href="/css/custom.css" rel="stylesheet">
        <link rel="stylesheet" href="/css/date-picker.css">
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
                            <input class="form-control" disabled value="{{Auth::user()->email}}">
                            <i class="icon_mail"></i>
                        </div>
                        <div class="form-group add_bottom_15">
                            <input class="form-control" disabled value="{{Auth::user()->phoneno}}">
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
                            <select class="form-control " name="duration">
                                <option value="1">One Day</option>
                                <option value="7">7 Days</option>
                                <option value="15">15 Days</option>
                                <option value="30">30 Days</option>
                            </select>
                        </div>
                        <label for="">Dates</label>
                        <input type="text" class="form-control date" name="date" placeholder="Pick the multiple dates">
                    <br>
                        <button type="submit" class="btn_1 full-width mb_5">Subscribe Now</button>		                    
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
$('.date').datepicker({
multidate: true,
format: 'dd-mm-yyyy'
});
</script>
@endsection