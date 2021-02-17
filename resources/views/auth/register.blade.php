@extends('layouts.guest')
@section('title', 'Register' )
@section('content')

<div class="mx-auto max-w-7xl md:flex md:flex-col">

    <div class="p-8 md:p-0 w-full md:w-1/3 mx-auto">        

        <h2 class="mt-20 mb-6 text-center text-3xl font-extrabold text-gray-900">
            Register
        </h2>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="phone_no" :value="__('Phone Number')" />

                <x-input id="phone_no" class="block mt-1 w-full" type="tel" name="phone_no" :value="old('phone_no')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4 shadow-sm text-white bg-blue-600 hover:bg-blue-700">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>

@endsection

