<x-layout>
    <x-slot:TitleOfPage> Create Job </x-slot:TitleOfPage>
    <x-slot:nameOfPage>
        Create
    </x-slot:nameOfPage>    
<form method="POST" action="/jobs">
    @csrf  {{-- let laravel to let me in and know that i am good guy  --}}
    <div class="space-y-12">
      <div class="border-b border-gray-900/10 pb-12">
        <h2 class="text-base font-semibold leading-7 text-gray-900">Create new job</h2>
        <p class="mt-1 text-sm leading-6 text-gray-600">we need some iformation about this job</p>
  
        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
          <div class="sm:col-span-4">
            <label for="Title" class="block text-sm font-medium leading-6 text-gray-900">Title</label>
            <div class="mt-2">
              <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                
                <input type="text" name="Title" id="Title" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Programer"required>
              </div>
              @error('Title')
                <p class="text-xs text-red-500 font-semibold mt-1" > {{$message}}</p>
              @enderror
            </div>
          </div>
        </div>

        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
            <div class="sm:col-span-4">
              <label for="Salary" class="block text-sm font-medium leading-6 text-gray-900">Salary</label>
              <div class="mt-2">
                <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                  
                  <input type="text" name="Salary" id="Salary" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="50,000$ per year" required>
                </div>
                @error('Salary')
                <p class="text-xs text-red-500 font-semibold mt-1" > {{$message}}</p>
              @enderror
              </div>
            </div>
          </div>
                                           {{-- error section --}}
          {{-- <div class="mt-10">
            @if($errors->any()) 
            <ul> @foreach($errors->all() as $error) 
              <li class="text-red-500 italic">{{ $error }}</li> 
              @endforeach 
            </ul>
             @endif
            </div> --}}
          {{-- ---------------------------------------------------------- --}}
      </div>
      </div>
    </div>
  
    <div class="mt-6 flex items-center justify-end gap-x-6">
      <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
      <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
    </div>
  </form>



</x-layout>