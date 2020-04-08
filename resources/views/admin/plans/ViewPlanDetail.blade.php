@extends('layouts.admin')
@section('pagetitle','View Plan Detail')
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
                                    <h4 class="m-b-30 m-t-0">View Plan Detail</h4>
                                </div>
                                <div class="col-sm-4 text-right">
                                    <!-- <button class="btn btn-dark"  data-toggle="modal" data-target="#status-update">Update Status</button> -->
                                </div>
                            </div>




                            
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table class="table table-striped table-hover table-bordered">
                                            <tbody>
                                                <tr>
                                                    <th>Plan ID</th>
                                                    <td>#{{$plan->id}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Pack Name</th>
                                                    <td>{{$plan->plan_name}}</td>
                                                </tr>
                                            
                                                <tr>
                                                    <th>Tags</th>
                                                    <td>{{$plan->tags}}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        
                            <div class="col-sm-6">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table class="table table-striped table-hover table-bordered">
                                            <tbody>
                                               
                                                <tr>
                                                    <th>1 Day Price</th>
                                                    <td>Rs.{{$plan->one_price}}</td>
                                                </tr>
                                                <tr>
                                                    <th>7 Days Price</th>
                                                    <td>Rs.{{$plan->seven_price}}</td>
                                                </tr>
                                                <tr>
                                                    <th>15 Days Price</th>
                                                    <td>Rs.{{$plan->fifteen_price}}</td>
                                                </tr>
                                                <tr>
                                                    <th>30 Days Price</th>
                                                    <td>Rs.{{$plan->month_price}}</td>
                                                </tr>
                                               
                                            </tbody>
                                        </table>
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
                                                <h2>{{$plan->title}}</h2>

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
@section('extra_scripts')
    
@endsection