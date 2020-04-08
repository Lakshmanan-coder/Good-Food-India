@extends('layouts.user')
@section('header_type','header element_to_stick')
@section('extra_styles')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
     
        <!-- SPECIFIC CSS -->
        <link href="/css/home.css" rel="stylesheet">

        <link href="/css/admin/admin.css" rel="stylesheet">
        <style>
            footer h3, footer h5 {
    color: #fff !important;
}
        </style>
    
@endsection
@section('content')

    <!--hero section-->
    <div class="hero_single inner_pages background-image" data-background="url(img/hero_submit.jpg)">
        <div class="opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.6)">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-9 col-lg-10 col-md-8">
                        <h1 style="color:#fff !important">My Profile</h1>
                        {{-- <p>More bookings from diners around the corner</p> --}}
                    </div>
                </div>
                <!-- /row -->
            </div>
        </div>
    </div>
    <!-- /hero_single -->


        <!-- View plans -->
<main class="mt-4 mb-4">
    <div class="container">
    <div class="row">
        
<div class="col-sm-3">
    <div class="card custom-card-profile">
       
        <div class="w-100 mt-3">
         
                <div class="form-group text-center">
                <img src="/storage/profile_picture/{{Auth::user()->profile_picture}}" alt="cat" class="rounded-circle" width="100px" height="100px">
                </div>
            
            
            <div class="container-fluid">
                <div class="row pt-2 pb-2 styling-each-tabs">
                    <div class="col-md-12 text-center p-2 ">
                       <a type="button" data-profile >My profile</a>
                    </div>
                    
                </div>
                <!-- /row-->
                <div class="row pt-2 pb-2 styling-each-tabs">
                    <div class="col-md-12 text-center p-2 ">
                       <a type="button" data-sub>Subscription History</a>
                    </div>
                    
                </div>
                <div class="row pt-2 pb-2 styling-each-tabs">
                    <div class="col-md-12 text-center p-2 ">
                       <a type="button" data-order>Order History</a>
                    </div>
                    
                </div>
                <div class="row pt-2 pb-3 styling-each-tabs">
                    <div class="col-md-12 text-center p-2 ">
                        <a type="button" data-transac>Transaction History</a>
                     </div>
                
              </div>
                <!-- /row-->
            </div>
                <!-- /row-->
        
        </div>
        
    </div>
</div>
<div class="col-sm-8 active-1">
    <div class="card p-4 custom-card-profile">
       
        <div class="row">
           
            <div class="col-md-8 add_top_30">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Name</label>
                             <p>{{Auth::user()->name}}</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Telephone</label>
                            <p>{{Auth::user()->phoneno}}</p>
                        </div>
                    </div>
                </div>
                <!-- /row-->
                <div class="row">
                
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Email</label>
                            <p>{{Auth::user()->email}}</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Total Orders</label>
                            <p>6</p>
                        </div>
                    </div>
                </div>
            
                <!-- /row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="container">
                            <button id="btn" type="button"  class=" edit-button neu-light btn-action" onclick="location.href='/Profile.html'">Edit</button>
                        </div>
                    </div>
                </div>
                <!-- /row-->
            </div>
        </div>
        
    </div>
</div>

<div class="col-sm-8 active-2 d-none">
    <div class="card p-4 custom-card-profile">
       <div class="card-title">Subscription History</div>
        <div class="row">
           
            <table class="table table-bordered table-striped">
                <tr>
                   <th>S.NO</th>
                   <th>Plan Id</th>
                   <th>Plan Name</th>
                   <th>Plan Start</th>
                   <th>Plan End</th>
                  
                </tr>
                <tr>
                  <td>1</td>
                  <td>1</td>
                  <td>Hot Brunch</td>
                  <td>02/3/2020</td>
                  <td>12/3/2020</td>
                 
               </tr>
               <tr>
                  <td>2</td>
                  <td>2</td>
                  <td>Andra Lunch</td>
                  <td>22/3/2020</td>
                  <td>27/3/2020</td>
                 
               </tr>
               <tr>
                  <td>3</td>
                  <td>3</td>
                  <td>Mugal Lunch</td>
                  <td>27/3/2020</td>
                  <td>05/4/2020</td>
                 
               </tr>
            </table>
                <!-- /row-->
            </div>
        </div>
        
    </div>



<div class="col-sm-8 active-3 d-none">
    <div class="card p-4 custom-card-profile">
       <div class="card-title">Order History</div>
        <div class="row">
           
            <table class="table table-bordered table-striped">
                <tr>
                   <th>S.NO</th>
                   <th>Order Name</th>
                   <th>Ordered ON</th>
                   <th>Qty</th>
                   <th>Status</th>
                  
                  
                </tr>
                <tr>
                  <td>1</td>
                  <td>Lunch Pack</td>
                  <td>02/3/2020</td>
                  <td>2</td>
                  <td>completed</td>
                 
               </tr>
               <tr>
                <td>2</td>
                <td>chicken dinner</td>
                <td>12/3/2020</td>
                <td>4</td>
                <td>completed</td>
               
             </tr>
             <tr>
                <td>3</td>
                <td>Winner Dinner</td>
                <td>28/3/2020</td>
                <td>2</td>
                <td>upcoming </td>
               
             </tr>
            </table>
                <!-- /row-->
            </div>
        </div>
        
    </div>



<div class="col-sm-8 active-4 d-none">
    <div class="card p-4 custom-card-profile">
       <div class="card-title">Transacation History</div>
        <div class="row">
           
            <table class="table table-bordered table-striped">
                <tr>
                   <th>S.NO</th>
                   <th>Order Name/Sub Name</th>
                   <th>Ordered ON</th>
                   <th>Price</th>
                   <th>Status</th>
                  
                  
                </tr>
                <tr>
                  <td>1</td>
                  <td>Lunch Pack</td>
                  <td>02/3/2020</td>
                  <td>Rs 200</td>
                  <td>completed</td>
                 
               </tr>
               <tr>
                <td>2</td>
                <td>chicken dinner</td>
                <td>12/3/2020</td>
                <td>Rs.350</td>
                <td>completed</td>
               
             </tr>
             <tr>
                <td>3</td>
                <td>Winner Dinner</td>
                <td>28/3/2020</td>
                <td>Rs.400</td>
                <td>upcoming </td>
               
             </tr>
            </table>
                <!-- /row-->
            </div>
        </div>
        
    </div>
</div>

</div>



</div>
</div>
</div>
  
</main>

@endsection

@section('extra_scripts')
<script src="js/common_scripts.min.js"></script>
<script src="js/slider.js"></script>
<script src="js/common_func.js"></script>
<script src="assets/validate.js"></script>

<script>
   const div1 =document.querySelector('.active-1')
   const div2 =document.querySelector('.active-2')
   const div3 =document.querySelector('.active-3')
   const div4 =document.querySelector('.active-4')

   document.querySelector('[data-profile]').addEventListener('click',()=>{
       if(div1.hasAttribute('class',"d-none")){
           div1.classList.remove('d-none')
           div2.classList.add('d-none')
           div3.classList.add('d-none')
           div4.classList.add('d-none')
       }else{
           return
       }
   })
   document.querySelector('[data-sub]').addEventListener('click',()=>{
       if(div2.hasAttribute('class',"d-none")){
           div2.classList.remove('d-none')
           div1.classList.add('d-none')
           div3.classList.add('d-none')
           div4.classList.add('d-none')
       }else{
           return
       }
   })
   document.querySelector('[data-order]').addEventListener('click',()=>{
       if(div3.hasAttribute('class',"d-none")){
           div3.classList.remove('d-none')
           div1.classList.add('d-none')
           div2.classList.add('d-none')
           div4.classList.add('d-none')
       }else{
           return
       }
   })
   document.querySelector('[data-transac]').addEventListener('click',()=>{
       if(div4.hasAttribute('class',"d-none")){
           div4.classList.remove('d-none')
           div1.classList.add('d-none')
           div3.classList.add('d-none')
           div2.classList.add('d-none')
       }else{
           return
       }
   })
</script>

@endsection