{{--
    Pemakaian:
    <x-card title="Judul" subtitle="Keterangan">
        <x-slot:toolbar> <a class="btn btn-sm btn-light">Aksi</a> </x-slot:toolbar>
        Isi card...
    </x-card>
--}}
@props(['title' => null, 'subtitle' => null])

<div {{ $attributes->merge(['class' => 'card card-flush']) }}>
    @if ($title || isset($toolbar))
        <div class="card-header pt-7">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bold text-gray-800">{{ $title }}</span>
                @if ($subtitle)
                    <span class="text-gray-500 mt-1 fw-semibold fs-6">{{ $subtitle }}</span>
                @endif
            </h3>
            @isset($toolbar)
                <div class="card-toolbar">{{ $toolbar }}</div>
            @endisset
        </div>
    @endif

    <div class="card-body pt-6">{{ $slot }}</div>
</div>
