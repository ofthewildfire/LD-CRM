<x-main>
    <h1 class="text-white font-bold mb-2 text-2xl underline">Clients</h1>
    <div>
        <ul role="list" class="divide-y divide-white/5">
            @forelse($clients as $client)
                <li class="flex justify-between gap-x-6 py-5">
                    <div class="flex min-w-0 gap-x-4">
                        <div class="min-w-0 flex-auto">
                            <a href="/client/{{$client->id}}">
                            <p class="text-sm/6 font-semibold text-white">{{$client->name}}</p></a>
                            <p class="mt-1 truncate text-xs/5 text-gray-400"> {{$client->email}}</p>
                        </div>
                    </div>
                </li>
            @empty
                <p>No clients</p>
            @endforelse
        </ul>
    </div>
    <div>
        <a class="bg-green-400 px-4 rounded-xl block mb-4 font-bold py-1" href="/client/create">Create a client record</a>
    </div>
<div>
    {{$clients->links()}}
</div>
</x-main>
