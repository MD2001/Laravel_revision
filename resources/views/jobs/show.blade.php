<x-layout>
    <x-slot:TitleOfPage> Job </x-slot:TitleOfPage>
    <x-slot:nameOfPage>
        Job Page
    </x-slot:nameOfPage> 
   <h1 class="font-bold text-lg">{{$job['Title']}}</h1>
   <p>This job pay Salary a year : {{$job['Salary']}}</p>

   {{-- <button type="button" class="relative rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
    <span class="absolute -inset-1.5"></span>
    <span class="sr-only">View notifications</span>
    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
      <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
    </svg>
  </button> --}}

    <div class=" relative  mt-5 ">
        <a href="/jobs/{{$job->id}}/edit" class=" relative bg-gray-300 text-sm font-medium px-3 py-2 rounded-md text-black hover:text-white hover:bg-gray-500 sm-text focus:outline-none"> Edite 
         </a>
    </div>

</x-layout>