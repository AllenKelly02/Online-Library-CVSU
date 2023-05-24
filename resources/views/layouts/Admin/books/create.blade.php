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
            <form action="{{ route('admin.books.store') }}" method="POST" class="flex space-x-5 w-full" x-data="imagePreview()" enctype="multipart/form-data">
                <div class="flex flex-col gap-2">
                    <h1 class="text-black bg-gray-300 rounded-lg h-[28rem] w-auto">
                        <img x-bind:src="imageSrc" class="h-full" alt="" srcset="">
                    </h1>
                    <input type="file" @change="uploadImage($event)" name="image" multiple class="file-input file-input-bordered file-input-accent w-full max-w-xs" />
                </div>

                @csrf

                <div class="flex flex-col space-y-2 w-5/6 border border-gray-300 p-2 rounded-lg">
                    <h1 class="text-center text-3xl font-semibold text-black">
                        Book Information
                    </h1>
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="text" name="name" id="floating_email"
                            class="block py-2.5 px-0 w-full text-sm text-emerald-900 bg-transparent
                                 border-0 border-b-2 border-gray-300 appearance-none
                                   focus:outline-none
                                  focus:ring-0 focus:border-emerald-600 peer"
                            placeholder=" " required />
                        <label for="floating_email"
                            class="peer-focus:font-medium absolute text-sm
                                text-gray-500 duration-300 transform
                                 -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0
                                 peer-focus:text-emerald-600
                                  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0
                                   peer-focus:scale-75 peer-focus:-translate-y-6">Name</label>
                    </div>
                    <div class="relative flex flex-wrap items-stretch">
                        <label
                            class="flex items-center whitespace-nowrap rounded-l border border-r-0 border-gray-400 px-3 py-[0.25rem] text-center text-base font-normal leading-[1.6] text-neutral-700 "
                            for="inputGroupSelect01">Course</label>
                        <select
                            class="form-control form-select relative m-0 block w-[1px] min-w-0 flex-auto rounded-r border border-solid border-gray-400 bg-transparent bg-clip-padding px-3 py-[0.25rem] text-base font-normal leading-[1.6] text-neutral-700 outline-none transition duration-200 ease-in-out focus:outline-none
                            focus:ring-0 focus:border-emerald-600 peer"
                            id="inputGroupSelect01" name="category" type="text">
                            <option selected>Choose...</option>
                            <option value="Books">BSIT</option>
                            <option value="E-Books">BSHM</option>
                            <option value="Journal">CRIMINOLOGY</option>
                            <option value="Thesis">BS-EDUC</option>
                        </select>
                    </div>
                    <div class="relative flex flex-wrap items-stretch">
                        <label
                            class="flex items-center whitespace-nowrap rounded-l border border-r-0 border-gray-400 px-3 py-[0.25rem] text-center text-base font-normal leading-[1.6] text-neutral-700 "
                            for="inputGroupSelect01">Category</label>
                        <select
                            class="form-control form-select relative m-0 block w-[1px] min-w-0 flex-auto rounded-r border border-solid border-gray-400 bg-transparent bg-clip-padding px-3 py-[0.25rem] text-base font-normal leading-[1.6] text-neutral-700 outline-none transition duration-200 ease-in-out focus:outline-none
                            focus:ring-0 focus:border-emerald-600 peer"
                            id="inputGroupSelect01" name="category" type="text">
                            <option selected>Choose...</option>
                            <option value="Books">Books</option>
                            <option value="E-Books">E-Books</option>
                            <option value="Journal">Journal</option>
                            <option value="Thesis">Thesis</option>
                        </select>
                    </div>
                    <textarea cols="30" rows="10" name="description" placeholder="Description" class="focus:outline-none focus:ring-0 focus:border-emerald-600 peer text-black"></textarea>

                    <div class="relative z-0 w-full mb-6 group">
                        <input type="date" name="published_year" id="floating_email"
                            class="block py-2.5 px-0 w-full text-sm text-emerald-900 bg-transparent
                                 border-0 border-b-2 border-gray-300 appearance-none
                                   focus:outline-none
                                  focus:ring-0 focus:border-emerald-600 peer"
                            placeholder=" " required />
                        <label for="floating_email"
                            class="peer-focus:font-medium absolute text-sm
                                text-gray-500 duration-300 transform
                                 -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0
                                 peer-focus:text-emerald-600
                                  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0
                                   peer-focus:scale-75 peer-focus:-translate-y-6">Published
                            Date</label>
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
