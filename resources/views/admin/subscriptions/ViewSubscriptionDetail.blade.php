@extends('layouts.admin')
@section('pagetitle','View Subscription Detail')
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
                                    <h4 class="m-b-30 m-t-0">View Subscriptions</h4>
                                </div>
                                <div class="col-sm-4 text-right">
                                    <!-- <button class="btn btn-dark"  data-toggle="modal" data-target="#status-update">Update Status</button> -->
                                </div>
                            </div>



                            <hr>

                            
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h4 class="m-b-30 m-t-0">Subscriptions Detail</h4>
                                    </div>
                                    <div class="col-sm-12">
                                        <table class="table table-striped table-hover table-bordered">
                                            <tbody>
                                                <tr>
                                                    <th>Subscription ID</th>
                                                    <td>#335001</td>
                                                </tr>
                                                <tr>
                                                    <th>User Name</th>
                                                    <td>John Doe</td>
                                                </tr>
                                                <tr>
                                                    <th>Pack Name</th>
                                                    <td>Da Alfredo Menu</td>
                                                </tr>
                                                <tr>
                                                    <th>Requested Date & Time</th>
                                                    <td>3/05/2020 08.00AM</td>
                                                </tr>
                                                <tr>
                                                    <th>Start Date</th>
                                                    <td>05/05/2020 08.00AM</td>
                                                </tr>
                                                <tr>
                                                    <th>End Date</th>
                                                    <td>31/05/2020 08.00AM</td>
                                                </tr>
                                                <tr>
                                                    <th>Days</th>
                                                    <td>Mon Tue Wed</td>
                                                </tr>
                                                <tr>
                                                    <th>Total Days</th>
                                                    <td>13</td>
                                                </tr>
                                                <tr>
                                                    <th>Status</th>
                                                    <td class="bg-warning text-white">IN progress</td>
                                                </tr>
                                                <tr>
                                                    <th>Latest Update Date</th>
                                                    <td>3/05/2020 09.00AM</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h4 class="m-b-30 m-t-0">User Detail</h4>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-sm-3 text-center">
                                                <img class="img img-thumbnail img-responsive img-circle order-pack-detail"
                                                src="http://gif.nyxwolves.xyz/img/avatar4.jpg">
                                                <br>

                                            </div>
                                            <div class="col-sm-9">
                                               <table class="table table-striped table-borderless">
                                                    <tbody>
                                                        <tr>
                                                            <th>Name</th>
                                                            <td>John Doe</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Email</th>
                                                            <td>someone@example.compact</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Phone No</th>
                                                            <td>+91 98765 31210</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Address</th>
                                                            <td>17/5 GuruGothai Appts., <br>New Colony, Chromepet 600044</td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="2">
                                                                 <a href="view-user" class="btn btn-outline-primary">View More Details</a>    
                                                            </td>
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
                                    <h4 class="m-b-30 m-t-0">Pack Detail</h4>
                                </div>
                                <div class="col-sm-12">
                                    <div class="row">

                                        <div class="col-sm-2 text-center">
                                            <img class="img img-thumbnail img-responsive img-circle order-pack-detail"
                                                src="https://www.flatironsquare.co.uk/content/_mobile/Food_Hero_Image.jpg">
                                                <br>
                                            <a href="view-plan-detail" class="btn btn-outline-success">View More Details</a>    

                                        </div>
                                        <div class="col-sm-10">
                                                <h2>Da Alfredo Menu</h2>

                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <h3>Starters</h3>
                                                    <div class="menu_item">
                                                        <em>Qty: 9</em>
                                                        <h4>Imported Salmon Steak</h4>
                                                        <p>Base de arroz, aguacate, salmón noruego, semillas
                                                            de sésamo, edamame, wakame y soja light</p>
                                                    </div>
                                                    <div class="menu_item">
                                                        <em>Qty: 8</em>
                                                        <h4>Poke bol</h4>
                                                        <p>Queso de cabra light, dátiles, jamón serrano y
                                                            rúcula</p>
                                                    </div>
                                                    <div class="menu_item">
                                                        <em>Qty: 7</em>
                                                        <h4>Ensalada cesar</h4>
                                                        <p>lechuga, tomate, espinacas, pollo asado,
                                                            picatostes, queso proteínico y salsa césar 0%
                                                        </p>
                                                    </div>
                                                    
                                                </div>
                                                <div class="col-sm-6">
                                                    <h3>Main Course</h3>
                                                    <div class="menu_item">
                                                        <em>Qty: 7</em>
                                                        <h4>Oriental</h4>
                                                        <p>Cama de tabule con taquitos de pollo a la mostaza
                                                            light</p>
                                                    </div>
                                                    <div class="menu_item">
                                                        <em>Qty: 5</em>
                                                        <h4>Vegan Burguer</h4>
                                                        <p>Medio pollo asado acompañado de arroz o patatas
                                                            al toque masala</p>
                                                    </div>
                                                    <div class="menu_item">
                                                        <em>Qty: 4</em>
                                                        <h4>Indio Fit</h4>
                                                        <p>lechuga, tomate, espinacas, pollo asado,
                                                            picatostes, queso proteínico y salsa césar 0%
                                                        </p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
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