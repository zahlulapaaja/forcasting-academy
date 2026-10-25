<x-card title="Recommended for you" subtitle="8k social visitors" class="h-xl-100">
    <x-slot:toolbar>
        <a href="#" class="btn btn-sm btn-light">All Courses</a>
    </x-slot:toolbar>

    @foreach ($recommended as $r)
        <div class="d-flex flex-stack">
            <div class="symbol symbol-40px me-4">
                <div class="symbol-label fs-2 fw-semibold bg-{{ $r['color'] }} text-inverse-{{ $r['color'] }}">{{ $r['initial'] }}</div>
            </div>
            <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                <div class="flex-grow-1 me-2">
                    <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bold">{{ $r['name'] }}</a>
                    <span class="text-muted fw-semibold d-block fs-7">{{ $r['courses'] }} Courses</span>
                </div>
                <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                    <i class="ki-duotone ki-arrow-right fs-2"><span class="path1"></span><span class="path2"></span></i>
                </a>
            </div>
        </div>
        @unless ($loop->last)
            <div class="separator separator-dashed my-4"></div>
        @endunless
    @endforeach
</x-card>
