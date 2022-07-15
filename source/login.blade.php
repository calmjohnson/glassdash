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
            <!--BEGIN: Login-->
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
                        <h3 class="pt-4 text-2xl text-center text-slate-900 font-bold">Sign In!</h3>
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
                            <!--Password-->
                            <div x-cloak x-data="{open: false, type: 'password'}" class="mb-4">
                                <label class="relative block mb-2 text-xs font-medium text-slate-800" for="password">
                                    Password
                                    <svg x-show="open === true" @click="open = false, type = 'password'" xmlns="http://www.w3.org/2000/svg" class="absolute inset-y-0 right-0 mt-8 mr-4 cursor-pointer h-5 w-5" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round"><path d="M0 0h24v24H0z" stroke="none"/><path d="m3 3 18 18M10.584 10.587a2 2 0 0 0 2.828 2.83"/><path d="M9.363 5.365A9.466 9.466 0 0 1 12 5c4 0 7.333 2.333 10 7-.778 1.361-1.612 2.524-2.503 3.488m-2.14 1.861C15.726 18.449 13.942 19 12 19c-4 0-7.333-2.333-10-7 1.369-2.395 2.913-4.175 4.632-5.341"/></svg>
                                    <svg x-show="open != true" @click="open = true, type = 'text'" xmlns="http://www.w3.org/2000/svg" class="absolute inset-y-0 right-0 mt-8 mr-4 cursor-pointer h-5 w-5" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round"><path d="M0 0h24v24H0z" stroke="none"/><circle cx="12" cy="12" r="2"/><path d="M22 12c-2.667 4.667-6 7-10 7s-7.333-2.333-10-7c2.667-4.667 6-7 10-7s7.333 2.333 10 7"/></svg>
                                    <input
                                        class="w-full mt-2 px-3 py-2 mb-3 text-xs leading-tight text-slate-600 border border-white bg-transparent rounded-md shadow appearance-none focus:outline-none focus:shadow-outline"
                                        id="passwor"
                                        :type="type"
                                        placeholder="Password"
                                    />
                                </label>
                            </div>
                            <!--Password-->
                            <!--Remember-->
                            <div class="mb-4 flex items-center justify-between">
                                <div class="flex items-center">
                                  <input id="remember-me" name="remember-me" type="checkbox" class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                                  <label for="remember-me" class="ml-2 block text-xs text-slate-900">
                                    Remember me
                                  </label>
                                </div>
                      
                                <div class="text-sm">
                                  <a href="../password-reset" class="font-medium text-xs text-pink-400 hover:text-indigo-300">
                                    Forgot your password?
                                  </a>
                                </div>
                              </div>
                            <!--Remember-->
                            <div class="mb-6 text-center">
                                <button class="w-full px-4 py-2 text-xs font-semibold text-slate-700 bg-white bg-opacity-25 hover:bg-opacity-50 hover:shadow-lg shadow-md rounded-full focus:outline-none focus:shadow-outline" type="button">
                                    Sign In
                                </button>
                            </div>
                            <hr class="mb-6 border-t" />
                            <div class="text-center">
                                <a
                                    class="inline-block text-xs text-sky-400 align-baseline hover:text-sky-600"
                                    href="../register"
                                >
                                    <span class="text-slate-900">Don't have an account?</span> Register!
                                </a>
                            </div>
                        </form>
                    </div>
                    <!--Form-->
                </div>
            </div>
            <!--END: Login-->
        </div>
        <!--Container-->
    </body>
</html>