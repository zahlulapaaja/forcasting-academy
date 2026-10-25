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
@include('dashboard.online-courses._welcome-banner')

{{-- Daftar Paket Produk Digital & Tryout SKD --}}
@include('dashboard.online-courses._pricing-plans')

{{-- Baris 1 --}}
<div class="row g-5 g-xl-10 mb-5 mb-xl-10">
    <div class="col-xl-4 mb-xl-10">
        @include('dashboard.online-courses._my-tasks')
    </div>

    <div class="col-xl-8 mb-5 mb-xl-10">
        <div class="row g-5 g-xl-10">
            <div class="col-xl-6 mb-xl-10">
                @include('dashboard.online-courses._slider-courses')
            </div>
            <div class="col-xl-6 mb-5 mb-xl-10">
                @include('dashboard.online-courses._slider-events')
            </div>
        </div>

        @include('dashboard.online-courses._engage-bonus')
    </div>
</div>

{{-- Baris 2 --}}
<div class="row g-5 g-xl-10 mb-5 mb-xl-10">
    <div class="col-xl-4 mb-xl-10">
        @include('dashboard.online-courses._recommended')
    </div>
    <div class="col-xl-8 mb-5 mb-xl-10">
        @include('dashboard.online-courses._team-schedule')
    </div>
</div>

{{-- Baris 3 --}}
<div class="row g-5 g-xl-10">
    <div class="col-xl-4">
        @include('dashboard.online-courses._active-lessons')
    </div>
    <div class="col-xl-8">
        @include('dashboard.online-courses._learn-activity')
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