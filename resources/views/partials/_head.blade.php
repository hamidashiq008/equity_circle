<link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}"/>
@if(activeRoute(route('ui.iconfontawsome')) === 'active')
<link rel="stylesheet" href="{{ asset('vendor/@fortawesome/fontawesome-free/css/all.min.css')}}">
@elseif(activeRoute(route('ui.iconlineawsome')) === 'active')
<link rel="stylesheet" href="{{ asset('vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css')}}">
@elseif(activeRoute(route('ui.iconremixon')) === 'active')
<link rel="stylesheet" href="{{ asset('vendor/remixicon/fonts/remixicon.css')}}">
@endif
<link rel='stylesheet' href="{{ asset('vendor/fullcalendar/core/main.css' ) }}"/>
<link rel='stylesheet' href="{{ asset('vendor/fullcalendar/daygrid/main.css') }}"/>
<link rel='stylesheet' href="{{ asset('vendor/fullcalendar/timegrid/main.css') }}" />
<link rel='stylesheet' href="{{ asset('vendor/fullcalendar/list/main.css') }}" />
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@200;300;400;500;600;700;800&display=swap"
rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/libs.min.css')}}">
<link rel="stylesheet" href="{{ asset('css/socialv.css')}}">
<link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <!-- Sweetlaert2 css -->
<link rel="stylesheet" href="{{asset('vendor/sweetalert2/sweetalert2.min.css')}}"></link>


<link rel="stylesheet" href="{{ asset('scss/custom.css')}}">
<link rel="stylesheet" href="{{ asset('css/customizer.css')}}">

@if (isset($isZuck) && $isZuck)
<link rel="stylesheet" href="{{asset('vendor/zuck.js-master/dist/zuck.min.css')}}"></link>
<link rel="stylesheet" href="{{asset('vendor/zuck.js-master/dist/skins/snapssenger.min.css')}}"></link>
<link rel="stylesheet" href="{{asset('vendor/zuck.js-master/dist/skins/facesnap.css')}}"></link>
@endif
<link rel="stylesheet" href="{{asset('vendor/Leaflet/leaflet.css')}}">
<link rel="stylesheet" href="{{asset('vendor/vanillajs-datepicker/dist/css/datepicker.min.css')}}"



