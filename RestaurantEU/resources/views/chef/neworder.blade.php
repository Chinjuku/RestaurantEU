@extends('layouts.app')
@section('title', 'Chef')
@section('page_name', 'ครัว')

@section('content')
    @livewire('chef.cooking-list', ['lazy' => true])
@endsection
