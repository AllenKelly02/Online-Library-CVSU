<x-app-layout>
    <div class="flex gap-2">
        <x-adminSideBar></x-adminSideBar>


        <div class="p-2 min-h-screen w-full">
            @if (session()->has('message'))
                <div class="alert alert-success shadow-lg">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span>{{ session()->get('message') }}</span>
                    </div>
                </div>
            @endif
            <form action="{{route('admin.books.update', ['book' => $book->id])}}" method="POST" class="flex space-x-5 w-full" x-data="imagePreview()" enctype="multipart/form-data">
                @method('PUT')

                <div class="flex flex-col gap-2 relative">

                    <div x-show="!imageSrc">
                        <img src="{{asset('storage/image/' . $book->image->url)}}" class="h-[28rem]" alt="" srcset="">

                    </div>
                    <h1 class="text-black bg-gray-300 rounded-lg h-[28rem] w-auto" x-show="imageSrc">
                        <img x-bind:src="imageSrc" class="h-full" alt="" srcset="">
                    </h1>

                    <a @click="removeImage" class="absolute top-0 right-0 text-black mr-2 mt-2" x-show="imageSrc">X</a>
                    <input type="file" @change="uploadImage($event)" name="image"
                     multiple class="file-input file-input-bordered file-input-accent w-full max-w-xs" />
                </div>

                @csrf

                <div class="flex flex-col space-y-5 w-5/6 border border-gray-300 p-2 rounded-lg">
                    <h1 class="text-center text-3xl font-semibold text-black">
                        Book Information
                    </h1>
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="text" name="name" id="floating_email"
                            class="block py-2.5 px-0 w-full text-sm text-emerald-900 bg-transparent
                                 border-0 border-b-2 border-emerald-300 appearance-none
                                   focus:outline-none
                                  focus:ring-0 focus:border-emerald-600 peer"
                            placeholder="{{$book->name}}" />
                        {{-- <label for="floating_email"
                            class="peer-focus:font-medium absolute text-sm
                                text-gray-500 duration-300 transform
                                 -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0
                                 peer-focus:text-emerald-600
                                  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0
                                   peer-focus:scale-75 peer-focus:-translate-y-6">Name</label> --}}
                    </div>

                    <textarea cols="30" rows="10" name="description" placeholder="{{$book->description}}"></textarea>

                    <div class="relative z-0 w-full mb-6 group">
                        <input type="date" name="published_year" id="floating_email"
                            class="block py-2.5 px-0 w-full text-sm text-emerald-900 bg-transparent
                                 border-0 border-b-2 border-emerald-300 appearance-none
                                   focus:outline-none
                                  focus:ring-0 focus:border-emerald-600 peer"
                            placeholder="{{$book->published_year}}" />
                        <label for="floating_email"
                            class="peer-focus:font-medium absolute text-sm
                                text-gray-500 duration-300 transform
                                 -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0
                                 peer-focus:text-emerald-600
                                  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0
                                   peer-focus:scale-75 peer-focus:-translate-y-6 capitalize">published
                            year</label>
                    </div>
                    <button type="submit"
                        class="text-white bg-emerald-700 hover:bg-emerald-800 focus:ring-4 focus:outline-none
                            focus:ring-emerald-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5
                             text-center ">Submit</button>
                </div>
            </form>
        </div>
    </div>

    @push('js')
        <script src="{{asset('js/Admin/imagePreview.js')}}"></script>
    @endpush
</x-app-layout>
