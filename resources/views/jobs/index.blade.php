<x-layout>
    <x-slot:TitleOfPage> jobs </x-slot:TitleOfPage>
    <x-slot:nameOfPage>
        jobs Page
    </x-slot:nameOfPage>

    {{-- {{dd(count($jobs)) }} --}}
    @if (count($jobs) == 0)
        <strong>{{ 'there is no job avilabe now' }}</strong>
    @else
        <div class="space-y-4">
            @foreach ($jobs as $job)
                <a href="/jobs/{{ $job['id'] }}" class="block px-4 py-6 border border-gray-200 rounded-lg bg-gray-300">

                    <div class="text-blue-500 font-bold text-sm">
                        {{ $job->employer ? $job->employer->title : 'no employer' }} </div>

                    <div>
                        <strong>{{ $job['Title'] }}</strong> : Salary is {{ $job['Salary'] }}
                    </div>
                </a>
            @endforeach
        </div>
        <div>{{ $jobs->links() }}</div>
    @endif
</x-layout>
