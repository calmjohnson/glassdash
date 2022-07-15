@extends('_layouts.main')

@section('body')

<!--BEGIN: Wizard-->
<div x-cloak x-data="{step: 1}" class="mb-10 md:mx-32 flex justify-center items-center">
    <!--Form-->
    <form class="w-full" action="#" method="post">
        <!--Step One-->
        <div x-show="step === 1" class="w-full">
            <h5 class="mb-4 text-center text-xs text-slate-500">
                    Step <span x-text="step"></span> of 3
            </h5>
            <h1 class="mb-3 text-2xl text-center font-bold text-slate-900">Baby Steps, let's get you setup</h1>
            <p class="mb-10 text-xs text-center text-slate-500 font-medium">To start off, please enter your username, email address and password.</p>
            <!--Fields-->
            <div class="w-full bg-white bg-opacity-25 filter backdrop-blur-md p-5 rounded-lg lg:rounded-l-none">
                <!--Team-->
                <div class="mb-4">
                    <label class="block mb-2 text-xs font-medium text-slate-800" for="team">
                        Team
                    </label>
                    <input
                        class="w-full px-3 py-2 mb-3 text-xs leading-tight text-slate-600 border border-white bg-transparent rounded-md shadow appearance-none focus:outline-none focus:shadow-outline"
                        id="team"
                        type="text"
                        placeholder="Team"
                    />
                </div>
                <!--Team-->
                <!--Status-->
                <div class="mb-4">
                    <label class="relative block mb-2 text-xs font-medium text-slate-800" for="password">
                        Status
                        <select class="w-full mt-2 px-3 py-2 mb-3 text-xs leading-tight text-slate-600 border border-white bg-transparent rounded-md shadow appearance-none focus:outline-none focus:shadow-outline">
                        <option>Active</option>
                        <option>Suspended</option>
                        <option>Resolving</option>
                        <option>Other</option>
                        </select>
                    </label>
                </div>
                <!--Status-->
                <!--Next-->
                <div class="mb-4 flex items-center justify-between">
                    <div class="mb-6 text-center">
                        <button class="w-full px-4 py-2 text-xs font-semibold text-slate-700 bg-white bg-opacity-25 hover:bg-opacity-50 hover:shadow-lg shadow-md rounded-full focus:outline-none focus:shadow-outline" type="button">
                            Cancel
                        </button>
                    </div>
        
                    <div class="mb-6 text-center">
                        <button @click="step = step + 1" class="w-full px-4 py-2 text-xs font-semibold text-slate-700 bg-sky-400 bg-opacity-25 hover:bg-opacity-50 hover:shadow-lg shadow-md rounded-full focus:outline-none focus:shadow-outline" type="button">
                            Next
                        </button>
                    </div>
                </div>
                <!--Next-->
            </div>
            <!--Fields-->
        </div>
        <!--Step One-->
        <!--Step Two-->
        <div x-show="step === 2" class="w-full">
            <h5 class="mb-4 text-center text-xs text-slate-500">
                    Step <span x-text="step"></span> of 3
            </h5>
            <h1 class="mb-3 text-2xl text-center font-bold text-slate-900">Baby Steps, let's get you setup</h1>
            <p class="mb-10 text-xs text-center text-slate-500 font-medium">To start off, please enter your username, email address and password.</p>
            <!--Fields-->
            <div class="w-full bg-white bg-opacity-25 filter backdrop-blur-md p-5 rounded-lg lg:rounded-l-none">
                <!--Team-->
                <div class="mb-4">
                    <label class="block mb-2 text-xs font-medium text-slate-800" for="team">
                        Team
                    </label>
                    <input
                        class="w-full px-3 py-2 mb-3 text-xs leading-tight text-slate-600 border border-white bg-transparent rounded-md shadow appearance-none focus:outline-none focus:shadow-outline"
                        id="team"
                        type="text"
                        placeholder="Team"
                    />
                </div>
                <!--Team-->
                <!--Status-->
                <div class="mb-4">
                    <label class="relative block mb-2 text-xs font-medium text-slate-800" for="password">
                        Status
                        <select class="w-full mt-2 px-3 py-2 mb-3 text-xs leading-tight text-slate-600 border border-white bg-transparent rounded-md shadow appearance-none focus:outline-none focus:shadow-outline">
                        <option>Active</option>
                        <option>Suspended</option>
                        <option>Resolving</option>
                        <option>Other</option>
                        </select>
                    </label>
                </div>
                <!--Status-->
                <!--Next-->
                <div class="mb-4 flex items-center justify-between">
                    <div class="mb-6 text-center">
                        <button @click="step = step - 1" class="w-full px-4 py-2 text-xs font-semibold text-slate-700 bg-white bg-opacity-25 hover:bg-opacity-50 hover:shadow-lg shadow-md rounded-full focus:outline-none focus:shadow-outline" type="button">
                            Back
                        </button>
                    </div>
        
                    <div class="mb-6 text-center">
                        <button @click="step = step + 1" class="w-full px-4 py-2 text-xs font-semibold text-slate-700 bg-sky-400 bg-opacity-25 hover:bg-opacity-50 hover:shadow-lg shadow-md rounded-full focus:outline-none focus:shadow-outline" type="button">
                            Next
                        </button>
                    </div>
                </div>
                <!--Next-->
            </div>
            <!--Fields-->
        </div>
        <!--Step Two-->
        <!--Step Three-->
        <div x-show="step === 3" class="w-full">
            <h5 class="mb-4 text-center text-xs text-slate-500">
                    Step <span x-text="step"></span> of 3
            </h5>
            <h1 class="mb-3 text-2xl text-center font-bold text-slate-900">Baby Steps, let's get you setup</h1>
            <p class="mb-10 text-xs text-center text-slate-500 font-medium">To start off, please enter your username, email address and password.</p>
            <!--Fields-->
            <div class="w-full bg-white bg-opacity-25 filter backdrop-blur-md p-5 rounded-lg lg:rounded-l-none">
                <!--Team-->
                <div class="mb-4">
                    <label class="block mb-2 text-xs font-medium text-slate-800" for="team">
                        Team
                    </label>
                    <input
                        class="w-full px-3 py-2 mb-3 text-xs leading-tight text-slate-600 border border-white bg-transparent rounded-md shadow appearance-none focus:outline-none focus:shadow-outline"
                        id="team"
                        type="text"
                        placeholder="Team"
                    />
                </div>
                <!--Team-->
                <!--Status-->
                <div class="mb-4">
                    <label class="relative block mb-2 text-xs font-medium text-slate-800" for="password">
                        Status
                        <select class="w-full mt-2 px-3 py-2 mb-3 text-xs leading-tight text-slate-600 border border-white bg-transparent rounded-md shadow appearance-none focus:outline-none focus:shadow-outline">
                        <option>Active</option>
                        <option>Suspended</option>
                        <option>Resolving</option>
                        <option>Other</option>
                        </select>
                    </label>
                </div>
                <!--Status-->
                <!--Next-->
                <div class="mb-4 flex items-center justify-between">
                    <div class="mb-6 text-center">
                        <button @click="step = step - 1" class="w-full px-4 py-2 text-xs font-semibold text-slate-700 bg-white bg-opacity-25 hover:bg-opacity-50 hover:shadow-lg shadow-md rounded-full focus:outline-none focus:shadow-outline" type="button">
                            Back
                        </button>
                    </div>
        
                    <div class="mb-6 text-center">
                        <button class="w-full px-4 py-2 text-xs font-semibold text-slate-700 bg-sky-400 bg-opacity-25 hover:bg-opacity-50 hover:shadow-lg shadow-md rounded-full focus:outline-none focus:shadow-outline" type="button">
                            Complete
                        </button>
                    </div>
                </div>
                <!--Next-->
            </div>
            <!--Fields-->
        </div>
        <!--Step Three-->
    </form>
    <!--Form-->
</div>
<!--END: Wizards-->
@endsection
