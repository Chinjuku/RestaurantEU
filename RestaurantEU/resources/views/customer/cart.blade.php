@extends('layouts.customer')
@section('bg', 'cream')
@section('name_nav', 'ตระกร้า')
@section('back')
    <div>
        <a href="{{route('customer.table', $tableid)}}" class="cursor-pointer text-white scale-[1.2]">
            back
        </a>
    </div>
@endsection
@section('content')
    <div class="h-max-full px-[30px] py-[30px] bg-cream w-full flex flex-col gap-5 tablet:text-[24px] tablet:gap-7">
        @if ($orders != null)
            @foreach ($orders as $key => $order)
                <div class="bg-lightcream flex justify-between px-5 py-5 border-2 border-black rounded-2xl">
                    <input class="bg-transparent border-none" type="hidden" value="{{ $order['menu_ID'] }}">
                    <div>
                        <input class="bg-transparent border-none" type="hidden" value="{{ $order['menu_Name'] }}" readonly>
                        <p>{{ $order['menu_Name'] }}</p>
                        {{-- <p>{{ $tableid }}</p> --}}
                    </div>
                    @livewire('customer.count-cart-menu', [ 
                        'count' => $order['count'], 
                        'price' => $order['prices'], 
                        'key' => $key,
                        'tableid' => $tableid,
                    ])
                    <div>
                        <a href="{{ route('customer.table.clearcart', ['id' => $tableid, 'key' => $key]) }}">
                            ยกเลิก
                        </a>
                    </div>
                </div>
            @endforeach
            <div class="w-full flex justify-center mt-4">
                <button class="px-5 py-3 bg-darkgreen text-lightcream rounded-xl">สั่งออเดอร์</button>
            </div>
        @else
        <div class="flex justify-center pt-8 text-[20px] font-medium">
            <p>ไม่มีรายการอาหารที่คุณเลือกไว้</p>
        </div>
        @endif
        
        
    </div>
@endsection
