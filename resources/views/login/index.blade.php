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
                    <li class="tab-link active basis-1/2" data-tab="1">Sign In</li>
                    <li class="tab-link basis-1/2" data-tab="2">Sign Up</li>
                </ul>
                <div id="tab-1" class="tab-content active">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mt-9">
                            <input type="email" placeholder="Email or Username" class="input_style__primary"
                                name="email">
                        </div>

                        <div class="lg:mt-5 mt-4">
                            <input type="password" placeholder="Your Passowrd" class="input_style__primary"
                                name="password">
                        </div>
                        <div class="lg:mt-5 mt-4 flex gap-2 items-center">
                            <input type="checkbox" id="logincheck" class="h-4 w-4 rounded-md border-primary-1 border">
                            <label for="logincheck" class="text-dark-2">Remember me</label>
                        </div>
                        <button class="btn_primary__v1 uppercase !w-full justify-center lg:mt-5 mt-4" type="submit">
                            Login
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M7.42505 16.5999L12.8584 11.1666C13.5 10.5249 13.5 9.4749 12.8584 8.83324L7.42505 3.3999"
                                    stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </button>

                        <div class="text-center lg:mt-6 mt-5">
                            <a href="{{ route('Forgot') }}" class="text-dark-3">Forgot your password ?</a>
                        </div>
                    </form>
                </div>


                <div id="tab-2" class="tab-content">
                    <form method="POST" action="{{ route('profiles.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="mt-9">
                            <input type="name" placeholder="name" class="input_style__primary" name="name"
                                value="{{ old('name') }}">
                        </div>
                        <div class="mt-9">
                            <input type="email" placeholder="name@example.com" class="input_style__primary"
                                name="email" value="{{ old('email') }}">
                        </div>
                        <div class="lg:mt-5 mt-4">
                            <input type="password" placeholder="Passowrd :" name="password" class="input_style__primary"
                                name="password">
                        </div>
                        <div class="lg:mt-5 mt-4">
                            <input type="password" placeholder="Repeter Passowrd :" name="password_confirmation"
                                class="input_style__primary">
                        </div>
                        <div class="lg:mt-5 mt-4">
                            <input type="text" placeholder="telephone :" name="telephone"
                                class="input_style__primary" name="password">
                        </div>
                        <div class="lg:mt-5 mt-4">
                            <input type="text" placeholder="address :" name="address" class="input_style__primary">
                        </div>
                        <div class="lg:mt-5 mt-4">
                            <select class="input_style__primary"name="role" required>
                                <option value="{{ old('role') }}">Select role</option>
                                <option value="Utilisateur">Utilisateur</option>
                                <option value="Organisateur">Organisateur</option>
                            </select>
                        </div>
                        <div class="lg:mt-5 mt-4 flex gap-2 items-center">
                            <input type="checkbox" id="logincheck"
                                class="h-4 w-4 rounded-md border-primary-1 border">
                            <label for="logincheck" class="text-dark-2">I Accept <a href="about.html"
                                    class="underline">Terms And Condition</a></label>
                        </div>
                        <button class="btn_primary__v1 uppercase !w-full justify-center lg:mt-5 mt-4" type="submit">
                            sign up
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
