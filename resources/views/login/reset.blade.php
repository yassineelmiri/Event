<x-master title="Se connecter">

    <!--========== PRELOADER STYLE START ==========-->
    <div class="flex items-center justify-center fixed w-full h-full z-[100] bg-white preloader">
        <div class="relative">
            <div class="h-30 w-30 rounded-full border-t-8 border-b-8 border-gray-200"></div>
            <img src="assets/images/logo-icon.png" alt="logo"
                class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 max-w-[50px]">
            <div
                class="absolute top-0 left-0 h-30 w-30 rounded-full border-t-8 border-b-8 border-primary-1 animate-spin">
            </div>
        </div>
    </div>
    <!--========== PRELOADER STYLE END ==========-->
    <div class="fixed inset-0 w-full h-full bg-opacity-40 z-50 overflow-y-scroll bg-no-repeat bg-cover bg-center"
        style="background-image:linear-gradient(to right, rgba(30, 30, 30, .3), rgba(30, 30, 30, .3)), url('assets/images/hero/h4.webp');">
        <div class="max-w-[550px] h-full flex justify-center items-center py-5 px-5 mx-auto">
            <div class="mx-auto bg-white w-full px-base py-base">
                <div class="text-center">
                    <a href="{{ route('home') }}"><img src="assets/images/logo.png" alt="logo" class="mx-auto"></a>
                    @error('email')
                        <span class="text-danger">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <ul id="tabs-nav" class="login-tabs flex gap-4 pt-6">
                    <li class="tab-link active basis-1/2" data-tab="1">Rest password</li>
                </ul>
                <div id="tab-1" class="tab-content active">
                    <form method="POST" action="{{ route('reset.password.post') }}">
                        @csrf
                        <input type="text" name="token" hidden value="{{$token}}">
                        <div class="mt-9">
                            <input type="email" placeholder="Email : " class="input_style__primary"
                                name="email">
                        </div>
                        <div class="mt-9">
                            <input type="password" placeholder="password  " class="input_style__primary"
                                name="password">
                        </div>
                        <div class="mt-9">
                            <input type="password" placeholder="confirmer password  " class="input_style__primary"
                                name="password_confirmation">
                        </div>
                        <button class="btn_primary__v1 uppercase !w-full justify-center lg:mt-5 mt-4" type="submit">
                            Reset Password
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M7.42505 16.5999L12.8584 11.1666C13.5 10.5249 13.5 9.4749 12.8584 8.83324L7.42505 3.3999"
                                    stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>



</x-master>
