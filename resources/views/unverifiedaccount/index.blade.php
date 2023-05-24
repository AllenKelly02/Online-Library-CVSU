<x-app-layout>
    <div class="container mx-auto">
        <div class="flex flex-col space-y-2 p-4">
            {{-- @foreach ($accounts as $account) --}}
                {{-- <div class="w-full flex justify-between items-center py-2 border-b border-gray-300">
                    <div class="flex  space-x-3">
                        <h1 class="font-medium text-lg px-4 border-r border-gray-300">{{$account->first_name . ' ' . $account->middle_name . ' ' . $account->last_name}}</h1>
                        <h2 class="text-base px-4 border-r border-gray-300">{{$account->student_id}}</h2>
                        <h3 class="text-base">{{$account->email}}</h3>
                    </div>

                    <div class="flex space-x-4 items-center">
                        <form method="GET" action="account/accept/{{$account->id}}">
                            @csrf
                            <button type="submit" class="py-2 px-4 rounded bg-blue-500 text-white">Accept</button>
                        </form>

                        <form method="GET" action="account/reject/{{$account->id}}">
                            @csrf
                            <button type="submit" class="py-2 px-4 rounded bg-red-500 text-white">Reject</button>
                        </form>
                    </div>
                </div> --}}

                <div class="w-full flex flex-col">
                    <div class="w-full overflow-x-auto">
                        <table class="w-full border-collapse border border-gray-400">
                            <thead>
                                <tr>
                                    <th class="poppins text-sm border border-gray-400 px-4 py-2 text-center">NAME</th>
                                    <th class="poppins text-sm border border-gray-400 px-4 py-2 text-center">STUDENT ID</th>
                                    <th class="poppins text-sm border border-gray-400 px-4 py-2 text-center">EMAIL</th>
                                    <th class="poppins text-sm border border-gray-400 px-4 py-2 text-center">ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($accounts->count())
                                    @foreach($accounts as $account)
                                    <tr>
                                        <td class="poppins text-sm border border-gray-400 px-4 py-2 text-center">{{$account->first_name . ' ' . $account->middle_name . ' ' . $account->last_name}}</td>
                                        <td class="poppins text-sm border border-gray-400 px-4 py-2 text-center">{{$account->student_id}}</td>
                                        <td class="poppins text-sm border border-gray-400 px-4 py-2 text-center">{{$account->email}}</td>
                                        <td class="poppins text-sm border px-4 py-2 flex justify-center items-center">
                                            <div class="flex space-x-4 items-center">
                                                <form method="POST" action="account/accept/{{$account->id}}">
                                                    @csrf
                                                    <button type="submit" >Accept</button>
                                                </form>

                                                <form method="GET" action="account/reject/{{$account->id}}">
                                                    @csrf
                                                    <button type="submit" class="py-2 px-4 rounded bg-red-500 text-white text-sm">Reject</button>
                                                </form>
                                            </div>
                                        </td>

                                    </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            {{-- @endforeach --}}
        </div>
    </div>
</x-app-layout>
