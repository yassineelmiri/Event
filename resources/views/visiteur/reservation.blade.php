<x-master>
    <!--========== Booking Form Start ==========-->
    <div class="lg:pt-20 pt-16">
        <div class="container">
            <ul class="flex items-center justify-between pb-10">
                <li class="single-step-count justify-end step">
                    <span
                        class="inline-flex justify-center items-center lg:h-10 lg:w-10 w-9 h-9 rounded-full bg-primary-1 text-white">01</span>
                    <p class="text-sm lg:text-base">Personal Details</p>
                </li>
                <li class="flex-grow h-[1px] bg-stock-1 mx-3 sm:block hidden"></li>
                <li class="single-step-count justify-center step">
                    <span
                        class="inline-flex justify-center items-center lg:h-10 lg:w-10 w-9 h-9 rounded-full bg-primary-1 text-white">02</span>
                    <p class="text-sm lg:text-base">Payment Details</p>
                </li>
                <li class="flex-grow h-[1px] bg-stock-1 mx-3 sm:block hidden"></li>
                <li class="single-step-count justify-end step">
                    <span
                        class="inline-flex justify-center items-center lg:h-10 lg:w-10 w-9 h-9 rounded-full bg-primary-1 text-white">03</span>
                    <p class="text-sm lg:text-base">Final Step</p>
                </li>
            </ul>
            <div class="tab">
                <div class="grid grid-cols-12 lg:gap-12 gap-base">
                    <div class="lg:col-span-8 col-span-12">
                        <div class="px-5 py-4 bg-primary-1 bg-opacity-20 text-dark-2 lg:text-base text-sm">
                            Sign in with your saved information to book, or <a href="auth.html"
                                class="font-semibold text-dark-1">register</a> to manage your reservations on the go!
                        </div>

                        <h5 class="text-dark-1 lg:text-[22px] text-2md font-semibold mt-base mb-7">Please tell us about
                            yourself.</h5>

                        <div class="grid grid-cols-2 lg:gap-7 gap-5">
                            <div class="col-span-2">
                                <label for="" class="text-dark-2 block mb-2">Full Name</label>
                                <input type="text" placeholder="ex: Jhon Doe" class="input_style__primary">
                            </div>
                            <div class="lg:col-span-1 col-span-2">
                                <label for="" class="text-dark-2 block mb-2">Email</label>
                                <input type="text" placeholder="ex: example@email.com" class="input_style__primary">
                            </div>
                            <div class="lg:col-span-1 col-span-2">
                                <label for="" class="text-dark-2 block mb-2">Phone Number</label>
                                <input type="text" placeholder="Phone Number" class="input_style__primary">
                            </div>
                            <div class="col-span-2">
                                <label for="" class="text-dark-2 block mb-2">Your Address</label>
                                <input type="text" placeholder="Your Address" class="input_style__primary">
                            </div>
                            <div class="lg:col-span-1 col-span-2">
                                <label for="" class="text-dark-2 block mb-2">State/District</label>
                                <input type="text" placeholder="State/District" class="input_style__primary">
                            </div>
                            <div class="lg:col-span-1 col-span-2">
                                <label for="" class="text-dark-2 block mb-2">Zip Code/Postal Code</label>
                                <input type="text" placeholder="Zip Code/Postal Code" class="input_style__primary">
                            </div>
                            <div class="col-span-2">
                                <label for="" class="text-dark-2 block mb-2">Additional Massage</label>
                                <textarea cols="30" rows="7" class="input_style__primary" placeholder="Write Here..."></textarea>
                            </div>
                            <div class="custom-checkbox col-span-2">
                                <input type="checkbox" value="agree2" id="agree2">
                                <label for="agree2">I agree to Arid Terms of Use and Privacy Policy.</label>
                            </div>

                        </div>
                    </div>
                    <div class="lg:col-span-4 col-span-12">
                        <h5 class="text-dark-1 lg:text-[22px] text-2md font-semibold">
                            Your Booking Details
                        </h5>
                        <div class="flex group pt-5">
                            <a href="package-details.html"
                                class="shrink-0 lg:max-w-[134px] max-w-[100px] mr-[15px] overflow-hidden">
                                <img src="assets/images/packages/p1-1.webp" alt="blogs"
                                    class="w-full group-hover:scale-105 duration-200">
                            </a>
                            <div class="grow">
                                <ul class="text-sm text-orange-500">
                                    <li class="mr-[2px] last:mr-0 inline-block"><i class="bi bi-star-fill"></i></li>
                                    <li class="mr-[2px] last:mr-0 inline-block"><i class="bi bi-star-fill"></i></li>
                                    <li class="mr-[2px] last:mr-0 inline-block"><i class="bi bi-star-fill"></i></li>
                                    <li class="mr-[2px] last:mr-0 inline-block"><i class="bi bi-star-fill"></i></li>
                                    <li class="mr-[2px] last:mr-0 inline-block"><i class="bi bi-star-half"></i></li>
                                </ul>
                                <h5
                                    class="lg:text-md mt-1 text-base font-semibold leading-[1.64] group-hover:text-primary-1 duration-200 fixed-title">
                                    <a href="package-details.html">Cusco & Salkantay Trekking to Machu Picchu</a>
                                </h5>
                                <div class="mt-[5px] text-dark-2">
                                    <span>
                                        Form
                                    </span>
                                    <span class="text-primary-1 font-medium">$140.00</span>
                                </div>
                            </div>
                        </div>

                        <div
                            class="sidebar-devider lg:my-8 my-7 h-[3px] bg-[url('https://arid-html.vercel.app/main-file/images/illustration/wave.svg')] bg-repeat">
                        </div>

                        <div class="grid grid-cols-2 items-center">
                            <div class="col-span-1 border-r border-stock-1">
                                <span class="text-sm text-dark-3">Check-in</span>
                                <h5 class="lg:text-2md text-md font-semibold text-dark-1 pb-1">Fri 29, Oct 2024</h5>
                                <span class="text-sm text-dark-3">Time : <span class="text-dark-2 font-medium">10:00 -
                                        12:00</span> </span>
                            </div>
                            <div class="col-span-1 text-end">
                                <span class="text-sm text-dark-3">Check-out</span>
                                <h5 class="lg:text-2md text-md font-semibold text-dark-1 pb-1">Fri 29, Nov 2024</h5>
                                <span class="text-sm text-dark-3">Time : <span class="text-dark-2 font-medium">10:00 -
                                        12:00</span> </span>
                            </div>
                        </div>

                        <div
                            class="sidebar-devider lg:my-8 my-7 h-[3px] bg-[url('https://arid-html.vercel.app/main-file/images/illustration/wave.svg')] bg-repeat">
                        </div>

                        <div>
                            <div class="flex justify-between gap-3 lg:text-base text-sm">
                                <span class="grow text-dark-2">- Total length of stay:</span>
                                <span class="grow text-dark-1 font-semibold text-end">9 nights</span>
                            </div>
                            <div class="mt-2">
                                <a href="#" class="underline text-sm font-medium text-primary-1">Want to
                                    traveling on
                                    different dates?</a>
                            </div>
                            <div class="flex justify-between gap-3 mt-5 lg:text-base text-sm">
                                <span class="grow text-dark-2">- Total Travler:</span>
                                <span class="grow text-dark-1 font-semibold text-end">2 Adult, 1 Children, 2
                                    room</span>
                            </div>
                            <div class="mt-2">
                                <a href="#" class="underline text-sm font-medium text-primary-1">Want to change
                                    selections?</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab">
                <div class="grid grid-cols-12 lg:gap-12 gap-base">
                    <div class="lg:col-span-8 col-span-12">
                        <h5 class="text-dark-1 lg:text-[22px] text-2md font-semibold mb-7">
                            Enter your payment details
                        </h5>
                        <div class="grid grid-cols-2 lg:gap-7 gap-5">
                            <div class="lg:col-span-1 col-span-2">
                                <label for="" class="text-dark-2 block mb-2">Card Holder Name</label>
                                <input type="text" placeholder="Holder Full Name" class="input_style__primary">
                            </div>
                            <div class="lg:col-span-1 col-span-2">
                                <label for="" class="text-dark-2 block mb-2">Card Number</label>
                                <input type="text" placeholder="1234 4568 1234 4567" class="input_style__primary">
                            </div>
                            <div class="lg:col-span-1 col-span-2">
                                <label for="" class="text-dark-2 block mb-2">MM/YY</label>
                                <input type="text" placeholder="00/00" class="input_style__primary">
                            </div>
                            <div class="lg:col-span-1 col-span-2">
                                <label for="" class="text-dark-2 block mb-2">CVV/CVC</label>
                                <input type="text" placeholder="1234" class="input_style__primary">
                            </div>
                        </div>
                        <div class="pt-6 mt-8 border-t border-stock-1">
                            <label for="" class="text-dark-2 block mb-2">Do you have a promo code?</label>
                            <input type="text" placeholder="Apply coupon code" class="input_style__primary">
                        </div>
                        <div class="custom-checkbox col-span-2 mt-5 lg:mt-6">
                            <input type="checkbox" value="agree" id="agree">
                            <label for="agree">Save Payment Details</label>
                        </div>
                    </div>
                    <div class="lg:col-span-4 col-span-12">
                        <h5 class="text-dark-1 lg:text-[22px] text-2md font-semibold">
                            Your Payment Summary
                        </h5>
                        <ul class="pt-4">
                            <li class="flex justify-between gap-2 text-dark-1 mt-4"><span>Double Bed Room x 1 </span>
                                <span class="font-semibold flex-shrink-0">$100</span>
                            </li>

                            <li class="flex justify-between gap-2 text-dark-1 mt-4"><span>Total Travelers x 3 </span>
                                <span class="font-semibold flex-shrink-0">$400</span>
                            </li>

                            <li class="flex justify-between gap-2 text-dark-1 mt-4"><span>Taxes </span> <span
                                    class="font-semibold flex-shrink-0">$00</span></li>
                        </ul>
                        <div class="border-t border-stock-1 pt-3 mt-4">
                            <li class="flex justify-between gap-2 text-dark-1 mt-4"><span>Total</span> <span
                                    class="font-bold flex-shrink-0">$400</span></li>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab">
                <div class="text-center max-w-[1000px] mx-auto">
                    <div
                        class="lg:h-16 lg:w-16 w-12 h-12 rounded-full bg-primary-1 lg:text-xl text-2md text-white flex justify-center items-center mx-auto">
                        <i class="bi bi-check-lg"></i>
                    </div>
                    <h4 class="lg:text-lg text-2md font-semibold text-dark-2 mt-4">Your order is on its way! <br> Check
                        your email for delivery timing and order details</h4>

                    <div class="mt-10 px-5 py-4 border border-primary-1 border-dashed">
                        <div class="grid lg:grid-cols-4 grid-cols-2 gap-4">
                            <div class="col-span-1 text-dark-3">
                                <p>Order Number</p>
                                <p class="mt-2 font-semibold text-dark-1 lg:text-md text-base">123456</p>
                            </div>
                            <div class="col-span-1 text-dark-3">
                                <p>Date</p>
                                <p class="mt-2 font-semibold text-dark-1 lg:text-md text-base">21/09/2024</p>
                            </div>
                            <div class="col-span-1 text-dark-3">
                                <p>Total</p>
                                <p class="mt-2 font-semibold text-dark-1 lg:text-md text-base">$550</p>
                            </div>
                            <div class="col-span-1 text-dark-3">
                                <p>Payment Method</p>
                                <p class="mt-2 font-semibold text-dark-1 lg:text-md text-base">Cradit Card</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="lg:pt-14 pt-10 text-center">
                <button type="button" id="prevBtn" class="btn_primary__v1 outlined mr-5">
                    Previous
                </button>
                <button type="button" id="nextBtn" class="btn_primary__v1">
                    Next Step
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M7.42505 16.5999L12.8584 11.1666C13.5 10.5249 13.5 9.4749 12.8584 8.83324L7.42505 3.3999"
                            stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                            stroke-linejoin="round"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <!--========== Booking Form End ==========-->
</x-master>
