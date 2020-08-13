<x-html
    :title="isset($title) ? $title . ' | ' . config('app.name') : ''"
    class="bg-white h-screen antialiased leading-none"
>
    <x-slot name="head">
        <x-social-meta
            title="{{ $component->title() }}"
            description="Curate your bucket list and keep track of your next trips. Search for the most popular destinations on our planet."
        />

        <script src="{{ asset('js/app.js') }}" defer></script>

        <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">

        @livewireStyles
        @bukStyles
    </x-slot>

    {{ $slot }}

    <x-layouts.footer />

    @livewireScripts
    @bukScripts
</x-html>
