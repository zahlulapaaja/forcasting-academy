@php
$user = auth()->user();
$name = $user->name ?? 'Guest';
$email = $user->email ?? '-';
$avatar = asset('assets/media/avatars/300-3.jpg');
@endphp

<div class="app-navbar-item ms-3 ms-lg-6" id="kt_header_user_menu_toggle">
    <div class="cursor-pointer symbol symbol-35px symbol-lg-45px"
        data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
        <img src="{{ $avatar }}" alt="user" />
    </div>

    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px" data-kt-menu="true">
        <div class="menu-item px-3">
            <div class="menu-content d-flex align-items-center px-3">
                <div class="symbol symbol-50px me-5"><img alt="avatar" src="{{ $avatar }}" /></div>
                <div class="d-flex flex-column">
                    <div class="fw-bold d-flex align-items-center fs-5">{{ $name }}</div>
                    <span class="fw-semibold text-muted fs-7">{{ $email }}</span>
                </div>
            </div>
        </div>

        <div class="separator my-2"></div>

        <div class="menu-item px-5"><a href="#" class="menu-link px-5">Profil Saya</a></div>
        <div class="menu-item px-5"><a href="#" class="menu-link px-5">Pengaturan Akun</a></div>

        <div class="separator my-2"></div>

        {{-- Mode terang / gelap --}}
        <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
            <a href="#" class="menu-link px-5"><span class="menu-title">Tema</span></a>
            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 fw-semibold py-4 fs-base w-150px" data-kt-menu="true" data-kt-element="theme-mode-menu">
                <div class="menu-item px-3 my-0"><a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="light"><span class="menu-title">Light</span></a></div>
                <div class="menu-item px-3 my-0"><a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="dark"><span class="menu-title">Dark</span></a></div>
                <div class="menu-item px-3 my-0"><a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="system"><span class="menu-title">System</span></a></div>
            </div>
        </div>

        @if (Route::has('logout'))
        <div class="menu-item px-5">
            <a href="#" class="menu-link px-5" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Keluar</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
        </div>
        @endif
    </div>
</div>