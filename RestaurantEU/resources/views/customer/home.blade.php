@extends('layouts.customer')
@section('name_nav', 'รายการอาหาร')
@section('cart')
    <div>
        
    </div>
@endsection
@section('content')
    <div class="h-full">
        @livewire('customer.ordermenu', ['lazy' => true])
    </div>
@endsection