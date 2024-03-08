@once
    <div class="desktop-menu max-w-[1570px] mx-auto justify-between items-center xl:flex hidden">
        <div class="basis-[20%]">
            @auth


                <a href="{{ route('login.logout') }}" class="btn_primary__v1">
                    Log-out
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7.42505 16.5999L12.8584 11.1666C13.5 10.5249 13.5 9.4749 12.8584 8.83324L7.42505 3.3999"
                            stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                            stroke-linejoin="round"></path>
                    </svg>
                </a>
            @endauth
            @guest

                <a href="{{ route('login.show') }}" class="btn_primary__v1">
                    Login
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7.42505 16.5999L12.8584 11.1666C13.5 10.5249 13.5 9.4749 12.8584 8.83324L7.42505 3.3999"
                            stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                            stroke-linejoin="round"></path>
                    </svg>
                </a>

            @endguest
        </div>

        <div class="main-menu flex items-center uppercase">
            <div class="menu-one">
                <ul class="flex items-center nav-list">

                    <!-- dropdown -->
                    <li class="group/step-one">
                        <a href="#" class="nav-link has-dropdown">Home</a>
                        <ul class="nav-dropdown">
                            <li><a href="{{ route('home') }}">Home Classic</a></li>

                        </ul>
                    </li>

                    <!-- dropdown -->
                    <li class="group/step-one">
                        <a href="javascript:void(0)" class="nav-link has-dropdown">Event</a>
                        <ul class="nav-dropdown">
                            
                                <li><a href="{{ route('afficher') }}">afficher</a></li>
                                <li><a href="{{ route('publications.index') }}">Ajouter</a></li>
                                <li><a href="destination-details.html">Destination Details</a></li>
                               
                         
                        </ul>
                    </li>

                    <!-- mega dropdown -->
                    <li class="group/mega-dropdown">
                        <a href="javascript:void(0)" class="nav-link has-dropdown">Destination</a>
                        <div class="nav-mega-dropdown grid grid-cols-6 gap-x-1">
                            <div class="col-span-4 border-r">
                                <a href="package-list-sidebar.html"
                                    class="py-2 flex items-center border-b border-stock-1 text-base text-dark-1 hover:text-primary-1 duration-200">
                                    Browse All Destination
                                    <div class="max-w-[20px] ml-2">
                                        <svg class="group-hover/btn:translate-x-2 duration-200 " width="27"
                                            height="14" viewBox="0 0 27 14" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M0.217443 6.25H18.4827C18.6276 6.25 18.7001 6.30263 18.7001 6.40789V7.59211C18.7001 7.69737 18.6276 7.75 18.4827 7.75H0.217443C0.0724811 7.75 0 7.69737 0 7.59211V6.40789C0 6.30263 0.0724811 6.25 0.217443 6.25Z"
                                                fill="currentColor"></path>
                                            <path
                                                d="M20.7001 12.28L25.0467 7.9333C25.5601 7.41997 25.5601 6.57997 25.0467 6.06664L20.7001 1.71997"
                                                stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10"
                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </div>
                                </a>
                                <ul class="grid grid-cols-3 mega-dropdown-links">
                                    <li><a href="package-list.html">New York</a></li>
                                    <li><a href="package-list.html">London</a></li>
                                    <li><a href="package-list.html">Paris</a></li>
                                    <li><a href="package-list.html">Dubai</a></li>
                                    <li><a href="package-list.html">Miami</a></li>
                                    <li><a href="package-list.html">Rome</a></li>
                                    <li><a href="package-list.html">Seattle</a></li>
                                    <li><a href="package-list.html">Amsterdam</a></li>
                                    <li><a href="package-list.html">Chicago</a></li>
                                    <li><a href="package-list.html">Las vegas</a></li>
                                    <li><a href="package-list.html">Barcelona</a></li>
                                    <li><a href="package-list.html">Cox's Bazar</a></li>
                                    <li><a href="package-list.html">Istanbul</a></li>
                                </ul>
                            </div>
                            <div class="col-span-2">
                                <a href="package-details.html">
                                    <img src="assets/images/backgrounds/offer-banner.webp" alt="offer-banner w-full">
                                </a>
                            </div>
                        </div>
                    </li>

                </ul>
            </div>
            <a href="{{ route('home') }}" class="shrink-0 xl:mx-9 mx-7"><img src="assets/images/logo.png"
                    alt="logo"></a>
            <div class="menu-one">
                <ul class="flex items-center nav-list">
                    <!-- dropdown -->
                    <li class="group/step-one">
                        <a href="javascript:void(0)" class="nav-link has-dropdown">Blogs</a>
                        <ul class="nav-dropdown">
                            <li><a href="blog-list.html">Blog List</a></li>
                            <li><a href="blog-details.html">Blog Details</a></li>
                        </ul>
                    </li>

                    <!-- dropdown -->
                    <li class="group/step-one">
                        <a href="javascript:void(0)" class="nav-link has-dropdown">Packages</a>
                        <ul class="nav-dropdown">
                            <li><a href="package-list.html">Package List</a></li>
                            <li><a href="package-list-sidebar.html">Package List Sidebar</a></li>
                            <li><a href="package-details.html">Package Details - Layout I</a></li>
                            <li><a href="package-details-2.html">Package Details - Layout II</a></li>
                            <li><a href="package-details-3.html">Package Details - Layout III</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="contact.html" class="nav-link">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="basis-[20%] flex justify-end items-center">
            <a href="#"
                class="text-dark-1 font-medium text-base inline-flex items-center mr-8  hover:text-primary-1 duration-200">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <rect width="24" height="24" />
                    <path
                        d="M12 19C14.2091 19 16 17.2091 16 15C16 12.7909 14.2091 11 12 11C9.79086 11 8 12.7909 8 15C8 17.2091 9.79086 19 12 19Z"
                        stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M12.25 13.75V14.68C12.25 15.03 12.07 15.36 11.76 15.54L11 16" stroke="currentColor"
                        stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                    <path
                        d="M9.00007 22H15.0001C19.0201 22 19.7401 20.39 19.9501 18.43L20.7001 12.43C20.9701 9.99 20.2701 8 16.0001 8H8.00007C3.73007 8 3.03007 9.99 3.30007 12.43L4.05007 18.43C4.26007 20.39 4.98007 22 9.00007 22Z"
                        stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path
                        d="M7.5 7.67001V6.70001C7.5 4.45001 9.31 2.24001 11.56 2.03001C14.24 1.77001 16.5 3.88001 16.5 6.51001V7.89001"
                        stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
                <span class="ml-2">panier</span>
            </a>
            <a href="{{ route('profiles.index') }}"
                class="shrink-0 inline-flex justify-center items-center bg-primary-1 rounded-full h-12 w-12 text-white hover:bg-primary-2 duration-300">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M12.1601 10.87C12.0601 10.86 11.9401 10.86 11.8301 10.87C9.45006 10.79 7.56006 8.84 7.56006 6.44C7.56006 3.99 9.54006 2 12.0001 2C14.4501 2 16.4401 3.99 16.4401 6.44C16.4301 8.84 14.5401 10.79 12.1601 10.87Z"
                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path
                        d="M7.15997 14.56C4.73997 16.18 4.73997 18.82 7.15997 20.43C9.90997 22.27 14.42 22.27 17.17 20.43C19.59 18.81 19.59 16.17 17.17 14.56C14.43 12.73 9.91997 12.73 7.15997 14.56Z"
                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </a>
        </div>
    </div>
    <div class="mobile-menu xl:hidden flex justify-between items-center relative">
        <a href="index.html" class="shrink-0 max-w-[50px]"><img src="assets/images/logo.png" alt="logo"></a>

        <div class="space-x-4 flex items-center">
            <a href="#"
                class="text-dark-1 font-base text-base inline-flex items-center hover:text-primary-1 duration-200">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <rect width="24" height="24" fill="white" />
                    <path
                        d="M12 19C14.2091 19 16 17.2091 16 15C16 12.7909 14.2091 11 12 11C9.79086 11 8 12.7909 8 15C8 17.2091 9.79086 19 12 19Z"
                        stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M12.25 13.75V14.68C12.25 15.03 12.07 15.36 11.76 15.54L11 16" stroke="currentColor"
                        stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                    <path
                        d="M9.00007 22H15.0001C19.0201 22 19.7401 20.39 19.9501 18.43L20.7001 12.43C20.9701 9.99 20.2701 8 16.0001 8H8.00007C3.73007 8 3.03007 9.99 3.30007 12.43L4.05007 18.43C4.26007 20.39 4.98007 22 9.00007 22Z"
                        stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path
                        d="M7.5 7.67001V6.70001C7.5 4.45001 9.31 2.24001 11.56 2.03001C14.24 1.77001 16.5 3.88001 16.5 6.51001V7.89001"
                        stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
                <span class="ml-2">panier (01)</span>
            </a>
            <a href="{{ route('profiles.index') }}"
                class="shrink-0 inline-flex justify-center items-center bg-primary-2 rounded-full h-10 w-10 text-white">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M12.1601 10.87C12.0601 10.86 11.9401 10.86 11.8301 10.87C9.45006 10.79 7.56006 8.84 7.56006 6.44C7.56006 3.99 9.54006 2 12.0001 2C14.4501 2 16.4401 3.99 16.4401 6.44C16.4301 8.84 14.5401 10.79 12.1601 10.87Z"
                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path
                        d="M7.15997 14.56C4.73997 16.18 4.73997 18.82 7.15997 20.43C9.90997 22.27 14.42 22.27 17.17 20.43C19.59 18.81 19.59 16.17 17.17 14.56C14.43 12.73 9.91997 12.73 7.15997 14.56Z"
                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </a>
            <button class="hamburger" id="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
        <div id="mobile-menu" class="mobil-menu">
            <ul>
                <li class="group/step-one">
                    <a href="javascript:void(0)" class="nav-link nav-link-sm has-dropdown ">Home</a>
                    <ul class="nav-dropdown-sm">
                        <li><a href="index.html">Home Classic</a></li>
                        <li><a href="index-2.html">Home Dark</a></li>
                        <li><a href="index-3.html">Home Parallax</a></li>
                    </ul>
                </li>
                <li class="group/step-one">
                    <a href="javascript:void(0)" class="nav-link nav-link-sm has-dropdown ">Create Event</a>
                    <ul class="nav-dropdown-sm">
                        <li><a href="about.html">afficher</a></li>
                        <li><a href="destination.html">Ajouter</a></li>
                        <li><a href="destination-details.html">Destination Details</a></li>
                       
                    </ul>
                </li>
                <li class="group/step-one">
                    <a href="javascript:void(0)" class="nav-link nav-link-sm has-dropdown ">Destination</a>
                    <ul class="nav-dropdown-sm">
                        <li><a href="package-list.html">New York</a></li>
                        <li><a href="package-list.html">London</a></li>
                        <li><a href="package-list.html">Paris</a></li>
                        <li><a href="package-list.html">Dubai</a></li>
                        <li><a href="package-list.html">Miami</a></li>
                        <li><a href="package-list.html">Rome</a></li>
                        <li><a href="package-list.html">Seattle</a></li>
                        <li><a href="package-list.html">Amsterdam</a></li>
                        <li><a href="package-list.html">Chicago</a></li>
                        <li><a href="package-list.html">Las vegas</a></li>
                        <li><a href="package-list.html">Barcelona</a></li>
                        <li><a href="package-list.html">Cox's Bazar</a></li>
                        <li><a href="package-list.html">Istanbul</a></li>
                    </ul>
                </li>
                <li class="group/step-one">
                    <a href="#" class="nav-link nav-link-sm has-dropdown ">Blogs</a>
                    <ul class="nav-dropdown-sm">
                        <li><a href="blog-list.html">Blog List</a></li>
                        <li><a href="blog-details.html">Blog Details</a></li>
                    </ul>
                </li>
                <li class="group/step-one">
                    <a href="javascript:void(0)" class="nav-link nav-link-sm has-dropdown ">Packages</a>
                    <ul class="nav-dropdown-sm">
                        <li><a href="package-list.html">Package List</a></li>
                        <li><a href="package-list-sidebar.html">Package List Sidebar</a></li>
                        <li><a href="package-details.html">Package Details - Layout I</a></li>
                        <li><a href="package-details-2.html">Package Details - Layout II</a></li>
                        <li><a href="package-details-3.html">Package Details - Layout III</a></li>
                    </ul>
                </li>
                <li class="group/step-one">
                    <a href="contact.html" class="nav-link nav-link-sm">Contact</a>
                </li>
            </ul>
        </div>
    </div>
@endonce
