@extends('layouts.master')
@section('title','register')
@section('main')
<br><br><br><br><br>
<h3 style="text-align: center;">ثبت نام </h3>
<div style="
direction:rtl;
  position: absolute;
  left: 50%;
  top: 55%;
  transform: translate(-50%, -50%);">
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-label for="name" :value="__('نام')" />

            <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-label for="email" :value="__('ایمیل')" />

            <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-label for="password" :value="__('رمز عبور')" />

            <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-label for="password_confirmation" :value="__('تایید رمز عبور')" />

            <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required />
        </div>

        <div class="flex items-center justify-end mt-4">


            <x-button class="btn btn-danger">
                ثبت نام
            </x-button>
        </div>
    </form>
</div>
@endsection()
