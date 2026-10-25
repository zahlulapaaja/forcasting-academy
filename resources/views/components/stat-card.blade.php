{{--
    Pemakaian:
    <x-stat-card label="Active Projects" value="69" />
    <x-stat-card label="Earnings" value="$69,700" badge="2.2%" badge-type="success" />
--}}
@props(['label', 'value', 'badge' => null, 'badgeType' => 'success'])

<div {{ $attributes->merge(['class' => 'card card-flush h-md-100']) }}>
    <div class="card-header pt-5">
        <div class="card-title d-flex flex-column">
            <div class="d-flex align-items-center">
                <span class="fs-2hx fw-bold text-gray-900 me-2 lh-1 ls-n2">{{ $value }}</span>
                @if ($badge)
                    <span class="badge badge-light-{{ $badgeType }} fs-base">{{ $badge }}</span>
                @endif
            </div>
            <span class="text-gray-500 pt-1 fw-semibold fs-6">{{ $label }}</span>
        </div>
    </div>
    @if (trim($slot))
        <div class="card-body pt-2">{{ $slot }}</div>
    @endif
</div>
