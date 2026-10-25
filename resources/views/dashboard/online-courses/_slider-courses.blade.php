<div id="kt_sliders_widget_1_slider" class="card card-flush carousel carousel-custom carousel-stretch slide h-xl-100" data-bs-ride="carousel" data-bs-interval="5000">
    <div class="card-header pt-5">
        <h4 class="card-title d-flex align-items-start flex-column">
            <span class="card-label fw-bold text-gray-800">Today’s Course</span>
            <span class="text-gray-500 mt-1 fw-bold fs-7">4 lessons, 3 hours 45 minutes</span>
        </h4>
        <div class="card-toolbar">
            <ol class="p-0 m-0 carousel-indicators carousel-indicators-bullet carousel-indicators-active-primary">
                @foreach ($todayCourses as $i => $c)
                    <li data-bs-target="#kt_sliders_widget_1_slider" data-bs-slide-to="{{ $i }}" class="{{ $i === 0 ? 'active ' : '' }}ms-1"></li>
                @endforeach
            </ol>
        </div>
    </div>

    <div class="card-body py-6">
        <div class="carousel-inner mt-n5">
            @foreach ($todayCourses as $i => $c)
                <div class="carousel-item {{ $i === 0 ? 'active show' : '' }}">
                    <div class="d-flex align-items-center mb-5">
                        <div class="w-80px flex-shrink-0 me-2">
                            <div class="min-h-auto ms-n3" id="kt_slider_widget_1_chart_{{ $i + 1 }}" style="height: 100px"></div>
                        </div>
                        <div class="m-0">
                            <h4 class="fw-bold text-gray-800 mb-3">{{ $c['title'] }}</h4>
                            <div class="d-flex d-grid gap-5">
                                <div class="d-flex flex-column flex-shrink-0 me-4">
                                    <x-meta-line>{{ $c['topics'] }} Topics</x-meta-line>
                                    <x-meta-line>{{ $c['speakers'] }} Speakers</x-meta-line>
                                </div>
                                <div class="d-flex flex-column flex-shrink-0">
                                    <x-meta-line>{{ $c['minutes'] }} Min</x-meta-line>
                                    <x-meta-line>{{ $c['students'] }} students</x-meta-line>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="m-0">
                        <a href="#" class="btn btn-sm btn-light me-2 mb-2">Skip This</a>
                        <a href="#" class="btn btn-sm btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Continue</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
