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
        <!--Container-->
        <div class="container mx-auto">
            <!--BEGIN: Password reset -->
            <div class="flex justify-center px-3 my-12">
                <div class="w-full xl:w-3/4 lg:w-11/12 flex">
                    <!--Cover-->
                    <div class="w-full h-auto bg-gray-400 hidden lg:block lg:w-5/12 bg-cover rounded-l-lg" style="background-image: url('../assets/images/404.png')">
                        <div class="h-full w-full bg-white bg-opacity-25 filter backdrop-blur rounded-l-lg">
                        </div>
                    </div>
                    <!--Cover-->
                    <!--Form-->
                    <div class="w-full py-24 lg:w-7/12 bg-white bg-opacity-25 filter backdrop-blur-md p-5 rounded-lg lg:rounded-l-none">
                        <h3 class="pt-4 text-6xl text-center text-slate-900 font-black">Error 404</h3>
                        <p class="text-center text-xs text-slate-600">You might have lost your way, but the part is still accessible to you.</p>
                        <form class="px-3 lg:px-8 pt-6 pb-8 mb-4 rounded" action="#" method="post">
                            <div class="mb-6 text-center">
                                <a href="../" class="flex justify-center items-center space-x-2 w-full px-4 py-2 text-xs font-semibold text-slate-700 bg-white bg-opacity-25 hover:bg-opacity-50 hover:shadow-lg shadow-md rounded-full focus:outline-none focus:shadow-outline" type="button">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round"><path d="M0 0h24v24H0z" stroke="none"/><path d="M5 12H3l9-9 9 9h-2M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2v-7"/><path d="M9 21v-6a2 2 0 0 1 2-2h2a2 2 0 0 1 2 2v6"/></svg>
                                    <span>Return To Dashboard</span>
                                </a>
                            </div>
                        </form>
                    </div>
                    <!--Form-->
                </div>
            </div>
            <!--END: Password reset-->
        </div>
        <!--Container-->
    </body>
</html>