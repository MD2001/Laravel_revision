<x-layout>
    <x-slot:TitleOfPage> Log In </x-slot:TitleOfPage>
    <x-slot:nameOfPage>
        Log In
    </x-slot:nameOfPage>
    <form method="POST" action="/login">
        @csrf {{-- let laravel to let me in and know that i am good guy  --}}
        <div class="space-y-5">

            <div class="border-b border-gray-900/10 pb-5">
                {{-- E-mail --}}
                <div class="mt-5 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <x-form_lable for="E-mail">E-mail</x-form_lable>
                        <div class="mt-2">
                            <x-form_input required name="E-mail" id="E-mail" type="email" />
                            <x-form_error name="E-mail" />
                        </div>
                    </div>
                </div>
                {{-- password --}}
                <div class="mt-5 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <x-form_lable for="Password">Password</x-form_lable>
                        <div class="mt-2">
                            <x-form_input required name="Password" id="Password" type="password" />
                            <x-form_error name="Password" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <div class="flex mt-1 flex mr-12 items-center justify-end gap-x-6">
            <a href="/" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
            <x-form_submit>Log in</x-form_submit>
        </div>

    </form>
</x-layout>
