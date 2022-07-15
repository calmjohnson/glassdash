@extends('_layouts.main')

@section('body')

<!--BEGIN: Orders-->
<div class="mb-10 grid grid-cols-12 gap-6">
    <!--Overview-->
    <div class="col-span-12">
        <div class="flex items-center justify-between">
            <div class="flex flex-col">
                <h5 class="text-xs text-slate-500">overview</h5>
                <h1 class="text-base lg:text-2xl font-medium">Orders</h1>
            </div>
            <div class="flex items-center space-x-2">
                <a href="#" class="w-full px-4 py-2 text-xs font-semibold text-slate-700 bg-white bg-opacity-25 hover:bg-opacity-50 hover:shadow-lg shadow-md rounded-full focus:outline-none focus:shadow-outline" type="button">
                    New Order
                </a>
            </div>
        </div>
    </div>
    <!--Overview-->
    <!--Data-->
    <div x-cloak x-data="{ tab:'all' }" x-init="orders = $store.dataTable.orders" class="col-span-12 space-y-10 overflow-x-scroll lg:overflow-x-hidden">
        <!--Tabs-->
        <div class="flex items-center space-x-4 py-3 border-b border-slate-400">
            <!--tab-->
            <div @click=" tab = 'all' " class="flex items-center cursor-pointer space-x-1">
                <span :class=" tab === 'all' ? 'text-slate-800' : 'text-slate-500' " class="text-sm font-semibold text-slate-800">All</span>
                <span class="text-xs px-1 text-slate-500 rounded-full bg-white bg-opacity-25 shadow-md">128</span>
            </div>
            <!--tab-->
            <!--tab-->
            <div @click=" tab = 'pending' " class="flex items-center cursor-pointer space-x-1">
                <span :class=" tab === 'pending' ? 'text-slate-800' : 'text-slate-500' " class="text-sm font-semibold">Pending</span>
                <span class="text-xs px-1 text-slate-500 rounded-full bg-white bg-opacity-25 shadow-md">27</span>
            </div>
            <!--tab-->
            <!--tab-->
            <div @click=" tab = 'processing' " class="flex items-center cursor-pointer space-x-1">
                <span :class=" tab === 'processing' ? 'text-slate-800' : 'text-slate-500' " class="text-sm font-semibold text-slate-800">Processing</span>
                <span class="text-xs px-1 text-slate-500 rounded-full bg-white bg-opacity-25 shadow-md">50</span>
            </div>
            <!--tab-->
            <!--tab-->
            <div @click=" tab = 'refunded' " class="flex items-center cursor-pointer space-x-1">
                <span :class=" tab === 'refunded' ? 'text-slate-800' : 'text-slate-500' " class="text-sm font-semibold text-slate-800">Refunded</span>
                <span class="text-xs px-1 text-slate-500 rounded-full bg-white bg-opacity-25 shadow-md">8</span>
            </div>
            <!--tab-->
        </div>
        <!--Tabs-->
        <!--Tables-->
        <div class="py-4 max-w-full rounded-md bg-white bg-opacity-25 shadow-md filter backdrop-blur overflow-x-scroll lg:overflow-x-hidden">
            <!--Search and Action-->
            <div class="p-4 flex items-center space-x-2 lg:space-x-0 justify-between">
                <input @click="open =  ! open" type="text" class="h-8 px-2 text-xs w-auto rounded-lg shadow bg-white bg-opacity-25 border border-white border-opacity-25" placeholder="Search...">
                <div x-data="{open : false}">
                    <div @click="open = true" class="h-8 cursor-pointer flex items-center rounded-lg shadow bg-white bg-opacity-25 border border-white border-opacity-75">
                        <div class="text-xs ml-1 text-slate-800">
                            Bulk Action
                        </div>
                        <span class="ml-3 mr-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-slate-800" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M0 0h24v24H0z" stroke="none"></path>
                                <path d="m6 9 6 6 6-6"></path>
                            </svg>                              
                        </span>
                    </div>
                    <!--Dropdown-->
                    <div x-show="open" x-transition @click.outside="open = false" class="flex flex-col mt-1 space-y-3 py-2 px-3 w-[12rem] rounded-md shadow-lg text-sm text-slate-600 absolute right-1 bg-white bg-opacity-25 filter backdrop-blur-md z-10">
                        <a href="#" class="hover:text-slate-900 transition-all ease-in-out duration-500">Action</a>
                        <a href="#" class="">Another Action</a>
                        <a href="#" class="">Another Action Pro</a>
                    </div>
                    <!--Dropdown-->
                </div>
            </div>
            <!--Search and Action-->
            <!--Orders-->
            <table class="table-auto w-full text-left mt-2">
                <thead class="bg-white bg-opacity-50">
                    <tr>
                        <th class="py-5 px-3 text-xs font-medium text-slate-400">ORDER</th>
                        <th class="py-5 px-3 text-xs font-medium text-slate-400">PRODUCT</th>
                        <th class="py-5 px-3 text-xs font-medium text-slate-400">DATE</th>
                        <th class="py-5 px-3 text-xs font-medium text-slate-400">TOTAL</th>
                        <th class="py-5 px-3 text-xs font-medium text-slate-400">STATUS</th>
                        <th class="py-5 px-3 text-xs font-medium text-slate-400">PAYMENT METHOD</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <template x-for="order in orders" :key="order.order">
                        <tr>
                            <td class="py-5 px-3 text-xs text-slate-800" x-text="order.order"></td>
                            <td class="py-5 px-3 text-xs text-slate-800" x-text="order.product"></td>
                            <td class="py-5 px-3 text-xs text-slate-800" x-text="order.date"></td>
                            <td class="py-5 px-3 text-xs text-slate-800">$<span x-text="order.total"></span></td>
                            <td class="py-5 px-3 text-xs">
                                <span :class=" order.status " 
                                        class="px-2 py-1 rounded-full shadow-sm" x-text="order.status">
                                </span>
                            </td>
                            <td class="py-5 px-3 text-xs text-slate-800" x-text="order.payment">

                            </td>
                            <td class="py-5 px-3 text-xs text-slate-800">
                                <div x-cloak x-data="{open : false}" class="ml-auto relative">
                                    <div @click="open = ! open" class="cursor-pointer">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M0 0h24v24H0z" stroke="none"/>
                                            <circle cx="12" cy="12" r="1"/>
                                            <circle cx="12" cy="19" r="1"/>
                                            <circle cx="12" cy="5" r="1"/>
                                        </svg>
                                    </div>
                                    <div x-show="open" x-transition @click.outside="open = false" class="flex flex-col space-y-3 py-2 px-3 w-[12rem] rounded-md shadow-lg text-sm text-slate-600 absolute right-1 bg-white bg-opacity-25 filter backdrop-blur-md z-10">
                                        <a href="#" class="hover:text-slate-900 transition-all ease-in-out duration-500">Action</a>
                                        <a href="#" class="">Another Action</a>
                                        <a href="#" class="">Another Action Pro</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </template>
                </tbody>
            </table>
            <!--Orders-->
        </div>
        <!--Tables-->
    </div>
    <!--Data-->
</div>
<!--END: Orders-->

@endsection
