<script>var hostUrl = "{{ asset('assets') }}/";</script>

{{-- JS global Metronic --}}
<script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
<script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>

{{-- Plugin khusus halaman: @push('vendor-scripts') --}}
@stack('vendor-scripts')

{{-- Script custom halaman: @push('scripts') --}}
@stack('scripts')
