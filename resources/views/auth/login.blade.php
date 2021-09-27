@extends("layouts.app")


@section("content")
    <!-- component -->
    <div class="min-h-screen bg-gray-800 flex justify-center items-center">
        @if (session()->has('login_status'))
            <div class=" bg-red-500 p-4 rounded-lg text-white text-center mb-6">
                {{session('login_status')}}
            </div>
        @endif
        <form method="post" action="{{route("On-Login")}}">
            @csrf
        <div class="py-12 px-12 bg-white rounded-2xl shadow-xl z-20">
            <div>
                <h1 class="text-3xl font-bold text-center mb-4 cursor-pointer">Login</h1>
            </div>
            <div class="space-y-4">
                <label class="sr-only" for="name"> Email </label>
                <input name="email" type="email" placeholder="Enter Email" class="@error('email') border-red-700 @enderror block text-sm py-3 px-4 rounded-lg w-full border outline-none" />
                @error("email")
                <div class="text-red-700 mt-2 text-sm">
                    {{$message}}
                </div>
                @enderror

                <label class="sr-only" for="password">Password </label>
                <input name="password" type="password" placeholder="Enter Password"  class="@error('password') border-red-700 @enderror block text-sm py-3 px-4 rounded-lg w-full border outline-none" />
                @error("password")
                 <div class="text-red-700 mt-2 text-sm">
                     {{$message}}
                </div>
                @enderror
            </div>
            <div class="text-center mt-6">
                <button  type="submit" class="py-3 w-64 text-xl text-white bg-gray-800 rounded-2xl">Login</button>
                <p class="mt-4 text-sm">Don't Have An Account? <span class="underline cursor-pointer"><a href="{{url('/register')}}">Register</a></span>
                </p>
            </div>
        </div>
    </form>


@endsection
