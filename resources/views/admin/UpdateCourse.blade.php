@extends("layouts.admin")

@section("page_title")
    Laravel Wip-Admin Page
@endsection

@section('content')

    <div class="w-9/12">

        <div class="p-4 text-gray-500"> {{-- background --}}
            <div class="w-full max-w-xs">

                <form method="POST" action="{{route('Store-Update-Course')}}" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                    @csrf

                    <div class="flex flex-wrap">
                        <div class="w-full lg:w-12/12 px-4">
                            <div class="relative w-full mb-3">
                                <label class=" block text-left" style="max-width: 400px;">
                                    <span class="text-gray-700">Course ID</span>
                                </label>
                                <input readonly name="courseid" value="{{$data->course_type_id}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 text-center leading-tight focus:outline-none focus:shadow-outline"  type="text" >
                                @error("courseid")
                                    <div class="text-red-700 mt-2 text-sm">
{{--                                        {{$message}}--}} {{"Invalid input"}}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <input type="hidden" name="id" value="{{$data->id}}">
                    <div class="mb-4">
                        <label class=" sr-only block text-gray-700 text-sm font-bold mb-2" for="type">
                            Enter Course Name
                        </label>
                        <input name="coursename" value="{{$data->course_name}}" type="text" placeholder="Enter Course Name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" >
                        @error("coursename")
                        <div class="text-red-700 mt-2 text-sm">
                            {{$message}}
                        </div>
                        @enderror
                    </div>

                    <div class="flex items-center justify-between">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                           Update
                        </button>
                    </div>

                </form>
                @if (session()->has('Success'))
                    <div class=" bg-green-500 p-4 rounded-lg text-white text-center mb-6">
                        {{session('Success')}}
                    </div>
                @endif
            </div>
        </div>

@endsection
