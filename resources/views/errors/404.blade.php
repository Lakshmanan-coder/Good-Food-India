@extends('layouts.user')
@section('header_type','header_in element_to_stick')
@section('pagetitle','404 NOT FOUND')
@section('extra_styles')
    
    <!-- SPECIFIC CSS -->
    <link href="/css/error.css" rel="stylesheet">
@endsection
@section('content')
    	
	<main>
		<div id="error_page">
			<div class="container">
				<div class="row justify-content-center text-center">
					<div class="col-xl-7 col-lg-9">
						<figure><img src="/img/404.svg" alt="" class="img-fluid"></figure>
						<p>We're sorry, but the page you were looking for doesn't exist.</p>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /error -->		
	</main>
	<!-- /main -->
@endsection