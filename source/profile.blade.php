@extends('_layouts.main')

@section('body')

<!--BEGIN: Profile Overview-->
<div x-cloak x-data="{ profileTab: $persist('posts') }" class="mb-10 w-full">
    <!--Overview-->
    <div class="flex flex-col md:flex-row space-y-3 md:items-center md:justify-between bg-white bg-opacity-25 p-2 rounded-lg">
        <!--Details-->
        <div class="flex items-center space-x-2">
            <div class="relative">
                <img src="../assets/images/profile-pic.jpg" class="inset-0 h-24 w-24 md:h-32 md:w-32 rounded-full" alt="">
                <div class="absolute bottom-0 right-0 mr-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="rounded-full bg-pink-500 p-1 h-5 w-5 md:h-7 md:w-7 text-white shadow" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M4 5a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1.586a1 1 0 0 1-.707-.293l-1.121-1.121A2 2 0 0 0 11.172 3H8.828a2 2 0 0 0-1.414.586L6.293 4.707A1 1 0 0 1 5.586 5H4zm6 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" clip-rule="evenodd"/></svg>
                </div>
            </div>
            <div class="flex flex-col space-y-1">
                <h1 class="text-sm md:text-xl font-bold text-slate-900">Honeychile Ryder</h1>
                <span class="text-xs md:text-sm font-medium text-slate-600">10x Developer</span>
            </div>
        </div>
        <!--Details-->
        <!--Follow-->
        <button class="px-3 md:px-5 py-1 md:py-2 font-normal md:font-medium text-slate-700 bg-white bg-opacity-50 rounded-lg">
            Follow
        </button>
        <!--Follow-->
    </div>
    <!--Overview-->
    <!--Profile Tabs-->
    <div class="mt-5">
        <!--Tabs-->
        <div class="overflow-x-auto rounded-full flex bg-white bg-opacity-25 text-xs md:text-sm text-slate-900 font-medium">
            <!--Posts-->
            <div @click="profileTab = 'posts' " class="cursor-pointer hover:bg-white hover:bg-opacity-50 px-4 py-4"
            :class="profileTab === 'posts' ? 'bg-white bg-opacity-50' : '' ">
                Posts
            </div>
            <!--Posts-->
            <!--Groups-->
            <div @click="profileTab = 'groups' " class="cursor-pointer hover:bg-white hover:bg-opacity-50 px-4 py-4"
            :class="profileTab === 'groups' ? 'bg-white bg-opacity-50' : '' ">
                Groups
            </div>
            <!--Groups-->
            <!--Projects-->
            <div @click="profileTab = 'projects' " class="cursor-pointer hover:bg-white hover:bg-opacity-50 px-4 py-4"
            :class="profileTab === 'projects' ? 'bg-white bg-opacity-50' : '' ">
                Projects
            </div>
            <!--Projects-->
            <!--Files-->
            <div @click="profileTab = 'files' " class="cursor-pointer hover:bg-white hover:bg-opacity-50 px-4 py-4"
            :class="profileTab === 'files' ? 'bg-white bg-opacity-50' : '' ">
                Files
            </div>
            <!--Files-->
            <!--Subscribers-->
            <div @click="profileTab = 'subscribers' " class="cursor-pointer hover:bg-white hover:bg-opacity-50 px-4 py-4"
            :class="profileTab === 'subscribers' ? 'bg-white bg-opacity-50' : '' ">
                Subscribers
            </div>
            <!--Subscribers-->
        </div>
        <!--Tabs-->
    </div>
    <!--Profile Tabs-->
    <!--Posts-->
    <div x-transition x-show="profileTab === 'posts' " class="mt-5 mb-10 grid grid-cols-12 gap-6">
        <!--OP-->
        <div class="col-span-12 md:col-span-8">
            <div class="px-1 md:px-5 py-5 shadow rounded-lg bg-opacity-25 bg-white">
                <div class="flex items-center justify-between space-x-2">
                    <!--Poster-->
                    <div class="flex items-center space-x-2">
                        <img src="../assets/images/profile-pic.jpg" class="h-12 w-12 rounded-full" alt="">
                        <div class="flex flex-col">
                            <h1 class="text-sm text-slate-900 font-semibold">Honeychile Ryder</h1>
                            <span class="text-xs font-normal text-slte-400">5hrs ago</span>
                        </div>
                    </div>
                    <!--Poster-->
                    <!--Actions-->
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
                    <!--Actions-->
                </div>

                <!--Paragraph-->
                <div class="mt-3 prose-sm prose-slate">
                    <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                    when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    </p>
                    <p>
                        when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    </p>
                    <img src="../assets/images/cover-image.jpg" class="w-auto" alt="" />
                </div>
                <!--Paragraph-->
                <!--Reactions-->
                <div class="py-3 flex justify-between border-b border-slate-300">
                    <div class="flex items-center space-x-2">
                        <button class="flex items-center space-x-1 text-xs px-2 py-1 bg-white bg-opacity-50 rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg" class="text-pink-600 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" />
                            </svg>
                            <span>25</span>
                        </button>
                        <button class="flex items-center space-x-1 text-xs px-2 py-1 bg-white bg-opacity-50 rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-sky-500" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M15 8a3 3 0 10-2.977-2.63l-4.94 2.47a3 3 0 100 4.319l4.94 2.47a3 3 0 10.895-1.789l-4.94-2.47a3.027 3.027 0 000-.74l4.94-2.47C13.456 7.68 14.19 8 15 8z" />
                            </svg>
                            <span>12</span>
                        </button>
                        <button class="flex items-center space-x-1 text-xs px-2 py-1 bg-white bg-opacity-50 rounded-md">
                            Leave a comment
                        </button>
                    </div>
                    <!--Users-->
                    <div class="flex -space-x-2">
                        <img class="inline-block h-6 w-6 rounded-full ring-2 ring-white" src="../assets/images/profile-pic.jpg" alt="">
                        <img class="inline-block h-6 w-6 rounded-full ring-2 ring-white" src="../assets/images/profile-pic-2.jpg" alt="">
                        <img class="inline-block h-6 w-6 rounded-full ring-2 ring-white" src="../assets/images/profile-pic-3.jpg" alt="">
                        <img class="inline-block h-6 w-6 rounded-full ring-2 ring-white" src="../assets/images/profile-pic-4.jpg" alt="">
                    </div>
                    <!--Users-->
                </div>
                <!--Reactions-->
                <!--Comments-->
                <div class="flex flex-col py-3 space-y-5 border-b border-gray-300">
                    <!--comment-->
                    <div class="flex items-start space-x-4">
                        <img src="../assets/images/profile-pic-2.jpg" class="h-10 w-10 md:h-12 md:w-12 rounded-full shadow" alt="">
                        <div class="p-3 text-xs text-slate-900 bg-white bg-opacity-20 rounded-xl">
                            Wow! never knew that lorem ipsum was simply a dummy text. 
                            I thought it was an actual language and I've spent 8 years of 
                            my life studying it. TIL moment.
                        </div>
                    </div>
                    <!--comment-->
                    <!--comment-->
                    <div class="flex items-start space-x-4">
                        <img src="../assets/images/profile-pic-3.jpg" class="h-10 w-10 md:h-12 md:w-12 rounded-full shadow" alt="">
                        <div class="p-3 text-xs text-slate-900 bg-white bg-opacity-25 rounded-xl">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                            Nunc maximus ipsum ex, eget mattis magna aliquam quis. 
                            Maecenas vitae magna dapibus, lobortis sem et, eleifend velit. 
                            Sed quis fermentum nunc.
                        </div>
                    </div>
                    <!--comment-->
                </div>
                <!--Comments-->
                <!--Comment Form-->
                <div class="py-3 flex items-start space-x-3">
                    <img src="../assets/images/profile-pic.jpg" class="h-8 w-8 md:h-10 md:w-10 rounded-full shadow" alt="">
                    <label class="block w-full">
                        <textarea class="text-xs bg-white bg-opacity-0 block w-full
                            border-0 
                            focus:ring-0 focus:border-black
                        " placeholder="leave a comment" rows="1"></textarea>
                    </label>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-slate-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 9a2 2 0 0 1 2-2h.93a2 2 0 0 0 1.664-.89l.812-1.22A2 2 0 0 1 10.07 4h3.86a2 2 0 0 1 1.664.89l.812 1.22A2 2 0 0 0 18.07 7H19a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V9z"/><path stroke-linecap="round" stroke-linejoin="round" d="M15 13a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-slate-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="m15.172 7-6.586 6.586a2 2 0 1 0 2.828 2.828l6.414-6.586a4 4 0 0 0-5.656-5.656l-6.415 6.585a6 6 0 1 0 8.486 8.486L20.5 13"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-slate-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 11a7 7 0 0 1-7 7m0 0a7 7 0 0 1-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 0 1-3-3V5a3 3 0 1 1 6 0v6a3 3 0 0 1-3 3z"/></svg>
                </div>
                <!--Comment Form-->
            </div>
        </div>
        <!--OP-->
        <!--Stats-->
        <div class="col-span-12 md:col-span-4">
            <div class="px-5 space-y-5 py-5 h-auto shadow rounded-lg bg-opacity-25 bg-white">
                <!--Posts-->
                <div class="flex justify-between">
                    <span class="text-slate-900 text-sm font-bold">Posts</span>
                    <span class="text-slate-700 text-xs font-medium">12</span>
                </div>
                <!--Posts-->
                <!--Groups-->
                <div class="flex justify-between">
                    <span class="text-slate-900 text-sm font-bold">Groups</span>
                    <span class="text-slate-700 text-xs font-medium">7</span>
                </div>
                <!--Groups-->
                <!--Projects-->
                <div class="flex justify-between">
                    <span class="text-slate-900 text-sm font-bold">Projects</span>
                    <span class="text-slate-700 text-xs font-medium">21</span>
                </div>
                <!--Projects-->
                <!--Files-->
                <div class="flex justify-between">
                    <span class="text-slate-900 text-sm font-bold">Files</span>
                    <span class="text-slate-700 text-xs font-medium">229</span>
                </div>
                <!--Files-->
                <!--Subscribers-->
                <div class="flex justify-between">
                    <span class="text-slate-900 text-sm font-bold">Subscribers</span>
                    <span class="text-slate-700 text-xs font-medium">5</span>
                </div>
                <!--Subscribers-->
            </div>
        </div>
        <!--Stats-->
    </div>
    <!--Posts-->
    <!--Groups-->
    <div x-transition x-show="profileTab === 'groups' " class="mt-5 mb-10 grid grid-cols-12 gap-6">
        <!--Dropbox-->
        <div class="col-span-12 md:col-span-6">
            <div class="px-1 md:px-5 py-5 shadow rounded-lg bg-opacity-25 bg-white">
                <div class="relative flex flex-col space-x-2">
                    <!--Overview-->
                    <div class="flex flex-col text-center justify-center items-center space-x-2">
                        <img src="../assets/images/dropbox.jpg" class="h-16 w-16 rounded-lg" alt="">
                        <div class="flex flex-col space-y-2 border-b border-gray-300">
                            <h1 class="mt-2 text-base text-slate-900 font-semibold">Dropbox Inc</h1>
                            <span class="pb-5 text-sm font-normal text-slate-500"> Dropbox is a file hosting service that offers cloud storage, file synchronization, a personal cloud.</span>
                        </div>
                    </div>
                    <!--Overview-->
                    <!--Details-->
                    <div class="flex items-center justify-between py-4">
                        <div class="flex items-center space-x-1 text-xs text-slate-400">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 1 1-18 0 9 9 0 0 1 18 0z"/></svg>
                            <span>Updated 6hrs ago</span>
                        </div>
                        <div class="flex -space-x-2">
                            <img class="inline-block h-6 w-6 rounded-full ring-2 ring-white" src="../assets/images/profile-pic.jpg" alt="">
                            <img class="inline-block h-6 w-6 rounded-full ring-2 ring-white" src="../assets/images/profile-pic-2.jpg" alt="">
                            <img class="inline-block h-6 w-6 rounded-full ring-2 ring-white" src="../assets/images/profile-pic-3.jpg" alt="">
                            <img class="inline-block h-6 w-6 rounded-full ring-2 ring-white" src="../assets/images/profile-pic-4.jpg" alt="">
                            <div class="flex justify-center items-center h-6 w-6 rounded-full ring-2 ring-white bg-slate-400 text-[0.60rem] text-slate-900">+5</div>
                        </div>
                    </div>
                    <!--Details-->
                    <!--Actions-->
                    <div x-cloak x-data="{open : false}" class="absolute top-0 right-0">
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
                    <!--Actions-->
                </div>
            </div>
        </div>
        <!--Dropbox-->
        <!--Squarespace-->
        <div class="col-span-12 md:col-span-6">
            <div class="px-1 md:px-5 py-5 shadow rounded-lg bg-opacity-25 bg-white">
                <div class="relative flex flex-col space-x-2">
                    <!--Overview-->
                    <div class="flex flex-col text-center justify-center items-center space-x-2">
                        <img src="../assets/images/squarespace.jpg" class="h-16 w-16 rounded-lg" alt="">
                        <div class="flex flex-col space-y-2 border-b border-gray-300">
                            <h1 class="mt-2 text-base text-slate-900 font-semibold">Squarespace</h1>
                            <span class="pb-5 text-sm font-normal text-slate-500">Squarespace provides software as a service for website building and hosting. Headquartered in NYC. </span>
                        </div>
                    </div>
                    <!--Overview-->
                    <!--Details-->
                    <div class="flex items-center justify-between py-4">
                        <div class="flex items-center space-x-1 text-xs text-slate-400">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 1 1-18 0 9 9 0 0 1 18 0z"/></svg>
                            <span>Updated 6hrs ago</span>
                        </div>
                        <div class="flex -space-x-2">
                            <img class="inline-block h-6 w-6 rounded-full ring-2 ring-white" src="../assets/images/profile-pic.jpg" alt="">
                            <img class="inline-block h-6 w-6 rounded-full ring-2 ring-white" src="../assets/images/profile-pic-2.jpg" alt="">
                            <img class="inline-block h-6 w-6 rounded-full ring-2 ring-white" src="../assets/images/profile-pic-3.jpg" alt="">
                            <img class="inline-block h-6 w-6 rounded-full ring-2 ring-white" src="../assets/images/profile-pic-4.jpg" alt="">
                            <div class="flex justify-center items-center h-6 w-6 rounded-full ring-2 ring-white bg-slate-400 text-[0.60rem] text-slate-900">+5</div>
                        </div>
                    </div>
                    <!--Details-->
                    <!--Actions-->
                    <div x-cloak x-data="{open : false}" class="absolute top-0 right-0">
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
                    <!--Actions-->
                </div>
            </div>
        </div>
        <!--Squarespace-->
        <!--Github-->
        <div class="col-span-12 md:col-span-6">
            <div class="px-1 md:px-5 py-5 shadow rounded-lg bg-opacity-25 bg-white">
                <div class="relative flex flex-col space-x-2">
                    <!--Overview-->
                    <div class="flex flex-col text-center justify-center items-center space-x-2">
                        <img src="../assets/images/github.jpg" class="h-16 w-16 rounded-lg" alt="">
                        <div class="flex flex-col space-y-2 border-b border-gray-300">
                            <h1 class="mt-2 text-base text-slate-900 font-semibold">Github</h1>
                            <span class="pb-5 text-sm font-normal text-slate-500">GitHub is a web-based hosting service for version control of code using Git. </span>
                        </div>
                    </div>
                    <!--Overview-->
                    <!--Details-->
                    <div class="flex items-center justify-between py-4">
                        <div class="flex items-center space-x-1 text-xs text-slate-400">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 1 1-18 0 9 9 0 0 1 18 0z"/></svg>
                            <span>Updated 6hrs ago</span>
                        </div>
                        <div class="flex -space-x-2">
                            <img class="inline-block h-6 w-6 rounded-full ring-2 ring-white" src="../assets/images/profile-pic.jpg" alt="">
                            <img class="inline-block h-6 w-6 rounded-full ring-2 ring-white" src="../assets/images/profile-pic-2.jpg" alt="">
                            <img class="inline-block h-6 w-6 rounded-full ring-2 ring-white" src="../assets/images/profile-pic-3.jpg" alt="">
                            <img class="inline-block h-6 w-6 rounded-full ring-2 ring-white" src="../assets/images/profile-pic-4.jpg" alt="">
                            <div class="flex justify-center items-center h-6 w-6 rounded-full ring-2 ring-white bg-slate-400 text-[0.60rem] text-slate-900">+5</div>
                        </div>
                    </div>
                    <!--Details-->
                    <!--Actions-->
                    <div x-cloak x-data="{open : false}" class="absolute top-0 right-0">
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
                    <!--Actions-->
                </div>
            </div>
        </div>
        <!--Github-->
        <!--Slack-->
        <div class="col-span-12 md:col-span-6">
            <div class="px-1 md:px-5 py-5 shadow rounded-lg bg-opacity-25 bg-white">
                <div class="relative flex flex-col space-x-2">
                    <!--Overview-->
                    <div class="flex flex-col text-center justify-center items-center space-x-2">
                        <img src="../assets/images/slack.jpg" class="h-16 w-16 rounded-lg" alt="">
                        <div class="flex flex-col space-y-2 border-b border-gray-300">
                            <h1 class="mt-2 text-base text-slate-900 font-semibold">Slack</h1>
                            <span class="pb-5 text-sm font-normal text-slate-500">Slack is a cloud-based set of team collaboration tools and services, founded by Stewart Butterfield. </span>
                        </div>
                    </div>
                    <!--Overview-->
                    <!--Details-->
                    <div class="flex items-center justify-between py-4">
                        <div class="flex items-center space-x-1 text-xs text-slate-400">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 1 1-18 0 9 9 0 0 1 18 0z"/></svg>
                            <span>Updated 6hrs ago</span>
                        </div>
                        <div class="flex -space-x-2">
                            <img class="inline-block h-6 w-6 rounded-full ring-2 ring-white" src="../assets/images/profile-pic.jpg" alt="">
                            <img class="inline-block h-6 w-6 rounded-full ring-2 ring-white" src="../assets/images/profile-pic-2.jpg" alt="">
                            <img class="inline-block h-6 w-6 rounded-full ring-2 ring-white" src="../assets/images/profile-pic-3.jpg" alt="">
                            <img class="inline-block h-6 w-6 rounded-full ring-2 ring-white" src="../assets/images/profile-pic-4.jpg" alt="">
                            <div class="flex justify-center items-center h-6 w-6 rounded-full ring-2 ring-white bg-slate-400 text-[0.60rem] text-slate-900">+5</div>
                        </div>
                    </div>
                    <!--Details-->
                    <!--Actions-->
                    <div x-cloak x-data="{open : false}" class="absolute top-0 right-0">
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
                    <!--Actions-->
                </div>
            </div>
        </div>
        <!--Slack-->
    </div>
    <!--Groups-->
    <!--Projects-->
    <div x-transition x-show="profileTab === 'projects' " class="mt-5 mb-10 grid grid-cols-12 gap-6">
        <!--Search-->
        <div class="col-span-12 w-full">
            <div class="flex items-center justify-between">
                <input type="text" class="h-12 text-sm w-full rounded-lg shadow bg-white bg-opacity-25 border border-white border-opacity-25" placeholder="Search...">
            </div>
        </div>
        <!--Search-->
        @foreach ($page->projects as $project)
        <!--Project-->
        <div class="col-span-12 md:col-span-4">
            <div class="flex flex-col shadow rounded-lg bg-white bg-opacity-50 pb-5">
                <img src="../assets/images/{{$project->image}}" class="rounded-t-lg h-56 sm:h-3/4" alt="">
                <div class="flex items-center mx-5 mt-5">
                    <div class="flex flex-col">
                        <h1 class="font-medium text-sm text-slate-900">{{$project->name}}</h1>
                        <p class="text-xs text-slate-400">{{$project->time}}</p>
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
                        <span class="text-xs font-medium text-slate-800">{{$project->percent}}%</span>
                        <div class="relative h-1 w-full rounded-auto bg-slate-300">
                            <span 
                                @class([
                                'absolute inset-0 h-1 w-['.$project->percent.'%] rounded-full', 
                                'bg-sky-600' => $project->percent === 100,
                                'bg-red-600' => $project->percent < 20,
                                'bg-yellow-600' => $project->percent < 100 && $project->percent > 20 ,
                                ])></span>
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
        <!--Project-->
        @endforeach
    </div>
    <!--Projects-->
    <!--Files-->
    <div x-transition x-show="profileTab === 'files' " class="mt-5 mb-10">
        <div class="py-4 max-w-full rounded-md bg-white bg-opacity-25 shadow-md filter backdrop-blur">
            <!--Overview-->
            <div class="flex items-center justify-between py-2 border-b border-gray-300">
                <h1 class="pl-4 md:pl-8 text-sm text-slate-900 font-bold">Files</h1>
                <div class="pr-4 md:pr-8 flex items-center space-x-2">
                    <!--Sort-->
                    <select class="text-xs font-medium text-slate-500 block w-full px-0.5 border-0 bg-white bg-transparent focus:ring-0 focus:border-black">
                        <option>Sort Order</option>
                        <option>Asc</option>
                        <option>Dec</option>
                    </select>
                    <!--Sort-->
                    <!--Upload-->
                    <button class="px-3 py-1 rounded-md text-xs bg-white bg-opacity-50 shadow">
                        Upload
                    </button>
                    <!--Upload-->
                </div>
            </div>
            <!--Overview-->
            <!--Search-->
            <div class="flex items-center justify-between py-2 border-b border-gray-300">
                <input type="text" class="block w-full px-4 md:px-8 bg-white bg-transparent border-0 focus:ring-0 focus:border-black
                " placeholder="Search">
            </div>
            <!--Search-->
            <!--File-->
            <div class="flex items-center justify-between mx-4 md:mx-8 py-2 border-b border-gray-300">
                <!--Overview-->
                <div class="flex items-center space-x-2">
                    <img src="../assets/images/dropbox.jpg" class="h-16 w-16 md:h-20 md:w-20 rounded-lg" alt="" />
                    <div class="flex flex-col space-y-1">
                        <h1 class="text-sm font-bold text-slate-900">Dropbox Logo</h1>
                        <span class="text-xs text-slate-500">6.9kb JPEG </span>
                        <span class="text-xs text-slate-500">Uploaded by Mary Goodnight on Mar 23, 2021</span>
                    </div>
                </div>
                <!--Overview-->
                <div class="flex items-center space-x-2">
                    <!--Download-->
                    <button class="px-3 py-1 rounded-md text-xs bg-white bg-opacity-50 shadow">
                        Download
                    </button>
                    <!--Download-->
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
            <!--File-->
            <!--File-->
            <div class="flex items-center justify-between mx-4 md:mx-8 py-2 border-b border-gray-300">
                <!--Overview-->
                <div class="flex items-center space-x-2">
                    <img src="../assets/images/github.jpg" class="h-16 w-16 md:h-20 md:w-20 rounded-lg" alt="" />
                    <div class="flex flex-col space-y-1">
                        <h1 class="text-sm font-bold text-slate-900">Github Logo</h1>
                        <span class="text-xs text-slate-500">6.9kb JPEG </span>
                        <span class="text-xs text-slate-500">Uploaded by Mary Goodnight on Mar 23, 2021</span>
                    </div>
                </div>
                <!--Overview-->
                <div class="flex items-center space-x-2">
                    <!--Download-->
                    <button class="px-3 py-1 rounded-md text-xs bg-white bg-opacity-50 shadow">
                        Download
                    </button>
                    <!--Download-->
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
            <!--File-->
            <!--File-->
            <div class="flex items-center justify-between mx-4 md:mx-8 py-2 border-b border-gray-300">
                <!--Overview-->
                <div class="flex items-center space-x-2">
                    <img src="../assets/images/squarespace.jpg" class="h-16 w-16 md:h-20 md:w-20 rounded-lg" alt="" />
                    <div class="flex flex-col space-y-1">
                        <h1 class="text-sm font-bold text-slate-900">Squarspace Logo</h1>
                        <span class="text-xs text-slate-500">6.9kb JPEG </span>
                        <span class="text-xs text-slate-500">Uploaded by Mary Goodnight on Mar 23, 2021</span>
                    </div>
                </div>
                <!--Overview-->
                <div class="flex items-center space-x-2">
                    <!--Download-->
                    <button class="px-3 py-1 rounded-md text-xs bg-white bg-opacity-50 shadow">
                        Download
                    </button>
                    <!--Download-->
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
            <!--File-->
            <!--File-->
            <div class="flex items-center justify-between mx-4 md:mx-8 py-2 border-b border-gray-300">
                <!--Overview-->
                <div class="flex items-center space-x-2">
                    <img src="../assets/images/slack.jpg" class="h-16 w-16 md:h-20 md:w-20 rounded-lg" alt="" />
                    <div class="flex flex-col space-y-1">
                        <h1 class="text-sm font-bold text-slate-900">Slack Logo</h1>
                        <span class="text-xs text-slate-500">6.9kb JPEG </span>
                        <span class="text-xs text-slate-500">Uploaded by Mary Goodnight on Mar 23, 2021</span>
                    </div>
                </div>
                <!--Overview-->
                <div class="flex items-center space-x-2">
                    <!--Download-->
                    <button class="px-3 py-1 rounded-md text-xs bg-white bg-opacity-50 shadow">
                        Download
                    </button>
                    <!--Download-->
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
            <!--File-->
        </div>
    </div>
    <!--Files-->
    <!--Subscribers-->
    <div x-transition x-show="profileTab === 'subscribers' " class="mt-5 mb-10 grid grid-cols-12 gap-6">
        @foreach ($page->users as $user)
        <!--Subscriber-->
        <div class="col-span-12 md:col-span-4">
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
                        <img src="../assets/images/{{$user->photo}}" class="h-20 w-20 z-10 rounded-full border-4 border-white border-opacity-75" alt="">
                    </div>
                    <div class="flex flex-col justify-center">
                        <h1 class="font-medium text-sm text-slate-900 text-center">{{$user->name}}</h1>
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
                        <span @class([
                            'h-2 w-2 rounded-full', 
                            'bg-green-600' => $user->status === 'online',
                            'bg-red-600' => $user->status === 'offline',
                            'bg-yellow-600' => $user->status === 'away',
                            ])></span>
                        <span class="text-xs font-semibold text-slate-700">{{$user->status}}</span>
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
        <!--Subscriber-->
        @endforeach
    </div>
    <!--Subscriber-->
</div>
<!--END: Profile Overview-->
@endsection
