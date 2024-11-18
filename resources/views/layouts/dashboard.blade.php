<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="theme-fs-md">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Equity Circle</title>

    @include('partials._head')
    @livewireStyles
    {{-- <script src="//unpkg.com/alpinejs" defer></script> --}}
</head>
<body class="{{ isset($bodyClass) ? $bodyClass : '' }} sidebar-main">
    
    @include('partials._body')
    @livewireScripts

    
    <!-- Your custom script for debugging -->
    <script>
        // Listen for the 'changeUrl' event emitted by Livewire
        Livewire.on('changeUrl', url => {
            // Update the browser's URL dynamically without reloading the page
            window.history.pushState({}, '', url);
            scrollToTop();
        });
    </script>
</body>
</html>
