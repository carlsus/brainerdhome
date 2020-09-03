@extends('layouts.buyer_layouts.main_layout')
{{-- Custom CSS --}}
@section('custom_css')
    {{-- PLACE CUSTOM CSS HERE  --}}
@endsection
{{-- /Custom CSS --}}

@section('content')
<!-- Content -->
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center pb-5">
        <div class="col-md-7 heading-section text-center ftco-animate">
        <h2>Buyer Registration</h2>
        </div>
    </div>
        <div class="row">
            <div class="col-md-12">
                <form>
                    <!-- Lastname -->
                    
                    <div class="form-group row justify-content-center justify-content-center">
                        <div class="col-sm-10">
                            <label for="">Personal Information</label>
                            <input type="text" class="form-control" placeholder="Last Name">
                        </div>				
                    </div>
                    <!-- /Lastname -->
                    <!-- Firstname -->
                    <div class="form-group row justify-content-center">
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="First Name">
                        </div>				
                    </div>
                    <!-- /Firstname -->
                    <!-- Middlename -->
                    <div class="form-group row justify-content-center">
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Middle Name">
                        </div>				
                    </div>
                    <!-- /Middlename -->
                    <!-- Email -->
                    <div class="form-group row justify-content-center">
                        <div class="col-sm-10">
                            <input type="email" class="form-control" placeholder="Email">
                        </div>				
                    </div>
                    <!-- /Email -->
                    <!-- Confirm Email -->
                    <div class="form-group row justify-content-center">
                        <div class="col-sm-10">
                            <input type="email" class="form-control" placeholder="Confirm Email">
                        </div>				
                    </div>
                    <!-- /Confirm Email -->
                    
                    <!-- State Dropdown -->
                    <div class="form-group row justify-content-center">
                        <div class="col-sm-10">
                            <label for="">Address</label>
                            <select class="form-control" id="stateSel">
                                <option value="" selected>Select State</option>
                            </select>
                        </div>				
                    </div>
                    <!-- /State Dropdown -->
                    
                    <!-- City Dropdown -->
                    <div class="form-group row justify-content-center">
                        <div class="col-sm-10">
                            <select class="form-control" id="citySel">
                                <option value="" selected>Select City</option>
                            </select>
                        </div>				
                    </div>
                    <!-- /City Dropdown -->
                    <div class="form-group row justify-content-center">
                        <div class="col-md-4">
                            <a href="#" class="btn btn-block btn-lg btn-primary">Register</a>
                        </div>
                    </div>
                </form>
            </div>    
        </div>
    </div>
</section>
<!-- /Content -->
@endsection

{{-- Custom Scripts --}}
@section('custom_scripts')
    @include('layouts.buyer_layouts.scripts.state_and_town_script')
@endsection
{{-- /Custom Scripts --}}