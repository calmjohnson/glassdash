<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
    <!--BEGIN: Head-->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="{{ '../assets/images/Glass_icon.svg' }}" type="image/x-icon" />
        <link rel="canonical" href="{{ $page->getUrl() }}">
        <meta name="description" content="Glassdash admin is a glassmorphism html template, it's beautifully coded and ready to be used in any application.">
        <meta name="keywords" content="admin template, Glassdash admin template, dashboard template, glassmorphism admin template, responsive admin template, web app">
        <meta name="author" content="Nonso Mbah">
        <title>{{ $page->title }} | {{ $page->description }}</title>

        <!--BEGIN: Assets-->
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
        <script defer src="{{ mix('js/main.js', 'assets/build') }}"></script>
        <!--END: Assets-->
    </head>
    <!--END: Head-->
    <body class="app bg-black" style="background-image: url({{'../assets/images/bg.jpg'}});">
        @include('_partials.mobile-menu')
        <!--BEGIN: Main-->
        <main class="flex m-2 md:m-10 min-h-screen rounded-3xl bg-white filter backdrop-blur shadow-lg bg-opacity-10 border border-white">
        @include('_partials.side-menu')
        <!--BEGIN: Content-->
        <div class="px-4 flex-1 overflow-x-hidden">
        @include('_partials.top-menu')
        @yield('body')
        </div>
        <!--END: Content-->
        </main>
        <!--END: Main-->
    </body>
</html>
