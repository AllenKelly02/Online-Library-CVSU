<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div x-show="!toggle">

        <!--logo-->
        <div class="flex p-0 justify-center items-center scale-[0.70]">
            <img src="{{asset('images/logo.png')}}">
        </div>

            <!-- Name -->
            {{-- <div>
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                    required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div> --}}

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                    name="password_confirmation" required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600  hover:text-gray-900
              rounded-md focus:outline-none focus:ring-2
             focus:ring-offset-2 focus:ring-indigo-500 mr-5  "
                    href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <a href="#" @click="openToggle" class="btn btn-accent">Next</a>
            </div>

        </div>

        <div x-show="toggle">
            <!--logo-->
                <div class="flex p-0 justify-center items-center scale-[0.70]">
                <img src="{{asset('images/logo.png')}}">
            </div>

            <!-- Name -->
            <div class="flex gap-2">
                <div>
                    <x-input-label for="last_name" :value="__('Last Name')" />
                    <x-text-input id="last_name" class="block mt-1 w-full" type="text" name="last_name"
                        :value="old('last_name')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
                </div>
                <div>
                    <x-input-label for="first_name" :value="__('First Name')" />
                    <x-text-input id="first_name" class="block mt-1 w-full" type="text" name="first_name"
                        :value="old('first_name')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
                </div>
                <div>
                    <x-input-label for="middle_name" :value="__('Middle Name')" />
                    <x-text-input id="middle_name" class="block mt-1 w-full" type="text" name="middle_name"
                        :value="old('middle_name')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('middle_name')" class="mt-2" />
                </div>
            </div>

            <!-- student id -->
            <div class="mt-4">
                <x-input-label for="student_id" :value="__('Student Number')" />
                <x-text-input id="student_id" class="block mt-1 w-full" type="text" name="student_id" :value="old('student_id')"
                    required autocomplete="username" />
                <x-input-error :messages="$errors->get('student_id')" class="mt-2" />
            </div>

            <!-- gender -->
            <div class="mt-4">
                <x-input-label for="gender" :value="__('Gender')" />

                <x-text-input id="gender" class="block mt-1 w-full" type="text" name="gender" required/>

                <x-input-error :messages="$errors->get('gender')" class="mt-2" />
            </div>

            <div class="flex gap-2">
                <div>
                    <x-input-label for="street" :value="__('Street')" />
                    <x-text-input id="street" class="block mt-1 w-full" type="text" name="street"
                        :value="old('street')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('street')" class="mt-2" />
                </div>
                <div>
                    <x-input-label for="village" :value="__('Village')" />
                    <x-text-input id="village" class="block mt-1 w-full" type="text" name="village"
                        :value="old('village')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('village')" class="mt-2" />
                </div>
                <div>
                    <x-input-label for="municipality" :value="__('Municipality')" />
                    <x-text-input id="municipality" class="block mt-1 w-full" type="text" name="municipality"
                        :value="old('municipality')" required autofocus autocomplete="municipality" />
                    <x-input-error :messages="$errors->get('municipality')" class="mt-2" />
                </div>
            </div>

            <div class="flex gap-2">
                <div>
                    <x-input-label for="province" :value="__('Province')" />
                    <x-text-input id="province" class="block mt-1 w-full" type="text" name="province"
                        :value="old('province')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('province')" class="mt-2" />
                </div>
                <div>
                    <x-input-label for="zip_code" :value="__('Zip Code')" />
                    <x-text-input id="zip_code" class="block mt-1 w-full" type="text" name="zip_code"
                        :value="old('zip_code')" required autofocus autocomplete="zip_code" />
                    <x-input-error :messages="$errors->get('zip_code')" class="mt-2" />
                </div>
            </div>

            <!-- Confirm Password -->
            {{-- <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                    name="password_confirmation" required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div> --}}

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600  hover:text-gray-900
              rounded-md focus:outline-none focus:ring-2
             focus:ring-offset-2 focus:ring-indigo-500 "
                   href="#" @click="openToggle">
                    {{ __('<- back') }}
                </a>


                <x-primary-button class="ml-4">
                    {{ __('Register') }}
                </x-primary-button>

            </div>

        </div>
    </form>



</x-guest-layout>
