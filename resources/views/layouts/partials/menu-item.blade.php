{{--
    Render 1 item menu, otomatis rekursif untuk submenu.
    Data diambil dari config/menu.php
    Variabel: $item (array), $level (0 = menu teratas)
--}}
@php
    $children = $item['children'] ?? [];

    $isActive = function (array $i) use (&$isActive) {
        if (!empty($i['active']) && request()->is($i['active'])) return true;
        foreach ($i['children'] ?? [] as $c) { if ($isActive($c)) return true; }
        return false;
    };
    $active = $isActive($item);

    $url  = $item['url'] ?? '#';
    $href = ($url === '#' || str_starts_with($url, 'http')) ? $url : url($url);
@endphp

@if ($level === 0)
    {{-- ===== MENU TERATAS ===== --}}
    @if ($children)
        <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start"
             class="menu-item menu-lg-down-accordion me-0 me-lg-2 {{ $active ? 'here show menu-here-bg' : '' }}">
            <span class="menu-link">
                <span class="menu-title">{{ $item['title'] }}</span>
                <span class="menu-arrow d-lg-none"></span>
            </span>
            <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-250px">
                @foreach ($children as $child)
                    @include('layouts.partials.menu-item', ['item' => $child, 'level' => 1])
                @endforeach
            </div>
        </div>
    @else
        <div class="menu-item me-0 me-lg-2">
            <a class="menu-link {{ $active ? 'active' : '' }}" href="{{ $href }}">
                <span class="menu-title">{{ $item['title'] }}</span>
            </a>
        </div>
    @endif
@else
    {{-- ===== SUBMENU ===== --}}
    @if ($children)
        <div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start"
             class="menu-item menu-lg-down-accordion">
            <span class="menu-link">
                @isset($item['icon'])
                    <span class="menu-icon">
                        <i class="ki-duotone {{ $item['icon'] }} fs-2"><span class="path1"></span><span class="path2"></span></i>
                    </span>
                @else
                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                @endisset
                <span class="menu-title">{{ $item['title'] }}</span>
                <span class="menu-arrow"></span>
            </span>
            <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                @foreach ($children as $child)
                    @include('layouts.partials.menu-item', ['item' => $child, 'level' => $level + 1])
                @endforeach
            </div>
        </div>
    @else
        <div class="menu-item">
            <a class="menu-link {{ $active ? 'active' : '' }}" href="{{ $href }}">
                @isset($item['icon'])
                    <span class="menu-icon">
                        <i class="ki-duotone {{ $item['icon'] }} fs-2"><span class="path1"></span><span class="path2"></span></i>
                    </span>
                @else
                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                @endisset
                <span class="menu-title">{{ $item['title'] }}</span>
            </a>
        </div>
    @endif
@endif
