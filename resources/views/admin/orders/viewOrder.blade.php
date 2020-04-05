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

    <!-- Required datatable js-->
    <script src="/assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="/assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
    <!-- Buttons examples -->
    <script src="/assets/plugins/datatables/dataTables.buttons.min.js"></script>
    <script src="/assets/plugins/datatables/buttons.bootstrap4.min.js"></script>

    <script src="/assets/plugins/datatables/jszip.min.js"></script>
    <script src="/assets/plugins/datatables/pdfmake.min.js"></script>
    <script src="/assets/plugins/datatables/vfs_fonts.js"></script>
    <script src="/assets/plugins/datatables/buttons.html5.min.js"></script>
    <script src="/assets/plugins/datatables/buttons.print.min.js"></script>
    <script src="/assets/plugins/datatables/dataTables.fixedHeader.min.js"></script>
    <script src="/assets/plugins/datatables/dataTables.keyTable.min.js"></script>
    <script src="/assets/plugins/datatables/dataTables.scroller.min.js"></script>

    <!-- Responsive examples -->
    <script src="/assets/plugins/datatables/dataTables.responsive.min.js"></script>
    <script src="/assets/plugins/datatables/responsive.bootstrap4.min.js"></script>

    <!-- Datatable init js -->
    <script src="/assets/pages/datatables.init.js"></script>

    <!-- Sweet-Alert  -->
    <script src="/assets/plugins/sweetalert2/sweetalert2.min.js"></script>

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