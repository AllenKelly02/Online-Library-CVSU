<x-app-layout>
    <div class="min-h-screen w-full p-5">
        <div class="grid grid-cols-8 gap-4">
            @forelse ($books as $book)
                <div class="card w-34 bg-base-100 shadow-xl image-full">
                    <figure><img src="{{ asset('storage/image/' . $book->image->url) }}" alt="Shoes" /></figure>
                    <div class="card-body" x-show="true">
                        <h2 class="card-title">{{ $book->name }}</h2>
                        <p>{{ $book->description }}</p>
                        <div class="card-actions justify-end">
                            <a href="{{route('dashboard')}}">
                                <button class="btn btn-primary">View</button>
                            </a>
                        </div>
                    </div>
                </div>

            @empty
                <div class="alert alert-warning shadow-lg">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6"
                            fill="none" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                        </svg>
                        <span>No Books Availble</span>
                    </div>
                </div>
            @endforelse
        </div>
    </div>
</x-app-layout>
