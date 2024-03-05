@extends('layouts.app')
@section('title', 'Waiter')
@section('page_name', 'หน้าเสิร์ฟอาหาร')

@section('content')
    @livewire('waiter.serving-list' , ['lazy' => true])
@endsection
