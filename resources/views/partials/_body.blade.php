<!-- loader Start -->
<div id="loading">
    @include('partials._body_loader')
</div>
<!-- loader END -->
<!-- Wrapper Start -->
@php
    if (Route::currentRouteName() == 'equity_circle') {
        @endphp
        @include('dashboards.static-banner');
        @php
    }

    if (Route::currentRouteName() != 'search-job') {
        @endphp
        @include('partials._body_header')
        @php
    }
@endphp


<main class="main-content">
    <div class="position-relative">
        <div>
            <div class="position-relative">
                @if (isset($isSubheader) && $isSubheader)
                    {{$header}}
                @endif
            </div>
            <div id="content-page " class="content-inner ">
                {{ $slot }}
            </div>
       </div>
    </div>
</main>
<!-- Wrapper End-->
 {{-- @include('partials._body_footer')  --}}
 {{-- offcanvas start --> --}}
{{-- @include('dashboards.rightSidebar') --}}
<!-- Live Customizer start -->
 {{-- @include('components.setting-offcanvas')  --}}
<!-- Live Customizer end -->

 {{-- @include('components.shareoffcanvas')  --}}

<!-- Ajax Modal Html-->
@include('partials.modal-view')

@include('partials._scripts')
@include('dashboards._app_toast')
