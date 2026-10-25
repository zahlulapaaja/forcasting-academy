@extends('layouts.app')

@section('title', 'Projects Dashboard')
@section('page_title', 'Projects Dashboard')
@section('breadcrumb', 'Home')

{{-- Tombol di kanan judul (opsional) --}}
@section('toolbar_actions')
    <a href="#" class="btn btn-sm btn-flex btn-color-white bg-gray-600 btn-active-dark h-35px px-3">
        <i class="ki-duotone ki-plus-square fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
        Tambah
    </a>
@endsection

@section('content')

    {{-- Baris kartu statistik --}}
    <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
        @foreach ($stats as $stat)
            <div class="col-md-6 col-xl-3">
                <x-stat-card :label="$stat['label']" :value="$stat['value']"
                             :badge="$stat['badge'] ?? null" :badge-type="$stat['badge_type'] ?? 'success'" />
            </div>
        @endforeach
    </div>

    {{-- Tabel --}}
    <x-card title="Projects Stats" subtitle="Diperbarui 37 menit lalu">
        <x-slot:toolbar>
            <a href="#" class="btn btn-sm btn-light">History</a>
        </x-slot:toolbar>

        <div class="table-responsive">
            <table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
                <thead>
                    <tr class="fs-7 fw-bold text-gray-500 border-bottom-0">
                        <th class="p-0 pb-3 min-w-175px">ITEM</th>
                        <th class="p-0 pb-3 min-w-100px text-end">BUDGET</th>
                        <th class="p-0 pb-3 min-w-100px text-end">STATUS</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($projects as $p)
                        <tr>
                            <td>
                                <div class="d-flex flex-column">
                                    <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">{{ $p['name'] }}</a>
                                    <span class="text-gray-500 fw-semibold fs-7">{{ $p['owner'] }}</span>
                                </div>
                            </td>
                            <td class="text-end text-gray-600 fw-bold">${{ number_format($p['budget']) }}</td>
                            <td class="text-end"><x-status-badge :status="$p['status']" /></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </x-card>

@endsection

{{-- Contoh push asset khusus halaman ini (hapus kalau tidak perlu) --}}
@push('scripts')
<script>
    // script khusus halaman dashboard
</script>
@endpush
