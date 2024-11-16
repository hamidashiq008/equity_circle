    <!-- Conditional Banner and Header -->
    {{-- @if (Route::currentRouteName() == 'equity-circle') --}}
    {{-- <livewire:banner-component :routeName="$routeName" /> --}}
    {{-- @endif --}}

    {{-- @if (Route::currentRouteName() != 'search-job')/ --}}
    <livewire:header-component />
    {{-- @endif --}}

    <!-- Main Content -->
    <main class="main-content">
        <div class="position-relative">
            <div>
                <div class="position-relative">
                    @if (isset($isSubheader) && $isSubheader)
                        {{ $header }}
                    @endif
                </div>
                <div id="content-page" class="content-inner">
                    {{-- {{ $slot }} --}}
                    <livewire:main-content :view="$view" :routeName="$routeName" />
                </div>
           </div>
        </div>
    </main>

    <!-- Footer & Sidebar (conditionally included) -->
    @include('partials.modal-view')
    @include('partials._scripts')
    @include('dashboards._app_toast') 


