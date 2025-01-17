<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sellerzz</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @include('layouts.buyer_layouts.css.common_css')
    @yield('custom_css')
</head>
<body>
    @include('layouts.buyer_layouts.parts.top_header')
    
    @include('layouts.buyer_layouts.parts.nav')

    @yield('content')

    @include('layouts.buyer_layouts.parts.footer')

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

    @include('layouts.buyer_layouts.scripts.common_scripts')

    @yield('custom_scripts')
</body>
</html>


