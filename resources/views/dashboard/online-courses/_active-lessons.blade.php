<x-card title="Active Lessons" subtitle="Avg. 72% completed lessons" class="h-xl-100">
    <x-slot:toolbar>
        <a href="#" class="btn btn-sm btn-light">All Lessons</a>
    </x-slot:toolbar>

    @foreach ($lessons as $l)
        <div class="d-flex flex-stack">
            <div class="d-flex align-items-center me-3">
                <img src="{{ asset('assets/media/svg/brand-logos/' . $l['logo']) }}" class="me-4 w-30px" alt="" />
                <div class="flex-grow-1">
                    <a href="#" class="text-gray-800 text-hover-primary fs-5 fw-bold lh-0">{{ $l['name'] }}</a>
                    <span class="text-gray-500 fw-semibold d-block fs-6">{{ $l['desc'] }}</span>
                </div>
            </div>
            <div class="d-flex align-items-center w-100 mw-125px">
                <div class="progress h-6px w-100 me-2 bg-light-{{ $l['color'] }}">
                    <div class="progress-bar bg-{{ $l['color'] }}" role="progressbar" style="width: {{ $l['progress'] }}%"
                         aria-valuenow="{{ $l['progress'] }}" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <span class="text-gray-500 fw-semibold">{{ $l['progress'] }}%</span>
            </div>
        </div>
        @unless ($loop->last)
            <div class="separator separator-dashed my-3"></div>
        @endunless
    @endforeach
</x-card>
