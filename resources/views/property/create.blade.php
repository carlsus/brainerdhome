@extends('layouts.application_layouts.app')

@section('page_title')
    Sell your Home
@endsection

@section('content-title')
<h2 class="text-center pb-5 heading-section" ><span style="border-bottom: 2px solid #589167;">Sell your Home</span></h2>
@endsection

@section('alerts')
    @if(session('success'))
        @include('layouts.application_layouts._alerts')
    @endif
@endsection

@section('content')
<div class="container">
    <form action="{{ route('properties.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <select class="form-control {{ $errors->has('type_id') ? 'is-invalid' : ''}}" name="type_id">
                <option selected disabled>Select Property Type</option>
                @foreach($propertyTypes as $propertyType)
                    <option value="{{ $propertyType->id }}" {{ old('type_id') == $propertyType->id ? 'selected' : ''}}>{{ $propertyType->type_name }}</option>
                @endforeach
            </select>
            @error('type_id')
                <div class="d-block invalid-feedback">{{ $errors->first('type_id') }}</div>
            @enderror
        </div>
        <div class="form-group">
            <input class="form-control {{ $errors->has('title') ? 'is-invalid' : ''}}" type="text" value="{{ old('title') }}" name="title" placeholder="Posting Title">
            @error('title')
                <div class="d-block invalid-feedback">{{ $errors->first('title') }}</div>
            @enderror
        </div>
        <div class="form-group">
            <input class="form-control {{ $errors->has('price') ? 'is-invalid' : ''}}" type="text" value="{{ old('price') }}" name="price" placeholder="Price">
            @error('price')
                <div class="d-block invalid-feedback">{{ $errors->first('price') }}</div>
            @enderror
        </div>
        <div class="form-group">
            <input class="form-control {{ $errors->has('hlurbno') ? 'is-invalid' : ''}}" type="text" value="{{ old('hlurbno') }}" name="hlurbno" placeholder="HLURB">
            @error('hlurbno')
                <div class="d-block invalid-feedback">{{ $errors->first('hlurbno') }}</div>
            @enderror
        </div>
        <div class="form-group">
            <input class="form-control {{ $errors->has('listingno') ? 'is-invalid' : ''}}" type="text" value="{{ old('listingno') }}" name="listingno" placeholder="Listing Number">
            @error('listingno')
                <div class="d-block invalid-feedback">{{ $errors->first('listingno') }}</div>
            @enderror
        </div>
        <div class="form-group">
            <input class="form-control {{ $errors->has('address') ? 'is-invalid' : ''}}" type="text" value="{{ old('address') }}" name="address" placeholder="Address">
            @error('address')
                <div class="d-block invalid-feedback">{{ $errors->first('address') }}</div>
            @enderror
        </div>
        <div class="form-group">
            <input class="form-control {{ $errors->has('lotarea') ? 'is-invalid' : ''}}" type="text" value="{{ old('lotarea') }}" name="lotarea" placeholder="Lot Area">
            @error('lotarea')
                <div class="d-block invalid-feedback">{{ $errors->first('lotarea') }}</div>
            @enderror
        </div>
        <div class="form-group">
            <input class="form-control {{ $errors->has('floorarea') ? 'is-invalid' : ''}}" type="text" value="{{ old('floorarea') }}" name="floorarea" placeholder="Floor Area">
            @error('floorarea')
                <div class="d-block invalid-feedback">{{ $errors->first('floorarea') }}</div>
            @enderror
        </div>
        <div class="form-group">
            <input class="form-control {{ $errors->has('bedrooms') ? 'is-invalid' : ''}}" type="text" value="{{ old('bedrooms') }}" name="bedrooms" placeholder="Bedrooms">
            @error('bedrooms')
                <div class="d-block invalid-feedback">{{ $errors->first('bedrooms') }}</div>
            @enderror
        </div>
        <div class="form-group">
            <input class="form-control {{ $errors->has('bathrooms') ? 'is-invalid' : ''}}" type="text" value="{{ old('bathrooms') }}" name="bathrooms" placeholder="Bathrooms">
            @error('bathrooms')
                <div class="d-block invalid-feedback">{{ $errors->first('bathrooms') }}</div>
            @enderror
        </div>
        <div class="form-group">
            <input class="form-control {{ $errors->has('garage') ? 'is-invalid' : ''}}" type="text" value="{{ old('garage') }}" name="garage" placeholder="Garage">
            @error('garage')
                <div class="d-block invalid-feedback">{{ $errors->first('garage') }}</div>
            @enderror
        </div>
        <div class="form-group">
            <button class="btn btn-primary" type="submit">Post Listing</button>
        </div>
    </form>
</div>

@endsection