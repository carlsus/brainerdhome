@extends('layouts.application_layouts.app')

@section('page_title')
    New Listings
@endsection

@section('content-title')
    <h2 class="text-center pb-3 heading-section" ><span style="border-bottom: 2px solid #589167;">{{ $property->title }}</span></h2>
@endsection

@section('alerts')
    @if(session('success'))
        @include('layouts.application_layouts._alerts')
    @endif
@endsection

@section('content')
<div class="container">
    <div class="col-12">
        <svg class="bd-placeholder-img" width="100%" height="250" xmlns="http://www.w3.org/2000/svg" aria-label="Placeholder: Image" preserveAspectRatio="xMidYMid slice" role="img"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"/><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image</text></svg>
        <div class="row">
            <div class="col-lg-8 col-sm-12">
                <h5 class="text-muted mt-3 mb-3">Price: {{ $property->formatted_price }}</h5>
                <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis et odit sunt a, repellat ipsam quisquam minus laborum, at laudantium suscipit id sit reprehenderit delectus quas alias blanditiis libero deserunt! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nulla, ratione repellendus id fugit dolor minus laborum animi debitis mollitia et architecto placeat nisi tenetur assumenda suscipit? Harum asperiores ad officiis?</p>
            </div>
            <div class="col-lg-4 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title text-center"><strong>{{ $property->seller->full_name }}</strong></div>
                        <div class="card-subtitle text-center mb-4"><span class="fas fa-envelope"></span> {{ $property->seller->email }}</div>
                        <div class="card-subtitle mb-2 text-muted">Contact Agent</div>
                        <form action="{{ route('message.store', $property->id) }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <textarea class="form-control" name="message" id="message" rows="5" placeholder="Message"></textarea>
                            </div>
                            <button class="btn btn-primary btn-block" type="submit">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection