@extends("layouts.app")


@section("content")
    <!-- component -->
    <div class="min-h-screen bg-gray-800 flex justify-center items-center">
        @if (session()->has('login_status'))
            <div class=" bg-red-500 p-4 rounded-lg text-white text-center mb-6">
                {{session('login_status')}}
            </div>
        @endif
        <form method="post" action="{{url('/register/store')}}">
            @csrf
            <div class="py-12 px-12 bg-white rounded-2xl shadow-xl z-20">
                <div>
                    <h1 class="text-3xl font-bold text-center mb-4 cursor-pointer">Create An Account</h1>
                    <p class="w-80 text-center text-sm mb-8 font-semibold text-gray-700 tracking-wide cursor-pointer">Create an
                        account to begin applying for any of our courses!</p>
                </div>
                <div class="space-y-4">
                    <label class="sr-only" for="name"> Name </label>
                    <input name="name" type="text" placeholder="Enter Name" class=" @error('name') border-red-700 @enderror block text-sm py-3 px-4 rounded-lg w-full border outline-none" />
                    @error("name")
                    <div class="text-red-700 mt-2 text-sm">
                        {{$message}}
                    </div>
                    @enderror

                    <input name="email" type="text" placeholder="Enter Email" class="@error('email') border-red-700 @enderror block text-sm py-3 px-4 rounded-lg w-full border outline-none" />
                    @error("email")
                    <div class="text-red-700 mt-2 text-sm">
                        {{$message}}
                    </div>
                    @enderror

                    <label class="sr-only" for="tele"> Telephone Number </label>
                    <input name="tele" type="tel" value="000-0000-000" placeholder="Enter Telephone Number" class="@error('tele') border-red-700 @enderror block text-sm py-3 px-4 rounded-lg w-full border outline-none" />
                    @error("tele")
                    <div class="text-red-700 mt-2 text-sm">
                        {{$message}}
                    </div>
                    @enderror

                    <label class="sr-only" for="password">Password </label>
                    <input name="password" type="password" placeholder="Enter Password" class="@error('password') border-red-700 @enderror block text-sm py-3 px-4 rounded-lg w-full border outline-none" />
                    @error("password")
                    <div class="text-red-700 mt-2 text-sm">
                        {{$message}}
                    </div>
                    @enderror

                    <label class="sr-only" for="password_confirmation"> Verify Password </label>
                    <input name="password_confirmation" type="password" placeholder="Verify Password"  class="@error('password') border-red-700 @enderror block text-sm py-3 px-4 rounded-lg w-full border outline-none" />
                    @error("password")
                    <div class="text-red-700 mt-2 text-sm">
                        {{$message}}
                    </div>
                    @enderror

                </div>
                <div class="text-center mt-6">
                    <button type="submit" class="py-3 w-64 text-xl text-white bg-gray-800 rounded-2xl">Create Account</button>
                    <p class="mt-4 text-sm">Already Have An Account? <span class="underline cursor-pointer"> <a href="{{url('/login')}}">Sign In</a> </span>
                    </p>
                </div>
            </div>
</form>


@endsection



