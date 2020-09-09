@extends('layouts.app')
@section('content')

<section class="ftco-section">
	<div class="container">
		<div class="row justify-content-center pb-5">
	  <div class="col-md-7 heading-section text-center ftco-animate">
		<h2>Sell Your Home</h2>
	  </div>
	</div>
		<div class="row">
			<div class="col-md-12">
				<form>
					<div class="form-group row">
					  <label for="inputEmail3" class="col-sm-2 col-form-label">Home Address</label>
					  <div class="col-sm-10">
						<input type="text" class="form-control" id="inputEmail3" placeholder="">
					  </div>
					</div>
					<div class="form-group row">
					  <label for="inputPassword3" class="col-sm-2 col-form-label">How many Beds</label>
					  <div class="col-sm-10">
						<input type="password" class="form-control" id="inputPassword3" placeholder="">
					  </div>
					</div>
					<div class="form-group row">
						<label for="inputPassword3" class="col-sm-2 col-form-label">How many Baths</label>
						<div class="col-sm-10">
						  <input type="password" class="form-control" id="inputPassword3" placeholder="">
						</div>
					</div>
					<div class="form-group row">
						<label for="inputPassword3" class="col-sm-2 col-form-label">Square Footage</label>
						<div class="col-sm-10">
						  <input type="password" class="form-control" id="inputPassword3" placeholder="">
						</div>
					  </div>
					  <div class="form-group row">
						<label for="inputPassword3" class="col-sm-2 col-form-label">Lot Size</label>
						<div class="col-sm-10">
						  <input type="password" class="form-control" id="inputPassword3" placeholder="">
						</div>
					  </div>
					  <input type="submit" value="Save" class="btn btn-primary pull-right" />
				  </form>
				</div>
				  
			
		</div>
	</div>
</section>

@endsection
