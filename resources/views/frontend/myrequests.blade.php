<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Ermy</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="userfront/css/animate.css">
    
    <link rel="stylesheet" href="userfront/css/owl.carousel.min.css">
    <link rel="stylesheet" href="userfront/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="userfront/css/magnific-popup.css">
    
    <link rel="stylesheet" href="userfront/css/flaticon.css">
    <link rel="stylesheet" href="userfront/css/style.css">
  </head>
  <body>
    
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">Ermy</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="/" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="about.html" class="nav-link">pricing</a></li>
	          <li class="nav-item"><a class="nav-link" href="leadership.html">About us</a></li>
	          <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
			   @if (Auth::guest())
						<li class="nav-item cta"><a href="/login" class="nav-link"><span>Login</span></a></li>
			  @else
                        <li class="nav-item"><a href="my-requests" class="nav-link">My Requests</a></li>
						<li class="nav-item cta"><a href="/create-request" class="nav-link"><span>Request Now</span></a></li>
			  @endif
	          
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->


    
<div class="app-content">
					<section class="section">
                    	
						<br>
						<br>
						<br>
						<br>
						<br>
						<div class="container">
						<div class="section-body">

							<div class="row">
								<div class="col-12">
									<div class="card">
										<div class="card-header">
											<div class="float-right">
												<form>
													
												</form>
											</div>
											<h4>My Requests</h4>
										</div>
										<div class="card-body">
											<div class="table-responsive">
												<table class="table table-striped table-bordered mb-0 text-nowrap">
													<tr>
														<th>Request ID</th>
														<th>worker</th>
														<th>coins</th>
														<th>state</th>
														<th>created</th>
													</tr>

                                                    @foreach($requests as $request)
													<tr>
														<td>
															<div class="custom-checkbox custom-control">
																{{$request->id}}
															</div>
														</td> 
														
														<td>{{$request->worker_id}}</a></td>
														<td>{{$request->coins}}</a></td>
														<td>{{$request->state_id}}</a></td>
														<td>{{$request->created_at}}</td>
													</tr>

                                                    @endforeach
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

					</section>
				</div>
                </div>
                <br>
                <br>
                <br>
                <br>


    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Ermy</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <ul class="ftco-footer-social list-unstyled mb-0">
                <li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
	              <li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
	              <li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Unseful Links</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Company</a></li>
                <li><a href="#" class="py-2 d-block">Pricing</a></li>
                <li><a href="#" class="py-2 d-block">Leadership</a></li>
                <li><a href="#" class="py-2 d-block">Blog</a></li>
                <li><a href="#" class="py-2 d-block">Contact</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Navigational</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Join Us</a></li>
                <li><a href="#" class="py-2 d-block">Blog</a></li>
                <li><a href="#" class="py-2 d-block">Privacy &amp; Policy</a></li>
                <li><a href="#" class="py-2 d-block">Terms &amp; Condition</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Office</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="mr-3 fa fa-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
	                <li><a href="#"><span class="mr-3 fa fa-phone"></span><span class="text">+2 392 3929 210</span></a></li>
	                <li><a href="#"><span class="mr-3 fa fa-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Ermy <i class="fa fa-heart" aria-hidden="true"></i>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="userfront/js/jquery.min.js"></script>
  <script src="userfront/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="userfront/js/popper.min.js"></script>
  <script src="userfront/js/bootstrap.min.js"></script>
  <script src="userfront/js/jquery.easing.1.3.js"></script>
  <script src="userfront/js/jquery.waypoints.min.js"></script>
  <script src="userfront/js/jquery.stellar.min.js"></script>
  <script src="userfront/js/owl.carousel.min.js"></script>
  <script src="userfront/js/jquery.magnific-popup.min.js"></script>
  <script src="userfront/js/jquery.animateNumber.min.js"></script>
  <script src="userfront/js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="userfront/js/google-map.js"></script>
  <script src="userfront/js/main.js"></script>
    
  </body>
</html>