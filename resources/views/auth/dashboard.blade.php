@extends("layouts.app")


@section("content")

    <h1 class="text-6xl text-pink-400 text-center">Dashboard</h1>
    <div class="">
      <table class="table">
        <th>{{'Course'}}</th>
        <th>{{'Application Status'}}</th>
        @foreach($usercourses as $usercourse)
        <tr>
          <td>{{$usercourse['course_name']}}</td>
          @if($usercourse['is_approved']===2)
          <td>{{'Applied'}}</td>
          @endif
          @if($usercourse['is_approved']===1)
          <td>{{'Approved'}}</td>
          @endif
          @if($usercourse['is_approved']===0)
          <td>{{'Denied'}}</td>
          @endif
        </tr>
        @endforeach
      </table>
    </div>
@endsection
