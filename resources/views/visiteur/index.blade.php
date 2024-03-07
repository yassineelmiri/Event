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
        <div class="container relative z-2 pb-10">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li class="active_page">Package event</li>
                </ol>
            </nav>
            <h2
                class="xl:text-[54px] mt-2 lg:text-4xl md:text-2xl text-[30px] text-white leading-[1.3] font-medium max-w-[640px]">
                Popular Eventes</h2>
        </div>
    </div>
    <!--========== BREADCRUMB STYLE END ==========-->



    <!--========== FEATURED PACKAGE STYLE ONE START==========-->
    <div class="bg-gradient-to-t to-[#FFF1EC] from-white z-1 relative">
        <div class="container">
            <div class="px-5 py-5 bg-white -translate-y-[55px]">
                <form action="{{ route('filter.publications') }}" method="GET" class="w-full"
                    id="publicationFilterForm" autocomplete="off">
                    <div class="flex items-center lg:flex-row flex-col space-y-4 lg:space-y-0 lg:space-x-base">
                        <div class="relative flex-grow lg:w-auto w-full select_style__two">

                            <select class="destination-select" name="category" id="categorySelect">
                                <option value="">Selection category</option>

                                @foreach ($category as $category)
                                    <option value="{{ $category->name }}">{{ $category->name }}</option>
                                @endforeach
                            </select>

                            <div
                                class="absolute top-1/2 -translate-y-1/2 left-5 lg:left-base max-w-[20px] text-primary-1">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M17.1834 7.25002C16.3167 3.39169 12.95 1.66669 10 1.66669C10 1.66669 10 1.66669 9.9917 1.66669C7.05004 1.66669 3.6917 3.39169 2.8167 7.24169C1.83337 11.5417 4.4667 15.1834 6.85004 17.4834C7.73337 18.3334 8.8667 18.7584 10 18.7584C11.1334 18.7584 12.2667 18.3334 13.1417 17.4834C15.525 15.1834 18.1584 11.55 17.1834 7.25002Z"
                                        fill="currentColor" />
                                    <path
                                        d="M12.2917 8.54167H10.625V6.875C10.625 6.53333 10.3417 6.25 10 6.25C9.65837 6.25 9.37504 6.53333 9.37504 6.875V8.54167H7.70837C7.36671 8.54167 7.08337 8.825 7.08337 9.16667C7.08337 9.50833 7.36671 9.79167 7.70837 9.79167H9.37504V11.4583C9.37504 11.8 9.65837 12.0833 10 12.0833C10.3417 12.0833 10.625 11.8 10.625 11.4583V9.79167H12.2917C12.6334 9.79167 12.9167 9.50833 12.9167 9.16667C12.9167 8.825 12.6334 8.54167 12.2917 8.54167Z"
                                        fill="white" />
                                </svg>
                            </div>
                        </div>
                        <div class="relative  flex-grow lg:w-auto w-full">
                            <input type="text" name="daterange" id="daterange" value="Select Date"
                                class="w-full bg-transparent border border-primary-1 outline-0 lg:h-17 h-14 pr-4 lg:pl-[60px] pl-[50px] lg:text-md text-base text-primary-1 placeholder:text-primary-1 font-medium" />
                            <div
                                class="absolute top-1/2 -translate-y-1/2 left-5 lg:left-base max-w-[20px] text-primary-1">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M13.9583 2.96669V1.66669C13.9583 1.32502 13.675 1.04169 13.3333 1.04169C12.9916 1.04169 12.7083 1.32502 12.7083 1.66669V2.91669H7.29165V1.66669C7.29165 1.32502 7.00831 1.04169 6.66665 1.04169C6.32498 1.04169 6.04165 1.32502 6.04165 1.66669V2.96669C3.79165 3.17502 2.69999 4.51669 2.53332 6.50835C2.51665 6.75002 2.71665 6.95002 2.94999 6.95002H17.05C17.2916 6.95002 17.4916 6.74169 17.4666 6.50835C17.3 4.51669 16.2083 3.17502 13.9583 2.96669Z"
                                        fill="currentColor" />
                                    <path
                                        d="M16.6667 8.20001C17.125 8.20001 17.5 8.57501 17.5 9.03335V14.1667C17.5 16.6667 16.25 18.3333 13.3333 18.3333H6.66667C3.75 18.3333 2.5 16.6667 2.5 14.1667V9.03335C2.5 8.57501 2.875 8.20001 3.33333 8.20001H16.6667Z"
                                        fill="currentColor" />
                                    <path
                                        d="M12.3667 12.4917L11.95 12.9167H11.9417L9.41665 15.4417C9.30832 15.55 9.08332 15.6667 8.92499 15.6834L7.79998 15.85C7.39165 15.9083 7.10833 15.6167 7.16667 15.2167L7.325 14.0833C7.35 13.925 7.45832 13.7083 7.56665 13.5917L10.1 11.0667L10.5167 10.6417C10.7917 10.3667 11.1 10.1667 11.4333 10.1667C11.7167 10.1667 12.025 10.3 12.3667 10.6417C13.1167 11.3917 12.875 11.9833 12.3667 12.4917Z"
                                        fill="white" />
                                </svg>
                            </div>
                        </div>

                        <button type="submit"
                            class="block lg:w-auto w-full flex-grow text-center bg-primary-1 lg:h-17 h-14  text-white font-medium text-md hover:bg-[#d0aa6c] duration-300">FIND
                            NOW</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="absolute top-[10%] right-0 max-w-[14%] z-minus lg:inline-block hidden">
            <img src="assets/images/illustration/tree-illustration.png" alt="leaf">
        </div>
        <div class="absolute top-[5%] left-[1%] max-w-[9%] z-minus lg:inline-block hidden">
            <img src="assets/images/illustration/bird-illustration.png" alt="leaf">
        </div>
        <div class="container mt-10">
            <div class="grid grid-cols-12 lg:gap-12 gap-base">
                <div class="lg:col-span-8 col-span-12 grid md:grid-cols-2 grid-cols-1 gap-base">
                    @foreach ($publication as $publication)
                        <x-publication :publication="$publication" />
                    @endforeach
                    <div class="group/card package-card-style-one ">
                        <div class="overflow-hidden relative">
                            <a href="package-details.html">
                                <img src="assets/images/packages/p1-2.webp" alt="package-img"
                                    class="w-full group-hover/card:scale-105 duration-300">
                            </a>
                        </div>
                        <h3 class="card-title-alpha group-hover/card:text-primary-1 lg:mt-6 mt-5"><a
                                href="package-details.html">Casablanca Valley Wine Tasting Days</a></h3>

                        <ul
                            class="flex flex-wrap lg:text-[15px] text-[13px] font-medium text-dark-2 mt-4 package-feature">
                            <li>
                                <span class="text-primary-1">
                                    <i class="bi bi-people"></i>
                                </span>
                                <span>05 People</span>
                            </li>
                            <li>
                                <span class="text-primary-1">
                                    <i class="bi bi-clock"></i>
                                </span>
                                <span>03 Days</span>
                            </li>
                            <li>
                                <span class="text-primary-1">
                                    <i class="bi bi-coin"></i>
                                </span>
                                </span>
                            </li>
                        </ul>

                        <a href="package-details.html" class="package-explore-btn group/btn">
                            <span class="mr-2">Explore Now</span>
                            <svg class="group-hover/btn:translate-x-2 duration-200 " width="27" height="14"
                                viewBox="0 0 27 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M0.217443 6.25H18.4827C18.6276 6.25 18.7001 6.30263 18.7001 6.40789V7.59211C18.7001 7.69737 18.6276 7.75 18.4827 7.75H0.217443C0.0724811 7.75 0 7.69737 0 7.59211V6.40789C0 6.30263 0.0724811 6.25 0.217443 6.25Z"
                                    fill="currentColor" />
                                <path
                                    d="M20.7001 12.28L25.0467 7.9333C25.5601 7.41997 25.5601 6.57997 25.0467 6.06664L20.7001 1.71997"
                                    stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </a>
                    </div>
                    <div class="group/card package-card-style-one ">
                        <div class="overflow-hidden relative">
                            <a href="package-details.html">
                                <img src="assets/images/packages/p1-3.webp" alt="package-img"
                                    class="w-full group-hover/card:scale-105 duration-300">
                            </a>
                            <span
                                class="absolute inline-block top-5 right-5 text-sm text-white rounded-full bg-status-success py-1 px-3">Adventure
                            </span>
                        </div>
                        <h3 class="card-title-alpha group-hover/card:text-primary-1 lg:mt-6 mt-5"><a
                                href="package-details.html">Maldives Sightseeing Adventure Tours</a></h3>

                        <ul
                            class="flex flex-wrap lg:text-[15px] text-[13px] font-medium text-dark-2 mt-4 package-feature">
                            <li>
                                <span class="text-primary-1">
                                    <i class="bi bi-people"></i>
                                </span>
                                <span>05 People</span>
                            </li>
                            <li>
                                <span class="text-primary-1">
                                    <i class="bi bi-clock"></i>
                                </span>
                                <span>03 Days</span>
                            </li>
                            <li>
                                <span class="text-primary-1">
                                    <i class="bi bi-coin"></i>
                                </span>
                                </span>
                            </li>
                        </ul>

                        <a href="package-details.html" class="package-explore-btn group/btn">
                            <span class="mr-2">Explore Now</span>
                            <svg class="group-hover/btn:translate-x-2 duration-200 " width="27" height="14"
                                viewBox="0 0 27 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M0.217443 6.25H18.4827C18.6276 6.25 18.7001 6.30263 18.7001 6.40789V7.59211C18.7001 7.69737 18.6276 7.75 18.4827 7.75H0.217443C0.0724811 7.75 0 7.69737 0 7.59211V6.40789C0 6.30263 0.0724811 6.25 0.217443 6.25Z"
                                    fill="currentColor" />
                                <path
                                    d="M20.7001 12.28L25.0467 7.9333C25.5601 7.41997 25.5601 6.57997 25.0467 6.06664L20.7001 1.71997"
                                    stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </a>
                    </div>
                    <div class="group/card package-card-style-one ">
                        <div class="overflow-hidden relative">
                            <a href="package-details.html">
                                <img src="assets/images/packages/p1-4.webp" alt="package-img"
                                    class="w-full group-hover/card:scale-105 duration-300">
                            </a>

                        </div>
                        <h3 class="card-title-alpha group-hover/card:text-primary-1 lg:mt-6 mt-5"><a
                                href="package-details.html">Buenos Aires, Calafate, Abruzzo, Italy </a></h3>

                        <ul
                            class="flex flex-wrap lg:text-[15px] text-[13px] font-medium text-dark-2 mt-4 package-feature">
                            <li>
                                <span class="text-primary-1">
                                    <i class="bi bi-people"></i>
                                </span>
                                <span>05 People</span>
                            </li>
                            <li>
                                <span class="text-primary-1">
                                    <i class="bi bi-clock"></i>
                                </span>
                                <span>03 Days</span>
                            </li>
                            <li>
                                <span class="text-primary-1">
                                    <i class="bi bi-coin"></i>
                                </span>
                                </span>
                            </li>
                        </ul>

                        <a href="package-details.html" class="package-explore-btn group/btn">
                            <span class="mr-2">Explore Now</span>
                            <svg class="group-hover/btn:translate-x-2 duration-200 " width="27" height="14"
                                viewBox="0 0 27 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M0.217443 6.25H18.4827C18.6276 6.25 18.7001 6.30263 18.7001 6.40789V7.59211C18.7001 7.69737 18.6276 7.75 18.4827 7.75H0.217443C0.0724811 7.75 0 7.69737 0 7.59211V6.40789C0 6.30263 0.0724811 6.25 0.217443 6.25Z"
                                    fill="currentColor" />
                                <path
                                    d="M20.7001 12.28L25.0467 7.9333C25.5601 7.41997 25.5601 6.57997 25.0467 6.06664L20.7001 1.71997"
                                    stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </a>
                    </div>

                </div>
                <div class="lg:col-span-4 col-span-12 ">
                    <div class="pb-[10px] mb-8 border-b border-dark-1 border-opacity-10">
                        <h4 class="text-lg font-semibold text-dark-1">Filter by :</h4>
                    </div>
                    <aside>
                        <h5 class="font-sans lg:text-md text-base pb-2 font-semibold text-dark-1">Categories</h5>

                        <ul class="pt-4">

                            @foreach ($categoryA as $category)
                                <li class="pt-3 first:pt-0">
                                    <div class="custom-checkbox">
                                        <input type="checkbox" value="category" id="cate-one">
                                        <label for="cate-one">{{ $category->name }}</label>
                                    </div>
                                </li>
                            @endforeach


                        </ul>

                    </aside>

                    <div
                        class="sidebar-devider my-8 h-[3px] bg-[url('https://arid-html.vercel.app/main-file/images/illustration/wave.svg')] bg-repeat">
                    </div>

                    <aside>
                        <h5 class="font-sans lg:text-md text-base pb-2 font-semibold text-dark-1">Filter Par Titer: </h5>
                        <div class="range-slider pt-4" id="range-slider">
                            <form action="{{ route('filter.titer') }}" method="GET" class="w-full" id="publicationFilterForm" autocomplete="off">
                                <div class="flex items-center border border-primary-1 rounded-lg overflow-hidden">
                                    <input type="text" name="titel" placeholder="Search by title"
                                        class="flex-grow bg-transparent border-none outline-none h-14 px-4 text-md text-primary-1 placeholder-primary-1 font-medium">
                                    <button type="submit" class="bg-primary-1 text-white font-medium px-6 py-3 hover:bg-[#d0aa6c] duration-300">FIND NOW</button>
                                </div>
                            </form>
                        </div>
                    </aside>
                    
                    
                    <div
                        class="sidebar-devider my-8 h-[3px] bg-[url('https://arid-html.vercel.app/main-file/images/illustration/wave.svg')] bg-repeat">
                    </div>


                    
                    <aside>
                        <h5 class="font-sans lg:text-md text-base pb-2 font-semibold text-dark-1">Filter Price: </h5>
                        <div class="range-slider pt-4" id="range-slider">
                            <div id="slider-range"></div>
                            <div class="flex text-dark-2 lg:text-base textsm pt-4 items-center">
                                Pricing Range :
                                <input type="text" id="amount"
                                    class="ml-2 text-dark-1 text-sm font-semibold bg-transparent outline-none border-none"
                                    readonly style="border:0;">
                            </div>
                        </div>

                       
                        
                    </aside>
                    



                    <div
                        class="sidebar-devider my-8 h-[3px] bg-[url('https://arid-html.vercel.app/main-file/images/illustration/wave.svg')] bg-repeat">
                    </div>

                    <aside class="widget widget_blogs lg:mt-[50px] mt-10">
                        <div class="pb-[10px] mb-8 border-b border-dark-1 border-opacity-10">
                            <h4 class="text-lg font-semibold text-dark-1">Offer Deals :</h4>
                        </div>
                        <ul>
                            <li class="flex items-center group mt-6 first:mt-0">
                                <a href="package-details.html" class="shrink-0 w-20 mr-[15px] overflow-hidden">
                                    <img src="assets/images/blog/ts-1.webp" alt="blogs"
                                        class="w-full group-hover:scale-105 duration-200" />
                                </a>
                                <div class="grow">
                                    <ul class="text-sm text-orange-500">
                                        <li class="mr-[2px] last:mr-0 inline-block"><i class="bi bi-star-fill"></i>
                                        </li>
                                        <li class="mr-[2px] last:mr-0 inline-block"><i class="bi bi-star-fill"></i>
                                        </li>
                                        <li class="mr-[2px] last:mr-0 inline-block"><i class="bi bi-star-fill"></i>
                                        </li>
                                        <li class="mr-[2px] last:mr-0 inline-block"><i class="bi bi-star-fill"></i>
                                        </li>
                                        <li class="mr-[2px] last:mr-0 inline-block"><i class="bi bi-star-half"></i>
                                        </li>
                                    </ul>
                                    <h5
                                        class="lg:text-md mt-1 text-base font-semibold leading-[1.64] group-hover:text-primary-1 duration-200 fixed-title">
                                        <a href="package-details.html">The Great Wall, Chaina</a>
                                    </h5>
                                    <div class="mt-[5px] text-dark-2">
                                        <span>
                                            Form
                                        </span>
                                        <span class="text-primary-1 font-medium">$140.00</span>
                                    </div>
                                </div>
                            </li>
                            <li class="flex items-center group mt-6 first:mt-0">
                                <a href="package-details.html" class="shrink-0 w-20 mr-[15px] overflow-hidden">
                                    <img src="assets/images/blog/ts-2.webp" alt="blogs"
                                        class="w-full group-hover:scale-105 duration-200" />
                                </a>
                                <div class="grow">
                                    <ul class="text-sm text-orange-500">
                                        <li class="mr-[2px] last:mr-0 inline-block"><i class="bi bi-star-fill"></i>
                                        </li>
                                        <li class="mr-[2px] last:mr-0 inline-block"><i class="bi bi-star-fill"></i>
                                        </li>
                                        <li class="mr-[2px] last:mr-0 inline-block"><i class="bi bi-star-fill"></i>
                                        </li>
                                        <li class="mr-[2px] last:mr-0 inline-block"><i class="bi bi-star-fill"></i>
                                        </li>
                                        <li class="mr-[2px] last:mr-0 inline-block"><i class="bi bi-star-half"></i>
                                        </li>
                                    </ul>
                                    <h5
                                        class="lg:text-md mt-1 text-base font-semibold leading-[1.64] group-hover:text-primary-1 duration-200 fixed-title">
                                        <a href="package-details.html">Longest Sea Beach, Cox's Bazar</a>
                                    </h5>
                                    <div class="mt-[5px] text-dark-2">
                                        <span>
                                            Form
                                        </span>
                                        <span class="text-primary-1 font-medium">$140.00</span>
                                    </div>
                                </div>
                            </li>
                            <li class="flex items-center group mt-6 first:mt-0">
                                <a href="package-details.html" class="shrink-0 w-20 mr-[15px] overflow-hidden">
                                    <img src="assets/images/blog/ts-3.webp" alt="blogs"
                                        class="w-full group-hover:scale-105 duration-200" />
                                </a>
                                <div class="grow">
                                    <ul class="text-[13px] text-orange-500">
                                        <li class="mr-[2px] last:mr-0 inline-block"><i class="bi bi-star-fill"></i>
                                        </li>
                                        <li class="mr-[2px] last:mr-0 inline-block"><i class="bi bi-star-fill"></i>
                                        </li>
                                        <li class="mr-[2px] last:mr-0 inline-block"><i class="bi bi-star-fill"></i>
                                        </li>
                                        <li class="mr-[2px] last:mr-0 inline-block"><i class="bi bi-star-fill"></i>
                                        </li>
                                        <li class="mr-[2px] last:mr-0 inline-block"><i class="bi bi-star-half"></i>
                                        </li>
                                    </ul>
                                    <h5
                                        class="lg:text-md mt-[3px] text-base font-semibold leading-[1.64] group-hover:text-primary-1 duration-200 fixed-title">
                                        <a href="package-details.html">Long Trail Mountain, Napal</a>
                                    </h5>
                                    <div class="mt-[5px] text-dark-2">
                                        <span>
                                            Form
                                        </span>
                                        <span class="text-primary-1 font-medium">$140.00</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </aside>

                    <!-- <aside class="widget widget_offer lg:mt-[50px] mt-10">
                        <a href="package-list.html">
                            <img src="./assets/images/backgrounds/offer-side-banner.webp" alt="offer" class="w-full" />
                        </a>
                    </aside>  -->
                </div>
            </div>

            <nav>
                <ul class="flex justify-center items-center lg:space-x-6 space-x-5 flex-wrap lg:pt-[60px] pt-[40px]">
                    <li>
                        <a href="#"
                            class="h-10 w-10 border-primary-1 border text-primary-1 hover:bg-primary-1 hover:text-white duration-200 inline-flex justify-center items-center"><i
                                class="bi bi-chevron-left"></i></a>
                    </li>
                    <li><a href="#"
                            class=" font-medium lg:text-base text-sm text-dark-1 duration-150 hover:text-primary-1 inline-block">01</a>
                    </li>
                    <li><a href="#"
                            class=" font-medium lg:text-base text-sm text-dark-1 duration-150 hover:text-primary-1 inline-block">02</a>
                    </li>
                    <li><a href="#"
                            class=" font-medium lg:text-base text-sm text-dark-1 duration-150 hover:text-primary-1 inline-block">03</a>
                    </li>
                    <li><a href="#"
                            class=" font-medium lg:text-base text-sm text-dark-1 duration-150 hover:text-primary-1 inline-block">04</a>
                    </li>
                    <li><a href="#"
                            class="font-medium lg:text-base text-sm text-dark-1 duration-150 hover:text-primary-1 inline-block">05</a>
                    </li>
                    <li>
                        <a href="#"
                            class="h-10 w-10 border-primary-1 border text-primary-1 hover:bg-primary-1 hover:text-white duration-200 inline-flex justify-center items-center"><i
                                class="bi bi-chevron-right"></i></a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <!--========== FEATURED PACKAGE STYLE ONE END==========-->

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
