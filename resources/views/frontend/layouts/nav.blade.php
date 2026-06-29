<!-- Main Header -->
<div class="sticky-header main-bar-wraper navbar-expand-lg">
    <div class="main-bar clearfix">
        <div class="container clearfix">
            <!-- Website Logo -->
            <div class="logo-header mostion logo-dark">
                <a href="{{ url('/') }}"><img src="{{ asset('frontend/images/our company/websitelogo_dark.png') }}" alt=""></a>
            </div>
            <div class="logo-header mostion logo-white">
                <a href="{{ url('/') }}"><img src="{{ asset('frontend/images/our company/websitelogo.png') }}" alt=""></a>
            </div>
            
            <!-- Nav Toggle Button -->
            <button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>
            
            <!-- Extra Nav (Right Side User Actions) -->
            <div class="extra-nav">
                <div class="extra-cell">
                    <a href="javascript:void(0);" class="layout-btn">
                        <input type="checkbox">
                        <span class="mode-label"></span>
                    </a>
                    <a href="{{ url('login') }}" class="site-button-link"><i class="fa fa-lock"></i> Login</a>
                    <a href="{{ url('register') }}" class="site-button-link"><i class="fa fa-user"></i> Register</a>
                    <a href="{{ url('company-post-jobs') }}" class="site-button"><i class="fa fa-briefcase"></i> Post a Job</a>
                </div>
            </div>
            
            <!-- Main Nav (Left Side Menu) -->
            <div class="header-nav navbar-collapse collapse justify-content-start" id="navbarNavDropdown">
                <div class="logo-header logo-dark">
                    <a href="{{ url('/') }}"><img src="{{ asset('frontend/images/our company/websitelogo.png') }}" alt=""></a>
                </div>
                <div class="logo-header logo-white">
                    <a href="{{ url('/') }}"><img src="{{ asset('frontend/images/our company/websitelogo_dark.png') }}" alt=""></a>
                </div>
                <ul class="nav navbar-nav">
                    
                    <li><a href="{{ url('/') }}">Home</a></li>
                    
                    <li>
                        <a href="javascript:void(0);">Jobs <i class="fa fa-chevron-down"></i></a>
                        <ul class="sub-menu">
                            <li><a href="javascript:void(0);" class="dez-page">Popular Categories <i class="fa fa-angle-right"></i></a>
                                <ul class="sub-menu">
                                    <li><a href="{{ url('jobs-category-it') }}" class="dez-page">IT Jobs</a></li>
                                    <li><a href="{{ url('jobs-category-engineering') }}" class="dez-page">Engineering Jobs</a></li>
                                    <li><a href="{{ url('jobs-category-marketing') }}" class="dez-page">Marketing Jobs</a></li>
                                    <li><a href="{{ url('jobs-category-sales') }}" class="dez-page">Sales Jobs</a></li>
                                    <li><a href="{{ url('jobs-category-data-science') }}" class="dez-page">Data Science Jobs</a></li>
                                </ul>
                            </li>
                            <li><a href="javascript:void(0);" class="dez-page">Employment Types <i class="fa fa-angle-right"></i></a>
                                <ul class="sub-menu">
                                    <li><a href="{{ url('jobs-full-time') }}" class="dez-page">Full-time</a></li>
                                    <li><a href="{{ url('jobs-part-time') }}" class="dez-page">Part-time</a></li>
                                    <li><a href="{{ url('jobs-fresher') }}" class="dez-page">Fresher Jobs</a></li>
                                </ul>
                            </li>
                            <li><a href="javascript:void(0);" class="dez-page">Flexible Work <i class="fa fa-angle-right"></i></a>
                                <ul class="sub-menu">
                                    <li><a href="{{ url('jobs-remote') }}" class="dez-page">Remote Jobs</a></li>
                                    <li><a href="{{ url('jobs-freelance') }}" class="dez-page">Freelance Jobs</a></li>
                                </ul>
                            </li>
                            <li><a href="javascript:void(0);" class="dez-page">Hiring Drives <i class="fa fa-angle-right"></i></a>
                                <ul class="sub-menu">
                                    <li><a href="{{ url('jobs-equal-opportunity') }}" class="dez-page">Equal Opportunity Jobs</a></li>
                                    <li><a href="{{ url('jobs-immediate') }}" class="dez-page">Immediate Openings</a></li>
                                </ul>
                            </li>
                            <li><a href="javascript:void(0);" class="dez-page">Jobs by Location <i class="fa fa-angle-right"></i></a>
                                <ul class="sub-menu" style="max-height: 250px; overflow-y: auto;">
                                    <li><a href="{{ url('jobs-location-delhi') }}" class="dez-page">Delhi</a></li>
                                    <li><a href="{{ url('jobs-location-mumbai') }}" class="dez-page">Mumbai</a></li>
                                    <li><a href="{{ url('jobs-location-bangalore') }}" class="dez-page">Bangalore</a></li>
                                    <li><a href="{{ url('jobs-location-hyderabad') }}" class="dez-page">Hyderabad</a></li>
                                    <li><a href="{{ url('jobs-location-chennai') }}" class="dez-page">Chennai</a></li>
                                    <li><a href="{{ url('jobs-location-pune') }}" class="dez-page">Pune</a></li>
                                    <li><a href="{{ url('jobs-locations') }}" class="dez-page font-weight-bold text-primary">View All Locations</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    
                    <li>
                        <a href="javascript:void(0);">Companies <i class="fa fa-chevron-down"></i></a>
                        <ul class="sub-menu">
                            <li><a href="javascript:void(0);" class="dez-page">Company Types <i class="fa fa-angle-right"></i></a>
                                <ul class="sub-menu">
                                    <li><a href="{{ url('companies-mnc') }}" class="dez-page">MNCs</a></li>
                                    <li><a href="{{ url('companies-startup') }}" class="dez-page">Startups</a></li>
                                    <li><a href="{{ url('companies-unicorn') }}" class="dez-page">Unicorns</a></li>
                                    <li><a href="{{ url('companies-product-based') }}" class="dez-page">Product-based</a></li>
                                </ul>
                            </li>
                            <li><a href="javascript:void(0);" class="dez-page">Industry Categories <i class="fa fa-angle-right"></i></a>
                                <ul class="sub-menu">
                                    <li><a href="{{ url('companies-top') }}" class="dez-page">Top Companies</a></li>
                                    <li><a href="{{ url('companies-it') }}" class="dez-page">IT Companies</a></li>
                                    <li><a href="{{ url('companies-finance') }}" class="dez-page">Finance Companies</a></li>
                                    <li><a href="{{ url('companies-ecommerce') }}" class="dez-page">E-commerce Companies</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript:void(0);">Services <i class="fa fa-chevron-down"></i></a>
                        <ul class="sub-menu">
                            <li><a href="javascript:void(0);" class="dez-page">Resume Writing <i class="fa fa-angle-right"></i></a>
                                <ul class="sub-menu">
                                    <li><a href="{{ url('resume-text') }}" class="dez-page">Text Resume</a></li>
                                    <li><a href="{{ url('resume-visual') }}" class="dez-page">Visual Resume</a></li>
                                    <li><a href="{{ url('resume-ai-converter') }}" class="dez-page">AI Resume Converter</a></li>
                                </ul>
                            </li>
                            <li><a href="javascript:void(0);" class="dez-page">Free Resources <i class="fa fa-angle-right"></i></a>
                                <ul class="sub-menu">
                                    <li><a href="{{ url('resume-maker') }}" class="dez-page">Resume Maker</a></li>
                                    <li><a href="{{ url('resume-quality-score') }}" class="dez-page">Resume Quality Score</a></li>
                                    <li><a href="{{ url('resume-samples') }}" class="dez-page">Sample Resumes</a></li>
                                </ul>
                            </li>
                            <li><a href="javascript:void(0);" class="dez-page">Subscriptions <i class="fa fa-angle-right"></i></a>
                                <ul class="sub-menu">
                                    <li><a href="{{ url('subscription-basic') }}" class="dez-page">Basic Plan</a></li>
                                    <li><a href="{{ url('subscription-pro') }}" class="dez-page">Pro Plan</a></li>
                                    <li><a href="{{ url('subscription-premium') }}" class="dez-page">Premium Subscription</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    
                </ul>
            </div>
        </div>
    </div>
</div>
