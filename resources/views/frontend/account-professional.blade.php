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
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/plugins/tagcomplete/tagcomplete.css') }}">
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
    <div class="page-content">
		
		<!-- Create Account -->
		<div class="section-full content-inner-2 bg-white browse-job">
			<div class="container">
				<ul class="nav nav-tabs nav-tabs-1" id="myTab" role="tablist">
					<li class="nav-item">
						<a class="nav-link site-button active" id="tabPersonal" data-bs-toggle="tab" href="#personal" role="tab" aria-controls="personal" aria-selected="true">Personal</a>
					</li>
					<li class="nav-item">
						<a class="nav-link site-button" id="tabEmployment" data-bs-toggle="tab" href="#employment" role="tab" aria-controls="employment" aria-selected="false">Employment</a>
					</li>
					<li class="nav-item">
						<a class="nav-link site-button" id="tabEducation" data-bs-toggle="tab" href="#education" role="tab" aria-controls="education" aria-selected="false">Education</a>
					</li>
				</ul>
				<div class="tab-content" id="myTabContent">
					<div class="tab-pane fade show active" id="personal" role="tabpanel" aria-labelledby="tabPersonal">
						<div class="job-bx">
							<div class="row">
								<div class="col-lg-8">
									<form class="job-alert-bx">
										<div class="row">
											<div class="col-lg-12">
												<div class="form-group">
													<label>Name</label>
													<input class="form-control" placeholder="Enter Full Name" type="text">
												</div>
											</div>
											<div class="col-lg-12">
												<div class="form-group">
													<label>Email ID*</label>
													<input class="form-control" placeholder="Enter Your Email" type="text">
												</div>
											</div>
											<div class="col-lg-12">
												<div class="form-group">
													<label>Create Password</label>
													<input class="form-control" placeholder="Minimum 6 characters" type="text">
												</div>
											</div>
											<div class="col-lg-12">
												<div class="form-group">
													<label>Mobile number</label>
													<input class="form-control" placeholder="+91 123 456 7890" type="text">
												</div>
											</div>
											<div class="col-lg-12">
												<div class="form-group">
													<label>Current City</label>
													<input class="form-control" placeholder="Tell us about your current city" type="text">
												</div>
											</div>
											<div class="col-lg-12">
												<div class="form-group">
													<label>Upload Resume</label>
													<div class="custom-file">
														<p class="m-a0">
															<i class="fa fa-upload"></i>
															Upload File
														</p>
														<input type="file" class="site-button form-control" id="customFile">
													</div>
													<small>If you do not have a resume document, you may write your brief professional profile <a class="site-button-link" href="javascript:void(0);">here</a>.</small>
												</div>
											</div>
											<div class="col-lg-12">
												<div class="form-group">
													<div class="form-check">
														<input type="checkbox" class="form-check-input" id="job-alert-check" name="job-alert-check">
														<label class="form-check-label" for="job-alert-check">I agree to the Terms and Conditions and Privacy Policy</label>
													</div>
												</div>
											</div>
											<div class="col-lg-12 text-center">
												<button class="site-button">Register Now</button>
											</div>
										</div>
									</form>
								</div>
								<div class="col-lg-4 bg-gray">
									<div class="p-a25">
										<h6>Why should you create a job alert</h6>
										<ul class="list-check primary">
											<li>Get relevant jobs directly in your inbox</li>
											<li>Stay updated with latest opportunities</li>
											<li>Be the first one to apply</li>
											<li>Create up to 5 personalized job alerts</li>
										</ul>
										<div class="dez-divider bg-gray-dark"></div>
										<h6 class="font-14">Why <a href="https://job-board.dexignzone.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="d2bbbcb4bd92b7aab3bfa2beb7fcb1bdbf">[email&#160;protected]</a></h6>
										<p class="m-b10"><strong class="text-black m-r10">800,000+ </strong> Jobs</p>
										<p class="m-b10"><strong class="text-black m-r10">100,000+</strong> CV searches daily</p>
										<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="employment" role="tabpanel" aria-labelledby="tabEmployment">
						<div class="job-bx">
							<div class="row">
								<div class="col-lg-8">
									<form class="job-alert-bx">
										<div class="row repeater">
											<div class="col-lg-12">
												<div class="form-group">
													<label>Current Desination*</label>
													<input class="form-control" placeholder="Your Job Title" type="text">
												</div>
											</div>
											<div class="col-lg-12">
												<div class="form-group">
													<label>Current Company*</label>
													<input class="form-control" placeholder="Where you are currently working" type="text">
												</div>
											</div>
											<div class="col-lg-12 col-md-12">
												<div class="form-group">
													<label>Expected Salary</label>
													<div class="row">
														<div class="col-lg-6 col-md-6 col-sm-6">
															<div class="form-check">
																<input type="radio" class="form-check-input" id="usdollars" name="example1">
																<label class="form-check-label" for="usdollars">US Dollars</label>
															</div>
														</div>
														<div class="col-lg-6 col-md-6 col-sm-6">
															<div class="form-check">
																<input type="radio" class="form-check-input" id="rupees" name="example1">
																<label class="form-check-label" for="rupees">Indian Rupees</label>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-lg-12">
												<div class="form-group">
													<label>Annual Salary</label>
													<div class="row">
														<div class="col-lg-6 col-md-6 col-sm-6">
															<select>
																<option>0 lakh</option>
																<option>1 lakh</option>
																<option>2 lakh</option>
																<option>5 lakh</option>
																<option>4 lakh</option>
																<option>5 lakh</option>
															</select>
														</div>
														<div class="col-lg-6 col-md-6 col-sm-6">
															<select>
																<option> 05 Thousand </option>
																<option> 10 Thousand </option>
																<option> 15 Thousand </option>
																<option> 20 Thousand </option>
																<option> 25 Thousand </option>
																<option> 30 Thousand </option>
																<option> 35 Thousand </option>
																<option> 40 Thousand </option>
																<option> 45 Thousand </option>
																<option> 50 Thousand </option>
															</select>
														</div>
													</div>
												</div>
											</div>
											<div class="col-lg-12">
												<div class="form-group">
													<label>Working since</label>
													<div class="row">
														<div class="col-lg-6 col-md-6 col-sm-6">
															<select>
																<option>Year</option>
																<option>0</option>
																<option>1</option>
																<option>2</option>
																<option>3</option>
																<option>4</option>
																<option>5</option>
															</select>
														</div>
														<div class="col-lg-6 col-md-6 col-sm-6">
															<select>
																<option> Month </option>
																<option> 1 </option>
																<option> 2 </option>
																<option> 3 </option>
																<option> 4 </option>
																<option> 5 </option>
																<option> 6 </option>
																<option> 7 </option>
																<option> 8 </option>
																<option> 9 </option>
																<option> 10 </option>
																<option> 11 </option>
																<option> 12 </option>
															</select>
														</div>
													</div>
												</div>
											</div>
											<div class="col-lg-12">
												<div class="form-group">
													<label>Current location</label>
													<input class="form-control" placeholder="Current location" type="text">
												</div>
											</div>
											<div class="col-lg-12">
												<div class="form-group">
													<label>Duration of Notice Period</label>
													<select>
														<option>05 Days</option>
														<option>10 Days</option>
														<option>15 Days</option>
														<option>30 Days</option>
														<option>2 Months</option>
														<option>3 Months</option>
													</select>
												</div>
											</div>
											<div class="col-lg-12">
												<div class="form-group">
													<label>Skills*</label>
													<input type="text" class="form-control tags_input" value="HTML, CSS, Bootstrap, Photoshop"/>
												</div>
											</div>
											<div class="col-lg-12">
												<div class="form-group">
													<label>Industry</label>
													<input class="form-control" placeholder="Your Industry" type="text">
												</div>
											</div>
											<div class="col-lg-12">
												<div class="form-group">
													<label>Functional Area</label>
													<input class="form-control" placeholder="Your Department" type="text">
												</div>
											</div>
											<div class="col-lg-12" data-repeater-list="outer-list">
												<div data-repeater-item class="form-group">
													<label>Role</label>
													<input class="form-control" placeholder="Select the role that you work in" type="text">
												</div>
											</div>
											<div class="col-lg-12">
												<div class="form-group">
													<input data-repeater-create type="button" class="form-check-label site-button-link" value="+ Add Another Employment"/>
												</div>
											</div>
											<div class="col-lg-12 text-center">
												<button type="button" class="site-button">Continue</button>
											</div>
										</div>
									</form>
								</div>
								<div class="col-lg-4 bg-gray">
									<div class="p-a25">
										<h6>Why should you create a job alert</h6>
										<ul class="list-check primary">
											<li>Get relevant jobs directly in your inbox</li>
											<li>Stay updated with latest opportunities</li>
											<li>Be the first one to apply</li>
											<li>Create up to 5 personalized job alerts</li>
										</ul>
										<div class="dez-divider bg-gray-dark"></div>
										<h6 class="font-14">Why <a href="https://job-board.dexignzone.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="d8b1b6beb798bda0b9b5a8b4bdf6bbb7b5">[email&#160;protected]</a></h6>
										<p class="m-b10"><strong class="text-black m-r10">800,000+ </strong> Jobs</p>
										<p class="m-b10"><strong class="text-black m-r10">100,000+</strong> CV searches daily</p>
										<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="education" role="tabpanel" aria-labelledby="tabEducation">
						<div class="job-bx">
							<div class="row">
								<div class="col-lg-8">
									<form class="job-alert-bx">
										<div class="row repeater">
											<div class="col-lg-12">
												<div class="form-group">
													<label>Highest Qualification</label>
													<input class="form-control" placeholder="Your highest Qualification" type="text">
												</div>
											</div>
											<div class="col-lg-12">
												<div class="form-group">
													<label>Course</label>
													<input class="form-control" placeholder="Your Course" type="text">
												</div>
											</div>
											<div class="col-lg-12">
												<div class="form-group">
													<label>Specialization</label>
													<input class="form-control" placeholder="Specialization" type="text">
												</div>
											</div>
											<div class="col-lg-12">
												<div class="form-group">
													<label>University/College</label>
													<input class="form-control" placeholder="Institute Name" type="text">
												</div>
											</div>
											<div class="col-lg-12">
												<div class="form-group">
													<label>Course Type</label>
													<div class="row">
														<div class="col-lg-3 col-md-6 col-sm-6">
															<div class="form-check">
																<input type="radio" class="form-check-input" id="fullTime" name="example1">
																<label class="form-check-label" for="fullTime">Full Time</label>
															</div>
														</div>
														<div class="col-lg-3 col-md-6 col-sm-6">
															<div class="form-check">
																<input type="radio" class="form-check-input" id="partTime" name="example1">
																<label class="form-check-label" for="partTime">Part Time</label>
															</div>
														</div>
														<div class="col-lg-3 col-md-6 col-sm-6">
															<div class="form-check">
																<input type="radio" class="form-check-input" id="Correspondence" name="example1">
																<label class="form-check-label" for="Correspondence">Correspondence</label>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-lg-12">
												<div class="form-group">
													<label>Passing Year</label>
													<select>
														<option>Select</option>
														<option>2021</option>
														<option>2021</option>
														<option>2021</option>
														<option>2021</option>
														<option>2021</option>
													</select>
												</div>
											</div>
											<div class="col-lg-12" data-repeater-list="outer-list">
												<div data-repeater-item class="form-group">
													<label>Education</label>
													<input class="form-control" placeholder="Education" type="text">
												</div>
											</div>
											<div class="col-lg-12">
												<div class="form-group">
													<input data-repeater-create type="button" class="form-check-label site-button-link" value="+ Add More Education"/>
												</div>
											</div>
											<div class="col-lg-12 text-center">
												<button class="site-button">Continue</button>
											</div>
										</div>
									</form>
								</div>
								<div class="col-lg-4 bg-gray">
									<div class="p-a25">
										<h6>Why should you create a job alert</h6>
										<ul class="list-check primary">
											<li>Get relevant jobs directly in your inbox</li>
											<li>Stay updated with latest opportunities</li>
											<li>Be the first one to apply</li>
											<li>Create up to 5 personalized job alerts</li>
										</ul>
										<div class="dez-divider bg-gray-dark"></div>
										<h6 class="font-14">Why <a href="https://job-board.dexignzone.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="5a33343c351a3f223b372a363f74393537">[email&#160;protected]</a></h6>
										<p class="m-b10"><strong class="text-black m-r10">800,000+ </strong> Jobs</p>
										<p class="m-b10"><strong class="text-black m-r10">100,000+</strong> CV searches daily</p>
										<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Create Account END -->
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
<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="{{ asset('frontend/js/jquery.min.js') }}"></script><!-- JQUERY.MIN JS -->
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
<script src="{{ asset('frontend/plugins/tagcomplete/tagcomplete.js') }}"></script><!-- TAGCOMPLETE -->
<script src="{{ asset('frontend/plugins/repeatable/jquery.repeater.min.js') }}"></script><!-- JQUERY.REPEATER.MIN.JS -->
<script src="{{ asset('frontend/js/custom.js') }}"></script><!-- CUSTOM FUCTIONS  -->
<script src="{{ asset('frontend/js/dz.carousel.js') }}"></script><!-- SORTCODE FUCTIONS  -->
<script src="{{ asset('frontend/js/dz.ajax.js') }}"></script><!-- CONTACT JS  -->
<script src="{{ asset('frontend/plugins/switcher/switcher.js') }}"></script><!-- SWITCHER -->
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v833ccba57c9e4d2798f2e76cebdd09a11778172276447" integrity="sha512-57MDmcccJXYtNnH+ZiBwzC4jb2rvgVCEokYN+L/nLlmO8rfYT/gIpW2A569iJ/3b+0UEasghjuZH/ma3wIs/EQ==" data-cf-beacon='{"version":"2024.11.0","token":"0931814f84b94398b852d3ac91b5f293","r":1,"server_timing":{"name":{"cfCacheStatus":true,"cfEdge":true,"cfExtPri":true,"cfL4":true,"cfOrigin":true,"cfSpeedBrain":true},"location_startswith":null}}' crossorigin="anonymous"></script>
</body>
</html>



