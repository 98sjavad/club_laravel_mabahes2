@extends('layouts.master')
@section('title','log in')
@section('main')
<br><br><br><br><br>
<h3 style="text-align: center;">ورود به ناحیه کاربری </h3>
<div style="
direction:rtl;
  position: absolute;
  left: 50%;
  top: 55%;
  transform: translate(-50%, -50%);">
<form method="POST" action="{{ route('login') }}">
    @csrf

    <!-- Email Address -->
    <div>
        <x-label for="email" :value="__('ایمیل')" />

        <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
    </div>

    <!-- Password -->
    <div class="mt-4">
        <x-label for="password" :value="__('رمز عبور')" />

        <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
    </div>

    <!-- Remember Me -->
    <div class="block mt-4">

    </div>

    <div class="flex items-center justify-end mt-4">


        <x-button class="btn btn-danger">
           ورود
        </x-button>
    </div>
</form>
</div>
@endsection()
