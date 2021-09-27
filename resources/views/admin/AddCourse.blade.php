@extends("layouts.admin")

@section("page_title")
    Laravel Wip-Admin Page
@endsection

@section('content')

        <div class="w-9/12">
        <div class="w-full h-screen bg-gray-800">
        <div class="p-4 text-gray-500"> {{-- background --}}
            <div class="w-full max-w-xs">
                <form method="post" action="{{route('Store-Course')}}" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                    @csrf

                    <div class="mb-6">
                        <label class="sr-only block text-gray-700 text-sm font-bold mb-2" for="password">Name</label>
                        <input name="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" placeholder="Enter Course Name">
                        @error("name")
                        <div class="text-red-700 mt-2 text-sm">
                            {{$message}}
                        </div>
                        @enderror
                   </div>

                    <div class="mb-6">
                        <label  class=" sr-only block text-gray-700 text-sm font-bold mb-2" for="grid-state">Course ID</label>
                        <div class="relative">
                            <select name="courseid" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                                <option value="">Select Course ID</option>
                                @foreach($data as $info)
                                <option value="{{$info->id}}">{{$info->id.'-'.$info->course_type}}</option>
                                @endforeach
                            </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                            </div>
                        </div>
                        @error("courseid")
                        <div class="text-red-700 mt-2 text-sm">
                            {{$message}}
                        </div>
                        @enderror
                    </div>

                    <div class="flex items-center justify-between">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" >
                            Add Course
                        </button>
                        <button type="reset" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" >
                            Clear Fields
                        </button>
                    </div>

                </form>
                <a href="{{url('/course/option/view')}}"> <button class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" > Return to view </button></a>

                @if(session()->has('course_status'))
                    <div class=" bg-green-500 p-4 rounded-lg text-white text-center mb-6">
                        {{session('course_status')}}
                    </div>
                @endif
        </div>
        </div>
        </div>
@endsection
