@extends('layouts.user')

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
    

    <!-- View plans -->
<main>
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
                            <a href="Detailplan.html">
                                <figure>
                                    <img src="img/location_list_placeholder.png" data-src="img/location_list_1.jpg" alt="" class="lazy">
                                </figure>
                                <div class="score"><strong>9.5</strong></div>
                                <em>Italian</em>
                                <h3>La Monnalisa</h3>
                                <small>8 Patriot Square E2 9NF</small>
                                <ul class="position-relative">
                                    <li><span class="ribbon off">-30%</span></li>
									<li>Average price Rs.350</li>
								
									<button class="button-sub-custom" onclick="location.href='/Detailplan.html'">View more</button>
									</ul>
							
								
                            </a>
                        </li>
                        <li>
                            <a href="Detailplan.html">
                                <figure>
                                    <img src="img/location_list_placeholder.png" data-src="img/location_list_2.jpg" alt="" class="lazy">
                                </figure>
                                <div class="score"><strong>8.0</strong></div>
                                <em>Mexican</em>
                                <h3>Alliance</h3>
                                <small>27 Old Gloucester St, 4563</small>
                                <ul  class="position-relative">
                                    <li><span class="ribbon off">-40%</span></li>
									<li>Average price Rs 300</li>
									<button class="button-sub-custom" onclick="location.href='/Detailplan.html'">View more</button>
                                </ul>
                            </a>
                        </li>
                        <li>
							<a href="Detailplan.html">
                                <figure>
                                    <img src="img/location_list_placeholder.png" data-src="img/location_list_3.jpg" alt="" class="lazy">
                                </figure>
                                <div class="score"><strong>9.0</strong></div>
                                <em>Sushi - Japanese</em>
                                <h3>Sushi Gold</h3>
                                <small>Old Shire Ln EN9 3RX</small>
                                <ul  class="position-relative">
                                    <li><span class="ribbon off">-25%</span></li>
									<li>Average price Rs 200</li>
								    <button class="button-sub-custom" onclick="location.href='/Detailplan.html'">View more</button>
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
							<a href="Detailplan.html">
                                <figure>
                                    <img src="img/location_list_placeholder.png" data-src="img/location_list_4.jpg" alt="" class="lazy">
                                </figure>
                                <div class="score"><strong>9.5</strong></div>
                                <em>Vegetarian</em>
                                <h3>Mr. Pepper</h3>
                                <small>27 Old Gloucester St, 4563</small>
                                <ul  class="position-relative">
                                    <li><span class="ribbon off">-30%</span></li>
									<li>Average price Rs 200</li>
									<button class="button-sub-custom" onclick="location.href='/Detailplan.html'">View more</button>
                                </ul>
                            </a>
                        </li>
                        <li>
							<a href="Detailplan.html">
                                <figure>
                                    <img src="img/location_list_placeholder.png" data-src="img/location_list_5.jpg" alt="" class="lazy">
                                </figure>
                                <div class="score"><strong>8.0</strong></div>
                                <em>Chinese</em>
                                <h3>Dragon Tower</h3>
                                <small>22 Hertsmere Rd E14 4ED</small>
                                <ul  class="position-relative">
                                    <li><span class="ribbon off">-50%</span></li>
									<li>Average price $35</li>
									<button class="button-sub-custom" onclick="location.href='/Detailplan.html'">View more</button>
                                </ul>
                            </a>
                        </li>
                        <li>
							<a href="Detailplan.html">
                                <figure>
                                    <img src="img/location_list_placeholder.png" data-src="img/location_list_6.jpg" alt="" class="lazy">
                                </figure>
                                <div class="score"><strong>8.5</strong></div>
                                <em>Pizza - Italian</em>
                                <h3>Bella Napoli</h3>
                                <small>135 Newtownards Road BT4</small>
                                <ul  class="position-relative">
                                    <li><span class="ribbon off">-45%</span></li>
									<li>Average price Rs 250</li>
									<button class="button-sub-custom" onclick="location.href='/Detailplan.html'">View more</button>
                                </ul>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /row -->
        <p class="text-center d-block d-md-block d-lg-none"><a href="grid-listing-filterscol.html" class="btn_1">View All</a></p>
        <!-- /button visibile on tablet/mobile only -->

     
       
    </div>
    <!-- /bg_gray -->
</main>


@endsection