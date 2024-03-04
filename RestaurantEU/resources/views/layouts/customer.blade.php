<!DOCTYPE html>
<html lang="en" class="scroll-smooth scroll-pt-[-200px]">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/output.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <title>Document</title>
</head>
<body class="bg-cream">
    <nav class="bg-darkgreen h-[80px] w-full fixed flex items-center justify-center z-[100]">
        <h1 class="text-[28px] font-bold text-lightcream">@yield('name_nav')</h1>
        <div class="absolute right-10">@yield('cart')</div>
        <div class="absolute left-10">@yield('back')</div>
    </nav>
    <div class="pt-[80px]">
        @yield('content')
    </div>
</body>
</html>