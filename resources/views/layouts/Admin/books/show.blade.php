<x-app-layout>

    <div class="flex gap-5">
        <x-adminSideBar>
        </x-adminSideBar>
        <div class="flex justify-center gap-2 mt-5 ml-5">
            <div class="hero h-5/6 bg-gray-200 drop-shadow-sm w-[75rem] flex flex-col space-y-5">
                <div class="hero-content flex-col lg:flex-row">
                    <img src="{{ asset('storage/image/' . $book->image->url) }}" class="max-w-sm rounded-lg shadow-2xl" />
                    <div>
                        <h1 class="text-5xl font-bold text-black">{{ $book->name }}</h1>
                        <p class="py-6 text-black text-lg h-[20rem]">{{ $book->description }}</p>
                        <p class="p4 text-sm">
                            <span>Published Date : </span>
                            {{ $book->published_year }}
                        </p>
                        {{-- <button class="btn btn-primary">Get Started</button> --}}
                    </div>
                </div>
                <div class="flex flex-row-reverse w-full">
                    <div class="flex space-x-5 mr-10 text-black capitalize">

                        <a href="{{ route('admin.books.edit', ['book' => $book->id]) }}">
                            <button class="btn btn-accent">edit</button>
                        </a>

                        <form action="{{ route('admin.books.destroy', ['book' => $book->id]) }}" method="post">
                            @method('Delete')
                            @csrf
                            <button class="btn btn-error">Delete</button>
                        </form>

                    </div>
                </div>
                <div class="w-full">

                    <div class="relative overflow-x-auto">
                        <table class="w-full text-sm text-left text-gray-500 ">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                       Book name
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                       Student Name
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                       Borrowed Date
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                       Return Date
                                    </th>
                                </tr>
                            </thead>
                            <tbody>



                                @forelse ($borrowed_history as $_book)
                                    <tr class="bg-white border-b">
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                            {{$_book->book->name}}
                                        </th>
                                        <td class="px-6 py-4">
                                            {{$_book->user->name}}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{$_book->borrowed_date}}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{$_book->return_date}}
                                        </td>
                                    </tr>
                                @empty

                                @endforelse

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>

</x-app-layout>
