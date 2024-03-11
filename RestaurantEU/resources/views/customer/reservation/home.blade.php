<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Go Reservation</title>
    <link rel="stylesheet" href="{{ asset('css/output.css') }}">
</head>
<body class="bg-darkgreen flex justify-center items-center flex-col h-screen">
    <div class="text-lg font-bold text-lightcream">
        <h2 class="text-center text-[64px] phone:text-[32px]">Besoin Restaurant</h2><br>
    </div>
        <a href="{{route('reservation.form')}}" class="text-[32px] tracking-wide bg-darkgreen text-lightcream border border-yellow-50 rounded-3xl px-24 mt-2.5 hover:text-darkgreen hover:bg-lightcream hover:transition duration-700 ease-in-out phone:text-[24px]">จองโต๊ะ</a>
</body>
</html>
