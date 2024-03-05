@extends('layouts.customer')
@section('bg', 'lgreen')
@section('name_nav', 'รายการอาหาร')
@section('cart')
    <div>
        <a href="{{route('customer.table.cart', $tableid)}}" class="cursor-pointer scale-[1.2]">
            <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 24 24" class="text-darkgreen bg-white p-1 rounded-lg pr-[5px]" style="transform: ;msFilter:;"><path d="M21.822 7.431A1 1 0 0 0 21 7H7.333L6.179 4.23A1.994 1.994 0 0 0 4.333 3H2v2h2.333l4.744 11.385A1 1 0 0 0 10 17h8c.417 0 .79-.259.937-.648l3-8a1 1 0 0 0-.115-.921zM17.307 15h-6.64l-2.5-6h11.39l-2.25 6z"></path><circle cx="10.5" cy="19.5" r="1.5"></circle><circle cx="17.5" cy="19.5" r="1.5"></circle></svg>
        </a>
    </div>
@endsection
@section('content')
    <div class="h-full bg-lgreen">
        {{-- @if (session('success'))
            <div id="successMessage" class="p-5 mb-4 text-xl tablet:text-2xl my-[-70px] text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 mx-[120px] dark:text-green-400" role="alert">
                <span class="font-medium">{{ session('success') }}</span>
            </div>
        @endif --}}
        @livewire('customer.ordermenu', ['lazy' => true])
    </div>
    
@endsection