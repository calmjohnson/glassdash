@php
use Illuminate\Support\Str;
$pages = ['account', 'profile', 'pricing', 'wizard', 'orders', 'invoice'];
$authentication = ['login', 'register', 'password-reset', 'error'];
$blog = ['blog-posts', 'view-post', 'new-post'];
$ecommerce = ['products', 'view-products', 'new-products']; //coming soon
$applications = ['blog-posts', 'view-post', 'new-post', 'products', 'view-products', 'new-products'];
$components = ['accordion', 'alerts', 'avatars', 'badges', 'breadcrumbs', 
            'buttons', 'charts', 'todo', 'dropdown', 'forms', 'progress', 'tables'];
@endphp
<!--BEGIN: Mobile Menu-->
<div x-cloak x-data="{search : true, menu  : true}" class="relative lg:hidden">
    <!--Search-->
    <div 
        class="px-5 pb-12 overflow-y-scroll inset-0 h-full transition-all ease-in-out duration-[500ms] z-10 bg-white bg-opacity-50 shadow-xl filter backdrop-blur rounded-t-xl"
        :class="search ? 'fixed translate-y-[40rem]' : 'fixed'">

        <div class="flex flex-col space-y-5">
            <div class="relative mt-6 flex items-center">
                <input @click="open =  ! open" type="text" class="py-2 px-2 w-full rounded-lg shadow bg-white bg-opacity-25 border border-white border-opacity-75" placeholder="Search...">
                <span class="bg-rose-700 p-2 rounded-lg -ml-1 shadow">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M0 0h24v24H0z" stroke="none"></path>
                        <circle cx="10" cy="10" r="7"></circle>
                        <path d="m21 21-6-6"></path>
                    </svg>                                  
                </span>
            </div>
            <!--User search suggestions-->
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
            <!--User search suggestions-->
            <!--Post search suggestions-->
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
            <!--Post search suggestions-->
        </div>
    </div>
    <!--Search-->
    <!--Menu-->
    <div 
        class="px-5 pb-12 pt-10 overflow-y-scroll inset-0 h-full transition-all ease-in-out duration-[500ms] z-10 bg-white bg-opacity-50 shadow-xl filter backdrop-blur rounded-t-xl"
        :class="menu ? 'fixed translate-y-[40rem]' : 'fixed'">
        
        <!--BEGIN: Mobile Menu Items-->
        <ul>
            <!--Dashboard-->
            <li>
                <a href="../" class="relative flex pl-5 mb-1 h-12 items-center text-slate-900">
                    <div class="rounded-lg p-1 shadow-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M0 0h24v24H0z" stroke="none"/>
                            <path d="M5 12H3l9-9 9 9h-2M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2v-7"/>
                            <path d="M9 21v-6a2 2 0 0 1 2-2h2a2 2 0 0 1 2 2v6"/>
                        </svg>
                    </div>
                    <div class="w-full ml-2 flex items-center text-xs font-normal"> Dashboard </div>
                </a>
            </li>
            <!--Dashboard-->
            <!--Pages-->
            <li x-cloak x-data="{open : false}" >
                <a @click="open = ! open" href="javascript:;" class="relative flex pl-5 mb-1 h-12 items-center text-slate-900 hover:bg-pink-100 hover:bg-opacity-20">
                    <div class="rounded-lg p-1 shadow-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M0 0h24v24H0z" stroke="none"/>
                            <path d="M6 4h11a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H6a1 1 0 0 1-1-1V5a1 1 0 0 1 1-1m3 0v18M13 8h2M13 12h2"/>
                        </svg>                                      
                    </div>
                    <div class="w-full ml-2 flex items-center text-xs font-normal"> Pages </div>
                    <span class="ml-auto mr-2 text-slate-900">
                        <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M0 0h24v24H0z" stroke="none"/>
                            <path d="M12 5v14M5 12h14"/>
                        </svg>     
                        <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M0 0h24v24H0z" stroke="none"/>
                            <path d="M5 12h14"/>
                        </svg>                                                                       
                    </span>
                </a>
                <!--Dropdown-->
                <ul x-show="open" x-collapse class="mx-2 rounded-lg shadow-inner bg-opacity-30 bg-white">
                    @forelse ($pages as $page)
<!--{{Str::title(str_replace('-', ' ', $page))}}-->
                    <li>
                        <a href="../{{$page}}" class="relative flex pl-5 mb-1 h-12 items-center text-slate-900">
                            <div class="text-slate-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M0 0h24v24H0z" stroke="none"/>
                                    <path d="M3 12h4l3 8 4-16 3 8h4"/>
                                </svg>                                                                                                                    
                            </div>
                            <div class="w-full ml-2 flex items-center text-xs font-normal"> {{Str::title(str_replace('-', ' ', $page))}} </div>
                        </a>
                    </li>
                    <!--{{Str::title(str_replace('-', ' ', $page))}}-->    
                    @empty
                        
                    @endforelse
                </ul>
                <!--Dropdown-->
            </li>
            <!--Pages-->
            <!--Widgets-->
            <li>
                <a href="../widgets" class="relative flex pl-5 mb-1 h-12 items-center text-slate-900 hover:bg-pink-100 hover:bg-opacity-20">
                    <div class="rounded-lg p-1 shadow-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M0 0h24v24H0z" stroke="none"/>
                            <circle cx="5" cy="5" r="1"/>
                            <circle cx="12" cy="5" r="1"/>
                            <circle cx="19" cy="5" r="1"/>
                            <circle cx="5" cy="12" r="1"/>
                            <circle cx="12" cy="12" r="1"/>
                            <circle cx="19" cy="12" r="1"/>
                            <circle cx="5" cy="19" r="1"/>
                            <circle cx="12" cy="19" r="1"/>
                            <circle cx="19" cy="19" r="1"/>
                        </svg>                                                                          
                    </div>
                    <div class="w-full ml-2 flex items-center text-xs font-normal"> Widgets </div>
                </a>
            </li>
            <!--Widgets-->
            <!--Authentication-->
            <li x-cloak x-data="{open : false}" >
                <a @click="open = ! open" href="javascript:;" class="relative flex pl-5 mb-1 h-12 items-center text-slate-900 hover:bg-pink-100 hover:bg-opacity-20">
                    <div class="rounded-lg p-1 shadow-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M0 0h24v24H0z" stroke="none"/>
                            <circle cx="12" cy="7" r="4"/>
                            <path d="M6 21v-2a4 4 0 0 1 4-4h4a4 4 0 0 1 4 4v2"/>
                        </svg>                                   
                    </div>
                    <div class="w-full ml-2 flex items-center text-xs font-normal"> Authentication </div>
                    <span class="ml-auto mr-2 text-slate-900">
                        <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M0 0h24v24H0z" stroke="none"/>
                            <path d="M12 5v14M5 12h14"/>
                        </svg>     
                        <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M0 0h24v24H0z" stroke="none"/>
                            <path d="M5 12h14"/>
                        </svg>                                                                       
                    </span>
                </a>
                <!--Dropdown-->
                <ul x-show="open" x-collapse class="mx-2 rounded-lg shadow-inner bg-opacity-30 bg-white">
                    @forelse ($authentication as $page)
<!--{{Str::title(str_replace('-', ' ', $page))}}-->
                    <li>
                        <a href="../{{$page}}" class="relative flex pl-5 mb-1 h-12 items-center text-slate-900">
                            <div class="text-slate-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M0 0h24v24H0z" stroke="none"/>
                                    <path d="M3 12h4l3 8 4-16 3 8h4"/>
                                </svg>                                                                                                                    
                            </div>
                            <div class="w-full ml-2 flex items-center text-xs font-normal"> {{Str::title(str_replace('-', ' ', $page))}} </div>
                        </a>
                    </li>
                    <!--{{Str::title(str_replace('-', ' ', $page))}}-->    
                    @empty
                        
                    @endforelse
                </ul>
                <!--Dropdown-->
            </li>
            <!--Authentication-->
            <!--Applications-->
            <li x-cloak x-data="{open : false}" >
                <a @click="open = ! open" href="javascript:;" class="relative flex pl-5 mb-1 h-12 items-center text-slate-900 hover:bg-pink-100 hover:bg-opacity-20">
                    <div class="rounded-lg p-1 shadow-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M0 0h24v24H0z" stroke="none"/>
                            <rect x="4" y="4" width="6" height="6" rx="1"/>
                            <rect x="4" y="14" width="6" height="6" rx="1"/>
                            <rect x="14" y="14" width="6" height="6" rx="1"/>
                            <path d="M14 7h6M17 4v6"/>
                        </svg>
                    </div>
                    <div class="w-full ml-2 flex items-center text-xs font-normal"> Applications </div>
                    <span class="ml-auto mr-2 text-slate-900">
                        <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M0 0h24v24H0z" stroke="none"/>
                            <path d="M12 5v14M5 12h14"/>
                        </svg>     
                        <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M0 0h24v24H0z" stroke="none"/>
                            <path d="M5 12h14"/>
                        </svg>                                                                       
                    </span>
                </a>
                <!--Dropdown-->
                <ul x-show="open" x-collapse class="mx-2 rounded-lg shadow-inner bg-opacity-30 bg-white">
                    <!--Blog-->
                    <li x-cloak x-data="{open : false}">
                        <a @click="open = ! open" href="javascript:;" class="relative flex pl-5 mb-1 h-12 items-center text-slate-900">
                            <div class="text-slate-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M0 0h24v24H0z" stroke="none"/>
                                    <path d="M3 12h4l3 8 4-16 3 8h4"/>
                                </svg>                                                                                                                    
                            </div>
                            <div class="w-full ml-2 flex items-center text-xs font-normal"> Blog </div>
                            <span class="ml-auto mr-2 text-slate-900">
                                <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M0 0h24v24H0z" stroke="none"/>
                                    <path d="m6 9 6 6 6-6"/>
                                </svg>                                                 
                                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M0 0h24v24H0z" stroke="none"/>
                                    <path d="m6 15 6-6 6 6"/>
                                </svg>                                              
                            </span>
                        </a>
                        <ul x-show="open" x-collapse class="ml-4">
                            @forelse ($blog as $page)
<!--{{Str::title(str_replace('-', ' ', $page))}}-->
                    <li>
                        <a href="../{{$page}}" class="relative flex pl-5 mb-1 h-12 items-center text-slate-900">
                            <div class="text-slate-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M0 0h24v24H0z" stroke="none"/>
                                    <path d="M3 12h4l3 8 4-16 3 8h4"/>
                                </svg>                                                                                                                    
                            </div>
                            <div class="w-full ml-2 flex items-center text-xs font-normal"> {{Str::title(str_replace('-', ' ', $page))}} </div>
                        </a>
                    </li>
                    <!--{{Str::title(str_replace('-', ' ', $page))}}-->    
                    @empty
                        
                    @endforelse
                        </ul>
                    </li>
                    <!--Blog-->
                </ul>
                <!--Dropdown-->
            </li>
            <!--Applications-->
            <!--Components-->
            <li x-cloak x-data="{open : false}" >
                <a @click="open = ! open" href="javascript:;" class="relative flex pl-5 mb-1 h-12 items-center text-slate-900 hover:bg-pink-100 hover:bg-opacity-20">
                    <div class="rounded-lg p-1 shadow-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M0 0h24v24H0z" stroke="none"/>
                            <path d="m3 12 3 3 3-3-3-3zM15 12l3 3 3-3-3-3zM9 6l3 3 3-3-3-3zM9 18l3 3 3-3-3-3z"/>
                        </svg>                              
                    </div>
                    <div class="w-full ml-2 flex items-center text-xs font-normal"> Components </div>
                    <span class="ml-auto mr-2 text-slate-900">
                        <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M0 0h24v24H0z" stroke="none"/>
                            <path d="M12 5v14M5 12h14"/>
                        </svg>     
                        <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M0 0h24v24H0z" stroke="none"/>
                            <path d="M5 12h14"/>
                        </svg>                                                                       
                    </span>
                </a>
                <!--Dropdown-->
                <ul x-show="open" x-collapse class="mx-2 rounded-lg shadow-inner bg-opacity-30 bg-white">
                    @forelse ($components as $page)
<!--{{Str::title(str_replace('-', ' ', $page))}}-->
                    <li>
                        <a href="../components{{'#'.str_replace('/', '#', $page).''}}" class="relative flex pl-5 mb-1 h-12 items-center text-slate-900">
                            <div class="text-slate-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M0 0h24v24H0z" stroke="none"/>
                                    <path d="M3 12h4l3 8 4-16 3 8h4"/>
                                </svg>                                                                                                                    
                            </div>
                            <div class="w-full ml-2 flex items-center text-xs font-normal"> {{Str::title(str_replace('-', ' ', $page))}} </div>
                        </a>
                    </li>
                    <!--{{Str::title(str_replace('-', ' ', $page))}}-->    
                    @empty
                        
                    @endforelse
                </ul>
                <!--Dropdown-->
            </li>
            <!--Components-->
        </ul>
        <!--END: Mobile Menu Items-->

    </div>
    <!--Menu-->
    <div class="fixed bottom-0 h-10 w-full rounded-t-xl filter backdrop-blur-sm border border-white shadow-xl bg-white bg-opacity-60 z-20 flex items-center justify-between py-1 px-5">
        <a href="../" class="px-1 py-1 shadow-md rounded-full bg-white bg-transparent">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path d="M0 0h24v24H0z" stroke="none"/>
                <path d="M5 12H3l9-9 9 9h-2M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2v-7"/>
                <path d="M9 21v-6a2 2 0 0 1 2-2h2a2 2 0 0 1 2 2v6"/>
            </svg>                      
        </a>
        <div class="px-1 py-1 shadow-md rounded-full bg-white bg-transparent">
            <a @click="search = ! search, menu = true" href="javascript:;">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M0 0h24v24H0z" stroke="none"/>
                    <circle cx="10" cy="10" r="7"/>
                    <path d="m21 21-6-6"/>
                </svg>                                        
            </a>
        </div>
        <div class="px-1 py-1 shadow-md rounded-full bg-white bg-transparent">
            <a @click="menu = ! menu, search = true" href="javascript:;">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M0 0h24v24H0z" stroke="none"/>
                    <path d="M4 6h16M4 12h16M4 18h16"/>
                </svg>                                   
            </a>
        </div>
    </div>
</div>
<!--END: Mobile Menu-->