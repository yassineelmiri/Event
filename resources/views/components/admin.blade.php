<!DOCTYPE html>
<html lang="en" class="light scroll-smooth" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title>Admin - Event</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Tailwind CSS Multipurpose Landing & Admin Dashboard Template">
    <meta name="keywords"
        content="agency, application, business, clean, creative, cryptocurrency, it solutions, modern, multipurpose, nft marketplace, portfolio, saas, software, tailwind css">
    <meta name="author" content="Shreethemes">
    <meta name="website" content="https://shreethemes.in/">
    <meta name="email" content="support@shreethemes.in">
    <meta name="version" content="2.2.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- favicon -->
    <link rel="shortcut icon" href="da/images/favicon.ico">

    <!-- Css -->
    <link href="da/libs/tobii/css/tobii.min.css" rel="stylesheet">
    <!-- Main Css -->
    <link href="da/libs/simplebar/simplebar.min.css" rel="stylesheet">
    <link href="da/libs/%40iconscout/unicons/css/line.css" type="text/css" rel="stylesheet">
    <link href="da/libs/%40mdi/font/css/materialdesignicons.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="da/css/tailwind.min.css">

</head>


<body class="font-nunito text-base text-black dark:text-white dark:bg-slate-900">
    <div class="page-wrapper toggled">
        {{-- nav --}}
        @include('include_admin.nav')
        <!-- header -->
        <main class="page-content bg-gray-50 dark:bg-slate-800">
            @include('include_admin.dashboard')

            <div class="row my-2">
                @include('partials.flashbag')
            </div>
            {{ $slot }}


            @include('include_admin.footer')
        </main>
        <!-- Switcher -->
        <div class="fixed top-[30%] -end-3 z-50">
            <span class="relative inline-block rotate-90">
                <input type="checkbox" class="checkbox opacity-0 absolute" id="chk" />
                <label
                    class="label bg-slate-900 dark:bg-white shadow dark:shadow-gray-700 cursor-pointer rounded-full flex justify-between items-center p-1 w-14 h-8"
                    for="chk">
                    <i class="uil uil-moon text-[20px] text-yellow-500"></i>
                    <i class="uil uil-sun text-[20px] text-yellow-500"></i>
                    <span
                        class="ball bg-white dark:bg-slate-900 rounded-full absolute top-[2px] left-[2px] size-7"></span>
                </label>
            </span>
        </div>
        <!-- Switcher -->

        <!-- LTR & RTL Mode Code -->
        <div class="fixed top-[40%] -end-3 z-50">
            <a href="#" id="switchRtl">
                <span
                    class="py-1 px-3 relative inline-block rounded-b-md -rotate-90 bg-white dark:bg-slate-900 shadow-md dark:shadow dark:shadow-gray-700 font-bold rtl:block ltr:hidden">LTR</span>
                <span
                    class="py-1 px-3 relative inline-block rounded-t-md -rotate-90 bg-white dark:bg-slate-900 shadow-md dark:shadow dark:shadow-gray-700 font-bold ltr:block rtl:hidden">RTL</span>
            </a>
        </div>
        <!-- LTR & RTL Mode Code -->

        <!-- JAVASCRIPTS -->
        <script src="da/libs/tobii/js/tobii.min.js"></script>
        <script src="da/libs/feather-icons/feather.min.js"></script>
        <script src="da/libs/simplebar/simplebar.min.js"></script>
        <script src="da/js/plugins.init.js"></script>
        <script src="da/js/app.js"></script>
        <!-- JAVASCRIPTS -->
</body>

</html>
