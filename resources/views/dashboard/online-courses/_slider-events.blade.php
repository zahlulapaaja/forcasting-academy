<div id="kt_sliders_widget_2_slider" class="card card-flush carousel carousel-custom carousel-stretch slide h-xl-100" data-bs-ride="carousel" data-bs-interval="5500">
    <div class="card-header pt-5">
        <h4 class="card-title d-flex align-items-start flex-column">
            <span class="card-label fw-bold text-gray-800">Today’s Events</span>
            <span class="text-gray-500 mt-1 fw-bold fs-7">24 events on all activities</span>
        </h4>
        <div class="card-toolbar">
            <ol class="p-0 m-0 carousel-indicators carousel-indicators-bullet carousel-indicators-active-success">
                @foreach ($todayEvents as $i => $e)
                    <li data-bs-target="#kt_sliders_widget_2_slider" data-bs-slide-to="{{ $i }}" class="{{ $i === 0 ? 'active ' : '' }}ms-1"></li>
                @endforeach
            </ol>
        </div>
    </div>

    <div class="card-body py-6">
        <div class="carousel-inner">
            @foreach ($todayEvents as $i => $e)
                <div class="carousel-item {{ $i === 0 ? 'active show' : '' }}">
                    <div class="d-flex align-items-center mb-9">
                        <div class="symbol symbol-70px symbol-circle me-5">
                            <span class="symbol-label bg-light-{{ $e['color'] }}">
                                <i class="ki-duotone {{ $e['icon'] }} fs-3x text-{{ $e['color'] }}"><span class="path1"></span><span class="path2"></span></i>
                            </span>
                        </div>
                        <div class="m-0">
                            <h4 class="fw-bold text-gray-800 mb-3">{{ $e['title'] }}</h4>
                            <div class="d-flex d-grid gap-5">
                                <div class="d-flex flex-column flex-shrink-0 me-4">
                                    <x-meta-line>{{ $e['topics'] }} Topics</x-meta-line>
                                    <x-meta-line>{{ $e['speakers'] }} Speakers</x-meta-line>
                                </div>
                                <div class="d-flex flex-column flex-shrink-0">
                                    <x-meta-line>{{ $e['minutes'] }} Min</x-meta-line>
                                    <x-meta-line>{{ $e['students'] }} students</x-meta-line>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="m-0">
                        <a href="#" class="btn btn-sm btn-light me-2 mb-2">Details</a>
                        <a href="#" class="btn btn-sm btn-success mb-2" data-bs-toggle="modal" data-bs-target="#kt_modal_create_campaign">Join Event</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
