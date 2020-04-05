@extends('layouts.admin')
@section('pagetitle','View Users')
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

                            <h4 class="m-b-30 m-t-0">Manage Users</h4>

                            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; width: 100%;">
                                <thead>
                                <tr>
                                    <th></th>
                                    <th>First name</th>
                                    <th>E-mail</th>
                                    <th>Contact No</th>
                                    <th>Total Orders</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="text-center"><img src="https://placehold.it/50x50" class="img img-thumbnail img-responsive img-circle" alt=""></td>
                                    <td>John Doe</td>
                                    <td>John@doe.com</td>
                                    <td>98765412302</td>
                                    <td>12</td>
                                    <td>
                                        <a href="view-user" class="btn btn-primary">View Detail</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center"><img src="https://placehold.it/50x50" class="img img-thumbnail img-responsive img-circle" alt=""></td>
                                    <td>John Doe</td>
                                    <td>John@doe.com</td>
                                    <td>98765412302</td>
                                    <td>12</td>
                                    <td>
                                        <a href="view-user" class="btn btn-primary">View Detail</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center"><img src="https://placehold.it/50x50" class="img img-thumbnail img-responsive img-circle" alt=""></td>
                                    <td>John Doe</td>
                                    <td>John@doe.com</td>
                                    <td>98765412302</td>
                                    <td>12</td>
                                    <td>
                                        <a href="view-user" class="btn btn-primary">View Detail</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center"><img src="https://placehold.it/50x50" class="img img-thumbnail img-responsive img-circle" alt=""></td>
                                    <td>John Doe</td>
                                    <td>John@doe.com</td>
                                    <td>98765412302</td>
                                    <td>12</td>
                                    <td>
                                        <a href="view-user" class="btn btn-primary">View Detail</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center"><img src="https://placehold.it/50x50" class="img img-thumbnail img-responsive img-circle" alt=""></td>
                                    <td>John Doe</td>
                                    <td>John@doe.com</td>
                                    <td>98765412302</td>
                                    <td>12</td>
                                    <td>
                                        <a href="view-user" class="btn btn-primary">View Detail</a>
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
