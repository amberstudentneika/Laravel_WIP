@extends("layouts.admin")

@section("page_title")
    Laravel Wip-Admin Page
@endsection

@section('content')

    <div class="w-9/12">

        <div class="p-4 text-gray-500"> {{-- background --}}

        <!-- component -->
            <div class="min-h-screen     flex flex-wrap items-center  justify-center  ">

                <div class="flex flex-col sm:flex-col lg:flex-row xl:flex-row md:flex-row justify-center items center  container   ">
                    <div class="py-12 sm:py-12 md:py-6 lg:py-6 xl:py-6 px-8 w-full md:max-w-min sm:w-full bg-white z-30">
                        <div class="text-center py-4 px-7">
                            <h1 class="text-gray-700 text-4xl font-black">Create Course</h1>
                            <p class="text-gray-500  mt-2">Create a course </p>
                        </div>
                        <a href=""><button class="w-full mt-6 mb-3 py-2 text-white font-semibold bg-gray-700 hover:shadow-xl duration-200 hover:bg-gray-800">Create</button></a>
                    </div>

                    <div class="py-12 sm:py-12 md:py-6 lg:py-6 xl:py-6 px-8 w-full md:max-w-min sm:w-full bg-green-500 transform scale-1 sm:scale-1 md:scale-105 lg:scale-105 xl:scale-105 z-40  shadow-none sm:shadow-none md:shadow-xl lg:shadow-xl xl:shadow-xl">
                        <div class="text-center py-4 px-7">
                            <h1 class="text-white text-4xl font-black">View Course</h1>
                            <p class="text-white text-opacity-50 mt-2">View all existing courses</p>
                        </div>
                        <button class="w-full mt-6 mb-3 py-2 text-white font-semibold bg-green-400 hover:shadow-xl duration-200 hover:bg-green-800">View</button>
                    </div>

                    <div class="py-12 sm:py-12 md:py-6 lg:py-6 xl:py-6 px-8 w-full md:max-w-min sm:w-full bg-white z-30">
                        <div class="text-center py-4 px-7">
                            <h1 class="text-gray-700 text-4xl font-black">Update Course</h1>
                            <p class="text-gray-500  mt-2">Update an existing course</p>
                        </div>
                        <button class="w-full mt-6 mb-3 py-2 text-white font-semibold bg-gray-700 hover:shadow-xl duration-200 hover:bg-gray-800">Update</button>
                    </div>

                </div>

            </div>

        </div>
    </div>

@endsection
