@extends('layouts.base')

@section('body')
    <div class="min-h-screen bg-gray-50 flex flex-col justify-center py-12 sm:px-6 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-md">
            <x-heroicon-o-globe class="mx-auto h-12 w-auto text-indigo-600"/>

            <h2 class="mt-6 text-center text-3xl leading-9 font-extrabold text-gray-900">
                {{ $title }}
            </h2>

            @hasSection('description')
                <p class="mt-2 text-center text-sm leading-5 text-gray-600 max-w">
                    @yield('description')
                </p>
            @endif

            <x-alert type="status" class="rounded-md bg-yellow-50 text-sm leading-5 font-medium text-yellow-800 p-4 mt-8">
                <x-heroicon-o-exclamation-circle class="h-5 w-5 inline-block mr-1"/>
                {{ $component->message() }}
            </x-alert>
        </div>

        <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
            <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
                @yield('content')
            </div>
        </div>
    </div>
@endsection
