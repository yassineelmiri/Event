<x-master>
    <!--========== HERO STYLE ONE START ==========-->
    <div class="hero_style__start">
        <div class="lg:grid grid-cols-12 xl:gap-base gap-3 mx-auto xl:px-base px-3 overflow-hidden">
            <div class="lg:col-span-3 md:col-span-6 hidden lg:flex flex-col">
                <div class="group hero-card-sm">
                    <a href="package-list-sidebar.html">
                        <img src="assets/images/destination/hd-1.webp" alt="placeholder"
                            class="lg:h-full w-full object-cover group-hover:scale-110 duration-500">
                        <div class="text-white absolute w-full lg:bottom-10 bottom-6 text-center ">
                            <h3
                                class="font-extrabold 2xl:text-xl md:text-lg text-2md  leading-1.6 group-hover:text-primary-1 duration-300 group-hover:tracking-wide">
                                Beauty of France
                            </h3>
                            <p class="font-medium lg:text-md text-base mt-1 mb-3">10 Tours Place</p>
                            <div class="h-[3px] w-9 bg-white rounded-md mx-auto"></div>
                        </div>
                    </a>
                </div>
                <div class="group hero-card-sm">
                    <a href="package-list-sidebar.html">
                        <img src="assets/images/destination/hd-2.webp" alt="placeholder"
                            class="lg:h-full w-full object-cover group-hover:scale-110 duration-500">
                        <div class="text-white absolute w-full lg:bottom-10 bottom-6 text-center ">
                            <h3
                                class="font-extrabold 2xl:text-xl md:text-lg text-2md  leading-1.6 group-hover:text-primary-1 duration-300 group-hover:tracking-wide">
                                Grand Switzerland
                            </h3>
                            <p class="font-medium lg:text-md text-base mt-1 mb-3">05 Tours Place</p>
                            <div class="h-[3px] w-9 bg-white rounded-md mx-auto"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div
                class="lg:col-span-6 md:col-span-12 xl:min-h-screen lg:py-30 py-20 bg-[url('../images/hero/hero.webp')] bg-cover bg-center bg-no-repeat flex justify-center items-center">
                <form action="#" class="w-full max-w-[570px]">
                    <div class="lg:py-[50px] py-base lg:px-14 md:px-10 px-base mx-3 text-center backdrop-blur-[21px]"
                        style="background: linear-gradient(152.97deg, rgba(255, 255, 255, 0.36) 0%, rgba(255, 255, 255, 0.12) 100%);">
                        <h3 class="text-white lg:text-2xl text-lg font-bold leading-1.3">
                            Find Destination
                        </h3>

                        <div class="relative lg:mt-12 mt-base">
                            <input list="data-destination" type="text" placeholder="Where to ?"
                                class="w-full bg-white outline-0 lg:h-17 h-14 pr-4 lg:pl-[60px] pl-[50px] text-md text-dark-2 placeholder:text-dark-2 font-medium">

                            <datalist id="data-destination">
                                <option value="New York">
                                <option value="London">
                                <option value="Paris">
                                <option value="Dubai">
                                <option value="Miami">
                                <option value="Rome">
                                <option value="Seattle">
                                <option value="Amsterdam">
                                <option value="Las vegas">
                            </datalist>

                            <div class="absolute top-1/2 -translate-y-1/2 left-5 lg:left-base max-w-[20px]">
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
                        <div class="relative lg:mt-10 mt-6 select_style__one">

                            <input type="text" name="daterange" value="Select Date"
                                class="w-full bg-white outline-0 lg:h-17 h-14 pr-4 lg:pl-[60px] pl-[50px] lg:text-md text-base text-dark-2 placeholder:text-dark-2 font-medium" />

                            <div class="absolute top-1/2 -translate-y-1/2 left-5 lg:left-base max-w-[20px]">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M13.9583 2.96669V1.66669C13.9583 1.32502 13.675 1.04169 13.3333 1.04169C12.9916 1.04169 12.7083 1.32502 12.7083 1.66669V2.91669H7.29165V1.66669C7.29165 1.32502 7.00831 1.04169 6.66665 1.04169C6.32498 1.04169 6.04165 1.32502 6.04165 1.66669V2.96669C3.79165 3.17502 2.69999 4.51669 2.53332 6.50835C2.51665 6.75002 2.71665 6.95002 2.94999 6.95002H17.05C17.2916 6.95002 17.4916 6.74169 17.4666 6.50835C17.3 4.51669 16.2083 3.17502 13.9583 2.96669Z"
                                        fill="currentColor" />
                                    <path
                                        d="M16.6667 8.20001C17.125 8.20001 17.5 8.57501 17.5 9.03335V14.1667C17.5 16.6667 16.25 18.3333 13.3333 18.3333H6.66667C3.75 18.3333 2.5 16.6667 2.5 14.1667V9.03335C2.5 8.57501 2.875 8.20001 3.33333 8.20001H16.6667Z"
                                        fill="#353535" />
                                    <path
                                        d="M12.3667 12.4917L11.95 12.9167H11.9417L9.41665 15.4417C9.30832 15.55 9.08332 15.6667 8.92499 15.6834L7.79998 15.85C7.39165 15.9083 7.10833 15.6167 7.16667 15.2167L7.325 14.0833C7.35 13.925 7.45832 13.7083 7.56665 13.5917L10.1 11.0667L10.5167 10.6417C10.7917 10.3667 11.1 10.1667 11.4333 10.1667C11.7167 10.1667 12.025 10.3 12.3667 10.6417C13.1167 11.3917 12.875 11.9833 12.3667 12.4917Z"
                                        fill="white" />
                                </svg>
                            </div>



                        </div>
                        <div class="relative lg:mt-10 mt-6 select_style__one">
                            <select class="destination-select w-full" name="state">
                                <option value="0">Tour Type</option>
                                <option value="1">Honeymoon</option>
                                <option value="2">Hill Traking</option>
                                <option value="3">Day outing</option>
                                <option value="4">River Cruise</option>
                                <option value="5">Summer Vacation</option>
                                <option value="5">Others</option>
                            </select>

                            <div class="absolute top-1/2 -translate-y-1/2 left-5 lg:left-base max-w-[20px]">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M17.66 8.32885C17.2489 8.32441 16.84 8.30441 16.4311 8.33552C16.1489 8.35552 15.9889 8.23552 15.8489 8.01774C15.3689 7.27552 14.8667 6.54663 14.4 5.79552C14.1178 5.33996 13.72 5.13107 13.2089 5.08441C13.1067 5.07552 13.0067 5.05107 12.9045 5.04441C12.4956 5.01329 12.0956 4.87552 11.6845 4.92663C10.5489 5.06663 9.4178 5.21774 8.28446 5.37774C7.87335 5.43552 7.58224 5.66885 7.45113 6.07107C7.20891 6.81107 6.96669 7.55552 6.7378 8.29996C6.68669 8.46441 6.62224 8.63107 6.66002 8.81552C6.74669 9.22663 7.16002 9.6333 7.52224 9.65329C8.06002 9.68441 8.44224 9.43107 8.60446 8.93107L9.09335 7.44885C9.12446 7.3533 9.14446 7.25774 9.28224 7.24663C9.54002 7.22218 9.80002 7.18218 10.0534 7.13774C10.2711 7.09774 10.3 7.16218 10.2467 7.37107C9.94669 8.51774 9.66224 9.66885 9.36891 10.8177C9.11558 11.8111 9.34891 12.4289 10.1911 13.0044C11.1778 13.6755 12.16 14.3489 13.1467 15.0155C13.3045 15.1222 13.3867 15.24 13.4178 15.4355C13.5956 16.5644 13.7845 17.6911 13.9778 18.8177C14.0778 19.4022 14.5978 19.8 15.1356 19.7133C15.7356 19.62 16.1134 19.0844 16.0134 18.4688C15.7911 17.1311 15.5645 15.7933 15.34 14.4555C15.2845 14.1355 15.1134 13.8911 14.8534 13.7044C14.1867 13.2289 13.5267 12.7422 12.8511 12.28C12.66 12.1488 12.6356 12.0222 12.68 11.82C12.9222 10.7244 13.1556 9.62663 13.3934 8.52885C13.4222 8.39552 13.4578 8.26663 13.5089 8.05329C13.8756 8.61552 14.2178 9.10441 14.5222 9.61774C14.7845 10.0622 15.1222 10.3355 15.6622 10.3266C16.3245 10.3155 16.9845 10.3266 17.6467 10.3222C18.2578 10.3177 18.7045 9.89552 18.7067 9.33107C18.7111 8.76218 18.2645 8.33552 17.66 8.32885ZM6.90891 10.2733C6.63335 10.2977 6.50891 10.4822 6.44224 10.72C6.29335 11.2666 6.13558 11.8089 6.00224 12.36C5.95113 12.5755 5.86669 12.5866 5.67113 12.54C5.12002 12.4111 4.58891 12.2044 4.17113 12.1777C3.24224 12.18 2.56891 12.6688 2.3578 13.4266C2.00002 14.7133 1.6578 16.0044 1.32002 17.2977C1.18669 17.8044 1.46891 18.2777 1.9778 18.4222C2.31558 18.5177 2.66002 18.5955 3.00002 18.6911C3.15558 18.7333 3.20669 18.6955 3.22447 18.5266C3.34891 17.3711 4.4978 16.6666 5.58446 17.0822C5.7578 17.1488 5.81558 17.1422 5.86446 16.9466C6.04446 16.2066 6.24669 15.4755 6.44224 14.74C6.7778 13.4666 7.11335 12.1911 7.44446 10.9177C7.54224 10.5355 7.29113 10.24 6.90891 10.2733ZM13.3556 4.28218C14.4489 4.28885 15.3578 3.37107 15.3556 2.26885C15.3511 1.18218 14.4467 0.277739 13.36 0.275517C12.2667 0.273295 11.3467 1.17329 11.3467 2.24663C11.3489 3.37996 12.2311 4.27774 13.3556 4.28218ZM10.4111 14.0733C9.86891 13.6911 9.24669 13.3977 8.86002 12.7377C8.34891 14.6822 7.85558 16.5577 7.36002 18.4355C7.32002 18.5933 7.30669 18.7444 7.34891 18.9022C7.47558 19.3933 7.87335 19.7177 8.35335 19.7177C8.83558 19.7177 9.22446 19.4 9.36446 18.8733L10.5445 14.4311C10.5889 14.2711 10.56 14.1777 10.4111 14.0733ZM4.97558 17.7244C4.43335 17.7177 3.97335 18.1688 3.96669 18.7089C3.96002 19.2533 4.40669 19.7111 4.95113 19.7177C5.49113 19.7266 5.95335 19.2755 5.96002 18.7333C5.96891 18.1911 5.5178 17.7288 4.97558 17.7244Z"
                                        fill="currentColor" />
                                </svg>
                            </div>
                        </div>
                        <button type="submit"
                            class="lg:mt-10 mt-6 block text-center bg-primary-1 lg:h-17 h-14 w-full text-white font-medium text-md">INQUIRE
                            NOW</button>
                    </div>
                </form>
            </div>
            <div class="lg:col-span-3 md:col-span-6 hidden lg:flex flex-col">
                <div class="group hero-card-sm">
                    <a href="package-list-sidebar.html">
                        <img src="assets/images/destination/hd-3.webp" alt="placeholder"
                            class="lg:h-full w-full object-cover group-hover:scale-110 duration-500">
                        <div class="text-white absolute w-full lg:bottom-10 bottom-6  text-center ">
                            <h3
                                class="font-extrabold 2xl:text-xl md:text-lg text-2md  leading-1.6 group-hover:text-primary-1 duration-300 group-hover:tracking-wide">
                                Kathmandu Nepal
                            </h3>
                            <p class="font-medium lg:text-md text-base mt-1 mb-3">08 Tours Place</p>
                            <div class="h-[3px] w-9 bg-white rounded-md mx-auto"></div>
                        </div>
                    </a>
                </div>
                <div class="group hero-card-sm">
                    <a href="package-list-sidebar.html">
                        <img src="assets/images/destination/hd-4.webp" alt="placeholder"
                            class="lg:h-full w-full object-cover group-hover:scale-110 duration-500">
                        <div class="text-white absolute w-full lg:bottom-10 bottom-6 text-center ">
                            <h3
                                class="font-extrabold 2xl:text-xl md:text-lg text-2md  leading-1.6 group-hover:text-primary-1 duration-300 group-hover:tracking-wide">
                                The Colosseum, Rome
                            </h3>
                            <p class="font-medium lg:text-md text-base mt-1 mb-3">03 Tours Place</p>
                            <div class="h-[3px] w-9 bg-white rounded-md mx-auto"></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="swiper destination-slider-one lg:hidden px-3 mt-base">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="group hero-card-sm">
                        <a href="package-list-sidebar.html">
                            <img src="assets/images/destination/hd-1.webp" alt="placeholder"
                                class="lg:h-full w-full object-cover group-hover:scale-110 duration-500">
                            <div class="text-white absolute w-full lg:bottom-10 bottom-6 text-center ">
                                <h3
                                    class="font-extrabold 2xl:text-xl md:text-lg text-2md  leading-1.6 group-hover:text-primary-1 duration-300 group-hover:tracking-wide">
                                    Beauty of France
                                </h3>
                                <p class="font-medium lg:text-md text-base mt-1 mb-3">10 Tours Place</p>
                                <div class="h-[3px] w-9 bg-white rounded-md mx-auto"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="group hero-card-sm">
                        <a href="package-list-sidebar.html">
                            <img src="assets/images/destination/hd-2.webp" alt="placeholder"
                                class="lg:h-full w-full object-cover group-hover:scale-110 duration-500">
                            <div class="text-white absolute w-full lg:bottom-10 bottom-6 text-center ">
                                <h3
                                    class="font-extrabold 2xl:text-xl md:text-lg text-2md  leading-1.6 group-hover:text-primary-1 duration-300 group-hover:tracking-wide">
                                    Grand Switzerland
                                </h3>
                                <p class="font-medium lg:text-md text-base mt-1 mb-3">05 Tours Place</p>
                                <div class="h-[3px] w-9 bg-white rounded-md mx-auto"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="group hero-card-sm">
                        <a href="package-list-sidebar.html">
                            <img src="assets/images/destination/hd-3.webp" alt="placeholder"
                                class="lg:h-full w-full object-cover group-hover:scale-110 duration-500">
                            <div class="text-white absolute w-full lg:bottom-10 bottom-6 text-center ">
                                <h3
                                    class="font-extrabold 2xl:text-xl md:text-lg text-2md  leading-1.6 group-hover:text-primary-1 duration-300 group-hover:tracking-wide">
                                    Kathmandu Nepal
                                </h3>
                                <p class="font-medium lg:text-md text-base mt-1 mb-3">08 Tours Place</p>
                                <div class="h-[3px] w-9 bg-white rounded-md mx-auto"></div>
                            </div>
                        </a>
                    </div>

                </div>
                <div class="swiper-slide">
                    <div class="group hero-card-sm">
                        <a href="package-list-sidebar.html">
                            <img src="assets/images/destination/hd-4.webp" alt="placeholder"
                                class="lg:h-full w-full object-cover group-hover:scale-110 duration-500">
                            <div class="text-white absolute w-full lg:bottom-10 bottom-6 text-center ">
                                <h3
                                    class="font-extrabold 2xl:text-xl md:text-lg text-2md  leading-1.6 group-hover:text-primary-1 duration-300 group-hover:tracking-wide">
                                    The Colosseum, Rome
                                </h3>
                                <p class="font-medium lg:text-md text-base mt-1 mb-3">03 Tours Place</p>
                                <div class="h-[3px] w-9 bg-white rounded-md mx-auto"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--========== HERO STYLE ONE END ==========-->

    <div class="bg-dark-1 px-8 py-5 xl:mx-base mx-3 mt-base">
        <div class="marquee">
            <ul class="marquee__content lg:text-2md text-base text-white">
                <li><a href="#">Black Friday Big Offer</a></li>
                <li><a href="#">Black Friday Big Offer</a></li>
                <li><a href="#">Black Friday Big Offer</a></li>
                <li><a href="#">Black Friday Big Offer</a></li>
                <li><a href="#">Black Friday Big Offer</a></li>
                <li><a href="#">Black Friday Big Offer</a></li>
                <li><a href="#">Black Friday Big Offer</a></li>
                <li><a href="#">Black Friday Big Offer</a></li>
            </ul>
            <!-- Mirrors the content above -->
            <ul class="marquee__content lg:text-2md text-base text-white" aria-hidden="true">
                <li><a href="#">Black Friday Big Offer</a></li>
                <li><a href="#">Black Friday Big Offer</a></li>
                <li><a href="#">Black Friday Big Offer</a></li>
                <li><a href="#">Black Friday Big Offer</a></li>
                <li><a href="#">Black Friday Big Offer</a></li>
                <li><a href="#">Black Friday Big Offer</a></li>
                <li><a href="#">Black Friday Big Offer</a></li>
                <li><a href="#">Black Friday Big Offer</a></li>
            </ul>
        </div>
    </div>


    <!--========== TOUR CATEGIRY STYLE ONE START==========-->
    <div class="tour_type_style__one lg:pt-30 pt-24 relative z-1 ">
        <div class="absolute top-[10%] left-[2%] max-w-[9%] z-minus lg:inline-block hidden">
            <img src="assets/images/illustration/leaf-illustration.png" alt="leaf">
        </div>

        <div class="container">
            <div class="text-center lg:pb-[60px] pb-[40px]">
                <h5 class="section-sub-title-v1">Travel Category</h5>
                <h2 class="section-title-v1">Our Popular Tours Type</h2>
            </div>

            <div class="grid lg:grid-cols-4 md:grid-cols-2 gap-base">
                <div class="sm:text-left text-center wow fadeInUp">
                    <img src="assets/images/icons/t1-1.svg" alt="icon"
                        class="lg:max-w-[80px] max-w-[60px] sm:mx-0 mx-auto ">
                    <h4 class="card-title-alpha lg:mt-6 mt-4"><a href="package-list.html">Adventure Tour</a></h4>
                    <h5 class="font-sans font-medium text-md text-primary-1 mt-1">10 Tours+</h5>
                    <p class="regular-text-v1 !text-[17px] mt-1 !leading-1.6">Lorem ipsum dolor sit amet, conse ctetur
                        adipiscing elit. </p>
                </div>
                <div class="sm:text-left text-center wow fadeInUp" data-wow-delay="0.2s">
                    <img src="assets/images/icons/t1-2.svg" alt="icon"
                        class="lg:max-w-[80px] max-w-[60px] sm:mx-0 mx-auto ">
                    <h4 class="card-title-alpha lg:mt-6 mt-4"><a href="package-list.html">Cruises Tour</a></h4>
                    <h5 class="font-sans font-medium text-md text-primary-1 mt-1">10 Tours+</h5>
                    <p class="regular-text-v1 !text-[17px] mt-1 !leading-1.6">Lorem ipsum dolor sit amet, conse ctetur
                        adipiscing elit. </p>
                </div>
                <div class="sm:text-left text-center wow fadeInUp" data-wow-delay="0.4s">
                    <img src="assets/images/icons/t1-3.svg" alt="icon"
                        class="lg:max-w-[80px] max-w-[60px] sm:mx-0 mx-auto ">
                    <h4 class="card-title-alpha lg:mt-6 mt-4"><a href="package-list.html">Hiking TourTour</a></h4>
                    <h5 class="font-sans font-medium text-md text-primary-1 mt-1">10 Tours+</h5>
                    <p class="regular-text-v1 !text-[17px] mt-1 !leading-1.6">Lorem ipsum dolor sit amet, conse ctetur
                        adipiscing elit. </p>
                </div>
                <div class="sm:text-left text-center wow fadeInUp" data-wow-delay="0.6s">
                    <img src="assets/images/icons/t1-4.svg" alt="icon"
                        class="lg:max-w-[80px] max-w-[60px] sm:mx-0 mx-auto ">
                    <h4 class="card-title-alpha lg:mt-6 mt-4"><a href="package-list.html">Honeymoon Tour</a></h4>
                    <h5 class="font-sans font-medium text-md text-primary-1 mt-1">10 Tours+</h5>
                    <p class="regular-text-v1 !text-[17px] mt-1 !leading-1.6">Lorem ipsum dolor sit amet, conse ctetur
                        adipiscing elit. </p>
                </div>
            </div>
        </div>
    </div>
    <!--========== TOUR CATEGIRY STYLE ONE END==========-->

    <!--========== PACKAGE STYLE ONE START==========-->
    <div class="package_style__one lg:pt-30 pt-24 lg:pb-30 pb-24 z-1 relative">
        <div class="absolute bottom-[10%] left-[2%] max-w-[13%] z-minus lg:inline-block hidden">
            <img src="assets/images/illustration/leaf-illustration-2.png" alt="leaf">
        </div>
        <div class="absolute top-[7%] right-0 max-w-[14%] z-minus lg:inline-block hidden">
            <img src="assets/images/illustration/tree-illustration.png" alt="leaf">
        </div>
        <div class="container">
            <div class="text-center lg:pb-[60px] pb-[40px]">
                <h5 class="section-sub-title-v1">Ecplore Our Tours</h5>
                <h2 class="section-title-v1">Browse New & Most Popular Tours</h2>
            </div>

            <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-base">
                <div class="group/card package-card-style-one wow fadeInUp">
                    <div class="overflow-hidden relative">
                        <a href="package-details.html">
                            <img src="assets/images/packages/p1-1.webp" alt="package-img"
                                class="w-full group-hover/card:scale-105 duration-300">
                        </a>
                        <span
                            class="absolute inline-block top-5 right-5 text-sm text-white rounded-full bg-[#219FFF] py-1 px-3">20%
                            off</span>
                    </div>
                    <h3 class="card-title-alpha group-hover/card:text-primary-1 lg:mt-6 mt-5"><a
                            href="package-details.html">Cusco & Salkantay Trekking to Machu
                            Picchu</a></h3>

                    <ul class="flex flex-wrap lg:text-[15px] text-[13px] font-medium text-dark-2 mt-4 package-feature">
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
                            <span>From <span class="text-primary-1 font-bold">$250</span></span>
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
                <div class="group/card package-card-style-one wow fadeInUp" data-wow-delay="0.2s">
                    <div class="overflow-hidden relative">
                        <a href="package-details.html">
                            <img src="assets/images/packages/p1-2.webp" alt="package-img"
                                class="w-full group-hover/card:scale-105 duration-300">
                        </a>
                    </div>
                    <h3 class="card-title-alpha group-hover/card:text-primary-1 lg:mt-6 mt-5"><a
                            href="package-details.html">Casablanca Valley Wine Tasting Days</a></h3>

                    <ul class="flex flex-wrap lg:text-[15px] text-[13px] font-medium text-dark-2 mt-4 package-feature">
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
                            <span>From <span class="text-primary-1 font-bold">$250</span></span>
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
                <div class="group/card package-card-style-one wow fadeInUp" data-wow-delay="0.4s">
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

                    <ul class="flex flex-wrap lg:text-[15px] text-[13px] font-medium text-dark-2 mt-4 package-feature">
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
                            <span>From <span class="text-primary-1 font-bold">$250</span></span>
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
                <div class="group/card package-card-style-one wow fadeInUp">
                    <div class="overflow-hidden relative">
                        <a href="package-details.html">
                            <img src="assets/images/packages/p1-4.webp" alt="package-img"
                                class="w-full group-hover/card:scale-105 duration-300">
                        </a>

                    </div>
                    <h3 class="card-title-alpha group-hover/card:text-primary-1 lg:mt-6 mt-5"><a
                            href="package-details.html">Buenos Aires, Calafate, Abruzzo, Italy </a></h3>

                    <ul class="flex flex-wrap lg:text-[15px] text-[13px] font-medium text-dark-2 mt-4 package-feature">
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
                            <span>From <span class="text-primary-1 font-bold">$250</span></span>
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
                <div class="group/card package-card-style-one wow fadeInUp" data-wow-delay="0.2s">
                    <div class="overflow-hidden relative">
                        <a href="package-details.html">
                            <img src="assets/images/packages/p1-5.webp" alt="package-img"
                                class="w-full group-hover/card:scale-105 duration-300">
                        </a>
                        <span
                            class="absolute inline-block top-5 right-5 text-sm text-white rounded-full bg-[#219FFF] py-1 px-3">10%
                            off</span>
                    </div>
                    <h3 class="card-title-alpha group-hover/card:text-primary-1 lg:mt-6 mt-5"><a
                            href="package-details.html">Casablanca Valley Wine Tasting Day</a></h3>

                    <ul class="flex flex-wrap lg:text-[15px] text-[13px] font-medium text-dark-2 mt-4 package-feature">
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
                            <span>From <span class="text-primary-1 font-bold">$250</span></span>
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
                <div class="bg-primary-1 bg-[url('../images/backgrounds/package-bg.html')] bg-center bg-no-repeat bg-cover text-center relative p-base flex items-center justify-center wow fadeInUp"
                    data-wow-delay="0.4s">
                    <div>
                        <h3 class="lg:text-3xl text-2xl leading-1.5 text-white font-medium">Book now and get 20% off
                        </h3>
                        <a href="package-list-sidebar.html" class="btn_primary__v1 border border-white mt-base">View
                            More</a>
                    </div>
                    <!-- <img src="./assets/images/backgrounds/villa-illustration.png" alt="illustration" class="absolute bottom-0 left-0 right-0"> -->
                </div>
            </div>
        </div>
    </div>
    <!--========== PACKAGE STYLE ONE END==========-->

    <!--========== VIDEO BANNER TWO START ==========-->
    <div
        class="paralax-container lg:py-40 py-30 relative overflow-hidden before:absolute before:content-[''] before:inset-0 before:bg-dark-base before:bg-opacity-30 before:z-1">
        <div class="jarallax absolute inset-0" data-jarallax>
            <img class="jarallax-img" src="assets/images/backgrounds/video-banner.webp" alt="placeholder" />
        </div>


        <div class="container relative z-2">
            <div class="max-w-[560px] mx-auto text-center text-white">
                <h2 class="lg:text-4xl text-2xl font-bold leading-1.3">Views trip latest shots</h2>
                <p class="lg:text-2md text-md  font-medium leading-1.5 mt-4">Mlor sit amet, consectetur adipiscing
                    elit. Arcu at
                    viverra eget porttitor condimentum nisl pool.
                </p>

                <a data-fancybox href="https://www.youtube.com/watch?v=vJoNqBZ9QlM"
                    class="mt-8 inline-flex relative lg:h-20 lg:w-20 h-16 w-16 justify-center items-center rounded-full bg-primary-1 before:content-[''] before:absolute before:-inset-3 before:border-primary-1 before:border-2 before:rounded-full before:animate-pulse">
                    <img src="assets/images/icons/video-circle.svg" alt="placeholder">
                </a>
            </div>
        </div>
    </div>
    <!--========== VIDEO BANNER TWO END ==========-->

    <!--========== PARTNER STYLE ONE START ==========-->
    <div class="bg-gradient-to-t to-[#FFF1EC] from-white ">
        <div class="swiper partner-swiper border-primary-1  border-b">
            <div class="swiper-wrapper " style="transition-timing-function: linear;">
                <div class="swiper-slide">
                    <div class="partner-logo-item">
                        <img src="assets/images/pratners/p1.png" alt="pratners"
                            class="lg:max-w-[138px] max-w-[100px] mx-auto">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="partner-logo-item">
                        <img src="assets/images/pratners/p2.png" alt="pratners"
                            class="lg:max-w-[138px] max-w-[100px] mx-auto">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="partner-logo-item">
                        <img src="assets/images/pratners/p3.png" alt="pratners"
                            class="lg:max-w-[138px] max-w-[100px] mx-auto">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="partner-logo-item">
                        <img src="assets/images/pratners/p4.png" alt="pratners"
                            class="lg:max-w-[138px] max-w-[100px] mx-auto">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="partner-logo-item">
                        <img src="assets/images/pratners/p5.png" alt="pratners"
                            class="lg:max-w-[138px] max-w-[100px] mx-auto">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="partner-logo-item">
                        <img src="assets/images/pratners/p6.png" alt="pratners"
                            class="lg:max-w-[138px] max-w-[100px] mx-auto">
                    </div>
                </div>
            </div>
        </div>

        <!--========== ABOUT US STYLE ONE START ==========-->
        <div class="about_style__one lg:pt-30 pt-24 relative">
            <div class="container">
                <div class="grid lg:grid-cols-2 gap-base items-center">
                    <div class="relative">
                        <img src="assets/images/about/about1-1.webp" alt="about-img">
                    </div>
                    <div class="div">
                        <h5 class="section-sub-title-v1">About Us</h5>
                        <h2 class="section-title-v1 max-w-xl">We are Professional Planners For your Vacations</h2>
                        <div
                            class="mt-7 xl:pl-24 lg:pl-20 relative before:content-[''] before:left-0 before:top-4 before:bg-[#d9d9d9] before:w-[10%] before:h-[1px] lg:before:absolute">
                            <p class="regular-text-v1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. sed do
                                eiusmod tem por incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                            <h5 class="font-sans text-dark-1 text-md font-medium mt-4">Speak to our Destination Experts
                                at Direct Call +1 546 378 654</h5>
                        </div>
                        <ul class="pt-6 lg:text-md text-base">
                            <li class="flex items-center font-sans text-dark-3 mt-4">
                                <div class="text-primary-1 flex-shrink-0 text-2md">
                                    <i class="bi bi-check-circle"></i>
                                </div>
                                <span class="ml-3">All placges and activiates are carefully picked by us.</span>
                            </li>
                            <li class="flex items-center font-sans text-dark-3 mt-4">
                                <div class="text-primary-1 flex-shrink-0 text-2md">
                                    <i class="bi bi-check-circle"></i>
                                </div>
                                <span class="ml-3">We are an award winning agency</span>
                            </li>
                            <li class="flex items-center font-sans text-dark-3 mt-4">
                                <div class="text-primary-1 flex-shrink-0 text-2md">
                                    <i class="bi bi-check-circle"></i>
                                </div>
                                <span class="ml-3">Trusted by more than 80,000 customers</span>
                            </li>
                        </ul>
                        <div class="mt-10">
                            <a href="about.html" class="btn_primary__v1">
                                Find Out More
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7.42505 16.5999L12.8584 11.1666C13.5 10.5249 13.5 9.4749 12.8584 8.83324L7.42505 3.3999"
                                        stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--========== ABOUT US STYLE ONE END ==========-->
    </div>
    <!--========== PARTNER STYLE ONE END ==========-->

    <!--========== FEATURED PACKAGE STYLE ONE START==========-->
    <div class="featured_package__style lg:pt-30 pt-24">
        <div class="container">
            <div class="text-center lg:pb-[60px] pb-[40px]">
                <h5 class="section-sub-title-v1">Featured Packages</h5>
                <h2 class="section-title-v1">Browse Our Featured Packages</h2>
            </div>
        </div>
        <div class="px-3 overflow-hidden">
            <div
                class="flex 2xl:gap-x-12 gap-base lg:items-center col-span-10 2xl:ml-right-container lg:flex-row flex-col ">
                <div class="xl:max-w-xl lg:max-w-lg shrink-0 order-2 lg:order-1">
                    <h5 class="text-2md text-primary-1 leading-1.5 font-sans font-bold">Starting at $1,200</h5>
                    <h3 class="font-serif font-medium lg:text-xl text-lg  leading-1.35 mt-2 text-dark-1">Summer
                        homecoming X MEXICO
                    </h3>
                    <p class="text-dark-2 leading-1.7 font-medium mt-5">Join us as we explore afro-latino culture and
                        celebrate Colombia’s Independence Weekend! </p>
                    <p class="regular-text-v1 mt-[14px]">Duis id interdum ex, eu accumsan
                        massa. Fusce vel nibh diam. Nulla ultrices ex at erat pharetra, vitae viverra mauris
                        condimentum. Sed ullamcorper dignissim enim, vel egestas lacus tincidunt ac.</p>
                    <ul class="pt-2 lg:text-md text-base">
                        <li class="flex items-center font-sans text-dark-3 mt-4">
                            <div class="text-primary-1 text-2md flex-shrink-0">
                                <i class="bi bi-check-circle"></i>
                            </div>
                            <span class="ml-3">Professional Tour Guide</span>
                        </li>
                        <li class="flex items-center font-sans text-dark-3 mt-4">
                            <div class="text-primary-1 text-2md flex-shrink-0">
                                <i class="bi bi-check-circle"></i>
                            </div>
                            <span class="ml-3">Transportation cost for carrying new materials/parts</span>
                        </li>
                        <li class="flex items-center font-sans text-dark-3 mt-4">
                            <div class="text-primary-1 text-2md flex-shrink-0">
                                <i class="bi bi-check-circle"></i>
                            </div>
                            <span class="ml-3">Transportation cost for carrying new materials/parts</span>
                        </li>
                    </ul>

                    <div class="mt-12">
                        <a href="package-details.html" class="btn_primary__v1">
                            Book Now
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M7.42505 16.5999L12.8584 11.1666C13.5 10.5249 13.5 9.4749 12.8584 8.83324L7.42505 3.3999"
                                    stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </a>
                    </div>

                </div>
                <div class="order-1 lg:order-2 fadeInRight wow"><img src="assets/images/packages/fp1-1.webp"
                        alt="fp" />
                </div>
            </div>
            <div
                class="flex justify-end 2xl:gap-x-12 gap-base mt-17 lg:items-center col-span-10 2xl:mr-right-container lg:flex-row flex-col ">
                <div class="wow fadeInLeft"><img src="assets/images/packages/fp1-2.webp" alt="fp" /></div>
                <div class="xl:max-w-xl lg:max-w-lg shrink-0">
                    <h5 class="text-2md text-primary-1 leading-1.5 font-sans font-bold">Starting at $1,200</h5>
                    <h3 class="font-serif font-medium lg:text-xl text-lg  leading-1.35 mt-2 text-dark-1">Benefit from a
                        15% discount make your reservations.
                    </h3>
                    <p class="text-dark-2 leading-1.7 font-medium mt-5">Join us as we explore afro-latino culture and
                        celebrate Colombia’s Independence Weekend! </p>
                    <p class="lg:text-base text-sm font-sans text-dark-3 leading-1.9 mt-[14px]">Duis id interdum ex, eu
                        accumsan
                        massa. Fusce vel nibh diam. Nulla ultrices ex at erat pharetra, vitae viverra mauris
                        condimentum. Sed ullamcorper dignissim enim, vel egestas lacus tincidunt ac.</p>
                    <ul class="pt-2 lg:text-md text-base">
                        <li class="flex items-center font-sans text-dark-3 mt-4">
                            <div class="text-primary-1 text-2md flex-shrink-0">
                                <i class="bi bi-check-circle"></i>
                            </div>
                            <span class="ml-3">1 Night Halong bay overnight cruise with tours, lunch &
                                dinner</span>
                        </li>
                        <li class="flex items-center font-sans text-dark-3 mt-4">
                            <div class="text-primary-1 text-2md flex-shrink-0">
                                <i class="bi bi-check-circle"></i>
                            </div>
                            <span class="ml-3">Return airport transfers in AC vehicle</span>
                        </li>
                        <li class="flex items-center font-sans text-dark-3 mt-4">
                            <div class="text-primary-1 text-2md flex-shrink-0">
                                <i class="bi bi-check-circle"></i>
                            </div>
                            <span class="ml-3">Professional tour guide & drivers</span>
                        </li>
                    </ul>

                    <div class="mt-12">
                        <a href="package-details.html" class="btn_primary__v1">
                            Book Now
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M7.42505 16.5999L12.8584 11.1666C13.5 10.5249 13.5 9.4749 12.8584 8.83324L7.42505 3.3999"
                                    stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </a>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <!--========== FEATURED PACKAGE STYLE ONE END==========-->

    <!--========== TESTIMONIAL STYLE ONE START==========-->
    <div class="testimonial_style__one z-1 lg:pt-30 pt-24 relative">
        <div class="absolute top-[5%] left-[1%] max-w-[9%] z-minus lg:inline-block hidden">
            <img src="assets/images/illustration/bird-illustration.png" alt="leaf">
        </div>
        <div class="container relative">
            <div class="text-center lg:pb-[60px] pb-[40px]">
                <h5 class="section-sub-title-v1">Testimonial</h5>
                <h2 class="section-title-v1">What Our Travelers Say</h2>
            </div>

            <div class="swiper testimonial-slider-one ">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="max-w-[970px]  text-center mx-auto">
                            <p class="font-serif text-2md lg:text-[25px] text-dark-2 leading-1.8 italic">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Adipisci, ipsam quis ad ab
                                iste blanditiis doloribus facilis temporibus asperiores sint amet consectetur
                                adipisicing elit. Adipisci.
                            </p>
                            <h5 class="lg:text-[25px] text-2md font-semibold text-dark-1 mt-base">Johan Martin Sr</h5>
                            <div class="relative inline-block mt-6">
                                <div
                                    class="h-[38px] w-[38px] bg-primary-1 rounded-full border-2 border-white absolute top-0 left-0 -translate-x-1/3 text-white flex justify-center items-center">
                                    <svg width="18" height="16" viewBox="0 0 18 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M4.95 0.184651C4.90078 0.240901 3.97266 1.40457 2.88633 2.77215C1.32187 4.74793 0.914062 5.28582 0.914062 5.36317C0.914062 5.44754 0.966797 5.50731 1.21992 5.71824C1.39219 5.85535 1.75078 6.19637 2.02148 6.46707C3.11836 7.5745 3.76172 8.65731 3.98672 9.76473C4.06055 10.1163 4.06055 10.8089 3.98672 11.2378C3.76875 12.5245 2.91445 14.0679 1.71563 15.3475C1.51523 15.5585 1.44141 15.6639 1.44141 15.7307C1.44141 15.9593 1.60313 15.9628 2.12344 15.7448C3.6 15.1225 5.08359 14.1347 6.16992 13.0448C7.57617 11.6386 8.39883 10.0987 8.73984 8.24598C8.83828 7.72215 8.83125 6.72723 8.72578 6.21395C8.32149 4.21707 7.2 2.16395 5.58984 0.465901C5.18906 0.0440264 5.11172 0.0123854 4.95 0.184651Z"
                                            fill="currentColor" />
                                        <path
                                            d="M13.2117 0.184724C13.1625 0.240973 12.2344 1.40464 11.148 2.77222C9.58359 4.748 9.17578 5.2859 9.17578 5.36324C9.17578 5.44761 9.22852 5.50738 9.48516 5.71832C9.65391 5.85543 10.0125 6.19644 10.2832 6.46714C11.3801 7.57457 12.0234 8.65738 12.2484 9.7648C12.3223 10.1164 12.3223 10.8089 12.2484 11.2378C12.1816 11.6211 12.0023 12.2117 11.8125 12.6476C11.4434 13.4984 10.698 14.5882 9.93164 15.3968C9.76992 15.5691 9.70313 15.6675 9.70313 15.7343C9.70313 15.9593 9.86484 15.9628 10.3852 15.7449C12.2098 14.9785 14.0449 13.6355 15.1594 12.2539C15.968 11.2519 16.5832 10.032 16.8715 8.86129C17.0297 8.22144 17.0648 7.92965 17.0648 7.2441C17.0648 6.64996 17.0578 6.52691 16.9699 6.13316C16.5445 4.14332 15.4441 2.14293 13.8516 0.465974C13.4508 0.0440989 13.3734 0.0124578 13.2117 0.184724Z"
                                            fill="currentColor" />
                                    </svg>

                                </div>
                                <img src="assets/images/touriest/testi-avater.webp" alt="revierer "
                                    class="h-20 w-20 object-cover rounded-full">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="max-w-[970px]  text-center mx-auto">
                            <p class="font-serif text-2md lg:text-[25px] text-dark-2 leading-1.8 italic">
                                Nullam orci dui, dictum et magna sollicitudin, tempor blandit erat. Maecenas suscipit
                                tellus sit amet augue placerat fringilla a id lacus. Fusce tincidunt in leo lacinia
                                condimentum. Donec placerat, orci.
                            </p>
                            <h5 class="lg:text-[25px] text-2md font-semibold text-dark-1 mt-base">Johan Martin Sr</h5>
                            <div class="relative inline-block mt-6">
                                <div
                                    class="h-[38px] w-[38px] bg-primary-1 rounded-full border-2 border-white absolute top-0 left-0 -translate-x-1/3 text-white flex justify-center items-center">
                                    <svg width="18" height="16" viewBox="0 0 18 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M4.95 0.184651C4.90078 0.240901 3.97266 1.40457 2.88633 2.77215C1.32187 4.74793 0.914062 5.28582 0.914062 5.36317C0.914062 5.44754 0.966797 5.50731 1.21992 5.71824C1.39219 5.85535 1.75078 6.19637 2.02148 6.46707C3.11836 7.5745 3.76172 8.65731 3.98672 9.76473C4.06055 10.1163 4.06055 10.8089 3.98672 11.2378C3.76875 12.5245 2.91445 14.0679 1.71563 15.3475C1.51523 15.5585 1.44141 15.6639 1.44141 15.7307C1.44141 15.9593 1.60313 15.9628 2.12344 15.7448C3.6 15.1225 5.08359 14.1347 6.16992 13.0448C7.57617 11.6386 8.39883 10.0987 8.73984 8.24598C8.83828 7.72215 8.83125 6.72723 8.72578 6.21395C8.32149 4.21707 7.2 2.16395 5.58984 0.465901C5.18906 0.0440264 5.11172 0.0123854 4.95 0.184651Z"
                                            fill="currentColor" />
                                        <path
                                            d="M13.2117 0.184724C13.1625 0.240973 12.2344 1.40464 11.148 2.77222C9.58359 4.748 9.17578 5.2859 9.17578 5.36324C9.17578 5.44761 9.22852 5.50738 9.48516 5.71832C9.65391 5.85543 10.0125 6.19644 10.2832 6.46714C11.3801 7.57457 12.0234 8.65738 12.2484 9.7648C12.3223 10.1164 12.3223 10.8089 12.2484 11.2378C12.1816 11.6211 12.0023 12.2117 11.8125 12.6476C11.4434 13.4984 10.698 14.5882 9.93164 15.3968C9.76992 15.5691 9.70313 15.6675 9.70313 15.7343C9.70313 15.9593 9.86484 15.9628 10.3852 15.7449C12.2098 14.9785 14.0449 13.6355 15.1594 12.2539C15.968 11.2519 16.5832 10.032 16.8715 8.86129C17.0297 8.22144 17.0648 7.92965 17.0648 7.2441C17.0648 6.64996 17.0578 6.52691 16.9699 6.13316C16.5445 4.14332 15.4441 2.14293 13.8516 0.465974C13.4508 0.0440989 13.3734 0.0124578 13.2117 0.184724Z"
                                            fill="currentColor" />
                                    </svg>

                                </div>
                                <img src="assets/images/touriest/testi-avater-2.webp" alt="revierer "
                                    class="h-20 w-20 object-cover rounded-full">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="hidden testi-prev lg:inline-block absolute max-w-[70px] right-0 top-1/2 -translate-y-1/2 translate-x-full group text-primary-1">
                <svg width="79" height="50" viewBox="0 0 79 50" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <circle cx="25" cy="25" r="24.25" transform="matrix(1 0 0 -1 29 50)"
                        stroke="currentColor" stroke-width="1.5" />
                    <path class="group-hover:translate-x-2 duration-200"
                        d="M1 25.75C0.585786 25.75 0.25 25.4142 0.25 25C0.25 24.5858 0.585786 24.25 1 24.25L1 25.75ZM58.5303 24.4697C58.8232 24.7626 58.8232 25.2374 58.5303 25.5303L53.7574 30.3033C53.4645 30.5962 52.9896 30.5962 52.6967 30.3033C52.4038 30.0104 52.4038 29.5355 52.6967 29.2426L56.9393 25L52.6967 20.7574C52.4038 20.4645 52.4038 19.9896 52.6967 19.6967C52.9896 19.4038 53.4645 19.4038 53.7574 19.6967L58.5303 24.4697ZM1 24.25L58 24.25L58 25.75L1 25.75L1 24.25Z"
                        fill="currentColor" />
                </svg>
            </div>
            <div
                class="hidden testi-next lg:inline-block absolute max-w-[70px] text-primary-1 left-0 top-1/2 -translate-y-1/2 -translate-x-full group">
                <svg width="79" height="50" viewBox="0 0 79 50" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <circle cx="25" cy="25" r="24.25" transform="rotate(-180 25 25)"
                        stroke="currentColor" stroke-width="1.5" />
                    <path class="group-hover:-translate-x-2 duration-200"
                        d="M78 25.75C78.4142 25.75 78.75 25.4142 78.75 25C78.75 24.5858 78.4142 24.25 78 24.25L78 25.75ZM20.4697 24.4697C20.1768 24.7626 20.1768 25.2374 20.4697 25.5303L25.2426 30.3033C25.5355 30.5962 26.0104 30.5962 26.3033 30.3033C26.5962 30.0104 26.5962 29.5355 26.3033 29.2426L22.0607 25L26.3033 20.7574C26.5962 20.4645 26.5962 19.9896 26.3033 19.6967C26.0104 19.4038 25.5355 19.4038 25.2426 19.6967L20.4697 24.4697ZM78 24.25L21 24.25L21 25.75L78 25.75L78 24.25Z"
                        fill="currentColor" />
                </svg>
            </div>
        </div>
    </div>
    <!--========== TESTIMONIAL STYLE ONE END==========-->

    <!--========== FAQ STYLE ONE START==========-->
    <div class="faq_style__one z-1 lg:pt-30 pt-24 mt-30 bg-gradient-to-t to-[#FFF1EC] from-white relative ">
        <div class="absolute top-[5%] right-[1%] max-w-[9%] z-minus lg:inline-block hidden">
            <img src="assets/images/illustration/bird-illustration.png" alt="leaf">
        </div>
        <div class="container">
            <div class="text-center lg:pb-[60px] pb-[40px]">
                <h5 class="section-sub-title-v1">Most wanted Q & A</h5>
                <h2 class="section-title-v1">Frequently Asked Questions</h2>
            </div>
            <div class="accordion gap-base grid lg:grid-cols-2 grid-cols-1">
                <div class="col-span-1 space-y-base">
                    <div class="single__accordion shadow-custom-1 bg-white">
                        <button type="button"
                            class="toggle px-5 py-5 leading-1.5 text-2md text-start w-full text-dark-1 font-serif">01.
                            What are the best locations for wedding tours?</button>
                        <div class="hidden inner px-5 pb-5">
                            <p class="text-base font-sans text-dark-3 leading-1.9">
                                Some of the strangest places on earth are also the most sublime: from the UFO-like
                                dragon's blood trees in Yemen to a rainbow-colored hot spring in Yellowstone to a bridge
                                in Germany that looks like a leftover prop from Lord of the Rings.
                            </p>
                        </div>
                    </div>
                    <div class="single__accordion shadow-custom-1 bg-white">
                        <button type="button"
                            class="toggle px-5 py-5 leading-1.5 text-2md text-start w-full text-dark-1 font-serif">02.
                            Do you offer international packages?</button>
                        <div class="hidden inner px-5 pb-5">
                            <p class="text-base font-sans text-dark-3 leading-1.9">
                                Some of the strangest places on earth are also the most sublime: from the UFO-like
                                dragon's blood trees in Yemen to a rainbow-colored hot spring in Yellowstone to a bridge
                                in Germany that looks like a leftover prop from Lord of the Rings.
                            </p>
                        </div>
                    </div>
                    <div class="single__accordion shadow-custom-1 bg-white">
                        <button type="button"
                            class="toggle px-5 py-5 leading-1.5 text-2md text-start w-full text-dark-1 font-serif">03.
                            Can we customize your package with you?</button>
                        <div class="hidden inner px-5 pb-5">
                            <p class="text-base font-sans text-dark-3 leading-1.9">
                                Some of the strangest places on earth are also the most sublime: from the UFO-like
                                dragon's blood trees in Yemen to a rainbow-colored hot spring in Yellowstone to a bridge
                                in Germany that looks like a leftover prop from Lord of the Rings.
                            </p>
                        </div>
                    </div>
                    <div class="single__accordion shadow-custom-1 bg-white">
                        <button type="button"
                            class="toggle px-5 py-5 leading-1.5 text-2md text-start w-full text-dark-1 font-serif">04.
                            Why would we book our package?</button>
                        <div class="hidden inner px-5 pb-5">
                            <p class="text-base font-sans text-dark-3 leading-1.9">
                                Some of the strangest places on earth are also the most sublime: from the UFO-like
                                dragon's blood trees in Yemen to a rainbow-colored hot spring in Yellowstone to a bridge
                                in Germany that looks like a leftover prop from Lord of the Rings.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-span-1 space-y-base">
                    <div class="single__accordion shadow-custom-1 bg-white">
                        <button type="button"
                            class="toggle px-5 py-5 leading-1.5 text-2md text-start w-full text-dark-1 font-serif">05.
                            What’s it like your job, grab a backpack?</button>
                        <div class="hidden inner px-5 pb-5">
                            <p class="text-base font-sans text-dark-3 leading-1.9">
                                Some of the strangest places on earth are also the most sublime: from the UFO-like
                                dragon's blood trees in Yemen to a rainbow-colored hot spring in Yellowstone to a bridge
                                in Germany that looks like a leftover prop from Lord of the Rings.
                            </p>
                        </div>
                    </div>
                    <div class="single__accordion shadow-custom-1 bg-white">
                        <button type="button"
                            class="toggle px-5 py-5 leading-1.5 text-2md text-start w-full text-dark-1 font-serif">06.
                            Do you offer international packages?</button>
                        <div class="hidden inner px-5 pb-5">
                            <p class="text-base font-sans text-dark-3 leading-1.9">
                                Some of the strangest places on earth are also the most sublime: from the UFO-like
                                dragon's blood trees in Yemen to a rainbow-colored hot spring in Yellowstone to a bridge
                                in Germany that looks like a leftover prop from Lord of the Rings.
                            </p>
                        </div>
                    </div>
                    <div class="single__accordion shadow-custom-1 bg-white">
                        <button type="button"
                            class="toggle px-5 py-5 leading-1.5 text-2md text-start w-full text-dark-1 font-serif">07.
                            What are the best locations for wedding tours?</button>
                        <div class="hidden inner px-5 pb-5">
                            <p class="text-base font-sans text-dark-3 leading-1.9">
                                Some of the strangest places on earth are also the most sublime: from the UFO-like
                                dragon's blood trees in Yemen to a rainbow-colored hot spring in Yellowstone to a bridge
                                in Germany that looks like a leftover prop from Lord of the Rings.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--========== FAQ STYLE ONE END==========-->

    <!--========== BLOG STYLE ONE START==========-->
    <div class="blog_style_one relative z-1 lg:pt-30 pt-24">
        <div class="absolute top-[5%] left-[1%] max-w-[9%] z-minus lg:inline-block hidden">
            <img src="assets/images/illustration/bird-illustration.png" alt="leaf">
        </div>
        <div class="container">
            <div class="text-center lg:pb-[60px] pb-[40px]">
                <h5 class="section-sub-title-v1">Blog and News</h5>
                <h2 class="section-title-v1">Stay Update with Travel Tips!</h2>
            </div>
            <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-base">
                <!-- single blog card -->
                <div class="blog_card__one group wow fadeInUp">
                    <div class="overflow-hidden">
                        <a href="blog-details.html">
                            <img src="assets/images/blog/b1-1.webp" alt="blog-image"
                                class="w-full hover:scale-105 duration-300">
                        </a>
                    </div>
                    <div class="mt-6">
                        <ul class="flex items-center text-[13px] font-medium text-dark-2">
                            <li
                                class="flex items-center relative first:pl-0 pl-2 pr-2 before:content-[''] before:absolute before:h-2/3 before:w-[1px] before:bg-dark-2 before:-translate-y-1/2 before:top-1/2 before:left-0 first:before:hidden">
                                <i class="bi bi-calendar-date text-[15px]"></i>
                                <span class="ml-2">24 Sep 2022 · 6:30 PM</span>
                            </li>
                            <li
                                class="flex items-center relative first:pl-0 pl-2 pr-2 before:content-[''] before:absolute before:h-2/3 before:w-[1px] before:bg-dark-2 before:-translate-y-1/2 before:top-1/2 before:left-0 ">
                                250 View</li>
                        </ul>
                        <h3 class="card-title-alpha mt-4">
                            <a href="blog-details.html">
                                Indulge in purest forms of body care with.
                            </a>
                        </h3>

                        <a href="blog-details.html"
                            class="group ease-in hover:text-primary-1 duration-200 inline-flex items-center mt-4 lg:text-md text-base text-dark-1 font-medium">
                            <span class="mr-2">Read More</span>
                            <svg class="group-hover:translate-x-2 duration-200 " width="27" height="14"
                                viewBox="0 0 27 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M0.217443 6.25H18.4827C18.6276 6.25 18.7001 6.30263 18.7001 6.40789V7.59211C18.7001 7.69737 18.6276 7.75 18.4827 7.75H0.217443C0.0724811 7.75 0 7.69737 0 7.59211V6.40789C0 6.30263 0.0724811 6.25 0.217443 6.25Z"
                                    fill="currentColor" />
                                <path
                                    d="M20.7001 12.2802L25.0467 7.93355C25.5601 7.42021 25.5601 6.58021 25.0467 6.06688L20.7001 1.72021"
                                    stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </a>
                    </div>
                </div>
                <!-- single blog card -->
                <div class="blog_card__one group wow fadeInUp" data-wow-delay="0.2s">
                    <div class="overflow-hidden">
                        <a href="blog-details.html">
                            <img src="assets/images/blog/b1-2.webp" alt="blog-image"
                                class="w-full hover:scale-105 duration-300">
                        </a>
                    </div>
                    <div class="mt-6">
                        <ul class="flex items-center text-[13px] font-medium text-dark-2">
                            <li
                                class="flex items-center relative first:pl-0 pl-2 pr-2 before:content-[''] before:absolute before:h-2/3 before:w-[1px] before:bg-dark-2 before:-translate-y-1/2 before:top-1/2 before:left-0 first:before:hidden">
                                <i class="bi bi-calendar-date text-[15px]"></i>
                                <span class="ml-2">24 Sep 2022 · 6:30 PM</span>
                            </li>
                            <li
                                class="flex items-center relative first:pl-0 pl-2 pr-2 before:content-[''] before:absolute before:h-2/3 before:w-[1px] before:bg-dark-2 before:-translate-y-1/2 before:top-1/2 before:left-0 ">
                                250 View</li>
                        </ul>
                        <h3 class="card-title-alpha mt-4">
                            <a href="blog-details.html">
                                Best Places to Visit in Dalhousie, Himachal.
                            </a>
                        </h3>

                        <a href="blog-details.html"
                            class="group ease-in hover:text-primary-1 duration-200 inline-flex items-center mt-4 lg:text-md text-base text-dark-1 font-medium">
                            <span class="mr-2">Read More</span>
                            <svg class="group-hover:translate-x-2 duration-200 " width="27" height="14"
                                viewBox="0 0 27 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M0.217443 6.25H18.4827C18.6276 6.25 18.7001 6.30263 18.7001 6.40789V7.59211C18.7001 7.69737 18.6276 7.75 18.4827 7.75H0.217443C0.0724811 7.75 0 7.69737 0 7.59211V6.40789C0 6.30263 0.0724811 6.25 0.217443 6.25Z"
                                    fill="currentColor" />
                                <path
                                    d="M20.7001 12.2802L25.0467 7.93355C25.5601 7.42021 25.5601 6.58021 25.0467 6.06688L20.7001 1.72021"
                                    stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </a>
                    </div>
                </div>
                <!-- single blog card -->
                <div class="blog_card__one group wow fadeInUp" data-wow-delay="0.4s">
                    <div class="overflow-hidden">
                        <a href="blog-details.html">
                            <img src="assets/images/blog/b1-3.webp" alt="blog-image"
                                class="w-full hover:scale-105 duration-300">
                        </a>
                    </div>
                    <div class="mt-6">
                        <ul class="flex items-center text-[13px] font-medium text-dark-2">
                            <li
                                class="flex items-center relative first:pl-0 pl-2 pr-2 before:content-[''] before:absolute before:h-2/3 before:w-[1px] before:bg-dark-2 before:-translate-y-1/2 before:top-1/2 before:left-0 first:before:hidden">
                                <i class="bi bi-calendar-date text-[15px]"></i>
                                <span class="ml-2">24 Sep 2022 · 6:30 PM</span>
                            </li>
                            <li
                                class="flex items-center relative first:pl-0 pl-2 pr-2 before:content-[''] before:absolute before:h-2/3 before:w-[1px] before:bg-dark-2 before:-translate-y-1/2 before:top-1/2 before:left-0 ">
                                250 View</li>
                        </ul>
                        <h3 class="card-title-alpha mt-4">
                            <a href="blog-details.html">
                                Benefit from a 15% discount mak your reservations.
                            </a>
                        </h3>
                        <a href="blog-details.html"
                            class="group ease-in hover:text-primary-1 duration-200 inline-flex items-center mt-4 lg:text-md text-base text-dark-1 font-medium">
                            <span class="mr-2">Read More</span>
                            <svg class="group-hover:translate-x-2 duration-200 " width="27" height="14"
                                viewBox="0 0 27 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M0.217443 6.25H18.4827C18.6276 6.25 18.7001 6.30263 18.7001 6.40789V7.59211C18.7001 7.69737 18.6276 7.75 18.4827 7.75H0.217443C0.0724811 7.75 0 7.69737 0 7.59211V6.40789C0 6.30263 0.0724811 6.25 0.217443 6.25Z"
                                    fill="currentColor" />
                                <path
                                    d="M20.7001 12.2802L25.0467 7.93355C25.5601 7.42021 25.5601 6.58021 25.0467 6.06688L20.7001 1.72021"
                                    stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--========== BLOG STYLE ONE END ==========-->

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
