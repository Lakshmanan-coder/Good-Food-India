@extends('layouts.admin')
@section('pagetitle','Edit Plan')
@section('content')
<div class="content">

    <div class="">
        <div class="page-header-title">
            <h4 class="page-title">@yield('pagetitle')</h4>
        </div>
    </div>

   
    <div class="page-content-wrapper ">

        <div class="container-fluid">
            <form action="" method="post" enctype="multipart/form-data">
                @csrf
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
                                            <input type="text" class="form-control" name="planname" placeholder="Pizzeria da alfredo" required value="{{$plan->plan_name}}">
                                            </div>
                                        </div>
                                        <div class="form-group row col-sm-6">
                                            <label class="col-sm-2 control-label" for="example-text-input">Tags </label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="tags" placeholder="Pizza, Italian Food, Best Price" required value="{{$plan->tags}}">
                                                <span class="help-block"><small>Should Seperated by ( , ) Comma.</small></span>

                                            </div>
                                        </div>

                                        <div class="form-group row col-sm-6">
                                            <label class="col-sm-2 control-label" for="example-text-input">One Day Price</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control" name="one_price" min="0" placeholder="Rs. 3000" required value="{{$plan->one_price}}">
                                            </div>
                                        </div>
                                        <div class="form-group row col-sm-6">
                                            <label class="col-sm-2 control-label" for="example-text-input">7 Days Price</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control" name="seven_price" min="0" placeholder="Rs. 3000" required value="{{$plan->seven_price}}">
                                            </div>
                                        </div>
                                        <div class="form-group row col-sm-6">
                                            <label class="col-sm-2 control-label" for="example-text-input">15 Days Price</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control" name="fifteen_price" min="0" placeholder="Rs. 3000" required value="{{$plan->fifteen_price}}">
                                            </div>
                                        </div>

                                        <div class="form-group row col-sm-6">
                                            <label class="col-sm-2 control-label" for="example-text-input">30 Days Price</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control" name="month_price" min="0" placeholder="Rs. 3000" required value="{{$plan->month_price}}">
                                            </div>
                                        </div>

                                     
                                        <div class="form-group row col-sm-6">
                                            <label class="col-sm-2 control-label" for="example-text-input">Photos </label>
                                            <div class="col-sm-10">
                                                <input type="file" class="filestyle" name="pictures[]" multiple data-buttonname="btn-secondary">

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
                                <div data-repeater-list="menu">
                                    <div class="form-inline " style="margin-top: 10px;" data-repeater-item>

                                        <div class="form-group m-l-10">
                                            <input type="text" class="form-control" name="title" placeholder="Title">
                                        </div>
                                        <div class="form-group m-l-10">
                                            <input type="text" class="form-control" name="description" placeholder="Short Description">
                                        </div>
                                       
                                        <button type="button" data-repeater-delete class="btn btn-outline-danger waves-effect waves-light m-l-10">Delete</button>
                                    </div>
                                </div>
                                <button data-repeater-create type="button" class="btn btn-primary mt-3" style="margin-top: 20px;">Add More</button>
                            </div>
                            


                            <div class="col-sm-12 text-center">
                                <button class="btn btn-dark" type="submit">Update Plan</button>
                            </div>

                        </div> <!-- card-body -->
                    </div> <!-- card -->
                </div> <!-- col -->
            </div> <!-- End row -->

        </form>
    


       

        </div><!-- container -->

        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="m-t-0 m-b-30"> Plan Pictures</h4>

                            @if (count($planpictures)>0)
                            <table  class="table table-bordered table-striped">
                                @foreach ($planpictures as $picture)
                                   <tr>
                                       <td>
                                        <img src="/storage/plan_picture/{{$picture->path}}" height="75px"  width="75px" class="img img-responsive img-thumbnail">
                                       </td>
                                       <td>
                                        <a href="/admin/delete-plan-picture/{{$picture->id}}" class="btn btn-danger">Delete</a>
                                       </td>
                                   </tr>
                                @endforeach
                            </table>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="m-t-0 m-b-30"> Menu Items</h4>

                            @if (count($menus)>0)
                            <table  class="table table-bordered table-striped">
                                @foreach ($menus as $menu)
                                   <tr>
                                       <td>
                                       <b>{{$menu->title}}</b>
                                       
                                       </td>
                                       <td>{{$menu->description}}</td>
                                       <td>
                                        <a href="/admin/delete-menu-item/{{$menu->id}}" class="btn btn-danger">Delete</a>
                                       </td>
                                   </tr>
                                @endforeach
                            </table>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
  

    </div> <!-- Page content Wrapper -->


</div>
@endsection

@section('extra_scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.repeater/1.2.1/jquery.repeater.js"></script>
<!-- Bootstrap File Style -->
<script src="/assets/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js"></script>
<script src="/assets/js/app.js"></script>
<script>
    // setup the repeater
    $(document).ready(function () {
        $('.repeater').repeater({
            show: function () {
                $(this).slideDown();
            },
            hide: function (deleteElement) {
                if(confirm('Are you sure you want to delete this element?')) {
                    $(this).slideUp(deleteElement);
                }
            },
            isFirstItemUndeletable: true

        });

        $("#submitbtn").click(function(){
            // alert("hi");
            Swal.fire("Good Job !", "Your Plan Added Successfully.", "success");
        });

    });

</script>
@endsection