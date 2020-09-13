<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>@yield('page_title')</title>
    @include('layouts.sell_home_layouts.common_css')
</head>

<body>
    <div class="wrapper">
        {{-- Sidebar --}}
        @include('layouts.sell_home_layouts.sidebar')
        
        <!-- Page Content Holder -->
        <div id="content">
            {{-- Navbar --}}
            @include('layouts.sell_home_layouts.navbar')
            
            {{-- Page Heading Text --}}
            @yield('content-title')
            
            {{-- Page Content --}}
            <div class="row">
                @yield('content')
            </div>
        </div>
    </div>
    @include('layouts.sell_home_layouts.common_js')
</body>

</html> 