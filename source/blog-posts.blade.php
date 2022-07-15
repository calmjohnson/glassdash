@extends('_layouts.main')

@section('body')

<!--BEGIN: Blog Posts-->
                    <!--New Post-->
                    <div class="mb-5 flex justify-end">
                        <a href="blog-new.html" class="px-3 md:px-4 py-1 font-normal text-slate-700 bg-white bg-opacity-25 rounded-lg">
                            New Post
                        </a>
                    </div>
                    <!--New Post-->
                    <!--Posts-->
                    <div class="mb-10 grid grid-cols-12 gap-6">
                        <!--Post-->
                        <div class="col-span-12 md:col-span-4">
                            <div class="flex flex-col shadow rounded-lg bg-white bg-opacity-50 pb-5">
                                <!--Poster-->
                                <div class="flex items-center justify-between border-b border-gray-300">
                                    <div class="flex items-center space-x-2 p-2">
                                        <img src="../assets/images/profile-pic-3.jpg" class="h-14 w-14 rounded-full shadow" alt="">
                                        <div class="flex flex-col justify-center">
                                            <h1 class="font-medium text-sm text-slate-900">Xenia Onatop</h1>
                                            <p class="text-xs text-sky-800">
                                                <a href="#">Business</a> 
                                                <span class="text-slate-500">~ 50 minutes ago</span>
                                            </p>
                                        </div>
                                    </div>
                                    <!--Actions-->
                                    <div x-data="{open : false}" class="ml-auto mr-1 relative">
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
                                <!--Poster-->
                                <!--Featured Image-->
                                <div class="border-b border-gray-300">
                                    <div class="flex flex-col px-2 py-4">
                                        <img src="../assets/images/cover-image.jpg" class="h-4/4" alt="">
                                        <a href="blog-view.html" class="mt-3">
                                            <h1 class="text-sm font-medium text-slate-900 leading-tight">What is Lorem Ipsum and how do you learn it?</h1>
                                        </a>
                                        <p class="mt-1 text-xs text-slate-600 text-left">
                                            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem 
                                        </p>
                                    </div>
                                </div>
                                <!--Featured Image-->
                                <!--Activities-->
                                <div class="border-b border-gray-300">
                                    <div class="flex items-center justify-between px-2 py-4">
                                        <!--Users-->
                                        <div class="flex -space-x-2">
                                            <img class="inline-block h-6 w-6 rounded-full ring-2 ring-white" src="../assets/images/profile-pic.jpg" alt="">
                                            <img class="inline-block h-6 w-6 rounded-full ring-2 ring-white" src="../assets/images/profile-pic-2.jpg" alt="">
                                            <img class="inline-block h-6 w-6 rounded-full ring-2 ring-white" src="../assets/images/profile-pic-3.jpg" alt="">
                                            <img class="inline-block h-6 w-6 rounded-full ring-2 ring-white" src="../assets/images/profile-pic-4.jpg" alt="">
                                            <div class="flex justify-center items-center h-6 w-6 rounded-full ring-2 ring-white bg-slate-400 text-[0.60rem] text-slate-900">+5</div>
                                        </div>
                                        <!--Users-->
                                        <!--Actions-->
                                        <div class="flex items-center space-x-2">
                                            <button class="flex items-center space-x-1 text-xs px-2 py-1 bg-white bg-opacity-50 rounded-md">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="text-pink-600 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"></path>
                                                </svg>
                                                <span>25</span>
                                            </button>
                                            <button class="flex items-center space-x-1 text-xs px-2 py-1 bg-white bg-opacity-50 rounded-md">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-sky-500" viewBox="0 0 20 20" fill="currentColor">
                                                    <path d="M15 8a3 3 0 10-2.977-2.63l-4.94 2.47a3 3 0 100 4.319l4.94 2.47a3 3 0 10.895-1.789l-4.94-2.47a3.027 3.027 0 000-.74l4.94-2.47C13.456 7.68 14.19 8 15 8z"></path>
                                                </svg>
                                                <span>12</span>
                                            </button>
                                        </div>
                                        <!--Actions-->
                                    </div>
                                </div>
                                <!--Activities-->
                                <!--Comments-->
                                <div class="flex flex-col space-y-1">
                                    <div class="flex items-center justify-between px-2 py-4">
                                        <!--Comments and Views-->
                                        <div class="flex items-center text-xs text-slate-500 space-x-2">
                                            <span>Comments: 46</span>
                                            <span>Views: 113k</span>
                                        </div>
                                        <!--Comments and Views-->
                                        <!--Likes-->
                                        <div class="flex items-center text-xs text-slate-500 space-x-2">
                                            <span>Likes: 464K</span>
                                        </div>
                                        <!--Like-->
                                    </div>
                                    <!--Comment-->
                                    <div class="px-2 flex items-center space-x-3">
                                        <img class="inline-block h-6 w-6 rounded-full ring-2 ring-white" src="../assets/images/profile-pic.jpg" alt="">
                                        <label class="relative block mb-2 text-xs font-medium text-slate-800" for="password">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="absolute inset-y-0 right-0 mt-4 mr-2 cursor-pointer h-5 w-5 text-slate-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M14.828 14.828a4 4 0 0 1-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0z"/></svg>
                                            <input class="w-full mt-2 px-3 py-2 text-xs leading-tight text-slate-600 border border-white bg-transparent rounded-full shadow appearance-none focus:outline-none focus:shadow-outline" placeholder="Comment" type="text">
                                        </label>
                                    </div>
                                    <!--Comment-->
                                </div>
                                <!--Comments-->
                            </div>
                        </div>
                        <!--Post-->
                        <!--Post-->
                        <div class="col-span-12 md:col-span-4">
                            <div class="flex flex-col shadow rounded-lg bg-white bg-opacity-50 pb-5">
                                <!--Poster-->
                                <div class="flex items-center justify-between border-b border-gray-300">
                                    <div class="flex items-center space-x-2 p-2">
                                        <img src="../assets/images/profile-pic-2.jpg" class="h-14 w-14 rounded-full shadow" alt="">
                                        <div class="flex flex-col justify-center">
                                            <h1 class="font-medium text-sm text-slate-900">Felix Leiter</h1>
                                            <p class="text-xs text-sky-800">
                                                <a href="#">Business</a> 
                                                <span class="text-slate-500">~ 50 minutes ago</span>
                                            </p>
                                        </div>
                                    </div>
                                    <!--Actions-->
                                    <div x-data="{open : false}" class="ml-auto mr-1 relative">
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
                                <!--Poster-->
                                <!--Featured Image-->
                                <div class="border-b border-gray-300">
                                    <div class="flex flex-col px-2 py-4">
                                        <img src="../assets/images/cover-image.jpg" class="h-4/4" alt="">
                                        <a href="blog-view.html" class="mt-3">
                                            <h1 class="text-sm font-medium text-slate-900 leading-tight">What is Lorem Ipsum and how do you learn it?</h1>
                                        </a>
                                        <p class="mt-1 text-xs text-slate-600 text-left">
                                            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem 
                                        </p>
                                    </div>
                                </div>
                                <!--Featured Image-->
                                <!--Activities-->
                                <div class="border-b border-gray-300">
                                    <div class="flex items-center justify-between px-2 py-4">
                                        <!--Users-->
                                        <div class="flex -space-x-2">
                                            <img class="inline-block h-6 w-6 rounded-full ring-2 ring-white" src="../assets/images/profile-pic.jpg" alt="">
                                            <img class="inline-block h-6 w-6 rounded-full ring-2 ring-white" src="../assets/images/profile-pic-2.jpg" alt="">
                                            <img class="inline-block h-6 w-6 rounded-full ring-2 ring-white" src="../assets/images/profile-pic-3.jpg" alt="">
                                            <img class="inline-block h-6 w-6 rounded-full ring-2 ring-white" src="../assets/images/profile-pic-4.jpg" alt="">
                                            <div class="flex justify-center items-center h-6 w-6 rounded-full ring-2 ring-white bg-slate-400 text-[0.60rem] text-slate-900">+5</div>
                                        </div>
                                        <!--Users-->
                                        <!--Actions-->
                                        <div class="flex items-center space-x-2">
                                            <button class="flex items-center space-x-1 text-xs px-2 py-1 bg-white bg-opacity-50 rounded-md">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="text-pink-600 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"></path>
                                                </svg>
                                                <span>25</span>
                                            </button>
                                            <button class="flex items-center space-x-1 text-xs px-2 py-1 bg-white bg-opacity-50 rounded-md">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-sky-500" viewBox="0 0 20 20" fill="currentColor">
                                                    <path d="M15 8a3 3 0 10-2.977-2.63l-4.94 2.47a3 3 0 100 4.319l4.94 2.47a3 3 0 10.895-1.789l-4.94-2.47a3.027 3.027 0 000-.74l4.94-2.47C13.456 7.68 14.19 8 15 8z"></path>
                                                </svg>
                                                <span>12</span>
                                            </button>
                                        </div>
                                        <!--Actions-->
                                    </div>
                                </div>
                                <!--Activities-->
                                <!--Comments-->
                                <div class="flex flex-col space-y-1">
                                    <div class="flex items-center justify-between px-2 py-4">
                                        <!--Comments and Views-->
                                        <div class="flex items-center text-xs text-slate-500 space-x-2">
                                            <span>Comments: 46</span>
                                            <span>Views: 113k</span>
                                        </div>
                                        <!--Comments and Views-->
                                        <!--Likes-->
                                        <div class="flex items-center text-xs text-slate-500 space-x-2">
                                            <span>Likes: 464K</span>
                                        </div>
                                        <!--Like-->
                                    </div>
                                    <!--Comment-->
                                    <div class="px-2 flex items-center space-x-3">
                                        <img class="inline-block h-6 w-6 rounded-full ring-2 ring-white" src="../assets/images/profile-pic.jpg" alt="">
                                        <label class="relative block mb-2 text-xs font-medium text-slate-800" for="password">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="absolute inset-y-0 right-0 mt-4 mr-2 cursor-pointer h-5 w-5 text-slate-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M14.828 14.828a4 4 0 0 1-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0z"/></svg>
                                            <input class="w-full mt-2 px-3 py-2 text-xs leading-tight text-slate-600 border border-white bg-transparent rounded-full shadow appearance-none focus:outline-none focus:shadow-outline" placeholder="Comment" type="text">
                                        </label>
                                    </div>
                                    <!--Comment-->
                                </div>
                                <!--Comments-->
                            </div>
                        </div>
                        <!--Post-->
                        <!--Post-->
                        <div class="col-span-12 md:col-span-4">
                            <div class="flex flex-col shadow rounded-lg bg-white bg-opacity-50 pb-5">
                                <!--Poster-->
                                <div class="flex items-center justify-between border-b border-gray-300">
                                    <div class="flex items-center space-x-2 p-2">
                                        <img src="../assets/images/profile-pic-6.jpg" class="h-14 w-14 rounded-full shadow" alt="">
                                        <div class="flex flex-col justify-center">
                                            <h1 class="font-medium text-sm text-slate-900">Holly Goodhead</h1>
                                            <p class="text-xs text-sky-800">
                                                <a href="#">Business</a> 
                                                <span class="text-slate-500">~ 50 minutes ago</span>
                                            </p>
                                        </div>
                                    </div>
                                    <!--Actions-->
                                    <div x-data="{open : false}" class="ml-auto mr-1 relative">
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
                                <!--Poster-->
                                <!--Featured Image-->
                                <div class="border-b border-gray-300">
                                    <div class="flex flex-col px-2 py-4">
                                        <img src="../assets/images/cover-image.jpg" class="h-4/4" alt="">
                                        <a href="blog-view.html" class="mt-3">
                                            <h1 class="text-sm font-medium text-slate-900 leading-tight">What is Lorem Ipsum and how do you learn it?</h1>
                                        </a>
                                        <p class="mt-1 text-xs text-slate-600 text-left">
                                            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem 
                                        </p>
                                    </div>
                                </div>
                                <!--Featured Image-->
                                <!--Activities-->
                                <div class="border-b border-gray-300">
                                    <div class="flex items-center justify-between px-2 py-4">
                                        <!--Users-->
                                        <div class="flex -space-x-2">
                                            <img class="inline-block h-6 w-6 rounded-full ring-2 ring-white" src="../assets/images/profile-pic.jpg" alt="">
                                            <img class="inline-block h-6 w-6 rounded-full ring-2 ring-white" src="../assets/images/profile-pic-2.jpg" alt="">
                                            <img class="inline-block h-6 w-6 rounded-full ring-2 ring-white" src="../assets/images/profile-pic-3.jpg" alt="">
                                            <img class="inline-block h-6 w-6 rounded-full ring-2 ring-white" src="../assets/images/profile-pic-4.jpg" alt="">
                                            <div class="flex justify-center items-center h-6 w-6 rounded-full ring-2 ring-white bg-slate-400 text-[0.60rem] text-slate-900">+5</div>
                                        </div>
                                        <!--Users-->
                                        <!--Actions-->
                                        <div class="flex items-center space-x-2">
                                            <button class="flex items-center space-x-1 text-xs px-2 py-1 bg-white bg-opacity-50 rounded-md">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="text-pink-600 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"></path>
                                                </svg>
                                                <span>25</span>
                                            </button>
                                            <button class="flex items-center space-x-1 text-xs px-2 py-1 bg-white bg-opacity-50 rounded-md">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-sky-500" viewBox="0 0 20 20" fill="currentColor">
                                                    <path d="M15 8a3 3 0 10-2.977-2.63l-4.94 2.47a3 3 0 100 4.319l4.94 2.47a3 3 0 10.895-1.789l-4.94-2.47a3.027 3.027 0 000-.74l4.94-2.47C13.456 7.68 14.19 8 15 8z"></path>
                                                </svg>
                                                <span>12</span>
                                            </button>
                                        </div>
                                        <!--Actions-->
                                    </div>
                                </div>
                                <!--Activities-->
                                <!--Comments-->
                                <div class="flex flex-col space-y-1">
                                    <div class="flex items-center justify-between px-2 py-4">
                                        <!--Comments and Views-->
                                        <div class="flex items-center text-xs text-slate-500 space-x-2">
                                            <span>Comments: 46</span>
                                            <span>Views: 113k</span>
                                        </div>
                                        <!--Comments and Views-->
                                        <!--Likes-->
                                        <div class="flex items-center text-xs text-slate-500 space-x-2">
                                            <span>Likes: 464K</span>
                                        </div>
                                        <!--Like-->
                                    </div>
                                    <!--Comment-->
                                    <div class="px-2 flex items-center space-x-3">
                                        <img class="inline-block h-6 w-6 rounded-full ring-2 ring-white" src="../assets/images/profile-pic.jpg" alt="">
                                        <label class="relative block mb-2 text-xs font-medium text-slate-800" for="password">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="absolute inset-y-0 right-0 mt-4 mr-2 cursor-pointer h-5 w-5 text-slate-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M14.828 14.828a4 4 0 0 1-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0z"/></svg>
                                            <input class="w-full mt-2 px-3 py-2 text-xs leading-tight text-slate-600 border border-white bg-transparent rounded-full shadow appearance-none focus:outline-none focus:shadow-outline" placeholder="Comment" type="text">
                                        </label>
                                    </div>
                                    <!--Comment-->
                                </div>
                                <!--Comments-->
                            </div>
                        </div>
                        <!--Post-->
                        <!--Post-->
                        <div class="col-span-12 md:col-span-4">
                            <div class="flex flex-col shadow rounded-lg bg-white bg-opacity-50 pb-5">
                                <!--Poster-->
                                <div class="flex items-center justify-between border-b border-gray-300">
                                    <div class="flex items-center space-x-2 p-2">
                                        <img src="../assets/images/profile-pic-3.jpg" class="h-14 w-14 rounded-full shadow" alt="">
                                        <div class="flex flex-col justify-center">
                                            <h1 class="font-medium text-sm text-slate-900">Xenia Onatop</h1>
                                            <p class="text-xs text-sky-800">
                                                <a href="#">Business</a> 
                                                <span class="text-slate-500">~ 50 minutes ago</span>
                                            </p>
                                        </div>
                                    </div>
                                    <!--Actions-->
                                    <div x-data="{open : false}" class="ml-auto mr-1 relative">
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
                                <!--Poster-->
                                <!--Featured Image-->
                                <div class="border-b border-gray-300">
                                    <div class="flex flex-col px-2 py-4">
                                        <img src="../assets/images/cover-image.jpg" class="h-4/4" alt="">
                                        <a href="blog-view.html" class="mt-3">
                                            <h1 class="text-sm font-medium text-slate-900 leading-tight">What is Lorem Ipsum and how do you learn it?</h1>
                                        </a>
                                        <p class="mt-1 text-xs text-slate-600 text-left">
                                            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem 
                                        </p>
                                    </div>
                                </div>
                                <!--Featured Image-->
                                <!--Activities-->
                                <div class="border-b border-gray-300">
                                    <div class="flex items-center justify-between px-2 py-4">
                                        <!--Users-->
                                        <div class="flex -space-x-2">
                                            <img class="inline-block h-6 w-6 rounded-full ring-2 ring-white" src="../assets/images/profile-pic.jpg" alt="">
                                            <img class="inline-block h-6 w-6 rounded-full ring-2 ring-white" src="../assets/images/profile-pic-2.jpg" alt="">
                                            <img class="inline-block h-6 w-6 rounded-full ring-2 ring-white" src="../assets/images/profile-pic-3.jpg" alt="">
                                            <img class="inline-block h-6 w-6 rounded-full ring-2 ring-white" src="../assets/images/profile-pic-4.jpg" alt="">
                                            <div class="flex justify-center items-center h-6 w-6 rounded-full ring-2 ring-white bg-slate-400 text-[0.60rem] text-slate-900">+5</div>
                                        </div>
                                        <!--Users-->
                                        <!--Actions-->
                                        <div class="flex items-center space-x-2">
                                            <button class="flex items-center space-x-1 text-xs px-2 py-1 bg-white bg-opacity-50 rounded-md">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="text-pink-600 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"></path>
                                                </svg>
                                                <span>25</span>
                                            </button>
                                            <button class="flex items-center space-x-1 text-xs px-2 py-1 bg-white bg-opacity-50 rounded-md">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-sky-500" viewBox="0 0 20 20" fill="currentColor">
                                                    <path d="M15 8a3 3 0 10-2.977-2.63l-4.94 2.47a3 3 0 100 4.319l4.94 2.47a3 3 0 10.895-1.789l-4.94-2.47a3.027 3.027 0 000-.74l4.94-2.47C13.456 7.68 14.19 8 15 8z"></path>
                                                </svg>
                                                <span>12</span>
                                            </button>
                                        </div>
                                        <!--Actions-->
                                    </div>
                                </div>
                                <!--Activities-->
                                <!--Comments-->
                                <div class="flex flex-col space-y-1">
                                    <div class="flex items-center justify-between px-2 py-4">
                                        <!--Comments and Views-->
                                        <div class="flex items-center text-xs text-slate-500 space-x-2">
                                            <span>Comments: 46</span>
                                            <span>Views: 113k</span>
                                        </div>
                                        <!--Comments and Views-->
                                        <!--Likes-->
                                        <div class="flex items-center text-xs text-slate-500 space-x-2">
                                            <span>Likes: 464K</span>
                                        </div>
                                        <!--Like-->
                                    </div>
                                    <!--Comment-->
                                    <div class="px-2 flex items-center space-x-3">
                                        <img class="inline-block h-6 w-6 rounded-full ring-2 ring-white" src="../assets/images/profile-pic.jpg" alt="">
                                        <label class="relative block mb-2 text-xs font-medium text-slate-800" for="password">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="absolute inset-y-0 right-0 mt-4 mr-2 cursor-pointer h-5 w-5 text-slate-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M14.828 14.828a4 4 0 0 1-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0z"/></svg>
                                            <input class="w-full mt-2 px-3 py-2 text-xs leading-tight text-slate-600 border border-white bg-transparent rounded-full shadow appearance-none focus:outline-none focus:shadow-outline" placeholder="Comment" type="text">
                                        </label>
                                    </div>
                                    <!--Comment-->
                                </div>
                                <!--Comments-->
                            </div>
                        </div>
                        <!--Post-->
                        <!--Post-->
                        <div class="col-span-12 md:col-span-4">
                            <div class="flex flex-col shadow rounded-lg bg-white bg-opacity-50 pb-5">
                                <!--Poster-->
                                <div class="flex items-center justify-between border-b border-gray-300">
                                    <div class="flex items-center space-x-2 p-2">
                                        <img src="../assets/images/profile-pic-2.jpg" class="h-14 w-14 rounded-full shadow" alt="">
                                        <div class="flex flex-col justify-center">
                                            <h1 class="font-medium text-sm text-slate-900">Felix Leiter</h1>
                                            <p class="text-xs text-sky-800">
                                                <a href="#">Business</a> 
                                                <span class="text-slate-500">~ 50 minutes ago</span>
                                            </p>
                                        </div>
                                    </div>
                                    <!--Actions-->
                                    <div x-data="{open : false}" class="ml-auto mr-1 relative">
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
                                <!--Poster-->
                                <!--Featured Image-->
                                <div class="border-b border-gray-300">
                                    <div class="flex flex-col px-2 py-4">
                                        <img src="../assets/images/cover-image.jpg" class="h-4/4" alt="">
                                        <a href="blog-view.html" class="mt-3">
                                            <h1 class="text-sm font-medium text-slate-900 leading-tight">What is Lorem Ipsum and how do you learn it?</h1>
                                        </a>
                                        <p class="mt-1 text-xs text-slate-600 text-left">
                                            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem 
                                        </p>
                                    </div>
                                </div>
                                <!--Featured Image-->
                                <!--Activities-->
                                <div class="border-b border-gray-300">
                                    <div class="flex items-center justify-between px-2 py-4">
                                        <!--Users-->
                                        <div class="flex -space-x-2">
                                            <img class="inline-block h-6 w-6 rounded-full ring-2 ring-white" src="../assets/images/profile-pic.jpg" alt="">
                                            <img class="inline-block h-6 w-6 rounded-full ring-2 ring-white" src="../assets/images/profile-pic-2.jpg" alt="">
                                            <img class="inline-block h-6 w-6 rounded-full ring-2 ring-white" src="../assets/images/profile-pic-3.jpg" alt="">
                                            <img class="inline-block h-6 w-6 rounded-full ring-2 ring-white" src="../assets/images/profile-pic-4.jpg" alt="">
                                            <div class="flex justify-center items-center h-6 w-6 rounded-full ring-2 ring-white bg-slate-400 text-[0.60rem] text-slate-900">+5</div>
                                        </div>
                                        <!--Users-->
                                        <!--Actions-->
                                        <div class="flex items-center space-x-2">
                                            <button class="flex items-center space-x-1 text-xs px-2 py-1 bg-white bg-opacity-50 rounded-md">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="text-pink-600 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"></path>
                                                </svg>
                                                <span>25</span>
                                            </button>
                                            <button class="flex items-center space-x-1 text-xs px-2 py-1 bg-white bg-opacity-50 rounded-md">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-sky-500" viewBox="0 0 20 20" fill="currentColor">
                                                    <path d="M15 8a3 3 0 10-2.977-2.63l-4.94 2.47a3 3 0 100 4.319l4.94 2.47a3 3 0 10.895-1.789l-4.94-2.47a3.027 3.027 0 000-.74l4.94-2.47C13.456 7.68 14.19 8 15 8z"></path>
                                                </svg>
                                                <span>12</span>
                                            </button>
                                        </div>
                                        <!--Actions-->
                                    </div>
                                </div>
                                <!--Activities-->
                                <!--Comments-->
                                <div class="flex flex-col space-y-1">
                                    <div class="flex items-center justify-between px-2 py-4">
                                        <!--Comments and Views-->
                                        <div class="flex items-center text-xs text-slate-500 space-x-2">
                                            <span>Comments: 46</span>
                                            <span>Views: 113k</span>
                                        </div>
                                        <!--Comments and Views-->
                                        <!--Likes-->
                                        <div class="flex items-center text-xs text-slate-500 space-x-2">
                                            <span>Likes: 464K</span>
                                        </div>
                                        <!--Like-->
                                    </div>
                                    <!--Comment-->
                                    <div class="px-2 flex items-center space-x-3">
                                        <img class="inline-block h-6 w-6 rounded-full ring-2 ring-white" src="../assets/images/profile-pic.jpg" alt="">
                                        <label class="relative block mb-2 text-xs font-medium text-slate-800" for="password">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="absolute inset-y-0 right-0 mt-4 mr-2 cursor-pointer h-5 w-5 text-slate-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M14.828 14.828a4 4 0 0 1-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0z"/></svg>
                                            <input class="w-full mt-2 px-3 py-2 text-xs leading-tight text-slate-600 border border-white bg-transparent rounded-full shadow appearance-none focus:outline-none focus:shadow-outline" placeholder="Comment" type="text">
                                        </label>
                                    </div>
                                    <!--Comment-->
                                </div>
                                <!--Comments-->
                            </div>
                        </div>
                        <!--Post-->
                        <!--Post-->
                        <div class="col-span-12 md:col-span-4">
                            <div class="flex flex-col shadow rounded-lg bg-white bg-opacity-50 pb-5">
                                <!--Poster-->
                                <div class="flex items-center justify-between border-b border-gray-300">
                                    <div class="flex items-center space-x-2 p-2">
                                        <img src="../assets/images/profile-pic-6.jpg" class="h-14 w-14 rounded-full shadow" alt="">
                                        <div class="flex flex-col justify-center">
                                            <h1 class="font-medium text-sm text-slate-900">Holly Goodhead</h1>
                                            <p class="text-xs text-sky-800">
                                                <a href="#">Business</a> 
                                                <span class="text-slate-500">~ 50 minutes ago</span>
                                            </p>
                                        </div>
                                    </div>
                                    <!--Actions-->
                                    <div x-data="{open : false}" class="ml-auto mr-1 relative">
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
                                <!--Poster-->
                                <!--Featured Image-->
                                <div class="border-b border-gray-300">
                                    <div class="flex flex-col px-2 py-4">
                                        <img src="../assets/images/cover-image.jpg" class="h-4/4" alt="">
                                        <a href="blog-view.html" class="mt-3">
                                            <h1 class="text-sm font-medium text-slate-900 leading-tight">What is Lorem Ipsum and how do you learn it?</h1>
                                        </a>
                                        <p class="mt-1 text-xs text-slate-600 text-left">
                                            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem 
                                        </p>
                                    </div>
                                </div>
                                <!--Featured Image-->
                                <!--Activities-->
                                <div class="border-b border-gray-300">
                                    <div class="flex items-center justify-between px-2 py-4">
                                        <!--Users-->
                                        <div class="flex -space-x-2">
                                            <img class="inline-block h-6 w-6 rounded-full ring-2 ring-white" src="../assets/images/profile-pic.jpg" alt="">
                                            <img class="inline-block h-6 w-6 rounded-full ring-2 ring-white" src="../assets/images/profile-pic-2.jpg" alt="">
                                            <img class="inline-block h-6 w-6 rounded-full ring-2 ring-white" src="../assets/images/profile-pic-3.jpg" alt="">
                                            <img class="inline-block h-6 w-6 rounded-full ring-2 ring-white" src="../assets/images/profile-pic-4.jpg" alt="">
                                            <div class="flex justify-center items-center h-6 w-6 rounded-full ring-2 ring-white bg-slate-400 text-[0.60rem] text-slate-900">+5</div>
                                        </div>
                                        <!--Users-->
                                        <!--Actions-->
                                        <div class="flex items-center space-x-2">
                                            <button class="flex items-center space-x-1 text-xs px-2 py-1 bg-white bg-opacity-50 rounded-md">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="text-pink-600 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"></path>
                                                </svg>
                                                <span>25</span>
                                            </button>
                                            <button class="flex items-center space-x-1 text-xs px-2 py-1 bg-white bg-opacity-50 rounded-md">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-sky-500" viewBox="0 0 20 20" fill="currentColor">
                                                    <path d="M15 8a3 3 0 10-2.977-2.63l-4.94 2.47a3 3 0 100 4.319l4.94 2.47a3 3 0 10.895-1.789l-4.94-2.47a3.027 3.027 0 000-.74l4.94-2.47C13.456 7.68 14.19 8 15 8z"></path>
                                                </svg>
                                                <span>12</span>
                                            </button>
                                        </div>
                                        <!--Actions-->
                                    </div>
                                </div>
                                <!--Activities-->
                                <!--Comments-->
                                <div class="flex flex-col space-y-1">
                                    <div class="flex items-center justify-between px-2 py-4">
                                        <!--Comments and Views-->
                                        <div class="flex items-center text-xs text-slate-500 space-x-2">
                                            <span>Comments: 46</span>
                                            <span>Views: 113k</span>
                                        </div>
                                        <!--Comments and Views-->
                                        <!--Likes-->
                                        <div class="flex items-center text-xs text-slate-500 space-x-2">
                                            <span>Likes: 464K</span>
                                        </div>
                                        <!--Like-->
                                    </div>
                                    <!--Comment-->
                                    <div class="px-2 flex items-center space-x-3">
                                        <img class="inline-block h-6 w-6 rounded-full ring-2 ring-white" src="../assets/images/profile-pic.jpg" alt="">
                                        <label class="relative block mb-2 text-xs font-medium text-slate-800" for="password">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="absolute inset-y-0 right-0 mt-4 mr-2 cursor-pointer h-5 w-5 text-slate-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M14.828 14.828a4 4 0 0 1-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0z"/></svg>
                                            <input class="w-full mt-2 px-3 py-2 text-xs leading-tight text-slate-600 border border-white bg-transparent rounded-full shadow appearance-none focus:outline-none focus:shadow-outline" placeholder="Comment" type="text">
                                        </label>
                                    </div>
                                    <!--Comment-->
                                </div>
                                <!--Comments-->
                            </div>
                        </div>
                        <!--Post-->
                    </div>
                    <!--Posts-->
                    <!--Pagination-->
                    <div class="mb-10">
                        <div class="flex items-center space-x-6 tex-xs text-slate-700">
                            <a href="#"><<</a>
                            <a href="#"><</a>
                            <a href="#">...</a>
                            <a href="#">1</a>
                            <a href="#" class="px-3 py-1 rounded-sm shadow bg-white">2</a>
                            <a href="#">3</a>
                            <a href="#">...</a>
                            <a href="#">></a>
                            <a href="#">>></a>
                        </div>
                    </div>
                    <!--Pagination-->
                <!--END: Blog Posts-->
@endsection
