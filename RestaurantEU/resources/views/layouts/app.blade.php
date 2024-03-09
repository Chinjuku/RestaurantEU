<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') | RestaurantEU</title>
    {{-- <link rel="stylesheet" href="{{ asset('css/input.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('css/output.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
</head>
<body class="overflow-y-hidden">
    <nav class="bg-darkgreen fixed w-full text-lightcream p-4 h-[70px] flex items-center z-50">
        <div class="container mx-auto flex justify-between items-center">
            <div>
                <a class="font-bold text-4xl" href="{{ url('/') }}">
                    @yield('page_name')
                </a>
            </div>
            <div>
                <ul class="text-white flex space-x-4 items-center gap-[40px]">
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link text-[30px] bg-lightcream hover:bg-cream py-2 px-4 text-darkgreen duration-150 rounded-lg" href="{{ route('login') }}">{{ __('เข้าสู่ระบบ') }}</a>
                            </li>
                        @endif
                        {{-- @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif --}}

                    @else
                    @if ( Auth::user()->name == 'Manager')
                        <li>
                        <a href="{{ route('manager.home') }}" class="block px-4 py-2 hover:bg-lightcream hover:rounded-xl hover:text-darkgreen text-[18px]">แดชบอร์ด</a>
                        </li>
                        <li>
                        <a href="{{ route('manager.employee') }}" class="block px-4 py-2 hover:bg-lightcream hover:rounded-xl hover:text-darkgreen text-[18px]">จัดการพนักงาน</a>
                        </li>
                        <li>
                        <a href="{{ route('manager.menu') }}" class="block px-4 py-2 hover:bg-lightcream hover:rounded-xl hover:text-darkgreen text-[18px]">จัดการเมนู</a>
                        </li>
                    @elseif ( Auth::user()->name == 'Waiter')
                        <li>
                            <a href="{{ route('waiter.readytoserve') }}" class="block px-4 py-2 hover:bg-lightcream hover:rounded-xl hover:text-darkgreen text-[18px]">รายการที่เสิร์ฟ</a>
                        </li>
                        <li>
                            <a href="{{ route('showreserve') }}" class="block px-4 py-2 hover:bg-lightcream hover:rounded-xl hover:text-darkgreen text-[18px]">ดูคิวจอง</a>
                        </li>
                    @elseif ( Auth::user()->name == 'Cashier')
                        <li>
                            <a href="{{ route('cashier.home') }}" class="block px-4 py-2 hover:bg-lightcream hover:rounded-xl hover:text-darkgreen text-[18px]">หน้าแคชเชียร์</a>
                        </li>
                        <li>
                            <a href="{{ route('showreserve') }}" class="block px-4 py-2 hover:bg-lightcream hover:rounded-xl hover:text-darkgreen text-[18px]">ดูคิวจอง</a>
                        </li>
                    @endif
                    
                    <li>
                        <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="text-darkgreen hover:text-green gap-2 text-lg flex bg-lightcream hover:bg-cream focus:ring-4 focus:outline-none font-bold focus:ring-blue-300 rounded-lg px-5 py-2.5 text-center items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                            {{ Auth::user()->name }} 
                            <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                            </svg>
                            </button>
                            
                            <!-- Dropdown menu -->
                            <div id="dropdown" class="z-10 hidden bg-lgreen hover:bg-darkgreen divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                                <ul class="py-[5px] text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                                  <li>
                                    <div>
                                        <a class="block px-4 py-2 bg-lgreen hover:bg-darkgreen duration-150 text-2xl dark:hover:bg-gray-600 text-white" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            {{ __('ออกจากระบบ') }}
                                        </a>
            
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                  </li>
                                </ul>
                            </div>
                    </li>
                    @endguest
                    
                </ul>
            </div>
        </div>
    </nav>

    <div class="pt-[70px] ">
        @yield('content')
    </div>
    <script>
        @if (Session::has('message'))
            var type = "{{ Session::get('alert-type', 'info') }}"
            switch (type) {
                case 'success':
                    toastr.options.timeOut = 7000;
                    toastr.success("{{ Session::get('message') }}");
                    var audio = new Audio('audio.mp3');
                    audio.play();

                    break;
            }
        @endif
    </script>
</body>
</html>
