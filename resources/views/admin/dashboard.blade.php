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
                                {{-- <input class="knob" data-width="80" data-height="80" data-linecap=round data-fgColor="#6cbafa" value="78" data-skin="tron" data-angleOffset="180" data-readOnly=true data-thickness=".15" /> --}}
                                <div class="text-center">
                                    <h2 class="text-primary mb-0">{{count($subscriptions=App\Subscribe::all())}}</h2>
                                    <p class="text-muted mb-0 mt-2">Total Subscriptions</p>
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
                                <div class="text-center">
                                    <h2 class="text-info mb-0">@php $lastsub=App\Subscribe::orderBy('id','desc')->first();@endphp {{$lastsub->totalamount}}</h2>
                                    <p class="text-muted mb-0 mt-2">Last Subscription Amount</p>
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
                                <div class="text-center">
                                    <h2 class="text-primary mb-0">{{count($users=App\User::where('user_type','user')->get())}}</h2>
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
                                <div class="text-center">
                                    <h2 class="text-info mb-0">{{count($plans=App\Plans::where('status','active')->get())}}</h2>
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
                            <h4 class="m-t-0 m-b-30">Subscription Plan Statistics</h4>
                            <div id="combine-chart-container" class="flot-chart" style="height: 360px">
                                <canvas id="planSub"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-5">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="m-t-0 m-b-30">Overall Statistics</h4>
                            <div id="pie-chart-container" class="flot-chart m-t-30" style="height: 360px">
                                <canvas id="userplansub"></canvas>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <!-- end row -->


</div><!-- container-fluid -->

@endsection

@section('extra_scripts')
      {{-- <!--Morris Chart-->
      <script src="/assets/plugins/morris/morris.min.js"></script>
      <script src="/assets/plugins/raphael/raphael.min.js"></script>
  
      <!-- KNOB JS -->
      <script src="/assets/plugins/jquery-knob/excanvas.js"></script>
      <script src="/assets/plugins/jquery-knob/jquery.knob.js"></script>
  
      <script src="/assets/plugins/flot-chart/jquery.flot.min.js"></script>
      <script src="/assets/plugins/flot-chart/jquery.flot.tooltip.min.js"></script>
      <script src="/assets/plugins/flot-chart/jquery.flot.resize.js"></script>
      <script src="/assets/plugins/flot-chart/jquery.flot.pie.js"></script>
      <script src="/assets/plugins/flot-chart/jquery.flot.selection.js"></script>
      <script src="/assets/plugins/flot-chart/jquery.flot.stack.js"></script>
      <script src="/assets/plugins/flot-chart/jquery.flot.crosshair.js"></script> --}}
  
      {{-- <script src="/assets/pages/dashboard.js"></script> --}}

      <script src="https://www.chartjs.org/dist/2.9.3/Chart.min.js" type="text/javascript"></script>
  @php
  echo " <script>
          var data= {
                labels: [";
   $plans=App\Plans::where('status','active')->get();
   foreach ($plans as $plan) {
       
       echo "'";
       echo $plan->plan_name;
       echo "',";
   }   
   echo "],
                datasets: [{
                    label: 'Subscriptions',
                    data: [";
                    foreach ($plans as $plan) {
                     $sub=count(App\Subscribe::where('plan_id',$plan->id)->get());
                     echo $sub;
                     echo ",";
                    }      
            echo"],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
                    borderWidth: 1
                }]
            }        
            </script>";
  @endphp
      <script>
    var ctx = document.getElementById('planSub');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data:data,
        options: {
            responsive: true,
            scales: {
                yAxes: [{
                    gridLines:{
                     display: false 
                    },
                        
                    ticks: {
                        beginAtZero: true
                    }
                }],
                xAxes: [{
                    gridLines:{
                     display: false 
                    },
                        
                   
                }]
            }
        }
    });
    </script>




@php
$user=App\User::where('user_type','user')->get();
$subscriptions=App\Subscribe::where('status','active')->get();
$plans=App\Plans::where('status','active')->get();
echo " <script>
        var data= {
              labels: ['Users','Active Plans','Active Subscriptions'],
              datasets: [{
                  label: 'Subscriptions',
                  data: [".count($user).",".count($plans).",".count($subscriptions)."],
          backgroundColor: [
              'rgba(255, 99, 132, 0.5)',
              'rgba(54, 162, 235, 0.5)',
              'rgba(255, 206, 86, 0.5)',
              'rgba(75, 192, 192, 0.5)',
              'rgba(153, 102, 255, 0.5)',
              'rgba(255, 159, 64, 0.5)'
          ],
          borderColor: [
              'rgba(255, 99, 132, 1)',
              'rgba(54, 162, 235, 1)',
              'rgba(255, 206, 86, 1)',
              'rgba(75, 192, 192, 1)',
              'rgba(153, 102, 255, 1)',
              'rgba(255, 159, 64, 1)'
          ],
                  borderWidth: 1
              }]
          }        
          </script>";
@endphp





<script>
    var ctx = document.getElementById('userplansub');
    var myChart = new Chart(ctx, {
        type: 'pie',
        data:data,
        options: {
            responsive: true,
            scales: {
                yAxes: [{
                    gridLines:{
                     display: false 
                    },
                    ticks: {
                    display: false
                }
                }],
                xAxes: [{
                    gridLines:{
                     display: false 
                    },
                    ticks: {
                    display: false
                } 
                   
                }]
            }
        }
    });
    </script>
@endsection