<div class="card card-flush h-xl-100">
    <div class="card-header pt-7">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bold text-gray-800">Learn Activity</span>
            <span class="text-gray-500 mt-1 fw-semibold fs-6">Hours per course</span>
        </h3>
        <div class="card-toolbar">
            <div data-kt-daterangepicker="true" data-kt-daterangepicker-opens="left" class="btn btn-sm btn-light d-flex align-items-center px-4">
                <div class="text-gray-600 fw-bold">Loading date range...</div>
                <i class="ki-duotone ki-calendar-8 fs-1 ms-2 me-0">
                    @for ($i = 1; $i <= 6; $i++)<span class="path{{ $i }}"></span>@endfor
                </i>
            </div>
        </div>
    </div>
    <div class="card-body d-flex align-items-end px-0 pt-3 pb-5">
        <div id="kt_charts_widget_18_chart" class="h-325px w-100 min-h-auto ps-4 pe-6"></div>
    </div>
</div>
