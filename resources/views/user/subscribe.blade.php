@extends('layouts.user')
@section('extra_styles')
        <!-- SPECIFIC CSS -->
        <link href="/css/detail-page.css" rel="stylesheet">
        <link href="/css/booking-sign_up.css" rel="stylesheet">
       
    
        <!-- YOUR CUSTOM CSS -->
        <link href="/css/custom.css" rel="stylesheet">
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
                        <h3>Plan 1</h3>
                      
                    </div>
                    </div>
                    <!-- /head -->
                    <div class="main">
                        <h6>Subsciption Form</h6>
                        
                        <div class="form-group d-flex margin-2rem">
                            <label class=" col-form-label">Select Plan</label>
                            <select class="form-control ">
                                <option value="">Plan 1</options>
                                <option value="">Plan 2</options>
                                <option value="">Plan 3</options>
                            </select>
                            
                        </div>
                    
                        <div class="d-flex justify-content-between">
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

                        </div>
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
                        <div class="form-group add_bottom_15">
                            <input class="form-control" placeholder="Phone">
                            <i class="icon_phone"></i>
                        </div>
                        <a href="CheckOut.html" class="btn_1 full-width mb_5">Reserve Now</a>		                    
                       <div class="text-center"><small>No money charged on this steps</small></div>
                    </div>
                </div>
                <!-- /box_booking -->
            </div>
            <!-- /col -->
           
            <div class="col-lg-4" id="sidebar_fixed">
                <div class="box_booking">
                    <div class="head">
                        <h3>Book your Dates</h3>
                        <div class="offer">Up to -40% off on first sub</div>
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
                       
                    </div>
                </div>
        </div>
        <!-- /container -->
        </div>
        <!-- /row -->
        
        
    
</main>

@endsection

@section('extra_scripts')
          <!-- SPECIFIC SCRIPTS -->
          <script src="js/sticky_sidebar.min.js"></script>
          <script src="js/specific_detail.js"></script>
          <script src="js/datepicker.min.js"></script>
          <script src="js/datepicker_func_1.js"></script>
@endsection