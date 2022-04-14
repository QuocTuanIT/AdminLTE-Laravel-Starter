<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    {{-- <title>{{ setting('site_title') }} - {{ setting('site_name') }}</title> --}}
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    @stack('styles')
    @livewireStyles
</head>

<body
    class="hold-transition sidebar-mini dark-mode1 layout-fixed layout-footer-fixed
            {{-- {{ setting('sidebar_collapse') ? 'sidebar-collapse' : '' }}
            {{ setting('layout-fixed') ? 'layout-fixed' : '' }}
            {{ setting('layout-footer-fixed') ? 'layout-footer-fixed' : '' }} "--}}

            ">
    <div class="wrapper">
        @include('admin.partials.navbar')
        @include('admin.partials.sidebar')
        <div class="content-wrapper">
            {{ $slot }}
        </div>
        {{-- @include('admin.partials.aside') --}}
        @include('admin.partials.footer')
    </div>
    <!-- REQUIRED SCRIPTS -->
    <script src="/js/app.js"></script>
    <script src="/js/backend.js"></script>
    @stack('js')
    @stack('before-livewire-scripts')
    @livewireScripts
    @stack('after-livewire-scripts')
    @stack('alpine-plugins')
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</body>

</html>
