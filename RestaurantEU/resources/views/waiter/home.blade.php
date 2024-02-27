@extends('layouts.app')
@section('title', 'Chef')

@section('content')
<div class="flex justify-center h-screen">
    <div class="">
        @livewire('reservation-list' , ['lazy' => true])
    </div>
</div>
@endsection
