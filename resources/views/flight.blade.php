<x-layout>
    <x-slot:title>
        Flight Page
    </x-slot>
    <div class="container-fluid">
        <h1>ALL FLghts</h1>
        @foreach ($flights as $flight)
        <span>
        {{ $flight->name; }}
        </span>
        @endforeach
        <h1>10 flight</h1>
        @foreach ($flight::orderBy('name')->take(10)->get() as $flight)
        <span>
        {{ $flight->name; }}
        </span>
        @endforeach
    </div>
</x-layout>
