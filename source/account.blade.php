@extends('_layouts.main')

@section('body')

<!--BEGIN: Account Overview-->
<div x-cloak x-data="{ tab: $persist('general') }" class="mb-10 md:mx-40">
    <!--Account Tabs-->
    <div class="mt-5">
        <!--Tabs-->
        <div class="overflow-x-auto rounded-full flex bg-white bg-opacity-25 text-xs md:text-xs text-slate-900 font-medium">
            <!--General-->
            <div @click=" tab = 'general' " class="cursor-pointer hover:bg-white hover:bg-opacity-50 px-4 py-4"
            :class=" tab === 'general' ? 'bg-white bg-opacity-50' : '' ">
                General
            </div>
            <!--General-->
            <!--Billing-->
            <div @click=" tab = 'billing' " class="cursor-pointer hover:bg-white hover:bg-opacity-50 px-4 py-4"
            :class=" tab === 'billing' ? 'bg-white bg-opacity-50' : '' ">
                Billing
            </div>
            <!--Billing-->
            <!--Members-->
            <div @click=" tab = 'members' " class="cursor-pointer hover:bg-white hover:bg-opacity-50 px-4 py-4"
            :class=" tab === 'members' ? 'bg-white bg-opacity-50' : '' ">
                Members
            </div>
            <!--Members-->
            <!--Security-->
            <div @click=" tab = 'security' " class="cursor-pointer hover:bg-white hover:bg-opacity-50 px-4 py-4"
            :class=" tab === 'security' ? 'bg-white bg-opacity-50' : '' ">
                Security
            </div>
            <!--Security-->
            <!--Subscribers-->
            <div @click=" tab = 'notifications' " class="cursor-pointer hover:bg-white hover:bg-opacity-50 px-4 py-4"
            :class=" tab === 'notifications' ? 'bg-white bg-opacity-50' : '' ">
                Notifications
            </div>
            <!--Subscribers-->
        </div>
        <!--Tabs-->
    </div>
    <!--Account Tabs-->
    <!--General-->
    <div x-transition x-show="tab === 'general' " class="mt-5 mb-10">
        <div class="py-4 px-4 max-w-full rounded-md bg-white bg-opacity-25 shadow-md filter backdrop-blur">
            <!--Avatar-->
            <div class="flex items-center justify-between border-b border-gray-300 pb-4">
                <!--Image-->
                <div class="flex items-center space-x-2">
                    <img src="../assets/images/profile-pic.jpg" class="h-14 w-14 rounded-full shadow" alt="" />
                    <div class="flex flex-col space-y-1 text-sm font-medium text-slate-900">
                        <h1>Your Avatar</h1>
                        <h1 class="text-xs text-slate-600">PNG or JPG no bigger than 1000px wide and tall.</h1>
                    </div>
                </div>
                <!--Image-->
                <!--Upload-->
                <button class="px-3 py-1 rounded-md text-xs bg-white bg-opacity-50 shadow">
                    Upload
                </button>
                <!--Upload-->
            </div>
            <!--Avatar-->
            <!--Form-->
            <form class="pt-6 pb-8 mb-4 rounded" action="#" method="post">
                <!--Grid-->
                <div class="grid grid-cols-12 gap-6">
                    <!--First Name-->
                    <div class="col-span-12 sm:col-span-6">
                        <label class="relative block mb-2 text-xs font-medium text-slate-800" 
                            for="firstname">
                            First Name
                            <input
                                class="w-full mt-2 px-3 py-2 mb-3 text-xs leading-tight text-slate-600 border border-white bg-transparent rounded-md shadow appearance-none focus:outline-none focus:shadow-outline"
                                id="firstname"
                                type="text"
                                placeholder="First Name"
                            />
                        </label>
                    </div>
                    <!--First Name-->
                    <!--Last Name-->
                    <div class="col-span-12 sm:col-span-6">
                        <label class="relative block mb-2 text-xs font-medium text-slate-800" 
                            for="lastname">
                            Last Name
                            <input
                                class="w-full mt-2 px-3 py-2 mb-3 text-xs leading-tight text-slate-600 border border-white bg-transparent rounded-md shadow appearance-none focus:outline-none focus:shadow-outline"
                                id="lastname"
                                type="text"
                                placeholder="Last Name"
                            />
                        </label>
                    </div>
                    <!--Last Name-->
                    <!--Email-->
                    <div class="col-span-12">
                        <label class="relative block mb-2 text-xs font-medium text-slate-800" 
                            for="email">
                            Email
                            <input
                                class="w-full mt-2 px-3 py-2 mb-3 text-xs leading-tight text-slate-600 border border-white bg-transparent rounded-md shadow appearance-none focus:outline-none focus:shadow-outline"
                                id="email"
                                type="email"
                                placeholder="Email"
                            />
                        </label>
                    </div>
                    <!--Email-->
                    <!--Phone-->
                    <div class="col-span-12 sm:col-span-6">
                        <label class="relative block mb-2 text-xs font-medium text-slate-800" 
                            for="phone">
                            Phone
                            <input
                                class="w-full mt-2 px-3 py-2 mb-3 text-xs leading-tight text-slate-600 border border-white bg-transparent rounded-md shadow appearance-none focus:outline-none focus:shadow-outline"
                                id="phone"
                                type="tel"
                                placeholder="Phone Number"
                            />
                        </label>
                    </div>
                    <!--Phone-->
                    <!--Birthday-->
                    <div class="col-span-12 sm:col-span-6">
                        <label class="relative block mb-2 text-xs font-medium text-slate-800" 
                            for="birthday">
                            Birthday
                            <input
                                class="w-full mt-2 px-3 py-2 mb-3 text-xs leading-tight text-slate-600 border border-white bg-transparent rounded-md shadow appearance-none focus:outline-none focus:shadow-outline"
                                id="birthday"
                                type="date"
                                placeholder="Birthday"
                            />
                        </label>
                    </div>
                    <!--Birthday-->
                    <!--Save-->
                    <div class="col-span-12">
                        <button class="w-auto px-4 py-4 text-xs font-semibold text-slate-700 bg-white bg-opacity-25 hover:bg-opacity-50 hover:shadow-lg shadow-md rounded-full focus:outline-none focus:shadow-outline" type="button">
                            Save Changes
                        </button>
                    </div>
                    <!--Save-->
                    <!--Divider-->
                    <div class="col-span-12 border-b border-gray-300"></div>
                    <!--Divider-->
                    <!--Profile Pic-->
                    <div class="col-span-12 sm:col-span-6">
                        <div class="flex flex-col space-y-2 text-sm text-slate-900">
                            <h1>Profile Pic</h1>
                            <span class="text-xs text-slate-600">
                                Making your profile public means that anyone on the Glassdash network will be able to find you. 
                            </span>
                        </div>
                        <!--Toggle-->
                        <div class="mt-3 flex items-center space-x-6">
                            <!--Switch-->
                            <div x-cloak x-data="{ toggle : false }" @click="toggle = ! toggle" class="relative cursor-pointer h-6 w-12 rounded-full transition-all duration-300 ease-in-out"
                                    :class=" toggle ? 'bg-pink-400' : 'bg-slate-400' ">
                                <span class="absolute h-6 w-6 rounded-full bg-white transition-all duration-300 ease-in-out"
                                    :class=" toggle ? 'translate-x-7' : '' " ></span>
                            </div>
                            <!--Switch-->
                            <h1 class="text-xs text-slate-600">You're currently invisible</h1>
                        </div>
                        <!--Toggle-->
                    </div>
                    <!--Profile Pic-->
                    <!--Booking-->
                    <div class="col-span-12 sm:col-span-6">
                        <div class="flex flex-col space-y-2 text-sm text-slate-900">
                            <h1>Allow for additional Bookings</h1>
                            <span class="text-xs text-slate-600">
                                If you are available for hire outside of the current situation, you can encourage others to hire you. 
                            </span>
                        </div>
                        <!--Toggle-->
                        <div class="mt-3 flex items-center space-x-6">
                            <!--Switch-->
                            <div x-cloak x-data="{ toggle : true }" @click="toggle = ! toggle" class="relative cursor-pointer h-6 w-12 rounded-full transition-all duration-300 ease-in-out"
                                    :class=" toggle ? 'bg-pink-400' : 'bg-slate-400' ">
                                <span class="absolute h-6 w-6 rounded-full bg-white transition-all duration-300 ease-in-out"
                                    :class=" toggle ? 'translate-x-7' : '' " ></span>
                            </div>
                            <!--Switch-->
                            <h1 class="text-xs text-slate-600">You're currently available</h1>
                        </div>
                        <!--Toggle-->
                    </div>
                    <!--Booking-->
                    <!--Divider-->
                    <div class="col-span-12 border-b border-gray-300"></div>
                    <!--Divider-->
                    <!--Delete Account-->
                    <div class="col-span-12">
                        <div class="flex items-center justify-betwenen">
                            <div class="flex flex-col space-y-2 text-sm text-slate-900">
                                <h1>Delete Account</h1>
                                <span class="text-xs text-slate-600">
                                    Please note, deleting your account is a permanent action and will no be recoverable once completed. 
                                </span>
                            </div>
                            <!--Delete Button-->
                            <button class="w-auto px-4 py-3 text-xs font-semibold text-white bg-red-500 bg-opacity-75 hover:bg-opacit9-50 hover:shadow-lg shadow-md rounded-lg focus:outline-none focus:shadow-outline" type="button">
                                Delete
                            </button>
                            <!--Delete Button-->
                        </div>
                    </div>
                    <!--Delete Account-->
                </div>
                <!--Grid-->
            </form>
            <!--Form-->
        </div>
    </div>
    <!--General-->
    <!--Billing-->
    <div x-transition x-show="tab === 'billing' " class="mt-5 mb-10">
        <!--Alert-->
        <div class="mb-4 py-4 px-4 max-w-full rounded-md bg-red-600 shadow-md">
            <div class="flex items-center space-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
                <h1 class="text-xs text-white font-medium">You are near your Server limits.</h1>
            </div>
        </div>
        <!--Alert-->
        <!--Stat-->
        <div class="mb-5 grid grid-cols-12 gap-6">
            <!--Current Plan-->
            <div class="col-span-12 sm:col-span-6">
                <div class="px-4 py-4 flex items-center justify-between bg-white bg-opacity-25 rounded-md shadow-md">
                    <div class="flex flex-col space-y-1">
                        <h1 class="text-xs text-slate-500">CURRENT PLAN</h1>
                        <span class="font-bold text-slate-900">$49/mo</span>
                    </div>
                    <!--Upgrade-->
                    <a href="#" class="flex justify-center items-center mt-2 space-x-2 w-auto px-4 py-2 text-xs font-semibold text-slate-700 bg-pink-500 bg-opacity-25 hover:bg-opacity-50 hover:shadow-lg shadow-md rounded-full focus:outline-none focus:shadow-outline" type="button">
                        <span>Upgrade</span>
                    </a>
                    <!--Upgrade-->
                </div>
            </div>
            <!--Current Plan-->
            <!--Server Usage-->
            <div class="col-span-12 sm:col-span-6">
                <div class="px-4 py-4 flex items-center justify-between bg-white bg-opacity-25 rounded-md shadow-md">
                    <div class="flex flex-col space-y-1">
                        <div class="flex items-center space-x-2 text-xs text-slate-500">
                            <h1>SERVER USAGE</h1>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14M5 12a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2v4a2 2 0 0 1-2 2M5 12a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-4a2 2 0 0 0-2-2m-2-4h.01M17 16h.01"/></svg>
                        </div>
                        <span class="font-bold text-slate-900">145,758 of 150,000</span>
                    </div>
                </div>
            </div>
            <!--Server Usage-->
        </div>
        <!--Stat-->
        <!--Payment Methods-->
        <div class="mb-5 py-4 max-w-full rounded-md bg-white bg-opacity-25 shadow-md filter backdrop-blur">
            <!--Overview-->
            <div class="flex items-center justify-between py-2 border-b border-gray-300">
                <h1 class="pl-4 md:pl-8 text-sm text-slate-900 font-semibold">Payment Methods</h1>
                <div class="pr-4 md:pr-8 flex items-center space-x-2">
                    <!--Add Method-->
                    <button class="px-3 py-1 rounded-md text-xs bg-white bg-opacity-50 shadow">
                        Add Method
                    </button>
                    <!--Add Method-->
                </div>
            </div>
            <!--Overview-->
            <!--Visa-->
            <div class="flex items-center justify-between mx-4 md:mx-8 py-4 border-b border-gray-300">
                <!--Overview-->
                <div class="flex items-center space-x-2">
                    <img src="../assets/images/visa.svg" class="h-6 w-10 rounded" alt="" />
                    <div class="flex flex-col space-y-1">
                        <h1 class="text-sm font-bold text-slate-700">Visa ending in 1234 </h1>
                        <span class="text-xs text-slate-500">Expires 3/2024  </span>
                    </div>
                </div>
                <!--Overview-->
                <div class="flex items-center space-x-2">
                    <!--Default-->
                    <span class="px-3 py-1 rounded-md text-xs bg-slate-500 bg-opacity-50 shadow">
                        Default
                    </span>
                    <!--Default-->
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
            <!--Visa-->
            <!--Mastercard-->
            <div class="flex items-center justify-between mx-4 md:mx-8 py-4 border-b border-gray-300">
                <!--Overview-->
                <div class="flex items-center space-x-2">
                    <img src="../assets/images/mastercard.svg" class="h-6 w-10 rounded" alt="" />
                    <div class="flex flex-col space-y-1">
                        <h1 class="text-sm font-bold text-slate-700">Mastercard ending in 1234  </h1>
                        <span class="text-xs text-slate-500">Expires 3/2024  </span>
                    </div>
                </div>
                <!--Overview-->
                <div class="flex items-center space-x-2">
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
            <!--Mastercard-->
        </div>
        <!--Payment Methods-->
        <!--Invoices-->
        <div class="py-4 max-w-full rounded-md bg-white bg-opacity-25 shadow-md filter backdrop-blur overflow-x-scroll lg:overflow-x-hidden">
            <!--Overview-->
            <div class="p-3 text-sm font-mediumtext-slate-700">
                Invoices
            </div>
            <!--Overview-->
            <!--Invoices-->
            <table class="table-auto w-full text-left mt-2">
                <thead class="bg-white bg-opacity-50">
                    <tr>
                        <th class="py-5 px-3 text-xs font-medium text-slate-400">INVOICE ID</th>
                        <th class="py-5 px-3 text-xs font-medium text-slate-400">DATE</th>
                        <th class="py-5 px-3 text-xs font-medium text-slate-400">AMOUNT</th>
                        <th class="py-5 px-3 text-xs font-medium text-slate-400">STATUS</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="py-5 px-3 text-xs text-sky-800">
                            <a href="invoice.html">Invoice #MVX7925XD</a>
                        </td>
                        <td class="py-5 px-3 text-xs text-slate-800">Mar 23, 2022 </td>
                        <td class="py-5 px-3 text-xs text-slate-800">$6,120</td>
                        <td class="py-5 px-3 text-xs text-white">
                            <span class="px-2 py-1 bg-green-600 rounded-md shadow">Paid</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-5 px-3 text-xs text-sky-800">
                            <a href="invoice.html">Invoice #MVX7925XD</a>
                        </td>
                        <td class="py-5 px-3 text-xs text-slate-800">Apt 03, 2022 </td>
                        <td class="py-5 px-3 text-xs text-slate-800">$99</td>
                        <td class="py-5 px-3 text-xs text-white">
                            <span class="px-2 py-1 bg-yellow-600 rounded-md shadow">Processing</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-5 px-3 text-xs text-sky-800">
                            <a href="invoice.html">Invoice #MVX7925XD</a>
                        </td>
                        <td class="py-5 px-3 text-xs text-slate-800">Apr 17, 2022 </td>
                        <td class="py-5 px-3 text-xs text-slate-800">$20</td>
                        <td class="py-5 px-3 text-xs text-white">
                            <span class="px-2 py-1 bg-green-600 rounded-md shadow">Paid</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-5 px-3 text-xs text-sky-800">
                            <a href="invoice.html">Invoice #MVX7925XD</a>
                        </td>
                        <td class="py-5 px-3 text-xs text-slate-800">Aug 30, 2022 </td>
                        <td class="py-5 px-3 text-xs text-slate-800">$69</td>
                        <td class="py-5 px-3 text-xs text-white">
                            <span class="px-2 py-1 bg-gray-600 rounded-md shadow">Outstanding</span>
                        </td>
                    </tr>
                </tbody>
            </table>
            <!--Invoices-->
        </div>
        <!--Invoices-->
        <!--Cancel-->
        <div class="text-center text-slate-500 mt-3 text-xs font-medium">
            Don’t need Glassdash anymore? <a href="#" class="text-sky-800">Cancel your account</a>
        </div>
        <!--Cancel-->
    </div>
    <!--Billing-->
    <!--Members-->
    <div x-transition x-show="tab === 'members' " class="mt-5 mb-10">
        <!--Stat-->
        <div class="mb-5 grid grid-cols-12 gap-6">
            <!--SLOTS AVAILABLE-->
            <div class="col-span-12 sm:col-span-6">
                <div class="px-4 py-4 flex items-center justify-between bg-white bg-opacity-25 rounded-md shadow-md">
                    <div class="flex flex-col space-y-1">
                        <h1 class="text-xs text-slate-500">SLOTS AVAILABLE</h1>
                        <span class="font-bold text-slate-900">6 of 10</span>
                    </div>
                    <!--Upgrade-->
                    <a href="#" class="flex justify-center items-center mt-2 space-x-2 w-auto px-4 py-2 text-xs font-semibold text-slate-700 bg-pink-500 bg-opacity-25 hover:bg-opacity-50 hover:shadow-lg shadow-md rounded-full focus:outline-none focus:shadow-outline" type="button">
                        <span>Upgrade</span>
                    </a>
                    <!--Upgrade-->
                </div>
            </div>
            <!--SLOTS AVAILABLE-->
            <!--DEFAULT ROLE-->
            <div class="col-span-12 sm:col-span-6">
                <div class="px-4 py-4 flex items-center justify-between bg-white bg-opacity-25 rounded-md shadow-md">
                    <div class="flex flex-col space-y-1">
                        <div class="flex items-center space-x-2 text-xs text-slate-500">
                            <h1>DEFAULT ROLE</h1>
                        </div>
                        <span class="font-bold text-slate-900">Artisan</span>
                    </div>
                    <!--Change-->
                    <a href="#" class="flex justify-center items-center mt-2 space-x-2 w-auto px-4 py-2 text-xs font-semibold text-slate-700 bg-white bg-opacity-50 hover:bg-opacity-50 hover:shadow-lg shadow-md rounded-full focus:outline-none focus:shadow-outline" type="button">
                        <span>Change</span>
                    </a>
                    <!--Change-->
                </div>
            </div>
            <!--DEFAULT ROLE-->
        </div>
        <!--Stat-->
        <!--Members-->
        <div class="mb-5 py-4 max-w-full rounded-md bg-white bg-opacity-25 shadow-md filter backdrop-blur">
            <!--Overview-->
            <div class="flex items-center justify-between py-2 border-b border-gray-300">
                <h1 class="pl-4 md:pl-8 text-sm text-slate-900 font-semibold">Members</h1>
                <div class="pr-4 md:pr-8 flex items-center space-x-2">
                    <!--Add Member-->
                    <button class="px-3 py-1 rounded-md text-xs bg-white bg-opacity-50 shadow">
                        Add Member
                    </button>
                    <!--Add Member-->
                </div>
            </div>
            <!--Overview-->
            @foreach ($page->users as $user)
            <!--Team Member-->
            <div class="flex items-center justify-between mx-4 md:mx-8 py-4 border-b border-gray-300">
                <!--Overview-->
                <div class="flex items-center space-x-2">
                    <img src="{{'../assets/images/'.$user->photo}}" class="h-12 w-12 rounded-full shadow" alt="" />
                    <div class="flex flex-col space-y-1">
                        <h1 class="text-sm font-semibold text-slate-700">{{$user->name}}</h1>
                        <span class="text-xs text-slate-500">{{$user->email}}</span>
                    </div>
                </div>
                <!--Overview-->
                <div class="flex items-center space-x-2">
                    <!--Default-->
                    <select class="text-xs font-medium rounded text-slate-900 block py-1 w-full px-0.5 border-0 bg-white bg-opacity-25  focus:ring-0 focus:border-black">
                        <option>Admin</option>
                        <option>Staff</option>
                        <option>Artisan</option>
                    </select>
                    <!--Default-->
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
            <!--Team Member-->
            @endforeach
        </div>
        <!--Members-->
    </div>
    <!--Members-->
    <!--Security-->
    <div x-transition x-show="tab === 'security' " class="mt-5 mb-10">
        <!--Two Factor Authentication-->
        <div class="my-10 flex flex-col sm:flex-row lg:space-x-20 space-y-4 lg:items-center justify-center">
            <div class="flex flex-col space-y-2">
                <h1 class="text-lg font-semibold text-slate-900">Two factor authentication</h1>
                <span class="text-xs font-medium text-slate-500">
                    Two-factor authentication adds an additional layer of security to your account by requiring more than just a password to log in. 
                </span>
            </div>
            <!--Enable-->
            <button class="w-auto px-3 py-3 rounded-md text-sm text-white bg-blue-600 shadow">
                Enable
            </button>
            <!--Enable-->
        </div>
        <!--Two Factor Authentication-->
        <!--Change Password-->
        <div class="py-4 max-w-full rounded-md bg-white bg-opacity-25 shadow-md filter backdrop-blur">
            <!--Forgot Password-->
            <div class="my-10 px-4 flex flex-col sm:flex-row lg:space-x-20 space-y-4 lg:items-center justify-center">
                <div class="flex flex-col space-y-2">
                    <h1 class="text-lg font-semibold text-slate-900">Change your password </h1>
                    <span class="text-xs font-normal text-slate-500">
                        We will email you a confirmation when changing your password, so please expect that email after submitting. 
                    </span>
                </div>
                <!--Forgot Password-->
                <button class="w-full px-1 py-3 rounded-md text-sm text-slate-700 bg-white shadow">
                    Forgot your password?
                </button>
                <!--Forgot Password-->
            </div>
            <!--Forgot Password-->
            <!--Change Password-->
            <div class="px-4 grid grid-cols-12 gap-6">
                <!--Form-->
                <div class="col-span-12 sm:col-span-6">
                    <form action="#" method="post">
                        <!--Current Password-->
                        <div x-data="{open: false, type: 'password'}" class="mb-4">
                            <label class="relative block mb-2 text-xs font-medium text-slate-800" for="current_password">
                                Current Password
                                <svg x-show="open === true" @click="open = false, type = 'password'" xmlns="http://www.w3.org/2000/svg" class="absolute inset-y-0 right-0 mt-8 mr-4 cursor-pointer h-5 w-5" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round" style="display: none;"><path d="M0 0h24v24H0z" stroke="none"></path><path d="m3 3 18 18M10.584 10.587a2 2 0 0 0 2.828 2.83"></path><path d="M9.363 5.365A9.466 9.466 0 0 1 12 5c4 0 7.333 2.333 10 7-.778 1.361-1.612 2.524-2.503 3.488m-2.14 1.861C15.726 18.449 13.942 19 12 19c-4 0-7.333-2.333-10-7 1.369-2.395 2.913-4.175 4.632-5.341"></path></svg>
                                <svg x-show="open != true" @click="open = true, type = 'text'" xmlns="http://www.w3.org/2000/svg" class="absolute inset-y-0 right-0 mt-8 mr-4 cursor-pointer h-5 w-5" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round"><path d="M0 0h24v24H0z" stroke="none"></path><circle cx="12" cy="12" r="2"></circle><path d="M22 12c-2.667 4.667-6 7-10 7s-7.333-2.333-10-7c2.667-4.667 6-7 10-7s7.333 2.333 10 7"></path></svg>
                                <input class="w-full mt-2 px-3 py-2 mb-3 text-xs leading-tight text-slate-600 border border-white bg-transparent rounded-md shadow appearance-none focus:outline-none focus:shadow-outline" id="current_password" :type="type" type="password">
                            </label>
                        </div>
                        <!--Current Password-->
                        <!--New Password-->
                        <div x-data="{open: false, type: 'password'}" class="mb-4">
                            <label class="relative block mb-2 text-xs font-medium text-slate-800" for="new_password">
                                New Password
                                <svg x-show="open === true" @click="open = false, type = 'password'" xmlns="http://www.w3.org/2000/svg" class="absolute inset-y-0 right-0 mt-8 mr-4 cursor-pointer h-5 w-5" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round" style="display: none;"><path d="M0 0h24v24H0z" stroke="none"></path><path d="m3 3 18 18M10.584 10.587a2 2 0 0 0 2.828 2.83"></path><path d="M9.363 5.365A9.466 9.466 0 0 1 12 5c4 0 7.333 2.333 10 7-.778 1.361-1.612 2.524-2.503 3.488m-2.14 1.861C15.726 18.449 13.942 19 12 19c-4 0-7.333-2.333-10-7 1.369-2.395 2.913-4.175 4.632-5.341"></path></svg>
                                <svg x-show="open != true" @click="open = true, type = 'text'" xmlns="http://www.w3.org/2000/svg" class="absolute inset-y-0 right-0 mt-8 mr-4 cursor-pointer h-5 w-5" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round"><path d="M0 0h24v24H0z" stroke="none"></path><circle cx="12" cy="12" r="2"></circle><path d="M22 12c-2.667 4.667-6 7-10 7s-7.333-2.333-10-7c2.667-4.667 6-7 10-7s7.333 2.333 10 7"></path></svg>
                                <input class="w-full mt-2 px-3 py-2 mb-3 text-xs leading-tight text-slate-600 border border-white bg-transparent rounded-md shadow appearance-none focus:outline-none focus:shadow-outline" id="new_password" :type="type" type="password">
                            </label>
                        </div>
                        <!--New Password-->
                        <!--Confirm Password-->
                        <div x-data="{open: false, type: 'password'}" class="mb-4">
                            <label class="relative block mb-2 text-xs font-medium text-slate-800" for="confirm_password">
                                Confirm Password
                                <svg x-show="open === true" @click="open = false, type = 'password'" xmlns="http://www.w3.org/2000/svg" class="absolute inset-y-0 right-0 mt-8 mr-4 cursor-pointer h-5 w-5" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round" style="display: none;"><path d="M0 0h24v24H0z" stroke="none"></path><path d="m3 3 18 18M10.584 10.587a2 2 0 0 0 2.828 2.83"></path><path d="M9.363 5.365A9.466 9.466 0 0 1 12 5c4 0 7.333 2.333 10 7-.778 1.361-1.612 2.524-2.503 3.488m-2.14 1.861C15.726 18.449 13.942 19 12 19c-4 0-7.333-2.333-10-7 1.369-2.395 2.913-4.175 4.632-5.341"></path></svg>
                                <svg x-show="open != true" @click="open = true, type = 'text'" xmlns="http://www.w3.org/2000/svg" class="absolute inset-y-0 right-0 mt-8 mr-4 cursor-pointer h-5 w-5" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round"><path d="M0 0h24v24H0z" stroke="none"></path><circle cx="12" cy="12" r="2"></circle><path d="M22 12c-2.667 4.667-6 7-10 7s-7.333-2.333-10-7c2.667-4.667 6-7 10-7s7.333 2.333 10 7"></path></svg>
                                <input class="w-full mt-2 px-3 py-2 mb-3 text-xs leading-tight text-slate-600 border border-white bg-transparent rounded-md shadow appearance-none focus:outline-none focus:shadow-outline" id="confirm_password" :type="type" type="password">
                            </label>
                        </div>
                        <!--Confirm Password-->
                        <!--Update Password-->
                        <button class="w-full px-1 py-3 rounded-md text-sm text-slate-700 bg-white bg-opacity-25 shadow">
                            Update Password
                        </button>
                        <!--Update Password-->
                    </form>
                </div>
                <!--Form-->
            </div>
            <!--Change Password-->
        </div>
        <!--Change Password-->
        <!--Device History-->
        <div class="my-10 flex flex-col sm:flex-row lg:space-x-20 space-y-4 lg:items-center justify-center">
            <div class="flex flex-col space-y-2">
                <h1 class="text-lg font-semibold text-slate-900">Device History </h1>
                <span class="text-xs font-normal text-slate-500">
                    If you see a device here that you believe wasn’t you, please contact our account fraud department immediately.
                </span>
            </div>
            <!--Logout all devices-->
            <button class="w-full px-2 py-2 rounded-md text-sm text-slate-700 bg-white bg-opacity-50 shadow">
                Logout all devices
            </button>
            <!--Logout all devices-->
        </div>
        <!--Device History-->
        <!--Devices-->
        <div class="mb-5 py-4 max-w-full rounded-md bg-white bg-opacity-25 shadow-md filter backdrop-blur">
            <!--Device-->
            <div class="flex items-center justify-between mx-4 md:mx-8 py-4 border-b border-gray-300">
                <!--Overview-->
                <div class="flex items-center space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-slate-700" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 18h.01M8 21h8a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2H8a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2z"/></svg>
                    <div class="flex flex-col space-y-1">
                        <h1 class="text-sm font-semibold text-slate-900">IPhone 11 </h1>
                        <span class="text-xs text-slate-500">Los Angeles, CA · April 20 at 4:16pm</span>
                    </div>
                </div>
                <!--Overview-->
                <!--Logout-->
                <button class="px-3 py-1 rounded-md text-xs bg-white bg-opacity-50 shadow">
                    Logout
                </button>
                <!--Logout-->
            </div>
            <!--Device-->
            <!--Device-->
            <div class="flex items-center justify-between mx-4 md:mx-8 py-4 border-b border-gray-300">
                <!--Overview-->
                <div class="flex items-center space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-slate-700" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9.75 17 9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2z"/></svg>
                    <div class="flex flex-col space-y-1">
                        <h1 class="text-sm font-semibold text-slate-900">iMac OSX · Safari 10.2 </h1>
                        <span class="text-xs text-slate-500">Los Angeles, CA · April 20 at 4:16pm</span>
                    </div>
                </div>
                <!--Overview-->
                <!--Logout-->
                <button class="px-3 py-1 rounded-md text-xs bg-white bg-opacity-50 shadow">
                    Logout
                </button>
                <!--Logout-->
            </div>
            <!--Device-->
            <!--Device-->
            <div class="flex items-center justify-between mx-4 md:mx-8 py-4 border-b border-gray-300">
                <!--Overview-->
                <div class="flex items-center space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-slate-700" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 18h.01M8 21h8a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2H8a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2z"/></svg>
                    <div class="flex flex-col space-y-1">
                        <h1 class="text-sm font-semibold text-slate-900">IPhone 11 </h1>
                        <span class="text-xs text-slate-500">Los Angeles, CA · April 20 at 4:16pm</span>
                    </div>
                </div>
                <!--Overview-->
                <!--Logout-->
                <button class="px-3 py-1 rounded-md text-xs bg-white bg-opacity-50 shadow">
                    Logout
                </button>
                <!--Logout-->
            </div>
            <!--Device-->
            <!--Device-->
            <div class="flex items-center justify-between mx-4 md:mx-8 py-4">
                <!--Overview-->
                <div class="flex items-center space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-slate-700" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9.75 17 9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2z"/></svg>
                    <div class="flex flex-col space-y-1">
                        <h1 class="text-sm font-semibold text-slate-900">iMac OSX · Safari 10.2 </h1>
                        <span class="text-xs text-slate-500">Los Angeles, CA · April 20 at 4:16pm</span>
                    </div>
                </div>
                <!--Overview-->
                <!--Logout-->
                <button class="px-3 py-1 rounded-md text-xs bg-white bg-opacity-50 shadow">
                    Logout
                </button>
                <!--Logout-->
            </div>
            <!--Device-->
        </div>
        <!--Devices-->
    </div>
    <!--Security-->
    <!--Notifications-->
    <div x-transition x-show="tab === 'notifications' " class="mt-5 mb-10">
        <!--Notifications-->
        <div class="mb-5 py-4 max-w-full rounded-md bg-white bg-opacity-25 shadow-md filter backdrop-blur">
            <!--Overview-->
            <div class="flex items-center justify-between py-2 border-b border-gray-300">
                <h1 class="pl-4 md:pl-8 text-sm text-slate-900 font-semibold">Notifications</h1>
                <div class="pr-4 md:pr-8 flex items-center space-x-2">
                    <!--Disable all-->
                    <button class="px-3 py-1 rounded-md text-xs bg-white bg-opacity-50 shadow">
                        Disable all
                    </button>
                    <!--Disable all-->
                </div>
            </div>
            <!--Overview-->
            <!--Push-->
            <div class="flex items-center justify-between mx-4 md:mx-8 py-6 border-b border-gray-300">
                <!--Overview-->
                <div class="flex items-center space-x-2">
                    <h1 class="text-sm font-medium text-slate-700">Push Notifications </h1>
                </div>
                <!--Overview-->
                <!--Switcher-->
                <!--Switch-->
                <div x-cloak x-data="{ toggle : false }" @click="toggle = ! toggle" class="relative cursor-pointer h-6 w-12 rounded-full transition-all duration-300 ease-in-out"
                    :class=" toggle ? 'bg-pink-400' : 'bg-slate-400' ">
                    <span class="absolute h-6 w-6 rounded-full bg-white transition-all duration-300 ease-in-out"
                        :class=" toggle ? 'translate-x-7' : '' " ></span>
                </div>
                <!--Switch-->
                <!--Switcher-->
            </div>
            <!--Push-->
            <!--SMS-->
            <div class="flex items-center justify-between mx-4 md:mx-8 py-6 border-b border-gray-300">
                <!--Overview-->
                <div class="flex items-center space-x-2">
                    <h1 class="text-sm font-medium text-slate-700">SMS Notifications </h1>
                </div>
                <!--Overview-->
                <!--Switcher-->
                <!--Switch-->
                <div x-cloak x-data="{ toggle : false }" @click="toggle = ! toggle" class="relative cursor-pointer h-6 w-12 rounded-full transition-all duration-300 ease-in-out"
                    :class=" toggle ? 'bg-pink-400' : 'bg-slate-400' ">
                    <span class="absolute h-6 w-6 rounded-full bg-white transition-all duration-300 ease-in-out"
                        :class=" toggle ? 'translate-x-7' : '' " ></span>
                </div>
                <!--Switch-->
                <!--Switcher-->
            </div>
            <!--SMS-->
            <!--Email-->
            <div class="flex items-center justify-between mx-4 md:mx-8 py-6">
                <!--Overview-->
                <div class="flex items-center space-x-2">
                    <h1 class="text-sm font-medium text-slate-700">Email Notifications </h1>
                </div>
                <!--Overview-->
                <!--Switcher-->
                <!--Switch-->
                <div x-cloak x-data="{ toggle : false }" @click="toggle = ! toggle" class="relative cursor-pointer h-6 w-12 rounded-full transition-all duration-300 ease-in-out"
                    :class=" toggle ? 'bg-pink-400' : 'bg-slate-400' ">
                    <span class="absolute h-6 w-6 rounded-full bg-white transition-all duration-300 ease-in-out"
                        :class=" toggle ? 'translate-x-7' : '' " ></span>
                </div>
                <!--Switch-->
                <!--Switcher-->
            </div>
            <!--Email-->
        </div>
        <!--Notifications-->
        <!--Subscriptions-->
        <div class="mb-5 py-4 max-w-full rounded-md bg-white bg-opacity-25 shadow-md filter backdrop-blur">
            <!--Overview-->
            <div class="flex items-center justify-between py-2 border-b border-gray-300">
                <h1 class="pl-4 md:pl-8 text-sm text-slate-900 font-semibold">Subscriptions</h1>
                <div class="pr-4 md:pr-8 flex items-center space-x-2">
                    <!--Unsubscribe all-->
                    <button class="px-3 py-1 rounded-md text-xs bg-white bg-opacity-50 shadow">
                        Unsubscribe all
                    </button>
                    <!--Unsubscribe all-->
                </div>
            </div>
            <!--Overview-->
            <!--Sales & Promotions-->
            <div class="flex items-center justify-between mx-4 md:mx-8 py-6 border-b border-gray-300">
                <!--Overview-->
                <div class="flex items-center space-x-2">
                    <div class="flex flex-col space-y-2">
                        <h1 class="text-sm font-medium text-slate-700">Sales & Promotions </h1>
                        <span class="text-xs text-slate-500">We only notify you for significant promotions </span>
                    </div>
                </div>
                <!--Overview-->
                <!--Switcher-->
                <!--Switch-->
                <div x-cloak x-data="{ toggle : true }" @click="toggle = ! toggle" class="relative cursor-pointer h-6 w-12 rounded-full transition-all duration-300 ease-in-out"
                    :class=" toggle ? 'bg-pink-400' : 'bg-slate-400' ">
                    <span class="absolute h-6 w-6 rounded-full bg-white transition-all duration-300 ease-in-out"
                        :class=" toggle ? 'translate-x-7' : '' " ></span>
                </div>
                <!--Switch-->
                <!--Switcher-->
            </div>
            <!--Sales & Promotions-->
            <!--Product updates-->
            <div class="flex items-center justify-between mx-4 md:mx-8 py-6 border-b border-gray-300">
                <!--Overview-->
                <div class="flex items-center space-x-2">
                    <div class="flex flex-col space-y-2">
                        <h1 class="text-sm font-medium text-slate-700"> Product updates </h1>
                        <span class="text-xs text-slate-500">Major changes in our product offering  </span>
                    </div>
                </div>
                <!--Overview-->
                <!--Switcher-->
                <!--Switch-->
                <div x-cloak x-data="{ toggle : true }" @click="toggle = ! toggle" class="relative cursor-pointer h-6 w-12 rounded-full transition-all duration-300 ease-in-out"
                    :class=" toggle ? 'bg-pink-400' : 'bg-slate-400' ">
                    <span class="absolute h-6 w-6 rounded-full bg-white transition-all duration-300 ease-in-out"
                        :class=" toggle ? 'translate-x-7' : '' " ></span>
                </div>
                <!--Switch-->
                <!--Switcher-->
            </div>
            <!--Product updates-->
            <!--Newsletter-->
            <div class="flex items-center justify-between mx-4 md:mx-8 py-6">
                <!--Overview-->
                <div class="flex items-center space-x-2">
                    <div class="flex flex-col space-y-2">
                        <h1 class="text-sm font-medium text-slate-700">Newsletter </h1>
                        <span class="text-xs text-slate-500">Updates on what’s going on here at glassdash.  </span>
                    </div>
                </div>
                <!--Overview-->
                <!--Switcher-->
                <!--Switch-->
                <div x-cloak x-data="{ toggle : true }" @click="toggle = ! toggle" class="relative cursor-pointer h-6 w-12 rounded-full transition-all duration-300 ease-in-out"
                    :class=" toggle ? 'bg-pink-400' : 'bg-slate-400' ">
                    <span class="absolute h-6 w-6 rounded-full bg-white transition-all duration-300 ease-in-out"
                        :class=" toggle ? 'translate-x-7' : '' " ></span>
                </div>
                <!--Switch-->
                <!--Switcher-->
            </div>
            <!--Newsletter-->
        </div>
        <!--Subscriptions-->
    </div>
    <!--Notifications-->
</div>
<!--END: Account Overview-->
@endsection
