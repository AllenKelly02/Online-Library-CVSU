<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" >
        @csrf



        <!--logo-->
        <div class="flex p-0 justify-center items-center scale-[0.70]">
            <img src="{{asset('images/logo.png')}}">
        </div>

        <!-- Email Address -->
        <div class="relative mb-6">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pt-5 pointer-events-none">
                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 " fill="currentColor"
                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z">
                    </path><path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path></svg>
            </div>
    
            <x-input-label for="email" :value="__('Email')" class="ml-1" />
            <x-text-input id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg
             focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5
             " placeholder="name@gmail.com" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" class="ml-1" />

            <x-text-input id="password" class="bg-gray-50 border
             border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500
              focus:border-blue-500 block w-full p-2.5
                " placeholder="Password"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Forgot Password -->
        <div class="block mt-2 ml-1">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600
                 hover:text-gray-900 dark:hover:text-black-100 rounded-md " href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <!-- Remember Me
            <label for="remember_me" class="inline-flex justify-end">
                <input id="remember_me" type="checkbox" class="rounded  border-gray-300  text-green-600 shadow-sm
                 focus:ring-green-500" name="remember">
                <span class="ml-1 text-sm text-gray-600 ">{{ __('Remember me') }}</span>
            </label>
        </div> -->

        <div class="flex items-center justify mt-7">
            <div class="flex items-center">
                <div class="ml-1">
                    <a class=" hover:text-green-700  rounded-md focus:outline-none focus:ring-2
                    focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('register') }}">
                        {{ __('Back to Register') }}
                    </a>
                </div>
            </div>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <x-primary-button class="flex items-center justify-end ml-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
