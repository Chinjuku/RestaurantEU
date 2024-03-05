@extends('layouts.app')
@section('title', 'Chef')
@section('page_name', 'ครัว')

@section('content')
    @livewire('chef.cooked-list', ['lazy' => true])
@endsection
