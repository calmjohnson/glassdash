@php
    use Illuminate\Support\Str;
@endphp
<!--BEGIN: Top Bar-->
<div class="flex items-center mb-10 relative h-16 z-50">
    <!--BEGIN: Logo-->
    <a href="../" class="flex items-center py-4 md:hidden">
        <img alt="Glassdash Tailwind and Alpine HTML Admin Template" class="w-8" src="{{'../assets/images/Glass_icon2.svg'}}">
    </a>
    <!--END: Logo-->
    <!-- BEGIN: Breadcrumb -->
    <div class="mr-auto hidden sm:flex">
        <a class="ml-4 text-slate-700 text-lg font-bold">
            @if ( $page->getPath() != '')
                {{Str::title(str_replace('/', '', str_replace('-', ' ', $page->getPath())))}}
            @else
                {{'Dashboard'}}
            @endif
        </a> 
    </div>
    <!-- END: Breadcrumb -->
    <!--BEGIN: Search-->
    <div x-cloak x-data="{open : false}" class="relative mr-3 sm:mr-6">
        <div class="relative hidden md:flex sm:items-center">
            <input @click="open =  ! open" type="text" class="py-2 px-2 w-full rounded-lg shadow focus:outline-none bg-white bg-opacity-25 border border-white border-opacity-75" placeholder="Search...">
            <span class="bg-rose-700 p-2 rounded-lg -ml-1 shadow">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M0 0h24v24H0z" stroke="none"/>
                    <circle cx="10" cy="10" r="7"/>
                    <path d="m21 21-6-6"/>
                </svg>                                  
            </span>
        </div>
        <!--Search Results-->
        <div @click.outside="open = ! open" x-show="open" 
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 scale-90"
            x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-300"
            x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-90"
            class="absolute w-96 h-[30rem] overflow-y-auto hidden md:block mt-1 px-3 py-2 rounded-lg shadow-xl bg-opacity-25 bg-white filter backdrop-blur-sm">
            <div class="absolute inset-0 bg-slate-200 -z-10 blur-3xl rounded-lg"></div>
            <h1 class="font-medium text-sm text-slate-800">Users</h1>
            @foreach ($page->users as $user)
            <div class="flex items-center mt-5">
                <img src="{{'../assets/images/'.$user->photo}}" class="h-10 w-10 rounded-full shadow-md" alt="">
                <div class="flex flex-col ml-3 space-y-1">
                    <h1 class="font-medium text-xs text-slate-900">{{$user->name}}</h1>
                    <p class="text-xs text-slate-600">{{$user->username.'@glassdash.com'}}</p>
                </div>
            </div>    
            @endforeach
            <h1 class="font-medium text-sm text-slate-800 mt-8">Products</h1>
            @foreach ($page->products as $product)
            <div class="flex items-center mt-5">
                <img src="{{'../assets/images/'.$product->image}}" class="h-10 w-10 rounded-md shadow-md" alt="">
                <div class="flex flex-col ml-3 space-y-1">
                    <h1 class="font-medium text-xs text-slate-900">{{$product->title}}</h1>
                    <p class="text-xs text-slate-600">{{$product->category}}</p>
                </div>
            </div>
            @endforeach
        </div>
        <!--Search Results-->
    </div>
    <!--END: Search-->
    <!--BEGIN: Account Menu-->
    <div x-cloak x-data="{open : false}">
        <div @click="open = true" class="h-10 cursor-pointer flex items-center rounded-lg shadow bg-white bg-opacity-25">
            <div class="w-8 h-8 ml-1 rounded-lg overflow-hidden shadow-lg">
                <img src="{{'../assets/images/profile-pic.jpg'}}" alt="Profile Pic" class="">
            </div>
            <div class="text-xs ml-1 text-slate-800">
                Honeychile Ryder
            </div>
            <span class="ml-3 mr-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-slate-800" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M0 0h24v24H0z" stroke="none"/>
                    <path d="m6 9 6 6 6-6"/>
                </svg>                              
            </span>
        </div>
        <!--Dropdown-->
        <div @click.outside="open = ! open" x-show="open" 
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 scale-90"
            x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-300"
            x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-90"
            class="absolute w-52 mt-1 py-2 rounded-lg shadow-xl filter backdrop-blur-xl bg-opacity-25 bg-white">
            <div class="flex flex-col  px-3">
                <span class="text-sm text-slate-900 font-bold">
                    Honeychile Ryder
                </span>
                <span class="text-xs text-slate-700">Laravel Artisan</span>
            </div>

            <div class="mt-3 border-t border-slate-300"></div>

            <div class="px-2 flex flex-col space-y-4 mt-2 font-black py-2 rounded-sm">
                <a href="../profile" class="flex items-center">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-7 9a7 7 0 1 1 14 0H3z" clip-rule="evenodd"/></svg>
                    </span>
                    <span class="text-xs ml-2 text-white-900">Pofile</span>
                </a>
                <a href="../account" class="flex items-center">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 0 1-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 0 1 .947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 0 1 2.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 0 1 2.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 0 1 .947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 0 1-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 0 1-2.287-.947zM10 13a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" clip-rule="evenodd"/></svg>
                    </span>
                    <span class="text-xs ml-2 text-white-900">Settings</span>
                </a>
                <a href="../password-reset" class="flex items-center">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5 9V7a5 5 0 0 1 10 0v2a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2zm8-2v2H7V7a3 3 0 0 1 6 0z" clip-rule="evenodd"/></svg>                                
                    </span>
                    <span class="text-xs ml-2 text-slate-900">Reset Password</span>
                </a>
                <div class="mt-3 border-t border-slate-300"></div>
                <a href="../login" class="flex items-center">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="m17 16 4-4m0 0-4-4m4 4H7m6 4v1a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V7a3 3 0 0 1 3-3h4a3 3 0 0 1 3 3v1"/></svg>                               
                    </span>
                    <span class="text-xs ml-2 text-slate-900">Logout</span>
                </a>
            </div>
        </div>
        <!--Dropdown-->
    </div>
    <!--END: Account Menu-->
    <!--BEGIN: Notifications-->
    <div x-cloak x-data="{open : false}" class="ml-auto sm:ml-3 ">
        <div @click="open = true" class="cursor-pointer">
            <div class="relative">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-slate-800" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M0 0h24v24H0z" stroke="none"/>
                    <path d="M10 5a2 2 0 0 1 4 0 7 7 0 0 1 4 6v3a4 4 0 0 0 2 3H4a4 4 0 0 0 2-3v-3a7 7 0 0 1 4-6M9 17v1a3 3 0 0 0 6 0v-1"/>
                </svg>
                <span class="absolute rounded-full h-2 w-2 top-0 right-0 bg-red-700"></span>
            </div>
        </div>
        <!--Dropdown-->
        <div @click.outside="open = ! open" x-show="open" 
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 scale-90"
            x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-300"
            x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-90"
            class="absolute w-72 right-1 mt-2 px-3 py-2 rounded-lg shadow-xl bg-slate-200">
            <h1 class="font-medium text-sm text-slate-800">Notifications</h1>
            @foreach ($page->notifications as $notification)
            <div class="flex items-center mt-5">
                @foreach ($page->users as $user)
                    @if ($user->username === $notification->user)
                    <img src="{{'../assets/images/'.$user->photo}}" class="h-10 w-10 rounded-full shadow-md" alt="">    
                    @endif
                @endforeach
                <div class="flex flex-col ml-3 space-y-1">
                    <h1 class="font-medium text-xs text-slate-900">
                        @foreach ($page->users as $user)
                            @if ($user->username === $notification->user)
                                {{$user->name}}
                            @endif
                        @endforeach
                    </h1>
                    <p class="text-xs text-slate-600">{{$notification->description}}</p>
                    <p class="text-xs font-light text-slate-500">{{$notification->time}}</p>
                </div>
            </div>
            @endforeach
        </div>
        <!--Dropdown-->
    </div>
    <!--END: Notifications-->
</div>
<!--END: Top Bar-->