<!DOCTYPE html>
<html lang="en">
<head>

	<!-- PAGE TITLE HERE -->
	<title>Job Board - Job Portal HTML Template + RTL and Dark layout</title>
	
	<!-- All Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="author" content="DexignZone">
	<meta name="robots" content="">
	<meta name="keywords" content="applicant, candidate, career, companies, employment, freelancer, job board, job directory, Job guru, job listing, job posting, job seeker, recruiting, resume, resume listing">
	<meta name="description" content="JobBoard: is a flexible and smooth theme to make it simple as possible to create a professional job portal website. It covers all the features that are necessary for job board like searching option, login and register.">
	<meta property="og:title" content="Job Board - Job Portal HTML Template + RTL and Dark layout">
	<meta property="og:description" content="JobBoard: is a flexible and smooth theme to make it simple as possible to create a professional job portal website. It covers all the features that are necessary for job board like searching option, login and register.">
	<meta property="og:image" content="social-image.png">
	<meta name="format-detection" content="telephone=no">

	<!-- MOBILE SPECIFIC -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- FAVICONS ICON -->
	<link rel="icon" href="{{ asset('frontend/images/favicon.ico') }}" type="image/x-icon">

	<!--[if lt IE 9]>
	<script src="{{ asset('frontend/js/html5shiv.min.js') }}"></script>
	<script src="{{ asset('frontend/js/respond.min.js') }}"></script>
	<![endif]-->
	
	<!-- STYLESHEETS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/plugins.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/style.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/templete.css') }}">
	<link class="skin" rel="stylesheet" type="text/css" href="{{ asset('frontend/css/skin/skin-1.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/dark-layout.css') }}">
	
	
	<!-- Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&amp;family=Montserrat:wght@100;200;300;400;500;600;700;800;900&amp;family=Roboto:wght@100;300;400;500;700;900&amp;family=Rubik:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
	
</head>
<body id="bg">
<div class="page-wraper">
<div id="loading-area"></div>
	<!-- header -->
    <header class="site-header mo-left header fullwidth">
    @include('frontend.layouts.nav')
</header>
    <!-- header END -->
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dez-bnr-inr overlay-black-middle" style="background-image:url({{ asset('frontend/images/banner/bnr2.jpg') }});">
            <div class="container">
                <div class="dez-bnr-inr-entry">
                    <h1 class="text-white">Portfolio Masonry</h1>
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="{{ url('/') }}">Home</a></li>
							<li>Portfolio Masonry</li>
						</ul>
					</div>
					<!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- contact area -->
        <div class="content-block">
			<div class="section-full content-inner-2 portfolio-box">
				<div class="container">
					<div class="section-head text-black text-center m-b20">
						<h2 class="m-b10">Our Portfolio</h2>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</p>
					</div>
					<div class="site-filters style1 clearfix center">
						<ul class="filters" data-bs-toggle="buttons">
							<li data-filter="" class="btn active"><input type="radio"><a href="#"><span>All</span></a></li>
							<li data-filter="web" class="btn"><input type="radio"><a href="#"><span>Designing</span></a></li>
							<li data-filter="advertising" class="btn"><input type="radio"><a href="#"><span>Construct</span></a></li>
							<li data-filter="branding" class="btn"><input type="radio"><a href="#"><span>Finance</span></a></li>
							<li data-filter="design" class="btn"><input type="radio"><a href="#"><span>Development</span></a></li>
							<li data-filter="photography" class="btn"><input type="radio"><a href="#"><span>Archeology</span></a></li>
						</ul>
					</div>
					<div class="clearfix">
						<ul id="masonry" class="dez-gallery-listing gallery-grid-4 gallery mfp-gallery sp10">
							<li class="card-container col-lg-4 col-md-3 col-sm-6 col-6 web design">
								<div class="dez-box dez-gallery-box">
									<div class="dez-media dez-img-overlay1 dez-img-effect">
										<a href="javascript:void(0);"> <img src="{{ asset('frontend/images/gallery/masonry/img1.jpg') }}"  alt=""> </a>
										<div class="overlay-bx">
											<div class="overlay-icon"> 
												<a class="mfp-link" title="Image Title Come Here" href="{{ asset('frontend/images/gallery/masonry/img1.jpg') }}"> <i class="ti-fullscreen"></i> </a>	
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="card-container col-lg-4 col-md-3 col-sm-6 col-6 advertising branding photography">
								<div class="dez-box dez-gallery-box">
									<div class="dez-media dez-img-overlay1 dez-img-effect dez-img-effect "> 
									<a href="javascript:void(0);"> <img src="{{ asset('frontend/images/gallery/masonry/img2.jpg') }}"  alt=""> </a>
										<div class="overlay-bx">
											<div class="overlay-icon"> 
												<a class="mfp-link" title="Image Title Come Here" href="{{ asset('frontend/images/gallery/masonry/img2.jpg') }}"> <i class="ti-fullscreen"></i> </a>	
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="card-container col-lg-4 col-md-3 col-sm-6 col-6 branding design photography">
								<div class="dez-box dez-gallery-box">
									<div class="dez-media dez-img-overlay1 dez-img-effect"> 
									<a href="javascript:void(0);"> <img src="{{ asset('frontend/images/gallery/masonry/img3.jpg') }}"  alt=""> </a>
										<div class="overlay-bx">
											<div class="overlay-icon"> 
												<a class="mfp-link" title="Image Title Come Here" href="{{ asset('frontend/images/gallery/masonry/img3.jpg') }}"> <i class="ti-fullscreen"></i> </a>	
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="card-container col-lg-4 col-md-3 col-sm-6 col-6 web design">
								<div class="dez-box dez-gallery-box">
									<div class="dez-media dez-img-overlay1 dez-img-effect"> 
									<a href="javascript:void(0);"> <img src="{{ asset('frontend/images/gallery/masonry/img4.jpg') }}"  alt=""> </a>
										<div class="overlay-bx">
											<div class="overlay-icon"> 
												<a class="mfp-link" title="Image Title Come Here" href="{{ asset('frontend/images/gallery/masonry/img4.jpg') }}"> <i class="ti-fullscreen"></i> </a>	
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="card-container col-lg-4 col-md-3 col-sm-6 col-6 web branding">
								<div class="dez-box dez-gallery-box">
									<div class="dez-media dez-img-overlay1 dez-img-effect">
									<a href="javascript:void(0);"> <img src="{{ asset('frontend/images/gallery/masonry/img5.jpg') }}"  alt=""> </a>
										<div class="overlay-bx">
											<div class="overlay-icon"> 
												<a class="mfp-link" title="Image Title Come Here" href="{{ asset('frontend/images/gallery/masonry/img5.jpg') }}"> <i class="ti-fullscreen"></i> </a>	
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="card-container col-lg-4 col-md-3 col-sm-6 col-6 advertising design photography">
								<div class="dez-box dez-gallery-box">
									<div class="dez-media dez-img-overlay1 dez-img-effect ">
									<a href="javascript:void(0);"> <img src="{{ asset('frontend/images/gallery/masonry/img6.jpg') }}"  alt=""> </a>
										<div class="overlay-bx">
											<div class="overlay-icon"> 
												<a class="mfp-link" title="Image Title Come Here" href="{{ asset('frontend/images/gallery/masonry/img6.jpg') }}"> <i class="ti-fullscreen"></i> </a>	
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="card-container col-lg-4 col-md-3 col-sm-6 col-6 web branding">
								<div class="dez-box dez-gallery-box">
									<div class="dez-media dez-img-overlay1 dez-img-effect">
										<a href="javascript:void(0);"> <img src="{{ asset('frontend/images/gallery/masonry/img3.jpg') }}"  alt=""> </a>
										<div class="overlay-bx">
											<div class="overlay-icon"> 
												<a class="mfp-link" title="Image Title Come Here" href="{{ asset('frontend/images/gallery/masonry/img3.jpg') }}"> <i class="ti-fullscreen"></i> </a>	
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="card-container col-lg-4 col-md-3 col-sm-6 col-6 advertising design photography">
								<div class="dez-box dez-gallery-box">
									<div class="dez-media dez-img-overlay1 dez-img-effect dez-img-effect "> 
									<a href="javascript:void(0);"> <img src="{{ asset('frontend/images/gallery/masonry/img2.jpg') }}"  alt=""> </a>
										<div class="overlay-bx">
											<div class="overlay-icon"> 
												<a class="mfp-link" title="Image Title Come Here" href="{{ asset('frontend/images/gallery/masonry/img2.jpg') }}"> <i class="ti-fullscreen"></i> </a>	
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="card-container col-lg-4 col-md-3 col-sm-6 col-6 web photography">
								<div class="dez-box dez-gallery-box">
									<div class="dez-media dez-img-overlay1 dez-img-effect"> 
									<a href="javascript:void(0);"> <img src="{{ asset('frontend/images/gallery/masonry/img1.jpg') }}"  alt=""> </a>
										<div class="overlay-bx">
											<div class="overlay-icon"> 
												<a class="mfp-link" title="Image Title Come Here" href="{{ asset('frontend/images/gallery/masonry/img1.jpg') }}"> <i class="ti-fullscreen"></i> </a>	
											</div>
										</div>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
        </div>
		<!-- contact area END -->
    </div>
    <!-- Content END-->
	<!-- Modal Box -->
	<div class="modal fade lead-form-modal" id="car-details" tabindex="-1" role="dialog" >
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<div class="modal-body row m-a0 clearfix">
					<div class="col-lg-6 col-md-6 d-flex p-a0" style="background-image: url({{ asset('frontend/images/background/bg3.jpg') }});  background-position:center; background-size:cover;">
						
					</div>
					<div class="col-lg-6 col-md-6 p-a0">
						<div class="lead-form browse-job text-left">
							<form>
								<h3 class="m-t0">Personal Details</h3>
								<div class="form-group">
									<input value="" class="form-control" placeholder="Name"/>
								</div>	
								<div class="form-group">
									<input value="" class="form-control" placeholder="Mobile Number"/>
								</div>
								<div class="clearfix">
									<button type="button" class="btn-primary site-button btn-block">Submit </button>
								</div>
							</form>
						</div>
					</div>
				</div>	
			</div>
		</div>
	</div>
	<!-- Modal Box End -->
	<!-- Footer -->
    <footer class="site-footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
					<div class="col-xl-5 col-lg-4 col-md-12 col-sm-12">
                        <div class="widget">
							<div class="logo-white">
								<img class="logo m-b15" src="{{ asset('frontend/images/logo-white.png') }}" width="180" alt=""/>
							</div>
							<p class="text-capitalize m-b20">Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry's standard dummy text ever since the.</p>
                            <div class="subscribe-form m-b20">
								<form class="dzSubscribe" action="https://job-board.dexignzone.com/xhtml/script/mailchamp.php" method="post">
									<div class="dzSubscribeMsg"></div>
									<div class="input-group">
										<input name="dzEmail" required="required"  class="form-control" placeholder="Your Email Address" type="email">
										<span class="input-group-btn">
											<button name="submit" value="Submit" type="submit" class="site-button radius-xl">Subscribe</button>
										</span> 
									</div>
								</form>
							</div>
							<ul class="list-inline m-a0">
								<li><a target="_blank" href="https://www.facebook.com/" class="site-button white facebook circle "><i class="fab fa-facebook-f"></i></a></li>
								<li><a target="_blank" href="https://www.google.com/" class="site-button white google-plus circle "><i class="fab fa-google-plus-g"></i></a></li>
								<li><a target="_blank" href="https://www.linkedin.com/" class="site-button white linkedin circle "><i class="fab fa-linkedin-in"></i></a></li>
								<li><a target="_blank" href="https://www.instagram.com/" class="site-button white instagram circle "><i class="fab fa-instagram"></i></a></li>
								<li><a target="_blank" href="https://twitter.com/" class="site-button white twitter circle "><i class="fab fa-twitter"></i></a></li>
							</ul>
                        </div>
                    </div>
					<div class="col-xl-5 col-lg-5 col-md-8 col-sm-8 col-12">
                        <div class="widget border-0">
                            <h5 class="m-b30 text-white">Frequently Asked Questions</h5>
                            <ul class="list-2 list-line">
                                <li><a href="javascript:void(0);">Privacy & Seurty</a></li>
                                <li><a href="javascript:void(0);">Terms of Serice</a></li>
                                <li><a href="javascript:void(0);">Communications</a></li>
                                <li><a href="javascript:void(0);">Referral Terms</a></li>
                                <li><a href="javascript:void(0);">Lending Licnses</a></li>
								<li><a href="javascript:void(0);">Support</a></li>
                                <li><a href="javascript:void(0);">How It Works</a></li>
                                <li><a href="javascript:void(0);">For Employers</a></li>
                                <li><a href="javascript:void(0);">Underwriting</a></li>
                                <li><a href="javascript:void(0);">Contact Us</a></li>
								<li><a href="javascript:void(0);">Lending Licnses</a></li>
								<li><a href="javascript:void(0);">Support</a></li>
                            </ul>
                        </div>
                    </div>
					<div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-12">
                        <div class="widget border-0">
                            <h5 class="m-b30 text-white">Find Jobs</h5>
                            <ul class="list-2 w10 list-line">
                                <li><a href="javascript:void(0);">US Jobs</a></li>
                                <li><a href="javascript:void(0);">Canada Jobs</a></li>
                                <li><a href="javascript:void(0);">UK Jobs</a></li>
                                <li><a href="javascript:void(0);">Emplois en Fnce</a></li>
                                <li><a href="javascript:void(0);">Jobs in Deuts</a></li>
								<li><a href="javascript:void(0);">Vacatures China</a></li>
                            </ul>
                        </div>
                    </div>
				</div>
            </div>
        </div>
        <!-- footer bottom part -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
						<span> © Copyright  2023 by <i class="fa fa-heart m-lr5 text-red heart"></i>
						<a href="https://dexignzone.com/" target="_blank">DexignZone </a> All rights reserved.</span> 
					</div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer END -->
    <button class="scroltop fa fa-chevron-up" ></button>
</div>
<!-- JAVASCRIPT FILES ========================================= -->
<script src="{{ asset('frontend/js/jquery.min.js') }}"></script><!-- JQUERY.MIN JS -->
<script src="{{ asset('frontend/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script><!-- BOOTSTRAP.MIN JS -->
<script src="{{ asset('frontend/plugins/bootstrap-select/bootstrap-select.min.js') }}"></script><!-- FORM JS -->
<script src="{{ asset('frontend/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js') }}"></script><!-- FORM JS -->
<script src="{{ asset('frontend/plugins/magnific-popup/magnific-popup.js') }}"></script><!-- MAGNIFIC POPUP JS -->
<script src="{{ asset('frontend/plugins/counter/waypoints-min.js') }}"></script><!-- WAYPOINTS JS -->
<script src="{{ asset('frontend/plugins/counter/counterup.min.js') }}"></script><!-- COUNTERUP JS -->
<script src="{{ asset('frontend/plugins/imagesloaded/imagesloaded.js') }}"></script><!-- IMAGESLOADED -->
<script src="{{ asset('frontend/plugins/masonry/masonry-3.1.4.js') }}"></script><!-- MASONRY -->
<script src="{{ asset('frontend/plugins/masonry/masonry.filter.js') }}"></script><!-- MASONRY -->
<script src="{{ asset('frontend/plugins/owl-carousel/owl.carousel.js') }}"></script><!-- OWL SLIDER -->
<script src="{{ asset('frontend/plugins/scroll/scrollbar.min.js') }}"></script><!-- OWL SLIDER -->
<script src="{{ asset('frontend/js/custom.js') }}"></script><!-- CUSTOM FUCTIONS  -->
<script src="{{ asset('frontend/js/dz.carousel.js') }}"></script><!-- SORTCODE FUCTIONS  -->
<script src="{{ asset('frontend/js/dz.ajax.js') }}"></script><!-- CONTACT JS  -->
<script src="{{ asset('frontend/plugins/switcher/switcher.js') }}"></script><!-- SWITCHER -->
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v833ccba57c9e4d2798f2e76cebdd09a11778172276447" integrity="sha512-57MDmcccJXYtNnH+ZiBwzC4jb2rvgVCEokYN+L/nLlmO8rfYT/gIpW2A569iJ/3b+0UEasghjuZH/ma3wIs/EQ==" data-cf-beacon='{"version":"2024.11.0","token":"0931814f84b94398b852d3ac91b5f293","r":1,"server_timing":{"name":{"cfCacheStatus":true,"cfEdge":true,"cfExtPri":true,"cfL4":true,"cfOrigin":true,"cfSpeedBrain":true},"location_startswith":null}}' crossorigin="anonymous"></script>
</body>
</html>



