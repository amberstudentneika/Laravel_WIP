@extends("layouts.app")


@section("content")
{{-- <h1 class="text-6xl text-pink-400 text-center">Welcome</h1>--}}
<!-- Create By Joker Banny -->
<body class="bg-white">
<header>
    <nav class="p-6">
        <div class="flex justify-between items-center">
{{--            <h1 class="pr-6 border-r-2 text-2xl font-bold text-gray-500">saunatime</h1>--}}
{{--            <div class="flex justify-between flex-grow">--}}
{{--                <div class="flex ml-6 items-center">--}}
{{--            <span>--}}
{{--              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-4 cursor-pointer text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">--}}
{{--                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />--}}
{{--              </svg>--}}
{{--            </span>--}}
{{--                    <input class="outline-none text-sm flex-grow bg-gray-100" type="text" placeholder="Search saunas in Finland…" />--}}
{{--                </div>--}}
{{--                <div class="md:flex space-x-6 hidden">--}}
{{--                    <span class="text-gray-500 text-md">+ Add your sauna</span>--}}
{{--                    <span class="text-gray-500 text-md">Sign up</span>--}}
{{--                    <span class="text-gray-500 text-md">Log in</span>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </nav>
    <!-- Section Hero -->
    <div class="container mx-auto bg-gray-800 h-96 rounded-md flex items-center">
        <div class="sm:ml-20 text-gray-50 text-center sm:text-left">
            <h1 class="text-5xl font-bold mb-4">
                Akie Elagi Institute <br />
               of Jamaica
            </h1>
            <p class="text-lg inline-block sm:block">Elagi Institute of fine learning. Browse and select from a wide range of courses available.</p>
           <a href="{{url('/login')}}"> <button  class="mt-8 px-4 py-2 bg-gray-600 rounded">Apply Today</button></a>
        </div>
    </div>
</header>
<main class="py-16 container mx-auto px-6 md:px-0">
    <section>
        <h1 class="text-3xl font-bold text-gray-600 mb-10">Browse Our Course Categories</h1>
        <div class="grid sm:grid-cols-3 gap-4 grid-cols-2">
            <div>
                <div class="bg-gray-300 h-44"><img src="/images/science.jpg" class="h-44 w-full"> </div>
                <h3 class="text-lg font-semibold text-gray-500 mt-2">Sciences</h3>
            </div>
            <div>
                <div class="bg-gray-300 h-44"><img src="/images/mech.jpg" class="h-44 w-full"> </div>
                <h3 class="text-lg font-semibold text-gray-500 mt-2">Mechanical</h3>
            </div>
            <div>
                <div class="bg-gray-300 h-44"><img src="/images/arts.jpg" class="h-44 w-full"> </div>
                <h3 class="text-lg font-semibold text-gray-500 mt-2">Art & Literature</h3>
            </div>
        </div>
        <hr class="w-40 my-14 border-4 rounded-md sm:mx-0 mx-auto" />
    </section>
    <section>
        <h1 class="text-gray-600 font-bold text-3xl text-center">
            We look forward of having you apart of our family
        </h1>
    <section>

@endsection
