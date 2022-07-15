@extends('_layouts.main')

@section('body')

<!--BEGIN: Add Blog Post-->
<div class="mb-10 grid grid-cols-12 gap-6">
	<!--Add Post-->
	<div class="col-span-12 flex items-center justify-between">
		<h1 class="text-sm mdtext-xl text-slate-900">Add New Post</h1>
		<div class="flex items-center space-x-2">
			<button class="flex items-center space-x-1 px-1 py-1 font-normal md:font-medium text-sm text-slate-700 bg-white bg-opacity-50 rounded-lg">
				<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
				<span>Preview</span>
			</button>
			<!--Save-->
			<div x-cloak x-data="{open : false}" class="relative">
				<div class="flex items-center px-1 py-1 font-normal md:font-medium text-sm text-slate-700 bg-white bg-opacity-50 rounded-lg">
					<button class="flex items-center space-x-1">
						<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round"><path d="M0 0h24v24H0z" stroke="none"/><path d="M6 4h10l4 4v10a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2"/><circle cx="12" cy="14" r="2"/><path d="M14 4v4H8V4"/></svg>
						<span>Save</span>
					</button>
					<div @click="open = true" class="ml-1 px-1 border-l border-slate-400 cursor-pointer">
						<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M2 6a2 2 0 0 1 2-2h4l2 2h4a2 2 0 0 1 2 2v1H8a3 3 0 0 0-3 3v1.5a1.5 1.5 0 0 1-3 0V6z" clip-rule="evenodd"/><path d="M6 12a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v2a2 2 0 0 1-2 2H2h2a2 2 0 0 0 2-2v-2z"/></svg>
					</div>
				</div>
				<!--Dropdown-->
				<div @click.outside="open = ! open" x-show="open" 
					x-transition:enter="transition ease-out duration-100"
					x-transition:enter-start="opacity-0 scale-90"
					x-transition:enter-end="opacity-100 scale-100"
					x-transition:leave="transition ease-in duration-100"
					x-transition:leave-start="opacity-100 scale-100"
					x-transition:leave-end="opacity-0 scale-90"
					class="absolute right-0 w-40 mt-1 py-1 rounded-lg shadow-xl filter backdrop-blur-xl bg-opacity-25 bg-white z-10">
					<div class="px-2 flex flex-col space-y-4 py-1 rounded-sm">
						<a class="flex items-center cursor-pointer">
							<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M4 4a2 2 0 0 1 2-2h4.586A2 2 0 0 1 12 2.586L15.414 6A2 2 0 0 1 16 7.414V16a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V4zm2 6a1 1 0 0 1 1-1h6a1 1 0 1 1 0 2H7a1 1 0 0 1-1-1zm1 3a1 1 0 1 0 0 2h6a1 1 0 1 0 0-2H7z" clip-rule="evenodd"/></svg>
							<span class="text-xs ml-1 text-white-900">As New Post</span>
						</a>
						<a class="flex items-center cursor-pointer">
							<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M4 4a2 2 0 0 1 2-2h4.586A2 2 0 0 1 12 2.586L15.414 6A2 2 0 0 1 16 7.414V16a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V4zm2 6a1 1 0 0 1 1-1h6a1 1 0 1 1 0 2H7a1 1 0 0 1-1-1zm1 3a1 1 0 1 0 0 2h6a1 1 0 1 0 0-2H7z" clip-rule="evenodd"/></svg>
							<span class="text-xs ml-1 text-white-900">As Draft</span>
						</a>
						<a class="flex items-center cursor-pointer">
							<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M4 4a2 2 0 0 1 2-2h4.586A2 2 0 0 1 12 2.586L15.414 6A2 2 0 0 1 16 7.414V16a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V4zm2 6a1 1 0 0 1 1-1h6a1 1 0 1 1 0 2H7a1 1 0 0 1-1-1zm1 3a1 1 0 1 0 0 2h6a1 1 0 1 0 0-2H7z" clip-rule="evenodd"/></svg>
							<span class="text-xs ml-1 text-white-900">Save and Edit</span>
						</a>
						<a class="flex items-center cursor-pointer">
							<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M4 4a2 2 0 0 1 2-2h4.586A2 2 0 0 1 12 2.586L15.414 6A2 2 0 0 1 16 7.414V16a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V4zm2 6a1 1 0 0 1 1-1h6a1 1 0 1 1 0 2H7a1 1 0 0 1-1-1zm1 3a1 1 0 1 0 0 2h6a1 1 0 1 0 0-2H7z" clip-rule="evenodd"/></svg>
							<span class="text-xs ml-1 text-white-900">Export</span>
						</a>
					</div>
				</div>
				<!--Dropdown-->
			</div>
			<!--Save-->
		</div>
	</div>
	<!--Form-->
	<form action="#" method="post" class="grid grid-cols-12 gap-4 col-span-12">
		<!--Main Bar-->
		<div class="col-span-12 lg:col-span-8 px-1 md:px-5 py-5 shadow rounded-lg bg-opacity-25 bg-white">
			<!--Title-->
			<input type="text" placeholder="Title" 
				class="mb-5 w-full rounded-md border-0 h-9 px-4 outline-none bg-white bg-opacity-50 text-slate-700 focus:ring-0 shadow-sm shadow-pink-100"
			/>
			<!--Title-->
			<!--Content-->
			<div class="my-5">
				@include('_components/tip-tap')
			</div>
			<!--Content-->
			<!--Caption-->
			<input type="text" placeholder="Write a caption" 
				class="mb-5 w-full rounded-md border-0 h-9 px-4 outline-none bg-white bg-opacity-50 text-slate-700 focus:ring-0 shadow-sm shadow-pink-100"
			/>
			<!--Caption-->
			<!--Images-->
			<label class="py-10 text-sm text-slate-700 font-medium">
				Upload Image
			</label>
			@include('_components/dropbox')
			<!--Images-->
		</div>
		<!--Main Bar-->
		<!--Side Bar-->
		<div class="flex flex-col col-span-12 lg:col-span-4 px-1 md:px-5 py-5 shadow rounded-lg bg-opacity-25 bg-white">
			<div class="flex flex-col space-y-4">
				<!--Author-->
				<span class="flex flex-col">
					<h1 class="text-sm text-slate-900">Author</h1>
					@include('_components/listbox')
				</span>
				<!--Author-->
				<!--Categories-->
				<div class="flex flex-col">
					<h1 class="text-sm text-slate-900 py-1">Categories</h1>
					@include('_components/combobox')
				</div>
				<!--Categories-->
				<!--Tags-->
				<div>
					<h1 class="text-sm text-slate-900 py-1">Tags</h1>
					@include('_components/tags')
				</div>
				<!--Tags-->
				<!--Publish-->
				<div class="flex flex-col space-y-1">
					<h1 class="text-sm text-slate-900 py-1">Publish</h1>
					<!--Switch-->
					<div x-cloak x-data="{ toggle : false }" @click="toggle = ! toggle" class="relative cursor-pointer h-6 w-12 rounded-full transition-all duration-300 ease-in-out"
                    :class=" toggle ? 'bg-pink-400' : 'bg-slate-400' ">
                    <span class="absolute h-6 w-6 rounded-full bg-white transition-all duration-300 ease-in-out"
                        :class=" toggle ? 'translate-x-7' : '' " ></span>
					</div>
					<!--Switch-->
				</div>
				<!--Publish-->
				<!--Image-->
				<div class="flex flex-col space-y-1">
					<h1 class="text-sm text-slate-900">Image</h1>
					@include('_components/image')
				</div>
				<!--Image-->
			</div>
		</div>
		<!--Side Bar-->
	</form>
	<!--Form-->
</div>
<!--END: Add Blog Post-->

@endsection
