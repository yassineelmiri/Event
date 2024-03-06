<x-admin>

    <div class="container-fluid relative px-3">
        <div class="layout-specing">
            <!-- Start Content -->
            <div class="flex justify-between items-center">
                <div>
                    <h5 class="text-xl font-bold">Hello, Cristina</h5>
                    <h6 class="text-slate-400 font-semibold">Welcome!</h6>
                </div>

                <div class="flex items-center">
                    <div class="position-relative">
                        <select
                            class="form-select form-input w-full py-2 h-10 bg-white dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-100 focus:border-gray-200 dark:border-gray-800 dark:focus:border-gray-700 focus:ring-0"
                            id="yearchart">
                            <option value="Y" selected>Yearly</option>
                            <option value="M">Monthly</option>
                            <option value="W">Weekly</option>
                            <option value="T">Today</option>
                        </select>
                    </div>

                    <a href="#" class="ms-1">
                        <span
                            class="py-[7px] px-6 font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600/5 hover:bg-indigo-600 border-indigo-600/10 hover:border-indigo-600 text-indigo-600 hover:text-white rounded-md sm:inline-block hidden"><i
                                class="uil uil-export"></i> Export</span>

                        <span
                            class="h-10 w-10 items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-md border bg-indigo-600/5 hover:bg-indigo-600 border-indigo-600/10 hover:border-indigo-600 text-indigo-600 hover:text-white sm:hidden inline-flex"><i
                                class="uil uil-export"></i></span>
                    </a>
                </div>
            </div>

            <div class="grid xl:grid-cols-5 md:grid-cols-3 grid-cols-1 mt-6 gap-6">
                <div class="relative overflow-hidden rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
                    <div class="p-5 flex items-center">
                        <span
                            class="flex justify-center items-center rounded-md size-14 min-w-[56px] bg-indigo-600/5 dark:bg-indigo-600/10 shadow shadow-indigo-600/5 dark:shadow-indigo-600/10 text-indigo-600">
                            <i data-feather="users" class="h-5 w-5"></i>
                        </span>

                        <span class="ms-3">
                            <span class="text-slate-400 font-semibold block">Utilisateur</span>
                            <span class="flex items-center justify-between mt-1">
                                <span class="text-xl font-semibold"><span class="counter-value"
                                        data-target="{{ $profiles }}">{{ $profiles }}</span></span>
                                <span class="text-red-600 text-sm ms-1 font-semibold"><i class="uil uil-chart-down"></i>
                                    0.5%</span>
                            </span>
                        </span>
                    </div>

                    <div class="px-5 py-4 bg-gray-50 dark:bg-slate-800">
                        <a href="#"
                            class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:transition-all after:duration-500 text-indigo-600 dark:text-white/70 hover:text-indigo-600 dark:hover:text-white after:bg-indigo-600 dark:after:bg-white duration-500">View
                            data <i class="uil uil-arrow-right"></i></a>
                    </div>
                </div><!--end-->

                <div class="relative overflow-hidden rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
                    <div class="p-5 flex items-center">
                        <span
                            class="flex justify-center items-center rounded-md size-14 min-w-[56px] bg-indigo-600/5 dark:bg-indigo-600/10 shadow shadow-indigo-600/5 dark:shadow-indigo-600/10 text-indigo-600">
                            <i data-feather="dollar-sign" class="h-5 w-5"></i>
                        </span>

                        <span class="ms-3">
                            <span class="text-slate-400 font-semibold block">categories</span>
                            <span class="flex items-center justify-between mt-1">
                                <span class="text-xl font-semibold">$<span class="counter-value"
                                        data-target="{{ $categories }}">{{ $categories }}</span></span>
                                <span class="text-emerald-600 text-sm ms-1 font-semibold"><i
                                        class="uil uil-arrow-growth"></i> 3.84%</span>
                            </span>
                        </span>
                    </div>

                    <div class="px-5 py-4 bg-gray-50 dark:bg-slate-800">
                        <a href="#"
                            class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:transition-all after:duration-500 text-indigo-600 dark:text-white/70 hover:text-indigo-600 dark:hover:text-white after:bg-indigo-600 dark:after:bg-white duration-500">View
                            data <i class="uil uil-arrow-right"></i></a>
                    </div>
                </div><!--end-->

                <div class="relative overflow-hidden rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
                    <div class="p-5 flex items-center">
                        <span
                            class="flex justify-center items-center rounded-md size-14 min-w-[56px] bg-indigo-600/5 dark:bg-indigo-600/10 shadow shadow-indigo-600/5 dark:shadow-indigo-600/10 text-indigo-600">
                            <i data-feather="shopping-bag" class="h-5 w-5"></i>
                        </span>

                        <span class="ms-3">
                            <span class="text-slate-400 font-semibold block">Publication</span>
                            <span class="flex items-center justify-between mt-1">
                                <span class="text-xl font-semibold"><span class="counter-value"
                                        data-target="{{ $publication }}">{{ $publication }}</span></span>
                                <span class="text-slate-400 text-sm ms-1 font-semibold"><i class="uil uil-analysis"></i>
                                    0.0%</span>
                            </span>
                        </span>
                    </div>

                    <div class="px-5 py-4 bg-gray-50 dark:bg-slate-800">
                        <a href="#"
                            class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:transition-all after:duration-500 text-indigo-600 dark:text-white/70 hover:text-indigo-600 dark:hover:text-white after:bg-indigo-600 dark:after:bg-white duration-500">View
                            data <i class="uil uil-arrow-right"></i></a>
                    </div>
                </div><!--end-->

                <div class="relative overflow-hidden rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
                    <div class="p-5 flex items-center">
                        <span
                            class="flex justify-center items-center rounded-md size-14 min-w-[56px] bg-indigo-600/5 dark:bg-indigo-600/10 shadow shadow-indigo-600/5 dark:shadow-indigo-600/10 text-indigo-600">
                            <i data-feather="dollar-sign" class="h-5 w-5"></i>
                        </span>

                        <span class="ms-3">
                            <span class="text-slate-400 font-semibold block">Expenses</span>
                            <span class="flex items-center justify-between mt-1">
                                <span class="text-xl font-semibold">$<span class="counter-value"
                                        data-target="24351">22135</span></span>
                                <span class="text-emerald-600 text-sm ms-1 font-semibold"><i
                                        class="uil uil-arrow-growth"></i> 1.6%</span>
                            </span>
                        </span>
                    </div>

                    <div class="px-5 py-4 bg-gray-50 dark:bg-slate-800">
                        <a href="#"
                            class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:transition-all after:duration-500 text-indigo-600 dark:text-white/70 hover:text-indigo-600 dark:hover:text-white after:bg-indigo-600 dark:after:bg-white duration-500">View
                            data <i class="uil uil-arrow-right"></i></a>
                    </div>
                </div><!--end-->
            </div>



            <div class="grid lg:grid-cols-12 grid-cols-1 mt-6 gap-6">
                <div class="xl:col-span-12 lg:col-span-12">
                    <div
                        class="relative overflow-hidden rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
                        <div
                            class="p-6 flex items-center justify-between border-b border-gray-100 dark:border-gray-800">
                            <h6 class="text-lg font-semibold">Les admins</h6>

                            <a href="#"
                                class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:transition-all after:duration-500 text-slate-400 dark:text-white/70 hover:text-indigo-600 dark:hover:text-white after:bg-indigo-600 dark:after:bg-white duration-500">View
                                orders <i class="uil uil-arrow-right"></i></a>
                        </div>

                        <div class="relative overflow-x-auto block w-full max-h-[400px]" data-simplebar>
                            <table class="w-full text-start">
                                <thead class="text-base">
                                    <tr>
                                        <th class="text-start font-semibold text-[15px] p-4 min-w-[100px]">ID</th>
                                        <th class="text-start font-semibold text-[15px] p-4 min-w-[128px]">Name</th>
                                        <th class="text-start font-semibold text-[15px] p-4 min-w-[128px]">Email</th>
                                        <th class="text-start font-semibold text-[15px] p-4 min-w-[128px]">telephone
                                        </th>
                                        <th class="text-end font-semibold text-[15px] p-4 min-w-[128px]">Address</th>
                                        <th class="text-end font-semibold text-[15px] p-4 min-w-[128px]">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($Admins as $Admin)
                                        <tr>
                                            <th
                                                class="text-start border-t border-gray-100 dark:border-gray-800 p-4 font-semibold">
                                                #{{ $Admin->id }}</th>
                                            <td class="text-start border-t border-gray-100 dark:border-gray-800 p-4">
                                                {{ $Admin->name }}</td>
                                            <td class="text-start border-t border-gray-100 dark:border-gray-800 p-4">
                                                <span class="text-slate-400">{{ $Admin->email }}</span>
                                            </td>
                                            <td class="text-start border-t border-gray-100 dark:border-gray-800 p-4">
                                                <span class="text-slate-400">{{ $Admin->telephone }}</span>
                                            </td>
                                            <td class="text-start border-t border-gray-100 dark:border-gray-800 p-4">
                                                <span class="text-slate-400">{{ $Admin->address }}</span>
                                            </td>
                                            <td class="text-end border-t border-gray-100 dark:border-gray-800 p-4">
                                                <span
                                                    class="bg-emerald-600/10 dark:bg-emerald-600/20 border border-emerald-600/10 dark:border-emerald-600/20 text-emerald-600 text-[12px] font-bold px-2.5 py-0.5 rounded h-5 ms-1">Active</span>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>


                </div>

                <div class="xl:col-span-4 lg:col-span-6">
                    <div class="rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
                        <div
                            class="flex justify-between items-center border-b border-gray-100 dark:border-gray-800 p-4">
                            <div class="flex">
                                <img src="da/images/client/01.jpg"
                                    class="h-11 w-11 rounded-full shadow dark:shadow-gray-700" alt="">
                                <div class="overflow-hidden ms-3">
                                    <a href="#" class="block font-semibold text-truncate">Calvin Carlo</a>
                                    <span class="text-slate-400 flex items-center text-sm"><span
                                            class="bg-green-600 text-white text-[10px] font-bold rounded-full size-2 me-1"></span>
                                        Online</span>
                                </div>
                            </div>

                            <div class="dropdown relative">
                                <button data-dropdown-toggle="dropdown" class="dropdown-toggle items-center"
                                    type="button">
                                    <span
                                        class="h-8 w-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-[20px] text-center bg-gray-800/5 hover:bg-gray-800/10 dark:bg-gray-800 border border-gray-800/5 dark:border-gray-800 text-slate-900 dark:text-white rounded-full"><i
                                            class="mdi mdi-dots-vertical"></i></span>
                                </button>
                                <!-- Dropdown menu -->
                                <div class="dropdown-menu absolute end-0 m-0 mt-4 z-10 w-44 rounded-md overflow-hidden bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 hidden"
                                    onclick="event.stopPropagation();">
                                    <ul class="py-2 text-start">
                                        <li>
                                            <a href="#"
                                                class="block font-medium py-1 px-4 text-slate-400 dark:text-white/70 hover:text-slate-900 dark:hover:text-white"><i
                                                    class="mdi mdi-account-outline"></i> Profile</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="block font-medium py-1 px-4 text-slate-400 dark:text-white/70 hover:text-slate-900 dark:hover:text-white"><i
                                                    class="mdi mdi-cog-outline"></i> Profile Settings</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="block font-medium py-1 px-4 text-slate-400 dark:text-white/70 hover:text-slate-900 dark:hover:text-white"><i
                                                    class="mdi mdi-trash-can-outline"></i> Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <ul class="p-4 list-none mb-0 max-h-[350px] bg-[url('../../da/images/bg-chat.html')] bg-no-repeat bg-center bg-cover"
                            data-simplebar>
                            <li>
                                <div class="inline-block">
                                    <div class="flex mb-3">
                                        <div class="relative">
                                            <img src="da/images/client/01.jpg"
                                                class="size-9 min-w-[36px] rounded-full shadow dark:shadow-gray-700"
                                                alt="">
                                            <span
                                                class="absolute top-0.5 start-0.5 flex items-center justify-center bg-green-600 text-white text-[10px] font-bold rounded-full size-2 after:content-[''] after:absolute after:h-2 after:w-2 after:bg-green-600 after:top-0 after:end-0 after:rounded-full after:animate-ping"></span>
                                        </div>

                                        <div class="ms-2 max-w-lg">
                                            <p
                                                class="bg-white dark:bg-slate-900 text-slate-400 text-sm shadow dark:shadow-gray-700 px-3 py-2 rounded mb-1">
                                                Hey Cristina</p>
                                            <span class="text-slate-400 text-sm"><i
                                                    class="mdi mdi-clock-outline me-1"></i>59 min ago</span>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="text-end">
                                <div class="inline-block">
                                    <div class="flex mb-3">
                                        <div class="relative order-2">
                                            <img src="da/images/client/05.jpg"
                                                class="size-9 min-w-[36px] rounded-full shadow dark:shadow-gray-700"
                                                alt="">
                                            <span
                                                class="absolute top-0.5 end-0.5 flex items-center justify-center bg-green-600 text-white text-[10px] font-bold rounded-full size-2 after:content-[''] after:absolute after:h-2 after:w-2 after:bg-green-600 after:top-0 after:end-0 after:rounded-full after:animate-ping"></span>
                                        </div>

                                        <div class="me-2 max-w-lg">
                                            <p
                                                class="bg-white dark:bg-slate-900 text-slate-400 text-sm shadow dark:shadow-gray-700 px-3 py-2 rounded mb-1">
                                                Hello Calvin</p>
                                            <span class="text-slate-400 text-sm"><i
                                                    class="mdi mdi-clock-outline me-1"></i>45 min ago</span>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="text-end">
                                <div class="inline-block">
                                    <div class="flex mb-3">
                                        <div class="relative order-2">
                                            <img src="da/images/client/05.jpg"
                                                class="size-9 min-w-[36px] rounded-full shadow dark:shadow-gray-700"
                                                alt="">
                                            <span
                                                class="absolute top-0.5 end-0.5 flex items-center justify-center bg-green-600 text-white text-[10px] font-bold rounded-full size-2 after:content-[''] after:absolute after:h-2 after:w-2 after:bg-green-600 after:top-0 after:end-0 after:rounded-full after:animate-ping"></span>
                                        </div>

                                        <div class="me-2 max-w-lg">
                                            <p
                                                class="bg-white dark:bg-slate-900 text-slate-400 text-sm shadow dark:shadow-gray-700 px-3 py-2 rounded mb-1">
                                                How can i help you?</p>
                                            <span class="text-slate-400 text-sm"><i
                                                    class="mdi mdi-clock-outline me-1"></i>44 min ago</span>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="inline-block">
                                    <div class="flex mb-3">
                                        <div class="relative">
                                            <img src="da/images/client/01.jpg"
                                                class="size-9 min-w-[36px] rounded-full shadow dark:shadow-gray-700"
                                                alt="">
                                            <span
                                                class="absolute top-0.5 start-0.5 flex items-center justify-center bg-green-600 text-white text-[10px] font-bold rounded-full size-2 after:content-[''] after:absolute after:h-2 after:w-2 after:bg-green-600 after:top-0 after:end-0 after:rounded-full after:animate-ping"></span>
                                        </div>

                                        <div class="ms-2 max-w-lg">
                                            <p
                                                class="bg-white dark:bg-slate-900 text-slate-400 text-sm shadow dark:shadow-gray-700 px-3 py-2 rounded mb-1">
                                                Nice to meet you</p>
                                            <span class="text-slate-400 text-sm"><i
                                                    class="mdi mdi-clock-outline me-1"></i>42 min ago</span>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="inline-block">
                                    <div class="flex mb-3">
                                        <div class="relative">
                                            <img src="da/images/client/01.jpg"
                                                class="size-9 min-w-[36px] rounded-full shadow dark:shadow-gray-700"
                                                alt="">
                                            <span
                                                class="absolute top-0.5 start-0.5 flex items-center justify-center bg-green-600 text-white text-[10px] font-bold rounded-full size-2 after:content-[''] after:absolute after:h-2 after:w-2 after:bg-green-600 after:top-0 after:end-0 after:rounded-full after:animate-ping"></span>
                                        </div>

                                        <div class="ms-2 max-w-lg">
                                            <p
                                                class="bg-white dark:bg-slate-900 text-slate-400 text-sm shadow dark:shadow-gray-700 px-3 py-2 rounded mb-1">
                                                Hope you are doing fine?</p>
                                            <span class="text-slate-400 text-sm"><i
                                                    class="mdi mdi-clock-outline me-1"></i>40 min ago</span>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="text-end">
                                <div class="inline-block">
                                    <div class="flex mb-3">
                                        <div class="relative order-2">
                                            <img src="da/images/client/05.jpg"
                                                class="size-9 min-w-[36px] rounded-full shadow dark:shadow-gray-700"
                                                alt="">
                                            <span
                                                class="absolute top-0.5 end-0.5 flex items-center justify-center bg-green-600 text-white text-[10px] font-bold rounded-full size-2 after:content-[''] after:absolute after:h-2 after:w-2 after:bg-green-600 after:top-0 after:end-0 after:rounded-full after:animate-ping"></span>
                                        </div>

                                        <div class="me-2 max-w-lg">
                                            <p
                                                class="bg-white dark:bg-slate-900 text-slate-400 text-sm shadow dark:shadow-gray-700 px-3 py-2 rounded mb-1">
                                                I'm good thanks for asking</p>
                                            <span class="text-slate-400 text-sm"><i
                                                    class="mdi mdi-clock-outline me-1"></i>38 min ago</span>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="inline-block">
                                    <div class="flex mb-3">
                                        <div class="relative">
                                            <img src="da/images/client/01.jpg"
                                                class="size-9 min-w-[36px] rounded-full shadow dark:shadow-gray-700"
                                                alt="">
                                            <span
                                                class="absolute top-0.5 start-0.5 flex items-center justify-center bg-green-600 text-white text-[10px] font-bold rounded-full size-2 after:content-[''] after:absolute after:h-2 after:w-2 after:bg-green-600 after:top-0 after:end-0 after:rounded-full after:animate-ping"></span>
                                        </div>

                                        <div class="ms-2 max-w-lg">
                                            <p
                                                class="bg-white dark:bg-slate-900 text-slate-400 text-sm shadow dark:shadow-gray-700 px-3 py-2 rounded mb-1">
                                                I am intrested to know more about your prices and services you offer</p>
                                            <span class="text-slate-400 text-sm"><i
                                                    class="mdi mdi-clock-outline me-1"></i>35 min ago</span>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="text-end">
                                <div class="inline-block">
                                    <div class="flex mb-3">
                                        <div class="relative order-2">
                                            <img src="da/images/client/05.jpg"
                                                class="size-9 min-w-[36px] rounded-full shadow dark:shadow-gray-700"
                                                alt="">
                                            <span
                                                class="absolute top-0.5 end-0.5 flex items-center justify-center bg-green-600 text-white text-[10px] font-bold rounded-full size-2 after:content-[''] after:absolute after:h-2 after:w-2 after:bg-green-600 after:top-0 after:end-0 after:rounded-full after:animate-ping"></span>
                                        </div>

                                        <div class="me-2 max-w-lg">
                                            <p
                                                class="bg-white dark:bg-slate-900 text-slate-400 text-sm shadow dark:shadow-gray-700 px-3 py-2 rounded mb-1">
                                                Sure please check below link to find more useful information <a
                                                    href="https://shreethemes.in/techwind/" target="_blank"
                                                    class="text-indigo-600">https://shreethemes.in/techwind/</a></p>
                                            <span class="text-slate-400 text-sm"><i
                                                    class="mdi mdi-clock-outline me-1"></i>29 min ago</span>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="inline-block">
                                    <div class="flex mb-3">
                                        <div class="relative">
                                            <img src="da/images/client/01.jpg"
                                                class="size-9 min-w-[36px] rounded-full shadow dark:shadow-gray-700"
                                                alt="">
                                            <span
                                                class="absolute top-0.5 start-0.5 flex items-center justify-center bg-green-600 text-white text-[10px] font-bold rounded-full size-2 after:content-[''] after:absolute after:h-2 after:w-2 after:bg-green-600 after:top-0 after:end-0 after:rounded-full after:animate-ping"></span>
                                        </div>

                                        <div class="ms-2 max-w-lg">
                                            <p
                                                class="bg-white dark:bg-slate-900 text-slate-400 text-sm shadow dark:shadow-gray-700 px-3 py-2 rounded mb-1">
                                                Thank you 😊</p>
                                            <span class="text-slate-400 text-sm"><i
                                                    class="mdi mdi-clock-outline me-1"></i>26 min ago</span>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="text-end">
                                <div class="inline-block">
                                    <div class="flex mb-3">
                                        <div class="relative order-2">
                                            <img src="da/images/client/05.jpg"
                                                class="size-9 min-w-[36px] rounded-full shadow dark:shadow-gray-700"
                                                alt="">
                                            <span
                                                class="absolute top-0.5 end-0.5 flex items-center justify-center bg-green-600 text-white text-[10px] font-bold rounded-full size-2 after:content-[''] after:absolute after:h-2 after:w-2 after:bg-green-600 after:top-0 after:end-0 after:rounded-full after:animate-ping"></span>
                                        </div>

                                        <div class="me-2 max-w-lg">
                                            <p
                                                class="bg-white dark:bg-slate-900 text-slate-400 text-sm shadow dark:shadow-gray-700 px-3 py-2 rounded mb-1">
                                                Welcome</p>
                                            <span class="text-slate-400 text-sm"><i
                                                    class="mdi mdi-clock-outline me-1"></i>15 min ago</span>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="inline-block">
                                    <div class="flex items-center mb-3">
                                        <div class="relative">
                                            <img src="da/images/client/01.jpg"
                                                class="size-9 min-w-[36px] rounded-full shadow dark:shadow-gray-700"
                                                alt="">
                                            <span
                                                class="absolute top-0.5 start-0.5 flex items-center justify-center bg-green-600 text-white text-[10px] font-bold rounded-full size-2 after:content-[''] after:absolute after:h-2 after:w-2 after:bg-green-600 after:top-0 after:end-0 after:rounded-full after:animate-ping"></span>
                                        </div>

                                        <div class="ms-2 max-w-lg">
                                            <p class="text-slate-400 text-sm rounded mb-1">Frank Williams is typing
                                                <span class="animate-typing ms-1">
                                                    <span
                                                        class="dot inline-block size-1 bg-slate-400 -mr-px opacity-60 rounded-full"></span>
                                                    <span
                                                        class="dot inline-block size-1 bg-slate-400 -mr-px opacity-60 rounded-full"></span>
                                                    <span
                                                        class="dot inline-block size-1 bg-slate-400 -mr-px opacity-60 rounded-full"></span>
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>

                        <div class="p-2 border-t border-gray-100 dark:border-gray-800">
                            <div class="flex ">
                                <input type="text"
                                    class="form-input w-full py-2 px-3 h-9 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-100 dark:border-gray-800 focus:ring-0"
                                    placeholder="Enter Message...">

                                <div class="min-w-[125px] text-end">
                                    <a href="#"
                                        class="size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-[16px] text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md"><i
                                            class="mdi mdi-send"></i></a>
                                    <a href="#"
                                        class="size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-[16px] text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md"><i
                                            class="mdi mdi-emoticon-happy-outline"></i></a>
                                    <a href="#"
                                        class="size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-[16px] text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md"><i
                                            class="mdi mdi-paperclip"></i></a>
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
