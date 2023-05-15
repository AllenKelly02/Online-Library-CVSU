<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="w-full h-auto flex justify-center mt-10">
        <div class="h-[50rem ] w-5/6 bg-gray-50 drop-shadow-sm  flex space-x-2 rounded-lg">
            <div class="w-1/3 h-[30rem]">
                <img src="{{asset('images/icons/avatar.jpg')}}" class="h-auto w-full">
            </div>
            <div class="w-full flex flex-col space-y-5 h-[30rem] capitalize text-black">
                <div class="flex flex-row-reverse">
                   <a href="{{route('user.profile.edit')}}"> <button class="btn btn-ghost">Edit</button></a>
                </div>
                <div class="flex space-x-5 p-5">
                    <h1 class="font-semibold"><span class="text-gray-600 font-normal">Student Number :
                        </span>{{ $profile->student_id }}</h1>
                </div>
                <div class="flex space-x-5 p-5">
                    <h1 class="font-semibold"><span class="text-gray-600 font-normal">Last name :
                        </span>{{ $profile->last_name }}</h1>
                    <h1 class="font-semibold"> <span class="text-gray-600 font-normal">first name :
                        </span>{{ $profile->first_name }}</h1>
                    <h1 class="font-semibold"><span class="text-gray-600 font-normal">middle name :
                        </span>{{ $profile->middle_name }}</h1>
                </div>
                <div class="flex space-x-5 p-5">
                    <h1 class="font-semibold"><span class="text-gray-600 font-normal">Gender :
                        </span>{{ $profile->gender }}</h1>
                </div>
                <div class="flex space-x-5 p-5">
                    <h1 class="font-semibold"><span class="text-gray-600 font-normal">street :
                        </span>
                        {{ $profile->street }}
                    </h1>
                    <h1 class="font-semibold"><span class="text-gray-600 font-normal">village :
                        </span>
                        {{ $profile->village }}
                    </h1>
                    <h1 class="font-semibold"><span class="text-gray-600 font-normal">municipality :
                        </span>
                        {{ $profile->municipality }}
                    </h1>
                    <h1 class="font-semibold"><span class="text-gray-600 font-normal">municipality :
                        </span>
                        {{ $profile->province }}
                    </h1>
                    <h1 class="font-semibold"><span class="text-gray-600 font-normal">municipality :
                        </span>
                        {{ $profile->zip_code }}
                    </h1>
                </div>
            </div>

        </div>
    </div>

</x-app-layout>
