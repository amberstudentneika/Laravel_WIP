@extends("layouts.admin")

@section("page_title")
    Laravel Wip-Admin Page
@endsection

@section('content')

    <div class="w-9/12">
        <div class="w-full h-screen bg-gray-800">
        <div class="p-4 text-gray-500"> {{-- background --}}
            <div class="w-full max-w-xs">
                @if (session()->has('course_status'))
                    <div class=" bg-green-500 p-4 rounded-lg text-white text-center mb-6">
                        {{session('course_status')}}
                    </div>
                @endif
                <form method="POST" action="{{route('Store-CourseType')}}" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                    @csrf
                    <div class="mb-4">
                        <label class=" sr-only block text-gray-700 text-sm font-bold mb-2" for="type">
                            Enter Course Type
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="type" type="text" placeholder="Enter Course Type">
                        @error("type")
                        <div class="text-red-700 mt-2 text-sm">
                            {{"Invalid input"}}
                        </div>
                        @enderror
                    </div>

                    <div class="flex flex-wrap">
                        <div class="w-full lg:w-12/12 px-4">
                            <div class="relative w-full mb-3">
                                <label class=" sr-only block text-left" style="max-width: 400px;">
                                    <span class="text-gray-700">Course type description</span>
                                     </label>  <textarea name="info" class="form-textarea mt-1 block w-full" rows="3" placeholder="Enter course description here."></textarea>
                                @error("info")
                                <div class="text-red-700 mt-2 text-sm">
                                    {{"Invalid input"}}
                                </div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center justify-between">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                            Add
                        </button>
                        <button type="reset" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" >
                            Clear Fields
                        </button>
                    </div>

                </form>
        </div>
    </div>
        </div>
@endsection
