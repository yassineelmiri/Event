<!doctype html>
<html lang="en">

<head>
    <!-- important meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Welcome, Arid - Travel & Tourism HTML/Tailwind CSS Template">
    <!-- page title -->
    <title>Home 01 | Arid - Travel & Tourism HTML/Tailwind CSS Template</title>
    <!-- favicon -->
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico">
    <!-- additional css files -->
    <link rel="stylesheet" href="assets/css/jquery-ui.css">
    <link rel="stylesheet" href="assets/css/jarallax.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/bootstrap-icons.min.css">
    <link rel="stylesheet" href="assets/css/daterangepicker.css">
    <link rel="stylesheet" href="assets/css/fancybox.min.css">
    <link rel="stylesheet" href="assets/css/leaflet.css">
    <link rel="stylesheet" href="assets/css/select2.min.css">
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <!-- custom css files -->
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <!--========== PRELOADER STYLE START ==========-->
    <div class="flex items-center justify-center fixed w-full h-full z-50 bg-white preloader">
        <div class="relative">
            <div class="h-30 w-30 rounded-full border-t-8 border-b-8 border-gray-200"></div>
            <img src="assets/images/logo-icon.png" alt="logo"
                class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 max-w-[50px]">
            <div
                class="absolute top-0 left-0 h-30 w-30 rounded-full border-t-8 border-b-8 border-primary-1 animate-spin">
            </div>
        </div>
    </div>
    <!-- header -->
    <header class="header-style">
        @include('partials.nav')
        </div>
    </header>

    <div>
        <div class="row my-2">
            @include('partials.flashbag')
        </div>
        {{ $slot }}
    </div>

    @include('partials.footer')
     <!-- additional JS file -->
     <script src="assets/js/jquery-3.6.3.min.js"></script>
     <script src="assets/js/swiper-bundle.min.js"></script>
     <script src="assets/js/select2.min.js"></script>
     <script src="assets/js/moment.min.js"></script>
     <script src="assets/js/daterangepicker.min.js"></script>
     <script src="assets/js/fancybox.min.js"></script>
     <script src="assets/js/leaflet.min.js"></script>
     <script src="assets/js/jarallax.min.js"></script>
     <script src="assets/js/wow.min.js"></script>
     <script src="assets/js/jquery-ui.js">
     </script>
     <!-- custom js file -->
     <script src="assets/js/main.js"></script>

</body>

</html>
