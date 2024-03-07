@extends('layouts.app')
@section('page_name', 'cashier')
@section('content')
    @livewire('cashier.bill-list' , ['lazy' => true])
@endsection