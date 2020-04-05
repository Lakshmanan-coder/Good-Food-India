@extends('layouts.admin')
@section('pagetitle','Dashboard')
@section('content')

<div class="content">

    <div class="">
        <div class="page-header-title">
            <h4 class="page-title">@yield('pagetitle')</h4>
        </div>
    </div>

    <div class="page-content-wrapper ">

        <div class="container-fluid">

            <div class="row">
                <div class="col-sm-6 col-xl-3">
                    <div class="card">
                        <div class="card-heading p-4">
                            <div>
                                <input class="knob" data-width="80" data-height="80" data-linecap=round data-fgColor="#6cbafa" value="78" data-skin="tron" data-angleOffset="180" data-readOnly=true data-thickness=".15" />
                                <div class="float-right">
                                    <h2 class="text-primary mb-0">8952</h2>
                                    <p class="text-muted mb-0 mt-2">Total Orders</p>
                                </div>
                                <!-- <p class="mt-4 mb-0 text-muted"><b>78% </b>From Last 24 Hours <span class="float-right"><i class="fa fa-caret-up m-r-5"></i>10.25%</span></p> -->
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-xl-3">
                    <div class="card">
                        <div class="card-heading p-4">
                            <div>
                                <input class="knob" data-width="80" data-height="80" data-linecap=round data-fgColor="#61d7c7" value="62" data-skin="tron" data-angleOffset="180" data-readOnly=true data-thickness=".15" />
                                <div class="float-right">
                                    <h2 class="text-info mb-0">521</h2>
                                    <p class="text-muted mb-0 mt-2">New Orders</p>
                                </div>
                                <!-- <p class="mt-4 mb-0 text-muted"><b>62% </b>Orders Last 10 months<span class="float-right"><i class="fa fa-caret-up m-r-5"></i>10.25%</span></p> -->
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-xl-3">
                    <div class="card">
                        <div class="card-heading p-4">
                            <div>
                                <input class="knob" data-width="80" data-height="80" data-linecap=round data-fgColor="#6cbafa" value="42" data-skin="tron" data-angleOffset="180" data-readOnly=true data-thickness=".15" />
                                <div class="float-right">
                                    <h2 class="text-primary mb-0">426</h2>
                                    <p class="text-muted mb-0 mt-2">Total Users</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-xl-3">
                    <div class="card">
                        <div class="card-heading p-4">
                            <div>
                                <input class="knob" data-width="80" data-height="80" data-linecap=round data-fgColor="#61d7c7" value="25" data-skin="tron" data-angleOffset="180" data-readOnly=true data-thickness=".15" />
                                <div class="float-right">
                                    <h2 class="text-info mb-0">621</h2>
                                    <p class="text-muted mb-0 mt-2">Plans</p>
                                </div>
                                <!-- <span class="mt-4 mb-0 text-muted"><b>25% </b>From Last 1 Month <span class="float-right"><i class="fa fa-caret-up m-r-5"></i>10.25%</span></p> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-7">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="m-t-0 m-b-30">Overall Statistics</h4>
                            <div id="combine-chart-container" class="flot-chart" style="height: 360px"></div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-5">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="m-t-0 m-b-30">Sales Statistics</h4>
                            <div id="pie-chart-container" class="flot-chart" style="height: 360px"></div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- end row -->


</div><!-- container-fluid -->

@endsection