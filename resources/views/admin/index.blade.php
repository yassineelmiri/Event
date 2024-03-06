<x-admin>
    <div class="container-fluid relative px-3">
        <div class="layout-specing">
            <div class="grid grid-cols-1">
                <div
                    class="profile-banner relative text-transparent rounded-md shadow dark:shadow-gray-700 overflow-hidden">
                    <input id="pro-banner" name="profile-banner" type="file" class="hidden" onchange="loadFile(event)">
                    <div class="relative shrink-0">
                        <img src="da/images/blog/bg.jpg" class="h-80 w-full object-cover" id="profile-banner"
                            alt="">
                        <div class="absolute inset-0 bg-black/70"></div>
                        <label class="absolute inset-0 cursor-pointer" for="pro-banner"></label>
                    </div>
                </div>
            </div>

            <div class="grid md:grid-cols-12 grid-cols-1">
                <div class="xl:col-span-3 lg:col-span-4 md:col-span-4 mx-6">
                    <div class="p-6 relative rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900 -mt-48">
                        <div class="profile-pic text-center mb-5">
                            <input id="pro-img" name="profile-image" type="file" class="hidden"
                                onchange="loadFile(event)" />
                            <div>
                                <div class="relative size-24 mx-auto">
                                    <img src="da/images/client/05.jpg"
                                        class="rounded-full shadow dark:shadow-gray-700 ring-4 ring-slate-50 dark:ring-slate-800"
                                        id="profile-image" alt="">
                                    <label class="absolute inset-0 cursor-pointer" for="pro-img"></label>
                                </div>

                                <div class="mt-4">
                                    <h5 class="text-lg font-semibold">{{ Auth::user()->name }}</h5>
                                    <p class="text-slate-400">{{ Auth::user()->email }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="border-t border-gray-100 dark:border-gray-700">
                            <ul class="list-none sidebar-nav mb-0 mt-3" id="navmenu-nav">
                                <li class="navbar-item account-menu">
                                    <a href="{{ route('admin.index') }}"
                                        class="navbar-link text-slate-400 flex items-center py-2 rounded">
                                        <span class="me-2 text-[18px] mb-0"><i class="uil uil-dashboard"></i></span>
                                        <h6 class="mb-0 font-semibold">Profile</h6>
                                    </a>
                                </li>

                                <li class="navbar-item account-menu">
                                    <a href="profile-billing.html"
                                        class="navbar-link text-slate-400 flex items-center py-2 rounded">
                                        <span class="me-2 text-[18px] mb-0"><i class="uil uil-diary-alt"></i></span>
                                        <h6 class="mb-0 font-semibold">Billing Info</h6>
                                    </a>
                                </li>

                                <li class="navbar-item account-menu">
                                    <a href="profile-payment.html"
                                        class="navbar-link text-slate-400 flex items-center py-2 rounded">
                                        <span class="me-2 text-[18px] mb-0"><i class="uil uil-credit-card"></i></span>
                                        <h6 class="mb-0 font-semibold">Payment</h6>
                                    </a>
                                </li>

                                <li class="navbar-item account-menu">
                                    <a href="profile-social.html"
                                        class="navbar-link text-slate-400 flex items-center py-2 rounded">
                                        <span class="me-2 text-[18px] mb-0"><i class="uil uil-process"></i></span>
                                        <h6 class="mb-0 font-semibold">Social Profile</h6>
                                    </a>
                                </li>

                                <li class="navbar-item account-menu">
                                    <a href="profile-notification.html"
                                        class="navbar-link text-slate-400 flex items-center py-2 rounded">
                                        <span class="me-2 text-[18px] mb-0"><i class="uil uil-bell"></i></span>
                                        <h6 class="mb-0 font-semibold">Notifications</h6>
                                    </a>
                                </li>

                                <li class="navbar-item account-menu">
                                    <a href="profile-setting.html"
                                        class="navbar-link text-slate-400 flex items-center py-2 rounded">
                                        <span class="me-2 text-[18px] mb-0"><i class="uil uil-setting"></i></span>
                                        <h6 class="mb-0 font-semibold">Settings</h6>
                                    </a>
                                </li>

                                <li class="navbar-item account-menu">
                                    <a href="auth-lock-screen.html"
                                        class="navbar-link text-slate-400 flex items-center py-2 rounded">
                                        <span class="me-2 text-[18px] mb-0"><i class="uil uil-power"></i></span>
                                        <h6 class="mb-0 font-semibold">Sign Out</h6>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="xl:col-span-9 lg:col-span-8 md:col-span-8 mt-6">
                    <div class="grid grid-cols-1 gap-6">
                        <div class="p-6 relative rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
                            <h5 class="text-xl font-semibold">{{ Auth::user()->name }}</h5>

                            <p class="text-slate-400 mt-3">I have started my career as a trainee and prove my
                                self and achieve all the milestone with good guidance and reach up to the
                                project manager. In this journey, I understand all the procedure which make me a
                                good developer, team leader, and a project manager.</p>
                        </div>

                        <div class="grid lg:grid-cols-2 grid-cols-1 gap-6">
                            <div
                                class="p-6 relative rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900 h-fit">
                                <h5 class="text-xl font-semibold">Personal Details :</h5>
                                <div class="mt-6">
                                    <div class="flex items-center">
                                        <i data-feather="mail" class="fea icon-ex-md text-slate-400 me-3"></i>
                                        <div class="flex-1">
                                            <h6 class="text-indigo-600 dark:text-white font-medium mb-0">Email
                                                :</h6>
                                            <a href="#" class="text-slate-400">{{ Auth::user()->email }}</a>
                                        </div>
                                    </div>
                                    <div class="flex items-center mt-3">
                                        <i data-feather="bookmark" class="fea icon-ex-md text-slate-400 me-3"></i>
                                        <div class="flex-1">
                                            <h6 class="text-indigo-600 dark:text-white font-medium mb-0">Skills
                                                :</h6>
                                            <a href="#" class="text-slate-400">MVC</a>, <a href="#"
                                                class="text-slate-400">CRUD</a>, <a href="#"
                                                class="text-slate-400">POO</a>, <a href="#"
                                                class="text-slate-400">mysql</a>
                                        </div>
                                    </div>
                                    <div class="flex items-center mt-3">
                                        <i data-feather="globe" class="fea icon-ex-md text-slate-400 me-3"></i>
                                        <div class="flex-1">
                                            <h6 class="text-indigo-600 dark:text-white font-medium mb-0">
                                                address :</h6>
                                            <a href="#" class="text-slate-400">{{ Auth::user()->address }}</a>
                                        </div>
                                    </div>

                                    <div class="flex items-center mt-3">
                                        <i data-feather="map-pin" class="fea icon-ex-md text-slate-400 me-3"></i>
                                        <div class="flex-1">
                                            <h6 class="text-indigo-600 dark:text-white font-medium mb-0">
                                                Location :</h6>
                                            <a href="#" class="text-slate-400">Maroc</a>
                                        </div>
                                    </div>
                                    <div class="flex items-center mt-3">
                                        <i data-feather="phone" class="fea icon-ex-md text-slate-400 me-3"></i>
                                        <div class="flex-1">
                                            <h6 class="text-indigo-600 dark:text-white font-medium mb-0">Cell
                                                No :</h6>
                                            <a href="#" class="text-slate-400">(+212)
                                                {{ Auth::user()->telephone }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div
                                class="p-6 relative rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900 h-fit">
                                <h5 class="text-xl font-semibold">Experience :</h5>

                                <div
                                    class="flex duration-500 hover:scale-105 shadow dark:shadow-gray-700 hover:shadow-md dark:hover:shadow-gray-700 ease-in-out items-center p-4 rounded-md bg-white dark:bg-slate-900 mt-6">
                                    <img src="da/images/client/circle-logo.png"
                                        class="h-16 w-16 p-4 bg-slate-50 dark:bg-slate-800 shadow dark:shadow-gray-700 rounded-md"
                                        alt="">
                                    <div class="flex-1 content ms-4">
                                        <h4 class="text-lg text-medium">Senior Web Developer</h4>
                                        <p class="text-slate-400 mb-0">3 Years Experience</p>
                                        <p class="text-slate-400 mb-0"><a href="#"
                                                class="text-indigo-600">CircleCi</a> @London, UK</p>
                                    </div>
                                </div>

                                <div
                                    class="flex duration-500 hover:scale-105 shadow dark:shadow-gray-700 hover:shadow-md dark:hover:shadow-gray-700 ease-in-out items-center p-4 rounded-md bg-white dark:bg-slate-900 mt-6">
                                    <img src="da/images/client/facebook-logo-2019.png"
                                        class="h-16 w-16 p-4 bg-slate-50 dark:bg-slate-800 shadow dark:shadow-gray-700 rounded-md"
                                        alt="">
                                    <div class="flex-1 content ms-4">
                                        <h4 class="text-lg text-medium">Web Designer</h4>
                                        <p class="text-slate-400 mb-0">2 Years Experience</p>
                                        <p class="text-slate-400 mb-0"><a href="#"
                                                class="text-indigo-600">Facebook</a> @Washington D.C, USA</p>
                                    </div>
                                </div>

                                <div
                                    class="flex duration-500 hover:scale-105 shadow dark:shadow-gray-700 hover:shadow-md dark:hover:shadow-gray-700 ease-in-out items-center p-4 rounded-md bg-white dark:bg-slate-900 mt-6">
                                    <img src="da/images/client/spotify.png"
                                        class="h-16 w-16 p-4 bg-slate-50 dark:bg-slate-800 shadow dark:shadow-gray-700 rounded-md"
                                        alt="">
                                    <div class="flex-1 content ms-4">
                                        <h4 class="text-lg text-medium">UI Designer</h4>
                                        <p class="text-slate-400 mb-0">2 Years Experience</p>
                                        <p class="text-slate-400 mb-0"><a href="#"
                                                class="text-indigo-600">Spotify</a> @Perth, Australia</p>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <!-- End Content -->
        </div>
    </div><!--end container-->
</x-admin>
