@extends('layouts.admin')
@section('pagetitle','View Subscription Detail')
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
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-8">
                                    <h4 class="m-b-30 m-t-0">View Subscriptions</h4>
                                </div>
                                <div class="col-sm-4 text-right">
                                    <!-- <button class="btn btn-dark"  data-toggle="modal" data-target="#status-update">Update Status</button> -->
                                </div>
                            </div>



                            <hr>

                            
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h4 class="m-b-30 m-t-0">Subscriptions Detail</h4>
                                    </div>
                                    <div class="col-sm-12">
                                        <table class="table table-striped table-hover table-bordered">
                                            <tbody>
                                                <tr>
                                                    <th>Subscription ID</th>
                                                    <td># {{$subscribe->id}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Pack Name</th>
                                                    <td>{{$plan->plan_name}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Duration</th>
                                                    <td>{{$subscribe->duration}} Days</td>
                                                </tr>
                                                <tr>
                                                    <th>Time Slot</th>
                                                    <td>{{$subscribe->timeslot}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Price</th>
                                                    <td>{{$subscribe->totalamount}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Payment id</th>
                                                    <td>{{$subscribe->payment_id}}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-sm-12">
                                        <div id="container">
                                            <!--element which is going to render the Calendar-->
                                            <div id="element"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h4 class="m-b-30 m-t-0">User Detail</h4>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-sm-3 text-center">
                                                <img class="img img-thumbnail img-responsive img-circle order-pack-detail"
                                            src="/storage/profile_picture/{{$user->profile_picture}}">
                                                <br>

                                            </div>
                                            <div class="col-sm-9">
                                               <table class="table table-striped table-borderless">
                                                    <tbody>
                                                        <tr>
                                                            <th>Name</th>
                                                            <td>{{$user->name}}</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Email</th>
                                                            <td>{{$user->email}}</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Phone No</th>
                                                            <td>{{$user->phoneno}}</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Address</th>
                                                            <td>{{$subscribe->doorno}}, <br>{{$subscribe->street}}, <br> 
                                                                {{$subscribe->city}}, <br> {{$subscribe->postelcode}}
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="2">
                                                                 <a href="view-user/{{$user->id}}" class="btn btn-outline-primary">View More Details</a>    
                                                            </td>
                                                        </tr>
                                                      
                                                    </tbody>
                                               </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                         


                            <hr>

                            <div class="row">
                                <div class="col-sm-12">
                                    <h4 class="m-b-30 m-t-0">Menu Detail</h4>
                                </div>
                                <div class="col-sm-12">
                                    <div class="row">

                                        <div class="col-sm-2 text-center">
                                          @if (count($planpictures))
                                              @foreach ($planpictures as $picture)
                                              <img class="img img-thumbnail img-responsive img-circle order-pack-detail"
                                        src="/storage/plan_picture/{{$picture->path}}" style="height:100px; width:100px;">
                                              @endforeach
                                          @endif
                                        </div>
                                        <div class="col-sm-10">

                                            <div class="row">
                                                <div class="col-sm-12">
                                                    @if (count($menus)>0)
                                                      @foreach ($menus as $menu)
                                                      <div class="menu_item">
                                                        <h4>{{$menu->title}}</h4>
                                                        <p>{{$menu->description}}</p>
                                                    </div>
                                                      @endforeach  
                                                    @endif
                                               
                                                  
                                                    
                                                </div>
                                               
                                              

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>




                           


                        </div>
                    </div>
                </div>

            </div> <!-- End Row -->

            <!-- end row -->


        </div><!-- container-fluid -->

    </div> <!-- Page content Wrapper -->
    
 

</div>



@endsection

@section('extra_styles')
     <!--style reference from the Calendar component-->
     <link href="//cdn.syncfusion.com/ej2/ej2-base/styles/material.css" rel="stylesheet">
     <link href="//cdn.syncfusion.com/ej2/ej2-buttons/styles/material.css" rel="stylesheet">
     <link href="//cdn.syncfusion.com/ej2/ej2-calendars/styles/material.css" rel="stylesheet">
     <script src="https://cdn.syncfusion.com/ej2/dist/ej2.min.js" type="text/javascript"></script>
     <style>
         

/* Example - styles */

#container {
    visibility: hidden;
    max-width: 250px;
    margin: 0 auto;
}

#loader {
    color: #9dc839;
}

#element {
    display: block;
}


     </style>
@endsection

@section('extra_scripts')


<script>
    var ele = document.getElementById('container');
    if(ele) {
        ele.style.visibility = "visible";
     }   
</script>


@php
if ($subscribe->dates!="" && $subscribe->dates!=Null) {
    $results= explode(",",$subscribe->dates);
    echo "<script>
        var dates=[";


       $count=1;
    foreach ($results as $result) {
        $date= explode("-",$result);
       echo "new Date('$date[1]/$date[0]/$date[2]'),";
       if ($count==$subscribe->duration) {
       break;
       }
    }
    echo" ]
        </script>";
    
}

@endphp

<script>
// var dates=[new Date('1/1/2020'), new Date('1/15/2020'), new Date('1/3/2020'), new Date('1/25/2020')]
// var dates=[new Date('04-14-2020'),new Date('04-23-2020'),new Date('04-15-2020'),new Date('04-16-2020'),new Date('04-17-2020'),new Date('04-18-2020') ]


/*Initialize the calender component*/
var calendar = new ej.calendars.Calendar({
        isMultiSelection: true,
        values: dates
    });
    calendar.appendTo('#element');
</script>
@endsection