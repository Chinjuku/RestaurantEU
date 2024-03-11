@extends('layouts.app')
@section('title', 'Employee')
@section('page_name', 'หน้าแสดงจองโต๊ะ')
@section('content')
<div class="h-screen bg-lightcream pc:py-[95px] py-[60px]">
    <div class="bg-darkgreen text-white h-[88%] mx-[110px] rounded-[80px] px-[7%] laptop:px-[5%] laptop:h-[93%] pt-[20px]">
        <h1 class="text-white text-center text-4xl font-bold mb-3">จองคิว</h1>
        @livewire('reservation-list', ['lazy' => true])
    </div>
</div>
@endsection