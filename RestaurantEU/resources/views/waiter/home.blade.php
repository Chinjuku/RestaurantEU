@extends('layouts.app')
@section('title', 'Chef')

@section('content')
<div class="container d-flex justify-content-center">
    <div class="">
        @livewire('reservation-list' , ['lazy' => true])
    </div>
</div>
@endsection
