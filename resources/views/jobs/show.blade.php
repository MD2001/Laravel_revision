<x-layout>
    <x-slot:TitleOfPage> Job </x-slot:TitleOfPage>
    <x-slot:nameOfPage>
        Job Page
    </x-slot:nameOfPage> 
   <h1 class="font-bold text-lg">{{$job['Title']}}</h1>
   <p>This job pay Salary a year : {{$job['Salary']}}</p>

    @can('edite-job',$job)
    <div class=" relative  mt-5 ">
        <a href="/jobs/{{$job->id}}/edit" class=" relative bg-gray-300 text-sm font-medium px-3 py-2 rounded-md text-black hover:text-white hover:bg-gray-500 sm-text focus:outline-none"> Edite 
         </a>
    </div>        
    @endcan

</x-layout>