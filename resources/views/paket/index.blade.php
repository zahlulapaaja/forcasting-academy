@extends('layouts.app')

@section('title', 'Beranda - Bimbel Online & Tryout SKD')
@section('page_title', 'Dashboard Pembelajaran')
@section('breadcrumb', 'Beranda')

{{-- Tombol aksi di header menu atas --}}
@section('header_action')
<a href="#" class="btn btn-flex btn-sm fw-bold btn-success py-3" data-bs-toggle="modal"
    data-bs-target="#kt_modal_upgrade_plan">
    <i class="ki-duotone ki-upgrade fs-2 me-1"><span class="path1"></span><span class="path2"></span></i>
    Upgrade <span class="d-none d-sm-inline ps-1">Paket</span>
</a>
@endsection

{{-- Tombol toolbar kanan --}}
@section('toolbar_actions')
@include('dashboard.online-courses._toolbar')
@endsection

@section('content')

{{-- Banner Selamat Datang & Poin --}}
<div class="card mb-7 bg-light-primary border border-primary border-dashed">
    <div class="card-body d-flex align-items-center justify-content-between p-6">
        <div class="d-flex flex-column">
            <h2 class="text-gray-900 fw-bolder mb-1">Selamat Datang di Portal Belajar SKD CPNS! 🚀</h2>
            <p class="text-gray-600 fs-6 mb-0">Persiapkan diri Anda menghadapi seleksi CPNS & Kedinasan dengan simulasi
                CAT dan materi HOTS ter-update.</p>
        </div>
        <div class="d-flex align-items-center gap-3">
            <div class="text-end">
                <span class="text-gray-500 fs-7 d-block fw-semibold">Poin Bonus Anda</span>
                <span class="text-primary fs-2x fw-bold">{{ number_format($bonusPoints ?? 0) }} PTS</span>
            </div>
        </div>
    </div>
</div>


{{-- Daftar Paket Produk Digital & Tryout SKD --}}
<div class="card mb-8">
    <div class="card-header border-0 pt-6">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bold fs-2 text-gray-900">Pilihan Paket Belajar & Tryout SKD</span>
            <span class="text-muted mt-1 fw-semibold fs-7">Pilih paket bimbingan belajar dan simulasi CAT sesuai
                kebutuhan Anda</span>
        </h3>
    </div>
    <div class="card-body pt-3">
        <div class="row g-6 g-xl-9">
            @foreach ($pricingPlans as $plan)
            <div class="col-xl-4">
                <div
                    class="card border border-2 border-gray-300 shadow-sm h-100 p-6 flex-column justify-content-between position-relative {{ $plan['is_popular'] ? 'border-primary bg-light-primary bg-opacity-10' : '' }}">

                    @if ($plan['is_popular'])
                    <div class="position-absolute top-0 end-0 mt-n3 me-4">
                        <span
                            class="badge bg-primary fs-8 fw-bold px-3 py-2 text-uppercase rounded-pill shadow-sm">
                            ⭐ Rekomendasi Utama
                        </span>
                    </div>
                    @endif

                    <div>
                        <!-- Header Badge & Judul -->
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <span
                                class="badge badge-{{ $plan['badge_color'] }} fw-bold px-3 py-2 fs-7">{{ $plan['badge'] }}</span>
                        </div>

                        <h3 class="text-gray-900 fw-bold fs-2 mb-2">{{ $plan['title'] }}</h3>
                        <p class="text-gray-600 fs-7 mb-4">{{ $plan['description'] }}</p>

                        <!-- Pricing -->
                        <div class="mb-5">
                            <span class="text-gray-400 text-decoration-line-through fs-6 me-2">
                                Rp {{ number_format($plan['original_price'], 0, ',', '.') }}
                            </span>
                            <div class="d-flex align-items-center">
                                <span class="fs-2x fw-bolder text-gray-900">Rp
                                    {{ number_format($plan['discount_price'], 0, ',', '.') }}</span>
                            </div>
                        </div>

                        <div class="separator separator-dashed mb-5"></div>

                        <!-- List Fitur -->
                        <ul class="list-unstyled text-gray-700 fs-7 fw-semibold mb-6">
                            @foreach ($plan['features'] as $feature)
                            <li class="d-flex align-items-center mb-3">
                                <i class="ki-duotone ki-check-circle fs-3 text-success me-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                                <span>{{ $feature }}</span>
                            </li>
                            @endforeach
                        </ul>
                    </div>

                    <!-- Tombol Aksi -->
                    <div class="pt-3">
                        <a href="#"
                            class="btn {{ $plan['is_popular'] ? 'btn-primary' : 'btn-light-primary' }} w-100 fw-bold py-3">
                            Beli Paket Sekarang
                        </a>
                    </div>

                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>


@endsection

{{-- Modal & Vendor Plugins --}}
@push('modals')
@includeIf('partials.modals.upgrade-plan')
@includeIf('partials.modals.invite-friends')
@includeIf('partials.modals.create-app')
@includeIf('partials.modals.create-campaign')
@endpush

@push('vendor-styles')
<link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/plugins/custom/vis-timeline/vis-timeline.bundle.css') }}" rel="stylesheet"
    type="text/css" />
@endpush

@push('vendor-scripts')
<script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
<script src="{{ asset('assets/plugins/custom/vis-timeline/vis-timeline.bundle.js') }}"></script>
<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
<script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
<script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
<script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
@endpush

@push('scripts')
<script src="{{ asset('assets/js/widgets.bundle.js') }}"></script>
<script src="{{ asset('assets/js/custom/widgets.js') }}"></script>
<script src="{{ asset('assets/js/custom/utilities/modals/upgrade-plan.js') }}"></script>
<script src="{{ asset('assets/js/custom/utilities/modals/create-app.js') }}"></script>
<script src="{{ asset('assets/js/custom/utilities/modals/create-campaign.js') }}"></script>
@endpush