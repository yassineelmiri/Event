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

            <div class="container-fluid relative px-3">
                <div class="layout-specing">
                    <!-- Start Content -->
                    <div class="md:flex justify-between items-center">
                        <a href="invoice.html"
                            class="py-1 px-4 inline-block font-semibold tracking-wide border align-middle duration-500 text-sm text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md">ajouter</a>
                        <h5 class="text-lg font-semibold">categories</h5>


                        <ul class="tracking-[0.5px] inline-block sm:mt-0 mt-3">
                            <li
                                class="inline-block capitalize text-[14px] font-bold duration-500 dark:text-white/70 hover:text-indigo-600 dark:hover:text-white">
                                <a href="index.html">EVENT</a>
                            </li>
                            <li
                                class="inline-block text-base text-slate-950 dark:text-white/70 mx-0.5 ltr:rotate-0 rtl:rotate-180">
                                <i class="uil uil-angle-right-b"></i>
                            </li>
                            <li class="inline-block capitalize text-[14px] font-bold text-indigo-600 dark:text-white"
                                aria-current="page">profiles List</li>
                        </ul>
                    </div>

                    <div class="grid grid-cols-1 mt-6">
                        <div
                            class="relative overflow-x-auto block w-full bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-md">
                            <table class="w-full text-start">
                                <thead class="text-base">
                                    <tr>
                                        <th class="text-start p-4 min-w-[128px]">#id</th>
                                        <th class="text-start p-4 min-w-[192px]">Name de categories</th>
                                        <th class="text-center p-4 min-w-[200px]">date de creation</th>
                                        <th class="text-center p-4 min-w-[200px]"></th>

                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($categories as $categorie)
                                        <tr>
                                            <th class="text-start border-t border-gray-100 dark:border-gray-800 p-4">
                                                #{{ $categorie->id }}</th>
                                            <td class="text-start border-t border-gray-100 dark:border-gray-800 p-4">
                                                <a href="#" class="hover:text-indigo-600">
                                                    <div class="flex items-center">

                                                        <span class="ms-2 font-medium">{{ $categorie->name }}</span>
                                                    </div>
                                                </a>
                                            </td>
                                            <td class="text-center border-t border-gray-100 dark:border-gray-800 p-4">
                                                <span class="text-slate-400">{{ $categorie->created_at }}</span>
                                            </td>

                                            <td class="text-end border-t border-gray-100 dark:border-gray-800 p-4">
                                                <a href="invoice.html"
                                                    class="py-1 px-4 inline-block font-semibold tracking-wide border align-middle duration-500 text-sm text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md">modifier</a>
                                                    <form action="{{ route('categorie.destroy', $categorie->id) }}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button onclick="return confirm('Vouler vous vraiment supprimer la category')"
                                                        class="py-1 px-4 inline-block font-semibold tracking-wide border align-middle duration-500 text-sm text-center bg-indigo-600/5 hover:bg-indigo-600 border-indigo-600/10 hover:border-indigo-600 text-indigo-600 hover:text-white rounded-md ms-2">Supprimer</button>
                                                    </form>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>


                            </table>
                        </div>

                        <div class="mt-5 flex items-center justify-between">
                            <div>
                                <a href="#"
                                    class="h-8 w-8 inline-flex items-center justify-center font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-gray-100 dark:bg-gray-700 hover:bg-gray-200 dark:hover:bg-gray-800 border-gray-100 dark:border-gray-700 text-slate-400 hover:text-slate-900 dark:hover:text-white rounded-full"><i
                                        class="mdi mdi-arrow-left"></i></a>
                                <a href="#"
                                    class="h-8 w-8 inline-flex items-center justify-center font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-gray-100 dark:bg-gray-700 hover:bg-gray-200 dark:hover:bg-gray-800 border-gray-100 dark:border-gray-700 text-slate-400 hover:text-slate-900 dark:hover:text-white rounded-full"><i
                                        class="mdi mdi-arrow-right"></i></a>
                            </div>

                            <span class="text-slate-400">Showing 1 - 8 out of 45</span>
                        </div>
                    </div>
                    <!-- End Content -->
                </div>
            </div><!--end container-->
            <!-- End Content -->
        </div>
    </div><!--end container-->
</x-admin>
