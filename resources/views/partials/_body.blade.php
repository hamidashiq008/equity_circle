<!-- loader Start -->
<div id="loading">
    @include('partials._body_loader')
</div>
<!-- loader END -->
<!-- Wrapper Start -->
@include('partials._body_sidebar')
{{-- @include('partials._body_header') --}}

<main class="main-content">
    <div class="position-relative">
       {{-- {{$pageheader ?? ''}} --}}
       @include('partials._body_header')

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
@include('dashboards.modal')
@include('dashboards.rightSidebar')
    </div>
</main>
<!-- Wrapper End-->
@include('partials._body_footer')
<!-- offcanvas start -->
{{-- @include('dashboards.rightSidebar') --}}
<!-- Live Customizer start -->
@include('components.setting-offcanvas')
<!-- Live Customizer end -->

@include('components.shareoffcanvas')

<!-- Ajax Modal Html-->
@include('partials.modal-view')

@include('partials._scripts')
@include('dashboards._app_toast')
