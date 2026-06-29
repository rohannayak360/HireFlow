<!DOCTYPE html>
<html lang="en">
<head>

	<!-- PAGE TITLE HERE -->
	<title>HireFlow</title>
	
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
	<link rel="icon" href="{{ asset('frontend/images/our company/favicon.png') }}" type="image/x-icon">

	
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
	<link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&amp;family=Montserrat:wght@100;200;300;400;500;600;700;800;900&amp;family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;family=Roboto:wght@100;300;400;500;700;900&amp;family=Rubik:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">

</head>
<body id="bg">
<div id="loading-area"></div>
<div class="page-wraper bg-white">
	<!-- header -->
    
<header class="site-header mo-left header fullwidth">
    @include('frontend.layouts.nav')
</header>
    <!-- header END -->
    <!-- Content -->
    <div class="page-content">
		<style>
/* Custom styles for the new hero banner */
.new-hero-banner {
    background-color: #fcfdff;
    padding: 100px 0 80px 0;
    text-align: left;
    font-family: 'Inter', 'Poppins', sans-serif;
}
.new-hero-badge {
    display: inline-flex;
    align-items: center;
    background: #fff;
    border: 1px solid #eaeaea;
    border-radius: 50px;
    padding: 6px 16px;
    font-size: 14px;
    font-weight: 500;
    color: #4a5568;
    margin-bottom: 24px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.02);
}
.new-hero-badge img {
    width: 18px;
    height: 18px;
    margin-right: 8px;
    border-radius: 50%;
}
.new-hero-title {
    font-size: 64px;
    font-weight: 900;
    color: #1a202c;
    line-height: 1.1;
    margin-bottom: 24px;
    letter-spacing: -1px;
}
.new-hero-title .text-primary {
    color: var(--primary) !important;
}
.new-hero-subtitle {
    font-size: 18px;
    color: #718096;
    line-height: 1.6;
    margin-bottom: 40px;
    max-width: 800px;
}
.new-search-card {
    background: #fff;
    border-radius: 16px;
    padding: 24px;
    box-shadow: 0 10px 40px rgba(0,0,0,0.05);
    border: 1px solid #f0f0f0;
}
.new-search-tabs {
    display: flex;
    gap: 12px;
    margin-bottom: 20px;
    flex-wrap: wrap;
}
.new-search-tab {
    display: inline-flex;
    align-items: center;
    padding: 8px 16px;
    border-radius: 50px;
    font-size: 14px;
    font-weight: 500;
    color: #4a5568;
    background: #f7fafc;
    text-decoration: none;
    transition: all 0.2s;
}
.new-search-tab:hover {
    background: #edf2f7;
    color: #2d3748;
}
.new-search-tab.active {
    background: var(--primary);
    color: #fff;
}
.new-search-tab i {
    margin-right: 6px;
    font-size: 13px;
}
.new-search-inputs {
    display: flex;
    gap: 16px;
    margin-bottom: 24px;
    flex-wrap: wrap;
}
.new-search-input-group {
    flex: 1;
    min-width: 200px;
    position: relative;
}
.new-search-input-group i {
    position: absolute;
    left: 16px;
    top: 50%;
    transform: translateY(-50%);
    color: #a0aec0;
}
.new-search-input-group input, .new-search-input-group select {
    width: 100%;
    padding: 14px 16px 14px 44px;
    border: 1px solid #e2e8f0;
    border-radius: 8px;
    font-size: 15px;
    color: #4a5568;
    outline: none;
    transition: border-color 0.2s;
    height: 54px;
}
.new-search-input-group input:focus, .new-search-input-group select:focus {
    border-color: var(--primary);
}
.new-search-btn {
    background: var(--primary);
    color: #fff;
    border: none;
    border-radius: 8px;
    padding: 0 32px;
    font-size: 16px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.2s;
    height: 54px;
}
.new-search-btn:hover {
    background: var(--primary);
    filter: brightness(0.9);
}
.new-popular-searches {
    display: flex;
    align-items: center;
    gap: 12px;
    flex-wrap: wrap;
}
.new-popular-searches strong {
    font-size: 14px;
    color: #1a202c;
    font-weight: 700;
}
.new-popular-tag {
    font-size: 13px;
    color: #4a5568;
    background: #f7fafc;
    padding: 6px 14px;
    border-radius: 50px;
    text-decoration: none;
    transition: background 0.2s;
}
.new-popular-tag:hover {
    background: #edf2f7;
}
.new-view-all {
    font-size: 13px;
    color: var(--primary);
    font-weight: 600;
    text-decoration: none;
}
.new-view-all:hover {
    text-decoration: underline;
}
/* Explore Jobs by Category */
.category-explore-section {
    position: relative;
    z-index: 10;
    max-width: 1400px;
    margin: 0 auto;
    padding-top: 20px;
}
.category-explore-title {
    font-size: 36px;
    font-weight: 800;
    color: #1a202c;
    margin-bottom: 16px;
    letter-spacing: -0.5px;
}
.category-explore-subtitle {
    font-size: 16px;
    color: #4a5568;
    max-width: 700px;
    margin: 0 auto;
    line-height: 1.6;
}
.category-explore-grid {
    display: grid;
    grid-template-columns: repeat(6, 1fr);
    gap: 24px;
    margin-top: 40px;
}
.cat-explore-card {
    background: #ffffff;
    border: 1px solid #edf2f7;
    border-radius: 16px;
    padding: 28px 20px;
    text-align: center;
    box-shadow: 0 4px 12px rgba(0,0,0,0.02);
    text-decoration: none;
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    display: flex;
    flex-direction: column;
    align-items: center;
    position: relative;
    overflow: hidden;
}
.cat-explore-card::before {
    content: '';
    position: absolute;
    top: 0; left: 0; right: 0; bottom: 0;
    border-radius: 16px;
    background: linear-gradient(135deg, rgba(255,255,255,0.4), rgba(255,255,255,0));
    z-index: 1;
    pointer-events: none;
}
.cat-explore-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 16px 32px rgba(43, 108, 176, 0.08);
    border-color: var(--primary);
}
.cat-icon {
    font-size: 36px;
    margin-bottom: 16px;
    transition: transform 0.3s ease;
    position: relative;
    z-index: 2;
}
.cat-explore-card:hover .cat-icon {
    transform: scale(1.1) rotate(2deg);
}
.cat-title {
    font-size: 16px;
    font-weight: 700;
    color: #2d3748;
    margin-bottom: 8px;
    position: relative;
    z-index: 2;
    transition: color 0.3s ease;
}
.cat-explore-card:hover .cat-title {
    color: var(--primary);
}
.cat-count {
    font-size: 13px;
    color: #718096;
    margin-bottom: 20px;
    font-weight: 500;
    position: relative;
    z-index: 2;
}
.cat-link {
    font-size: 14px;
    font-weight: 600;
    color: var(--primary);
    display: flex;
    align-items: center;
    gap: 4px;
    position: relative;
    z-index: 2;
    opacity: 0.8;
    transition: opacity 0.3s ease;
}
.cat-explore-card:hover .cat-link {
    opacity: 1;
}
.cat-link .arrow {
    transition: transform 0.3s ease;
}
.cat-explore-card:hover .cat-link .arrow {
    transform: translateX(4px);
}
/* Responsive adjustments */
@media (max-width: 1199px) {
    .category-explore-grid {
        grid-template-columns: repeat(4, 1fr);
    }
}
@media (max-width: 991px) {
    .category-explore-grid {
        grid-template-columns: repeat(3, 1fr);
    }
}
@media (max-width: 768px) {
    .new-hero-title { font-size: 42px; }
    .new-search-inputs { flex-direction: column; }
    .new-search-btn { width: 100%; }
    .category-explore-title { font-size: 28px; }
    .category-explore-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 16px;
    }
    .cat-explore-card { padding: 20px 12px; }
    .cat-icon { font-size: 30px; }
}

/* Featured Jobs Section */
.featured-jobs-section {
    padding: 80px 0;
    background-color: #f8fafc;
}
.featured-jobs-filter .nav-tabs {
    gap: 12px;
}
.featured-jobs-filter .nav-link {
    border: none !important;
    background: #fff;
    color: #4a5568;
    font-weight: 600;
    padding: 10px 24px;
    border-radius: 30px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.02);
    transition: all 0.3s ease;
}
.featured-jobs-filter .nav-link:hover,
.featured-jobs-filter .nav-link.active {
    background: var(--primary);
    color: #fff;
    box-shadow: 0 4px 12px rgba(43, 108, 176, 0.2);
}

.modern-job-card {
    background: #fff;
    border: 1px solid #edf2f7;
    border-radius: 16px;
    padding: 32px 32px;
    position: relative;
    transition: all 0.3s ease;
    box-shadow: 0 4px 6px rgba(0,0,0,0.02);
    height: 100%;
}
.modern-job-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 12px 24px rgba(0,0,0,0.08);
    border-color: var(--primary);
}
.card-badges {
    position: absolute;
    top: -12px;
    left: 32px;
    display: flex;
    gap: 8px;
}
.card-badges .badge {
    padding: 6px 12px;
    font-size: 12px;
    font-weight: 700;
    border-radius: 20px;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}
.badge-featured { background: #ebf8ff; color: #2b6cb0; border: 1px solid #bee3f8; }
.badge-urgent { background: #fff5f5; color: #c53030; border: 1px solid #fed7d7; }
.badge-new { background: #f0fff4; color: #276749; border: 1px solid #c6f6d5; }

.save-job-btn {
    position: absolute;
    top: 24px;
    right: 24px;
    background: #f7fafc;
    border: none;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #a0aec0;
    transition: all 0.2s ease;
    cursor: pointer;
}
.save-job-btn:hover {
    background: #fff5f5;
    color: #e53e3e;
}

.company-logo {
    width: 64px;
    height: 64px;
    border-radius: 12px;
    background: #f8fafc;
    display: flex;
    align-items: center;
    justify-content: center;
    border: 1px solid #edf2f7;
    padding: 10px;
    flex-shrink: 0;
}
.company-logo img {
    max-width: 100%;
    max-height: 100%;
    object-fit: contain;
}
.job-title {
    font-size: 20px;
    font-weight: 700;
    margin-bottom: 4px;
}
.job-title a {
    color: #2d3748;
    text-decoration: none;
    transition: color 0.2s;
}
.job-title a:hover {
    color: var(--primary);
}
.company-name {
    font-size: 15px;
    color: #718096;
    font-weight: 500;
    display: flex;
    align-items: center;
    gap: 6px;
}
.verified-badge {
    color: #38a169;
    font-size: 14px;
}

.job-meta {
    display: flex;
    flex-wrap: wrap;
    gap: 16px;
    margin: 24px 0;
    padding: 20px 0;
    border-top: 1px dashed #e2e8f0;
    border-bottom: 1px dashed #e2e8f0;
}
.meta-item {
    display: flex;
    align-items: center;
    gap: 8px;
    color: #4a5568;
    font-size: 14px;
    font-weight: 500;
    background: #f8fafc;
    padding: 6px 12px;
    border-radius: 8px;
}
.meta-item i {
    color: #a0aec0;
}

.job-footer {
    display: flex;
    align-items: center;
    justify-content: space-between;
}
.posted-time {
    color: #a0aec0;
    font-size: 13px;
    display: flex;
    align-items: center;
    gap: 6px;
}
.btn-apply {
    background: rgba(43, 108, 176, 0.1);
    color: var(--primary);
    font-weight: 600;
    padding: 8px 24px;
    border-radius: 8px;
    transition: all 0.2s ease;
    text-decoration: none;
}
.btn-apply:hover {
    background: var(--primary);
    color: #fff;
}

.btn-view-all {
    background: var(--primary);
    color: #fff;
    font-weight: 600;
    padding: 14px 40px;
    border-radius: 12px;
    font-size: 16px;
    transition: all 0.3s ease;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    box-shadow: 0 4px 12px rgba(43, 108, 176, 0.3);
    text-decoration: none;
}
.btn-view-all:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 16px rgba(43, 108, 176, 0.4);
    color: #fff;
}
.btn-view-all .arrow {
    transition: transform 0.2s ease;
}
.btn-view-all:hover .arrow {
    transform: translateX(4px);
}
@media (max-width: 768px) {
    .modern-job-card { padding: 24px 20px; }
    .card-badges { left: 20px; }
    .job-meta { gap: 12px; flex-direction: column; align-items: flex-start; }
    .meta-item { width: 100%; }
    .job-footer { flex-direction: column; align-items: flex-start; gap: 16px; }
    .btn-apply { width: 100%; text-align: center; }
}

/* Why Choose Us Section */
.why-choose-section {
    padding: 80px 0;
    background-color: #ffffff;
}
.feature-cards-row {
    margin-top: 40px;
}
.feature-card {
    background: #ffffff;
    border: 1px solid #edf2f7;
    border-radius: 20px;
    padding: 32px 24px;
    height: 100%;
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    box-shadow: 0 4px 12px rgba(0,0,0,0.02);
    position: relative;
    overflow: hidden;
    z-index: 1;
}
.feature-card::before {
    content: '';
    position: absolute;
    top: 0; left: 0; right: 0; bottom: 0;
    border-radius: 20px;
    background: linear-gradient(135deg, rgba(255,255,255,0.4), rgba(255,255,255,0));
    z-index: -1;
    pointer-events: none;
}
.feature-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 16px 32px rgba(43, 108, 176, 0.08);
    border-color: var(--primary);
}
.feature-icon {
    width: 60px;
    height: 60px;
    background: rgba(43, 108, 176, 0.1);
    color: var(--primary);
    border-radius: 16px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 24px;
    margin-bottom: 24px;
    transition: all 0.3s ease;
}
.feature-card:hover .feature-icon {
    background: var(--primary);
    color: #ffffff;
    transform: scale(1.1) rotate(5deg);
}
.feature-title {
    font-size: 20px;
    font-weight: 700;
    color: #2d3748;
    margin-bottom: 12px;
    transition: color 0.3s ease;
}
.feature-card:hover .feature-title {
    color: var(--primary);
}
.feature-desc {
    color: #718096;
    font-size: 15px;
    line-height: 1.6;
    margin-bottom: 24px;
}
.feature-link {
    font-weight: 600;
    color: var(--primary);
    display: inline-flex;
    align-items: center;
    gap: 6px;
    text-decoration: none;
    opacity: 0.8;
    transition: all 0.3s ease;
}
.feature-card:hover .feature-link {
    opacity: 1;
}
.feature-link .arrow {
    transition: transform 0.3s ease;
}
.feature-card:hover .feature-link .arrow {
    transform: translateX(4px);
}

.stats-row {
    margin-top: 60px;
    padding-top: 40px;
    border-top: 1px solid #edf2f7;
}
.stat-box {
    padding: 20px;
    transition: transform 0.3s ease;
}
.stat-box:hover {
    transform: translateY(-4px);
}
.stat-number {
    font-size: 42px;
    font-weight: 800;
    color: var(--primary);
    margin-bottom: 8px;
    line-height: 1;
}
.stat-label {
    font-size: 16px;
    color: #718096;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 1px;
}
@media (max-width: 991px) {
    .stat-number { font-size: 36px; }
}
@media (max-width: 768px) {
    .stats-row { margin-top: 40px; padding-top: 20px; }
    .stat-box { padding: 10px; }
    .stat-number { font-size: 32px; }
}

/* Top Hiring Companies Section */
.top-companies-section {
    padding: 80px 0;
    background-color: #f7fafc;
}
.company-card {
    background: #ffffff;
    border: 1px solid #edf2f7;
    border-radius: 16px;
    padding: 24px;
    text-align: center;
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    position: relative;
    height: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
}
.company-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 12px 24px rgba(43, 108, 176, 0.06);
    border-color: #e2e8f0;
}
.company-logo-wrap {
    width: 64px;
    height: 64px;
    border-radius: 12px;
    background: #ffffff;
    border: 1px solid #edf2f7;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 16px;
    overflow: hidden;
    transition: transform 0.3s ease;
}
.company-card:hover .company-logo-wrap {
    transform: scale(1.05);
}
.company-logo-wrap img {
    max-width: 40px;
    max-height: 40px;
    object-fit: contain;
}
.company-name {
    font-size: 18px;
    font-weight: 700;
    color: #2d3748;
    margin-bottom: 4px;
    display: flex;
    align-items: center;
    gap: 6px;
}
.company-name .fa-check-circle {
    color: #38a169;
    font-size: 14px;
}
.company-industry {
    font-size: 13px;
    color: #718096;
    margin-bottom: 12px;
}
.company-open-jobs {
    background: rgba(43, 108, 176, 0.08);
    color: var(--primary);
    padding: 4px 12px;
    border-radius: 20px;
    font-size: 12px;
    font-weight: 600;
    margin-bottom: 20px;
}
.btn-view-jobs {
    margin-top: auto;
    width: 100%;
    padding: 10px;
    border-radius: 8px;
    border: 1px solid var(--primary);
    background: transparent;
    color: var(--primary);
    font-weight: 600;
    font-size: 14px;
    transition: all 0.3s ease;
    text-decoration: none;
}
.company-card:hover .btn-view-jobs {
    background: var(--primary);
    color: #ffffff;
}
.btn-view-all-companies {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: var(--primary);
    color: #ffffff;
    padding: 12px 32px;
    border-radius: 30px;
    font-weight: 600;
    font-size: 16px;
    transition: all 0.3s ease;
    text-decoration: none;
    box-shadow: 0 4px 12px rgba(43, 108, 176, 0.2);
}
.btn-view-all-companies:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 16px rgba(43, 108, 176, 0.3);
    color: #ffffff;
}
.btn-view-all-companies .arrow {
    transition: transform 0.3s ease;
}
.btn-view-all-companies:hover .arrow {
    transform: translateX(4px);
}

/* Reduce gap for all sections except the banner */
.section-full:not(.main-bnr),
.content-inner:not(.main-bnr),
.content-inner-1:not(.main-bnr),
.content-inner-2:not(.main-bnr),
.why-choose-section,
.download-app-section,
.newsletter-section {
    padding-top: 40px !important;
    padding-bottom: 40px !important;
}

/* Specific gap reduction between stats and immediate openings */
.why-choose-section {
    padding-bottom: 0px !important;
}
.why-choose-section .stats-row .mb-4 {
    margin-bottom: 0 !important;
}
.immediate-openings-section {
    padding-top: 20px !important;
    padding-bottom: 20px !important;
}
.featured-jobs-section {
    padding-top: 10px !important;
}
</style>

<div class="page-content">
  		<!-- Section Banner -->
  		<div class="content-inner-1 main-bnr">
  			<div class="bg-circle-bx"></div>
  			<div class="container">
  				<div class="row">
  					<div class="col-lg-7">
  						<div class="new-hero-banner-content" style="text-align: left; margin-top: -40px; margin-left: -80px; width: calc(100% + 80px); position: relative; z-index: 10;">
  							<div class="new-hero-badge">
  								<img src="https://upload.wikimedia.org/wikipedia/en/4/41/Flag_of_India.svg" alt="India">
  								India's All-in-One Job Platform
  							</div>
  							<h1 class="new-hero-title">
  								Find Any Job.<br>
  								<span class="text-primary">For Anyone. Anywhere.</span>
  							</h1>
  							<p class="new-hero-subtitle">
  								From full-time careers to part-time gigs, freelance work to local services - Find jobs, hire talent, or grow your skills. All in one place.
  							</p>
  							
  							<div class="new-search-card">
  								<div class="new-search-tabs">
  									<a href="javascript:void(0);" class="new-search-tab active">
										<svg style="margin-right: 6px;" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg> 
										All Jobs
									</a>
  									<a href="javascript:void(0);" class="new-search-tab">
										<svg style="margin-right: 6px;" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path></svg>
										Full-time
									</a>
  									<a href="javascript:void(0);" class="new-search-tab">
										<svg style="margin-right: 6px;" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
										Part-time
									</a>
  									<a href="javascript:void(0);" class="new-search-tab">
										<svg style="margin-right: 6px;" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
										Freelance
									</a>
  									<a href="javascript:void(0);" class="new-search-tab">
										<svg style="margin-right: 6px;" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
										Internship
									</a>
  									<a href="javascript:void(0);" class="new-search-tab">
										<svg style="margin-right: 6px;" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>
										Local Services
									</a>
  								</div>
  								
  								<hr style="border: 0; border-top: 1px solid #f0f0f0; margin: 20px 0;">
  								
  								<form action="{{ url('category-all-jobs') }}">
  									<div class="new-search-inputs">
  										<div class="new-search-input-group" style="flex: 1.5;">
  											<svg style="position: absolute; left: 16px; top: 50%; transform: translateY(-50%); color: #a0aec0;" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
  											<input type="text" placeholder="Job title, keyword or skill" style="padding-left: 44px; padding-right: 16px;">
  										</div>
  										<div class="new-search-input-group" style="flex: 1;">
  											<svg style="position: absolute; left: 16px; top: 50%; transform: translateY(-50%); color: #a0aec0;" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
  											<input type="text" placeholder="City or location" style="padding-left: 44px; padding-right: 16px;">
  										</div>
  										<div class="new-search-input-group" style="flex: 1;">
  											<select style="appearance: none; -webkit-appearance: none; background: url('data:image/svg+xml;utf8,<svg xmlns=\'http://www.w3.org/2000/svg\' width=\'16\' height=\'16\' viewBox=\'0 0 24 24\' fill=\'none\' stroke=\'%23a0aec0\' stroke-width=\'2\' stroke-linecap=\'round\' stroke-linejoin=\'round\'><polyline points=\'6 9 12 15 18 9\'></polyline></svg>') no-repeat right 16px center; background-size: 16px; padding-left: 16px;">
  												<option value="">All Categories</option>
  												<option value="1">IT & Software</option>
  												<option value="2">Design</option>
  												<option value="3">Marketing</option>
  											</select>
  										</div>
  										<button type="submit" class="new-search-btn">Search Jobs</button>
  									</div>
  								</form>
  								
  								<div class="new-popular-searches">
  									<strong>Popular Searches:</strong>
  									<a href="javascript:void(0);" class="new-popular-tag">Delivery</a>
  									<a href="javascript:void(0);" class="new-popular-tag">Customer Support</a>
  									<a href="javascript:void(0);" class="new-popular-tag">Designer</a>
  									<a href="javascript:void(0);" class="new-popular-tag">Data Entry</a>
  									<a href="javascript:void(0);" class="new-popular-tag">Driver</a>
  									<a href="javascript:void(0);" class="new-popular-tag">Teaching</a>
  									<a href="javascript:void(0);" class="new-view-all">View All &gt;</a>
  								</div>
  							</div>
  						</div>	
  					</div>
  					<div class="col-lg-5">
  						<div class="banner-media">
  							<div class="banner-main-media">
  								<img src="{{ asset('frontend/images/man4.png') }}" alt="">
  							</div>
  							<div class="banner-media-bg">
  								<div class="bnr-circle1">
  									<img src="{{ asset('frontend/images/banner/microsoft.svg') }}" class="banner-icon1" alt="">
  								</div>
  								<div class="bnr-circle2">
  									<img src="{{ asset('frontend/images/banner/google.svg') }}" class="banner-icon1" alt="">
  									<img src="{{ asset('frontend/images/banner/logo.svg') }}" class="banner-icon2" alt="">
  									<img src="{{ asset('frontend/images/banner/amazon.svg') }}" class="banner-icon3" alt="">
  								</div>
  								<div class="bnr-circle3"></div>
  							</div>
  						</div>
  					</div>
  				</div>
  			</div>
  			<div class="back-circle"></div>
  			<div class="back-circle2"></div>
  		</div>
  		<!-- Section Banner END -->
  		
		<!-- Explore Jobs by Category -->
		<div class="section-full bg-white" style="padding: 80px 0;">
			<div class="container-fluid" style="padding: 0 50px;">
				<div class="category-explore-section">
					<div class="text-center">
						<h2 class="category-explore-title">Explore Jobs by Category</h2>
						<p class="category-explore-subtitle">Discover opportunities across every industry—from technology and healthcare to local services, freelance work, and government careers.</p>
					</div>
					
					<div class="category-explore-grid">
						<!-- Row 1 -->
						<a href="javascript:void(0);" class="cat-explore-card">
							<div class="cat-icon">💻</div>
							<h3 class="cat-title">IT & Software</h3>
							<p class="cat-count">12,540 Active Jobs</p>
							<div class="cat-link">View Jobs <span class="arrow">→</span></div>
						</a>
						<a href="javascript:void(0);" class="cat-explore-card">
							<div class="cat-icon">🚚</div>
							<h3 class="cat-title">Delivery & Logistics</h3>
							<p class="cat-count">8,320 Active Jobs</p>
							<div class="cat-link">View Jobs <span class="arrow">→</span></div>
						</a>
						<a href="javascript:void(0);" class="cat-explore-card">
							<div class="cat-icon">🏥</div>
							<h3 class="cat-title">Healthcare</h3>
							<p class="cat-count">5,910 Active Jobs</p>
							<div class="cat-link">View Jobs <span class="arrow">→</span></div>
						</a>
						<a href="javascript:void(0);" class="cat-explore-card">
							<div class="cat-icon">🏛️</div>
							<h3 class="cat-title">Government Jobs</h3>
							<p class="cat-count">3,245 Active Jobs</p>
							<div class="cat-link">View Jobs <span class="arrow">→</span></div>
						</a>
						<a href="javascript:void(0);" class="cat-explore-card">
							<div class="cat-icon">🎓</div>
							<h3 class="cat-title">Education</h3>
							<p class="cat-count">4,120 Active Jobs</p>
							<div class="cat-link">View Jobs <span class="arrow">→</span></div>
						</a>
						<a href="javascript:void(0);" class="cat-explore-card">
							<div class="cat-icon">💼</div>
							<h3 class="cat-title">Office & Admin</h3>
							<p class="cat-count">9,850 Active Jobs</p>
							<div class="cat-link">View Jobs <span class="arrow">→</span></div>
						</a>
						
						<!-- Row 2 -->
						<a href="javascript:void(0);" class="cat-explore-card">
							<div class="cat-icon">⚡</div>
							<h3 class="cat-title">Electrician & Tech</h3>
							<p class="cat-count">6,430 Active Jobs</p>
							<div class="cat-link">View Jobs <span class="arrow">→</span></div>
						</a>
						<a href="javascript:void(0);" class="cat-explore-card">
							<div class="cat-icon">🔧</div>
							<h3 class="cat-title">Plumbing & Maint.</h3>
							<p class="cat-count">4,210 Active Jobs</p>
							<div class="cat-link">View Jobs <span class="arrow">→</span></div>
						</a>
						<a href="javascript:void(0);" class="cat-explore-card">
							<div class="cat-icon">🏨</div>
							<h3 class="cat-title">Hospitality</h3>
							<p class="cat-count">7,650 Active Jobs</p>
							<div class="cat-link">View Jobs <span class="arrow">→</span></div>
						</a>
						<a href="javascript:void(0);" class="cat-explore-card">
							<div class="cat-icon">📈</div>
							<h3 class="cat-title">Sales & Marketing</h3>
							<p class="cat-count">11,200 Active Jobs</p>
							<div class="cat-link">View Jobs <span class="arrow">→</span></div>
						</a>
						<a href="javascript:void(0);" class="cat-explore-card">
							<div class="cat-icon">🎨</div>
							<h3 class="cat-title">Freelance & Creative</h3>
							<p class="cat-count">5,430 Active Jobs</p>
							<div class="cat-link">View Jobs <span class="arrow">→</span></div>
						</a>
						<a href="javascript:void(0);" class="cat-explore-card">
							<div class="cat-icon">🏠</div>
							<h3 class="cat-title">Work From Home</h3>
							<p class="cat-count">15,890 Active Jobs</p>
							<div class="cat-link">View Jobs <span class="arrow">→</span></div>
						</a>
					</div>
				</div>
			</div>
		</div>
		<!-- Explore Jobs by Category END -->

		<!-- Top Hiring Companies -->
		<div class="section-full top-companies-section content-inner-1">
			<div class="container">
				<div class="section-head text-center style-1">
					<h2 class="section-title-3">Top Hiring Companies</h2>
					<p class="dz-text-2">Explore opportunities from trusted companies across multiple industries.</p>
				</div>
				
				<div class="row">
					<!-- Company 1 -->
					<div class="col-lg-3 col-md-4 col-sm-6 mb-4">
						<div class="company-card">
							<div class="company-logo-wrap">
								<img src="{{ asset('frontend/images/company logo/google-svgrepo-com.svg') }}" alt="Google Logo" style="width: 45px; height: 45px; object-fit: contain; border-radius: 8px;">
							</div>
							<h3 class="company-name">Google <i class="fa fa-check-circle"></i></h3>
							<p class="company-industry">Information Technology</p>
							<div class="company-open-jobs">145 Open Jobs</div>
							<a href="javascript:void(0);" class="btn-view-jobs">View Jobs <span class="arrow">→</span></a>
						</div>
					</div>
					<!-- Company 2 -->
					<div class="col-lg-3 col-md-4 col-sm-6 mb-4">
						<div class="company-card">
							<div class="company-logo-wrap">
								<img src="{{ asset('frontend/images/company logo/amazon-color-svgrepo-com.svg') }}" alt="Amazon Logo" style="width: 45px; height: 45px; object-fit: contain; border-radius: 8px;">
							</div>
							<h3 class="company-name">Amazon <i class="fa fa-check-circle"></i></h3>
							<p class="company-industry">E-commerce</p>
							<div class="company-open-jobs">320 Open Jobs</div>
							<a href="javascript:void(0);" class="btn-view-jobs">View Jobs <span class="arrow">→</span></a>
						</div>
					</div>
					<!-- Company 3 -->
					<div class="col-lg-3 col-md-4 col-sm-6 mb-4">
						<div class="company-card">
							<div class="company-logo-wrap">
								<img src="{{ asset('frontend/images/company logo/microsoft-svgrepo-com.svg') }}" alt="Microsoft Logo" style="width: 45px; height: 45px; object-fit: contain; border-radius: 8px;">
							</div>
							<h3 class="company-name">Microsoft <i class="fa fa-check-circle"></i></h3>
							<p class="company-industry">Software</p>
							<div class="company-open-jobs">210 Open Jobs</div>
							<a href="javascript:void(0);" class="btn-view-jobs">View Jobs <span class="arrow">→</span></a>
						</div>
					</div>
					<!-- Company 4 -->
					<div class="col-lg-3 col-md-4 col-sm-6 mb-4">
						<div class="company-card">
							<div class="company-logo-wrap">
								<img src="{{ asset('frontend/images/company logo/apple-173-svgrepo-com.svg') }}" alt="Apple Logo" style="width: 45px; height: 45px; object-fit: contain; border-radius: 8px;">
							</div>
							<h3 class="company-name">Apple <i class="fa fa-check-circle"></i></h3>
							<p class="company-industry">Consumer Electronics</p>
							<div class="company-open-jobs">95 Open Jobs</div>
							<a href="javascript:void(0);" class="btn-view-jobs">View Jobs <span class="arrow">→</span></a>
						</div>
					</div>
					<!-- Company 5 -->
					<div class="col-lg-3 col-md-4 col-sm-6 mb-4">
						<div class="company-card">
							<div class="company-logo-wrap">
								<img src="{{ asset('frontend/images/company logo/meta-logo-facebook-svgrepo-com.svg') }}" alt="Meta Logo" style="width: 45px; height: 45px; object-fit: contain; border-radius: 8px;">
							</div>
							<h3 class="company-name">Meta <i class="fa fa-check-circle"></i></h3>
							<p class="company-industry">Social Media</p>
							<div class="company-open-jobs">156 Open Jobs</div>
							<a href="javascript:void(0);" class="btn-view-jobs">View Jobs <span class="arrow">→</span></a>
						</div>
					</div>
					<!-- Company 6 -->
					<div class="col-lg-3 col-md-4 col-sm-6 mb-4">
						<div class="company-card">
							<div class="company-logo-wrap">
								<img src="{{ asset('frontend/images/company logo/tesla-svgrepo-com.svg') }}" alt="Tesla Logo" style="width: 45px; height: 45px; object-fit: contain; border-radius: 8px;">
							</div>
							<h3 class="company-name">Tesla <i class="fa fa-check-circle"></i></h3>
							<p class="company-industry">Automotive</p>
							<div class="company-open-jobs">84 Open Jobs</div>
							<a href="javascript:void(0);" class="btn-view-jobs">View Jobs <span class="arrow">→</span></a>
						</div>
					</div>
					<!-- Company 7 -->
					<div class="col-lg-3 col-md-4 col-sm-6 mb-4">
						<div class="company-card">
							<div class="company-logo-wrap">
								<img src="{{ asset('frontend/images/company logo/Twitter-X--Streamline-Bootstrap.svg') }}" alt="X Logo" style="width: 45px; height: 45px; object-fit: contain; border-radius: 8px;">
							</div>
							<h3 class="company-name">X (Twitter) <i class="fa fa-check-circle"></i></h3>
							<p class="company-industry">Social Media</p>
							<div class="company-open-jobs">42 Open Jobs</div>
							<a href="javascript:void(0);" class="btn-view-jobs">View Jobs <span class="arrow">→</span></a>
						</div>
					</div>
					<!-- Company 8 -->
					<div class="col-lg-3 col-md-4 col-sm-6 mb-4">
						<div class="company-card">
							<div class="company-logo-wrap">
								<img src="{{ asset('frontend/images/company logo/linkedin-network-communication-connection-internet-online-svgrepo-com.svg') }}" alt="LinkedIn Logo" style="width: 45px; height: 45px; object-fit: contain; border-radius: 8px;">
							</div>
							<h3 class="company-name">LinkedIn <i class="fa fa-check-circle"></i></h3>
							<p class="company-industry">Networking</p>
							<div class="company-open-jobs">112 Open Jobs</div>
							<a href="javascript:void(0);" class="btn-view-jobs">View Jobs <span class="arrow">→</span></a>
						</div>
					</div>
				</div>
				
				<div class="text-center mt-5">
					<a href="javascript:void(0);" class="btn-view-all-companies">View All Companies <span class="arrow">→</span></a>
				</div>
			</div>
		</div>
		<!-- Top Hiring Companies End-->
		<!-- Why Choose Us -->
		<div class="section-full why-choose-section content-inner-1 bg-white" style="padding-bottom: 0 !important;">
			<div class="container">
				<div class="section-head text-center style-1">
					<h2 class="section-title-3">Why Choose HireFlow?</h2>
					<p class="dz-text-2">More than a job portal—HireFlow connects job seekers and employers with intelligent tools, flexible hiring options, and career-focused services built for India's modern workforce.</p>
				</div>
				
				<div class="row feature-cards-row">
					<!-- Card 1 -->
					<div class="col-lg-4 col-md-6 mb-4">
						<div class="feature-card">
							<div class="feature-icon">
								<i class="fa fa-magic"></i>
							</div>
							<h3 class="feature-title">AI Resume Toolkit</h3>
							<p class="feature-desc">Create ATS-friendly resumes, analyze resume quality, and optimize your profile using AI-powered tools.</p>
							<a href="javascript:void(0);" class="feature-link">Learn More <span class="arrow">→</span></a>
						</div>
					</div>
					<!-- Card 2 -->
					<div class="col-lg-4 col-md-6 mb-4">
						<div class="feature-card">
							<div class="feature-icon">
								<i class="fa fa-bolt"></i>
							</div>
							<h3 class="feature-title">Immediate Openings</h3>
							<p class="feature-desc">Discover urgent hiring opportunities from companies actively recruiting right now.</p>
							<a href="javascript:void(0);" class="feature-link">Learn More <span class="arrow">→</span></a>
						</div>
					</div>
					<!-- Card 3 -->
					<div class="col-lg-4 col-md-6 mb-4">
						<div class="feature-card">
							<div class="feature-icon">
								<i class="fa fa-briefcase"></i>
							</div>
							<h3 class="feature-title">Flexible Work Options</h3>
							<p class="feature-desc">Find full-time, part-time, freelance, remote, internship, and contract opportunities in one platform.</p>
							<a href="javascript:void(0);" class="feature-link">Learn More <span class="arrow">→</span></a>
						</div>
					</div>
					<!-- Card 4 -->
					<div class="col-lg-4 col-md-6 mb-4">
						<div class="feature-card">
							<div class="feature-icon">
								<i class="fa fa-check-circle"></i>
							</div>
							<h3 class="feature-title">Verified Employers</h3>
							<p class="feature-desc">Apply with confidence through verified companies and trusted recruiters.</p>
							<a href="javascript:void(0);" class="feature-link">Learn More <span class="arrow">→</span></a>
						</div>
					</div>
					<!-- Card 5 -->
					<div class="col-lg-4 col-md-6 mb-4">
						<div class="feature-card">
							<div class="feature-icon">
								<i class="fa fa-users"></i>
							</div>
							<h3 class="feature-title">Equal Opportunity Hiring</h3>
							<p class="feature-desc">Support inclusive hiring with opportunities for women, freshers, career returners, veterans, and differently-abled candidates.</p>
							<a href="javascript:void(0);" class="feature-link">Learn More <span class="arrow">→</span></a>
						</div>
					</div>
					<!-- Card 6 -->
					<div class="col-lg-4 col-md-6 mb-4">
						<div class="feature-card">
							<div class="feature-icon">
								<i class="fa fa-rocket"></i>
							</div>
							<h3 class="feature-title">Career Growth Resources</h3>
							<p class="feature-desc">Access interview preparation, resume guidance, career roadmaps, and professional development resources.</p>
							<a href="javascript:void(0);" class="feature-link">Learn More <span class="arrow">→</span></a>
						</div>
					</div>
				</div>

				<div class="stats-row mt-5">
					<div class="row text-center">
						<div class="col-lg-3 col-md-6 mb-0">
							<div class="stat-box">
								<h3 class="stat-number"><span class="counter">25</span>K+</h3>
								<p class="stat-label">Active Jobs</p>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 mb-0">
							<div class="stat-box">
								<h3 class="stat-number"><span class="counter">50</span>K+</h3>
								<p class="stat-label">Hiring Companies</p>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 mb-0">
							<div class="stat-box">
								<h3 class="stat-number"><span class="counter">10</span>L+</h3>
								<p class="stat-label">Job Seekers</p>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 mb-0">
							<div class="stat-box">
								<h3 class="stat-number"><span class="counter">100</span>+</h3>
								<p class="stat-label">Job Categories</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="back-circle"></div>
		</div>
		<!-- Why Choose Us END -->
		
		<!-- Immediate Openings -->
		<div class="section-full immediate-openings-section content-inner-1" style="background-color: #f7fafc; padding-top: 20px !important; padding-bottom: 20px !important;">
			<div class="container">
				<div class="section-head text-center style-1">
					<h2 class="section-title-3">Immediate Openings</h2>
					<p class="dz-text-2">Start working faster with companies actively hiring now.</p>
				</div>
				
				<div class="row">
					<!-- Card 1 -->
					<div class="col-lg-4 col-md-6 mb-4">
						<div class="modern-job-card">
							<div class="card-badges">
								<span class="badge" style="background: #e53e3e; color: white; padding: 4px 10px; border-radius: 4px; font-size: 11px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.5px; box-shadow: 0 2px 4px rgba(229,62,62,0.3);">🔥 Hiring Today</span>
							</div>
							<button class="save-job-btn"><i class="fa fa-heart"></i></button>
							
							<div class="company-logo">
								<i class="fa fa-motorcycle" style="font-size: 24px; color: #a0aec0;"></i>
							</div>
							
							<h3 class="job-title"><a href="javascript:void(0);">Delivery Executive</a></h3>
							<div class="company-name">Zomato <i class="fa fa-check-circle verified-badge"></i></div>
							
							<div class="job-meta">
								<div class="meta-item"><i class="fa fa-map-marker"></i> Mumbai, MH</div>
								<div class="meta-item"><i class="fa fa-money"></i> ₹15k - ₹25k / mo</div>
							</div>
							
							<div class="job-footer">
								<div class="posted-time" style="color: #e53e3e; font-weight: 600;"><i class="fa fa-bolt"></i> Urgently Hiring</div>
								<a href="javascript:void(0);" class="btn btn-apply">Apply Now</a>
							</div>
						</div>
					</div>
					<!-- Card 2 -->
					<div class="col-lg-4 col-md-6 mb-4">
						<div class="modern-job-card">
							<div class="card-badges">
								<span class="badge" style="background: #d69e2e; color: white; padding: 4px 10px; border-radius: 4px; font-size: 11px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.5px; box-shadow: 0 2px 4px rgba(214,158,46,0.3);">⚡ Immediate Joining</span>
							</div>
							<button class="save-job-btn"><i class="fa fa-heart"></i></button>
							
							<div class="company-logo">
								<i class="fa fa-headphones" style="font-size: 24px; color: #a0aec0;"></i>
							</div>
							
							<h3 class="job-title"><a href="javascript:void(0);">Customer Support</a></h3>
							<div class="company-name">Teleperformance <i class="fa fa-check-circle verified-badge"></i></div>
							
							<div class="job-meta">
								<div class="meta-item"><i class="fa fa-map-marker"></i> Remote</div>
								<div class="meta-item"><i class="fa fa-money"></i> ₹18k - ₹30k / mo</div>
							</div>
							
							<div class="job-footer">
								<div class="posted-time" style="color: #e53e3e; font-weight: 600;"><i class="fa fa-bolt"></i> Urgently Hiring</div>
								<a href="javascript:void(0);" class="btn btn-apply">Apply Now</a>
							</div>
						</div>
					</div>
					<!-- Card 3 -->
					<div class="col-lg-4 col-md-6 mb-4">
						<div class="modern-job-card">
							<div class="card-badges">
								<span class="badge" style="background: #e53e3e; color: white; padding: 4px 10px; border-radius: 4px; font-size: 11px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.5px; box-shadow: 0 2px 4px rgba(229,62,62,0.3);">🔥 Hiring Today</span>
							</div>
							<button class="save-job-btn"><i class="fa fa-heart"></i></button>
							
							<div class="company-logo">
								<i class="fa fa-truck" style="font-size: 24px; color: #a0aec0;"></i>
							</div>
							
							<h3 class="job-title"><a href="javascript:void(0);">Warehouse Associate</a></h3>
							<div class="company-name">Amazon <i class="fa fa-check-circle verified-badge"></i></div>
							
							<div class="job-meta">
								<div class="meta-item"><i class="fa fa-map-marker"></i> Bangalore, KA</div>
								<div class="meta-item"><i class="fa fa-money"></i> ₹14k - ₹22k / mo</div>
							</div>
							
							<div class="job-footer">
								<div class="posted-time" style="color: #e53e3e; font-weight: 600;"><i class="fa fa-bolt"></i> Urgently Hiring</div>
								<a href="javascript:void(0);" class="btn btn-apply">Apply Now</a>
							</div>
						</div>
					</div>
					<!-- Card 4 -->
					<div class="col-lg-4 col-md-6 mb-4">
						<div class="modern-job-card">
							<div class="card-badges">
								<span class="badge" style="background: #d69e2e; color: white; padding: 4px 10px; border-radius: 4px; font-size: 11px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.5px; box-shadow: 0 2px 4px rgba(214,158,46,0.3);">⚡ Immediate Joining</span>
							</div>
							<button class="save-job-btn"><i class="fa fa-heart"></i></button>
							
							<div class="company-logo">
								<i class="fa fa-laptop" style="font-size: 24px; color: #a0aec0;"></i>
							</div>
							
							<h3 class="job-title"><a href="javascript:void(0);">Data Entry Operator</a></h3>
							<div class="company-name">Tech Mahindra <i class="fa fa-check-circle verified-badge"></i></div>
							
							<div class="job-meta">
								<div class="meta-item"><i class="fa fa-map-marker"></i> Pune, MH</div>
								<div class="meta-item"><i class="fa fa-money"></i> ₹15k - ₹20k / mo</div>
							</div>
							
							<div class="job-footer">
								<div class="posted-time" style="color: #e53e3e; font-weight: 600;"><i class="fa fa-bolt"></i> Urgently Hiring</div>
								<a href="javascript:void(0);" class="btn btn-apply">Apply Now</a>
							</div>
						</div>
					</div>
					<!-- Card 5 -->
					<div class="col-lg-4 col-md-6 mb-4">
						<div class="modern-job-card">
							<div class="card-badges">
								<span class="badge" style="background: #e53e3e; color: white; padding: 4px 10px; border-radius: 4px; font-size: 11px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.5px; box-shadow: 0 2px 4px rgba(229,62,62,0.3);">🔥 Hiring Today</span>
							</div>
							<button class="save-job-btn"><i class="fa fa-heart"></i></button>
							
							<div class="company-logo">
								<i class="fa fa-shopping-bag" style="font-size: 24px; color: #a0aec0;"></i>
							</div>
							
							<h3 class="job-title"><a href="javascript:void(0);">Retail Sales Executive</a></h3>
							<div class="company-name">Reliance Smart <i class="fa fa-check-circle verified-badge"></i></div>
							
							<div class="job-meta">
								<div class="meta-item"><i class="fa fa-map-marker"></i> Delhi, NCR</div>
								<div class="meta-item"><i class="fa fa-money"></i> ₹16k - ₹24k / mo</div>
							</div>
							
							<div class="job-footer">
								<div class="posted-time" style="color: #e53e3e; font-weight: 600;"><i class="fa fa-bolt"></i> Urgently Hiring</div>
								<a href="javascript:void(0);" class="btn btn-apply">Apply Now</a>
							</div>
						</div>
					</div>
					<!-- Card 6 -->
					<div class="col-lg-4 col-md-6 mb-4">
						<div class="modern-job-card">
							<div class="card-badges">
								<span class="badge" style="background: #d69e2e; color: white; padding: 4px 10px; border-radius: 4px; font-size: 11px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.5px; box-shadow: 0 2px 4px rgba(214,158,46,0.3);">⚡ Immediate Joining</span>
							</div>
							<button class="save-job-btn"><i class="fa fa-heart"></i></button>
							
							<div class="company-logo">
								<i class="fa fa-motorcycle" style="font-size: 24px; color: #a0aec0;"></i>
							</div>
							
							<h3 class="job-title"><a href="javascript:void(0);">Bike Taxi Rider</a></h3>
							<div class="company-name">Rapido <i class="fa fa-check-circle verified-badge"></i></div>
							
							<div class="job-meta">
								<div class="meta-item"><i class="fa fa-map-marker"></i> Hyderabad, TS</div>
								<div class="meta-item"><i class="fa fa-money"></i> ₹20k - ₹35k / mo</div>
							</div>
							
							<div class="job-footer">
								<div class="posted-time" style="color: #e53e3e; font-weight: 600;"><i class="fa fa-bolt"></i> Urgently Hiring</div>
								<a href="javascript:void(0);" class="btn btn-apply">Apply Now</a>
							</div>
						</div>
					</div>
				</div>
				
				<div class="text-center mt-5">
					<a href="javascript:void(0);" class="btn-view-all-companies" style="background: #e53e3e; border: none;">View All Urgent Jobs <span class="arrow">→</span></a>
				</div>
			</div>
		</div>
		<!-- Immediate Openings END --></div>
			<div class="back-circle2"></div>
		</div>		
		<!-- Job Category END -->	
		<!-- Featured Jobs -->
		<div class="section-full featured-jobs-section content-inner-1 bg-white" style="padding-top: 10px !important;">
			<div class="container">
				<div class="section-head text-center style-1">
					<h2 class="section-title-3">Featured Jobs</h2>
					<p class="dz-text-2">Discover the latest opportunities from verified employers across India.</p>
				</div>
				
				<!-- Filter Tabs -->
				<div class="featured-jobs-filter mb-5 text-center">
					<ul class="nav nav-tabs justify-content-center border-0" id="featuredJobsTab" role="tablist">
						<li class="nav-item" role="presentation">
							<button class="nav-link active" data-bs-toggle="tab" type="button" role="tab">Featured</button>
						</li>
						<li class="nav-item" role="presentation">
							<button class="nav-link" data-bs-toggle="tab" type="button" role="tab">Immediate Openings</button>
						</li>
						<li class="nav-item" role="presentation">
							<button class="nav-link" data-bs-toggle="tab" type="button" role="tab">Remote</button>
						</li>
						<li class="nav-item" role="presentation">
							<button class="nav-link" data-bs-toggle="tab" type="button" role="tab">Full-time</button>
						</li>
						<li class="nav-item" role="presentation">
							<button class="nav-link" data-bs-toggle="tab" type="button" role="tab">Part-time</button>
						</li>
						<li class="nav-item" role="presentation">
							<button class="nav-link" data-bs-toggle="tab" type="button" role="tab">Freelance</button>
						</li>
						<li class="nav-item" role="presentation">
							<button class="nav-link" data-bs-toggle="tab" type="button" role="tab">Freshers</button>
						</li>
					</ul>
				</div>
				
				<!-- Jobs Grid -->
				<div class="row">
					<!-- Job Card 1 -->
					<div class="col-lg-6 mb-4">
						<div class="modern-job-card">
							<div class="card-badges">
								<span class="badge badge-featured">Featured</span>
								<span class="badge badge-urgent">Urgent</span>
							</div>
							<button class="save-job-btn"><i class="fa fa-heart"></i></button>
							
							<div class="d-flex align-items-center mb-3">
								<div class="company-logo">
									<img src="{{ asset('frontend/images/icons/google.png') }}" alt="Google">
								</div>
								<div class="ms-3" style="margin-left: 1rem;">
									<h4 class="job-title"><a href="javascript:void(0);">Senior UI/UX Designer</a></h4>
									<div class="company-name">Google <span class="verified-badge"><i class="fa fa-check-circle"></i></span></div>
								</div>
							</div>
							
							<div class="job-meta">
								<div class="meta-item"><i class="fa fa-map-marker"></i> Bangalore, India</div>
								<div class="meta-item"><i class="fa fa-money"></i> ₹18L - ₹25L / yr</div>
								<div class="meta-item"><i class="fa fa-briefcase"></i> 4-6 Yrs Exp</div>
								<div class="meta-item"><i class="fa fa-clock-o"></i> Full-time</div>
							</div>
							
							<div class="job-footer">
								<div class="posted-time"><i class="fa fa-clock-o"></i> Posted 2 days ago</div>
								<a href="javascript:void(0);" class="btn btn-apply">Apply Now</a>
							</div>
						</div>
					</div>
					
					<!-- Job Card 2 -->
					<div class="col-lg-6 mb-4">
						<div class="modern-job-card">
							<div class="card-badges">
								<span class="badge badge-new">New</span>
							</div>
							<button class="save-job-btn"><i class="fa fa-heart"></i></button>
							
							<div class="d-flex align-items-center mb-3">
								<div class="company-logo">
									<img src="{{ asset('frontend/images/icons/microsoft.png') }}" alt="Microsoft">
								</div>
								<div class="ms-3" style="margin-left: 1rem;">
									<h4 class="job-title"><a href="javascript:void(0);">Frontend Developer (React)</a></h4>
									<div class="company-name">Microsoft <span class="verified-badge"><i class="fa fa-check-circle"></i></span></div>
								</div>
							</div>
							
							<div class="job-meta">
								<div class="meta-item"><i class="fa fa-map-marker"></i> Hyderabad, India</div>
								<div class="meta-item"><i class="fa fa-money"></i> ₹12L - ₹18L / yr</div>
								<div class="meta-item"><i class="fa fa-briefcase"></i> 2-4 Yrs Exp</div>
								<div class="meta-item"><i class="fa fa-clock-o"></i> Remote</div>
							</div>
							
							<div class="job-footer">
								<div class="posted-time"><i class="fa fa-clock-o"></i> Posted 5 hours ago</div>
								<a href="javascript:void(0);" class="btn btn-apply">Apply Now</a>
							</div>
						</div>
					</div>
					
					<!-- Job Card 3 -->
					<div class="col-lg-6 mb-4">
						<div class="modern-job-card">
							<div class="card-badges">
								<span class="badge badge-featured">Featured</span>
							</div>
							<button class="save-job-btn"><i class="fa fa-heart"></i></button>
							
							<div class="d-flex align-items-center mb-3">
								<div class="company-logo">
									<img src="{{ asset('frontend/images/icons/amazon.png') }}" alt="Amazon">
								</div>
								<div class="ms-3" style="margin-left: 1rem;">
									<h4 class="job-title"><a href="javascript:void(0);">Data Scientist</a></h4>
									<div class="company-name">Amazon <span class="verified-badge"><i class="fa fa-check-circle"></i></span></div>
								</div>
							</div>
							
							<div class="job-meta">
								<div class="meta-item"><i class="fa fa-map-marker"></i> Pune, India</div>
								<div class="meta-item"><i class="fa fa-money"></i> ₹15L - ₹22L / yr</div>
								<div class="meta-item"><i class="fa fa-briefcase"></i> 3-5 Yrs Exp</div>
								<div class="meta-item"><i class="fa fa-clock-o"></i> Full-time</div>
							</div>
							
							<div class="job-footer">
								<div class="posted-time"><i class="fa fa-clock-o"></i> Posted 1 day ago</div>
								<a href="javascript:void(0);" class="btn btn-apply">Apply Now</a>
							</div>
						</div>
					</div>
					
					<!-- Job Card 4 -->
					<div class="col-lg-6 mb-4">
						<div class="modern-job-card">
							<div class="card-badges">
								<span class="badge badge-urgent">Urgent</span>
							</div>
							<button class="save-job-btn"><i class="fa fa-heart"></i></button>
							
							<div class="d-flex align-items-center mb-3">
								<div class="company-logo">
									<img src="{{ asset('frontend/images/icons/adobe.png') }}" alt="Adobe">
								</div>
								<div class="ms-3" style="margin-left: 1rem;">
									<h4 class="job-title"><a href="javascript:void(0);">Graphic Designer</a></h4>
									<div class="company-name">Adobe <span class="verified-badge"><i class="fa fa-check-circle"></i></span></div>
								</div>
							</div>
							
							<div class="job-meta">
								<div class="meta-item"><i class="fa fa-map-marker"></i> Noida, India</div>
								<div class="meta-item"><i class="fa fa-money"></i> ₹8L - ₹12L / yr</div>
								<div class="meta-item"><i class="fa fa-briefcase"></i> 1-3 Yrs Exp</div>
								<div class="meta-item"><i class="fa fa-clock-o"></i> Full-time</div>
							</div>
							
							<div class="job-footer">
								<div class="posted-time"><i class="fa fa-clock-o"></i> Posted 3 days ago</div>
								<a href="javascript:void(0);" class="btn btn-apply">Apply Now</a>
							</div>
						</div>
					</div>
					
					<!-- Job Card 5 -->
					<div class="col-lg-6 mb-4">
						<div class="modern-job-card">
							<div class="card-badges">
								<span class="badge badge-new">New</span>
							</div>
							<button class="save-job-btn"><i class="fa fa-heart"></i></button>
							
							<div class="d-flex align-items-center mb-3">
								<div class="company-logo">
									<img src="{{ asset('frontend/images/icons/dropbox.png') }}" alt="Dropbox">
								</div>
								<div class="ms-3" style="margin-left: 1rem;">
									<h4 class="job-title"><a href="javascript:void(0);">Backend Engineer (Node.js)</a></h4>
									<div class="company-name">Dropbox <span class="verified-badge"><i class="fa fa-check-circle"></i></span></div>
								</div>
							</div>
							
							<div class="job-meta">
								<div class="meta-item"><i class="fa fa-map-marker"></i> Gurgaon, India</div>
								<div class="meta-item"><i class="fa fa-money"></i> ₹14L - ₹20L / yr</div>
								<div class="meta-item"><i class="fa fa-briefcase"></i> 3-6 Yrs Exp</div>
								<div class="meta-item"><i class="fa fa-clock-o"></i> Hybrid</div>
							</div>
							
							<div class="job-footer">
								<div class="posted-time"><i class="fa fa-clock-o"></i> Posted 2 hours ago</div>
								<a href="javascript:void(0);" class="btn btn-apply">Apply Now</a>
							</div>
						</div>
					</div>
					
					<!-- Job Card 6 -->
					<div class="col-lg-6 mb-4">
						<div class="modern-job-card">
							<div class="card-badges">
								<span class="badge badge-featured">Featured</span>
							</div>
							<button class="save-job-btn"><i class="fa fa-heart"></i></button>
							
							<div class="d-flex align-items-center mb-3">
								<div class="company-logo">
									<img src="{{ asset('frontend/images/icons/github.png') }}" alt="GitHub">
								</div>
								<div class="ms-3" style="margin-left: 1rem;">
									<h4 class="job-title"><a href="javascript:void(0);">DevOps Engineer</a></h4>
									<div class="company-name">GitHub <span class="verified-badge"><i class="fa fa-check-circle"></i></span></div>
								</div>
							</div>
							
							<div class="job-meta">
								<div class="meta-item"><i class="fa fa-map-marker"></i> Remote, India</div>
								<div class="meta-item"><i class="fa fa-money"></i> ₹20L - ₹30L / yr</div>
								<div class="meta-item"><i class="fa fa-briefcase"></i> 5+ Yrs Exp</div>
								<div class="meta-item"><i class="fa fa-clock-o"></i> Remote</div>
							</div>
							
							<div class="job-footer">
								<div class="posted-time"><i class="fa fa-clock-o"></i> Posted 1 week ago</div>
								<a href="javascript:void(0);" class="btn btn-apply">Apply Now</a>
							</div>
						</div>
					</div>
				</div>
				
				<div class="text-center mt-5">
					<a href="javascript:void(0);" class="btn-view-all">View All Jobs <span class="arrow">→</span></a>
				</div>
			</div>
		</div>	
		<!-- Featured Jobs END -->
		<!-- AI Career Toolkit -->
		<div class="section-full ai-toolkit-section content-inner-2" style="background-color: #f7fafc;">
			<div class="container">
				<div class="section-head style-1 text-center">
					<h6>Intelligent Tools</h6>
					<h2 class="section-title-3">AI Career Toolkit</h2>
					<p class="dz-text-2">Supercharge your job search with our advanced AI tools designed to optimize your resume and help you land your dream job faster.</p>
				</div>
				
				<div class="row feature-cards-row justify-content-center">
					<!-- Tool 1 -->
					<div class="col-lg-4 col-md-6 mb-4">
						<div class="feature-card">
							<div class="feature-icon">
								<i class="fa fa-magic"></i>
							</div>
							<h3 class="feature-title">AI Resume Builder</h3>
							<p class="feature-desc">Create a professional, ATS-optimized resume in minutes using our intelligent AI writing assistant.</p>
							<a href="javascript:void(0);" class="feature-link">Try Now <span class="arrow">→</span></a>
						</div>
					</div>
					<!-- Tool 2 -->
					<div class="col-lg-4 col-md-6 mb-4">
						<div class="feature-card">
							<div class="feature-icon">
								<i class="fa fa-cogs"></i>
							</div>
							<h3 class="feature-title">AI Resume Converter</h3>
							<p class="feature-desc">Instantly convert your old resume or LinkedIn profile into a modern, highly converting format.</p>
							<a href="javascript:void(0);" class="feature-link">Try Now <span class="arrow">→</span></a>
						</div>
					</div>
					<!-- Tool 3 -->
					<div class="col-lg-4 col-md-6 mb-4">
						<div class="feature-card">
							<div class="feature-icon">
								<i class="fa fa-check-circle"></i>
							</div>
							<h3 class="feature-title">ATS Resume Score</h3>
							<p class="feature-desc">Scan your resume against any job description to get an instant ATS match score and feedback.</p>
							<a href="javascript:void(0);" class="feature-link">Try Now <span class="arrow">→</span></a>
						</div>
					</div>
					<!-- Tool 4 -->
					<div class="col-lg-4 col-md-6 mb-4">
						<div class="feature-card">
							<div class="feature-icon">
								<i class="fa fa-envelope"></i>
							</div>
							<h3 class="feature-title">Cover Letter Generator</h3>
							<p class="feature-desc">Generate personalized, high-impact cover letters tailored perfectly to the job you want.</p>
							<a href="javascript:void(0);" class="feature-link">Try Now <span class="arrow">→</span></a>
						</div>
					</div>
					<!-- Tool 5 -->
					<div class="col-lg-4 col-md-6 mb-4">
						<div class="feature-card">
							<div class="feature-icon">
								<i class="fa fa-th-large"></i>
							</div>
							<h3 class="feature-title">Resume Templates</h3>
							<p class="feature-desc">Access dozens of premium, industry-specific resume templates proven to catch recruiters' eyes.</p>
							<a href="javascript:void(0);" class="feature-link">Try Now <span class="arrow">→</span></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- AI Career Toolkit END -->
	</div>
	<!-- Content End -->
	<!-- Career Resources -->
	<div class="section-full career-resources-section content-inner-2 bg-white">
		<div class="container">
			<div class="section-head style-1 text-center">
				<h6>Knowledge Base</h6>
				<h2 class="section-title-3">Career Resources</h2>
				<p class="dz-text-2">Explore our comprehensive library of expert advice, guides, and tools to help you navigate every step of your career journey.</p>
			</div>
			
			<div class="row feature-cards-row">
				<!-- Resource 1 -->
				<div class="col-lg-4 col-md-6 mb-4">
					<div class="feature-card">
						<div class="feature-icon">
							<i class="fa fa-comments"></i>
						</div>
						<h3 class="feature-title">Interview Tips</h3>
						<p class="feature-desc">Master your next interview with top questions, answers, and strategies from industry experts.</p>
						<a href="javascript:void(0);" class="feature-link">Read More <span class="arrow">→</span></a>
					</div>
				</div>
				<!-- Resource 2 -->
				<div class="col-lg-4 col-md-6 mb-4">
					<div class="feature-card">
						<div class="feature-icon">
							<i class="fa fa-edit"></i>
						</div>
						<h3 class="feature-title">Resume Writing</h3>
						<p class="feature-desc">Learn how to craft a compelling resume that catches recruiters' attention and highlights your skills.</p>
						<a href="javascript:void(0);" class="feature-link">Read More <span class="arrow">→</span></a>
					</div>
				</div>
				<!-- Resource 3 -->
				<div class="col-lg-4 col-md-6 mb-4">
					<div class="feature-card">
						<div class="feature-icon">
							<i class="fa fa-map-signs"></i>
						</div>
						<h3 class="feature-title">Career Roadmaps</h3>
						<p class="feature-desc">Step-by-step guides to help you transition into new roles, industries, or leadership positions.</p>
						<a href="javascript:void(0);" class="feature-link">Read More <span class="arrow">→</span></a>
					</div>
				</div>
				<!-- Resource 4 -->
				<div class="col-lg-4 col-md-6 mb-4">
					<div class="feature-card">
						<div class="feature-icon">
							<i class="fa fa-briefcase"></i>
						</div>
						<h3 class="feature-title">Salary Guide</h3>
						<p class="feature-desc">Discover industry salary benchmarks to confidently negotiate your compensation package.</p>
						<a href="javascript:void(0);" class="feature-link">Read More <span class="arrow">→</span></a>
					</div>
				</div>
				<!-- Resource 5 -->
				<div class="col-lg-4 col-md-6 mb-4">
					<div class="feature-card">
						<div class="feature-icon">
							<i class="fa fa-laptop"></i>
						</div>
						<h3 class="feature-title">Skill Development</h3>
						<p class="feature-desc">Find the best courses and certifications to stay competitive and upskill in your field.</p>
						<a href="javascript:void(0);" class="feature-link">Read More <span class="arrow">→</span></a>
					</div>
				</div>
				<!-- Resource 6 -->
				<div class="col-lg-4 col-md-6 mb-4">
					<div class="feature-card">
						<div class="feature-icon">
							<i class="fa fa-book"></i>
						</div>
						<h3 class="feature-title">Career Blogs</h3>
						<p class="feature-desc">Stay updated with the latest trends, workplace culture, and advice from our community of writers.</p>
						<a href="javascript:void(0);" class="feature-link">Read More <span class="arrow">→</span></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Career Resources END -->
	
	<!-- Download App CTA -->
	<style>
		.download-app-section {
			background: linear-gradient(135deg, #f7fafc 0%, #edf2f7 100%);
			overflow: hidden;
			position: relative;
			padding: 80px 0;
		}
		.app-cta-content h2 {
			font-size: 42px;
			font-weight: 800;
			line-height: 1.2;
			color: #2d3748;
		}
		.app-buttons .btn {
			padding: 12px 24px;
			border-radius: 12px;
			transition: transform 0.3s ease, box-shadow 0.3s ease;
		}
		.app-buttons .btn:hover {
			transform: translateY(-3px);
		}
		.btn-app-store {
			background: #2d3748;
			color: white;
			border: 2px solid #2d3748;
			margin-right: 16px;
			margin-bottom: 16px;
		}
		.btn-app-store:hover {
			background: #1a202c;
			color: white;
			box-shadow: 0 10px 20px rgba(0,0,0,0.15);
		}
		.btn-google-play {
			background: var(--primary);
			color: white;
			border: 2px solid var(--primary);
			margin-bottom: 16px;
		}
		.btn-google-play:hover {
			background: #2344cc;
			color: white;
			box-shadow: 0 10px 20px rgba(46, 85, 250, 0.3);
		}
		.qr-code-box {
			background: white;
			padding: 16px;
			border-radius: 16px;
			display: inline-flex;
			box-shadow: 0 10px 30px rgba(0,0,0,0.05);
			transition: transform 0.3s ease;
		}
		.qr-code-box:hover {
			transform: translateY(-5px);
			box-shadow: 0 15px 35px rgba(0,0,0,0.08);
		}
		.app-mockup-wrapper {
			position: relative;
			display: inline-block;
		}
		.mockup-bg-circle {
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			width: 450px;
			height: 450px;
			background: rgba(46, 85, 250, 0.08);
			border-radius: 50%;
			z-index: 0;
		}
		.app-mockup-img {
			border-radius: 36px;
			box-shadow: 0 24px 48px rgba(43, 108, 176, 0.2);
			border: 10px solid white;
			position: relative;
			z-index: 1;
			transform: rotate(-8deg);
			transition: transform 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
		}
		.app-mockup-wrapper:hover .app-mockup-img {
			transform: rotate(0deg) scale(1.02);
		}
		@media (max-width: 991px) {
			.app-cta-content h2 { font-size: 32px; }
			.app-mockup-wrapper { margin-top: 50px; }
			.mockup-bg-circle { width: 350px; height: 350px; }
		}
	</style>
	<div class="section-full download-app-section">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<div class="app-cta-content" style="position: relative; z-index: 2;">
						<span class="badge mb-3" style="background: rgba(43, 108, 176, 0.1); color: var(--primary); padding: 8px 16px; border-radius: 20px; font-weight: 700; letter-spacing: 1px; text-transform: uppercase;">Get The App</span>
						<h2 class="mb-4">Find jobs anytime, anywhere with the HireFlow app.</h2>
						<p class="dz-text-2 mb-5" style="font-size: 18px;">Download our mobile app to instantly apply for jobs, track your applications, and get real-time alerts from top employers.</p>
						
						<div class="app-buttons d-flex flex-wrap align-items-center">
							<a href="javascript:void(0);" class="btn btn-app-store d-flex align-items-center text-decoration-none">
								<i class="fa fa-apple" style="font-size: 32px; margin-right: 12px;"></i>
								<div class="text-start">
									<div style="font-size: 11px; line-height: 1; color: #cbd5e0; font-weight: 500;">Download on the</div>
									<div style="font-size: 18px; font-weight: 700; line-height: 1.2;">App Store</div>
								</div>
							</a>
							
							<a href="javascript:void(0);" class="btn btn-google-play d-flex align-items-center text-decoration-none">
								<i class="fa fa-play" style="font-size: 24px; margin-right: 12px;"></i>
								<div class="text-start">
									<div style="font-size: 11px; line-height: 1; color: rgba(255,255,255,0.8); font-weight: 500;">GET IT ON</div>
									<div style="font-size: 18px; font-weight: 700; line-height: 1.2;">Google Play</div>
								</div>
							</a>
						</div>
						
						<div class="qr-code-box align-items-center mt-3 d-flex">
							<img src="https://placehold.co/100x100/2d3748/FFF?text=QR" alt="QR Code" style="border-radius: 8px;">
							<div class="ms-3" style="margin-left: 16px;">
								<div style="font-weight: 700; color: #2d3748; font-size: 16px;">Scan to download</div>
								<div style="font-size: 14px; color: #718096; margin-top: 2px;">iOS & Android</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 text-center text-lg-end">
					<div class="app-mockup-wrapper">
						<div class="mockup-bg-circle"></div>
						<img src="https://placehold.co/320x640/2E55FA/FFF?text=HireFlow+App" alt="HireFlow App Mockup" class="app-mockup-img">
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Download App CTA END -->
	
	<!-- Newsletter Section -->
	<style>
		.newsletter-section {
			background: linear-gradient(to right, #ffffff, #f7fafc);
			padding: 80px 0;
			border-top: 1px solid #edf2f7;
			border-bottom: 1px solid #edf2f7;
		}
		.newsletter-form-wrapper {
			max-width: 650px;
			margin: 0 auto;
			background: white;
			padding: 8px;
			border-radius: 50px;
			box-shadow: 0 10px 25px rgba(0,0,0,0.05);
			transition: box-shadow 0.3s ease;
		}
		.newsletter-form-wrapper:hover {
			box-shadow: 0 15px 35px rgba(46, 85, 250, 0.1);
		}
		.newsletter-form-wrapper input {
			border: none !important;
			padding: 15px 20px !important;
			font-size: 16px;
			background: transparent;
			box-shadow: none !important;
			height: auto;
		}
		.newsletter-form-wrapper input:focus {
			outline: none;
			box-shadow: none;
		}
		.newsletter-form-wrapper button {
			border-radius: 40px !important;
			padding: 15px 35px;
			font-weight: 600;
			font-size: 16px;
			text-transform: uppercase;
			letter-spacing: 1px;
			box-shadow: 0 4px 15px rgba(46, 85, 250, 0.3);
			transition: all 0.3s ease;
		}
		.newsletter-form-wrapper button:hover {
			transform: translateY(-2px);
			box-shadow: 0 8px 25px rgba(46, 85, 250, 0.4);
		}
		.newsletter-icon-circle {
			width: 80px;
			height: 80px;
			background: rgba(46, 85, 250, 0.08);
			border-radius: 50%;
			display: inline-flex;
			align-items: center;
			justify-content: center;
			color: var(--primary);
			margin-bottom: 24px;
			transition: transform 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
		}
		.newsletter-icon-circle:hover {
			transform: scale(1.1) rotate(10deg);
		}
	</style>
	<div class="section-full newsletter-section">
		<div class="container">
			<div class="row align-items-center justify-content-center">
				<div class="col-lg-8 text-center">
					<div class="newsletter-icon-circle">
						<i class="fa fa-paper-plane" style="font-size: 32px; margin-left: -4px;"></i>
					</div>
					<h2 class="section-title-3 mb-3" style="font-size: 38px; font-weight: 800; color: #2d3748;">Never Miss a Job Opportunity</h2>
					<p class="dz-text-2 mb-5" style="font-size: 18px; max-width: 600px; margin: 0 auto;">Get the latest job openings, career tips, and platform updates delivered straight to your inbox. No spam, just value.</p>
					
					<div class="newsletter-form-wrapper">
						<form class="dzSubscribe style-1" action="javascript:void(0);" method="post">
							<div class="input-group d-flex align-items-center" style="border: none;">
								<div class="input-group-prepend" style="padding-left: 20px;">
									<i class="fa fa-envelope text-primary" style="font-size: 20px;"></i>
								</div>
								<input name="dzEmail" required="required" class="form-control" placeholder="Enter your email address..." type="email">
								<div class="input-group-append">
									<button name="submit" value="Submit" type="submit" class="btn btn-primary">Subscribe</button>
								</div>
							</div>
						</form>
					</div>
					<div class="mt-4 text-muted" style="font-size: 14px; font-weight: 500;"><i class="fa fa-shield me-1"></i> We respect your privacy. Unsubscribe at any time.</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Newsletter Section END -->
	@include('frontend.layouts.footer')
    <!-- scroll top button -->
    <button class="scroltop fa fa-arrow-up" ></button>
</div>
<!-- JAVASCRIPT FILES ========================================= -->
<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="{{ asset('frontend/js/jquery.min.js') }}"></script><!-- JQUERY.MIN JS -->
<script src="{{ asset('frontend/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script><!-- BOOTSTRAP.MIN JS -->
<script src="{{ asset('frontend/plugins/wow/wow.js') }}"></script><!-- FORM JS -->
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
<!-- Switcher removed: <script src="{{ asset('frontend/plugins/switcher/switcher.js') }}"></script> -->
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v833ccba57c9e4d2798f2e76cebdd09a11778172276447" integrity="sha512-57MDmcccJXYtNnH+ZiBwzC4jb2rvgVCEokYN+L/nLlmO8rfYT/gIpW2A569iJ/3b+0UEasghjuZH/ma3wIs/EQ==" data-cf-beacon='{"version":"2024.11.0","token":"0931814f84b94398b852d3ac91b5f293","r":1,"server_timing":{"name":{"cfCacheStatus":true,"cfEdge":true,"cfExtPri":true,"cfL4":true,"cfOrigin":true,"cfSpeedBrain":true},"location_startswith":null}}' crossorigin="anonymous"></script>
<script>
$(document).ready(function() {
    $('.save-job-btn').on('click', function(e) {
        e.preventDefault();
        $(this).toggleClass('active');
    });
});
</script>
</body>
</html>







