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