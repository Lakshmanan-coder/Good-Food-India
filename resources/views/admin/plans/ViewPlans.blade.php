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
                                   
                                    @if (count($plans)>0)
                                        @foreach ($plans as $plan)
                                            @php $menus=App\Menu::where('plan_id',$plan->id)->get(); $planpicture=App\PlanPictures::where('plan_id',$plan->id)->first(); @endphp

                                            <tr>
                                            <td class="text-center"><img src="/storage/plan_picture/{{$planpicture->path}}" class="img img-thumbnail img-responsive img-circle" style="height:50px; width:50px;" alt=""></td>
                                                <td>{{$plan->plan_name}}</td>
                                                <td>{{$plan->tags}}</td>
                                                <td>{{$plan->price}}</td>
                                                <td>{{count($menus)}}</td>
                                                <td>
                                                    <a href="view-plan-detail/{{$plan->id}}" class="btn btn-primary">View Detail</a>
                                                </td>
                                            </tr>


                                        @endforeach
                                    @endif



                               
                            
                               
                               
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
