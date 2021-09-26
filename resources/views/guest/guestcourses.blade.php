@extends('layouts.app')

@section('content')
    <main class="sm:container sm:mx-auto sm:mt-10">
        <div class="">
            <table class="table-auto">
                <th>{{'Courses'}}</th>
                <th>{{'Course Type'}}</th>
                <th>{{'Course Description'}}</th>
                @foreach($courses as $course)
                    <tr>
                        <td>{{$course['course_name']}}</td>
                        <td>{{$course['course_type']}}</td>
                        <td>{{$course['desc']}}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </main>
@endsection
