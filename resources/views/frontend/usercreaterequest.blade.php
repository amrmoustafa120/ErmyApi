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

  <script type="text/javascript">
    function EnableDisableTextBox() {
        var chkYes = document.getElementById("chkYes");
        var txtPassportNumber = document.getElementById("txtPassportNumber");
        txtPassportNumber.disabled = chkYes.checked ? false : true;
        if (!txtPassportNumber.disabled) {
            txtPassportNumber.focus();
        }
    }
    </script>
    
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

  

    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-5">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="mb-3">How It Workes !</h2>
          </div>
        </div>
    		<div class="row">
    			<div class="col-lg-6 py-5 d-flex align-items-center">
    				<img src="userfront/images/undraw_referral_4ki4.svg" class="img-fluid" alt="">
    			</div>
    			<div class="col-lg-6 py-5">
    				<div class="row">
    					<div class="col-md-12 ftco-animate d-flex">
    						{{-- <div class="media block-6 services border d-flex p-3 mb-3"> --}}
		            	{{-- <div class="icon icon-2 d-flex align-items-center justify-content-center">
		            		<span class="flaticon-cloud-computing"></span>
		            	</div>
		              <div class="media-body pl-4">
		                <h3 class="heading">Resposive Design</h3>
		                <p class="mb-0">Even the all-powerful Pointing has no control about the blind texts</p>
		              </div> --}}
		            </div>
                <div class"container">
                          @if ($errors->any())
                      <div class="alert alert-danger">
                          <ul>
                              @foreach ($errors->all() as $error)
                                  <li>{{ $error }}</li>
                              @endforeach
                          </ul>
                      </div><br />
                  @endif
                </div>
    					{{-- </div> --}}
    					<div class="col-md-12 ftco-animate d-flex">
    						{{-- <div class="media block-6 services border d-flex p-3 mb-3"> --}}
		            	{{-- <div class="icon icon-2 d-flex align-items-center justify-content-center">
		            		<span class="flaticon-cloud"></span>
		            	</div>
		              <div class="media-body pl-4">
		                <h3 class="heading">Andriod Apps Development</h3>
		                <p class="mb-0">Even the all-powerful Pointing has no control about the blind texts</p>
		              </div> --}}
		            </div>
    					{{-- </div> --}}
    					<div class="col-md-12 ftco-animate d-flex">

                        
    						{{-- <div class="media block-6 services border d-flex p-3 mb-3"> --}}
		            	{{-- <div class="icon icon-2 d-flex align-items-center justify-content-center">
		            		<span class="flaticon-server"></span>
		            	</div>
		              <div class="media-body pl-4">
		                <h3 class="heading">iOs Apps Development</h3>
		                <p class="mb-0">Even the all-powerful Pointing has no control about the blind texts</p>
		              </div> --}}
		            </div>
    					</div>
    					<div class="col-md-12 ftco-animate d-flex">
                        
    						{{-- <div class="media block-6 services border d-flex p-3 mb-3"> --}}
                            <a href='/amr'><h3 class="heading"></h3></a>
		            	{{-- <div class="icon icon-2 d-flex align-items-center justify-content-center"> --}}
		            		{{-- <a href='/amr'><span class="flaticon-database"></span></a> --}}
		            	</div>
		              <div class="media-body pl-4">
		               
                        <h3 class="heading">Request Now</h3>

                        <form method="post" action="{{url('/userstore')}}">
                        <div class="form-group">
                            <input type="hidden" value="{{csrf_token()}}" name="_token" />
                            
                        </div>
                        
                        <span>The registered address is ( {{ Auth::user()->address }}), same address ? </span>
                        <br>
                        <label for="chkYes">
                            <input type="radio" id="chkYes" name="address" value="new" onclick="EnableDisableTextBox()" />
                            No, new address
                        </label>
                        <br>
                        <label for="chkNo">
                            <input type="radio" id="chkNo" name="address" value="old" onclick="EnableDisableTextBox()" />
                            yse, same address
                        </label>
                        <br>
                         New Address:
                        <input type="text" id="txtPassportNumber" name="address" class="form-control" disabled="disabled" />
                        <br>
                        <button type="submit" class="btn btn-success">Confirm Request</button>
                        </form>
                        <br>
		                <p class="mb-0">Request a worker NOW and get paid for your garbage !</p>
		                <p class="mb-0">it takes miuntes to keep our country clean. </p>
		              </div>
		            </div>
    					{{-- </div>
    					<div class="col-md-12 ftco-animate d-flex">
    						<div class="media block-6 services border d-flex p-3 mb-3">
		            	<div class="icon icon-2 d-flex align-items-center justify-content-center">
		            		<span class="flaticon-database"></span>
		            	</div>
		              <div class="media-body pl-4">
		                <h3 class="heading">Ermy</h3>
		                <p class="mb-0">get paid for your garbage !</p>
		              </div>
		            </div> --}}
    					</div>
    				</div>
          </div>
    		</div>
    	</div>
    </section>

    




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