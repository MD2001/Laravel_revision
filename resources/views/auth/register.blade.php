<x-layout>
    <x-slot:TitleOfPage> Register </x-slot:TitleOfPage>
    <x-slot:nameOfPage>
        Register
    </x-slot:nameOfPage>
    <form method="POST" action="/register">
        @csrf {{-- let laravel to let me in and know that i am good guy  --}}
        <div class="space-y-5">
            <div class="border-b border-gray-900/10 pb-5">
                {{-- first name --}}
                <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <x-form_lable for="first_name">First_Name</x-form_lable>
                        <div class="mt-2">
                            <x-form_input required name="first_name" id="first_name" />
                            <x-form_error name="first_name" />
                        </div>
                    </div>
                </div>
                {{-- last name --}}
                <div class="mt-5 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <x-form_lable for="last_name">Last_Name</x-form_lable>
                        <div class="mt-2">
                            <x-form_input required name="last_name" id="last_name" />
                            <x-form_error name="last_name" />
                        </div>
                    </div>
                </div>
                {{-- E-mail --}}
                <div class="mt-5 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <x-form_lable for="email">email</x-form_lable>
                        <div class="mt-2">
                            <x-form_input required name="email" id="email" type="email" />
                            <x-form_error name="email" />
                        </div>
                    </div>
                </div>
                {{-- password --}}
                <div class="mt-5 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <x-form_lable for="password">password</x-form_lable>
                        <div class="mt-2">
                            <x-form_input required name="password" id="password" type="password" />
                            <x-form_error name="password" />
                        </div>
                    </div>
                </div>
                {{-- verfie password --}}
                <div class="mt-5 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <x-form_lable for="password_confirmation">Password Confirm</x-form_lable>
                        <div class="mt-2">
                            <x-form_input required name="password_confirmation" id="password_confirmation"
                                type="password" />
                            <x-form_error name="password_confirmation" />
                        </div>
                    </div>
                </div>

            </div>
        </div>
        </div>

        <div class="flex mt-1 flex mr-12 items-center justify-end gap-x-6">
            <a href="/" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
            <x-form_submit>Register</x-form_submit>
        </div>

    </form>
</x-layout>
