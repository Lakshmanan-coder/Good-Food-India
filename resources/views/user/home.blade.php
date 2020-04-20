@extends('layouts.user')
@section('header_type','header element_to_stick')
@section('extra_styles')
<!-- SPECIFIC CSS -->
<link href="/css/submit.css" rel="stylesheet">
<style>
    html {
        scroll-behavior: smooth;
    }

</style>
@endsection
@section('pagetitle','Home')
@section('content')

<!--SLIDER-->
<div id="carousel-home">
    <div class="owl-carousel owl-theme">
        <div class="owl-slide cover" style="background-image: url(img/banner1.png);">
            <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                <div class="container">
                    <div class="row justify-content-center justify-content-md-end">
                        <div class="col-lg-6 static">
                            <div class="slide-text text-right white">
                                <h2 class="owl-slide-animated owl-slide-title"> Don't Skip Breakfast</h2>
                                <p class="owl-slide-animated owl-slide-subtitle">
                                    Our Sambar will keep calling you.
                                </p>
                                {{-- <div class="owl-slide-animated owl-slide-cta"><a class="btn_1"
                                        href="grid-listing-filterscol.html" role="button">Read more</a></div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/owl-slide-->
        <div class="owl-slide cover" style="background-image: url(img/banner2.png);">
            <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                <div class="container">
                    <div class="row justify-content-center justify-content-md-start">
                        <div class="col-lg-6 static">
                            <div class="slide-text white">
                                <h2 class="owl-slide-animated owl-slide-title">Delivered to your Doorstep</h2>
                                <p class="owl-slide-animated owl-slide-subtitle">
                                    Fresh homemade food delivered to you everyday
                                </p>
                                {{-- <div class="owl-slide-animated owl-slide-cta"><a class="btn_1"
                                        href="grid-listing-filterscol.html" role="button">Read more</a></div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/owl-slide-->
        <div class="owl-slide cover" style="background-image: url(img/banner3.png);">
            <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.6)">
                <div class="container">
                    <div class="row justify-content-center justify-content-md-start">
                        <div class="col-lg-12 static">
                            <div class="slide-text text-center white">
                                <h2 class="owl-slide-animated owl-slide-title">Cook & Rejoice with Family</h2>
                                <p class="owl-slide-animated owl-slide-subtitle">
                                    Fresh, ready-to-cook homemade food with subscription plans!
                                </p>
                                <div class="owl-slide-animated owl-slide-cta"><a class="btn_1"
                                        href="/plans" role="button">Subscribe Now</a></div>
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





<!-- BEST DEALS -->

<div class="bg_gray" id="how-we-work">
    <div class="container margin_60_40">
        <div class="main_title center">
            <span><em></em></span>
            <h2>How we Work ?</h2>
        </div>
        <!-- /main_title -->
        <div class="owl-carousel owl-theme categories_carousel">
            <div class="item">
                <a href="#0">
                    <img src="/img/how/login.png" alt="" style="width:100px; margin:auto; margin-bottom:10px;">
                    <h3>Login/Register</h3>
                    <small>Step 1</small>
                </a>
            </div>
            <div class="item">
                <a href="#0">
                    <img src="/img/how/selectplan.png" alt="" style="width:100px; margin:auto; margin-bottom:10px;">
                    <h3>Choose Subscription Plan</h3>
                    <small>Step 2</small>
                </a>
            </div>
            <div class="item">
                <a href="#0">
                    <img src="/img/how/choosedate.png" alt="" style="width:100px; margin:auto; margin-bottom:10px;">
                    <h3>Pick Dates in Calendar </h3>
                    <small>Step 3</small>
                </a>
            </div>
            <div class="item">
                <a href="#0">
                    <img src="/img/how/checkout.png" alt="" style="width:100px; margin:auto; margin-bottom:10px;">
                    <h3>Checkout </h3>
                    <small>Step 4</small>
                </a>
            </div>
            <div class="item">
                <a href="#0">
                    <img src="/img/how/doorstep.png" alt="" style="width:100px; margin:auto; margin-bottom:10px;">
                    <h3>Collect Food in Doorstep</h3>
                    <small>Step 5</small>
                </a>
            </div>
            <div class="item">
                <a href="#0">
                    <img src="/img/how/cook.png" alt="" style="width:100px; margin:auto; margin-bottom:10px;">
                    <h3>Cook & Enjoy</h3>
                    <small>Step 6</small>
                </a>
            </div>

        </div>
        <!-- /carousel -->
    </div>
    <!-- /container -->
</div>
<!-- /bg_gray -->


<!-- /main_title -->
<div class="bg_gray" id="offers">
    <div class="main_title center">
        <span><em></em></span>
        <h2>Offers</h2>
    </div>
    <div class="container-fluid">
        <div class="display-class-1">
            <img src="./assets/images/banner.jpg" class="img img-responsive" alt="offers" width="100%" /></div>
        <!-- /container -->
    </div>
</div>

<!-- POPULAR PLANS -->

<div class="container margin_60_40">


    <div class="row">
        <div class="col-12">
            <div class="main_title version_2">
                <span><em></em></span>
                <h2>Our Exclusive Subscription Plans</h2>
                {{-- <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p> --}}
                <a href="/plans">View All</a>
            </div>
        </div>

        @if (count($plans)>0)
        @foreach ($plans as $plan)
        @php $menus=App\Menu::where('plan_id',$plan->id)->get();
 if($planpicture=App\PlanPictures::where('plan_id',$plan->id)->first()){$path=$planpicture->path;}else{$path='no_plan_picture.jpg';}  @endphp
        <div class="col-md-6">
            <div class="list_home">
                <ul>
                    <li>
                        <a href="/plan-detail/{{$plan->id}}">
                            <figure>
                                <img src="/storage/plan_picture/{{$path}}"
                                    data-src="/storage/plan_picture/{{$path}}" alt="" class="lazy"
                                    style=" ">
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





{{-- banner --}}
<div class="container-fluid">
    <div class="banner version_2">
        <div class="wrapper d-flex align-items-center opacity-mask justify-content-center text-center"
            data-opacity-mask="rgba(0, 0, 0, 0)">
            <div>
                <small>Homely Fresh Foods</small>

                <h3>Subscribe Now</h3>

                <small class="m-3">Subscribe to Homely Fresh Foods Online for immediate informations on plans and
                    offers</small><br /><br />
                <a href="/plans" class="btn_1 gray margin-top-2">Subscribe</a>
            </div>
        </div>
        <!-- /wrapper -->
    </div>

</div>
{{-- banner --}}

<div class="bg_gray">
    <div class="container margin_60_40">
        <div class="main_title center">
            <span><em></em></span>
            <h2>About Us</h2>
        </div>

        <div class="row justify-content-center align-items-center add_bottom_15">
            <div class="col-lg-5">
                <div class="box_about">
                    {{-- <h3>Boost your Bookings</h3> --}}
                    {{-- <p class="lead">Est falli invenire interpretaris id, magna libris sensibus mel id.</p> --}}
                    <p>Homely Fresh Foods is a new venture of Arusuvai Arasu group of companies, we have experience in
                        the industry for 60+ years. We deliver homemade food to your door step across Chennai. We want
                        to provide a solution to all the busy people bu enabling them to cook fresh and provide
                        everything else to enjoy the homemade food. We are introducing the "subscription" model in
                        homemade food delivery online!</p>
                    {{-- <img src="img/arrow_about.png" alt="" class="arrow_1"> --}}
                </div>
            </div>
            <div class="col-lg-5 pl-lg-5 text-center d-none d-lg-block">
                <img src="/assets/images/about-hff-logo.png" alt="" class="img-fluid" width="350" >
                <img src="/assets/images/arusuvai-logo.png" alt="" class="img-fluid" width="200">

            </div>
        </div>

    </div>
    <!-- /container -->
</div>
<!-- /bg_gray -->

{{-- maps --}}
<div class="container margin_60_40" id="contact-us">
    <div class="main_title center">
        <span><em></em></span>
        <h2>Drop us Line</h2>
    </div>
    <div class="row">
        <div class="col-lg-4 col-md-6 ">
            <div id="message-contact"></div>
            <form method="post" id="contactform" autocomplete="off">
                <div class="form-group">
                    <input class="form-control" type="text" placeholder="Name" id="name_contact" name="name">
                </div>
                <div class="form-group">
                    <input class="form-control" type="email" placeholder="Email" id="email_contact" name="email">
                </div>
                <div class="form-group">
                    <textarea class="form-control" style="height: 150px;" placeholder="Message" id="message_contact"
                        name="message"></textarea>
                </div>

                <div class="form-group">
                    <input class="btn_1 full-width  btn-color-custom-sub" type="submit" value="Send Message">
                </div>
        </div>
        </form>
        <div class="col-lg-8 col-md-6">
            <iframe style="border:none"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3886.9118788419196!2d80.2343218147713!3d13.041280890810162!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a526656a9a01ca1%3A0x1713f347d157d75!2s4%2C%20Raja%20Bather%20St%2C%20Parthasarathi%20Puram%2C%20T.%20Nagar%2C%20Chennai%2C%20Tamil%20Nadu%20600017!5e0!3m2!1sen!2sin!4v1586167113377!5m2!1sen!2sin"
                allowfullscreen aria-hidden="false" tabindex="0" height="100%" width="100%"></iframe> </div>
    </div>
    <!-- /row -->
</div>
<!-- /container -->

{{-- maps --}}


@endsection


@section('extra_scripts')
<script>
    $(document).ready(function () {
        // Add smooth scrolling to all links
        $("a").on('click', function (event) {

            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "") {
                // Prevent default anchor click behavior
                event.preventDefault();

                // Store hash
                var hash = this.hash;

                // Using jQuery's animate() method to add smooth page scroll
                // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 800, function () {

                    // Add hash (#) to URL when done scrolling (default click behavior)
                    window.location.hash = hash;
                });
            } // End if
        });
    });

</script>
<script>
    $(function () {
      
      $('#form1').on('submit', function (e) {
    
        e.preventDefault();
    
        $.ajax({
          type: 'post',
          url: 'form.php',
          data: $('#form1').serialize(),
          success: function (data) {
            
                swal("Good job!", "We will contact you asap !", "success");
                document.getElementById("form1").reset();
                console.log(data);
            
          }
        });
    //   alert("hi");
      });
    
    });
    
    $(function () {
      
      $('#form2').on('submit', function (e) {
    
        e.preventDefault();
    
        $.ajax({
          type: 'post',
          url: 'form1.php',
          data: $('#form2').serialize(),
          success: function (data) {
            
                swal("Good job!", "We will contact you asap !", "success");
                document.getElementById("form2").reset();

             
                console.log(data);
            
          }
        });
    //   alert("hi");
      });
    
    });

    $(function () {
      
      $('#contactform').on('submit', function (e) {
    
        e.preventDefault();
    
        $.ajax({
          type: 'post',
          url: 'form2.php',
          data: $('#contactform').serialize(),
          success: function (data) {
            
                swal("Good job!", "We will contact you asap !", "success");
                document.getElementById("contactform").reset();
                window.location.reload()
             
                console.log(data);
            
          }
        });
    //   alert("hi");
      });
    
    });
</script>
@endsection
