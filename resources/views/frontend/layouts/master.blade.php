

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>weber360.com</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{asset('public/frontend/web360/assets/img/favicon.png')}}" rel="icon">
    <link href="{{asset('public/frontend/web360/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('public/frontend/web360/assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/web360/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/web360/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/web360/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/web360/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/web360/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('public/frontend/web360/assets/css/style.css')}}" rel="stylesheet">

    <!-- =======================================================
    * Template Name: Green
    * Updated: Jan 09 2024 with Bootstrap v5.3.2
    * Template URL: https://bootstrapmade.com/green-free-one-page-bootstrap-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>

<!-- ======= Top Bar ======= -->
{{--<section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
            <i class="bi bi-envelope-fill"></i><a href="mailto:contact@weber360.com">contact@weber360.com</a>
            <i class="bi bi-phone-fill phone-icon"></i> +1 5589 55488 55
        </div>
        <div class="social-links d-none d-md-block">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>
    </div>
</section>--}}

<!-- ======= Header ======= -->
@include('frontend.layouts.header')<!-- End Header -->

<!-- ======= Hero Section ======= -->

<!-- End Hero -->

<main id="main">

    @yield('content')


</main><!-- End #main -->

<!-- ======= Footer ======= -->
@include('frontend.layouts.footer')<!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{asset('public/frontend/web360/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('public/frontend/web360/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{asset('public/frontend/web360/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('public/frontend/web360/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{asset('public/frontend/web360/assets/vendor/php-email-form/validate.js')}}"></script>

<!-- Template Main JS File -->
<script src="{{asset('public/frontend/web360/assets/js/main.js')}}"></script>

</body>

</html>