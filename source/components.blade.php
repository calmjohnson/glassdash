@extends('_layouts.main')

@section('body')
<!--BEGIN: Components-->
<div class="mb-10 md:mx-32 space-y-10 overflow-x-scroll">
    <!--Accordion-->
    <div id="accordion">
        <h1 class="text-xl font-semibold text-slate-900">
            Accordion
        </h1>
        <div x-data="{ selected : 1 }" class="mt-2">
            <ul aria-label="Accordion Control Group Buttons" class="space-y-4">
                <!--Question-->
                <li class="flex flex-col w-full">
                    <button @click="selected !== 1 ? selected = 1 : selected = null" 
                            class="flex items-center w-full bg-white bg-opacity-25 p-3 rounded-t-md" 
                            >
                        <span class="mr-auto text-sm">First question</span>
                        <svg xmlns="http://www.w3.org/2000/svg" :class="selected === 1 ? 'rotate-180' : ''" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 0 1 1.414 0L10 10.586l3.293-3.293a1 1 0 1 1 1.414 1.414l-4 4a1 1 0 0 1-1.414 0l-4-4a1 1 0 0 1 0-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                    <div x-collapse x-show="selected === 1" 
                        class="p-2 text-sm rounded-b bg-white bg-opacity-50">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam euismod risus sit amet dolor luctus rutrum. Proin et condimentum est. Duis ac pulvinar magna, quis tincidunt eros.
                    </div>
                </li>
                <!--Question-->
                <!--Question-->
                <li class="flex flex-col w-full">
                    <button @click="selected !== 2 ? selected = 2 : selected = null" 
                            class="flex items-center w-full bg-white bg-opacity-25 p-3 rounded-t-md">
                        <span class="mr-auto text-sm">Second question</span>
                        <svg xmlns="http://www.w3.org/2000/svg" :class="selected === 2 ? 'rotate-180' : ''" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 0 1 1.414 0L10 10.586l3.293-3.293a1 1 0 1 1 1.414 1.414l-4 4a1 1 0 0 1-1.414 0l-4-4a1 1 0 0 1 0-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                    <div x-collapse x-show="selected === 2" 
                        class="p-2 text-sm rounded-b bg-white bg-opacity-50">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam euismod risus sit amet dolor luctus rutrum. Proin et condimentum est. Duis ac pulvinar magna, quis tincidunt eros.
                    </div>
                </li>
                <!--Question-->
            </ul>
        </div>
    </div>
    <!--Accordion-->
    <!--Alerts-->
    <div id="alerts">
        <h1 class="text-xl font-semibold text-slate-900">
            Alerts
        </h1>
        <div class="space-y-2">
            <!--Success-->
            <div class="w-full p-4 bg-green-900 bg-opacity-50 rounded-md text-sm text-white">
                A simple success alert!
            </div>
            <!--Success-->
            <!--Warning-->
            <div class="w-full p-4 bg-yellow-900 bg-opacity-50 rounded-md text-sm text-white">
                A simple warnig alert!
            </div>
            <!--Warning-->
            <!--Danger-->
            <div class="w-full p-4 bg-red-900 bg-opacity-50 rounded-md text-sm text-white">
                A simple danger alert!
            </div>
            <!--Danger-->
            <!--Info-->
            <div class="w-full p-4 bg-sky-900 bg-opacity-50 rounded-md text-sm text-white">
                A simple info alert!
            </div>
            <!--Info-->
            <!--Dark-->
            <div class="w-full p-4 bg-black bg-opacity-50 rounded-md text-sm text-white">
                A simple danger alert!
            </div>
            <!--Dark-->
            <!--Disclosure-->
            <div class="flex flex-col text-sm text-white">
                <!--Header-->
                <h1 class="p-4 w-full rounded-t-md bg-pink-900 bg-opacity-50">
                    Well done!
                </h1>
                <!--Header-->
                <!--Info-->
                <span class="p-4 w-full bg-pink-900 bg-opacity-25">
                    Your activity was successful! you can now continues as if nothing happened, and let's hope 
                    that the force be with you from now until always after now. what would you like to do afterwards?
                </span>
                <!--Info-->
                <!--options-->
                <span class="flex justify-end space-x-2 p-4 w-full bg-pink-900 bg-opacity-50">
                    <button class="px-4 py-2 text-sm ring-2 ring-white text-white rounded-md shadow">
                        Explore
                    </button>
                    <button class="px-4 py-2 text-sm bg-red-900 bg-opacity-75 rounded-md shadow">
                        Leave
                    </button>
                </span>
                <!--options-->
            </div>
            <!--Disclosure-->
        </div>
    </div>
    <!--Alerts-->
    <!--Avatars-->
    <div id="avatars">
        <h1 class="text-xl font-semibold text-slate-900">
            Avatars
        </h1>
        <div class="flex space-x-2">
            @foreach ($page->users as $user)
            <div class="relative h-10 w-10 lg:h-20 lg:w-20 inline-block">
                <img class="inline-block h-10 w-10 lg:h-20 lg:w-20 rounded-full ring-2 ring-white" src="../../assets/images/{{$user->photo}}" alt="">
                <span class="absolute bottom-0 right-0 lg:right-3 h-2 w-2 lg:h-3 lg:w-3 rounded-full bg-green-600"></span>
            </div>
            @endforeach
        </div>
        <div class="mt-4 flex -space-x-2">
            @foreach ($page->users as $user)
            <img class="inline-block h-10 w-10 lg:h-20 lg:w-20 rounded-full ring-2 ring-white" src="../../assets/images/{{$user->photo}}" alt="">
            @endforeach
        </div>
    </div>
    <!--Avatars-->
    <!--Badges-->
    <div id="badges">
        <h1 class="text-xl font-semibold text-slate-900">
            Badges
        </h1>
        <div class="mt-2 flex flex-wrap gap-3">
            <span class="px-4 py-1 text-xs shadow rounded-md text-white bg-sky-900 bg-opacity-50">Sky</span>
            <span class="px-4 py-1 text-xs shadow rounded-md text-white bg-yellow-900 bg-opacity-50">Yellow</span>
            <span class="px-4 py-1 text-xs shadow rounded-md text-white bg-red-900 bg-opacity-50">Red</span>
            <span class="px-4 py-1 text-xs shadow rounded-md text-white bg-green-900 bg-opacity-50">Green</span>
            <span class="px-4 py-1 text-xs shadow rounded-md text-white bg-purple-900 bg-opacity-50">Purple</span>
            <span class="px-4 py-1 text-xs shadow rounded-md text-white bg-pink-900 bg-opacity-50">Pink</span>
            <span class="px-4 py-1 text-xs shadow rounded-md text-white bg-black bg-opacity-50">Black</span>
        </div>
        <div class="mt-2 flex flex-wrap gap-3">
            <span class="px-4 py-1 text-xs shadow rounded-full text-white bg-sky-900 bg-opacity-50">Sky</span>
            <span class="px-4 py-1 text-xs shadow rounded-full text-white bg-yellow-900 bg-opacity-50">Yellow</span>
            <span class="px-4 py-1 text-xs shadow rounded-full text-white bg-red-900 bg-opacity-50">Red</span>
            <span class="px-4 py-1 text-xs shadow rounded-full text-white bg-green-900 bg-opacity-50">Green</span>
            <span class="px-4 py-1 text-xs shadow rounded-full text-white bg-purple-900 bg-opacity-50">Purple</span>
            <span class="px-4 py-1 text-xs shadow rounded-full text-white bg-pink-900 bg-opacity-50">Pink</span>
            <span class="px-4 py-1 text-xs shadow rounded-full text-white bg-black bg-opacity-50">Black</span>
        </div>
        <div class="mt-2 flex flex-wrap gap-3">
            <span class="px-4 py-1 text-xs shadow rounded-md border border-sky-900 text-sky-900">Sky</span>
            <span class="px-4 py-1 text-xs shadow rounded-md border border-yellow-900 text-yellow-900 ">Yellow</span>
            <span class="px-4 py-1 text-xs shadow rounded-md border border-red-900 text-red-900">Red</span>
            <span class="px-4 py-1 text-xs shadow rounded-md border border-green-900 text-green-900">Green</span>
            <span class="px-4 py-1 text-xs shadow rounded-md border border-purple-900 text-purple-900 ">Purple</span>
            <span class="px-4 py-1 text-xs shadow rounded-md border border-pink-900 text-pink-900">Pink</span>
            <span class="px-4 py-1 text-xs shadow rounded-md border border-black text-black">Black</span>
        </div>
        <div class="mt-2 flex flex-wrap gap-3">
            <span class="px-4 py-1 text-xs shadow rounded-full border border-sky-900 text-sky-900">Sky</span>
            <span class="px-4 py-1 text-xs shadow rounded-full border border-yellow-900 text-yellow-900 ">Yellow</span>
            <span class="px-4 py-1 text-xs shadow rounded-full border border-red-900 text-red-900">Red</span>
            <span class="px-4 py-1 text-xs shadow rounded-full border border-green-900 text-green-900">Green</span>
            <span class="px-4 py-1 text-xs shadow rounded-full border border-purple-900 text-purple-900 ">Purple</span>
            <span class="px-4 py-1 text-xs shadow rounded-full border border-pink-900 text-pink-900">Pink</span>
            <span class="px-4 py-1 text-xs shadow rounded-full border border-black text-black">Black</span>
        </div>
    </div>
    <!--Badges-->
    <!--Breadcrumbs-->
    <div id="breadcrumbs">
        <h1 class="text-xl font-semibold text-slate-900">
            Breadcrumbs
        </h1>
        <div class="mt-2 flex space-x-4 items-center text-sm text-sky-600">
            <a href="#" class="text-pink-900 hover:text-pink-500">Dashboard</a>
            <span>></span>
            <a href="#" class="text-slate-600 hover:text-slate-900">Account</a>
            <span>></span>
            <a href="#" class="text-slate-600 hover:text-slate-900">Blog</a>
        </div>
    </div>
    <!--Breadcrumbs-->
    <!--Buttons-->
    <div id="buttons">
        <h1 class="text-xl font-semibold text-slate-900">
            Buttons
        </h1>
        <div class="mt-2 flex flex-wrap gap-4">
            <button class="px-6 py-2 rounded-md text-white bg-sky-900 bg-opacity-50 shadow">Sky</button>
            <button class="px-6 py-2 rounded-md text-white bg-yellow-900 bg-opacity-50 shadow">Yello</button>
            <button class="px-6 py-2 rounded-md text-white bg-red-900 bg-opacity-50 shadow">Red</button>
            <button class="px-6 py-2 rounded-md text-white bg-green-900 bg-opacity-50 shadow">Green</button>
            <button class="px-6 py-2 rounded-md text-white bg-purple-900 bg-opacity-50 shadow">Purple</button>
            <button class="px-6 py-2 rounded-md text-white bg-pink-900 bg-opacity-50 shadow">Pink</button>
            <button class="px-6 py-2 rounded-md text-white bg-black bg-opacity-50 shadow">Black</button>
            <button class="px-6 py-2 rounded-md text-black bg-white bg-opacity-50 shadow">White</button>
            <button class="px-6 py-2 rounded-md text-slate-900 bg-white bg-opacity-25 shadow">Transparent</button>
            <button class="px-6 py-2 rounded-md text-white bg-orange-900 bg-opacity-50 shadow">Orange</button>
            <button class="px-6 py-2 rounded-md text-white bg-lime-900 bg-opacity-50 shadow">Lime</button>
        </div>
        <div class="mt-2 flex flex-wrap gap-4">
            <button class="px-6 py-2 rounded-full text-white bg-sky-900 bg-opacity-50 shadow">Sky</button>
            <button class="px-6 py-2 rounded-full text-white bg-yellow-900 bg-opacity-50 shadow">Yello</button>
            <button class="px-6 py-2 rounded-full text-white bg-red-900 bg-opacity-50 shadow">Red</button>
            <button class="px-6 py-2 rounded-full text-white bg-green-900 bg-opacity-50 shadow">Green</button>
            <button class="px-6 py-2 rounded-full text-white bg-purple-900 bg-opacity-50 shadow">Purple</button>
            <button class="px-6 py-2 rounded-full text-white bg-pink-900 bg-opacity-50 shadow">Pink</button>
            <button class="px-6 py-2 rounded-full text-white bg-black bg-opacity-50 shadow">Black</button>
            <button class="px-6 py-2 rounded-full text-black bg-white bg-opacity-50 shadow">White</button>
            <button class="px-6 py-2 rounded-full text-slate-900 bg-white bg-opacity-25 shadow">Transparent</button>
            <button class="px-6 py-2 rounded-full text-white bg-orange-900 bg-opacity-50 shadow">Orange</button>
            <button class="px-6 py-2 rounded-full text-white bg-lime-900 bg-opacity-50 shadow">Lime</button>
        </div>
    </div>
    <!--Buttons-->
    <!--Charts-->
    <div id="charts">
        <h1 class="text-xl font-semibold text-slate-900">
            Charts
        </h1>
        <div class="mt-2 flex flex-col gap-5">
            @include('_components/conversions')
            @include('_components/traffic-channels')
            @include('_components/sales')
        </div>
    </div>
    <!--Charts-->
    <!--Todo-->
    <div id="todo">
        <h1 class="text-xl font-semibold text-slate-900">
            Todo
        </h1>
        <div class="mt-2">
            @include('_components/todos')
        </div>
    </div>
    <!--Todo-->
    <!--Dropdown-->
    <div id="dropdown">
        <h1 class="text-xl font-semibold text-slate-900">
            Dropdown
        </h1>
        <div class="mt-2 flex">
            <div x-data="{open : false}" class="relative">
                <div @click="open = ! open" class="cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M0 0h24v24H0z" stroke="none"></path>
                        <circle cx="12" cy="12" r="1"></circle>
                        <circle cx="12" cy="19" r="1"></circle>
                        <circle cx="12" cy="5" r="1"></circle>
                    </svg>
                </div>
                <div x-show="open" x-transition="" @click.outside="open = false" 
                    class="flex flex-col space-y-3 py-2 px-3 w-[12rem] rounded-md shadow-lg text-sm text-slate-600 absolute bg-white bg-opacity-25 filter backdrop-blur-md z-10">
                    <a href="#" class="hover:text-slate-900 transition-all ease-in-out duration-500">Action</a>
                    <a href="#" class="">Another Action</a>
                    <a href="#" class="">Another Action Pro</a>
                </div>
            </div>
        </div>
    </div>
    <!--Dropdown-->
    <!--Forms-->
    <div id="forms">
        <h1 class="text-xl font-semibold text-slate-900">
            Forms
        </h1>
        <div class="mt-2">
            <!--Email-->
            <div class="mb-4">
                <label class="block mb-2 text-xs font-medium text-slate-800" for="email">
                    Email
                </label>
                <input class="w-full px-3 py-2 mb-3 text-xs leading-tight text-slate-600 border border-white bg-transparent rounded-md shadow appearance-none focus:outline-none focus:shadow-outline" id="email" type="email" placeholder="Email">
            </div>
            <!--Email-->
            <!--Password-->
            <div x-data="{open: false, type: 'password'}" class="mb-4">
                <label class="relative block mb-2 text-xs font-medium text-slate-800" for="password">
                    Password
                    <svg x-show="open === true" @click="open = false, type = 'password'" xmlns="http://www.w3.org/2000/svg" class="absolute inset-y-0 right-0 mt-8 mr-4 cursor-pointer h-5 w-5" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round" style="display: none;"><path d="M0 0h24v24H0z" stroke="none"></path><path d="m3 3 18 18M10.584 10.587a2 2 0 0 0 2.828 2.83"></path><path d="M9.363 5.365A9.466 9.466 0 0 1 12 5c4 0 7.333 2.333 10 7-.778 1.361-1.612 2.524-2.503 3.488m-2.14 1.861C15.726 18.449 13.942 19 12 19c-4 0-7.333-2.333-10-7 1.369-2.395 2.913-4.175 4.632-5.341"></path></svg>
                    <svg x-show="open != true" @click="open = true, type = 'text'" xmlns="http://www.w3.org/2000/svg" class="absolute inset-y-0 right-0 mt-8 mr-4 cursor-pointer h-5 w-5" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round"><path d="M0 0h24v24H0z" stroke="none"></path><circle cx="12" cy="12" r="2"></circle><path d="M22 12c-2.667 4.667-6 7-10 7s-7.333-2.333-10-7c2.667-4.667 6-7 10-7s7.333 2.333 10 7"></path></svg>
                    <input class="w-full mt-2 px-3 py-2 mb-3 text-xs leading-tight text-slate-600 border border-white bg-transparent rounded-md shadow appearance-none focus:outline-none focus:shadow-outline" id="passwor" :type="type" placeholder="Password" type="password">
                </label>
            </div>
            <!--Password-->
            <!--Submit-->
            <div class="mb-6 text-center">
                <button class="w-full px-4 py-2 text-xs font-semibold text-slate-700 bg-white bg-opacity-25 hover:bg-opacity-50 hover:shadow-lg shadow-md rounded-full focus:outline-none focus:shadow-outline" type="button">
                    Sign In
                </button>
            </div>
            <!--Submit-->
            <hr class="mb-6 border-t">
        </div>
    </div>
    <!--Forms-->
    <!--Progress-->
    <div id="progress">
        <h1 class="text-xl font-semibold text-slate-900">
            Progress
        </h1>
        <div class="mt-2 flex flex-col space-y-4">
            <!--Big-->
            <div class="relative h-6 w-full rounded-full bg-white bg-opacity-50">
                <span class="absolute inset-0 h-6 w-[29%] rounded-full bg-sky-600"></span>
            </div>
            <!--Big-->
            <!--small-->
            <div class="relative h-3 w-full rounded-full bg-white bg-opacity-50">
                <span class="absolute inset-0 h-3 w-[49%] rounded-full bg-sky-600"></span>
            </div>
            <!--small-->
            <!--smaller-->
            <div class="relative h-1 w-full rounded-full bg-white bg-opacity-50">
                <span class="absolute inset-0 h-1 w-[75%] rounded-full bg-sky-600"></span>
            </div>
            <!--smaller-->
        </div>
    </div>
    <!--Progress-->
    <!--Tables-->
    <div id="tables">
        <h1 class="text-xl font-semibold text-slate-900">
            Tables
        </h1>
        <div class="mt-2 w-full">
            <!--BEGIN: Tasks-->
            <div class="mb-10 overflow-hidden">
                <div class="flex items-center justify-between">
                    <h1 class="font-bold text-slate-800">Tasks</h1>
                    <button class="px-3 py-1 rounded-md text-sm shadow-md bg-opacity-50 bg-white ">
                        Export
                    </button>
                </div>
                <div class="mt-8 sm:mt-0 w-auto overflow-x-scroll xl:overflow-x-hidden">
                    <table class="min-w-full table-auto mt-6">
                        <thead>
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-slate-700 uppercase tracking-wider">TASK</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-slate-700 uppercase tracking-wider">STATUS</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-slate-700 uppercase tracking-wider">PROGRESS</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-slate-700 uppercase tracking-wider">DUE DATE</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-slate-700 uppercase tracking-wider">TEAM</th>
                                <th scope="col" class="relative px-6 py-3">
                                    <span class="sr-only">Action</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-xs shadow-2xl bg-white bg-opacity-25 filter backdrop-blur-md">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    Upgrade composer package
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center space-x-1">
                                        <span class="h-1 w-1 rounded-full bg-amber-500"></span>
                                        <span>In Progress</span>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">27%</td>
                                <td class="px-6 py-4 whitespace-nowrap">25/12/2022</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    <div class="flex -space-x-2">
                                        <img class="inline-block h-8 w-8 rounded-full ring-2 ring-white" src="../../assets/images/profile-pic.jpg" alt="">
                                        <img class="inline-block h-8 w-8 rounded-full ring-2 ring-white" src="../../assets/images/profile-pic-2.jpg" alt="">
                                        <img class="inline-block h-8 w-8 rounded-full ring-2 ring-white" src="../../assets/images/profile-pic-3.jpg" alt="">
                                        <img class="inline-block h-8 w-8 rounded-full ring-2 ring-white" src="../../assets/images/profile-pic-4.jpg" alt="">
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <div class="cursor-pointer ml-10 lg:ml-0 flex items-center justify-center text-xs font-normal bg-white bg-opacity-50 shadow-lg rounded">
                                        Edit
                                    </div>
                                </td>
                            </tr>
                            <tr class="text-xs shadow-2xl bg-white bg-opacity-25 filter backdrop-blur-md">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    Setup forge server
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center space-x-1">
                                        <span class="h-1 w-1 rounded-full bg-green-500"></span>
                                        <span>Completed</span>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">100%</td>
                                <td class="px-6 py-4 whitespace-nowrap">09/02/2022</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    <div class="flex -space-x-2">
                                        <img class="inline-block h-8 w-8 rounded-full ring-2 ring-white" src="../assets/images/profile-pic.jpg" alt="">
                                        <img class="inline-block h-8 w-8 rounded-full ring-2 ring-white" src="../assets/images/profile-pic-2.jpg" alt="">
                                        <img class="inline-block h-8 w-8 rounded-full ring-2 ring-white" src="../assets/images/profile-pic-3.jpg" alt="">
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <div class="cursor-pointer ml-10 lg:ml-0 flex items-center justify-center text-xs font-normal bg-white bg-opacity-50 shadow-lg rounded">
                                        Edit
                                    </div>
                                </td>
                            </tr>
                            <tr class="text-xs shadow-2xl bg-white bg-opacity-25 filter backdrop-blur-md">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    Deploy site to production
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center space-x-1">
                                        <span class="h-1 w-1 rounded-full bg-green-500"></span>
                                        <span>Completed</span>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">100%</td>
                                <td class="px-6 py-4 whitespace-nowrap">14/02/2022</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    <div class="flex -space-x-2">
                                        <img class="inline-block h-8 w-8 rounded-full ring-2 ring-white" src="../assets/images/profile-pic.jpg" alt="">
                                        <img class="inline-block h-8 w-8 rounded-full ring-2 ring-white" src="../assets/images/profile-pic-2.jpg" alt="">
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <div class="cursor-pointer ml-10 lg:ml-0 flex items-center justify-center text-xs font-normal bg-white bg-opacity-50 shadow-lg rounded">
                                        Edit
                                    </div>
                                </td>
                            </tr>
                            <tr class="text-xs shadow-2xl bg-white bg-opacity-25 filter backdrop-blur-md">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    Conduct technical interview
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center space-x-1">
                                        <span class="h-1 w-1 rounded-full bg-red-500"></span>
                                        <span>Canceled</span>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">0%</td>
                                <td class="px-6 py-4 whitespace-nowrap">07/02/2022</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    <div class="flex -space-x-2">
                                        <img class="inline-block h-8 w-8 rounded-full ring-2 ring-white" src="../assets/images/profile-pic-3.jpg" alt="">
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <div class="cursor-pointer ml-10 lg:ml-0 flex items-center justify-center text-xs font-normal bg-white bg-opacity-50 shadow-lg rounded">
                                        Edit
                                    </div>
                                </td>
                            </tr>
                            <tr class="text-xs shadow-2xl bg-white bg-opacity-25 filter backdrop-blur-md">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    Refactor UI
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center space-x-1">
                                        <span class="h-1 w-1 rounded-full bg-red-500"></span>
                                        <span>Canceled</span>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">0%</td>
                                <td class="px-6 py-4 whitespace-nowrap">15/04/2022</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    <div class="flex -space-x-2">
                                        <img class="inline-block h-8 w-8 rounded-full ring-2 ring-white" src="../assets/images/profile-pic.jpg" alt="">
                                        <img class="inline-block h-8 w-8 rounded-full ring-2 ring-white" src="../assets/images/profile-pic-2.jpg" alt="">
                                        <img class="inline-block h-8 w-8 rounded-full ring-2 ring-white" src="../assets/images/profile-pic-3.jpg" alt="">
                                        <img class="inline-block h-8 w-8 rounded-full ring-2 ring-white" src="../assets/images/profile-pic-4.jpg" alt="">
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <div class="cursor-pointer ml-10 lg:ml-0 flex items-center justify-center text-xs font-normal bg-white bg-opacity-50 shadow-lg rounded">
                                        Edit
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!--END: Tasks-->
        </div>
    </div>
    <!--Tables-->
</div>
<!--END: Component-->
@endsection
