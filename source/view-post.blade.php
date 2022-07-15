@extends('_layouts.main')

@section('body')

<!--BEGIN: Blog Post-->
<div class="mb-10 md:mx-40 grid grid-cols-12 gap-6">
    <!--Post-->
    <div class="col-span-12">
        <div class="px-1 md:px-5 py-5 shadow rounded-lg bg-opacity-25 bg-white">
            <!--Title-->
            <div class="flex flex-col space-y-2 p-2">
                <h1 class="text-xl font-bold text-slate-700">
                    Lorem Ipsum is simply dummy text
                </h1>
                <div class="flex flex-col">
                    <p class="text-sm text-sky-800">
                        <span class="text-slate-500">17 Mar 2021 ~ </span>
                        <a href="#">Business</a> 
                        <span class="text-slate-500">~ 50 minutes ago</span>
                    </p>
                </div>
            </div>
            <!--Tite-->
            <!--Featured Image-->
            <img src="../assets/images/cover-image.jpg" class="w-auto" alt="">
            <!--Featured Image-->
            <!--Activities-->
            <div class="border-b border-gray-300">
                <div class="flex items-center justify-between px-2 py-4">
                    <!--Users-->
                    <div class="flex -space-x-2">
                        <img class="inline-block h-6 w-6 rounded-full ring-2 ring-white" src="../assets/images/profile-pic.jpg" alt="">
                        <img class="inline-block h-6 w-6 rounded-full ring-2 ring-white" src="../assets/images/profile-pic-2.jpg" alt="">
                        <img class="inline-block h-6 w-6 rounded-full ring-2 ring-white" src="../assets/images/profile-pic-3.jpg" alt="">
                        <img class="inline-block h-6 w-6 rounded-full ring-2 ring-white" src="../assets/images/profile-pic-4.jpg" alt="">
                        <div class="flex justify-center items-center h-6 w-6 rounded-full ring-2 ring-white bg-slate-400 text-[0.60rem] text-slate-900">+5</div>
                    </div>
                    <!--Users-->
                    <!--Actions-->
                    <div class="flex items-center space-x-2">
                        <button class="flex items-center space-x-1 text-xs px-2 py-1 bg-white bg-opacity-50 rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg" class="text-pink-600 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"></path>
                            </svg>
                            <span>25</span>
                        </button>
                        <button class="flex items-center space-x-1 text-xs px-2 py-1 bg-white bg-opacity-50 rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-sky-500" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M15 8a3 3 0 10-2.977-2.63l-4.94 2.47a3 3 0 100 4.319l4.94 2.47a3 3 0 10.895-1.789l-4.94-2.47a3.027 3.027 0 000-.74l4.94-2.47C13.456 7.68 14.19 8 15 8z"></path>
                            </svg>
                            <span>12</span>
                        </button>
                    </div>
                    <!--Actions-->
                </div>
            </div>
            <!--Activities-->
            <!--Comments-->
            <div class="flex flex-col space-y-1">
                <div class="flex items-center justify-between px-2 py-4">
                    <!--Comments and Views-->
                    <div class="flex items-center text-sm text-slate-500 space-x-2">
                        <span>Comments: 46</span>
                        <span>Views: 113k</span>
                    </div>
                    <!--Comments and Views-->
                    <!--Likes-->
                    <div class="flex items-center text-sm text-slate-500 space-x-2">
                        <span>Likes: 464K</span>
                    </div>
                    <!--Like-->
                </div>
            </div>
            <!--Comments-->
            <!--Paragraph-->
            <div class="mt-3 prose-sm prose-slate">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sagittis, ligula ut facilisis convallis, sapien enim luctus ligula, nec ornare velit lorem vel tortor. Nunc justo purus, sodales elementum imperdiet a, mollis non ante. Proin mattis leo ac sagittis imperdiet. In tristique euismod odio, sed ornare felis feugiat a. Ut in tortor at enim vestibulum tempus. Vestibulum maximus at nisi non ornare. Duis nec ultricies dui, a dignissim augue. Nam sagittis erat in sem ultrices, posuere volutpat dui laoreet. Praesent vulputate elementum mollis. Morbi vel laoreet metus, sit amet consectetur est. Sed tincidunt nunc id neque ultrices ultricies. Morbi ligula eros, laoreet at quam vel, interdum efficitur dui.
                </p>
                <p>
                    Mauris dignissim tincidunt turpis sed accumsan. Quisque sollicitudin convallis ex ut pulvinar. Praesent rutrum ipsum in orci mattis luctus. Nunc maximus nec dui et pretium. Cras auctor massa augue, sed laoreet magna ullamcorper dignissim. Aliquam commodo iaculis massa nec tempor. Sed maximus justo at laoreet gravida.
                </p>
                <p>
                    Morbi dignissim ac libero nec maximus. Sed varius vitae tellus id laoreet. Mauris eget gravida mauris. Etiam id sem porttitor, aliquet sem sed, tempor sem. Sed tellus nulla, commodo a varius volutpat, blandit ut quam. Maecenas cursus sapien sed porttitor fringilla. Curabitur sed vulputate est. Fusce et turpis a eros accumsan dictum.
                </p>
                <p>
                    Aenean non lacus nec risus varius viverra. Curabitur semper, mi et ultrices finibus, lacus lectus tempor neque, auctor pulvinar sem tellus ut diam. Nulla volutpat sem et congue pharetra. Etiam euismod rhoncus velit rhoncus tristique. Curabitur non placerat eros, et vestibulum lorem. Nunc vehicula leo non dignissim commodo. Nam venenatis ultricies erat, sit amet finibus elit consequat sed. Proin a vehicula nisi. Pellentesque faucibus odio in orci tristique luctus. Sed pharetra nisl nec est auctor semper. Nam accumsan mi at mi dapibus tempus.
                </p>
                <p>
                    Interdum et malesuada fames ac ante ipsum primis in faucibus. Praesent luctus lectus orci, vel placerat nunc egestas in. Quisque vitae dolor feugiat, finibus nisl in, vestibulum arcu. Duis eget dolor id quam interdum scelerisque. Sed mollis neque dui, ac tincidunt nunc consectetur vel. Suspendisse vestibulum nisl in efficitur scelerisque. Donec mollis imperdiet quam et suscipit. Nulla eleifend tincidunt nisl sit amet maximus. Donec condimentum fermentum rutrum. Fusce ultricies enim nec dignissim ullamcorper. In facilisis, metus nec cursus sodales, quam dui finibus quam, vel molestie ipsum orci sit amet neque. Etiam varius, ante in lobortis efficitur, nunc erat hendrerit est, sit amet lobortis orci nunc vulputate sem. Mauris blandit hendrerit auctor. Phasellus ut condimentum ex. Aliquam auctor diam id metus ultrices vehicula. Interdum et malesuada fames ac ante ipsum primis in faucibus. 
                </p>
            </div>
            <!--Paragraph-->
            <!--Comments-->
            <div class="flex flex-col py-3 mt-2 space-y-5 border-b border-t border-gray-300">
                <!--comment-->
                <div class="flex items-start space-x-4">
                    <img src="../assets/images/profile-pic-2.jpg" class="h-10 w-10 md:h-12 md:w-12 rounded-full shadow" alt="">
                    <div class="p-3 text-xs text-slate-900 bg-white bg-opacity-50 rounded-xl">
                        Wow! never knew that lorem ipsum was simply a dummy text. 
                        I thought it was an actual language and I've spen 8 years of 
                        my life studying it. TIL moment.
                    </div>
                </div>
                <!--comment-->
                <!--comment-->
                <div class="flex items-start space-x-4">
                    <img src="../assets/images/profile-pic-3.jpg" class="h-10 w-10 md:h-12 md:w-12 rounded-full shadow" alt="">
                    <div class="p-3 text-xs text-slate-900 bg-white bg-opacity-50 rounded-xl">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                        Nunc maximus ipsum ex, eget mattis magna aliquam quis. 
                        Maecenas vitae magna dapibus, lobortis sem et, eleifend velit. 
                        Sed quis fermentum nunc.
                    </div>
                </div>
                <!--comment-->
            </div>
            <!--Comments-->
            <!--Comment Form-->
            <div class="py-3 flex items-start space-x-3">
                <img src="../assets/images/profile-pic.jpg" class="h-8 w-8 md:h-10 md:w-10 rounded-full shadow" alt="">
                <label class="block w-full">
                    <textarea class="text-xs bg-white bg-opacity-0 block w-full
                        border-0 
                        focus:ring-0 focus:border-black
                    " placeholder="leave a comment" rows="1"></textarea>
                </label>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-slate-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 9a2 2 0 0 1 2-2h.93a2 2 0 0 0 1.664-.89l.812-1.22A2 2 0 0 1 10.07 4h3.86a2 2 0 0 1 1.664.89l.812 1.22A2 2 0 0 0 18.07 7H19a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V9z"></path><path stroke-linecap="round" stroke-linejoin="round" d="M15 13a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"></path></svg>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-slate-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="m15.172 7-6.586 6.586a2 2 0 1 0 2.828 2.828l6.414-6.586a4 4 0 0 0-5.656-5.656l-6.415 6.585a6 6 0 1 0 8.486 8.486L20.5 13"></path></svg>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-slate-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 11a7 7 0 0 1-7 7m0 0a7 7 0 0 1-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 0 1-3-3V5a3 3 0 1 1 6 0v6a3 3 0 0 1-3 3z"></path></svg>
            </div>
            <!--Comment Form-->
        </div>
    </div>
    <!--Post-->
</div>
<!--END: Blog Post-->
@endsection
