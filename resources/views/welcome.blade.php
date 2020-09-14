@extends('layouts.landing_page_layouts.app')
@section('content')
<header class="cover">
	<div class="container-fluid h-100 text-white">
		<div class="row h-100 align-items-center">
			<div class=" text-md-left text-center ml-md-5 banner-text">
				<h1 class="banner-text">Changing Real estate Forever!<br>
					Never Pay 6% Again.
				</h1>
				<p class="lead">
					<a class="btn btn-lg btn learnmore" href="#">Learn More..</a>
				</p>
			</div>
		</div>
	</div>
</header>



	<section class="ftco-section">
	<div class="container">
		<div class="row justify-content-center pb-5">
	  <div class="col-md-7 heading-section text-center ftco-animate">
		  
		<h2>Easy as 1-2-3</h2>
	  </div>
	</div>
		<div class="row">
			<div class="col-md-4 d-flex align-items-stretch ftco-animate">
				<div class="services-2 text-center">
					<div class="icon-wrap">
						<div class="number d-flex align-items-center justify-content-center"><span>1</span></div>
						<div class="icon d-flex align-items-center justify-content-center">
							<span class="flaticon-checklist"></span>
						</div>
					</div>
					<h2>List your Home Free</h2>
				  
				</div>
			</div>
			<div class="col-md-4 d-flex align-items-stretch ftco-animate">
				<div class="services-2 text-center">
					<div class="icon-wrap">
						<div class="number d-flex align-items-center justify-content-center"><span>02</span></div>
						<div class="icon d-flex align-items-center justify-content-center">
							<span class="flaticon-employee"></span>
						</div>
					</div>
					<h2>Connect with buyers</h2>
					<!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p> -->
				</div>
			</div>
			<div class="col-md-4 d-flex align-items-stretch ftco-animate">
				<div class="services-2 text-center">
					<div class="icon-wrap">
						<div class="number d-flex align-items-center justify-content-center"><span>0</span></div>
						<div class="icon d-flex align-items-center justify-content-center">
							<!-- <span class="flaticon-trade"></span> -->
							<img src="{{ asset('/images/sell1.png') }}">
						</div>
					</div>
					<h2>Sell your Home</h2>
					  
				</div>
			</div>
			
		</div>
	</div>
</section>
@endsection
