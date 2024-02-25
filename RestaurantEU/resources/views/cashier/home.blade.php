@extends('layouts.app')

@section('content')
<div class="container">
    @livewire('reservation-list' , ['lazy' => true])
</div>
@endsection
