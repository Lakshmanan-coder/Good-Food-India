{{-- success message --}}
@if (session('success'))
<script>swal('Good Job !',"@php echo session('success') @endphp" , 'success');</script>
@endif
@if (session('error'))
<script>swal('Oops !',"@php echo session('error') @endphp" , 'error');</script>
@endif