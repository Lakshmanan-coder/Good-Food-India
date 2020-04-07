@extends('layouts.user')
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
                <h2>Popular Plans</h2>
                <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
                <a href="#0">View All</a>
            </div>
        </div>
        <div class="col-md-6">
            <div class="list_home">
                <ul>
                    <li>
                        <a href="detail-restaurant.html">
                            <figure>
                                <img src="img/location_list_placeholder.png" data-src="img/location_list_1.jpg" alt=""
                                    class="lazy">
                            </figure>
                            <div class="score"><strong>9.5</strong></div>
                            <em>Italian</em>
                            <h3>La Monnalisa</h3>
                            <small>8 Patriot Square E2 9NF</small>
                            <ul>
                                <li><span class="ribbon off">-30%</span></li>
                                <li>Average price $35</li>
                            </ul>
                        </a>
                    </li>
                    <li>
                        <a href="detail-restaurant.html">
                            <figure>
                                <img src="img/location_list_placeholder.png" data-src="img/location_list_2.jpg" alt=""
                                    class="lazy">
                            </figure>
                            <div class="score"><strong>8.0</strong></div>
                            <em>Mexican</em>
                            <h3>Alliance</h3>
                            <small>27 Old Gloucester St, 4563</small>
                            <ul>
                                <li><span class="ribbon off">-40%</span></li>
                                <li>Average price $30</li>
                            </ul>
                        </a>
                    </li>
                    <li>
                        <a href="detail-restaurant.html">
                            <figure>
                                <img src="img/location_list_placeholder.png" data-src="img/location_list_3.jpg" alt=""
                                    class="lazy">
                            </figure>
                            <div class="score"><strong>9.0</strong></div>
                            <em>Sushi - Japanese</em>
                            <h3>Sushi Gold</h3>
                            <small>Old Shire Ln EN9 3RX</small>
                            <ul>
                                <li><span class="ribbon off">-25%</span></li>
                                <li>Average price $20</li>
                            </ul>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-md-6">
            <div class="list_home">
                <ul>
                    <li>
                        <a href="detail-restaurant.html">
                            <figure>
                                <img src="img/location_list_placeholder.png" data-src="img/location_list_4.jpg" alt=""
                                    class="lazy">
                            </figure>
                            <div class="score"><strong>9.5</strong></div>
                            <em>Vegetarian</em>
                            <h3>Mr. Pepper</h3>
                            <small>27 Old Gloucester St, 4563</small>
                            <ul>
                                <li><span class="ribbon off">-30%</span></li>
                                <li>Average price $20</li>
                            </ul>
                        </a>
                    </li>
                    <li>
                        <a href="detail-restaurant.html">
                            <figure>
                                <img src="img/location_list_placeholder.png" data-src="img/location_list_5.jpg" alt=""
                                    class="lazy">
                            </figure>
                            <div class="score"><strong>8.0</strong></div>
                            <em>Chinese</em>
                            <h3>Dragon Tower</h3>
                            <small>22 Hertsmere Rd E14 4ED</small>
                            <ul>
                                <li><span class="ribbon off">-50%</span></li>
                                <li>Average price $35</li>
                            </ul>
                        </a>
                    </li>
                    <li>
                        <a href="detail-restaurant.html">
                            <figure>
                                <img src="img/location_list_placeholder.png" data-src="img/location_list_6.jpg" alt=""
                                    class="lazy">
                            </figure>
                            <div class="score"><strong>8.5</strong></div>
                            <em>Pizza - Italian</em>
                            <h3>Bella Napoli</h3>
                            <small>135 Newtownards Road BT4</small>
                            <ul>
                                <li><span class="ribbon off">-45%</span></li>
                                <li>Average price $25</li>
                            </ul>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /row -->
    <p class="text-center d-block d-md-block d-lg-none"><a href="grid-listing-filterscol.html" class="btn_1">View
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
