@extends('layouts.app')
@section('title', 'Manager')
@section('page_name', 'จัดการพนักงาน')
@section('content')
<div class="h-screen bg-cream py-[95px]">
    @if (session('success'))
    <div id="successMessage" class="p-5 mb-4 text-xl my-[-70px] text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 mx-[120px] dark:text-green-400" role="alert">
        <span class="font-medium">{{ session('success') }}</span>
    </div>
    @endif
    <div class="bg-lightcream h-[900px] mx-[110px] rounded-t-[100px] px-[90px] py-[20px]">
        @livewire('employee-list', ['lazy' => true])
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
