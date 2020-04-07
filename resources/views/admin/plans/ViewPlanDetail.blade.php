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
                            <div class="col-sm-6 m-auto">
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
                                                    <th>Price</th>
                                                    <td>Rs.{{$plan->price}}</td>
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
                                                <div class="col-sm-6">
                                                    <h3>Starters</h3>
                                                    @if (count($starters)>0)
                                                      @foreach ($starters as $starter)
                                                      <div class="menu_item">
                                                      <em>Qty: {{$starter->quantity}}</em>
                                                        <h4>{{$starter->title}}</h4>
                                                        <p>{{$starter->description}}</p>
                                                    </div>
                                                      @endforeach  
                                                    @endif
                                               
                                                  
                                                    
                                                </div>
                                                <div class="col-sm-6">
                                                    <h3>Main Courses</h3>
                                                    @if (count($maincourses)>0)
                                                      @foreach ($maincourses as $maincourse)
                                                      <div class="menu_item">
                                                      <em>Qty: {{$maincourse->quantity}}</em>
                                                        <h4>{{$maincourse->title}}</h4>
                                                        <p>{{$maincourse->description}}</p>
                                                    </div>
                                                      @endforeach  
                                                    @endif
                                               
                                                  
                                                    
                                                </div>
                                              

                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <h3>Dessert</h3>
                                                    @if (count($desserts)>0)
                                                      @foreach ($desserts as $dessert)
                                                      <div class="menu_item">
                                                      <em>Qty: {{$dessert->quantity}}</em>
                                                        <h4>{{$dessert->title}}</h4>
                                                        <p>{{$dessert->description}}</p>
                                                    </div>
                                                      @endforeach  
                                                    @endif
                                               
                                                  
                                                    
                                                </div>
                                                <div class="col-sm-6">
                                                    @if (count($specials)>0)
                                                    <h3>Special Offers</h3>
                                                      @foreach ($specials as $special)
                                                      <div class="menu_item">
                                                      <em>Qty: {{$special->quantity}}</em>
                                                        <h4>{{$special->title}}</h4>
                                                        <p>{{$special->description}}</p>
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