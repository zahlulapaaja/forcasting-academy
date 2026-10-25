<div id="kt_app_toolbar" class="app-toolbar align-items-center">
    <div id="kt_app_toolbar_container" class="app-container container-xxl">
        <div class="d-flex flex-stack flex-row-fluid">

            <div class="d-flex flex-column flex-row-fluid">
                {{-- Breadcrumb: @section('breadcrumb', 'Home') --}}
                <ul class="breadcrumb breadcrumb-separatorless fw-semibold mb-1">
                    <li class="breadcrumb-item text-gray-700 fw-bold lh-1">
                        <a href="{{ url('/') }}" class="text-white text-hover-primary">
                            <i class="ki-duotone ki-home fs-3 text-gray-500"></i>
                        </a>
                    </li>
                    <li class="breadcrumb-item"><i class="ki-duotone ki-right fs-7 text-gray-700 mx-n1 lh-0"></i></li>
                    <li class="breadcrumb-item text-gray-700 fw-bold lh-1">@yield('breadcrumb', 'Home')</li>
                </ul>

                {{-- Judul halaman: @section('page_title', 'Judul') --}}
                <div class="page-title d-flex align-items-center me-3">
                    <h1 class="page-heading d-flex text-gray-900 fw-bolder fs-1 flex-column justify-content-center my-0">
                        @yield('page_title', 'Dashboard')
                    </h1>
                </div>
            </div>

            {{-- Tombol aksi toolbar: @section('toolbar_actions') ... @endsection --}}
            <div class="d-flex align-items-center gap-3">
                @yield('toolbar_actions')
            </div>
        </div>
    </div>
</div>
