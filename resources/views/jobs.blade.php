<x-layout>
    <x-slot:heading>
        Jobs Page
    </x-slot:heading>
    <h1>Hello from Jobs  Page</h1>
    <ul>
        @foreach($jobs as $job)
            <a href="/jobs/{{ $job['id'] }}" class="text-blue-500 hover:underline">
                <li><strong>{{ $job['title'] }}</strong></li>
            </a>
        @endforeach
    </ul>

</x-layout>
