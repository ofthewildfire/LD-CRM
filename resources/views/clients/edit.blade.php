<x-main>
    <h1 class=" text-white font-bold mb-2 text-2xl underline">Edit  {{$client->name}} </h1>
    <main class="m-5">
        <form method="post" action="/client/{{$client->id}}/update" >
            @csrf
            @method("patch")
            <div class="space-y-12">
                <h2 class="text-base/7 font-semibold text-white">Edit {{$client->name}} Information</h2>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-3">
                        <label for="name" class="block text-sm/6 font-medium text-white">Client Name</label>
                        <div class="mt-2">
                            <input id="name" type="text" value="{{$client->name}}" name="name" required autocomplete="given-name" class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6" />
                            <x-errors name="name"> </x-errors>
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="email" class="block text-sm/6 font-medium text-white">Email</label>
                        <div class="mt-2">
                            <input id="email" type="email" value="{{$client->email}}" name="email" autocomplete="family-name" class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6" />
                            <x-errors name="email"></x-errors>
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="phone" class="block text-sm/6 font-medium text-white">Phone</label>
                        <div class="mt-2">
                            <input id="phone" type="text" name="phone"  value="{{$client->phone}}" class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6" />
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="company" class="block text-sm/6 font-medium text-white">Company</label>
                        <div class="mt-2 grid grid-cols-1">
                            <select id="company" name="company" autocomplete="country-name" class="col-start-1 row-start-1 w-full appearance-none rounded-md bg-white/5 py-1.5 pr-8 pl-3 text-base text-white outline-1 -outline-offset-1 outline-white/10 *:bg-gray-800 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6">
                                <option>Company -  1</option>
                                <option>Company -  2</option>
                                <option>Company -  3</option>
                            </select>
                            <svg viewBox="0 0 16 16" fill="currentColor" data-slot="icon" aria-hidden="true" class="pointer-events-none col-start-1 row-start-1 mr-2 size-5 self-center justify-self-end text-gray-400 sm:size-4">
                                <path d="M4.22 6.22a.75.75 0 0 1 1.06 0L8 8.94l2.72-2.72a.75.75 0 1 1 1.06 1.06l-3.25 3.25a.75.75 0 0 1-1.06 0L4.22 7.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" fill-rule="evenodd" />
                            </svg>
                        </div>
                    </div>
                </div>
                <br>
                <div class="mt-6 flex items-center justify-end gap-x-6">
                    <button type="button" class="text-sm/6 font-semibold text-white">Cancel</button>
                    <button form="delete_client" class="rounded-md bg-red-500 px-3 py-2 text-sm font-semibold text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500"> Delete {{$client->name}} </button>
                    <button type="submit" class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500"> Edit {{$client->name}} </button>
                </div>
            </div>
        </form>
        <form id="delete_client" method="post" action="/client/{{$client->id}}/destroy">
            @csrf
            @method("delete")
        </form>
    </main>
</x-main>
