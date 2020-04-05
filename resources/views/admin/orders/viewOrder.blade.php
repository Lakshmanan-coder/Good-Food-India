@extends('layouts.admin')
@section('pagetitle','Manage Orders')
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

                            <h4 class="m-b-30 m-t-0">Manage Orders</h4>

                            <table id="datatable-responsive"
                                class="table table-striped table-bordered dt-responsive nowrap"
                                style="border-collapse: collapse; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>First name</th>
                                        <th>E-mail</th>
                                        <th>Pack Name</th>
                                        <th>Date</th>
                                        <th>Quantity</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><input type="checkbox" name="" id=""></td>
                                        <td>John Doe</td>
                                        <td>John@doe.com</td>
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
                                        <td><input type="checkbox" name="" id=""></td>
                                        <td>John Doe</td>
                                        <td>John@doe.com</td>
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
                                        <td><input type="checkbox" name="" id=""></td>
                                        <td>John Doe</td>
                                        <td>John@doe.com</td>
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
                                        <td><input type="checkbox" name="" id=""></td>
                                        <td>John Doe</td>
                                        <td>John@doe.com</td>
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
                Swal.fire("Deleted!", "Your Order  has been deleted.", "success");
            }
        });
    });
</script>
@endsection