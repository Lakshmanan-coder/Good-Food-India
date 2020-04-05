@extends('layouts.admin')
@section('pagetitle','View Subscriptions')
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
                                    <h4 class="m-b-30 m-t-0">View Subscription Detail</h4>
                                </div>
                                <div class="col-sm-4 text-right">
                                </div>
                            </div>



                            <hr>

                            
                        <div class="row">
                           
                            
                            <div class="col-sm-12">
                                <table id="datatable-responsive" class=" datatable-responsive table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; width: 100%;">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>User Name</th>
                                        <th>Phone Number</th>
                                        <th>Pack Name</th>
                                        <th>Requested Date</th>                                                   
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="text-center"><img src="https://picsum.photos/200" class="img  img-responsive img-circle" style="height:30px; width: 30px;"></td>
                                        <td>John doe</td>
                                        <td>8052963147</td>
                                        <td>Hot Brunch</td>
                                        <td>02/01/2020</td>
                                        <td class="bg-success">ACTIVE</td>
                                        <td>
                                            <a href="view-subscription-detail" class="btn btn-primary">View Subscription</a>
                                            <button class="btn btn-outline-danger del-btn">Delete Subscription </button>
                                        </td>
                                    </tr>
                                 
                                    <tr>
                                        <td class="text-center"><img src="https://picsum.photos/200" class="img  img-responsive img-circle" style="height:30px; width: 30px;"></td>
                                        <td>John Snow</td>                                                    
                                        <td>9852963147</td>
                                        <td>ANDRA LUNCH</td>
                                        <td>02/3/2020</td> 
                                       
                                        <td class="bg-danger text-white">INACTIVE</td>
                                        <td>
                                            <a href="view-subscription-detail" class="btn btn-primary">View Subscription</a>
                                            <button class="btn btn-outline-danger del-btn">Delete Subscription </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><img src="https://picsum.photos/200" class="img  img-responsive img-circle" style="height:30px; width: 30px;"></td>
                                        <td>Tyrian Lanister</td>
                                        
                                        <td>8752963147</td>
                                        <td>Mugal Lunch</td>
                                        <td>02/3/2020</td> 
                                     
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
                         


                            <hr>

                           
                         




                           


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