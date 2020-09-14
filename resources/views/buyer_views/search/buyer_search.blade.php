@extends('layouts.landing_page_layouts.app')
@section('content')
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center pb-5">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <h2>Find a Home</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form>
                    <!-- State Dropdown -->
                    <div class="form-group row">
                        <label for="state" class="col-sm-2 col-form-label">State</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="stateSel">
                                <option value="" selected>Select State</option>
                            </select>
                        </div>				
                    </div>
                    <!-- /State Dropdown -->
                    
                    <!-- City Dropdown -->
                    <div class="form-group row">
                        <label for="city" class="col-sm-2 col-form-label">City</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="citySel">
                                <option value="" selected>Select City</option>
                            </select>
                        </div>				
                    </div>
                    <!-- /City Dropdown -->

                    <!-- Lot Area -->
                    <div class="form-group row">
                        <label for="lot_area" class="col-sm-2 col-form-label">Lot Area <small>sq.ft.</small></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="lot_area" placeholder="">
                        </div>
                    </div>
                    <!-- /Lot Area -->
                    <div class="form-group row">
                        <div class="col-md-10 offset-md-2 mb-3">
                            <a class="btn btn-block btn-lg btn-primary" href="#">Search</a>
                        </div>
                    </div>
                </form>
                <hr>
                <div class="text-center">
                    <a href="{{ route('buyer.register') }}">Register</a> to avail of our exclusive deals.
                </div>
            </div>    
        </div>
    </div>
</section>
@endsection