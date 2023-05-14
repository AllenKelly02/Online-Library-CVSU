<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div x-show="!toggle">


            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                    required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

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
            <!-- Name -->
            <div class="flex gap-2">
                <div>
                    <x-input-label for="name" :value="__('Last Name')" />
                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="last_name"
                        :value="old('last_name')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
                </div>
                <div>
                    <x-input-label for="name" :value="__('First Name')" />
                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="first_name"
                        :value="old('first_name')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
                </div>
                <div>
                    <x-input-label for="name" :value="__('Middle Name')" />
                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="middle_name"
                        :value="old('middle_name')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('middle_name')" class="mt-2" />
                </div>
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Student Number')" />
                <x-text-input id="text" class="block mt-1 w-full" type="text" name="student_id" :value="old('student_id')"
                    required autocomplete="username" />
                <x-input-error :messages="$errors->get('student_id')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Gender')" />

                <x-text-input id="password" class="block mt-1 w-full" type="text" name="gender" required
                     :value="old('gender')" />

                <x-input-error :messages="$errors->get('gender')" class="mt-2" />
            </div>

            <div class="flex gap-2">
                <div>
                    <x-input-label for="name" :value="__('Street')" />
                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="street"
                        :value="old('street')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('street')" class="mt-2" />
                </div>
                <div>
                    <x-input-label for="name" :value="__('Village')" />
                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="village"
                        :value="old('village')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('village')" class="mt-2" />
                </div>
                <div>
                    <x-input-label for="name" :value="__('Municipality')" />
                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="municipality"
                        :value="old('municipality')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('municipality')" class="mt-2" />
                </div>
            </div>

            <div class="flex gap-2">
                <div>
                    <x-input-label for="name" :value="__('Province')" />
                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="province"
                        :value="old('province')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('province')" class="mt-2" />
                </div>
                <div>
                    <x-input-label for="name" :value="__('Zip Code')" />
                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="zip_code"
                        :value="old('zip_code')" required autofocus autocomplete="name" />
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
