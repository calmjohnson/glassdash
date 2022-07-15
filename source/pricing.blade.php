@extends('_layouts.main')

@section('body')

<!--BEGIN: Pricing-->
<div x-cloak x-data="{tenure : $persist('monthly')}" class="mb-10 md:mx-32 flex flex-col justify-center items-center">
    <h1 class="mb-8 text-3xl font-black text-slate-900 text-center">Pricing and Plans</h1>
    <!--Toggle-->
    <div class="mb-8">
        <div class="flex">
            <button @click="tenure = 'monthly'" :class="tenure === 'monthly' ? 'bg-opacity-75' : 'bg-opacity-25'" class="w-full px-4 py-2 text-base font-semibold text-slate-700 bg-white hover:bg-opacity-60 hover:shadow-lg shadow-md rounded-l-full focus:outline-none focus:shadow-outline" type="button">
                Monthly
            </button>
            <button @click="tenure = 'yearly'" :class="tenure === 'yearly' ? 'bg-opacity-75' : 'bg-opacity-25'" class="w-full px-4 py-2 text-base font-semibold text-slate-700 bg-white hover:bg-opacity-60 hover:shadow-lg shadow-md rounded-r-full focus:outline-none focus:shadow-outline" type="button">
                Yearly
            </button>
        </div>
    </div>
    <!--Toggle-->
    <!--Monthly Plans-->
    <div x-show="tenure === 'monthly'" x-transition class="flex flex-col md:flex-row md:-space-x-6 w-full">
        <!--Plan-->
        <div class="py-10 px-5 h-full w-full flex flex-col justify-center items-center space-y-6 bg-white bg-opacity-25 rounded-t-xl shadow-lg shadow-pink-300 border border-white filter backdrop-blur">
            <!--Icon-->
            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-white" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M6 6V5a3 3 0 0 1 3-3h2a3 3 0 0 1 3 3v1h2a2 2 0 0 1 2 2v3.57A22.952 22.952 0 0 1 10 13a22.95 22.95 0 0 1-8-1.43V8a2 2 0 0 1 2-2h2zm2-1a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v1H8V5zm1 5a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2H10a1 1 0 0 1-1-1z" clip-rule="evenodd"/><path d="M2 13.692V16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-2.308A24.974 24.974 0 0 1 10 15a24.98 24.98 0 0 1-8-1.308z"/></svg>
            <!--Icon-->
            <!--Title-->
            <h1 class="text-2xl font-black text-slate-900">Business</h1>
            <!--Title-->
            <!--Price-->
            <div class="flex items-center text-5xl font-black text-slate-900">
                <span class="text-lg font-semibold">$</span>
                <span>49</span>
            </div>
            <!--Price-->
            <!--Features-->
            <ul class="space-y-6">
                <li class="flex items-center text-xs text-slate-800 font-medium space-x-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-pink-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 12 2 2 4-4m6-4a12 12 0 0 1-9-3 12 12 0 0 1-9 3 12 12 0 0 0 0 3c0 6 4 10 9 12a12 12 0 0 0 9-15z"/>
                    </svg>                                      
                    <span>Unlimited activity</span>
                </li>
                <li class="flex items-center text-xs text-slate-800 font-medium space-x-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-pink-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 12 2 2 4-4m6-4a12 12 0 0 1-9-3 12 12 0 0 1-9 3 12 12 0 0 0 0 3c0 6 4 10 9 12a12 12 0 0 0 9-15z"/>
                    </svg>                                      
                    <span>Direct messaging</span>
                </li>
                <li class="flex items-center text-xs text-slate-800 font-medium space-x-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-pink-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 12 2 2 4-4m6-4a12 12 0 0 1-9-3 12 12 0 0 1-9 3 12 12 0 0 0 0 3c0 6 4 10 9 12a12 12 0 0 0 9-15z"/>
                    </svg>                                      
                    <span>Unlimited membership</span>
                </li>
                <li class="flex items-center text-xs text-slate-800 font-medium space-x-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-pink-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 12 2 2 4-4m6-4a12 12 0 0 1-9-3 12 12 0 0 1-9 3 12 12 0 0 0 0 3c0 6 4 10 9 12a12 12 0 0 0 9-15z"/>
                    </svg>                                      
                    <span>Infinite Espionage</span>
                </li>
            </ul>
            <!--Features-->
            <!--CTA-->
            <div class="border-t border-pink-100">
                <a href="#" class="flex justify-center items-center mt-2 space-x-2 w-full px-4 py-2 text-xs font-semibold text-slate-700 bg-white bg-opacity-25 hover:bg-opacity-50 hover:shadow-lg shadow-md rounded-full focus:outline-none focus:shadow-outline" type="button">
                    <span>Purchase This Plan</span>
                </a>
            </div>
            <!--CTA-->
        </div>
        <!--Plan-->
        <!--Plan-->
        <div class="z-10 mt-5 py-10 px-5 h-full w-full flex flex-col justify-center items-center space-y-8 bg-white bg-opacity-25 rounded-t-xl shadow-xl shadow-pink-300 border border-white filter backdrop-blur">
            <!--Icon-->
            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-white" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M6 6V5a3 3 0 0 1 3-3h2a3 3 0 0 1 3 3v1h2a2 2 0 0 1 2 2v3.57A22.952 22.952 0 0 1 10 13a22.95 22.95 0 0 1-8-1.43V8a2 2 0 0 1 2-2h2zm2-1a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v1H8V5zm1 5a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2H10a1 1 0 0 1-1-1z" clip-rule="evenodd"/><path d="M2 13.692V16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-2.308A24.974 24.974 0 0 1 10 15a24.98 24.98 0 0 1-8-1.308z"/></svg>
            <!--Icon-->
            <!--Title-->
            <h1 class="text-2xl font-black text-slate-900">Enterprise</h1>
            <!--Title-->
            <!--Price-->
            <div class="flex items-center text-5xl font-black text-slate-900">
                <span class="text-lg font-semibold">$</span>
                <span>99</span>
            </div>
            <!--Price-->
            <!--Features-->
            <ul class="space-y-6">
                <li class="flex items-center text-xs text-slate-800 font-medium space-x-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-pink-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 12 2 2 4-4m6-4a12 12 0 0 1-9-3 12 12 0 0 1-9 3 12 12 0 0 0 0 3c0 6 4 10 9 12a12 12 0 0 0 9-15z"/>
                    </svg>                                      
                    <span>Unlimited activity</span>
                </li>
                <li class="flex items-center text-xs text-slate-800 font-medium space-x-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-pink-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 12 2 2 4-4m6-4a12 12 0 0 1-9-3 12 12 0 0 1-9 3 12 12 0 0 0 0 3c0 6 4 10 9 12a12 12 0 0 0 9-15z"/>
                    </svg>                                      
                    <span>Direct messaging</span>
                </li>
                <li class="flex items-center text-xs text-slate-800 font-medium space-x-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-pink-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 12 2 2 4-4m6-4a12 12 0 0 1-9-3 12 12 0 0 1-9 3 12 12 0 0 0 0 3c0 6 4 10 9 12a12 12 0 0 0 9-15z"/>
                    </svg>                                      
                    <span>Unlimited membership</span>
                </li>
                <li class="flex items-center text-xs text-slate-800 font-medium space-x-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-pink-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 12 2 2 4-4m6-4a12 12 0 0 1-9-3 12 12 0 0 1-9 3 12 12 0 0 0 0 3c0 6 4 10 9 12a12 12 0 0 0 9-15z"/>
                    </svg>                                      
                    <span>Infinite Espionage</span>
                </li>
                <li class="flex items-center text-xs text-slate-800 font-medium space-x-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-pink-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 12 2 2 4-4m6-4a12 12 0 0 1-9-3 12 12 0 0 1-9 3 12 12 0 0 0 0 3c0 6 4 10 9 12a12 12 0 0 0 9-15z"/>
                    </svg>                                      
                    <span>Custom feature requests</span>
                </li>
            </ul>
            <!--Features-->
            <!--CTA-->
            <div class="border-t border-pink-100">
                <a href="#" class="flex justify-center items-center mt-2 space-x-2 w-full px-4 py-2 text-xs font-semibold text-slate-700 bg-white bg-opacity-25 hover:bg-opacity-50 hover:shadow-lg shadow-md rounded-full focus:outline-none focus:shadow-outline" type="button">
                    <span>Purchase This Plan</span>
                </a>
            </div>
            <!--CTA-->
        </div>
        <!--Plan-->
    </div>
    <!--Monthly Plans-->
    <!--Yearly Plans-->
    <div x-show="tenure === 'yearly'" x-transition class="flex flex-col md:flex-row md:-space-x-6 w-full">
        <!--Plan-->
        <div class="py-10 px-5 h-full w-full flex flex-col justify-center items-center space-y-6 bg-white bg-opacity-25 rounded-t-xl shadow-lg shadow-pink-300 border border-white filter backdrop-blur">
            <!--Icon-->
            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-white" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M6 6V5a3 3 0 0 1 3-3h2a3 3 0 0 1 3 3v1h2a2 2 0 0 1 2 2v3.57A22.952 22.952 0 0 1 10 13a22.95 22.95 0 0 1-8-1.43V8a2 2 0 0 1 2-2h2zm2-1a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v1H8V5zm1 5a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2H10a1 1 0 0 1-1-1z" clip-rule="evenodd"/><path d="M2 13.692V16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-2.308A24.974 24.974 0 0 1 10 15a24.98 24.98 0 0 1-8-1.308z"/></svg>
            <!--Icon-->
            <!--Title-->
            <h1 class="text-2xl font-black text-slate-900">Business</h1>
            <!--Title-->
            <!--Price-->
            <div class="flex items-center text-5xl font-black text-slate-900">
                <span class="text-lg font-semibold">$</span>
                <span>490</span>
            </div>
            <!--Price-->
            <!--Features-->
            <ul class="space-y-6">
                <li class="flex items-center text-xs text-slate-800 font-medium space-x-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-pink-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 12 2 2 4-4m6-4a12 12 0 0 1-9-3 12 12 0 0 1-9 3 12 12 0 0 0 0 3c0 6 4 10 9 12a12 12 0 0 0 9-15z"/>
                    </svg>                                      
                    <span>Unlimited activity</span>
                </li>
                <li class="flex items-center text-xs text-slate-800 font-medium space-x-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-pink-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 12 2 2 4-4m6-4a12 12 0 0 1-9-3 12 12 0 0 1-9 3 12 12 0 0 0 0 3c0 6 4 10 9 12a12 12 0 0 0 9-15z"/>
                    </svg>                                      
                    <span>Direct messaging</span>
                </li>
                <li class="flex items-center text-xs text-slate-800 font-medium space-x-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-pink-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 12 2 2 4-4m6-4a12 12 0 0 1-9-3 12 12 0 0 1-9 3 12 12 0 0 0 0 3c0 6 4 10 9 12a12 12 0 0 0 9-15z"/>
                    </svg>                                      
                    <span>Unlimited membership</span>
                </li>
                <li class="flex items-center text-xs text-slate-800 font-medium space-x-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-pink-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 12 2 2 4-4m6-4a12 12 0 0 1-9-3 12 12 0 0 1-9 3 12 12 0 0 0 0 3c0 6 4 10 9 12a12 12 0 0 0 9-15z"/>
                    </svg>                                      
                    <span>Infinite Espionage</span>
                </li>
            </ul>
            <!--Features-->
            <!--CTA-->
            <div class="border-t border-pink-100">
                <a href="#" class="flex justify-center items-center mt-2 space-x-2 w-full px-4 py-2 text-xs font-semibold text-slate-700 bg-white bg-opacity-25 hover:bg-opacity-50 hover:shadow-lg shadow-md rounded-full focus:outline-none focus:shadow-outline" type="button">
                    <span>Purchase This Plan</span>
                </a>
            </div>
            <!--CTA-->
        </div>
        <!--Plan-->
        <!--Plan-->
        <div class="z-10 mt-5 py-10 px-5 h-full w-full flex flex-col justify-center items-center space-y-8 bg-white bg-opacity-25 rounded-t-xl shadow-xl shadow-pink-300 border border-white filter backdrop-blur">
            <!--Icon-->
            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-white" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M6 6V5a3 3 0 0 1 3-3h2a3 3 0 0 1 3 3v1h2a2 2 0 0 1 2 2v3.57A22.952 22.952 0 0 1 10 13a22.95 22.95 0 0 1-8-1.43V8a2 2 0 0 1 2-2h2zm2-1a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v1H8V5zm1 5a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2H10a1 1 0 0 1-1-1z" clip-rule="evenodd"/><path d="M2 13.692V16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-2.308A24.974 24.974 0 0 1 10 15a24.98 24.98 0 0 1-8-1.308z"/></svg>
            <!--Icon-->
            <!--Title-->
            <h1 class="text-2xl font-black text-slate-900">Enterprise</h1>
            <!--Title-->
            <!--Price-->
            <div class="flex items-center text-5xl font-black text-slate-900">
                <span class="text-lg font-semibold">$</span>
                <span>990</span>
            </div>
            <!--Price-->
            <!--Features-->
            <ul class="space-y-6">
                <li class="flex items-center text-xs text-slate-800 font-medium space-x-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-pink-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 12 2 2 4-4m6-4a12 12 0 0 1-9-3 12 12 0 0 1-9 3 12 12 0 0 0 0 3c0 6 4 10 9 12a12 12 0 0 0 9-15z"/>
                    </svg>                                      
                    <span>Unlimited activity</span>
                </li>
                <li class="flex items-center text-xs text-slate-800 font-medium space-x-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-pink-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 12 2 2 4-4m6-4a12 12 0 0 1-9-3 12 12 0 0 1-9 3 12 12 0 0 0 0 3c0 6 4 10 9 12a12 12 0 0 0 9-15z"/>
                    </svg>                                      
                    <span>Direct messaging</span>
                </li>
                <li class="flex items-center text-xs text-slate-800 font-medium space-x-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-pink-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 12 2 2 4-4m6-4a12 12 0 0 1-9-3 12 12 0 0 1-9 3 12 12 0 0 0 0 3c0 6 4 10 9 12a12 12 0 0 0 9-15z"/>
                    </svg>                                      
                    <span>Unlimited membership</span>
                </li>
                <li class="flex items-center text-xs text-slate-800 font-medium space-x-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-pink-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 12 2 2 4-4m6-4a12 12 0 0 1-9-3 12 12 0 0 1-9 3 12 12 0 0 0 0 3c0 6 4 10 9 12a12 12 0 0 0 9-15z"/>
                    </svg>                                      
                    <span>Infinite Espionage</span>
                </li>
                <li class="flex items-center text-xs text-slate-800 font-medium space-x-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-pink-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 12 2 2 4-4m6-4a12 12 0 0 1-9-3 12 12 0 0 1-9 3 12 12 0 0 0 0 3c0 6 4 10 9 12a12 12 0 0 0 9-15z"/>
                    </svg>                                      
                    <span>Custom feature requests</span>
                </li>
            </ul>
            <!--Features-->
            <!--CTA-->
            <div class="border-t border-pink-100">
                <a href="#" class="flex justify-center items-center mt-2 space-x-2 w-full px-4 py-2 text-xs font-semibold text-slate-700 bg-white bg-opacity-25 hover:bg-opacity-50 hover:shadow-lg shadow-md rounded-full focus:outline-none focus:shadow-outline" type="button">
                    <span>Purchase This Plan</span>
                </a>
            </div>
            <!--CTA-->
        </div>
        <!--Plan-->
    </div>
    <!--Yearly Plans-->
</div>
<!--END: Pricing-->
@endsection
