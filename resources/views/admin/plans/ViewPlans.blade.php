@extends('layouts.admin')
@section('pagetitle','View Plans')
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

                            <h4 class="m-b-30 m-t-0">View Plans</h4>

                            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; width: 100%;">
                                <thead>
                                <tr>
                                    <th></th>
                                    <th>Pack name</th>
                                    <th>Tags</th>
                                    <th>Price</th>
                                    <th>Menu items</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="text-center"><img src="https://placehold.it/50x50" class="img img-thumbnail img-responsive img-circle" alt=""></td>
                                    <td>Andhra Brunch</td>
                                    <td>Meals,spice</td>
                                    <td>Rs.500</td>
                                    <td>7</td>
                                    <td>
                                        <a href="view-plan-detail" class="btn btn-primary">View Detail</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center"><img src="https://placehold.it/50x50" class="img img-thumbnail img-responsive img-circle" alt=""></td>
                                    <td>Western BreakFast</td>
                                    <td>Burger,sandwich</td>
                                    <td>Rs.300</td>
                                    <td>2</td>
                                    <td>
                                        <a href="view-plan-detail" class="btn btn-primary">View Detail</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center"><img src="https://placehold.it/50x50" class="img img-thumbnail img-responsive img-circle" alt=""></td>
                                    <td>Continental Lunch</td>
                                    <td>Pulav,Fried rice</td>
                                    <td>Rs.300</td>
                                    <td>2</td>
                                    <td>
                                        <a href="view-plan-detail" class="btn btn-primary">View Detail</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center"><img src="https://placehold.it/50x50" class="img img-thumbnail img-responsive img-circle" alt=""></td>
                                    <td>Mughal Lunch</td>
                                    <td>Biriyani,Beef</td>
                                    <td>Rs.500</td>
                                    <td>2</td>
                                    <td>
                                        <a href="view-plan-detail" class="btn btn-primary">View Detail</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center"><img src="https://placehold.it/50x50" class="img img-thumbnail img-responsive img-circle" alt=""></td>
                                    <td>Italian Dinner</td>
                                    <td>Lasagne,Pizza</td>
                                    <td>Rs.700</td>
                                    <td>2</td>
                                    <td>
                                        <a href="view-plan-detail" class="btn btn-primary">View Detail</a>
                                    </td>
                                </tr>
                          
                               
                               
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>

            </div> <!-- End Row -->

            <!-- end row -->


</div><!-- container-fluid -->

</div> <!-- Page content Wrapper -->



</div>
@endsection
