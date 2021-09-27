@extends("layouts.admin")

@section("page_title")
    Laravel Wip-Admin Page
@endsection

@section('content')

    <div class="w-9/12">

            <div class="w-full h-screen bg-gray-800 flex justify-center items-center">
                <div class="container flex flex-col gap-4 mx-8">
                    <label class="text-gray-100 font-semibold tracking-wider text-lg">Live Application Status</label>
                    <div class="bg-gray-100 rounded-lg w-full h-auto py-4 flex flex-row justify-between divide-x divide-solid divide-gray-400">
                        <div class="relative flex-1 flex flex-col gap-2 px-4">
                            <label class="text-gray-800 text-base font-semibold tracking-wider"><a href="{{url('/application/view/approved')}}">Approved</a> </label>
                            <label class="text-green-800 text-4xl font-bold"><a href="{{url('/application/view/approved')}}">{{$total_approved}}</a> </label>
{{--                            <div class="absolute bg-red-400 rounded-md font-semibold text-xs text-gray-100 p-2 right-4 bottom-0">--}}
{{--                                - 5%--}}
{{--                            </div>--}}
                        </div>
                        <div class="relative flex-1 flex flex-col gap-2 px-4">
                            <label class="text-gray-800 text-base font-semibold tracking-wider"><a href="{{url('/application/view')}}">Applications</a></label>
                            <label class="text-green-800 text-4xl font-bold"> <a href="{{url('/application/view')}}">{{$app_count}}</a></label>
                            @if($app_count>0)
                            <div class="absolute bg-green-400 rounded-md font-semibold text-xs text-gray-100 p-2 right-4 bottom-0">
                                <a href="{{url('/application/view')}}">Pending</a>
                            </div>
                                @endif
                        </div>
                        <div class="relative flex-1 flex flex-col gap-2 px-4">
                            <label class="text-gray-800 text-base font-semibold tracking-wider">Total</label>
                            <label class="text-green-800 text-4xl font-bold">{{$total_app_count}}</label>
{{--                            <div class="absolute bg-green-400 rounded-md font-semibold text-xs text-gray-100 p-2 right-4 bottom-0">--}}
{{--                                + 5%--}}
{{--                            </div>--}}
                        </div>

                    </div>
                </div>
{{--//================================================--}}


                <div class="w-full h-screen bg-gray-800 flex justify-center items-center">
                    <div class="container flex flex-col gap-4 mx-8">
                        <label class="text-gray-100 font-semibold tracking-wider text-lg">Course/Category Status</label>
                        <div class="bg-gray-100 rounded-lg w-full h-auto py-4 flex flex-row justify-between divide-x divide-solid divide-gray-400">
                            <div class="relative flex-1 flex flex-col gap-2 px-4">
                                <label class="text-gray-800 text-base font-semibold tracking-wider"><a href="{{url('/course/option/view')}}">Course(s)</a> </label>
                                <label class="text-green-800 text-4xl font-bold"><a href="{{url('/course/option/view')}}">{{$course_count}}</a> </label>
                                {{--                            <div class="absolute bg-red-400 rounded-md font-semibold text-xs text-gray-100 p-2 right-4 bottom-0">--}}
                                {{--                                - 5%--}}
                                {{--                            </div>--}}
                            </div>
                            <div class="relative flex-1 flex flex-col gap-2 px-4">
                                <label class="text-gray-800 text-base font-semibold tracking-wider"><a href="{{url('/coursetype/option/view')}}">Course Category(ies)</a></label>
                                <label class="text-green-800 text-4xl font-bold"><a href="{{url('/coursetype/option/view')}}">{{$category_count}} </a></label>
                            </div>


                        </div>
                    </div>





{{-- //========================================--}}

            </div>
        </div>
{{--    <div class="justify-center p-8 border-green-400 border-2 h-full w-full">--}}
{{--        <h1 class="text-blue-600 text-2xl mb-6">DASHBOARD</h1>--}}
{{--    <div class="flex justify-between card_container mb-6">--}}
{{--        <div class="card bg-blue-300 p-4 h-28 w-40">--}}
{{--            <h2>Total students</h2>--}}
{{--        </div>--}}
{{--        <div class="card bg-blue-300 p-4 h-28 w-40">--}}
{{--            <h2>Total Acceptance</h2>--}}
{{--        </div>--}}
{{--        <div class="card bg-blue-300 p-4 h-28 w-40">--}}
{{--            <h2>Total Courses</h2>--}}
{{--        </div>--}}
{{--        <div class="card bg-blue-300 p-4 h-28 w-40">--}}
{{--            <h2>Total Categories</h2>--}}
{{--        </div>--}}

{{--    </div>--}}
{{--        <div class="big_card bg-white h-7/12">--}}
{{--            <h1>Most Recent Course Selection</h1>--}}
{{--        </div>--}}
{{--    </div>--}}

@endsection
