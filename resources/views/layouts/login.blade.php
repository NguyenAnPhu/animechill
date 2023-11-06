@include('block.link')
@extends('layouts.personal-page')
@section('title','Đăng Nhập')

<div class="bg-cover bg-center bg-fixed" style="background-image: url('{{asset('assets/images/bg-login2.gif')}}">
    <div class="h-screen flex justify-center items-center">
        <div class="bg-white mx-4 p-8 rounded shadow-md w-full md:w-1/2 lg:w-1/3">
            <h1 class="text-3xl font-bold mb-8 text-center">Login</h1>
            <form method="POST" action="{{route('acpLogin')}}">
                @csrf
                <div class="form-group mb-4">
                    <label class="block font-semibold text-gray-700 mb-2" for="email">
                        Email
                    </label>
                    <input
                        class="border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="email" name="email" type="email" placeholder="Enter your email address"  required autofocus/>
                </div>
                <div class="form-group mb-4">
                    <label class="block font-semibold text-gray-700 mb-2" for="password">
                        Password
                    </label>
                    <input
                        class="border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                        id="password" name="password" type="password" placeholder="Enter your password" required/>
                    <a class="text-gray-600 hover:text-gray-800" href="{{route('register')}}">Register ?</a>
                </div>
                <div class="form-group mb-6">
                    <button
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                        type="submit">
                        Login
                    </button>
                </div>
            </form>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

        </div>
    </div>
</div>
