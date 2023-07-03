<x-layout>
    <x-slot:title>
        Flight Page
    </x-slot>
    <div class="container-fluid">
        <h1>Last Flight</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Destination</th>
                    <th scope="col">Last Flight</th>
                    <th scope="col">Arrived At</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($destinations as $destination)
                <tr>
                    <td>{{ $destination->name; }}</td>
                    <td>{{ $destination->flight_name; }}</td>
                    <td>{{ $destination->arrived_at; }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
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
