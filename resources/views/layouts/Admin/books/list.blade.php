<x-app-layout>
    <a href="{{route('admin.books.create')}} " class="m-5 hover:bg-green-700">
        <h1 class="capitalize px-5 text-black" >
            Add book
        </h1>
    </a>
    <div class="flex gap-5">
        <x-adminSideBar>

        </x-adminSideBar>

        <div class="flex flex-col space-y-5 m-5">
            <div class="grid grid-cols-4 gap-4 mt-5">

                @forelse ($books as $book)
                    <div class="card w-[10rem] h-auto bg-emerald-100 shadow-xl">
                        <figure><img src="{{ asset('storage/image/' . $book->image->url) }}" alt="Shoes"
                                class="h-[15em] w-auto" /></figure>
                        <div class="card-body">
                            <h2 class="card-title text-black text-sm">{{ $book->name }}</h2>
                            <p class="text-black">{{ $book->description }}</p>
                            <div class="card-actions justify-end">
                                <a href="{{ route('admin.books.show', ['book' => $book->id]) }}">
                                    <button
                                        class="rounded-lg text-sm bg-emerald-300 px-4 py-2 text-white hover:bg-emerald-400 duration-700
    hover:text-bold">View</button>
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="alert alert-warning shadow-lg">
                        <div class="w-full">
                            <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6"
                                fill="none" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                            </svg>
                            <span>No Book Available</span>
                        </div>
                    </div>
                @endforelse

            </div>
        </div>
    </div>
</x-app-layout>
