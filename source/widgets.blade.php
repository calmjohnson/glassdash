@extends('_layouts.main')

@section('body')

<!--BEGIN: Projects Widgets-->
<div class="mb-10 md:mx-40 grid grid-cols-12 gap-6">
    <!--Overview-->
    <div class="col-span-12">
        <h1 class="text-xl font-bold">Projects</h1>
    </div>
    <!--Overview-->
    <div class="col-span-12">
        <div class="rounded-lg shadow-lg bg-white bg-opacity-50">
            <div class="flex items-center py-3 px-2">
                <!--image-->
                <img src="../assets/images/server.jpg" class="h-20 w-24 rounded-lg shadow shadow-pink-200" alt="Project Image">
                <!--image-->
                <!--Info-->
                <div class="ml-4 flex flex-col space-y-1 w-96">
                    <a href="project-overview.html" class="text-sm font-semibold text-slate-900">Server Provisioning</a>
                    <p class="text-xs font-medium text-slate-400">Updated 3hrs ago</p>
                    <div class="flex items-center space-x-3">
                        <span class="text-xs font-medium text-slate-800">29%</span>
                        <div class="relative h-1 w-full rounded-auto bg-slate-300">
                            <span class="absolute inset-0 h-1 w-[29%] rounded-full bg-sky-600"></span>
                        </div>
                    </div>
                </div>
                <!--Info-->
                <!--Members-->
                <div class="ml-auto hidden md:flex -space-x-2">
                    <img class="h-8 w-8 rounded-full ring-2 ring-white" src="../assets/images/profile-pic.jpg" alt="">
                    <img class="h-8 w-8 rounded-full ring-2 ring-white" src="../assets/images/profile-pic-2.jpg" alt="">
                    <img class="h-8 w-8 rounded-full ring-2 ring-white" src="../assets/images/profile-pic-3.jpg" alt="">
                    <img class="h-8 w-8 rounded-full ring-2 ring-white" src="../assets/images/profile-pic-4.jpg" alt="">
                </div>
                <!--Members-->
                <!--Actions-->
                <div x-data="{open : false}" class="ml-auto relative">
                    <div @click="open = ! open" class="cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M0 0h24v24H0z" stroke="none"></path>
                            <circle cx="12" cy="12" r="1"></circle>
                            <circle cx="12" cy="19" r="1"></circle>
                            <circle cx="12" cy="5" r="1"></circle>
                        </svg>
                    </div>
                    <div x-show="open" x-transition="" @click.outside="open = false" class="flex flex-col space-y-3 py-2 px-3 w-[12rem] rounded-md shadow-lg text-sm text-slate-600 absolute right-1 bg-white z-10" style="display: none;">
                        <a href="#" class="hover:text-slate-900 transition-all ease-in-out duration-500">Action</a>
                        <a href="#" class="">Another Action</a>
                        <a href="#" class="">Another Action Pro</a>
                    </div>
                </div>
                <!--Actions-->
            </div>
        </div>
    </div>
    <!--Overview-->
    <!--Projects-->
    <div class="col-span-12 sm:col-span-6">
        <div class="px-5 py-3 shadow rounded-lg bg-opacity-25 bg-white">
                <div class="flex items-center justify-between font-semibold py-3 text-sm text-slate-800">
                    <span>Projects</span>
                    <a href="projects.html" class="text-xs text-blue-600">View All</a>
                </div>
                <div class="flex flex-col space-y-4">
                    <div class="flex items-center">
                        <img src="../assets/images/server.jpg" class="h-14 w-16 rounded-lg shadow-md" alt="">
                        <div class="flex flex-col ml-3">
                            <a href="project-overview.html" class="font-medium text-sm text-slate-800">Server Provisioning</a>
                            <p class="text-xs text-slate-400">Updated 6hrs ago</p>
                        </div>
                        <div x-cloak x-data="{open : false}" class="ml-auto relative">
                            <div @click="open = ! open" class="cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M0 0h24v24H0z" stroke="none"/>
                                    <circle cx="12" cy="12" r="1"/>
                                    <circle cx="12" cy="19" r="1"/>
                                    <circle cx="12" cy="5" r="1"/>
                                </svg>
                            </div>
                            <div x-show="open" x-transition @click.outside="open = false" class="flex flex-col space-y-3 py-2 px-3 w-[12rem] rounded-md shadow-lg text-sm text-slate-600 absolute right-1 bg-white z-10">
                                <a href="#" class="hover:text-slate-900 transition-all ease-in-out duration-500">Action</a>
                                <a href="#" class="">Another Action</a>
                                <a href="#" class="">Another Action Pro</a>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <img src="../assets/images/photoshop.jpg" class="h-14 w-16 rounded-lg shadow-md" alt="">
                        <div class="flex flex-col ml-3">
                            <a href="project-overview.html" class="font-medium text-sm text-slate-800">Photoshop Mockup</a>
                            <p class="text-xs text-slate-400">Updated 2hrs ago</p>
                        </div>
                        <div x-cloak x-data="{open : false}" class="ml-auto relative">
                            <div @click="open = ! open" class="cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M0 0h24v24H0z" stroke="none"/>
                                    <circle cx="12" cy="12" r="1"/>
                                    <circle cx="12" cy="19" r="1"/>
                                    <circle cx="12" cy="5" r="1"/>
                                </svg>
                            </div>
                            <div x-show="open" x-transition @click.outside="open = false" class="flex flex-col space-y-3 py-2 px-3 w-[12rem] rounded-md shadow-lg text-sm text-slate-600 absolute right-1 bg-white z-10">
                                <a href="#" class="hover:text-slate-900 transition-all ease-in-out duration-500">Action</a>
                                <a href="#" class="">Another Action</a>
                                <a href="#" class="">Another Action Pro</a>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <img src="../assets/images/personal-site.jpg" class="h-14 w-16 rounded-lg shadow-md" alt="">
                        <div class="flex flex-col ml-3">
                            <a href="project-overview.html" class="font-medium text-sm text-slate-800">Personal Site</a>
                            <p class="text-xs text-slate-400">Updated 15mins ago</p>
                        </div>
                        <div x-cloak x-data="{open : false}" class="ml-auto relative">
                            <div @click="open = ! open" class="cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M0 0h24v24H0z" stroke="none"/>
                                    <circle cx="12" cy="12" r="1"/>
                                    <circle cx="12" cy="19" r="1"/>
                                    <circle cx="12" cy="5" r="1"/>
                                </svg>
                            </div>
                            <div x-show="open" x-transition @click.outside="open = false" class="flex flex-col space-y-3 py-2 px-3 w-[12rem] rounded-md shadow-lg text-sm text-slate-600 absolute right-1 bg-white z-10">
                                <a href="#" class="hover:text-slate-900 transition-all ease-in-out duration-500">Action</a>
                                <a href="#" class="">Another Action</a>
                                <a href="#" class="">Another Action Pro</a>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <img src="../assets/images/web-dev.jpg" class="h-14 w-16 rounded-lg shadow-md" alt="">
                        <div class="flex flex-col ml-3">
                            <a href="project-overview.html" class="font-medium text-sm text-slate-800">Dashboard Re-design</a>
                            <p class="text-xs text-slate-400">Updated 6hrs ago</p>
                        </div>
                        <div x-cloak x-data="{open : false}" class="ml-auto relative">
                            <div @click="open = ! open" class="cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M0 0h24v24H0z" stroke="none"/>
                                    <circle cx="12" cy="12" r="1"/>
                                    <circle cx="12" cy="19" r="1"/>
                                    <circle cx="12" cy="5" r="1"/>
                                </svg>
                            </div>
                            <div x-show="open" x-transition @click.outside="open = false" class="flex flex-col space-y-3 py-2 px-3 w-[12rem] rounded-md shadow-lg text-sm text-slate-600 absolute right-1 bg-white z-10">
                                <a href="#" class="hover:text-slate-900 transition-all ease-in-out duration-500">Action</a>
                                <a href="#" class="">Another Action</a>
                                <a href="#" class="">Another Action Pro</a>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <!--Projects-->
    <!--Project Overview-->
    <div class="col-span-12 sm:col-span-6">
        <div class="flex flex-col shadow rounded-lg bg-white bg-opacity-50 pb-5">
            <img src="../assets/images/server.jpg" class="rounded-t-lg h-56 sm:h-3/4" alt="">
            <div class="flex items-center mx-5 mt-5">
                <div class="flex flex-col">
                    <h1 class="font-medium text-sm text-slate-900">Server Provisioning</h1>
                    <p class="text-xs text-slate-400">Updated 6hrs ago</p>
                </div>
                <!--Actions-->
                <div x-data="{open : false}" class="ml-auto relative">
                    <div @click="open = ! open" class="cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M0 0h24v24H0z" stroke="none"></path>
                            <circle cx="12" cy="12" r="1"></circle>
                            <circle cx="12" cy="19" r="1"></circle>
                            <circle cx="12" cy="5" r="1"></circle>
                        </svg>
                    </div>
                    <div x-show="open" x-transition="" @click.outside="open = false" class="flex flex-col space-y-3 py-2 px-3 w-[12rem] rounded-md shadow-lg text-sm text-slate-600 absolute right-1 bg-white z-10" style="display: none;">
                        <a href="#" class="hover:text-slate-900 transition-all ease-in-out duration-500">Action</a>
                        <a href="#" class="">Another Action</a>
                        <a href="#" class="">Another Action Pro</a>
                    </div>
                </div>
                <!--Actions-->
            </div>
            <div class="flex items-center mt-5 mx-5 pt-5 border-t border-gray-300">
                <!--Progress-->
                <div class="flex items-center space-x-3 w-4/6">
                    <span class="text-xs font-medium text-slate-800">29%</span>
                    <div class="relative h-1 w-full rounded-auto bg-slate-300">
                        <span class="absolute inset-0 h-1 w-[29%] rounded-full bg-sky-600"></span>
                    </div>
                </div>
                <!--Progress-->
                <!--Members-->
                <div class="ml-auto flex -space-x-2">
                    <img class="h-6 w-6 rounded-full ring-2 ring-white" src="../assets/images/profile-pic.jpg" alt="">
                    <img class="h-6 w-6 rounded-full ring-2 ring-white" src="../assets/images/profile-pic-2.jpg" alt="">
                    <img class="h-6 w-6 rounded-full ring-2 ring-white" src="../assets/images/profile-pic-3.jpg" alt="">
                    <img class="h-6 w-6 rounded-full ring-2 ring-white" src="../assets/images/profile-pic-4.jpg" alt="">
                </div>
                <!--Members-->
            </div>
        </div>
    </div>
    <!--Project Overview-->
</div>
<!--END: Projects Widgets-->
<!--BEGIN: Users Widgets-->
<div class="mb-10 md:mx-40 grid grid-cols-12 gap-6">
    <!--Overview-->
    <div class="col-span-12">
        <h1 class="text-xl font-bold">Users</h1>
    </div>
    <!--Overview-->
    <div class="col-span-12">
        <div class="rounded-lg shadow-lg bg-white bg-opacity-50">
            <div class="flex items-center py-3 px-2">
                <!--image-->
                <img src="../assets/images/profile-pic.jpg" class="h-16 w-16 rounded-full shadow shadow-pink-200" alt="Project Image">
                <!--image-->
                <!--Info-->
                <div class="ml-4 flex flex-col space-y-1 w-96">
                    <h1 class="text-sm font-semibold text-slate-900">Honeychile Ryder</h1>
                    <p class="text-xs font-light text-slate-400">Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                    <div class="flex items-center space-x-1">
                        <span class="h-2 w-2 rounded-full bg-green-600"></span>
                        <span class="text-xs font-semibold text-slate-700">Online</span>
                    </div>
                </div>
                <!--Info-->
                <!--Follow-->
                <div class="ml-auto hidden md:flex">
                    <button class="px-3 py-1 text-xs text-white shadow rounded bg-sky-600">Follow</button>
                </div>
                <!--Follow-->
                <!--Actions-->
                <div x-data="{open : false}" class="ml-auto relative">
                    <div @click="open = ! open" class="cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M0 0h24v24H0z" stroke="none"></path>
                            <circle cx="12" cy="12" r="1"></circle>
                            <circle cx="12" cy="19" r="1"></circle>
                            <circle cx="12" cy="5" r="1"></circle>
                        </svg>
                    </div>
                    <div x-show="open" x-transition="" @click.outside="open = false" class="flex flex-col space-y-3 py-2 px-3 w-[12rem] rounded-md shadow-lg text-sm text-slate-600 absolute right-1 bg-white z-10" style="display: none;">
                        <a href="#" class="hover:text-slate-900 transition-all ease-in-out duration-500">Action</a>
                        <a href="#" class="">Another Action</a>
                        <a href="#" class="">Another Action Pro</a>
                    </div>
                </div>
                <!--Actions-->
            </div>
        </div>
    </div>
    <!--Overview-->
    <!--User Overview-->
    <div class="col-span-12 sm:col-span-6">
        <div class="flex flex-col shadow rounded-lg bg-white bg-opacity-50 pb-5">
            <div class="relative">
                <img src="../assets/images/cover-image.jpg" class="rounded-t-lg h-4/4" alt="">
                <!--Actions-->
                <div x-data="{open : false}" class="ml-auto mt-1 mr-1 absolute top-0 right-0">
                    <div @click="open = ! open" class="cursor-pointer bg-white bg-transparent shadow-lg rounded-full p-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M0 0h24v24H0z" stroke="none"></path>
                            <circle cx="12" cy="12" r="1"></circle>
                            <circle cx="12" cy="19" r="1"></circle>
                            <circle cx="12" cy="5" r="1"></circle>
                        </svg>
                    </div>
                    <div x-show="open" x-transition="" @click.outside="open = false" class="flex flex-col space-y-3 py-2 px-3 w-[12rem] rounded-md shadow-lg text-sm text-slate-600 absolute right-1 bg-white z-10" style="display: none;">
                        <a href="#" class="hover:text-slate-900 transition-all ease-in-out duration-500">Action</a>
                        <a href="#" class="">Another Action</a>
                        <a href="#" class="">Another Action Pro</a>
                    </div>
                </div>
                <!--Actions-->
            </div>
            <div class="flex flex-col justify-center items-center mx-5 mt-5">
                <div class="flex -mt-16">
                    <img src="../assets/images/profile-pic-2.jpg" class="h-20 w-20 z-10 rounded-full border-4 border-white border-opacity-75" alt="">
                </div>
                <div class="flex flex-col justify-center">
                    <h1 class="font-medium text-sm text-slate-900 text-center">Felix Leiter</h1>
                    <p class="text-xs text-slate-400">Intercepted HTTP request</p>
                </div>
                <div class="flex flex-nowrap mt-3 space-x-2">
                    <span class="px-2 py-1 rounded-xl text-semibold text-xs text-slate-700 bg-white bg-opacity-50 shadow-lg">PHP Geng</span>
                    <span class="px-2 py-1 rounded-xl text-semibold text-xs text-slate-700 bg-white bg-opacity-50 shadow-lg">Server Smith</span>
                </div>
            </div>
            <div class="flex items-center mt-5 mx-5 pt-5 border-t border-gray-300">
                <!--Status-->
                <div class="flex items-center space-x-1">
                    <span class="h-2 w-2 rounded-full bg-green-600"></span>
                    <span class="text-xs font-semibold text-slate-700">Online</span>
                </div>
                <!--Status-->
                <!--Members-->
                <div class="ml-auto flex -space-x-2">
                    <button class="px-3 py-1 text-xs text-white shadow rounded bg-sky-600">Follow</button>
                </div>
                <!--Members-->
            </div>
        </div>
    </div>
    <!--User Overview-->
    <!--Users-->
    <div class="col-span-12 sm:col-span-6">
        <div class="px-5 py-3 shadow rounded-lg bg-opacity-25 bg-white">
            <div class="flex flex-col space-y-4">
                <div class="flex items-center">
                    <img src="../assets/images/profile-pic-6.jpg" class="h-14 w-14 rounded-full shadow-md" alt="">
                    <div class="flex flex-col ml-3">
                        <h1 class="font-medium text-sm text-slate-800">Holly Goodhead</h1>
                        <div class="flex items-center space-x-1">
                            <span class="h-2 w-2 rounded-full bg-green-600"></span>
                            <span class="text-xs font-nmedium text-slate-600">Online</span>
                        </div>
                    </div>
                    <div class="ml-auto relative">
                        <button class="px-3 py-1 text-xs text-slate-900 shadow rounded bg-white">Follow</button>
                    </div>
                </div>
                <div class="flex items-center">
                    <img src="../assets/images/profile-pic-5.jpg" class="h-14 w-14 rounded-full shadow-md" alt="">
                    <div class="flex flex-col ml-3">
                        <h1 class="font-medium text-sm text-slate-800">Mary Goodnight</h1>
                        <div class="flex items-center space-x-1">
                            <span class="h-2 w-2 rounded-full bg-green-600"></span>
                            <span class="text-xs font-nmedium text-slate-600">Online</span>
                        </div>
                    </div>
                    <div class="ml-auto relative">
                        <button class="px-3 py-1 text-xs text-slate-900 shadow rounded bg-white">Follow</button>
                    </div>
                </div>
                <div class="flex items-center">
                    <img src="../assets/images/profile-pic-4.jpg" class="h-14 w-14 rounded-full shadow-md" alt="">
                    <div class="flex flex-col ml-3">
                        <h1 class="font-medium text-sm text-slate-800">René Mathis</h1>
                        <div class="flex items-center space-x-1">
                            <span class="h-2 w-2 rounded-full bg-green-600"></span>
                            <span class="text-xs font-nmedium text-slate-600">Online</span>
                        </div>
                    </div>
                    <div class="ml-auto relative">
                        <button class="px-3 py-1 text-xs text-slate-900 shadow rounded bg-white">Follow</button>
                    </div>
                </div>
                <div class="flex items-center">
                    <img src="../assets/images/profile-pic-3.jpg" class="h-14 w-14 rounded-full shadow-md" alt="">
                    <div class="flex flex-col ml-3">
                        <h1 class="font-medium text-sm text-slate-800">Xenia Onatop</h1>
                        <div class="flex items-center space-x-1">
                            <span class="h-2 w-2 rounded-full bg-green-600"></span>
                            <span class="text-xs font-nmedium text-slate-600">Online</span>
                        </div>
                    </div>
                    <div class="ml-auto relative">
                        <button class="px-3 py-1 text-xs text-slate-900 shadow rounded bg-white">Follow</button>
                    </div>
                </div>
                <div class="flex items-center">
                    <img src="../assets/images/profile-pic-2.jpg" class="h-14 w-14 rounded-full shadow-md" alt="">
                    <div class="flex flex-col ml-3">
                        <h1 class="font-medium text-sm text-slate-800">Felix Leiter</h1>
                        <div class="flex items-center space-x-1">
                            <span class="h-2 w-2 rounded-full bg-green-600"></span>
                            <span class="text-xs font-nmedium text-slate-600">Online</span>
                        </div>
                    </div>
                    <div class="ml-auto relative">
                        <button class="px-3 py-1 text-xs text-slate-900 shadow rounded bg-white">Follow</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--User-->
</div>
<!--END: Users Widgets-->
<!--BEGIN: Graphs and Data-->
<div class="mb-10 md:mx-40 grid grid-cols-12 gap-6">
    <!--Overview-->
    <div class="col-span-12">
        <h1 class="text-xl font-bold">Graphs + Data</h1>
    </div>
    <!--Overview-->
    <!--Conversion-->
    <div class="col-span-12">
        @include('_components/conversions')
    </div>
    <!--Conversion-->
    <!--Traffic Channels-->
    <div class="col-span-12 sm:col-span-6">
        <div class="px-2 py-5 h-auto text-center shadow rounded-lg bg-opacity-25 bg-white">
            <h1 class="font-semibold py-3 text-sm text-slate-800">Traffic Channels</h1>
            <div id="traffic_channels" class="h-60"></div>
        </div>
    </div>
    <!--Traffic Channels-->
    <!--General Report-->
    <div class="col-span-12 sm:col-span-6">
        <div class="grid grid-cols-12 gap-1">
            <div class="col-span-12">
                <div class="relative rounded-lg bg-transparent shadow-lg bg-white zoom-in">
                    <div class="box p-5">
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="shadow bg-sky-200 text-sky-400 rounded-full p-1 h-8 w-8" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M0 0h24v24H0z" stroke="none"/>
                                <circle cx="6" cy="19" r="2"/>
                                <circle cx="17" cy="19" r="2"/>
                                <path d="M17 17H6V3H4"/>
                                <path d="m6 5 14 1-1 7H6"/>
                            </svg>                                      
                            <div class="ml-auto text-xs">
                                <div class="flex tooltip cursor-pointer text-white bg-green-700 bg-opacity-75 rounded-2xl px-1"> 33% 
                                    <svg xmlns="http://www.w3.org/2000/svg" class="pl-1 h-4 w-4" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M0 0h24v24H0z" stroke="none"/>
                                        <path d="m6 15 6-6 6 6"/>
                                    </svg>                                              
                                </div>
                            </div>
                        </div>
                        <div class="text-3xl font-bold leading-8 mt-6">5,966</div>
                        <div class="text-base text-gray-600 mt-1">Item Sold</div>
                    </div>
                </div>
            </div>
            <div class="col-span-12">
                <div class="relative rounded-lg bg-transparent shadow-lg bg-white zoom-in">
                    <div class="box p-5">
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="shadow bg-green-200 text-green-400 rounded-full p-1 h-8 w-8" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <rect x="3" y="5" width="18" height="14" rx="3" />
                                <line x1="3" y1="10" x2="21" y2="10" />
                                <line x1="7" y1="15" x2="7.01" y2="15" />
                                <line x1="11" y1="15" x2="13" y2="15" />
                            </svg>                                  
                            <div class="ml-auto text-xs">
                                <div class="flex tooltip cursor-pointer text-white bg-opacity-75 bg-red-700 rounded-2xl px-1"> 17% 
                                    <svg xmlns="http://www.w3.org/2000/svg" class="pl-1 h-4 w-4" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M0 0h24v24H0z" stroke="none"/>
                                        <path d="m6 9 6 6 6-6"/>
                                    </svg>                                              
                                </div>
                            </div>
                        </div>
                        <div class="text-3xl font-bold leading-8 mt-6">2,510</div>
                        <div class="text-base text-gray-600 mt-1">New Orders</div>
                    </div>
                </div>
            </div>
            <div class="col-span-12">
                <div class="relative rounded-lg bg-transparent shadow-lg bg-white zoom-in">
                    <div class="box p-5">
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="shadow bg-pink-200 text-pink-400 rounded-full p-1 h-8 w-8" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M0 0h24v24H0z" stroke="none"/>
                                <path d="M3 21h18M3 7v1a3 3 0 0 0 6 0V7m0 1a3 3 0 0 0 6 0V7m0 1a3 3 0 0 0 6 0V7H3l2-4h14l2 4M5 21V11M19 21V11M9 21v-4a2 2 0 0 1 2-2h2a2 2 0 0 1 2 2v4"/>
                            </svg>
                            <div class="ml-auto text-xs">
                                <div class="flex tooltip cursor-pointer text-white bg-green-700 bg-opacity-75 rounded-2xl px-1"> 21% 
                                    <svg xmlns="http://www.w3.org/2000/svg" class="pl-1 h-4 w-4" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M0 0h24v24H0z" stroke="none"/>
                                        <path d="m6 15 6-6 6 6"/>
                                    </svg>                                              
                                </div>
                            </div>
                        </div>
                        <div class="text-3xl font-bold leading-8 mt-6">3,009</div>
                        <div class="text-base text-gray-600 mt-1">Total Products</div>
                    </div>
                </div>
            </div>
            <div class="col-span-12">
                <div class="relative rounded-lg bg-transparent shadow-lg bg-white zoom-in">
                    <div class="box p-5">
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="shadow bg-opacity-50 bg-orange-200 text-orange-400 rounded-full p-1 h-8 w-8" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M0 0h24v24H0z" stroke="none"/>
                                <circle cx="9" cy="7" r="4"/>
                                <path d="M3 21v-2a4 4 0 0 1 4-4h4a4 4 0 0 1 4 4v2M16 3a4 4 0 0 1 0 8M21 21v-2a4 4 0 0 0-3-4"/>
                            </svg>
                            <div class="ml-auto text-xs">
                                <div class="flex tooltip cursor-pointer text-white bg-green-700 bg-opacity-75 rounded-2xl px-1"> 25% 
                                    <svg xmlns="http://www.w3.org/2000/svg" class="pl-1 h-4 w-4" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M0 0h24v24H0z" stroke="none"/>
                                        <path d="m6 15 6-6 6 6"/>
                                    </svg>                                              
                                </div>
                            </div>
                        </div>
                        <div class="text-3xl font-bold leading-8 mt-6">175,510</div>
                        <div class="text-base text-gray-600 mt-1">Unique Visitors</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--General Report-->
    <!--Sales-->
    <div class="col-span-12">
        @include('_components/sales')
    </div>
    <!--Sales-->
</div>
<!--END: Graphs and Data-->
<!--BEGIN: Timeline and Activity-->
<div class="mb-10 md:mx-40 grid grid-cols-12 gap-6">
    <!--Overview-->
    <div class="col-span-12">
        <h1 class="text-xl font-bold">Timeline/Activity</h1>
    </div>
    <!--Overview-->
    <!--Activity Timeline-->
    <div class="col-span-12 sm:col-span-6">
        <div class="px-5 py-3 shadow rounded-lg bg-opacity-25 bg-white">
            <div class="flex items-center justify-between font-semibold py-3 text-sm text-slate-800">
                <span>Activity Timeline</span>
                <a class="text-xs text-blue-600">View All</a>
            </div>
            <div class="flex flex-col space-y-4">
                <div class="relative flex items-center">
                    <span class="absolute top-6 left-5 h-20 w-px border-l border-slate-400"></span>
                    <div class="relative">
                        <div class="w-10">
                            <img src="../assets/images/profile-pic-3.jpg" class="h-10 w-10 z-10 rounded-full shadow-md" alt="">
                        </div>
                        <span class="absolute bottom-0 right-0 h-2 w-2 rounded-full bg-green-500"></span>
                    </div>
                    <div class="flex flex-col ml-3 space-y-1">
                        <h1 class="font-medium text-xs text-slate-900">Xenia Onatop</h1>
                        <p class="text-xs text-slate-600">Attended to a customer issue regarding their website being down.</p>
                        <p class="text-xs text-slate-400">16 mins ago</p>
                    </div>
                </div>
                <div class="relative flex items-center">
                    <span class="absolute top-6 left-5 h-20 w-px border-l border-slate-400"></span>
                    <div class="relative">
                        <div class="w-10">
                            <img src="../assets/images/profile-pic-5.jpg" class="h-10 w-10 z-10 rounded-full shadow-md" alt="">
                        </div>
                        <span class="absolute bottom-0 right-0 h-2 w-2 rounded-full bg-green-500"></span>
                    </div>
                    <div class="flex flex-col ml-3 space-y-1">
                        <h1 class="font-medium text-xs text-slate-900">Mary Goodnight</h1>
                        <p class="text-xs text-slate-600">Pushed new features to production.</p>
                        <p class="text-xs text-slate-400">25 mins ago</p>
                    </div>
                </div>
                <div class="relative flex items-center">
                    <div class="relative">
                        <div class="w-10">
                            <img src="../assets/images/profile-pic-6.jpg" class="h-10 w-10 z-10 rounded-full shadow-md" alt="">
                        </div>
                        <span class="absolute bottom-0 right-0 h-2 w-2 rounded-full bg-green-500"></span>
                    </div>
                    <div class="flex flex-col ml-3 space-y-1">
                        <h1 class="font-medium text-xs text-slate-900">Holly Goodhead</h1>
                        <p class="text-xs text-slate-600">Lauched new product for client.</p>
                        <p class="text-xs text-slate-400">1 hr ago</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Activity Timeline-->
    <!--Notifivation Timeline-->
    <div class="col-span-12 sm:col-span-6">
        <div class="px-5 py-3 shadow rounded-lg bg-opacity-25 bg-white">
            <div class="flex items-center justify-between font-semibold py-3 text-sm text-slate-800">
                <span>Notification Timelime</span>
                <a class="text-xs text-blue-600">View All</a>
            </div>
            <div class="flex flex-col space-y-4">
                <div class="flex items-center mt-5">
                    <img src="../assets/images/profile-pic-2.jpg" class="h-10 w-10 rounded-full shadow-md" alt="">
                    <div class="flex flex-col ml-3 space-y-1">
                        <h1 class="font-medium text-xs text-slate-900">Felix Leiter</h1>
                        <p class="text-xs text-slate-600">Intercepted HTTP request</p>
                        <p class="text-xs font-light text-slate-500">60 secs ago</p>
                    </div>
                </div>
                <div class="flex items-center mt-5">
                    <img src="../assets/images/profile-pic-5.jpg" class="h-10 w-10 rounded-full shadow-md" alt="">
                    <div class="flex flex-col ml-3 space-y-1">
                        <h1 class="font-medium text-xs text-slate-900">Mary Goodnight</h1>
                        <p class="text-xs text-slate-600">Exploited SQL vuneralbility</p>
                        <p class="text-xs font-light text-slate-500">45 mins ago</p>
                    </div>
                </div>
                <div class="flex items-center mt-5">
                    <img src="../assets/images/profile-pic-4.jpg" class="h-10 w-10 rounded-full shadow-md" alt="">
                    <div class="flex flex-col ml-3 space-y-1">
                        <div class="font-medium text-xs text-slate-900">René Mathis</div>
                        <p class="text-xs text-slate-600">Refactored UI</p>
                        <p class="text-xs font-light text-slate-500">2 mins ago</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Notification Timeline-->
</div>
<!--END: Timeline and Activity-->
@endsection
