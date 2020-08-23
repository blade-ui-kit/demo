<x-layouts.app :title="__('Dashboard')">
    <div class="bg-gray-50 py-16">
        <div class="text-center mb-10">
            <h2 class="text-2xl font-bold leading-tight text-gray-900 mb-6">
                Countdown to your next trip
            </h2>

            <x-countdown :expires="new Carbon\Carbon('2021-05-21')" class="max-w-xl mx-auto grid grid-cols-4 gap-10 px-4 sm:px-6 text-xs text-gray-500 leading-5 text-center">
                <div>
                    <span class="days text-lg md:text-3xl font-noway-medium" x-text="timer.days">
                        {{ $component->days() }}
                    </span><br>
                    <span class="text-gray uppercase">Days</span>
                </div>
                <div>
                    <span class="hours text-lg md:text-3xl font-noway-medium" x-text="timer.hours">
                        {{ $component->hours() }}
                    </span><br>
                    <span class="text-gray uppercase">Hours</span>
                </div>
                <div>
                    <span class="minutes text-lg md:text-3xl font-noway-medium" x-text="timer.minutes">
                        {{ $component->minutes() }}
                    </span><br>
                    <span class="text-gray uppercase">Minutes</span>
                </div>
                <div>
                    <span class="seconds text-lg md:text-3xl font-noway-medium" x-text="timer.seconds">
                        {{ $component->seconds() }}
                    </span><br>
                    <span class="text-gray uppercase">Seconds</span>
                </div>
            </x-countdown>
        </div>

        <main>
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-8">
                <div class="sm:grid sm:grid-cols-2 sm:gap-10">
                    <div>
                        <h2 class="text-2xl font-bold leading-tight text-gray-900">
                            Your Destinations
                        </h2>
                        <div class="flex flex-col mt-6">
                            <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                                <div class="align-middle inline-block min-w-full shadow overflow-hidden rounded-lg border-b border-gray-200">
                                    <table class="min-w-full">
                                        <tbody>
                                            <tr class="bg-white">
                                                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 font-medium text-gray-900">
                                                    Berlin
                                                </td>
                                                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                                    Germany
                                                </td>
                                                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                                    <x-carbon :date="new Carbon\Carbon('2021-05-21')" human />
                                                </td>
                                                <td class="px-6 py-4 whitespace-no-wrap text-right text-sm leading-5 font-medium">
                                                    <a href="#" class="text-indigo-600 hover:text-indigo-900">
                                                        <x-heroicon-o-trash class="inline h-5 w-5" />
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr class="bg-gray-50">
                                                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 font-medium text-gray-900">
                                                    Barcelona
                                                </td>
                                                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                                    Spain
                                                </td>
                                                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                                    <x-carbon :date="new Carbon\Carbon('2021-06-14')" human />
                                                </td>
                                                <td class="px-6 py-4 whitespace-no-wrap text-right text-sm leading-5 font-medium">
                                                    <a href="#" class="text-indigo-600 hover:text-indigo-900">
                                                        <x-heroicon-o-trash class="inline h-5 w-5" />
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr class="bg-white">
                                                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 font-medium text-gray-900">
                                                    Sydney
                                                </td>
                                                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                                    Australia
                                                </td>
                                                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                                    <x-carbon :date="new Carbon\Carbon('2021-07-22')" human />
                                                </td>
                                                <td class="px-6 py-4 whitespace-no-wrap text-right text-sm leading-5 font-medium">
                                                    <a href="#" class="text-indigo-600 hover:text-indigo-900">
                                                        <x-heroicon-o-trash class="inline h-5 w-5" />
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr class="bg-gray-50">
                                                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 font-medium text-gray-900">
                                                    Los Angeles
                                                </td>
                                                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                                    United States
                                                </td>
                                                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                                    <x-carbon :date="new Carbon\Carbon('2021-09-10')" human />
                                                </td>
                                                <td class="px-6 py-4 whitespace-no-wrap text-right text-sm leading-5 font-medium">
                                                    <a href="#" class="text-indigo-600 hover:text-indigo-900">
                                                        <x-heroicon-o-trash class="inline h-5 w-5" />
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr class="bg-white">
                                                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 font-medium text-gray-900">
                                                    Paris
                                                </td>
                                                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                                    France
                                                </td>
                                                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                                    <x-carbon :date="new Carbon\Carbon('2021-10-25')" human />
                                                </td>
                                                <td class="px-6 py-4 whitespace-no-wrap text-right text-sm leading-5 font-medium">
                                                    <a href="#" class="text-indigo-600 hover:text-indigo-900">
                                                        <x-heroicon-o-trash class="inline h-5 w-5" />
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-6 sm:mt-0">
                        <h2 class="text-2xl font-bold leading-tight text-gray-900">
                            Popular Destinations
                        </h2>

                        <div class="flex flex-col mt-6">
                            <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                                <div class="align-middle inline-block min-w-full shadow overflow-hidden rounded-lg border-b border-gray-200">
                                    <table class="min-w-full">
                                        <tbody>
                                            <tr class="bg-white">
                                                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 font-medium text-gray-900">
                                                    London
                                                </td>
                                                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                                    United Kingdom
                                                </td>
                                                <td class="px-6 py-4 whitespace-no-wrap text-right text-sm leading-5 font-medium">
                                                    <a href="#" class="text-indigo-600 hover:text-indigo-900">
                                                        <x-heroicon-o-plus class="inline h-5 w-5" />
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr class="bg-gray-50">
                                                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 font-medium text-gray-900">
                                                    New York
                                                </td>
                                                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                                    United States
                                                </td>
                                                <td class="px-6 py-4 whitespace-no-wrap text-right text-sm leading-5 font-medium">
                                                    <a href="#" class="text-indigo-600 hover:text-indigo-900">
                                                        <x-heroicon-o-plus class="inline h-5 w-5" />
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr class="bg-white">
                                                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 font-medium text-gray-900">
                                                    Tokio
                                                </td>
                                                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                                    Japan
                                                </td>
                                                <td class="px-6 py-4 whitespace-no-wrap text-right text-sm leading-5 font-medium">
                                                    <a href="#" class="text-indigo-600 hover:text-indigo-900">
                                                        <x-heroicon-o-plus class="inline h-5 w-5" />
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr class="bg-gray-50">
                                                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 font-medium text-gray-900">
                                                    Los Angeles
                                                </td>
                                                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                                    United States
                                                </td>
                                                <td class="px-6 py-4 whitespace-no-wrap text-right text-sm leading-5 font-medium">
                                                    <a href="#" class="text-indigo-600 hover:text-indigo-900">
                                                        <x-heroicon-o-plus class="inline h-5 w-5" />
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr class="bg-white">
                                                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 font-medium text-gray-900">
                                                    Rome
                                                </td>
                                                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                                    Italy
                                                </td>
                                                <td class="px-6 py-4 whitespace-no-wrap text-right text-sm leading-5 font-medium">
                                                    <a href="#" class="text-indigo-600 hover:text-indigo-900">
                                                        <x-heroicon-o-plus class="inline h-5 w-5" />
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <x-mapbox theme="light-v10" class="rounded-lg shadow-lg h-96 mt-6" :markers="[[13.4105300, 52.5243700], [2.3488000, 48.8534100]]"/>
            </div>
        </main>
    </div>
</x-layouts.app>
