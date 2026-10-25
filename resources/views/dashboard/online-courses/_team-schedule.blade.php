<div class="card card-flush h-xl-100">
    <div class="card-header pt-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bold text-gray-900">Team Schedule</span>
            <span class="text-gray-500 pt-2 fw-semibold fs-6">49 Actual Tasks</span>
        </h3>
        <div class="card-toolbar">
            <ul class="nav">
                @foreach (['day' => 'Day', 'week' => 'Week', 'month' => 'Month'] as $key => $label)
                    <li class="nav-item">
                        <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light fw-bold px-4 me-1 {{ $loop->first ? 'active' : '' }}"
                           data-kt-timeline-widget-1="tab" data-bs-toggle="tab" href="#kt_timeline_widget_1_tab_{{ $key }}">{{ $label }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

    <div class="card-body pb-0">
        <div class="tab-content">
            @foreach (['day', 'week', 'month'] as $i => $key)
                <div class="tab-pane {{ $i === 0 ? 'active' : '' }}" id="kt_timeline_widget_1_tab_{{ $key }}" role="tabpanel" data-kt-timeline-widget-1-blockui="true">
                    <div class="table-responsive pb-10">
                        <div id="kt_timeline_widget_1_{{ $i + 1 }}" class="vis-timeline-custom h-350px min-w-700px"
                             data-kt-timeline-widget-1-image-root="{{ asset('assets/media') }}/"></div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
