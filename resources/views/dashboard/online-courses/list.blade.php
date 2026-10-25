@extends('layouts.app')

@section('title', 'Online Courses')
@section('page_title', 'Online Courses')
@section('breadcrumb', 'Home')

@section('content')

    {{-- Baris Paket Produk & Pricing SKD --}}
    @include('dashboard.online-courses._pricing-plans')

    {{-- Baris 1 --}}
    <div class="row g-5 g-xl-10">
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

    {{-- Baris 2 & 3 tetap sama seperti kodingan awal Anda --}}
    ...

@endsection
