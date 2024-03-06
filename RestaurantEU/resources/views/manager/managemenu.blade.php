@extends('layouts.app')
@section('title', 'Manager')
@section('page_name', 'จัดการเมนู')
@section('content')
<div class="h-screen bg-cream pt-[95px]">
    <div class="bg-lightcream h-[956px] mx-[110px] rounded-t-[100px] px-[90px] pt-[20px]">
        @livewire('menu-list', ['lazy' => true])
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var successMessage = document.getElementById('successMessage');
            if (successMessage) {
                setTimeout(function() {
                    successMessage.style.display = 'none';
                }, 5000);
            }
        });
    </script>
</div>
@endsection
