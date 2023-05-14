<x-app-layout>
    <div class="flex gap-2">
        <x-userSideBar>
        </x-userSideBar>
        <div class="p-5 flex-col text-black w-full">
            <h1 class="text-3xl font-semibold text-center">
                Books Borrowed List
            </h1>


            @if (session()->has('message'))
            <div class="alert alert-success shadow-lg">
                <div>
                  <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                  <span>{{session()->get('message')}}</span>
                </div>
              </div>
            @endif

            <div class="relative overflow-x-auto p-5">
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
                                published date
                            </th>
                            <th scope="col" class="px-6 py-3">
                               Borrowed Date
                            </th>
                            <th>
                                Return Date
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($books as $book_issuing)
                            <tr class="bg-white border-b">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                    <img src="{{ asset('storage/image/' .  $book_issuing->book->image->url) }}" class="h-20" alt=""
                                        srcset="">
                                </th>
                                <td class="px-6 py-4">
                                    {{ $book_issuing->book->name}}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $book_issuing->book->description}}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $book_issuing->book->published_year}}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $book_issuing->borrowed_date}}
                                </td>
                                <td>
                                    {{$book_issuing->return_date}}
                                </td>
                            </tr>
                        @empty

                            <tr>
                                <td colspan="6">
                                    <div class="alert alert-warning shadow-lg mt-2">
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="stroke-current flex-shrink-0 h-6 w-6" fill="none"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                            </svg>
                                            <span>No Borrew Item</span>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</x-app-layout>
