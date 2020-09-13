<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Dashboard</title>

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
        <!-- Sidebar Holder -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Sellerzz</h3>
            </div>
            <hr>
            <ul class="list-unstyled components" >
              
                
                <li>
                    <a href="#">Home</a>
                   
                </li>
                <li>
                    <a href="#">Messages</a>
                </li>
                <li>
                    <a href="#">Support</a>
                </li>
                 <li>
                    <a href="#">Knowledgebase</a>
                </li>
                 <li>
                    <a  href="{{ route('logout') }}"
							   onclick="event.preventDefault();
											 document.getElementById('logout-form').submit();">
								{{ __('Logout') }}
							</a>
							<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
								@csrf
							</form>
                </li>
            </ul>

            
        </nav>

        <!-- Page Content Holder -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="navbar-btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Tools </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Mortgage</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Sell Your Home</a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </nav>


            <h2 class="text-center pb-5 heading-section" ><span style="border-bottom: 2px solid #589167;">Dashboard</span></h2>

            <div class="row">
                <div class="col-md-6">
                      <h4 class="text-center">Listed Homes</h4>
                      <div class="card mb-3" style="max-width: 540px;">
                          <div class="row no-gutters">
                            <div class="col-md-4">
                              <svg class="bd-placeholder-img" width="100%" height="250" xmlns="http://www.w3.org/2000/svg" aria-label="Placeholder: Image" preserveAspectRatio="xMidYMid slice" role="img"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"/><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image</text></svg>

                            </div>
                            <div class="col-md-8">
                              <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">It's a broader card with text below as a natural lead-in to extra content. This content is a little longer.</p>
                                
                              </div>
                            </div>
                          </div>
                        </div>
                </div>

                <div class="col-md-6">
                     <h4 class="text-center">Save Home</h4>
                     <div class="card mb-3" style="max-width: 540px;">
                          <div class="row no-gutters">
                            <div class="col-md-4">
                              <svg class="bd-placeholder-img" width="100%" height="250" xmlns="http://www.w3.org/2000/svg" aria-label="Placeholder: Image" preserveAspectRatio="xMidYMid slice" role="img"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"/><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image</text></svg>

                            </div>
                            <div class="col-md-8">
                              <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">It's a broader card with text below as a natural lead-in to extra content. This content is a little longer.</p>
                                
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="card mb-3" style="max-width: 540px;">
                          <div class="row no-gutters">
                            <div class="col-md-4">
                              <svg class="bd-placeholder-img" width="100%" height="250" xmlns="http://www.w3.org/2000/svg" aria-label="Placeholder: Image" preserveAspectRatio="xMidYMid slice" role="img"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"/><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image</text></svg>

                            </div>
                            <div class="col-md-8">
                              <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">It's a broader card with text below as a natural lead-in to extra content. This content is a little longer.</p>
                                
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="card mb-3" style="max-width: 540px;">
                          <div class="row no-gutters">
                            <div class="col-md-4">
                              <svg class="bd-placeholder-img" width="100%" height="250" xmlns="http://www.w3.org/2000/svg" aria-label="Placeholder: Image" preserveAspectRatio="xMidYMid slice" role="img"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"/><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image</text></svg>

                            </div>
                            <div class="col-md-8">
                              <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">It's a broader card with text below as a natural lead-in to extra content. This content is a little longer.</p>
                                
                              </div>
                            </div>
                          </div>
                        </div>
                    
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