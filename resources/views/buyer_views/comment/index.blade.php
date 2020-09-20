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
        @foreach ($comments as $comment)
            @if ($comment->buyer_id === Auth::user()->id)
            <div class="card mb-3">
                <div class="card-body">
                    <div class="card-title text-right"><strong>You</strong></div>
                    <div class="card-text text-right">{{ $comment->message }}</div>
                </div>
            </div>
            @endif
            @if($comment->property->seller->id === $comment->buyer_id)
            <div class="card mb-3">
                <div class="card-body">
                    <div class="card-title"><strong>{{ $property->seller->full_name }}</strong></div>
                    <div class="card-text">{{ $comment->message }}</div>
                    <div class="float-md-right">
                        <div class="col-sm-12">
                            <a class="btn btn-sm btn-block btn-info mt-3" href="#">Reply</a>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        @endforeach
    </div>
</div>
@endsection