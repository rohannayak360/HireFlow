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
        <!-- contact area -->
        <div class="content-block">
			<!-- Browse Jobs -->
			<div class="section-full bg-white p-t50 p-b20">
				<div class="container">
					<div class="row">
						<div class="col-xl-3 col-lg-4 m-b30">
							<div class="sticky-top">
								<div class="candidate-info company-info">
									<div class="candidate-detail text-center">
										<div class="canditate-des">
											<a href="javascript:void(0);">
												<img alt="" src="{{ asset('frontend/images/logo/icon3.jpg') }}">
											</a>
											<div class="upload-link" title="update" data-bs-toggle="tooltip" data-placement="right">
												<input type="file" class="update-flie">
												<i class="fas fa-pencil-alt"></i>
											</div>
										</div>
										<div class="candidate-title">
											<h4 class="m-b5"><a href="javascript:void(0);">@COMPANY</a></h4>
										</div>
									</div>
									<ul>
										<li><a href="{{ url('company-profile') }}">
											<i class="far fa-user" aria-hidden="true"></i> 
											<span>Company Profile</span></a></li>
										<li><a href="{{ url('company-post-jobs') }}">
											<i class="far fa-file-alt" aria-hidden="true"></i> 
											<span>Post A Job</span></a></li>
										<li><a href="{{ url('company-transactions') }}">
											<i class="fa fa-random" aria-hidden="true"></i>
											<span>Transactions</span></a></li>
										<li><a href="{{ url('company-manage-job') }}" class="active">
											<i class="fa fa-briefcase" aria-hidden="true"></i> 
											<span>Manage jobs</span></a></li>
										<li><a href="{{ url('company-resume') }}">
											<i class="far fa-id-card" aria-hidden="true"></i>
											<span>Resume</span></a></li>
										<li><a href="{{ url('jobs-change-password') }}">
											<i class="fa fa-key" aria-hidden="true"></i> 
											<span>Change Password</span></a></li>
										<li><a href="{{ url('/') }}">
											<i class="fas fa-sign-out-alt" aria-hidden="true"></i> 
											<span>Log Out</span></a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-xl-9 col-lg-8 m-b30">
							<div class="job-bx clearfix">
								<div class="job-bx-title clearfix">
									<h5 class="font-weight-700 float-start text-uppercase">Manage jobs</h5>
									<div class="float-end">
										<span class="select-title">Sort by freshness</span>
										<select>
											<option>All</option>
											<option>None</option>
											<option>Read</option>
											<option>Unread</option>
											<option>Starred</option>
											<option>Unstarred</option>
										</select>
									</div>
								</div>
								<table class="table-job-bx cv-manager company-manage-job">
									<thead>
										<tr>
											<th class="feature">
												<div class="form-check">
													<input type="checkbox" id="check12" class="form-check-input selectAllCheckBox" name="example1">
													<label class="form-check-label" for="check12"></label>
												</div>
											</th>
											<th>Job Title</th>
											<th>Applications</th>
											<th>Date</th>
											<th>Status</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td class="feature">
												<div class="form-check">
													<input type="checkbox" class="form-check-input" id="check1" name="example1">
													<label class="form-check-label" for="check1"></label>
												</div>
											</td>
											<td class="job-name">
												<a href="javascript:void(0);">Social Media Expert</a>
												<ul class="job-post-info">
													<li><i class="fas fa-map-marker-alt"></i> Sacramento, California</li>
													<li><i class="far fa-bookmark"></i> Full Time</li>
													<li><i class="fa fa-filter"></i> Web Designer</li>
												</ul>
											</td>
											<td class="application text-primary">(5) Applications</td>
											<td class="expired pending">Pending </td>
											<td class="job-links">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#exampleModalLong">
												<i class="fa fa-eye"></i></a>
												<a href="javascript:void(0);"><i class="ti-trash"></i></a>
											</td>
										</tr>
										<tr>
											<td class="feature">
												<div class="form-check">
													<input type="checkbox" class="form-check-input" id="check2" name="example1">
													<label class="form-check-label" for="check2"></label>
												</div>
											</td>
											<td class="job-name">
												<a href="javascript:void(0);">Web Designer</a>
												<ul class="job-post-info">
													<li><i class="fas fa-map-marker-alt"></i> Sacramento, California</li>
													<li><i class="far fa-bookmark"></i> Full Time</li>
													<li><i class="fa fa-filter"></i> Web Designer</li>
												</ul>
											</td>
											<td class="application text-primary">(8) Applications</td>
											<td class="expired text-red">Expired</td>
											<td class="job-links">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#exampleModalLong">
												<i class="fa fa-eye"></i></a>
												<a href="javascript:void(0);"><i class="ti-trash"></i></a>
											</td>
										</tr>
										<tr>
											<td class="feature">
												<div class="form-check">
													<input type="checkbox" class="form-check-input" id="check3" name="example1">
													<label class="form-check-label" for="check3"></label>
												</div>
											</td>
											<td class="job-name">
												<a href="javascript:void(0);">Finance Accountant</a>
												<ul class="job-post-info">
													<li><i class="fas fa-map-marker-alt"></i> Sacramento, California</li>
													<li><i class="far fa-bookmark"></i> Full Time</li>
													<li><i class="fa fa-filter"></i> Web Designer</li>
												</ul>
											</td>
											<td class="application text-primary">(9) Applications</td>
											<td class="expired pending">Pending </td>
											<td class="job-links">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#exampleModalLong">
												<i class="fa fa-eye"></i></a>
												<a href="javascript:void(0);"><i class="ti-trash"></i></a>
											</td>
										</tr>
										<tr>
											<td class="feature">
												<div class="form-check">
													<input type="checkbox" class="form-check-input" id="check4" name="example1">
													<label class="form-check-label" for="check4"></label>
												</div>
											</td>
											<td class="job-name">
												<a href="javascript:void(0);">Social Media Expert</a>
												<ul class="job-post-info">
													<li><i class="fas fa-map-marker-alt"></i> Sacramento, California</li>
													<li><i class="far fa-bookmark"></i> Full Time</li>
													<li><i class="fa fa-filter"></i> Web Designer</li>
												</ul>
											</td>
											<td class="application text-primary">(7) Applications</td>
											<td class="expired success">Active </td>
											<td class="job-links">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#exampleModalLong">
												<i class="fa fa-eye"></i></a>
												<a href="javascript:void(0);"><i class="ti-trash"></i></a>
											</td>
										</tr>
										<tr>
											<td class="feature">
												<div class="form-check">
													<input type="checkbox" class="form-check-input" id="check5" name="example1">
													<label class="form-check-label" for="check5"></label>
												</div>
											</td>
											<td class="job-name">
												<a href="javascript:void(0);">Web Designer</a>
												<ul class="job-post-info">
													<li><i class="fas fa-map-marker-alt"></i> Sacramento, California</li>
													<li><i class="far fa-bookmark"></i> Full Time</li>
													<li><i class="fa fa-filter"></i> Web Designer</li>
												</ul>
											</td>
											<td class="application text-primary">(6) Applications</td>
											<td class="expired pending">Pending </td>
											<td class="job-links">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#exampleModalLong">
												<i class="fa fa-eye"></i></a>
												<a href="javascript:void(0);"><i class="ti-trash"></i></a>
											</td>
										</tr>
										<tr>
											<td class="feature">
												<div class="form-check">
													<input type="checkbox" class="form-check-input" id="check6" name="example1">
													<label class="form-check-label" for="check6"></label>
												</div>
											</td>
											<td class="job-name">
												<a href="javascript:void(0);">Finance Accountant</a>
												<ul class="job-post-info">
													<li><i class="fas fa-map-marker-alt"></i> Sacramento, California</li>
													<li><i class="far fa-bookmark"></i> Full Time</li>
													<li><i class="fa fa-filter"></i> Web Designer</li>
												</ul>
											</td>
											<td class="application text-primary">(3) Applications</td>
											<td class="expired text-red">Expired</td>
											<td class="job-links">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#exampleModalLong">
												<i class="fa fa-eye"></i></a>
												<a href="javascript:void(0);"><i class="ti-trash"></i></a>
											</td>
										</tr>
										<tr>
											<td class="feature">
												<div class="form-check">
													<input type="checkbox" class="form-check-input" id="check7" name="example1">
													<label class="form-check-label" for="check7"></label>
												</div>
											</td>
											<td class="job-name">
												<a href="javascript:void(0);">Social Media Expert</a>
												<ul class="job-post-info">
													<li><i class="fas fa-map-marker-alt"></i> Sacramento, California</li>
													<li><i class="far fa-bookmark"></i> Full Time</li>
													<li><i class="fa fa-filter"></i> Web Designer</li>
												</ul>
											</td>
											<td class="application text-primary">(2) Applications</td>
											<td class="expired success">Active </td>
											<td class="job-links">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#exampleModalLong">
												<i class="fa fa-eye"></i></a>
												<a href="javascript:void(0);"><i class="ti-trash"></i></a>
											</td>
										</tr>
										<tr>
											<td class="feature">
												<div class="form-check">
													<input type="checkbox" class="form-check-input" id="check8" name="example1">
													<label class="form-check-label" for="check8"></label>
												</div>
											</td>
											<td class="job-name">
												<a href="javascript:void(0);">Web Designer</a>
												<ul class="job-post-info">
													<li><i class="fas fa-map-marker-alt"></i> Sacramento, California</li>
													<li><i class="far fa-bookmark"></i> Full Time</li>
													<li><i class="fa fa-filter"></i> Web Designer</li>
												</ul>
											</td>
											<td class="application text-primary">(4) Applications</td>
											<td class="expired success">Active </td>
											<td class="job-links">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#exampleModalLong">
												<i class="fa fa-eye"></i></a>
												<a href="javascript:void(0);"><i class="ti-trash"></i></a>
											</td>
										</tr>
										<tr>
											<td class="feature">
												<div class="form-check">
													<input type="checkbox" class="form-check-input" id="check9" name="example1">
													<label class="form-check-label" for="check9"></label>
												</div>
											</td>
											<td class="job-name">
												<a href="javascript:void(0);">Finance Accountant</a>
												<ul class="job-post-info">
													<li><i class="fas fa-map-marker-alt"></i> Sacramento, California</li>
													<li><i class="far fa-bookmark"></i> Full Time</li>
													<li><i class="fa fa-filter"></i> Web Designer</li>
												</ul>
											</td>
											<td class="application text-primary">(1) Applications</td>
											<td class="expired text-red">Expired</td>
											<td class="job-links">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#exampleModalLong">
												<i class="fa fa-eye"></i></a>
												<a href="javascript:void(0);"><i class="ti-trash"></i></a>
											</td>
										</tr>
										<tr>
											<td class="feature">
												<div class="form-check">
													<input type="checkbox" class="form-check-input" id="check10" name="example1">
													<label class="form-check-label" for="check10"></label>
												</div>
											</td>
											<td class="job-name">
												<a href="javascript:void(0);">Web Designer</a>
												<ul class="job-post-info">
													<li><i class="fas fa-map-marker-alt"></i> Sacramento, California</li>
													<li><i class="far fa-bookmark"></i> Full Time</li>
													<li><i class="fa fa-filter"></i> Web Designer</li>
												</ul>
											</td>
											<td class="application text-primary">(1) Applications</td>
											<td class="expired success">Active </td>
											<td class="job-links">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#exampleModalLong">
												<i class="fa fa-eye"></i></a>
												<a href="javascript:void(0);"><i class="ti-trash"></i></a>
											</td>
										</tr>
									</tbody>
								</table>
								<div class="pagination-bx m-t30 float-end">
									<ul class="pagination">
										<li class="previous"><a href="javascript:void(0);"><i class="ti-arrow-left"></i> Prev</a></li>
										<li class="active"><a href="javascript:void(0);">1</a></li>
										<li><a href="javascript:void(0);">2</a></li>
										<li><a href="javascript:void(0);">3</a></li>
										<li class="next"><a href="javascript:void(0);">Next <i class="ti-arrow-right"></i></a></li>
									</ul>
								</div>
								<!-- Modal -->
								<div class="modal fade modal-bx-info" id="exampleModalLong" tabindex="-1" role="dialog" aria-hidden="true">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<div class="logo-img">
													<img alt="" src="{{ asset('frontend/images/logo/icon2.png') }}">
												</div>
												<h5 class="modal-title">Company Name</h5>
												<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<div class="modal-body">
												<ul>
													<li><strong>Job Title :</strong><p> Web Developer – PHP, HTML, CSS </p></li>
													<li><strong>Experience :</strong><p>5 Year 3 Months</p></li>
													<li><strong>Deseription :</strong>
														<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry's standard dummy text ever since.</p></li>
												</ul>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
								<!-- Modal End -->
							</div>
						</div>
					</div>
				</div>
			</div>
            <!-- Browse Jobs END -->
		</div>
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
    <button class="scroltop fa fa-chevron-up"></button>
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



