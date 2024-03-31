@extends('layouts.customer')
@section('bg', 'cream')
@section('name_nav', 'ตระกร้า')
@section('back')
    <div>
        <a href="{{ route('customer.table', $tableid) }}" class="cursor-pointer text-white scale-[1.2]">
            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" class="bg-white rounded-[50%] p-1"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M4 10L3.29289 10.7071L2.58579 10L3.29289 9.29289L4 10ZM21 18C21 18.5523 20.5523 19 20 19C19.4477 19 19 18.5523 19 18L21 18ZM8.29289 15.7071L3.29289 10.7071L4.70711 9.29289L9.70711 14.2929L8.29289 15.7071ZM3.29289 9.29289L8.29289 4.29289L9.70711 5.70711L4.70711 10.7071L3.29289 9.29289ZM4 9L14 9L14 11L4 11L4 9ZM21 16L21 18L19 18L19 16L21 16ZM14 9C17.866 9 21 12.134 21 16L19 16C19 13.2386 16.7614 11 14 11L14 9Z"
                    fill="#33363F" />
            </svg>
        </a>
    </div>
@endsection
@section('content')
    <div class="h-max-full px-[30px] phone:py-[26px] py-[30px] bg-cream w-full flex flex-col gap-5 tablet:text-[24px] tablet:gap-7">
        @if ($orders != null)
            @foreach ($orders as $key => $order)
                <div class="bg-lightcream flex items-center text-sm justify-between px-5 py-5 gap-3 border-2 border-black rounded-2xl">
                    <input class="bg-transparent border-none" type="hidden" value="{{ $order['menu_ID'] }}">
                    <div>
                        <input class="bg-transparent border-none" type="hidden" value="{{ $order['menu_Name'] }}" readonly>
                        <p>{{ $order['menu_Name'] }}</p>
                        {{-- <p>{{ $tableid }}</p> --}}
                    </div>
                    <div class="flex mr-3 mt-3 gap-4">
                        @livewire('customer.count-cart-menu', [
                        'count' => $order['count'],
                        'price' => $order['prices'],
                        'key' => $key,
                        'tableid' => $tableid,
                    ])
                    <a class="mt-[-4px]" href="{{ route('customer.table.clearcart', ['id' => $tableid, 'key' => $key]) }}">
                        <svg width="40" height="40" viewBox="0 0 1024 1024" class="icon phone:w-[30px] mb-1 phone:h-[30px]" version="1.1"
                            xmlns="http://www.w3.org/2000/svg" fill="#ff0000" class="text-red-600" stroke="#ff0000">

                            <g id="SVGRepo_bgCarrier" stroke-width="0" />

                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" />

                            <g id="SVGRepo_iconCarrier">

                                <path
                                    d="M905.92 237.76a32 32 0 0 0-52.48 36.48A416 416 0 1 1 96 512a418.56 418.56 0 0 1 297.28-398.72 32 32 0 1 0-18.24-61.44A480 480 0 1 0 992 512a477.12 477.12 0 0 0-86.08-274.24z"
                                    fill="#231815" />

                                <path
                                    d="M630.72 113.28A413.76 413.76 0 0 1 768 185.28a32 32 0 0 0 39.68-50.24 476.8 476.8 0 0 0-160-83.2 32 32 0 0 0-18.24 61.44zM489.28 86.72a36.8 36.8 0 0 0 10.56 6.72 30.08 30.08 0 0 0 24.32 0 37.12 37.12 0 0 0 10.56-6.72A32 32 0 0 0 544 64a33.6 33.6 0 0 0-9.28-22.72A32 32 0 0 0 505.6 32a20.8 20.8 0 0 0-5.76 1.92 23.68 23.68 0 0 0-5.76 2.88l-4.8 3.84a32 32 0 0 0-6.72 10.56A32 32 0 0 0 480 64a32 32 0 0 0 2.56 12.16 37.12 37.12 0 0 0 6.72 10.56zM726.72 297.28a32 32 0 0 0-45.12 0l-169.6 169.6-169.28-169.6A32 32 0 0 0 297.6 342.4l169.28 169.6-169.6 169.28a32 32 0 1 0 45.12 45.12l169.6-169.28 169.28 169.28a32 32 0 0 0 45.12-45.12L557.12 512l169.28-169.28a32 32 0 0 0 0.32-45.44z"
                                    fill="#231815" />
                            </g>
                        </svg>
                    </a>
                    </div>
                </div>
            @endforeach
            <div class="w-full flex justify-center mt-4">
                <a href="{{ route('customer.table.order', $tableid) }}" class="px-5 py-3 bg-darkgreen text-lightcream rounded-xl">สั่งเลย !!</a>
            </div>
        @else
            <div class="flex justify-center pt-8 text-[20px] font-medium tablet:text-[24px] text-darkgreen">
                <p>ไม่มีรายการอาหารที่คุณเลือกไว้</p>
            </div>
        @endif  
    </div>
@endsection
