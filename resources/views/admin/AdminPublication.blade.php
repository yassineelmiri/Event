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
                    <div class="flex justify-between items-center">
                        <div class="">
                            <a href="javascript:void(0)" class="py-[5px] px-4 inline-block font-semibold tracking-wide align-middle duration-500 text-sm text-center bg-emerald-600 hover:bg-emerald-700 border-emerald-600 hover:border-emerald-700 text-white rounded-md" onclick="sentCrypto.showModal()">Sent</a>
                        </div>
                    </div>
                    <!-- Start Content -->
                    <div class="md:flex justify-between items-center">
                          <h5 class="text-lg font-semibold">Eventes</h5>


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
                                aria-current="page">event List</li>
                        </ul>
                    </div>

                    <div class="grid grid-cols-1 mt-6">
                        <div
                            class="relative overflow-x-auto block w-full bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-md">
                            <table class="w-full text-start">
                                <thead class="text-base">
                                    <tr>
                                        <th class="text-start p-4 min-w-[128px]">#id</th>
                                        <th class="text-start p-4 min-w-[192px]">Event</th>
                                        <th class="text-center p-4 min-w-[200px]">description</th>
                                        <th class="text-center p-4 min-w-[200px]">date</th>
                                        <th class="text-center p-4 min-w-[200px]">place dans event</th>
                                        <th class="text-center p-4 min-w-[200px]">location</th>
                                        <th class="text-center p-4 min-w-[200px]">category</th>
                                        <th class="text-center p-4 min-w-[200px]">status</th>

                                        <th class="text-center p-4 min-w-[200px]">valider</th>
                                        <th class="text-center p-4 min-w-[200px]"></th>

                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($publications as $publication)
                                        <tr>
                                            <th class="text-start border-t border-gray-100 dark:border-gray-800 p-4">
                                                #{{ $publication->id }}</th>
                                            <td class="text-start border-t border-gray-100 dark:border-gray-800 p-4">
                                                <a href="#" class="hover:text-indigo-600">
                                                    <div class="flex items-center">

                                                        <span class="ms-2 font-medium">{{ $publication->titel }}</span>
                                                    </div>
                                                </a>
                                            </td>
                                            <td class="text-center border-t border-gray-100 dark:border-gray-800 p-4">
                                                <span class="text-slate-400">{{ $publication->description }}</span>
                                            </td>
                                            <td class="text-center border-t border-gray-100 dark:border-gray-800 p-4">
                                                <span class="text-slate-400">{{ $publication->date }}</span>
                                            </td>
                                            <td class="text-center border-t border-gray-100 dark:border-gray-800 p-4">
                                                <span class="text-slate-400">{{ $publication->place_available }}</span>
                                            </td>
                                            <td class="text-center border-t border-gray-100 dark:border-gray-800 p-4">
                                                <span class="text-slate-400">{{ $publication->location }}</span>
                                            </td>
                                            <td class="text-center border-t border-gray-100 dark:border-gray-800 p-4">
                                                <span class="text-slate-400">{{ $publication->category }}</span>
                                            </td>
                                            <td class="text-center border-t border-gray-100 dark:border-gray-800 p-4">
                                                <span class="text-slate-400">{{ $publication->status }}</span>
                                            </td>
                                            <td class="text-end border-t border-gray-100 dark:border-gray-800 p-4 flex">
                                                    <form action="{{ route('valider.event',$publication->id) }}" method="post">
                                                        @csrf
                                                        <input type="hidden" name="status" value="Valider">
                                                        <button type="submit" onclick="return confirm('Vouler vous vraiment valider Event')"
                                                        class="py-1 px-4 inline-block font-semibold tracking-wide border align-middle duration-500 text-sm text-center bg-indigo-600/5 hover:bg-indigo-600 border-indigo-600/10 hover:border-indigo-600 text-indigo-600 hover:text-white rounded-md ms-2">oui</button>
                                                    </form>
                                                    <form action="{{ route('valider.Nevent',$publication->id) }}" method="post">
                                                        @csrf
                                                        <input type="hidden" name="status" value="Non Valider">
                                                        <button type="submit" onclick="return confirm('Vouler vous vraiment valider Event')"
                                                        class="py-1 px-4 inline-block font-semibold tracking-wide border align-middle duration-500 text-sm text-center bg-indigo-600/5 hover:bg-indigo-600 border-indigo-600/10 hover:border-indigo-600 text-indigo-600 hover:text-white rounded-md ms-2">Non</button>
                                                    </form>
                                            </td>

                                            <td class="text-end border-t border-gray-100 dark:border-gray-800 p-4 ">
                                                <a href="{{ route('publications.edit', $publication->id) }}"
                                                    class="py-1 px-4 inline-block font-semibold tracking-wide border align-middle duration-500 text-sm text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md">modifier</a>
                                                    <form action="{{ route('publications.destroy', $publication->id) }}" method="post">
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


    {{-- plus --}}
    <!-- Start Modal -->
    <dialog id="sentCrypto" class="rounded-md shadow dark:shadow-gray-800 bg-white dark:bg-slate-900 text-slate-900 dark:text-white">
        <div class="relative h-auto md:w-[480px] w-300px">
            <div class="flex justify-between items-center px-6 py-4 border-b border-gray-100 dark:border-gray-700">
                <h3 class="font-bold text-lg">Send Coin</h3>
                <form method="dialog">
                    <button class="size-6 flex justify-center items-center shadow dark:shadow-gray-800 rounded-md btn-ghost"><i data-feather="x" class="size-4"></i></button>
                </form>
            </div>
            <div class="p-6">
                <form action="#">
                    <div class="grid grid-cols-12 gap-3">
                        <div class="col-span-12">
                            <label class="font-semibold">categories</label>
                            <select class="form-select form-input mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0">
                                <option selected>-- Selection --</option>
                                <option value="ETH">ETH</option>
                            </select>
                        </div>
                        <div class="col-span-12">
                            <label class="form-label font-semibold">Nom</label>
                            <div class="relative mt-2">
                                <span class="absolute top-0.5 start-0.5 size-9 text-xl bg-gray-100 dark:bg-slate-800 inline-flex justify-center items-center text-dark dark:text-white rounded" id="QUcode"><i class="uil uil-qrcode-scan"></i></span>
                                <input type="text" class="form-input ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="entre le nom de event" required>
                            </div>
                        </div>
                        <div class="md:col-span-6 col-span-12">
                            <label class="form-label font-semibold">Nomber de place</label>
                            <div class="relative mt-2">
                                <span class="absolute top-0.5 start-0.5 size-9 text-xl bg-gray-100 dark:bg-slate-800 inline-flex justify-center items-center text-dark dark:text-white rounded" id="USD"><i class="uil uil-dollar-sign"></i></span>
                                <input type="text" class="form-input ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="Place" required>
                            </div>
                        </div>

                        <div class="md:col-span-6 col-span-12">
                            <label class="form-label font-semibold">date</label>
                            <div class="relative mt-2">
                                <span class="absolute top-0.5 start-0.5 size-9 text-xl bg-gray-100 dark:bg-slate-800 inline-flex justify-center items-center text-dark dark:text-white rounded" id="BTC"><i class="uil uil-bitcoin-circle"></i></span>
                                <input type="date" class="form-input ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="BTC" required>
                            </div>
                        </div>

                        <div class="col-span-12">
                            <label for="comments" class="font-semibold">Description</label>
                            <div class="relative mt-2">
                                <textarea name="comments" id="comments" class="form-input w-full py-2 px-3 h-28 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="Description"></textarea>
                            </div>
                        </div>
                        <div class="col-span-12">
                            <label for="comments" class="font-semibold">location</label>
                            <div class="relative mt-2">
                                <input type="text" class="form-input ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="location" required>
                            </div>
                        </div>

                     
                    </div>
                </form>
            </div>
            <div class="text-end p-4 border-t border-gray-100 dark:border-gray-700">
                <a href="javascript:void(0)" class="py-[5px] px-4 inline-block font-semibold tracking-wide align-middle duration-500 text-sm text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md">Continue</a>
            </div>
        </div>
    </dialog>
    <!-- End Modal -->
</x-admin>
