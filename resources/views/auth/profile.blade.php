@extends("layouts.app")


@section("content")
    <!-- component -->
    <div class="min-h-screen bg-gray-800 flex justify-center items-center">

        <form method="post" action="{{route('On-Update')}}">
            @csrf
            <div class="py-12 px-12 bg-white rounded-2xl shadow-xl z-20">
                <div>
                    <h1 class="text-3xl font-bold text-center mb-4 cursor-pointer">Update Profile</h1>
                    <p class="w-80 text-center text-sm mb-8 font-semibold text-gray-700 tracking-wide cursor-pointer">Use form below to update your profile.</p>
                </div>
                <div class="space-y-4">
                    <label class="sr-only" for="name"> Name </label>
                    <input name="name" type="text" value="{{$userInfo->name}}"  class=" @error('name') border-red-700 @enderror block text-sm py-3 px-4 rounded-lg w-full border outline-none" />
                    @error("name")
                    <div class="text-red-700 mt-2 text-sm">
                        {{$message}}
                    </div>
                    @enderror

                    <input name="email" disabled type="email" value="{{$userInfo->email}}"  class="@error('email') border-red-700 @enderror block text-sm py-3 px-4 rounded-lg w-full border outline-none" />
                    @error("email")
                    <div class="text-red-700 mt-2 text-sm">
                        {{$message}}
                    </div>
                    @enderror

                    <label class="sr-only" for="tele"> Telephone Number </label>
                    <input name="tele" type="tel" value="{{$userInfo->tele}}" placeholder="Enter Telephone Number" class="@error('tele') border-red-700 @enderror block text-sm py-3 px-4 rounded-lg w-full border outline-none" />
                    @error("tele")
                    <div class="text-red-700 mt-2 text-sm">
                        {{$message}}
                    </div>
                    @enderror

                </div>
                <div class="text-center mt-6">
                    <button type="submit" class="py-3 w-64 text-xl text-white bg-gray-800 rounded-2xl">Update Account</button>
                </div>
            </div>
            @if (session()->has('update_status'))
                <div class=" bg-green-500 p-4 rounded-lg text-white text-center mb-6">
                    {{session('update_status')}}
                </div>
            @endif
        </form>


@endsection
