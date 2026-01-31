<x-main>
    <section >
        <h1 class="text-2xl text-white font-bold">{{$client->name}} Details</h1>
        <p class="text-white">{{$client->email}}</p>
        <p class="text-white">{{$client->phone}}</p>
        <p class="text-white">{{$client->company}}</p>
        <br>
    </section>
    <a class="px-1 py-2 text-blue-600 font-bold" href="/clients">Go Back</a>
    <a href="/client/{{$client->id}}/edit">Edit  {{$client->name}} </a>
</x-main>
