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
                                        <th>Name</th>
                                        <th>Phone Number</th>
                                        <th>Pack Name</th>
                                        <th>Duration</th>
                                        <th>Address</th>
                                        <th>Payment Id</th>
                                        <th>Price</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if (count($subscribes)>0)
                                        @foreach ($subscribes as $subscribe)

                                        @php
                                         $plan=App\Plans::find($subscribe->plan_id);
                                         $user=App\User::find($subscribe->user_id);
                                        $menus=App\Menu::where('plan_id',$subscribe->plan_id)->get();
                                         $planpicture=App\PlanPictures::where('plan_id',$subscribe->plan_id)->first();
                                         @endphp


                                    <tr>
                                    <td class="text-center"><img src="/storage/profile_picture/{{$user->profile_picture}}" class="img  img-responsive img-circle" style="height:30px; width: 30px;"></td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->phoneno}}</td>
                                        <td>{{$plan->plan_name}}</td>
                                        <td>{{$subscribe->duration}} Days</td>
                                        <td>{{$subscribe->doorno}}, {{$subscribe->street}}, {{$subscribe->city}}, {{$subscribe->postelcode}}</td>
                                        <td>{{$subscribe->payment_id}}</td>
                                        <td>Rs. {{$subscribe->totalamount}}</td>
                                        <td>
                                        <a href="view-subscription-detail/{{$subscribe->id}}" class="btn btn-primary">View Subscription</a>
                                        {{-- <button class="btn btn-outline-danger del-btn">Delete Subscription </button> --}}
                                        </td>
                                    </tr>
                                            
                                        @endforeach
                                    @endif


                                    
                              

                                  
                                   
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