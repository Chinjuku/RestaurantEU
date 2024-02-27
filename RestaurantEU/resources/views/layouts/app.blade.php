<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') | RestaurantEU</title>
    {{-- <link rel="stylesheet" href="{{ asset('css/input.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('css/output.css') }}">
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
</head>
<body class="overflow-y-hidden">
    <nav class="bg-darkgreen fixed w-full text-lightcream p-4 h-[70px] flex items-center">
        <div class="container mx-auto flex justify-between items-center">
            <div>
                <a class="font-bold text-3xl" href="{{ url('/') }}">
                    @yield('page_name')
                </a>
            </div>
            <div>
                <ul class="text-white flex space-x-4 items-center gap-[40px]">
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('เข้าสู่ระบบ') }}</a>
                            </li>
                        @endif
                        {{-- @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif --}}
                    @else
                        @if ( Auth::user()->name == 'Manager')
                            <li><a href="{{ route('manager.home') }}">แดชบอร์ด</a></li>
                            <li><a href="{{ route('manager.employee') }}">จัดการพนักงาน</a></li>
                            <li><a href="{{ route('manager.menu') }}">จัดการเมนู</a></li>
                        @endif
                    <li>
                        <div>
                            <a class="bg-lightcream text-darkgreen px-5 py-[6px] " href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                {{ __('ออกจากระบบ') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                    <li>
                        <p class="font-bold text-xl" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </p>
                    </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <div class="pt-[70px]">
        @yield('content')
    </div>
    
</body>
</html>
