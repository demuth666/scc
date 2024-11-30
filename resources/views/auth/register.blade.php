<x-guest-layout>
    <div class="flex flex-col sm:justify-center items-center pb-7">
        <h2 class="text-2xl font-bold">Create your account</h2>
    </div>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <div class="relative mb-6">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                    <svg id='Male_User_24' width='20' height='20' viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'><rect width='24' height='24' stroke='none' fill='#000000' opacity='0'/>
                        <g transform="matrix(1 0 0 1 12 12)" >
                            <path style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" translate(-12, -12)" d="M 12 2 C 6.477 2 2 6.477 2 12 C 2 17.523 6.477 22 12 22 C 17.523 22 22 17.523 22 12 C 22 6.477 17.523 2 12 2 z M 12 4.75 C 13.795 4.75 15.25 6.205 15.25 8 C 15.25 9.795 13.795 11.25 12 11.25 C 10.205 11.25 8.75 9.795 8.75 8 C 8.75 6.205 10.205 4.75 12 4.75 z M 12 20 C 9.23 20 6.79 18.592 5.354 16.453 C 6.475 14.823 10.046 14 12 14 C 13.954 14 17.525 14.823 18.646 16.453 C 17.21 18.592 14.77 20 12 20 z" stroke-linecap="round" />
                        </g>
                    </svg>
                </div>
                <x-text-input id="name" placeholder="Enter your name" class="block mt-1 w-full ps-10 p-2.5 focus:border-[#FF852F] focus:ring-[#FF852F]" type="text" name="name" :value="old('name')" required autofocus/>
            </div>
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="phone_number" :value="__('Phone number')" />
            <div class="relative mb-6">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                    <svg id='Phone_24' width='20' height='20' viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'><rect width='24' height='24' stroke='none' fill='#000000' opacity='0'/>
                        <g transform="matrix(0.87 0 0 0.87 12 12)" >
                            <path style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" translate(-15.5, -14.5)" d="M 21.225 17.889 C 20.819000000000003 17.651 20.32 17.656 19.916 17.896 L 17.87 19.115000000000002 C 17.412000000000003 19.388 16.84 19.356 16.42 19.028000000000002 C 15.694000000000003 18.461000000000002 14.525000000000002 17.507 13.508000000000003 16.490000000000002 C 12.491000000000003 15.473000000000003 11.537000000000003 14.304000000000002 10.970000000000002 13.578000000000003 C 10.642000000000003 13.158000000000003 10.610000000000003 12.586000000000002 10.883000000000003 12.128000000000004 L 12.102000000000002 10.082000000000004 C 12.343000000000002 9.678000000000004 12.345000000000002 9.175000000000004 12.107000000000003 8.769000000000004 L 9.105 3.641 C 8.814 3.145 8.236 2.901 7.6770000000000005 3.0380000000000003 C 7.134 3.17 6.429 3.492 5.69 4.232 C 3.3760000000000003 6.546 2.1470000000000002 10.449 10.849 19.151 C 19.551000000000002 27.853 23.453 26.625 25.768 24.31 C 26.509 23.569 26.830000000000002 22.863 26.963 22.319 C 27.098000000000003 21.761 26.858 21.186999999999998 26.363 20.897 C 25.127 20.174 22.461 18.613 21.225 17.889 z" stroke-linecap="round" />
                        </g>
                    </svg>
                </div>
                <x-text-input id="phone_number" placeholder="Enter phone number" class="block mt-1 w-full ps-10 p-2.5 focus:border-[#FF852F] focus:ring-[#FF852F]" type="number" name="phone_number" :value="old('phone_number')" required autofocus autocomplete="username" />
            </div>
            <x-input-error :messages="$errors->get('phone_number')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="name" :value="__('Email')" />
            <div class="relative mb-6">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 16 16"
                        fill="currentColor"
                        class="h-4 w-4 opacity-70">
                        <path
                            d="M2.5 3A1.5 1.5 0 0 0 1 4.5v.793c.026.009.051.02.076.032L7.674 8.51c.206.1.446.1.652 0l6.598-3.185A.755.755 0 0 1 15 5.293V4.5A1.5 1.5 0 0 0 13.5 3h-11Z" />
                        <path
                            d="M15 6.954 8.978 9.86a2.25 2.25 0 0 1-1.956 0L1 6.954V11.5A1.5 1.5 0 0 0 2.5 13h11a1.5 1.5 0 0 0 1.5-1.5V6.954Z" />
                    </svg>
                </div>
                <x-text-input id="email" placeholder="Enter your email" class="block mt-1 w-full ps-10 p-2.5 focus:border-[#FF852F] focus:ring-[#FF852F]" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <div class="relative mb-6">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 16 16"
                        fill="currentColor"
                        class="h-4 w-4 opacity-70">
                        <path
                            fill-rule="evenodd"
                            d="M14 6a4 4 0 0 1-4.899 3.899l-1.955 1.955a.5.5 0 0 1-.353.146H5v1.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-2.293a.5.5 0 0 1 .146-.353l3.955-3.955A4 4 0 1 1 14 6Zm-4-2a.75.75 0 0 0 0 1.5.5.5 0 0 1 .5.5.75.75 0 0 0 1.5 0 2 2 0 0 0-2-2Z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
                <x-text-input id="password" class="block mt-1 w-full ps-10 p-2.5 focus:border-[#FF852F] focus:ring-[#FF852F]"
                              type="password"
                              name="password"
                              required autocomplete="new-password" placeholder="password"/>
            </div>

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="mt-6">
            <div>
                <button class="w-full bg-[#FF852F] rounded-md font-semibold text-xs text-white uppercase items-center px-4 py-3">
                    Register
                </button>
            </div>

            <div class="mt-3 flex items-center justify-center">
                <p class="text-gray-600">or continue with</p>
            </div>

            <div class="mt-3">
                <a href="{{route('auth.redirect')}}">
                    <button type="button" class="w-full bg-white border border-gray-700 flex justify-center rounded-md font-semibold text-xs text-black items-center px-4 py-3">
                        <div class="flex items-center justify-center w-5 h-5 rounded-l">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                                <path fill="#fbc02d" d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12	s5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24s8.955,20,20,20	s20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z"></path><path fill="#e53935" d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039	l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z"></path><path fill="#4caf50" d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36	c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z"></path><path fill="#1565c0" d="M43.611,20.083L43.595,20L42,20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571	c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z"></path>
                            </svg>
                        </div>
                        <span class="ml-3">Sign Up With Google</span>
                    </button>
                </a>
            </div>
        </div>
        </div>
    </form>

    <div class="mt-5 flex flex-col sm:justify-center items-center pb-7">
        <p class="text-sm">Don't have account? <a href="{{route('login')}}" class="text-sm font-bold underline">Login</a></p>
    </div>
</x-guest-layout>
