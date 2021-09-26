
@extends('layouts.app')
@section('content')
    <main class="sm:container sm:mx-auto sm:mt-10">
        <div class="">
            <table class="table-auto">
                <th>{{'Courses'}}</th>
                <th>{{'Course Type'}}</th>
                <th>{{'Course Description'}}</th>
                <th>{{'Action'}}</th>
                @foreach($courses as $course)
                    <tr>
                        <td>{{$course['course_name']}}</td>
                        <td>{{$course['course_type']}}</td>
                        <td>{{$course['desc']}}</td>
                        <td>
                            <form class="" action="{{route('apply')}}" method="post">
                                @csrf
                                <input type="hidden" name="course" value="{{$course['id']}}">
                                <button type="submit" name="button" class="btn btn-primary">Apply</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                <span>{{Session('applied_again')}}</span>
            </table>
        </div>
    </main>
@endsection
