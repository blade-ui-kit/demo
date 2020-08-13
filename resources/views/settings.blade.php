<x-layouts.app :title="__('Settings')">
    <div class="bg-gray-50 py-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <x-alert class="rounded-md bg-green-100 text-sm leading-5 font-medium text-green-700 p-4 mb-10">
                <x-heroicon-o-check-circle class="h-5 w-5 inline-block mr-1"/>
                {{ $component->message() }}
            </x-alert>

            <div class="mt-10 sm:mt-0">
                <div class="md:grid md:grid-cols-3 md:gap-6">
                    <div class="md:col-span-1">
                        <div class="px-4 sm:px-0">
                            <h3 class="text-lg font-medium leading-6 text-gray-900">Personal Information</h3>
                            <p class="mt-1 text-sm leading-5 text-gray-600">
                                Provide your birthday so we can send you a present.
                            </p>
                        </div>
                    </div>
                    <div class="mt-5 md:mt-0 md:col-span-2">
                        <x-form :action="route('settings')" method="PUT">
                            <div class="shadow overflow-hidden sm:rounded-md">
                                <div class="px-4 py-5 bg-white sm:p-6">
                                    <div class="grid grid-cols-6 gap-6">
                                        <div class="col-span-6 sm:col-span-3">
                                            <x-label for="first_name" class="block text-sm font-medium leading-5 text-gray-700"/>
                                            <x-input name="first_name" placeholder="John" class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                        </div>

                                        <div class="col-span-6 sm:col-span-3">
                                            <x-label for="last_name" class="block text-sm font-medium leading-5 text-gray-700"/>
                                            <x-input name="last_name" placeholder="Doe" class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                        </div>

                                        <div class="col-span-6 sm:col-span-4">
                                            <x-label for="email_address" class="block text-sm font-medium leading-5 text-gray-700"/>
                                            <x-input name="email_address" placeholder="john@example.com" class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                        </div>

                                        <div class="col-span-6 sm:col-span-3">
                                            <x-label for="birthday" class="block text-sm font-medium leading-5 text-gray-700"/>
                                            <x-pikaday name="birthday" class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                        </div>

                                        <div class="col-span-6 sm:col-span-3">
                                            <x-label for="profile_color" class="block text-sm font-medium leading-5 text-gray-700"/>
                                            <x-color-picker name="profile_color" value="#FF0000" class="mt-1" />
                                        </div>
                                    </div>

                                    <div class="mt-6">
                                        <x-label for="about" class="block text-sm font-medium leading-5 text-gray-700 mb-2"/>
                                        <div class="rounded-md shadow-sm">
                                            <x-easy-mde name="about" class="form-textarea mt-1 block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5"/>
                                        </div>
                                        <p class="mt-4 text-sm text-gray-500">
                                            Brief description for your profile. Markdown can be used.
                                        </p>
                                    </div>
                                </div>
                                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                    <button type="submit" class="py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 shadow-sm hover:bg-indigo-500 focus:outline-none focus:shadow-outline-blue active:bg-indigo-600 transition duration-150 ease-in-out">
                                        Save
                                    </button>
                                </div>
                            </div>
                        </x-form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>
