{{-- <x-status-badge status="In Process" /> --}}
@props(['status'])
@php
    $map = ['In Process' => 'primary', 'On Hold' => 'warning', 'Completed' => 'success', 'Rejected' => 'danger'];
    $color = $map[$status] ?? 'secondary';
@endphp
<span class="badge py-3 px-4 fs-7 badge-light-{{ $color }}">{{ $status }}</span>
