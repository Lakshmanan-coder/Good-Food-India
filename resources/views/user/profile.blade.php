@extends('layouts.user')
@section('pagetitle','Profile')

@section('header_type','header_in element_to_stick')
@section('extra_styles')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link rel="stylesheet" href="/css/date-picker.css">
        <!-- SPECIFIC CSS -->
        <link href="/css/home.css" rel="stylesheet">

        <link href="/css/admin/admin.css" rel="stylesheet">
        <style>
        footer h3, footer h5 {
        color: #fff !important;
        }
        #edit-profile,#myModel {
        top: 15%;
        }
        </style>
    
@endsection
@section('content')

    <!--hero section-->
    {{-- <div class="hero_single inner_pages background-image" data-background="url(img/hero_submit.jpg)">
        <div class="opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.6)">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-9 col-lg-10 col-md-8">
                        <h1 style="color:#fff !important">My Profile</h1>
                    </div>
                </div>
                <!-- /row -->
            </div>
        </div>
    </div> --}}
    <!-- /hero_single -->


        <!-- View plans -->
<main class="mt-5 mb-5 ">
    <div class="container mt-5 mb-5">
    <div class="row mb-5 mt-5">
        
<div class="col-sm-3" >
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
                       <a type="button" data-sub>My Subscriptions</a>
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
                            <button id="btn" type="button"  class=" edit-button neu-light btn-action" data-toggle="modal" data-target="#edit-profile" >Edit</button>
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
       <div class="card-title">My Subscriptions</div>
        <div class="row table-responsive">
           
            <table class="table table-bordered table-striped ">
                <tr>
                   <th>Plan Name</th>
                   <th>Duration</th>
                   <th>Address</th>
                   <th>Payment ID</th>
                   <th>Price</th>
                   <th>Actions</th>
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
                    <td>
                        @php 
if ($subscribe->duration!=30) {
$results= explode(",",$subscribe->dates);
$count=0;
$dates="";
foreach ($results as $result) {
    if(strtotime($result) > time()) {
        if ($count==0) {
            $dates=$result;
        }else{
            $dates=$dates.','.$result;
        }
        $count++;
    }  
}
}else{
    $results= explode(",",$subscribe->dates);
    $count=0;
    $dates="";
    foreach ($results as $result) {
        if(strtotime($result) > time()) {
            if ($count==0) {
                $dates=$result;
            }
            $count++;
        }  
    }
}
                  

                        @endphp



                    <button  data-dates="{{$dates}}" data-duration="{{$subscribe->duration}}" data-limit="{{$count}}" data-subid="{{$subscribe->id}}" type="button" data-toggle="modal" data-target="#myModel" class="date_model btn btn-dark">View Dates</button>
                    </td>

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



<div id="edit-profile" class="modal fade" role="dialog">
    <div class="modal-dialog">
  
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <form action="" method="post" enctype="multipart/form-data">
        <div class="modal-body">
         {{-- <b class="card-title">Edit Profile</b>
         <hr> --}}
             @csrf
             <div class="form-group">
               <label for="">Name</label>
               <input type="text" name="name" class="form-control" value="{{Auth::user()->name}}" >
             </div>
             <div class="form-group">
               <label for="">Phone No</label>
               <input type="text" name="phoneno" class="form-control" value="{{Auth::user()->phoneno}}" >
             </div>
             <div class="form-group">
               <label for="">Profile Picture</label>
               <input type="file" name="profile_picture" class="form-control"  >
             </div>
            </div>
            <div class="modal-footer">
                <input type="submit" value="Edit Profile" class="btn btn-primary">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </form>
      </div>
  
    </div>
</div>

<div id="myModel" class="modal fade" role="dialog">
    <div class="modal-dialog">
  
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <form action="/edit-days" method="post" enctype="multipart/form-data" id="date-update-form">
        <div class="modal-body">
         {{-- <b class="card-title">Edit Profile</b>
         <hr> --}}
             @csrf
             <div class="form-group">
               <label for="">Your  Dates</label>
               <input type="hidden" name="sub_id"  id="sub_id">
               <input type="hidden" name="duration"  id="dur">
               <input type="hidden" name="count"  id="count">
               <input type="hidden"   id="leng">
               <input type="text" name="dates" class="form-control date"  id="dates" placeholder="Pick the Prefferred dates">
               <span id="dates-alert" class="invalid-feedback"></span>
             </div>
             
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="submit-dates">Update Dates </button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </form>
      </div>
  
    </div>
</div>
 

@endsection

@section('extra_scripts')
<script src="/js/datepicker.min.js"></script>
<script src="/js/datepicker_func_1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
{{-- <script src="js/common_scripts.min.js"></script>
<script src="js/slider.js"></script>
<script src="js/common_func.js"></script>
<script src="assets/validate.js"></script> --}}
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script>
   const div1 =document.querySelector('.active-1')
   const div2 =document.querySelector('.active-2')


   document.querySelector('[data-profile]').addEventListener('click',()=>{
       if(div1.hasAttribute('class',"d-none")){
           div1.classList.remove('d-none')
           div2.classList.add('d-none')
       }else{
           return
       }
   })
   document.querySelector('[data-sub]').addEventListener('click',()=>{
       if(div2.hasAttribute('class',"d-none")){
           div2.classList.remove('d-none')
           div1.classList.add('d-none')
       }else{
           return
       }
   })
  
</script>



<script>
    $(".date_model").click(function(){
        // $('#myModel').modal('show');
        var dates=$(this).data('dates');
        var duration=$(this).data('duration');
        var limit=$(this).data('limit');
        var sub_id=$(this).data('subid');
        $("#sub_id").val(sub_id);
        $("#dur").val(duration);
        $("#count").val(limit);
        if (duration==30) {
            multidate=false;
            $(".date").datepicker('remove');
            $('.date').datepicker({
            format: 'dd-mm-yyyy',
            maxViewMode:0,
            multidate:multidate,
            startDate: '+1d',
            maxDate: "+1m"
            });
            $("#dates").val(dates);

        }else{
            multidate=limit;
            $(".date").datepicker('remove');
            $('.date').datepicker({
            format: 'dd-mm-yyyy',
            maxViewMode:0,
            multidate:multidate,
            startDate: '+1d',
            maxDate: "+1m"
            });
            $("#dates").val(dates);
        }
        // alert(dates);
       
    });
   
    $('.date').on('changeDate', function(e) {  
    // e.dates is an array
    var leng=e.dates.length;
    $("#leng").val(leng);
});

$("#submit-dates").click(function(){
   var data= $(".date").val();
   if (data!="") {
    var leng=$("#leng").val();
        var duration=$("#dur").val();
        var limit=$("#count").val();
        if (duration!=30) {
            if (leng==limit) {
                $("#date-update-form").submit();
            }else{
                alert("The required dates are not fulfilled");
            }
        }else{
            if (leng==1) {
                $("#date-update-form").submit();
            }else{
                alert("You must Give one Date");
            }
        }
   }else{
    alert("The required dates are not fulfilled");
   }
       
    });
   
</script>


@endsection