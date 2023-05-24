<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="grid grid-cols-4 gap-4">


                        @forelse ($books as $book)
                            <div class="card card-side bg-emerald-300 shadow-xl">
                                <figure><img src="{{ asset('storage/image/' . $book->image->url) }}" alt="Movie"
                                        class="h-full w-[10rem]" /></figure>
                                <div class="card-body">
                                    <h2 class="card-title">{{ $book->name }}</h2>
                                    <p>{{ $book->description }}</p>
                                    <div class="card-actions justify-end">

                                        @if (!Auth::user()->hasRole('admin'))
                                            <a href="{{route('user.books.show', ['book'=> $book->id])}}">
                                                <button
                                                    class="px-4 py-2 bg-emerald-400 hover:bg-emerald-500 duration-700
                                text-black hover:font-semibold drop-shadow-lg rounded-lg hover:text-white">view</button>
                                            </a>
                                        @endif
                                    </div>

                                </div>
                            </div>


                        @empty
                            <div class="alert alert-warning shadow-lg col-span-4">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6"
                                        fill="none" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                    </svg>
                                    <span>No Item</span>
                                    <a href="{{route('unverified')}}">unverified</a>
                                </div>
                            </div>
                        @endforelse


                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
