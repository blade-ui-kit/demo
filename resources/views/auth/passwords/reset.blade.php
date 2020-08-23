<x-layouts.auth :title="__('Reset Password')">
    <x-form :action="route('password.update')">
        <input type="hidden" name="token" value="{{ $token }}">

        <div>
            <x-label for="email" class="block text-sm font-medium leading-5 text-gray-700"/>

            <div class="mt-1 rounded-md shadow-sm">
                @php($borderColor = $errors->getBag('default')->has('email') ? 'border-red-500' : 'border-gray-300')
                <x-email required class="appearance-none block w-full px-3 py-2 border {{ $borderColor }} border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5"/>
            </div>

            <x-error field="email" class="text-red-500 text-xs italic mt-4"/>
        </div>

        <div class="mt-6">
            <x-label for="password" class="block text-sm font-medium leading-5 text-gray-700"/>

            <div class="mt-1 rounded-md shadow-sm">
                @php($borderColor = $errors->getBag('default')->has('password') ? 'border-red-500' : 'border-gray-300')
                <x-password required class="appearance-none block w-full px-3 py-2 border {{ $borderColor }} rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5"/>
            </div>

            <x-error field="password" class="text-red-500 text-xs italic mt-4"/>
        </div>

        <div class="mt-6">
            <x-label for="password_confirmation" class="block text-sm font-medium leading-5 text-gray-700"/>

            <div class="mt-1 rounded-md shadow-sm">
                <x-password name="password_confirmation" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5"/>
            </div>
        </div>

        <div class="mt-6">
            <span class="block w-full rounded-md shadow-sm">
                <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                    {{ __('Reset Password') }}
                </button>
            </span>
        </div>
    </x-form>
</x-layouts.auth>
