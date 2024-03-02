<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/output.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <title>Document</title>
</head>
<body>
    <nav class="bg-darkgreen h-[80px] w-full fixed flex items-center justify-center z-[100]">
        <h1 class="text-[28px] font-bold text-lightcream">@yield('name_nav')</h1>
        <div class="absolute right-10">@yield('cart')</div>
    </nav>
    <div class="pt-[80px] bg-lgreen ">
        @yield('content')
    </div>
    
</body>
</html>