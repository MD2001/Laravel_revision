<x-layout>
    <x-slot:TitleOfPage> jobs  </x-slot:TitleOfPage>
    <x-slot:nameOfPage>
        jobs Page
    </x-slot:nameOfPage>
    <x-slot:ContanteOfPage>{{$name}} , welcome to Home jobs page please know more about as</x-slot:ContanteOfPage>

    <ul>
    @foreach ($jobs as $job )
    <a href="/jobs/{{$job['id']}}">
    <li><strong>{{$job["Title"]}}</strong> : Salary is {{$job['Salary']}}</li>
    </a>
    @endforeach
    </ul>
</x-layout>