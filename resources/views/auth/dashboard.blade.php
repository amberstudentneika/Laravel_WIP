@extends("layouts.app")


@section("content")

<<<<<<< HEAD
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
=======
    <h1 class="text-6xl text-gray-800 text-center">Dashboard</h1>

    <div class="md:px-32 py-8 w-full">
        <div class="shadow overflow-hidden rounded border-b border-gray-200">
            <table class="min-w-full bg-white">
                <thead class="bg-gray-800 text-white">
                <tr>
                    <th class=" text-center py-3 px-4 uppercase font-semibold text-sm">{{'Course'}}</th>
                    <th class=" text-center py-3 px-4 uppercase font-semibold text-sm">{{'Application Status'}}</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700">
                @foreach($usercourses as $usercourse)
                    <tr>
                        <td class="text-center py-3 px-4">{{$usercourse['course_name']}}</td>
                             @if($usercourse['is_approved']===2)
                                <td class="text-center py-3 px-4">{{'Applied'}}</td>
                             @endif

                             @if($usercourse['is_approved']===1)
                                <td class="text-center py-3 px-4"> {{'Approved'}}</td>
                             @endif

                             @if($usercourse['is_approved']===0)
                                <td class="text-center py-3 px-4">{{'Denied'}} </td>
                             @endif
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
>>>>>>> 7b4ba215ec40e461174ba91cb1acdc01d6c6ea7c
    </div>
@endsection

