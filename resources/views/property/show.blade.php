@extends('layouts.application_layouts.app')

@section('page_title')
    New Listings
@endsection

@section('content-title')
    <h2 class="text-center pb-3 heading-section" ><span style="border-bottom: 2px solid #589167;">{{ $property->title }}</span></h2>
    <h5 class="text-center text-muted">By: {{ $property->seller->full_name }}</h5>
    <h5 class="text-center text-muted">{{ $property->formatted_price }}</h5>
    
@endsection

@section('alerts')
    @if(session('success'))
        @include('layouts.application_layouts._alerts')
    @endif
@endsection

@section('content')
<div class="container">
    <div class="col-12">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis et odit sunt a, repellat ipsam quisquam minus laborum, at laudantium suscipit id sit reprehenderit delectus quas alias blanditiis libero deserunt! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nulla, ratione repellendus id fugit dolor minus laborum animi debitis mollitia et architecto placeat nisi tenetur assumenda suscipit? Harum asperiores ad officiis?</p>
    </div>
</div>
@endsection