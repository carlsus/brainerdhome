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
        @foreach ($property->comments as $comment)
            <div class="card mb-3">
                <div class="card-body">
                    <div class="card-title">{{ $comment->buyer->full_name}}</div>
                    <div class="card-text">{{ $comment->message }}</div>
                    <div class="float-md-right">
                        <div class="col-sm-12">
                            <a class="btn btn-sm btn-block btn-info mt-3" href="#">Reply</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection