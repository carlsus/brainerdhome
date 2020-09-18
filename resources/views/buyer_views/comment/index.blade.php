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
    
</div>
@endsection