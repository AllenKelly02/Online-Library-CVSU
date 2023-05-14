<x-app-layout>
    <div class="flex space-x-5">
        <x-userSideBar>

        </x-userSideBar>

        <div class="p-2 w-5/6 text-black flex flex-col space-y-5">
            <h1 class="w-full text-3xl font-bold text-center">
                Books
            </h1>


            <div class="flex items-center justify-center">
                <div class="flex-col items-center justify-center ">
                    <div class="flex">
                        <div
                            class="flex lg:flex-row flex-col p-4 space-x-4 space-y-4 max-w-7xl justify-around w-full h-auto lg:h-60 items-center ">
                            <div
                                class="border rounded h-40 w-[100%] md:w-72 flex items-center justify-center ml-4 lg:px-0 px-6 bg-white shadow-xl md:mt-4">
                                <div class="flex-col space-y-2 items-center px-0 md:px-6">
                                    <div class="flex items-center justify-between space-x-6">
                                        <div class="flex items-center space-x-1 ">
                                            <div class="text-lg font-medium text-violet-500">
                                                <ion-icon name="chatbubble-ellipses-outline"></ion-icon>
                                                <img src="{{ asset('images/icons/book-line.png') }}" class="h-4"
                                                    alt="" srcset="">
                                            </div>
                                            <div class="text-sm font-medium text-gray-500">Total Books</div>
                                        </div>
                                    </div>
                                    <div class="text-3xl font-bold">{{ $totalBooks }}</div>
                                    {{-- <div class="font-bold text-red-500 flex items-center space-x-1">
                                        <div class="text-xl">
                                            <ion-icon name="trending-down-outline"></ion-icon>
                                        </div>
                                        <div class="text-sm">2.5% less</div>
                                    </div> --}}
                                </div>
                            </div>
                            <a href="{{ route('user.books.borrowList') }}">
                                <div
                                    class="border rounded h-40 w-[100%] md:w-72 flex items-center justify-center ml-4 lg:px-0 px-6 bg-white shadow-xl">
                                    <div class="flex-col space-y-2 items-center px-0 md:px-6">
                                        <div class="flex items-center justify-between space-x-6">
                                            <div class="flex items-center space-x-1 ">
                                                <div class="text-lg font-medium text-violet-500">
                                                    <ion-icon name="briefcase-outline"></ion-icon>
                                                </div>
                                                <div class="text-sm font-medium text-gray-500">Total Borrowed Books
                                                </div>
                                            </div>
                                            {{-- <div
                                            class="text-xs bg-gray-200 px-2 py-0.5 rounded-2xl text-gray-400 font-medium">
                                            30 Days</div> --}}
                                        </div>
                                        <div class="text-3xl font-bold">{{ $totalBorrowedBooks }}</div>
                                        {{-- <div class="font-bold text-green-500 flex items-center space-x-1">
                                        <div class="text-xl">
                                            <ion-icon name="trending-up-outline"></ion-icon>
                                        </div>
                                        <div class="text-sm">4.9% more</div>
                                    </div> --}}
                                    </div>
                                </div>
                            </a>

                            <a href="{{route('user.books.history')}}">
                                <div
                                    class="border rounded h-40 w-[100%] md:w-72 flex items-center justify-center ml-4 lg:px-0 px-6 bg-white shadow-xl">
                                    <div class="flex-col space-y-2 items-center px-0 md:px-6">
                                        <div class="flex items-center justify-between space-x-6">
                                            <div class="flex items-center space-x-1 ">
                                                <div class="text-lg font-medium text-violet-500">
                                                    <ion-icon name="document-outline"></ion-icon>
                                                </div>
                                                <div class="text-sm font-medium text-gray-500">Borrowed History</div>
                                            </div>
                                            {{-- <div
                                            class="text-xs bg-gray-200 px-2 py-0.5 rounded-2xl text-gray-400 font-medium">
                                            30 Days</div> --}}
                                        </div>
                                        <div class="text-3xl font-bold">{{ $totalBorrowedHistory }}</div>
                                        {{-- <div class="font-bold text-green-500 flex items-center space-x-1">
                                        <div class="text-xl">
                                            <ion-icon name="trending-up-outline"></ion-icon>
                                        </div>
                                        <div class="text-sm">3.7% more</div>
                                    </div> --}}
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

            </div>


            <div class="relative overflow-x-auto h-[26rem] drop-shadow-lg">
                <table class="w-full text-sm text-left text-gray-500">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                image
                            </th>
                            <th scope="col" class="px-6 py-3">
                                name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                description
                            </th>
                            <th scope="col" class="px-6 py-3">
                                published Date
                            </th>
                            {{-- <th scope="col" class="px-6 py-3">
                                Status
                            </th> --}}
                            <th scope="col" class="px-6 py-3">
                                action
                            </th>
                        </tr>
                    </thead>
                    <tbody>

                        @forelse ($books as $book)
                            <tr class="bg-white border-b">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                    <img src="{{ asset('storage/image/' . $book->image->url) }}" class="h-10"
                                        alt="" srcset="">
                                </th>
                                <td class="px-6 py-4">
                                    {{ $book->name }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $book->description }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $book->published_year }}
                                </td>
                                {{-- <td class="px-6 py-4">
                                    {{ $book->is_borrowed ? 'Borrowed' : 'available' }}
                                </td> --}}
                                <td class="px-6 py-4">
                                    <a href="{{ route('user.books.show', ['book' => $book->id]) }}">
                                        <button class="btn btn-accent">View</button>
                                    </a>
                                </td>
                            </tr>

                        @empty
                        @endforelse

                    </tbody>
                </table>
            </div>

        </div>
    </div>
</x-app-layout>
