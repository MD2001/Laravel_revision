<x-layout>
    <x-slot:TitleOfPage> Job </x-slot:TitleOfPage>
    <x-slot:nameOfPage>
        Job Page
    </x-slot:nameOfPage>    
   <h1 class="font-bold text-lg">{{$job['Title']}}</h1>
   <p>This job pay Salary a year : {{$job['Salary']}}</p>

</x-layout>