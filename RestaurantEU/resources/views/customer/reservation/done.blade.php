<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/output.css') }}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body class="bg-lightcream flex justify-center items-center flex-col -">
    <div class="flex justify-center items-center h-screen flex-col">
        <div class="bg-darkgreen px-20 py-10 text-center border rounded-3xl flex justify-center items-center flex-col absolute">
            <h2 class="text-lightcream text-[32px] mb-5 phone:text-[18px]">การจองโต๊ะสำเร็จ</h2>
            <a href="{{route('reservation.home')}}" class="bg-lightcream px-5 py-2 hover:bg-darkgreen hover:text-lightcream hover:transition duration-300 ease-in-out"><button type="submit">กลับสู่หน้าหลัก</button></a>
        </div>
        <div class="mt-[95%]">
            <div class="flex justify-center items-center flex-row gap-6 text-darkgreen phone:gap-3">
            <svg width="30" height="30" viewBox="0 0 40 40" fill="0d4f4e" xmlns="http://www.w3.org/2000/svg" class="">
                <g clip-path="url(#clip0_83_485)">
                <path d="M30.9833 0H9.01667C4.03667 0 0 4.03667 0 9.01667V30.9833C0 35.9633 4.03667 40 9.01667 40H30.9833C35.9633 40 40 35.9633 40 30.9833V9.01667C40 4.03667 35.9617 0 30.9833 0ZM30.4733 24.775C27.675 27.995 21.42 31.9183 19.9967 32.5183C18.5733 33.1183 18.7833 32.1367 18.8417 31.7983C18.8767 31.5983 19.0317 30.6567 19.0317 30.6567C19.0767 30.3167 19.1233 29.7883 18.9883 29.4517C18.8383 29.08 18.2483 28.8883 17.8133 28.7933C11.405 27.9467 6.66 23.4667 6.66 18.1167C6.66 12.15 12.6433 7.29333 19.9967 7.29333C27.35 7.29333 33.3333 12.1483 33.3333 18.1167C33.3317 20.5033 32.4067 22.655 30.4733 24.775Z" fill="#0D4F4E"/>
                <path d="M26.35 16.6864V17.6681H28.8966C29.0366 17.6681 29.1516 17.7831 29.1516 17.9231V18.8698C29.1516 19.0098 29.0383 19.1248 28.8966 19.1248H26.35V20.1064H28.8966C29.0366 20.1064 29.1516 20.2214 29.1516 20.3614V21.3081C29.1516 21.4481 29.0383 21.5614 28.8966 21.5614H25.15C25.01 21.5614 24.895 21.4481 24.895 21.3081V15.4864C24.895 15.3464 25.0083 15.2314 25.15 15.2314H28.8966C29.0366 15.2314 29.1516 15.3448 29.1516 15.4864V16.4314C29.1516 16.5714 29.0383 16.6864 28.8966 16.6864H26.35Z" fill="#0D4F4E"/>
                <path d="M15.29 20.3614V21.3081C15.29 21.4481 15.1766 21.5614 15.035 21.5614H11.2883C11.1483 21.5614 11.035 21.4481 11.035 21.3081V15.4864C11.035 15.3464 11.1483 15.2314 11.2883 15.2314H12.235C12.375 15.2314 12.49 15.3448 12.49 15.4864V20.1064H15.0366C15.1766 20.1064 15.29 20.2214 15.29 20.3614Z" fill="#0D4F4E"/>
                <path d="M17.5466 15.4864V21.3064C17.5466 21.4464 17.4333 21.5598 17.2916 21.5598H16.3466C16.2066 21.5598 16.0916 21.4464 16.0916 21.3064V15.4864C16.0916 15.3464 16.2049 15.2314 16.3466 15.2314H17.2916C17.4316 15.2314 17.5466 15.3464 17.5466 15.4864Z" fill="#0D4F4E"/>
                <path d="M23.985 15.4864V21.3064C23.985 21.4464 23.8716 21.5598 23.73 21.5598H22.79C22.7066 21.5598 22.625 21.5181 22.5766 21.4498L19.91 17.8498V21.3064C19.91 21.4464 19.7966 21.5598 19.655 21.5598H18.7083C18.5683 21.5598 18.4533 21.4464 18.4533 21.3064V15.4864C18.4533 15.3464 18.5666 15.2314 18.7083 15.2314H19.6483C19.7366 15.2314 19.8133 15.2781 19.865 15.3464L22.5283 18.9431V15.4864C22.5283 15.3464 22.6416 15.2314 22.7833 15.2314H23.73C23.8716 15.2314 23.985 15.3464 23.985 15.4864Z" fill="#0D4F4E"/>
                </g>
                <defs>
                <clipPath id="clip0_83_485">
                <rect width="40" height="40" fill="white"/>
                </clipPath>
                </defs>
            </svg>
                <i class='bx bxl-facebook-circle bx-md' style='color:#0d4f4e' class="mx-6 phone:mx-3"></i>
                <span class="flex justify-center items-center flex-row gap-5 phone:gap-1">
                    <i class='bx bx-envelope bx-md phone:bx-xs' style='color:#0d4f4e'></i>
                    <h5 class="text-[24px] phone:text-[12px]">email@xxxx.com</h5>
                </span>
                <span class="flex justify-center items-center flex-row gap-5 phone:gap-1">
                    <i class='bx bx-phone-call bx-md phone:bx-xs' style='color:#0d4f4e'></i>
                    <h5 class="text-[24px] phone:text-[12px]">xxx-xxx-xxxx</h5>
                </span>
                
            </div>
        </div>
    </div>
    
    
</body>
</html>
