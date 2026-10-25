<div class="card card-flush h-xl-100">
    <div class="card-header rounded bgi-no-repeat bgi-size-cover bgi-position-y-top bgi-position-x-center align-items-start h-250px"
         style="background-image:url('{{ asset('assets/media/svg/shapes/top-green.png') }}')" data-bs-theme="light">
        <h3 class="card-title align-items-start flex-column text-white pt-15">
            <span class="fw-bold fs-2x mb-3">My Tasks</span>
            <div class="fs-4 text-white">
                <span class="opacity-75">You have</span>
                <span class="position-relative d-inline-block">
                    <a href="#" class="link-white opacity-75-hover fw-bold d-block mb-1">{{ $taskCount }} tasks</a>
                    <span class="position-absolute opacity-50 bottom-0 start-0 border-2 border-body border-bottom w-100"></span>
                </span>
                <span class="opacity-75">to complete</span>
            </div>
        </h3>
    </div>

    <div class="card-body mt-n20">
        <div class="mt-n20 position-relative">
            <div class="row g-3 g-lg-6">
                @foreach ($courseStats as $s)
                    <div class="col-6">
                        <div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">
                            <div class="symbol symbol-30px me-5 mb-8">
                                <span class="symbol-label">
                                    <i class="ki-duotone {{ $s['icon'] }} fs-1 text-primary">
                                        @for ($i = 1; $i <= ($s['paths'] ?? 2); $i++)<span class="path{{ $i }}"></span>@endfor
                                    </i>
                                </span>
                            </div>
                            <div class="m-0">
                                <span class="text-gray-700 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1">{{ $s['value'] }}</span>
                                <span class="text-gray-500 fw-semibold fs-6">{{ $s['label'] }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
