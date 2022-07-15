@php
use Illuminate\Support\Str;
use Illuminate\Support\Arr;

$isWidget = ($page->getPath() === '/widgets') ? true : false;
$isComponent = ($page->getPath() === '/components') ? true : false;
$isDocumentation = ($page->getPath() === '/documentation') ? true : false;
$currentUrl = $page->getPath();

$pages = ['account', 'profile', 'pricing', 'wizard', 'orders', 'invoice'];
$authentication = ['login', 'register', 'password-reset', 'error'];
$blog = ['blog-posts', 'view-post', 'new-post'];
$ecommerce = ['products', 'view-products', 'new-products']; //coming soon
$applications = ['blog-posts', 'view-post', 'new-post', 'products', 'view-products', 'new-products'];
$components = ['accordion', 'alerts', 'avatars', 'badges', 'breadcrumbs', 
            'buttons', 'charts', 'todo', 'dropdown', 'forms', 'progress', 'tables'];
@endphp
<!--BEGIN: Side Menu-->
<nav class="hidden md:block w-56 pr-5 overflow-hidden">
    <a href="../" class="flex items-center pl-5 py-4">
        <img alt="Glassdash Tailwind and Alpine HTML Admin Template" class="w-8" src="{{'../assets/images/Glass_icon2.svg'}}">
        <span class="ml-1 font-black opacity-75 bg-clip-text text-transparent bg-gradient-to-r from-sky-400 to-pink-500">Glassdash</span>
    </a>
    
    <!--BEGIN: Menu Items-->
    <div class="h-full rounded-bl-2xl rounded-tr-2xl overflow-y-hidden bg-opacity-25 bg-white">
        <ul>
            <!--Dashboard-->
            <li>
                <a href="../" @class([
                                'relative flex pl-5 mb-1 h-12 items-center text-slate-900', 
                                'hover:bg-pink-100 hover:bg-opacity-20' => ($page->getPath() != '') ? true : false, 
                                'active' => ($page->getPath() === '') ? true : false])>
                    <div @class([
                        'rounded-lg p-1 shadow-lg', 
                        'icon-active' => ($page->getPath() === '') ? true : false])>
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
            <li x-cloak x-data="{open : @if (in_array(Str::replace('/', '', $page->getPath()), $pages)) true @else false @endif}" >
                <a @click="open = ! open" href="javascript:;" @class([
                    'relative flex pl-5 mb-1 h-12 items-center text-slate-900',
                    'hover:bg-pink-100 hover:bg-opacity-20' => (!in_array(Str::replace('/', '', $page->getPath()), $pages)) ? true : false, 
                    'active' => (in_array(Str::replace('/', '', $page->getPath()), $pages)) ? true : false])>
                    <div @class([
                        'rounded-lg p-1 shadow-lg', 
                        'icon-active' => (in_array(Str::replace('/', '', $page->getPath()), $pages)) ? true : false])>
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
                                <svg xmlns="http://www.w3.org/2000/svg" @class([
                                    'h-6 w-6', 
                                    'text-pink-400' => ($currentUrl === '/'.$page) ? true : false]) viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
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
                <a href="../widgets" @class([
                                'relative flex pl-5 mb-1 h-12 items-center text-slate-900',
                                'hover:bg-pink-100 hover:bg-opacity-20' => !$isWidget, 
                                'active' => $isWidget])>
                    <div @class([
                        'rounded-lg p-1 shadow-lg', 
                        'icon-active' => $isWidget])>
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
                                <svg xmlns="http://www.w3.org/2000/svg" @class([
                                    'h-6 w-6', 
                                    'text-pink-400' => ($currentUrl === '/'.$page) ? true : false]) viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
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
            <li x-cloak x-data="{open : @if (in_array(Str::replace('/', '', $currentUrl), $applications)) true @else false @endif}" >
                <a @click="open = ! open" href="javascript:;" 
                    @class([
                        'relative flex pl-5 mb-1 h-12 items-center text-slate-900',
                        'hover:bg-pink-100 hover:bg-opacity-20' => (!in_array(Str::replace('/', '', $currentUrl), $applications)) ? true : false, 
                        'active' => (in_array(Str::replace('/', '', $currentUrl), $applications)) ? true : false])>
                    <div @class([
                        'rounded-lg p-1 shadow-lg', 
                        'icon-active' => (in_array(Str::replace('/', '', $currentUrl), $applications)) ? true : false])>
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
                    <li x-cloak x-data="{open : @if (in_array(Str::replace('/', '', $currentUrl), $blog)) true @else false @endif}">
                        <a @click="open = ! open" href="javascript:;" class="relative flex pl-5 mb-1 h-12 items-center text-slate-900">
                            <div class="text-slate-600">
                                <svg xmlns="http://www.w3.org/2000/svg" @class([
                                    'h-6 w-6', 
                                    'text-pink-400' => (in_array(Str::replace('/', '', $currentUrl), $blog)) ? true : false]) viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
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
                                <svg xmlns="http://www.w3.org/2000/svg" @class([
                                    'h-6 w-6', 
                                    'text-pink-400' => ($currentUrl === '/'.$page) ? true : false]) viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
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
            <li x-cloak x-data="{open : @if ($isComponent) true @else false @endif}" >
                <a @click="open = ! open" href="javascript:;" 
                    @class([
                        'relative flex pl-5 mb-1 h-12 items-center text-slate-900',
                        'hover:bg-pink-100 hover:bg-opacity-20' => $isComponent, 
                        'active' => $isComponent ])>
                    <div @class([
                        'rounded-lg p-1 shadow-lg', 
                        'icon-active' => $isComponent ])>
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
                                <svg xmlns="http://www.w3.org/2000/svg" @class([
                                    'h-6 w-6', 
                                    'text-pink-400' => ($currentUrl === '/'.$page) ? true : false]) viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
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
    </div>
    <!--END: Menu Items-->
</nav>
<!--END: Side Menu-->