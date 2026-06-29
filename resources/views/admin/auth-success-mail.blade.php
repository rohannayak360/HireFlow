<!doctype html>
<html lang="en">
    
<!-- Mirrored from coderthemes.com/paces/bootstrap/auth-success-mail.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 25 Jun 2026 09:59:05 GMT -->
<head>
        <meta charset="utf-8" />
        <title>Success Mail | Paces - Multipurpose Tailwind CSS & Bootstrap Admin Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="description" content="Paces is a modern, responsive admin dashboard available on ThemeForest. Ideal for building CRM, CMS, project management tools, and custom web applications with a clean UI, flexible layouts, and rich features." />
        <meta name="keywords" content="Paces, admin dashboard, ThemeForest, Bootstrap 5 admin, responsive admin, CRM dashboard, CMS admin, web app UI, admin theme, premium admin template" />
        <meta name="author" content="Coderthemes" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('admin/assets/images/favicon.ico') }}" />
 <!-- Theme Config Js -->
<script src="{{ asset('admin/assets/js/config.js') }}"></script>
        <script src="{{ asset('admin/demo.js') }}"></script>

<!-- Vendor css -->
<link href="{{ asset('admin/assets/css/vendors.min.css') }}" rel="stylesheet" type="text/css" />

<!-- App css -->
<link id="app-style" href="{{ asset('admin/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />

    </head>

    <body>
        <div class="position-absolute top-0 end-0">
            <img src="{{ asset('admin/assets/images/auth-card-bg.svg') }}" class="auth-card-bg-img" alt="auth-card-bg" />
        </div>
        <div class="position-absolute bottom-0 start-0" style="transform: rotate(180deg)">
            <img src="{{ asset('admin/assets/images/auth-card-bg.svg') }}" class="auth-card-bg-img" alt="auth-card-bg" />
        </div>
        <div class="auth-box overflow-hidden align-items-center d-flex">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-5 col-md-6 col-sm-8">
                        <div class="card p-4">
                            <div class="auth-brand text-center mb-3">
                                <a href="{{ url('admin') }}" class="logo-dark">
                                    <img src="{{ asset('admin/assets/images/logo-black.png') }}" alt="dark logo" />
                                </a>
                                <a href="{{ url('admin') }}" class="logo-light">
                                    <img src="{{ asset('admin/assets/images/logo.png') }}" alt="logo" />
                                </a>
                                <p class="text-muted w-lg-75 mt-3 mx-auto">Awesome! You’ve read the important message like a pro.</p>
                            </div>

                            <form>
                                <div class="mb-4">
                                    <div class="avatar-xxl mx-auto mt-2">
                                        <div class="avatar-title bg-light-subtle border border-light border-dashed rounded-circle">
                                            <img src="{{ asset('admin/assets/images/checkmark.png') }}" alt="dark logo" height="64" />
                                        </div>
                                    </div>
                                </div>

                                <h4 class="fw-bold text-center mb-4">Well Done! Email verified Successfully</h4>

                                <div class="d-grid">
                                    <a href="{{ url('admin') }}" class="btn btn-primary fw-semibold py-2">Bake to Dashboard</a>
                                </div>
                            </form>
                        </div>

                        <p class="text-center text-muted mt-4 mb-0">
                            ©
                            <script>
                                document.write(new Date().getFullYear())
                            </script>
                            Paces — by
                            <span class="fw-semibold">Coderthemes</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- end auth-fluid-->
        <!-- Vendor js -->
        <script src="{{ asset('admin/assets/js/vendors.min.js') }}"></script>

        <!-- App js -->
        <script src="{{ asset('admin/assets/js/app.js') }}"></script>

    </body>

<!-- Mirrored from coderthemes.com/paces/bootstrap/auth-success-mail.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 25 Jun 2026 09:59:05 GMT -->
</html>


