<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Property Registration</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="{{ asset('/public/css/dashboard_style.css') }}">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</head>

<body>

    <div class="wrapper">
        <!-- Page Content Holder -->
        <div id="content">
            <div class="container">
                <div class="col-12">
                    <h1>Propery Registration</h1>
                    <form action="{{ route('properties.store') }}" method="POST" novalidate>
                        @csrf
                        <div class="form-group">
                            <select class="form-control {{ $errors->has('propertytype_id') ? 'is-invalid' : ''}}" name="propertytype_id">
                                <option selected disabled>Select Property Type</option>
                                @foreach($propertyTypes as $propertyType)
                                    <option value="{{ $propertyType->id }}" {{ old('propertytype_id') == $propertyType->id ? 'selected' : ''}}>{{ $propertyType->propertytype_name }}</option>
                                @endforeach
                            </select>
                            @error('propertytype_id')
                                <div class="d-block invalid-feedback">{{ $errors->first('propertytype_id') }}</div>
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
            </div>
        </div>
    </div>



    <script src="{{ asset('js/jquery.min.js') }}"></script>
  <script src="{{ asset('js/jquery-migrate-3.0.1.min.js') }}"></script>
  <script src="{{ asset('js/popper.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
  <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
  <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('js/jquery.animateNumber.min.js') }}"></script>
  <script src="{{ asset('js/scrollax.min.js') }}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{ asset('js/google-map.js') }}"></script>
  <script src="{{ asset('js/main.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $(this).toggleClass('active');
            });
        });
    </script>
</body>

</html> 