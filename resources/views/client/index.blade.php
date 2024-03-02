<x-master>
    <!--========== BREADCRUMB STYLE START ==========-->
    <div class="paralax-container lg:py-36 py-20 relative overflow-hidden">
        <div class="jarallax absolute inset-0 z-minus before:content-[''] before:absolute before:inset-0 before:bg-[#030610] before:bg-opacity-50 before:z-minus"
            data-jarallax>
            <img class="jarallax-img" src="assets/images/backgrounds/breadcrumb-bg.webp" alt="placeholder" />
        </div>

        <img src="assets/images/illustration/breadcrunb__shape.png" alt="placeholder"
            class="absolute bottom-0 left-0 z-1 lg:w-[12.5%] w-[20%]">
        <img src="assets/images/illustration/bird-illustration-w.png" alt="placeholder"
            class="absolute top-[10%] right-[4%] z-1 w-[7.5%]">
        <div class="container relative z-2">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li class="active_page">Profile ({{$profiles->role}})</li>
                </ol>
            </nav>
            <h2
                class="xl:text-[54px] mt-2 lg:text-4xl md:text-2xl text-[30px] text-white leading-[1.3] font-medium max-w-[640px]">
                Welcome Mr : {{ Auth::user()->name }}</h2>
        </div>
    </div>
    <!--========== BREADCRUMB STYLE END ==========-->

    <!--========== DESTINATION DETAILS WRAPPER START ==========-->
    <div class="relative z-1 bg-gradient-to-t to-[#FFF1EC] from-white lg:pt-[110px] pt-[86px]">
        <div class="absolute top-1/2 -translate-y-1/2 right-0 max-w-[14%] z-minus lg:inline-block hidden">
            <img src="assets/images/illustration/tree-illustration.png" alt="leaf">
        </div>
        <div class="absolute top-[5%] left-[1%] max-w-[9%] z-minus lg:inline-block hidden">
            <img src="assets/images/illustration/bird-illustration.png" alt="leaf">
        </div>
        <div class="container">
            <div class="grid grid-cols-12 gap-base">
                <div class="lg:col-span-8 col-span-12">
                    <div class="disc__wrapper">
                        <h3>Visit Black Friday Big Offer.</h3>
                        <p>Qui ad idque soluta deterruisset, nec sale pertinax mandamus et. Eu mei soluta scriptorem
                            dissentiet, cu vel sensibus cotidieque. Ne per malorum vivendum principes, congue imperdiet
                            cu vel. Sit cu stet autem eligendi, eros reprimique mel id, no pri tation altera. At soluta
                            fierent laboramus eum.Nam at dicant deterruisset.</p>
                        <div class="grid grid-cols-2 lg:gap-base gap-5 lg:pt-[10px] lg:pb-9 pb-6">
                            <div class="col-span-1">
                                <img src="assets/images/details/des-disc-1.webp" alt="details" class="w-full" />
                            </div>
                            <div class="col-span-1">
                                <img src="assets/images/details/des-disc-2.webp" alt="details" class="w-full" />
                            </div>
                        </div>
                        <p>Qui ad idque soluta deterruisset, nec sale pertinax mandamus et. Eu mei soluta scriptorem
                            dissentiet, cu vel sensibus cotidieque. Ne per malorum vivendum principes, congue imperdiet
                            cu vel. Sit cu stet autem eligendi, eros reprimique mel id, no pri tation altera. At soluta
                            fierent laboramus eum.Nam at dicant deterruisset.</p>
                        <ul>
                            <li><i class="bi bi-check-circle"></i> Professional Tour Guide</li>
                            <li><i class="bi bi-check-circle"></i>Transportation cost for carrying new materials/parts
                            </li>
                            <li><i class="bi bi-check-circle"></i>Transportation cost for carrying new materials/parts
                            </li>
                        </ul>
                        <p>Duis id interdum ex, eu accumsan massa. Fusce vel nibh diam. Nulla ultrices ex at erat
                            pharetra, vitae viverra mauris condimentum. Sed ullamcorper dignissim enim, vel egestas
                            lacus tincidunt ac.</p>
                        <h3>Good To Know</h3>
                        <p>Duis id interdum ex, eu accumsan massa. Fusce vel nibh diam. Nulla ultrices ex at erat
                            pharetra, vitae viverra mauris condimentum. Sed ullamcorper dignissim enim, vel egestas
                            lacus tincidunt ac.</p>
                        <ol class="custom_order__list">
                            <li>
                                <span class="list__count">01</span>
                                <div class="list__content">
                                    <h5>Professional Tour Guide</h5>
                                    <p>Qui ad idque soluta deterruisset, nec sale pertinax mandamus et. Eu mei soluta
                                        scriptorem dissentiet, sensibus cotidieque. Ne per malorum vivendum principes,
                                        congue imperdiet cu vel. Sit cu stet autem eligendi, eros reprimique mel id, no
                                        pri tation altera. At soluta fierent laboramus eum.</p>
                                </div>
                            </li>
                        </ol>
                        <div class="grid grid-cols-8 lg:gap-base gap-4 lg:pt-[10px] lg:pb-9 pb-6">
                            <a href="assets/images/details/des-disc-3.webp" class="col-span-3" data-fancybox="gallery">
                                <img src="assets/images/details/des-disc-3.webp" alt="destination"
                                    class="w-full max-h-[260px] object-cover" />
                            </a>
                            <a href="assets/images/details/des-disc-4.webp" class="col-span-5" data-fancybox="gallery">
                                <img src="assets/images/details/des-disc-4.webp" alt="destination"
                                    class="w-full max-h-[260px] object-cover" />
                            </a>
                            <a href="assets/images/details/des-disc-5.webp" class="col-span-3" data-fancybox="gallery">
                                <img src="assets/images/details/des-disc-5.webp" alt="destination"
                                    class="w-full max-h-[260px] object-cover" />
                            </a>
                            <a href="assets/images/details/des-disc-6.webp" class="col-span-2" data-fancybox="gallery">
                                <img src="assets/images/details/des-disc-6.webp" alt="destination"
                                    class="w-full max-h-[260px] object-cover" />
                            </a>
                            <a href="assets/images/details/des-disc-7.webp" class="col-span-3" data-fancybox="gallery">
                                <img src="assets/images/details/des-disc-7.webp" alt="destination"
                                    class="w-full max-h-[260px] object-cover" />
                            </a>

                        </div>
                        

                        <form action="#" class="pt-3">
                            <h3
                                class="lg:text-2xl md:text-xl text-lg text-dark-1 leading-[1.42] font-medium mt-[10px] mb-[14px]">
                                Reclamation de Site Web</h3>
                            <div class="grid grid-cols-2 gap-base">
                                <div class="col-span-2">
                                    <input type="email" value="Email : {{$profiles->email}}" class="input_style__primary" readonly>
                                </div>
                                <div class="col-span-2">
                                    <textarea cols="30" rows="6" class="input_style__primary" placeholder="Your Subject..."></textarea>
                                </div>
                                <div class="col-span-2">
                                    <button type="submit" class="btn_primary__v1">
                                        Send
                                        <i class="bi bi-chevron-right"></i>
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
                <div class="lg:col-span-4 col-span-12">

                    
                    <aside class="widget widget_search">
                        <form action="#">
                            <div class="flex">
                                <input type="text"
                                    class="w-full lg:h-[55px] h-[48px] border border-primary-1 bg-transparent grow outline-none px-5 py-2 placeholder:text-dark-3 text-dark-2 text-[15px] focus:border-secondary-1"
                                    placeholder="Search Here">
                                <button type="submit"
                                    class="shrink-0 lg:h-[55px] h-[48px] bg-primary-1 w-14 flex justify-center items-center duration-300 hover:bg-secondary-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <path
                                            d="M10.5 18C14.6421 18 18 14.6421 18 10.5C18 6.35786 14.6421 3 10.5 3C6.35786 3 3 6.35786 3 10.5C3 14.6421 6.35786 18 10.5 18Z"
                                            stroke="white" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M21 21L16 16" stroke="white" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </button>
                            </div>
                        </form>
                    </aside>
                    <aside class="widget widget_blogs lg:mt-[50px] mt-10">
                        <h4 class="text-dark-1 lg:text-[25px] text-2md leading-[1.6] capitalize font-semibold mb-5">
                            Historique Des Events</h4>
                        <ul>
                            <li class="flex items-center group mt-6 first:mt-0">
                                <a href="blog-details.html" class="shrink-0 w-20 mr-[15px] overflow-hidden">
                                    <img src="assets/images/blog/ts-1.webp" alt="blogs"
                                        class="w-full group-hover:scale-105 duration-200" />
                                </a>
                                <div class="grow">
                                    <h5
                                        class="lg:text-17px text-base font-semibold leading-[1.64] group-hover:text-primary-1 duration-200 fixed-title">
                                        <a href="blog-details.html">The Most Underrated European Cities, according to
                                            google you should know</a>
                                    </h5>
                                    <div class="text-dark-3 text-sm mt-1">September 23, 1999</div>
                                </div>
                            </li>
                            <li class="flex items-center group mt-6 first:mt-0">
                                <a href="blog-details.html" class="shrink-0 w-20 mr-[15px] overflow-hidden">
                                    <img src="assets/images/blog/ts-2.webp" alt="blogs"
                                        class="w-full group-hover:scale-105 duration-200" />
                                </a>
                                <div class="grow">
                                    <h5
                                        class="lg:text-17px text-base font-semibold leading-[1.64] group-hover:text-primary-1 duration-200 fixed-title">
                                        <a href="blog-details.html">The Most Underrated European Cities, according to
                                            google you should know</a>
                                    </h5>
                                    <div class="text-dark-3 text-sm mt-1">September 23, 1999</div>
                                </div>
                            </li>
                            <li class="flex items-center group mt-6 first:mt-0">
                                <a href="blog-details.html" class="shrink-0 w-20 mr-[15px] overflow-hidden">
                                    <img src="assets/images/blog/ts-3.webp" alt="blogs"
                                        class="w-full group-hover:scale-105 duration-200" />
                                </a>
                                <div class="grow">
                                    <h5
                                        class="lg:text-17px text-base font-semibold leading-[1.64] group-hover:text-primary-1 duration-200 fixed-title">
                                        <a href="blog-details.html">The Most Underrated European Cities, according to
                                            google you should know</a>
                                    </h5>
                                    <div class="text-dark-3 text-sm mt-1">September 23, 1999</div>
                                </div>
                            </li>
                        </ul>
                    </aside>

                    
                    
                    <aside class="widget widget_social lg:mt-[50px] mt-10">
                        <h4 class="text-dark-1 lg:text-[25px] text-2md leading-[1.6] capitalize font-semibold mb-1">
                            Social Links</h4>

                        <ul>
                            <li class="inline-block mt-4 lg:mr-7 mr-5 last:mr-0"><a href="#"
                                    class="primary_social__icon"><i class="bi bi-twitter"></i></a></li>
                            <li class="inline-block mt-4 lg:mr-7 mr-5 last:mr-0"><a href="#"
                                    class="primary_social__icon"><i class="bi bi-facebook"></i></a></li>
                            <li class="inline-block mt-4 lg:mr-7 mr-5 last:mr-0"><a href="#"
                                    class="primary_social__icon"><i class="bi bi-pinterest"></i></a></li>
                            <li class="inline-block mt-4 lg:mr-7 mr-5 last:mr-0"><a href="#"
                                    class="primary_social__icon"><i class="bi bi-instagram"></i></a></li>
                        </ul>
                    </aside>
                    <aside class="widget widget_offer lg:mt-[50px] mt-10">
                        <a href="package-list.html">
                            <img src="assets/images/backgrounds/offer-side-banner.webp" alt="offer"
                                class="w-full" />
                        </a>
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <!--========== DESTINATION DETAILS WRAPPER END ==========-->

    <!--========== INSTAGRAM FEED STYLE START ==========-->
    <div class="instagram_feed_style__one lg:pt-30 pt-24 ">
        <div class="swiper max-w-[1570px] mx-auto px-3 insta-feed-slider">
            <div class="swiper-wrapper ">
                <div class="swiper-slide">
                    <div class="relative overflow-hidden group">
                        <img src="assets/images/instagram/insta-1.webp" alt="instagram" class="w-full" />
                        <a href="#" class="insta-feed-icon">
                            <i class="bi bi-instagram"></i>
                        </a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="relative overflow-hidden group">
                        <img src="assets/images/instagram/insta-2.webp" alt="instagram" class="w-full" />
                        <a href="#" class="insta-feed-icon">
                            <i class="bi bi-instagram"></i>
                        </a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="relative overflow-hidden group">
                        <img src="assets/images/instagram/insta-3.webp" alt="instagram" class="w-full" />
                        <a href="#" class="insta-feed-icon">
                            <i class="bi bi-instagram"></i>
                        </a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="relative overflow-hidden group">
                        <img src="assets/images/instagram/insta-4.webp" alt="instagram" class="w-full" />
                        <a href="#" class="insta-feed-icon">
                            <i class="bi bi-instagram"></i>
                        </a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="relative overflow-hidden group">
                        <img src="assets/images/instagram/insta-5.webp" alt="instagram" class="w-full" />
                        <a href="#" class="insta-feed-icon">
                            <i class="bi bi-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--========== INSTAGRAM FEED STYLE END ==========-->
</x-master>
