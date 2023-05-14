<x-app-layout>
    <div class="flex space-x-5">

        <x-userSideBar></x-userSideBar>
        <div class="p-4 text-black">


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

            <div class="flex justify-center gap-2 mt-5 ml-5">
                <div class="hero h-5/6 bg-gray-200 drop-shadow-sm w-[75rem] flex flex-col">
                    <div class="hero-content flex-col lg:flex-row">
                        <img src="{{ asset('storage/image/' . $book->image->url) }}"
                            class="max-w-sm rounded-lg shadow-2xl" />
                        <div>
                            <h1 class="text-5xl font-bold text-black">{{$book->name}}</h1>
                            <p class="py-6 text-black text-lg h-[20rem]">{{$book->description}}</p>
                            <p class="p4 text-sm">
                                <span>Published Date : {{$book->published_year}}</span>

                            </p>
                            {{-- <button class="btn btn-primary">Get Started</button> --}}
                        </div>
                    </div>

                    {{-- <h1><span>Status : </span>
                            {{$book->is_borrowed ? 'Borrowed' : 'available'}}
                    </h1> --}}

                        <div class="flex flex-row-reverse w-full">
                            <div class="flex space-x-5 mr-10 text-black capitalize">

                                <form action="{{ route('user.books.borrow', ['book' => $book->id]) }}" method="post">

                                    @csrf
                                    <button class="btn btn-accent">Borrow</button>
                                </form>
                            </div>
                        </div>




                </div>
            </div>
        </div>

    </div>

</x-app-layout>
