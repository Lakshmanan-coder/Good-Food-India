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
                {{-- <div class="row pt-2 pb-2 styling-each-tabs">
                    <div class="col-md-12 text-center p-2 ">
                       <a type="button" data-order>Order History</a>
                    </div>
                    
                </div>
                <div class="row pt-2 pb-3 styling-each-tabs">
                    <div class="col-md-12 text-center p-2 ">
                        <a type="button" data-transac>Transaction History</a>
                     </div>
                
              </div> --}}
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
                            <label>Total Subscriptions</label>
                        <p>{{count($subscribes)}}</p>
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
        <div class="row table-responsive">
           
            <table class="table table-bordered table-striped ">
                <tr>
                   <th>Plan Name</th>
                   <th>Duration</th>
                   <th>Address</th>
                   <th>Payment ID</th>
                   <th>Price</th>
                </tr>

                @if (count($subscribes)>0)
                    @foreach ($subscribes as $subscribe)
                    <tr>
                      @php $plan=App\Plans::find($subscribe->plan_id) @endphp  

                    <td>{{$plan->plan_name}}</td>
                    <td>{{$subscribe->duration}} Days</td>
                    <td>{{$subscribe->doorno}}, {{$subscribe->street}}, {{$subscribe->city}}, {{$subscribe->postelcode}}</td>
                    <td>{{$subscribe->payment_id}}</td>
                    <td>Rs. {{$subscribe->totalamount}}</td>

                </tr>
                    @endforeach
                @endif
                
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