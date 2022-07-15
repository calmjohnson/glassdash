@extends('_layouts.main')

@section('body')
<!--BEGIN: Invoice-->
<div class="mb-10 md:mx-40 grid grid-cols-12 gap-6">
    <!--Overview-->
    <div class="col-span-12 border-b border-slate-400 pb-5">
        <div class="flex items-center justify-between">
            <div class="flex flex-col">
                <h5 class="text-xs text-slate-500">payments</h5>
                <h1 class="text-base lg:text-2xl font-medium">Invoice #MVX7925XD </h1>
            </div>
            <div class="flex items-center space-x-2">
                <button class="w-full px-4 py-2 text-xs font-semibold text-slate-700 bg-white bg-opacity-25 hover:bg-opacity-50 hover:shadow-lg shadow-md rounded-full focus:outline-none focus:shadow-outline" type="button">
                    Download
                </button>
                <button class="w-full px-4 py-2 text-xs font-semibold text-slate-700 bg-sky-400 bg-opacity-25 hover:bg-opacity-50 hover:shadow-lg shadow-md rounded-full focus:outline-none focus:shadow-outline" type="button">
                    Pay
                </button>
            </div>
        </div>
    </div>
    <!--Overview-->
    <!--Receipt-->
    <div class="relative w-full col-span-12">
        <!--Status-->
        <div class="absolute top-0 right-0 z-10">
            <span class="px-2 mt-5 md:mr-10 rounded-md bg-green-600 text-white text-xs">Paid</span>
        </div>
        <!--Status-->
        <div class="w-full py-10 rounded-md bg-white bg-opacity-25 filter backdrop-blur-md">
            <div class="flex flex-col justify-center items-center">
                <!--Logo-->
                <img src="../assets/images/Glass_icon2.svg" alt="Glassdash Tailwind and Alpine HTML Admin Template" class="w-10 mb-5">
                <!--Logo-->
                <!--Title-->
                <h1 class="mb-2 text-lg text-slate-900 font-semibold">Invoice from Glassdash</h1>
                <!--title-->
                <!--overview-->
                <h1 class="mb-5 text-sm text-slate-600 font-medium">Invoice #MVX7925XD </h1>
                <!--overview-->
            </div>
            <!--Details-->
            <div class="px-5 flex flex-col space-y-4 md:flex-row md:items-center md:justify-between">
                <!--From-->
                <div class="flex flex-col">
                    <h5 class="text-xs font-medium text-slate-500">Invoiced from</h5>
                    <h1 class="mt-4 text-sm font-semibold text-slate-900">James Bondman</h1>
                    <p class="mt-1 text-sm text-slate-500 font-medium">CEO of HTML Davinci </p>
                    <p class="mt-1 text-xs text-slate-400 font-medium">OJO Alaba International <br>
                        Lagos State, NG </p>

                    <!--Invoice ID-->
                    <h1 class="mt-5 text-sm font-normal capitalize text-slate-400">Invoiced ID</h1>
                    <p class="text-xs font-medium text-slate-700">#MVX7925XD </p>
                    <!--Invoice ID-->
                </div>
                <!--From-->
                <!--To-->
                <div class="flex flex-col">
                    <h5 class="text-xs font-medium text-slate-500">Invoiced to</h5>
                    <h1 class="mt-4 text-sm font-semibold text-slate-900">Auric Goldfinger</h1>
                    <p class="mt-1 text-sm text-slate-500 font-medium">Template Purchaser</p>
                    <p class="mt-1 text-xs text-slate-400 font-medium">Aguda Surulere<br>
                        Lagos State, NG </p>

                    <!--Due Date-->
                    <h1 class="mt-5 text-sm font-normal capitalize text-slate-400">Due Date</h1>
                    <p class="text-xs font-medium text-slate-700">Mar 23, 2022 </p>
                    <!--Due Date-->
                </div>
                <!--To-->
            </div>
            <!--Details-->
            <!--Items-->
            <div class="px-5 w-full">
                <table class="table-auto w-full text-left mt-10">
                    <thead>
                        <tr>
                            <th class="py-4 text-xs text-slate-400 font-medium capitalize">Title</th>
                            <th class="py-4 text-xs text-slate-400 font-medium capitalize">Quantity</th>
                            <th class="py-4 text-xs text-slate-400 font-medium capitalize">Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-t border-slate-400 text-sm text-slate-900">
                            <td class="py-4 border-t border-slate-400 text-sm text-slate-900">Mac Book Pro M1 Max Laptop</td>
                            <td class="py-4 border-t border-slate-400 text-sm text-slate-900">258</td>
                            <td class="py-4 border-t border-slate-400 text-sm text-slate-900">$565</td>
                        </tr>
                        <tr>
                            <td class="py-4 border-t border-slate-400 text-sm text-slate-900">Nokie 3310</td>
                            <td class="py-4 border-t border-slate-400 text-sm text-slate-900">28</td>
                            <td class="py-4 border-t border-slate-400 text-sm text-slate-900">$4,565</td>
                        </tr>
                        <tr class="py-5 border-t border-slate-400 text-sm text-slate-900">
                            <td class="py-4 border-t border-slate-400 text-sm text-slate-900">One year SASS subscription</td>
                            <td class="py-4 border-t border-slate-400 text-sm text-slate-900">1</td>
                            <td class="py-4 border-t border-slate-400 text-sm text-slate-900">$990</td>
                        </tr>
                        <tr class="py-5 border-t border-slate-400 text-sm text-slate-900">
                            <td class="py-4 border-t font-bold border-slate-400 text-sm text-slate-900">Total Amount Paid</td>
                            <td></td>
                            <td class="py-4 border-t font-bold border-slate-400 text-sm text-slate-900">$6,120</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!--Items-->
            <!--Note-->
            <div class="mt-10 px-5">
                <hr class="mb-5 border-t border-slate-400">
                <h1 class="text-sm text-slate-700 capitalize">Note</h1>
                <p class="mt-3 text-xs text-slate-500">
                    Thank you for your patronage, it was nice doing business with you. If you have 
                    any questions or inquiry please let us know and we will attend to is within 24 
                    hours.
                </p>
            </div>
            <!--Note-->
        </div>
    </div>
    <!--Receipt-->
</div>
<!--END: Invoice-->
@endsection
