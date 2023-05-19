@extends('auth.layouts.app', ['title' => 'Login'])

@section('content')
    <div class="card w-5/6 bg-white p-8 md:w-[30rem]">
        <div class="flex flex-col">
            <div class="my-4 flex items-center justify-center">
                <img src="{{ asset('assets/favicon/laravel_icon.png') }}" class="w-28 h-2w-28" alt="">
            </div>
            <div id="title">
                <h1 class="text-xl font-bold text-center mb-6 text-slate-700">LOG INTO YOUR ACCOUNT</h1>
            </div>
            <x-alert />
            <form action="{{ route('login.store') }}" method="post">
                @csrf
                <div class="form-control mt-4">
                    <div class="flex items-center relative w-full">
                        <div class="absolute left-4  w-8 h-8 flex items-center justify-center">
                            <i class="fa-solid fa-envelope text-gray-600"></i>
                        </div>
                        <input type="text"
                            class="w-full h-[40px] py-7 rounded-lg pl-14 border-2 transition-all duration-200 ease-in-out outline-none text-[#0d0c22] bg-white text-sm md:text-md focus:shadow-lg pr-4 @error('email') border-red-400 @enderror"
                            placeholder="Email" name="email" value="{{ old('email') }}">
                    </div>
                    @error('email')
                        <p class="text-sm text-red-600 ml-2 mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-control mt-4 mb-8">
                    <div class="flex items-center relative w-full">
                        <div class="absolute left-4  w-8 h-8 flex items-center justify-center">
                            <i class="fa-solid fa-key text-gray-600 "></i>
                        </div>
                        <input type="password"
                            class="w-full h-[40px] py-7 rounded-lg pl-14 border-2 transition-all duration-200 ease-in-out outline-none text-[#0d0c22] bg-white text-sm md:text-md focus:shadow-lg pr-4 @error('password') border-red-400 @enderror"
                            placeholder="Password" name="password" value="{{ old('password') }}">
                    </div>
                    @error('password')
                        <p class="text-sm text-red-600 ml-2 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <button
                   type="submit" class="btn border-white w-full bg-gradient-to-r from-cyan-500 to-blue-500 hover:border-white">LOGIN</button>
            </form>

            <a href="{{ route('register.create') }}" class="btn btn-success text-white mt-4">CREATE ACCOUNT</a>

        </div>
    </div>
@endsection
