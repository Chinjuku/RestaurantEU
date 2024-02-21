<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>
    {{-- <nav>
        <li>1</li>
        <li>2</li>
        <li>3</li>
    </nav> --}}
    <div class="flex justify-center items-center h-screen">
        @yield('content1')
    </div>
</body>
</html>