@extends('_layouts.main')

@section('body')

@include('_components.general-report')

<!--BEGIN: Conversions and Traffic Report-->
<div class="mb-10 grid grid-cols-12 gap-6">
    <!--Conversion-->
    <div class="col-span-12 md:col-span-8">
        @include('_components/conversions')
    </div>
    <!--Conversion-->
    <!--Traffic Channels-->
    <div class="col-span-12 md:col-span-4 h-full">
        @include('_components/traffic-channels')
    </div>
    <!--Traffic Channels-->
</div>
<!--END: Conversions and Traffic Report-->
<!--BEGIN: Projects and Sales-->
<div class="mb-10 grid grid-cols-12 gap-6">
    <!--Projects-->
    <div class="col-span-12 lg:col-span-4">
        @include('_components/projects')
    </div>
    <!--Projects-->
    <!--Sales-->
    <div class="col-span-12 md:col-span-8">
        @include('_components/sales')
    </div>
    <!--Sales-->
</div>
<!--END: Projects and Sales-->
@include('_components/tasks')
<!--BEGIN: Recent Activities and TODO-->
<div class="mb-10 grid grid-cols-12 gap-6">
    <!--Recent Activities-->
    <div class="col-span-12 sm:col-span-5">
        <div class="px-5 py-3 shadow rounded-lg bg-opacity-25 bg-white">
            <div class="flex items-center justify-between font-semibold py-3 text-sm text-slate-800">
                <span>Recent Activities</span>
                <a class="text-xs text-blue-600">View All</a>
            </div>
            <div class="flex flex-col space-y-4">
                <div class="relative flex items-center">
                    <span class="absolute top-6 left-5 h-20 w-px border-l border-slate-400"></span>
                    <img src="assets/images/profile-pic-3.jpg" class="h-10 w-10 z-10 rounded-full shadow-md" alt="">
                    <div class="flex flex-col ml-3 space-y-1">
                        <h1 class="font-medium text-xs text-slate-900">Xenia Onatop</h1>
                        <p class="text-xs text-slate-600">Attended to a customer issue regarding their website being down.</p>
                        <p class="text-xs text-slate-400">16 mins ago</p>
                    </div>
                </div>
                <div class="relative flex items-center">
                    <span class="absolute top-6 left-5 h-20 w-px border-l border-slate-400"></span>
                    <img src="assets/images/profile-pic-5.jpg" class="h-10 w-10 z-10 rounded-full shadow-md" alt="">
                    <div class="flex flex-col ml-3 space-y-1">
                        <h1 class="font-medium text-xs text-slate-900">Mary Goodnight</h1>
                        <p class="text-xs text-slate-600">Pushed new features to production.</p>
                        <p class="text-xs text-slate-400">25 mins ago</p>
                    </div>
                </div>
                <div class="relative flex items-center">
                    <img src="assets/images/profile-pic-6.jpg" class="h-10 w-10 z-10 rounded-full shadow-md" alt="">
                    <div class="flex flex-col ml-3 space-y-1">
                        <h1 class="font-medium text-xs text-slate-900">Holly Goodhead</h1>
                        <p class="text-xs text-slate-600">Lauched new product for client.</p>
                        <p class="text-xs text-slate-400">1 hr ago</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Recent Activities-->
    <!--TODO-->
    <div class="col-span-12 sm:col-span-7">
        @include('_components/todos')
    </div>
    <!--TODO-->
</div>
<!--END: Recent Activities and TODO-->
@endsection
