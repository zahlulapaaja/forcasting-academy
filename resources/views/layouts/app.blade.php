<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('layouts.partials.head')
</head>

<body id="kt_app_body" data-kt-app-header-stacked="true" data-kt-app-header-primary-enabled="true"
    data-kt-app-header-secondary-enabled="true" data-kt-app-toolbar-enabled="true" class="app-default">

    @include('layouts.partials.theme-mode')

    <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
        <div class="app-page flex-column flex-column-fluid" id="kt_app_page">

            @include('layouts.partials.header')

            <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">

                @include('layouts.partials.toolbar')

                <div class="app-container container-xxl d-flex">
                    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                        <div class="d-flex flex-column flex-column-fluid">
                            <div id="kt_app_content" class="app-content px-0">

                                {{-- ====== ISI HALAMAN ====== --}}
                                @yield('content')

                            </div>
                        </div>

                        @include('layouts.partials.footer')
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal / drawer per halaman: @push('modals') --}}
    @stack('modals')

    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
        <i class="ki-duotone ki-arrow-up"><span class="path1"></span><span class="path2"></span></i>
    </div>

    @include('layouts.partials.scripts')
</body>

</html>