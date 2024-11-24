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


    @include('partials.bodyLoader')
    @include('partials._body')
    @livewireScripts

    
    <!-- Your custom script for debugging -->
    <script>

        var $path
        // Listen for the 'changeUrl' event emitted by Livewire
        Livewire.on('changeUrl', url => {
            // Update the browser's URL dynamically without reloading the page
            showBodyLoader();
            window.history.pushState({}, '', url);
            console.log(url[0]);
            var currentPath = window.location.pathname;
            console.log("Current Path:", currentPath);

            if(currentPath == $path){
                $('.nav-route').removeClass('active');   
                $('.activeRoute').addClass('active');
            }
            
            $('.nav-route').on('click', function () {
                $path = $(this).data('path');  
                console.log($path);
                $('.nav-route').removeClass('activeRoute');        
                $(this).addClass('activeRoute');
            });

            setTimeout(() => {
                hideBodyLoader();
            }, 1000);
            scrollToTop();
            // const headerNavBar = document.querySelector(".verticalNavbar").querySelectorAll("a");
            // const urlSplitting = url[0];
            // const urlSplittingArray = urlSplitting.split('/');
            // console.log(urlSplittingArray[3]);
            // headerNavBar.forEach(nav => nav.classList.remove("active"))
            // document.getElementById(urlSplittingArray[3]).classList.add("active");
            

        });
    </script>
</body>
</html>
