@extends('layouts.app')
@section('page_name', 'ร้านอาหารสไตล์ยุโรป')
@section('content')
    <div class="w-full h-screen bg-darkgreen flex justify-center items-center mt-[-70px]">
        <div class="h-[681px] w-[734px] bg-lightcream rounded-2xl font-extrabold drop-shadow-md text-darkgreen items-center justify-center flex flex-col">
            <form method="POST" action="{{ route('login') }}">
                <h1 class="text-[64px] text-center mb-[30px]">เข้าสู่ระบบ</h1>
                @csrf
                @if ($message = Session::get('error'))
                <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                    <span class="font-medium"><strong>{{ $message }}</strong></span>
                </div>
                @endif
                <div class="h-[150px] flex flex-col gap-[20px]">
                    <label for="name" class="text-[27px] ml-[-30px] ">{{ __('ชื่อผู้ใช้') }}</label>

                    <div class="font-[500] flex flex-col ">
                        <input id="name" type="text" class="text-[24px] px-[30px] rounded-3xl py-[10px] @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="ชื่อผู้ใช้"  autocomplete="name" autofocus>

                        @error('name')
                            <p style="color: red">
                                <strong style="color: red">{{ $message }}</strong>
                            </p>
                        @enderror
                    </div>
                </div>
                <div class="h-[150px] flex flex-col gap-[20px]">
                    <label for="password" class="text-[27px] ml-[-30px]">{{ __('รหัสผ่าน') }}</label>

                <div class="font-[500] flex flex-col">
                        <input id="password" type="password" class="text-[24px] px-[30px] rounded-3xl py-[10px] @error('password') is-invalid @enderror" name="password" placeholder="รหัสผ่าน"  autocomplete="current-password">

                        @error('password')
                            <p style="color: red">
                                <strong style="color: red">{{ $message }}</strong>
                            </p>
                        @enderror
                    </div>
                </div>

                {{-- <div class="">
                    <div class="">
                        <div class="">
                            <input class="" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="" for="remember">
                                {{ __('จำชื่อผู้ใช้') }}
                            </label>
                        </div>
                    </div>
                </div> --}}

                <div class="text-center">
                    <button type="submit" class="hover:text-lightcream hover:bg-darkgreen text-[32px] font-[500] px-[40px] mt-[10px] py-[12px] bg-[#9EB5A3] rounded-md">
                        {{ __('เข้าสู่ระบบ') }}
                    </button>
                    {{-- @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif --}}
                </div>
            </form>
        </div>
    </div>
@endsection
