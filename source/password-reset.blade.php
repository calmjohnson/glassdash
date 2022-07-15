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
                    <div class="w-full h-auto bg-gray-400 hidden lg:block lg:w-5/12 bg-cover rounded-l-lg" style="background-image: url('../assets/images/cover.jpg')">
                        <div class="h-full w-full bg-white bg-opacity-25 filter backdrop-blur rounded-l-lg">
                        </div>
                    </div>
                    <!--Cover-->
                    <!--Form-->
                    <div class="w-full lg:w-7/12 bg-white bg-opacity-25 filter backdrop-blur-md p-5 rounded-lg lg:rounded-l-none">
                        <h3 class="pt-4 text-2xl text-center text-slate-900 font-bold">Password reset</h3>
                        <p class="text-center text-xs text-slate-600">Enter your email to get a password reset link.</p>
                        <form class="px-3 lg:px-8 pt-6 pb-8 mb-4 rounded" action="#" method="post">
                            <!--Email-->
                            <div class="mb-4">
                                <label class="block mb-2 text-xs font-medium text-slate-800" for="email">
                                    Email
                                </label>
                                <input
                                    class="w-full px-3 py-2 mb-3 text-xs leading-tight text-slate-600 border border-white bg-transparent rounded-md shadow appearance-none focus:outline-none focus:shadow-outline"
                                    id="email"
                                    type="email"
                                    placeholder="Email"
                                />
                            </div>
                            <!--Email-->     
                            <div class="mb-6 text-center">
                                <button class="w-full px-4 py-2 text-xs font-semibold text-slate-700 bg-white bg-opacity-25 hover:bg-opacity-50 hover:shadow-lg shadow-md rounded-full focus:outline-none focus:shadow-outline" type="button">
                                    Reset Password
                                </button>
                            </div>
                            <hr class="mb-6 border-t" />
                            <div class="text-center">
                                <a
                                    class="inline-block text-xs text-sky-400 align-baseline hover:text-sky-600"
                                    href="../login"
                                >
                                    <span class="text-slate-900">Remember your password?</span> Login!
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