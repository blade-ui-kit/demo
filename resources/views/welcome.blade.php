<x-layouts.base>
    <div class="relative bg-white overflow-hidden">
        <div class="max-w-screen-xl mx-auto">
            <div class="relative z-10 pb-8 bg-white sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32" x-data="{ open: false }">
                <svg class="hidden lg:block absolute right-0 inset-y-0 h-full w-48 text-white transform translate-x-1/2" fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none">
                    <polygon points="50,0 100,0 50,100 0,100" />
                </svg>

                <div class="relative pt-6 px-4 sm:px-6 lg:px-8">
                    <nav class="relative flex items-center justify-between sm:h-10 lg:justify-start">
                        <div class="flex items-center flex-grow flex-shrink-0 lg:flex-grow-0">
                            <div class="flex items-center justify-between w-full md:w-auto">
                                <a href="{{ route('welcome') }}" class="hover:zoom-1">
                                    <x-heroicon-o-globe class="h-8 w-auto sm:h-10 text-indigo-600"/>
                                </a>
                                <div class="-mr-2 flex items-center md:hidden">
                                    <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out"  @click="open = true">
                                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="hidden md:block md:ml-10 md:pr-4">
                            <a href="{{ route('welcome') }}" class="font-medium text-gray-500 hover:text-gray-900 focus:outline-none focus:text-gray-900 transition duration-150 ease-in-out">
                                {{ config('app.name') }}
                            </a>
                            <a href="#" class="ml-8 font-medium text-gray-500 hover:text-gray-900 focus:outline-none focus:text-gray-900 transition duration-150 ease-in-out">
                                Destinations
                            </a>
                            <a href="#" class="ml-8 font-medium text-gray-500 hover:text-gray-900 focus:outline-none focus:text-gray-900 transition duration-150 ease-in-out">
                                Blog
                            </a>
                            <a href="#" class="ml-8 font-medium text-gray-500 hover:text-gray-900 focus:outline-none focus:text-gray-900 transition duration-150 ease-in-out">
                                About
                            </a>

                            @auth
                                <a href="{{ route('home') }}" class="ml-8 font-medium text-indigo-600 hover:text-indigo-900 focus:outline-none focus:text-indigo-700 transition duration-150 ease-in-out">
                                    {{ __('Dashboard') }}
                                </a>
                            @else
                                <a href="{{ route('login') }}" class="ml-8 font-medium text-indigo-600 hover:text-indigo-900 focus:outline-none focus:text-indigo-700 transition duration-150 ease-in-out">
                                    {{ __('Login') }}
                                </a>
                            @endauth
                        </div>
                    </nav>
                </div>

                <div
                    x-show="open" @click.away="open = false"
                    class="absolute top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden"
                >
                    <div class="rounded-lg shadow-md">
                        <div class="rounded-lg bg-white shadow-xs overflow-hidden">
                            <div class="px-5 pt-4 flex items-center justify-between">
                                <div>
                                    <x-heroicon-o-globe class="h-8 w-auto sm:h-10 text-indigo-600"/>
                                </div>
                                <div class="-mr-2" @click="open = false">
                                    <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                                        <x-heroicon-o-x class="h-6 w-6"/>
                                    </button>
                                </div>
                            </div>

                            <div class="px-2 pt-2 pb-3">
                                <a href="{{ route('welcome') }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition duration-150 ease-in-out">
                                    {{ config('app.name') }}
                                </a>
                                <a href="#" class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition duration-150 ease-in-out">
                                    Destinations
                                </a>
                                <a href="#" class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition duration-150 ease-in-out">
                                    Blog
                                </a>
                                <a href="#" class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition duration-150 ease-in-out">
                                    About
                                </a>
                            </div>

                            <div>
                                @auth
                                    <a href="{{ route('home') }}" class="block w-full px-5 py-3 text-center font-medium text-indigo-600 bg-gray-50 hover:bg-gray-100 hover:text-indigo-700 focus:outline-none focus:bg-gray-100 focus:text-indigo-700 transition duration-150 ease-in-out">
                                        {{ __('Dashboard') }}
                                    </a>
                                @else
                                    <a href="{{ route('login') }}" class="block w-full px-5 py-3 text-center font-medium text-indigo-600 bg-gray-50 hover:bg-gray-100 hover:text-indigo-700 focus:outline-none focus:bg-gray-100 focus:text-indigo-700 transition duration-150 ease-in-out">
                                        {{ __('Login') }}
                                    </a>
                                @endauth
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-10 mx-auto max-w-screen-xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                    <div class="sm:text-center lg:text-left">
                        <h2 class="text-4xl tracking-tight leading-10 font-extrabold text-gray-900 sm:text-5xl sm:leading-none md:text-6xl">
                            What is
                            <br class="xl:hidden" />
                            <span class="text-indigo-600">your next destination</span>?
                        </h2>
                        <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:leading-7 sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                            Curate your bucket list and keep track of your next trips. Search for the most popular destinations on our planet.
                        </p>

                        <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                            <div class="rounded-md shadow">
                                <a href="{{ route('welcome') }}#search" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:shadow-outline transition duration-150 ease-in-out md:py-4 md:text-lg md:px-10">
                                    Search
                                </a>
                            </div>
                            <div class="mt-3 sm:mt-0 sm:ml-3">
                                <a href="{{ route('register') }}" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-indigo-700 bg-indigo-100 hover:text-indigo-600 hover:bg-indigo-50 focus:outline-none focus:shadow-outline focus:border-indigo-300 transition duration-150 ease-in-out md:py-4 md:text-lg md:px-10">
                                    Register
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
            <x-unsplash photo="ONpGBpns3cs" class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full"/>
        </div>
    </div>

    <div id="search" class="relative pt-16 pb-20 px-4 sm:px-6 lg:pt-24 lg:pb-28 lg:px-8">
        <div class="absolute inset-0">
            <div class="bg-gray-50 h-1/3 sm:h-2/3"></div>
        </div>
        <div class="relative max-w-7xl mx-auto">
            <div class="text-center">
                <h2 class="text-3xl leading-9 tracking-tight font-extrabold text-gray-900 sm:text-4xl sm:leading-10">
                    Ready to dive in?
                </h2>
                <p class="mt-3 max-w-2xl mx-auto text-xl leading-7 text-gray-500 sm:mt-4">
                    Search for your next destination and save it to your bucket list.
                </p>
                <div class="mt-8">
                    <div class="mt-1 relative rounded-md shadow-sm max-w-2xl mx-auto">
                        <x-input
                            name="search"
                            placeholder="Where to next?"
                            class="form-input block w-full pr-10 sm:text-xl sm:leading-8"
                        />
                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                            <x-heroicon-s-search class="h-5 w-5 text-gray-400"/>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-12 grid gap-5 max-w-lg mx-auto lg:grid-cols-3 lg:max-w-none">
                <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
                    <div class="flex-shrink-0 relative">
                        <x-unsplash photo="iFtuhgn7fYs" class="h-48 w-full object-cover"/>

                        <button class="absolute top-0 right-0 mt-2 mr-2 p-2 rounded-md text-gray-400 bg-gray-100 bg-opacity-50 hover:text-red-500 hover:bg-gray-100 hover:bg-opacity-100 focus:outline-none focus:bg-gray-100 focus:text-red-500 transition duration-150 ease-in-out">
                            <x-heroicon-s-heart class="h-6 w-6"/>
                        </button>
                    </div>
                    <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                        <div class="flex-1">
                            <div class="text-sm leading-5 font-medium text-indigo-600">
                                <a href="#" class="hover:underline">
                                    Europe
                                </a>
                            </div>
                            <a href="#" class="block">
                                <h3 class="mt-2 text-xl leading-7 font-semibold text-gray-900">
                                    Berlin, Germany
                                </h3>
                                <p class="mt-3 text-base leading-6 text-gray-500">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto accusantium praesentium eius, ut atque fuga culpa, similique sequi cum eos quis dolorum.
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
                    <div class="flex-shrink-0 relative">
                        <x-unsplash photo="SVVTZtTGyaU" class="h-48 w-full object-cover"/>

                        <button class="absolute top-0 right-0 mt-2 mr-2 p-2 rounded-md text-gray-400 bg-gray-100 bg-opacity-50 hover:text-red-500 hover:bg-gray-100 hover:bg-opacity-100 focus:outline-none focus:bg-gray-100 focus:text-red-500 transition duration-150 ease-in-out">
                            <x-heroicon-s-heart class="h-6 w-6"/>
                        </button>
                    </div>
                    <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                        <div class="flex-1">
                            <div class="grid grid-cols-2 gap-4 text-sm leading-5 font-medium text-indigo-600">
                                <a href="#" class="hover:underline">
                                    North America
                                </a>
                            </div>
                            <a href="#" class="block">
                                <h3 class="mt-2 text-xl leading-7 font-semibold text-gray-900">
                                    New York, United States
                                </h3>
                                <p class="mt-3 text-base leading-6 text-gray-500">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit facilis asperiores porro quaerat doloribus, eveniet dolore. Adipisci tempora aut inventore optio animi., tempore temporibus quo laudantium.
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
                    <div class="flex-shrink-0 relative">
                        <x-unsplash photo="t9Td0zfDTwI" class="h-48 w-full object-cover"/>

                        <button class="absolute top-0 right-0 mt-2 mr-2 p-2 rounded-md text-gray-400 bg-gray-100 bg-opacity-50 hover:text-red-500 hover:bg-gray-100 hover:bg-opacity-100 focus:outline-none focus:bg-gray-100 focus:text-red-500 transition duration-150 ease-in-out">
                            <x-heroicon-s-heart class="h-6 w-6"/>
                        </button>
                    </div>
                    <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                        <div class="flex-1">
                            <div class="grid grid-cols-2 gap-4 text-sm leading-5 font-medium text-indigo-600">
                                <a href="#" class="hover:underline">
                                    Europe
                                </a>
                            </div>
                            <a href="#" class="block">
                                <h3 class="mt-2 text-xl leading-7 font-semibold text-gray-900">
                                    Paris, France
                                </h3>
                                <p class="mt-3 text-base leading-6 text-gray-500">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint harum rerum voluptatem quo recusandae magni placeat saepe molestiae, sed excepturi cumque corporis perferendis hic.
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.base>
