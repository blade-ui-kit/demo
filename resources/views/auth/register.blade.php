@extends('layouts.app')

@section('content')
    <div class="bg-gray-50 flex flex-col justify-center py-12 sm:px-6 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-md">
            <x-heroicon-o-globe class="mx-auto h-12 w-auto text-indigo-600"/>

            <h2 class="mt-6 text-center text-3xl leading-9 font-extrabold text-gray-900">
                Register a new account
            </h2>
            <p class="mt-2 text-center text-sm leading-5 text-gray-600 max-w">
                Or
                <a href="{{ route('login') }}" class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">
                    sign in to your account
                </a>
            </p>
        </div>

        <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
            <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
                <x-form :action="route('register')">
                    <div>
                        <x-label for="name" class="block text-sm font-medium leading-5 text-gray-700"/>

                        <div class="mt-1 rounded-md shadow-sm">
                            @php($borderColor = $errors->getBag('default')->has('name') ? 'border-red-500' : 'border-gray-300')
                            <x-input name="name" required class="appearance-none block w-full px-3 py-2 border {{ $borderColor }} border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5"/>
                        </div>

                        <x-error field="name" class="text-red-500 text-xs italic mt-4"/>
                    </div>

                    <div class="mt-6">
                        <x-label for="email" class="block text-sm font-medium leading-5 text-gray-700"/>

                        <div class="mt-1 rounded-md shadow-sm">
                            @php($borderColor = $errors->getBag('default')->has('email') ? 'border-red-500' : 'border-gray-300')
                            <x-input-email required class="appearance-none block w-full px-3 py-2 border {{ $borderColor }} border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5"/>
                        </div>

                        <x-error field="email" class="text-red-500 text-xs italic mt-4"/>
                    </div>

                    <div class="mt-6">
                        <x-label for="password" class="block text-sm font-medium leading-5 text-gray-700"/>

                        <div class="mt-1 rounded-md shadow-sm">
                            @php($borderColor = $errors->getBag('default')->has('password') ? 'border-red-500' : 'border-gray-300')
                            <x-input-password required class="appearance-none block w-full px-3 py-2 border {{ $borderColor }} rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5"/>
                        </div>

                        <x-error field="password" class="text-red-500 text-xs italic mt-4"/>
                    </div>

                    <div class="mt-6">
                        <x-label for="password_confirmation" class="block text-sm font-medium leading-5 text-gray-700"/>

                        <div class="mt-1 rounded-md shadow-sm">
                            @php($borderColor = $errors->getBag('default')->has('password_confirmation') ? 'border-red-500' : 'border-gray-300')
                            <x-input-password name="password_confirmation" required class="appearance-none block w-full px-3 py-2 border {{ $borderColor }} rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5"/>
                        </div>

                        <x-error field="password_confirmation" class="text-red-500 text-xs italic mt-4"/>
                    </div>

                    <div class="mt-6">
                        <span class="block w-full rounded-md shadow-sm">
                            <x-submit class="w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                                Register
                            </x-submit>
                        </span>
                    </div>
                </x-form>
            </div>
        </div>
    </div>
@endsection
