@extends('layouts.app')
{{-- Custom CSS --}}
@section('custom_css')
    {{-- PLACE CUSTOM CSS HERE  --}}
@endsection
{{-- /Custom CSS --}}

@section('content')
<!-- Content -->
<section>
    <div class="container">
        <h1>Buyer Dashboard</h1>
        <div class="card mb-3" style="">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="https://static-ph.lamudi.com/static/media/bm9uZS9ub25l/2x2x5x880x450/f380204ec3f83d.jpg" class="card-img" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                    <div class="col-12 mb-3">
                        <button class="btn btn-info btn-block">Contact Agent</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-3" style="">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="https://static-ph.lamudi.com/static/media/bm9uZS9ub25l/2x2x5x880x450/f380204ec3f83d.jpg" class="card-img" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                    <div class="col-12 mb-3">
                        <button class="btn btn-info btn-block">Contact Agent</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Content -->
@endsection

{{-- Custom Scripts --}}
@section('custom_scripts')
    
@endsection
{{-- /Custom Scripts --}}