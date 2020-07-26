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

    <div class="hero-wrap js-fullheight">
      <div class="overlay"></div>
      <div class="container-fluid px-0">
      	<div class="row d-md-flex no-gutters slider-text align-items-center js-fullheight justify-content-start">
	      	<img class="one-third js-fullheight align-self-end order-md-first img-fluid" src="userfront/images/undraw_co-working_825n.svg" alt="">
	        <div class="one-forth d-flex align-items-center ftco-animate js-fullheight">
	        	<div class="text mt-5">
	        		<span class="subheading">Ermy</span>
	            <h1 class="mb-3"><span>Get</span> <span>Paied,</span> <span>For Your Garbage</span></h1>
	            <p>The main Idea in This software is to help people to get rid of the garbage.</p>
	            <p><a href="/register" class="btn btn-secondary px-4 py-3">Create account</a></p>
	          </div>
	        </div>
	    	</div>
      </div>
    </div>

    {{-- <section class="ftco-section ftco-partner">
    	<div class="container">
    		<div class="row">
    			<div class="col-sm ftco-animate">
    				<a href="#" class="partner"><img src="userfront/images/partner-1.png" class="img-fluid" alt="Colorlib Template"></a>
    			</div>
    			<div class="col-sm ftco-animate">
    				<a href="#" class="partner"><img src="userfront/images/partner-2.png" class="img-fluid" alt="Colorlib Template"></a>
    			</div>
    			<div class="col-sm ftco-animate">
    				<a href="#" class="partner"><img src="userfront/images/partner-3.png" class="img-fluid" alt="Colorlib Template"></a>
    			</div>
    			<div class="col-sm ftco-animate">
    				<a href="#" class="partner"><img src="userfront/images/partner-4.png" class="img-fluid" alt="Colorlib Template"></a>
    			</div>
    			<div class="col-sm ftco-animate">
    				<a href="#" class="partner"><img src="userfront/images/partner-5.png" class="img-fluid" alt="Colorlib Template"></a>
    			</div>
    		</div>
    	</div>
    </section> --}}
    
    
  
    <section class="ftco-section services-section bg-light">
      <div class="container">
      	<div class="row justify-content-center mb-5">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="mb-3">Services</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-flex">
            	<div class="icon d-flex align-items-center justify-content-center">
            		<span class="flaticon-cloud"></span>
            	</div>
              <div class="media-body pl-4">
                <h3 class="heading">individuals</h3>
                <p class="mb-0">Now you can git rid of your garbage using our application, join us now !</p>
              </div>
            </div>      
          </div>
          <div class="col-lg-4 col-md-6 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-flex">
            	<div class="icon d-flex align-items-center justify-content-center">
            		<span class="flaticon-server"></span>
            	</div>
              <div class="media-body pl-4">
                <h3 class="heading">statups</h3>
                <p class="mb-0">Now you can git rid of your garbage using our application, join us now !</p>
              </div>
            </div>    
          </div>
          <div class="col-lg-4 col-md-6 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-flex">
            	<div class="icon d-flex align-items-center justify-content-center">
            		<span class="flaticon-customer-service"></span>
            	</div>
              <div class="media-body pl-4">
                <h3 class="heading">factories</h3>
                <p>Now you can git rid of your garbage using our application, join us now !</p>
              </div>
            </div>      
          </div>
					<div class="col-lg-4 col-md-6 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-flex">
            	<div class="icon d-flex align-items-center justify-content-center">
            		<span class="flaticon-life-insurance"></span>
            	</div>
              <div class="media-body pl-4">
                <h3 class="heading">corporates</h3>
                <p>Now you can git rid of your garbage using our application, join us now !</p>
              </div>
            </div>      
          </div>
          <div class="col-lg-4 col-md-6 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-flex">
            	<div class="icon d-flex align-items-center justify-content-center">
            		<span class="flaticon-cloud-computing"></span>
            	</div>
              <div class="media-body pl-4">
                <h3 class="heading">resturants</h3>
                <p>Now you can git rid of your garbage using our application, join us now !</p>
              </div>
            </div>    
          </div>
          <div class="col-lg-4 col-md-6 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-flex">
            	<div class="icon d-flex align-items-center justify-content-center">
            		<span class="flaticon-settings"></span>
            	</div>
              <div class="media-body pl-4">
                <h3 class="heading">schools</h3>
                <p>Now you can git rid of your garbage using our application, join us now !</p>
              </div>
            </div>      
          </div>
        </div>
      </div>
    </section>

{{-- 
    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-5">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="mb-3">What Our Software Can Do For You</h2>
          </div>
        </div>
    		<div class="row">
    			<div class="col-lg-6 py-5 d-flex align-items-center">
    				<img src="userfront/images/undraw_referral_4ki4.svg" class="img-fluid" alt="">
    			</div>
    			<div class="col-lg-6 py-5">
    				<div class="row">
    					<div class="col-md-12 ftco-animate d-flex">
    						<div class="media block-6 services border d-flex p-3 mb-3">
		            	<div class="icon icon-2 d-flex align-items-center justify-content-center">
		            		<span class="flaticon-cloud-computing"></span>
		            	</div>
		              <div class="media-body pl-4">
		                <h3 class="heading">Resposive Design</h3>
		                <p class="mb-0">Even the all-powerful Pointing has no control about the blind texts</p>
		              </div>
		            </div>
    					</div>
    					<div class="col-md-12 ftco-animate d-flex">
    						<div class="media block-6 services border d-flex p-3 mb-3">
		            	<div class="icon icon-2 d-flex align-items-center justify-content-center">
		            		<span class="flaticon-cloud"></span>
		            	</div>
		              <div class="media-body pl-4">
		                <h3 class="heading">Andriod Apps Development</h3>
		                <p class="mb-0">Even the all-powerful Pointing has no control about the blind texts</p>
		              </div>
		            </div>
    					</div>
    					<div class="col-md-12 ftco-animate d-flex">
    						<div class="media block-6 services border d-flex p-3 mb-3">
		            	<div class="icon icon-2 d-flex align-items-center justify-content-center">
		            		<span class="flaticon-server"></span>
		            	</div>
		              <div class="media-body pl-4">
		                <h3 class="heading">iOs Apps Development</h3>
		                <p class="mb-0">Even the all-powerful Pointing has no control about the blind texts</p>
		              </div>
		            </div>
    					</div>
    					<div class="col-md-12 ftco-animate d-flex">
    						<div class="media block-6 services border d-flex p-3 mb-3">
		            	<div class="icon icon-2 d-flex align-items-center justify-content-center">
		            		<span class="flaticon-database"></span>
		            	</div>
		              <div class="media-body pl-4">
		                <h3 class="heading">UX/UI Design</h3>
		                <p class="mb-0">Even the all-powerful Pointing has no control about the blind texts</p>
		              </div>
		            </div>
    					</div>
    					<div class="col-md-12 ftco-animate d-flex">
    						<div class="media block-6 services border d-flex p-3 mb-3">
		            	<div class="icon icon-2 d-flex align-items-center justify-content-center">
		            		<span class="flaticon-database"></span>
		            	</div>
		              <div class="media-body pl-4">
		                <h3 class="heading">Print Ready Design</h3>
		                <p class="mb-0">Even the all-powerful Pointing has no control about the blind texts</p>
		              </div>
		            </div>
    					</div>
    				</div>
          </div>
    		</div>
    	</div>
    </section> --}}

    <section class="ftco-section ftco-counter img" id="section-counter">
    	<div class="container pb-md-5">
    		<div class="row justify-content-center mb-5">
          <div class="col-md-8 text-center heading-section heading-section-white ftco-animate">
          	<h2 class="mb-3">We Always Try To Understand Users Expectation</h2>
          </div>
        </div>
    		<div class="row justify-content-center">
    			<div class="col-md-10">
		    		<div class="row">
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="12000">0</strong>
		                <span>Download</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="100">0</strong>
		                <span>Rate</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="4050">0</strong>
		                <span>active users</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="9000">0</strong>
		                <span>Satisfied Customers</span>
		              </div>
		            </div>
		          </div>
		        </div>
	        </div>
        </div>
    	</div>
    </section>

    <section class="ftco-section ftco-no-pt ftco-no-pb bg-light">
    	<div class="container">
    		<div class="row justify-content-center">
    			<div class="col-lg-10">
    				<div class="intro">
    					<div class="row">
    						<div class="col-md-8">
    							<h3>Have any question about us?</h3>
    							</div>
    						<div class="col-md-4 d-flex align-items-center justify-content-center">
    							<a href="#" class="btn btn-tertiary px-4 py-3">Get in Touch</a>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>

    <section class="ftco-section ftco-no-pb bg-light ftco-faqs">
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-6">
	    				<div class="img img-faqs mb-4 mb-sm-0" style="background-image:url(userfront/images/about-2.jpg);">
	    				</div>
    			</div>
    			<div class="col-lg-6 pl-lg-5">
    				<div class="heading-section mb-5 mt-5 mt-lg-0">
    					<!-- <span class="subheading">FAQs</span> -->
	            <h2 class="mb-3">Frequently Asks Questions</h2>
	            </div>
    				<div id="accordion" class="myaccordion w-100" aria-multiselectable="true">
						  <div class="card">
						    <div class="card-header p-0" id="headingOne">
						      <h2 class="mb-0">
						        <button href="#collapseOne" class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link" data-parent="#accordion" data-toggle="collapse" aria-expanded="true" aria-controls="collapseOne">
						        	<p class="mb-0">How to Make an Account?</p>
						          <i class="fa" aria-hidden="true"></i>
						        </button>
						      </h2>
						    </div>
						    <div class="collapse show" id="collapseOne" role="tabpanel" aria-labelledby="headingOne">
						      <div class="card-body py-3 px-0">
						      	<ol>
						      		<li>Open app store or google store</li>
						      		<li>Search for "ermy"</li>
						      		<li>Download the app</li>
						      		<li>Register a new account</li>
						      		<li>Make your first request</li>
						      	</ol>
						      </div>
						    </div>
						  </div>

						  <div class="card">
						    <div class="card-header p-0" id="headingTwo" role="tab">
						      <h2 class="mb-0">
						        <button href="#collapseTwo" class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link" data-parent="#accordion" data-toggle="collapse" aria-expanded="false" aria-controls="collapseTwo">
						        	<p class="mb-0">How to manage your Dashboard?</p>
						          <i class="fa" aria-hidden="true"></i>
						        </button>
						      </h2>
						    </div>
						    <div class="collapse" id="collapseTwo" role="tabpanel" aria-labelledby="headingTwo">
						      <div class="card-body py-3 px-0">
						      	<ol>
						      		<li>Far far away, behind the word mountains</li>
						      		<li>Consonantia, there live the blind texts</li>
						      		<li>When she reached the first hills of the Italic Mountains</li>
						      		<li>Bookmarksgrove, the headline of Alphabet Village</li>
						      		<li>Separated they live in Bookmarksgrove right</li>
						      	</ol>
						      </div>
						    </div>
						  </div>

						  <div class="card">
						    <div class="card-header p-0" id="headingThree" role="tab">
						      <h2 class="mb-0">
						        <button href="#collapseThree" class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link" data-parent="#accordion" data-toggle="collapse" aria-expanded="false" aria-controls="collapseThree">
						        	<p class="mb-0">How to grow your investments funds?</p>
						          <i class="fa" aria-hidden="true"></i>
						        </button>
						      </h2>
						    </div>
						    <div class="collapse" id="collapseThree" role="tabpanel" aria-labelledby="headingTwo">
						      <div class="card-body py-3 px-0">
						      	<ol>
						      		<li>Far far away, behind the word mountains</li>
						      		<li>Consonantia, there live the blind texts</li>
						      		<li>When she reached the first hills of the Italic Mountains</li>
						      		<li>Bookmarksgrove, the headline of Alphabet Village</li>
						      		<li>Separated they live in Bookmarksgrove right</li>
						      	</ol>
						      </div>
						    </div>
						  </div>

						  <div class="card">
						    <div class="card-header p-0" id="headingFour" role="tab">
						      <h2 class="mb-0">
						        <button href="#collapseFour" class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link" data-parent="#accordion" data-toggle="collapse" aria-expanded="false" aria-controls="collapseFour">
						        	<p class="mb-0">What are those requirements for businesses?</p>
						          <i class="fa" aria-hidden="true"></i>
						        </button>
						      </h2>
						    </div>
						    <div class="collapse" id="collapseFour" role="tabpanel" aria-labelledby="headingTwo">
						      <div class="card-body py-3 px-0">
						      	<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
						      </div>
						    </div>
						  </div>
						</div>
	        </div>
        </div>
    	</div>
    </section>

    <section class="ftco-section bg-light">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2 class="mb-4">Our Best Pricing</h2>
          </div>
        </div>
    		<div class="row d-flex">
	        <div class="col-lg-3 col-md-6 ftco-animate">
	          <div class="block-7">
	            <div class="text-center">
		            <h2 class="heading">Basic Plan</h2>
		            <span class="price"><sup>$</sup> <span class="number">0<small class="per">/mo</small></span>
		            <span class="excerpt d-block">100% free. Forever</span>
		            <h3 class="heading-2 mb-3">Enjoy All The Features</h3>
		            
		            <ul class="pricing-text mb-4">
		              <li><strong>150 GB</strong> Bandwidth</li>
		              <li><strong>100 GB</strong> Storage</li>
		              <li><strong>$1.00 / GB</strong> Overages</li>
		              <li>All features</li>
		            </ul>
		            <a href="#" class="btn btn-tertiary d-block px-3 py-3 mb-4">Choose Plan</a>
	            </div>
	          </div>
	        </div>
	        <div class="col-lg-3 col-md-6 ftco-animate">
	          <div class="block-7">
	            <div class="text-center">
		            <h2 class="heading">Advance Plan</h2>
		            <span class="price"><sup>$</sup> <span class="number">19<small class="per">/mo</small></span></span>
		            <span class="excerpt d-block">All features are included</span>
		            <h3 class="heading-2 mb-3">Enjoy All The Features</h3>
		            
		            <ul class="pricing-text mb-4">
		              <li><strong>450 GB</strong> Bandwidth</li>
		              <li><strong>400 GB</strong> Storage</li>
		              <li><strong>$2.00 / GB</strong> Overages</li>
		              <li>All features</li>
		            </ul>
		            <a href="#" class="btn btn-tertiary d-block px-3 py-3 mb-4">Choose Plan</a>
	            </div>
	          </div>
	        </div>
	        <div class="col-lg-3 col-md-6 ftco-animate">
	          <div class="block-7">
	            <div class="text-center">
		            <h2 class="heading">Expert Plan</h2>
		            <span class="price"><sup>$</sup> <span class="number">49<small class="per">/mo</small></span></span>
		            <span class="excerpt d-block">All features are included</span>
		            <h3 class="heading-2 mb-3">Enjoy All The Features</h3>
		            
		            <ul class="pricing-text mb-4">
		              <li><strong>250 GB</strong> Bandwidth</li>
		              <li><strong>200 GB</strong> Storage</li>
		              <li><strong>$5.00 / GB</strong> Overages</li>
		              <li>All features</li>
		            </ul>
		            <a href="#" class="btn btn-tertiary d-block px-3 py-3 mb-4">Choose Plan</a>
	            </div>
	          </div>
	        </div>
	        <div class="col-lg-3 col-md-6 ftco-animate">
	          <div class="block-7">
	            <div class="text-center">
		            <h2 class="heading">Pro Plan</h2>
		            <span class="price"><sup>$</sup> <span class="number">99<small class="per">/mo</small></span></span>
		            <span class="excerpt d-block">All features are included</span>
		            <h3 class="heading-2 mb-3">Enjoy All The Features</h3>
		            
		            <ul class="pricing-text mb-4">
		              <li><strong>450 GB</strong> Bandwidth</li>
		              <li><strong>400 GB</strong> Storage</li>
		              <li><strong>$20.00 / GB</strong> Overages</li>
		              <li>All features</li>
		            </ul>
			          <a href="#" class="btn btn-tertiary d-block px-3 py-3 mb-4">Choose Plan</a>
	            </div>
	          </div>
	        </div>
	      </div>
    	</div>
    </section>

    <section class="ftco-section testimony-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2 class="mb-4">What Users Saying</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
          </div>
        </div>
        {{-- <div class="row ftco-animate justify-content-center">
          <div class="col-md-10">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img mb-4" style="background-image: url(userfront/images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Mark Web</p>
                    <span class="position">Marketing Manager</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img mb-4" style="background-image: url(userfront/images/person_2.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Mark Web</p>
                    <span class="position">Interface Designer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img mb-4" style="background-image: url(userfront/images/person_3.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Mark Web</p>
                    <span class="position">UI Designer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img mb-4" style="background-image: url(userfront/images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Mark Web</p>
                    <span class="position">Web Developer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img mb-4" style="background-image: url(userfront/images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Mark Web</p>
                    <span class="position">System Analyst</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> --}}
    </section>

    {{-- <section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2>Recent Blog</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 ftco-animate">
            <div class="blog-entry">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_1.jpg');">
              </a>
              <div class="text d-flex py-4">
                <div class="meta mb-3">
                  <div><a href="#">May 17, 2020</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <div class="desc pl-3">
	                <h3 class="heading"><a href="#">Everthing You Need to Know About Cloud Template</a></h3>
	              </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="blog-entry" data-aos-delay="100">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_2.jpg');">
              </a>
              <div class="text d-flex py-4">
                <div class="meta mb-3">
                  <div><a href="#">May 17, 2020</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <div class="desc pl-3">
	                <h3 class="heading"><a href="#">Everthing You Need to Know About Cloud Template</a></h3>
	              </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="blog-entry" data-aos-delay="200">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_3.jpg');">
              </a>
              <div class="text d-flex py-4">
                <div class="meta mb-3">
                  <div><a href="#">May 17, 2020</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <div class="desc pl-3">
	                <h3 class="heading"><a href="#">Everthing You Need to Know About Cloud Template</a></h3>
	              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> --}}


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