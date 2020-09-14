@extends('layouts.application_layouts.app')

@section('page_title')
    My Listings
@endsection

@section('content-title')
<h2 class="text-center pb-5 heading-section" ><span style="border-bottom: 2px solid #589167;">My Listings</span></h2>
@endsection

@section('alerts')
    @if(session('success'))
        @include('layouts.sell_home_layouts._alerts')
    @endif
@endsection

@section('content')
<div class="container">
    @foreach ($propertyListings as $property)
        <div class="col-12">
            <div class="card-body">
                <svg class="bd-placeholder-img" width="100%" height="250" xmlns="http://www.w3.org/2000/svg" aria-label="Placeholder: Image" preserveAspectRatio="xMidYMid slice" role="img"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"/><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image</text></svg>
                <h5 class="card-title">{{ $property->property_type->propertytype_name }}</h5>
                <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatem, doloribus enim? Sequi, ex dolorum blanditiis magni porro commodi fuga asperiores voluptatem nemo tenetur! Vitae, ipsam suscipit! Possimus eligendi minima sit.</p>      
                <div class="row">
                    <div class="col-sm-12 col-lg-3">
                        <h3><strong><i class='fas fa-bed'></i> {{ $property->bedrooms }}</strong></h3>
                        <small>Bedrooms</small>
                    </div>
                    <div class="col-sm-12 col-lg-3">
                        <h3><strong><i class='fas fa-bath'></i> {{ $property->bathrooms }}</strong></h3>
                        <small>Baths</small>
                    </div>
                    <div class="col-sm-12 col-lg-3">
                        <h3><strong><i class='fas fa-building'></i> {{ $property->floorarea }}</strong></h3>
                        <small>Floor Area (sq.m.)</small>
                    </div>
                    <div class="col-sm-12 col-lg-3">
                        <h3><strong><i class='fas fa-building'></i> {{ $property->lotarea }}</strong></h3>
                        <small>Floor Area (sq.m.)</small>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection