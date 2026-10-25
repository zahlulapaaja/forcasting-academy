<div id="kt_app_header" class="app-header mb-6 mb-lg-10">

    {{-- ===== HEADER ATAS: logo, search, user ===== --}}
    <div class="app-header-primary" data-kt-sticky="true"
         data-kt-sticky-activate="{default: false, lg: true}"
         data-kt-sticky-name="app-header-primary-sticky"
         data-kt-sticky-offset="{default: false, lg: '300px'}">

        <div class="app-container container-xxl d-flex align-items-stretch justify-content-between" id="kt_app_header_primary_container">

            {{-- Tombol menu mobile --}}
            <div class="d-flex align-items-center d-lg-none ms-n2 me-2" title="Menu">
                <div class="btn btn-icon btn-active-color-primary w-35px h-35px" id="kt_app_header_menu_toggle">
                    <i class="ki-duotone ki-abstract-14 fs-2"><span class="path1"></span><span class="path2"></span></i>
                </div>
            </div>

            {{-- Logo --}}
            <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0 me-lg-15">
                <a href="{{ url('/') }}">
                    <img alt="Logo" src="{{ asset('assets/media/logos/demo48-small.svg') }}" class="h-25px d-sm-none" />
                    <img alt="Logo" src="{{ asset('assets/media/logos/demo48.svg') }}" class="h-40px d-none d-sm-inline theme-light-show" />
                    <img alt="Logo" src="{{ asset('assets/media/logos/demo48-dark.svg') }}" class="h-40px d-none d-sm-inline theme-dark-show" />
                </a>
            </div>

            <div class="app-navbar flex-shrink-0">

                {{-- Search --}}
                <div class="d-flex align-items-center align-items-stretch">
                    <div class="header-search d-flex align-items-center w-lg-300px">
                        <form action="#" class="d-none d-lg-block w-100 position-relative mb-5 mb-lg-0" autocomplete="off">
                            <i class="ki-duotone ki-magnifier search-icon fs-2 text-gray-500 position-absolute top-50 translate-middle-y ms-5">
                                <span class="path1"></span><span class="path2"></span>
                            </i>
                            <input type="text" class="search-input form-control ps-13" name="search" placeholder="Cari..." />
                        </form>
                    </div>
                </div>

                {{-- Menu user --}}
                @include('layouts.partials.user-menu')
            </div>
        </div>
    </div>

    {{-- ===== HEADER BAWAH: menu utama (dari config/menu.php) ===== --}}
    <div class="app-header-secondary">
        <div class="app-container container-xxl d-flex align-items-stretch" id="kt_app_header_secondary_container">
            <div class="d-flex flex-stack flex-row-fluid" id="kt_app_header_wrapper">
                <div>
                    <div class="app-header-menu app-header-mobile-drawer align-items-stretch"
                         data-kt-drawer="true" data-kt-drawer-name="app-header-menu"
                         data-kt-drawer-activate="{default: true, lg: false}"
                         data-kt-drawer-overlay="true" data-kt-drawer-width="250px"
                         data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_header_menu_toggle"
                         data-kt-swapper="true" data-kt-swapper-mode="{default: 'append', lg: 'prepend'}"
                         data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_wrapper'}">

                        <div class="menu menu-rounded menu-active-bg menu-state-primary menu-column menu-lg-row menu-title-gray-700 menu-icon-gray-500 menu-arrow-gray-500 menu-bullet-gray-500 my-5 my-lg-0 align-items-stretch fw-semibold px-2 px-lg-0"
                             id="kt_app_header_menu" data-kt-menu="true">

                            @foreach (config('menu.main') as $item)
                                @include('layouts.partials.menu-item', ['item' => $item, 'level' => 0])
                            @endforeach

                        </div>
                    </div>
                </div>

                {{-- Tombol aksi kanan (opsional per halaman) --}}
                @hasSection('header_action')
                    <div class="px-4 px-lg-0 pt-5 pt-lg-0 text-end">
                        @yield('header_action')
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
