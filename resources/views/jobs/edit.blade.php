<x-layout>
    <x-slot:TitleOfPage> Create Job </x-slot:TitleOfPage>
    <x-slot:nameOfPage>
        Edite :{{$job->Title}}
    </x-slot:nameOfPage>    
<form method="POST" action="/jobs/{{$job->id}}">
  
    @csrf  {{-- let laravel to let me in and know that i am good guy  --}}

    @method('PATCH') {{-- this tell the frame work that is patch not post but the browser support only the post or the get--}}

    <div class="space-y-12">
      <div class="border-b border-gray-900/10 pb-12">
 
        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
          <div class="sm:col-span-4">
            <label for="Title" class="block text-sm font-medium leading-6 text-gray-900">Title</label>
            <div class="mt-2">
              <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                
                <input value="{{$job->Title}}" type="text" name="Title" id="Title" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 text-bold placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Programer"required>
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
                  
                  <input value="{{$job->Salary}}" type="text" name="Salary" id="Salary" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="50,000$ per year" required>
                </div>
                @error('Salary')
                <p class="text-xs text-red-500 font-semibold mt-1" > {{$message}}</p>
              @enderror
              </div>
            </div>
          </div>
      </div>
      </div>
    </div>
  
    <div class="mt-3 flex items-center justify-end gap-x-6 px-10 mr-10">
      <a href="/jobs/{{$job->id}}" type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
      <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update</button>
    </div>
  </form>



</x-layout>