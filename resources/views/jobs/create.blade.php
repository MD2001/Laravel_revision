<x-layout>
    <x-slot:TitleOfPage> Create Job </x-slot:TitleOfPage>
    <x-slot:nameOfPage>
        Create
    </x-slot:nameOfPage>
    <form method="POST" action="/jobs">
        @csrf {{-- let laravel to let me in and know that i am good guy  --}}
        <div class="space-y-12">

            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base font-semibold leading-7 text-gray-900">Create new job</h2>
                <p class="mt-1 text-sm leading-6 text-gray-600">we need some iformation about this job</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <x-form_lable for="Title">Title</x-form_lable>
                        <div class="mt-2">
                            <x-form_input name="Title" id="Title" placeholder="Programer" />
                                <x-form_error name="Title" />
                        </div>
                    </div>
                </div>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <x-form_lable for="Salary">Salary</x-form_lable>
                        <div class="mt-2">
                            <x-form_input name="Salary" id="Salary" placeholder="Programer" />
                                <x-form_error name="Salary" />
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        </div>

        <div class="flex mt-6 flex mr-12 items-center justify-end gap-x-6">
            <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
            <x-form_submit>Save</x-form_submit>
        </div>

    </form>
</x-layout>
