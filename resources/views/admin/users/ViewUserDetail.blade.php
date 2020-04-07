@extends('layouts.admin')
@section('pagetitle','View User Detail')
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
                                    <h4 class="m-b-30 m-t-0">View User Detail</h4>
                                </div>
                                <div class="col-sm-4 text-right">
                                </div>
                            </div>



                            <hr>

                            
                        <div class="row">
                           
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h4 class="m-b-30 m-t-0">User Detail</h4>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-sm-3 text-center">
                                                <img class="img img-thumbnail img-responsive  order-pack-detail"
                                            src="/storage/profile_picture/{{$user->profile_picture}}">
                                                <br>

                                            </div>
                                            <div class="col-sm-9">
                                               <table class="table table-striped table-borderless">
                                                    <tbody>
                                                        <tr>
                                                            <th>Name</th>
                                                            <td>{{$user->name}} </td>
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
                                                            <th>Total Orders</th>
                                                            <td>2</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Total Subscriptions</th>
                                                            <td>3</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Address</th>
                                                            <td>17/5 GuruGothai Appts., <br>New Colony, Chromepet 600044</td>
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
                                    <h4 class="m-b-30 m-t-0">Order History</h4>
                                </div>
                                <div class="col-sm-12">
                                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; width: 100%;">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Pack Name</th>
                                            <th>Date</th>
                                            <th>Quantity</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td class="text-center"><img src="https://picsum.photos/200" class="img  img-responsive img-circle" style="height:30px; width: 30px;"></td>

                                            <td>chicken dinner</td>
                                            <td>02/3/2020</td> 
                                            <td>12</td>
                                            <td>Completed</td>
                                            <td>
                                                <a href="order-detail" class="btn btn-primary">View Order</a>
                                                <button class="btn btn-outline-danger del-btn">Delete Order </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center"><img src="https://picsum.photos/200" class="img  img-responsive img-circle" style="height:30px; width: 30px;"></td>
                                            
                                            <td>chicken dinner</td>
                                            <td>02/3/2020</td> 
                                            <td>12</td>
                                            <td>Completed</td>
                                            <td>
                                                <a href="order-detail" class="btn btn-primary">View Order</a>
                                                <button class="btn btn-outline-danger del-btn">Delete Order </button>
                                            </td>
                                        </tr>
                                      
                                       
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-sm-12">
                                    <h4 class="m-b-30 m-t-0">Subscription History</h4>
                                </div>
                                <div class="col-sm-12">
                                    <table id="datatable-responsive" class=" datatable-responsive table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; width: 100%;">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Pack Name</th>
                                            <th> Plan Start</th>
                                            <th> Plan End</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td class="text-center"><img src="https://picsum.photos/200" class="img  img-responsive img-circle" style="height:30px; width: 30px;"></td>

                                            <td>Hot Brunch</td>
                                            <td>02/3/2020</td> 
                                            <td>12/3/2020</td> 
                                            <td class="bg-success">ACTIVE</td>
                                            <td>
                                                <a href="view-subscription-detail" class="btn btn-primary">View Subscription</a>
                                                <button class="btn btn-outline-danger del-btn">Delete Subscription </button>
                                            </td>
                                        </tr>
                                     
                                        <tr>
                                            <td class="text-center"><img src="https://picsum.photos/200" class="img  img-responsive img-circle" style="height:30px; width: 30px;"></td>

                                            <td>ANDRA LUNCH</td>
                                            <td>02/3/2020</td> 
                                            <td>12/3/2020</td> 
                                            <td class="bg-danger text-white">INACTIVE</td>
                                            <td>
                                                <a href="view-subscription-detail" class="btn btn-primary">View Subscription</a>
                                                <button class="btn btn-outline-danger del-btn">Delete Subscription </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center"><img src="https://picsum.photos/200" class="img  img-responsive img-circle" style="height:30px; width: 30px;"></td>

                                            <td>Mugal Lunch</td>
                                            <td>02/3/2020</td> 
                                            <td>12/3/2020</td> 
                                            <td class="bg-warning">END TODAY</td>
                                            <td>
                                                <a href="view-subscription-detail" class="btn btn-primary">View Subscription</a>
                                                <button class="btn btn-outline-danger del-btn">Delete Subscription </button>
                                            </td>
                                        </tr>

                                      
                                       
                                        </tbody>
                                    </table>
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
<script>
    //Success Message
    $('.del-btn').click(function () {
        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#5eed6a",
            cancelButtonColor: "#6cbafa",
            confirmButtonText: "Yes, delete it!"
        }).then(function (result) {
            if (result.value) {
                Swal.fire("Deleted!", "Your Subscriptions has been deleted.", "success");
            }
        });
    });
</script>
@endsection