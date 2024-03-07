<x-admin>
    <div class="container-fluid relative px-3">
        <div class="layout-specing">
            <!-- Start Content -->
            <div class="md:flex justify-between items-center">
                <h5 class="text-lg font-semibold">Admin</h5>

                <ul class="tracking-[0.5px] inline-block sm:mt-0 mt-3">
                    <li
                        class="inline-block capitalize text-[14px] font-bold duration-500 dark:text-white/70 hover:text-indigo-600 dark:hover:text-white">
                        <a href="index.html">category</a>
                    </li>
                    <li
                        class="inline-block text-base text-slate-950 dark:text-white/70 mx-0.5 ltr:rotate-0 rtl:rotate-180">
                        <i class="uil uil-angle-right-b"></i>
                    </li>
                    <li
                        class="inline-block capitalize text-[14px] font-bold duration-500 dark:text-white/70 hover:text-indigo-600 dark:hover:text-white">
                        <a href="shop.html">ajouter</a>
                    </li>
                    <li
                        class="inline-block text-base text-slate-950 dark:text-white/70 mx-0.5 ltr:rotate-0 rtl:rotate-180">
                        <i class="uil uil-angle-right-b"></i>
                    </li>
                    <li class="inline-block capitalize text-[14px] font-bold text-indigo-600 dark:text-white"
                        aria-current="page">Checkout</li>
                </ul>
            </div>

            <div class="grid lg:grid-cols-12 md:grid-cols-12 grid-cols-1 mt-6 gap-6">
                <div class="lg:col-span-12">
                    <div class="p-6 rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
                        <h3 class="text-xl leading-normal font-semibold">Billing</h3>

                        <form method="POST" action="{{ route('stor.category') }}" class="flex flex-col gap-5">
                            @csrf
                            <div class="grid lg:grid-cols-12 grid-cols-1 gap-5">
                                <div class="lg:col-span-12">
                                    <label class="form-label font-semibold">Catégories</label>
                                    <div class="relative mt-2 flex items-center">
                                        <span
                                            class="absolute top-0.5 left-0.5 text-xl bg-gray-100 dark:bg-slate-800 inline-flex justify-center items-center text-dark dark:text-white rounded p-2"><i
                                                class="uil uil-at"></i></span>
                                        <input type="text" name="name"
                                            class="form-input ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0"
                                            placeholder="Catégorie :" required>
                                    </div>
                                </div>
                                <div>
                                    <input type="submit"
                                        class="py-2 px-5 inline-block tracking-wide border duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md w-full lg:w-auto"
                                        value="Ajouter une catégorie">
                                </div>
                            </div>
                        </form>
                    </div>

                </div><!--end col-->
            </div><!--end grid-->
            <!-- End Content -->
        </div>
    </div><!--end container-->

</x-admin>
