<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{mix("css/app.css")}}">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("page_title")</title>
</head>
<body>

<div class="flex flex-wrap bg-gray-100 w-full h-screen">
    <div class="w-3/12 bg-white rounded p-3 shadow-lg">
        <div class="flex items-center space-x-4 p-2 mb-5">
            <img class="h-12 rounded-full" src="\images\profile.jpg" alt="Pro Pic">
            <div>
                <h4 class="font-semibold text-lg text-gray-700 capitalize font-poppins tracking-wide">{{Auth::User()->name}}</h4>
               <span class="text-sm tracking-wide flex items-center space-x-1">
                    <svg class="h-4 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg><span class="text-gray-600">Verified</span>
                </span>
            </div>
        </div>
        <ul class="space-y-2 text-sm">
            <li>
                <a href="{{url('/dash')}}" class="flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-gray-200 bg-gray-200 focus:shadow-outline">
                    <span class="text-gray-600">
                        <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </span>
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{route('Option-CourseType')}}" class="flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-gray-200 focus:bg-gray-200 focus:shadow-outline">Course Type</a>
            </li>
            <li>
                <a href="{{route('Option-Course')}}" class="flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-gray-200 focus:bg-gray-200 focus:shadow-outline">Course</a>
            </li>
            <li>
                <a href="" class="flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-gray-200 focus:bg-gray-200 focus:shadow-outline">..</a>
            </li>
{{--            --}}
{{--            <li>--}}
{{--                <a href="#" class="flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-gray-200 focus:bg-gray-200 focus:shadow-outline">--}}
{{--                    <span class="text-gray-600">--}}
{{--                        <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">--}}
{{--                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path>--}}
{{--                        </svg>--}}
{{--                    </span>--}}
{{--                    <span>Settings</span>--}}
{{--                </a>--}}
{{--            </li>--}}

{{--            <li>--}}
{{--            @auth--}}
                <li>
                    <form action="{{route('Logout')}}" method="post">
                        @csrf
                        <button class="p-2 bg-red-500 px-4 text-white rounded hover:bg-red-400 duration-300">Logout</button>

                    </form>
                </li>

{{--            @endauth--}}
            </ul>
    </div>

    @yield("content")

</div>

{{--<div class="container w-screen h-screen flex">--}}

{{--    <div class=" bg-white p-4 h-full w-2/12">--}}
{{--        <h1 class="text-3xl font-extrabold text-center text-blue-600 mb-6">Admin</h1>--}}
{{--        <ul>--}}
{{--            <li class="py-2 px-2 bg-blue-600 text-white cursor-pointer">Students</li>--}}
{{--            <li class="py-2 px-2 hover:bg-blue-600 duration-300 mt-3  hover:text-white cursor-pointer">Courses</li>--}}
{{--            <li class="py-2 px-2 hover:bg-blue-600 duration-300 mt-3  hover:text-white cursor-pointer">Course Type</li>--}}
{{--            <li class="py-2 px-2 hover:bg-blue-600 duration-300 mt-3  hover:text-white cursor-pointer">Course Selection</li>--}}
{{--            <li class="py-2 px-2 hover:bg-blue-600 duration-300 mt-3 hover:text-white cursor-pointer">Logout</li>--}}
{{--        </ul>--}}
{{--    </div>--}}
{{--    <div class="w-10/12 h-full flex justify-center items-center bg-gray-300">--}}

{{--        <div class="h-full w-full">--}}
{{--            @yield("content")--}}
{{--        </div>--}}

{{--    </div>--}}

{{--</div>--}}



</body>
</html>
