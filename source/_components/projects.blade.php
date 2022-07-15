<div class="px-5 py-3 shadow rounded-lg bg-opacity-25 bg-white">
    <div class="flex items-center justify-between font-semibold py-3 text-sm text-slate-800">
        <span>Projects</span>
        <a class="text-xs text-blue-600">View All</a>
    </div>
    <div class="flex flex-col space-y-4">
        <div class="flex items-center">
            <img src="assets/images/server.jpg" class="h-14 w-16 rounded-lg shadow-md" alt="">
            <div class="flex flex-col ml-3">
                <h1 class="font-medium text-sm text-slate-800">Server Provisioning</h1>
                <p class="text-xs text-slate-400">Updated 6hrs ago</p>
            </div>
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
        </div>
        <div class="flex items-center">
            <img src="assets/images/photoshop.jpg" class="h-14 w-16 rounded-lg shadow-md" alt="">
            <div class="flex flex-col ml-3">
                <h1 class="font-medium text-sm text-slate-800">Photoshop Mockup</h1>
                <p class="text-xs text-slate-400">Updated 2hrs ago</p>
            </div>
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
        </div>
        <div class="flex items-center">
            <img src="assets/images/personal-site.jpg" class="h-14 w-16 rounded-lg shadow-md" alt="">
            <div class="flex flex-col ml-3">
                <h1 class="font-medium text-sm text-slate-800">Personal Site</h1>
                <p class="text-xs text-slate-400">Updated 15mins ago</p>
            </div>
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
        </div>
        <div class="flex items-center">
            <img src="assets/images/web-dev.jpg" class="h-14 w-16 rounded-lg shadow-md" alt="">
            <div class="flex flex-col ml-3">
                <h1 class="font-medium text-sm text-slate-800">Dashboard Re-design</h1>
                <p class="text-xs text-slate-400">Updated 6hrs ago</p>
            </div>
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
        </div>
    </div>
</div>