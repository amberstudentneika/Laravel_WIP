@extends('layouts.app')
@section("page_title")
    Laravel Wip-Admin Page
@endsection

@section('content')
  <h1 class="text-6xl text-gray-800 text-center">Available Courses</h1>
    <div class="md:px-32 py-8 w-full">
        <div class="shadow overflow-hidden rounded border-b border-gray-200">
            <table class="min-w-full bg-white">
                <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">{{'Courses'}}</th>
                    <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">{{'Course Type'}}</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">{{'Course Description'}}</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">{{'Action'}}</th>
                </tr>
                </thead>
                <tbody class="text-gray-700">
                @foreach($courses as $course)
                    <tr>
                        <td class="w-1/3 text-left py-3 px-4">{{$course['course_name']}}</td>
                        <td class="w-1/3 text-left py-3 px-4">{{$course['course_type']}}</td>
                        <td class="text-left py-3 px-4"> {{$course['desc']}}</td>
                        <td class="text-left py-3 px-4">
                            <form class="" action="{{route('apply')}}" method="post">
                                @csrf
                                <input type="hidden" name="course" value="{{$course['id']}}">
                                <button type="submit" name="button" class="btn btn-primary">Apply</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        @if(Session('applied_again')!=null)
        <div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4" role="alert">
            <p class="font-bold">Alert</p>
            <p>{{Session('applied_again')}}</p>
        </div>
        @endif
    </div>
@endsection
