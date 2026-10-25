<title>@yield('title', 'Dashboard') | {{ config('app.name') }}</title>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="csrf-token" content="{{ csrf_token() }}" />
<link rel="shortcut icon" href="{{ asset('assets/media/logos/favicon.ico') }}" />

{{-- Font --}}
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />

{{-- CSS khusus halaman: @push('vendor-styles') --}}
@stack('vendor-styles')

{{-- CSS global Metronic --}}
<link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />

{{-- CSS custom buatan sendiri: @push('styles') --}}
@stack('styles')
