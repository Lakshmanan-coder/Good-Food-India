@extends('layouts.admin')
@section('pagetitle','Add Plan')
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
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="m-t-0 m-b-30"> Plan Details</h4>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row">
                                        
                                        <div class="form-group row col-sm-6">
                                            <label class="col-sm-2 control-label" for="example-text-input">Pack Name</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control"  placeholder="Pizzeria da alfredo">
                                            </div>
                                        </div>

                                        <div class="form-group row col-sm-6">
                                            <label class="col-sm-2 control-label" for="example-text-input">Price</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control" min="0" placeholder="Rs. 3000">
                                            </div>
                                        </div>

                                        <div class="form-group row col-sm-6">
                                            <label class="col-sm-2 control-label" for="example-text-input">Tags </label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control"  placeholder="Pizza, Italian Food, Best Price">
                                                <span class="help-block"><small>Should Seperated by ( , ) Comma.</small></span>

                                            </div>
                                        </div>
                                        <div class="form-group row col-sm-6">
                                            <label class="col-sm-2 control-label" for="example-text-input">Photos </label>
                                            <div class="col-sm-10">
                                                <input type="file" class="filestyle" multiple data-buttonname="btn-secondary">

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div> <!-- end row -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->


            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="m-t-0 m-b-30">Menu Items</h4>

                            <div class="repeater">
                                <div data-repeater-list="group-a">
                                    <div class="form-inline " style="margin-top: 10px;" data-repeater-item>
                                        <div class="form-group">
                                            <label class="sr-only" for="exampleInputEmail2">Email address</label>
                                            <select name="" class="form-control" id="">
                                                <option value="">----------------------------------</option>
                                                <option value="">Starters</option>
                                                <option value="">Main Course</option>
                                                <option value="">Dessert</option>
                                                <option value="">Special Offers</option>
                                            </select>
                                        </div>

                                        <div class="form-group m-l-10">
                                            <label class="sr-only" for="exampleInputPassword2">Title</label>
                                            <input type="text" class="form-control" id="exampleInputPassword2" placeholder="Title">
                                        </div>
                                        <div class="form-group m-l-10">
                                            <label class="sr-only" for="exampleInputPassword2">Short Description</label>
                                            <input type="text" class="form-control" id="exampleInputPassword2" placeholder="Short Description">
                                        </div>
                                        <div class="form-group m-l-10">
                                            <label class="sr-only" for="exampleInputPassword2">Quantity</label>
                                            <input type="number" min="1" class="form-control" id="" placeholder="Quantity">
                                        </div>
                                       
                                        <button type="button" data-repeater-delete class="btn btn-outline-danger waves-effect waves-light m-l-10">Delete</button>
                                    </div>
                                </div>
                                <button data-repeater-create type="button" class="btn btn-primary mt-3" style="margin-top: 20px;">Add More</button>
                            </div>
                            


                            <div class="col-sm-12 text-center">
                                <button class="btn btn-success" id="submitbtn">Add Plan</button>
                            </div>

                        </div> <!-- card-body -->
                    </div> <!-- card -->
                </div> <!-- col -->
            </div> <!-- End row -->


    


       

        </div><!-- container -->

    </div> <!-- Page content Wrapper -->


</div>
@endsection

@section('extra_scripts')
       <!-- Sweet-Alert  -->
       <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.repeater/1.2.1/jquery.repeater.js"></script>
       <!-- Bootstrap File Style -->
       <script src="/assets/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js"></script>
       <script src="/assets/js/app.js"></script>
@endsection