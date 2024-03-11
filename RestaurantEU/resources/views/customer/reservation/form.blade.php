
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/output.css') }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Document</title>
</head>
<body class="bg-lightcream h-screen grid grid-cols-2 pb-5 phone:grid phone:grid-cols-1 phone:w-[100%]">
    <div class="my-24 mx-24 text-3xl flex justify-between flex-col phone:text-xl phone:flex phone:justify-start phone:flex-cols tablet:text-2xl">
        <div class="phone:inline-block">
            <h2 class="mb-4">ติดต่อ : </h2>
            <div class="inline-flex gap-2 hover:underline duration-200">
                <i class='bx bx-envelope'></i><p>email@xxx.com</p>
            </div><br>
            <div class="inline-flex gap-2 hover:underline duration-200">
                <i class='bx bx-phone'></i>
                <p>xxx-xxx-xxx</p>
            </div>
        </div>
        <div class="phone:inline-block">
            <i class='bx bxl-instagram' class="text-darkgreen"></i>
            <i class='bx bxl-facebook-circle' class="text-darkgreen"></i>
        </div>
    </div>
    <div class="mt-5 bg-darkgreen rounded-3xl px-30 py-32 phone:text-[16px] phone:mt-0 phone:px-10 phone:py-12
    phone:">
        <div>
            <h2 class="text-[48px] text-lightcream font-bold text-center phone:text-[20px] tablet:text-2xl">จองโต๊ะอาหาร</h2>
        </div>
        <div class="">
            <form action="/customer/reserving" method="POST">
                @csrf
                <div class="mx-auto w-4/5 flex flex-col px-5 py-3 phone:w-full">
                    <label class="text-lightcream text-[24px] phone:text-[16px] tablet:text-l">ชื่อ</label>
                    <input type="text" name="name" placeholder="ชื่อ" value="{{ old('name') }}" class="text-white outline-none bg-transparent border-0 border-b-2 border-yellow-50">
                    @error('name')
                        <span class="text-red-600 mt-3" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class=" mx-auto w-4/5 flex flex-col px-5 py-3 phone:w-full">
                    <label class="text-lightcream text-[24px] phone:text-[16px] tablet:text-l">เบอร์โทรศัพท์</label>
                    <input type="text" name="phone_num" placeholder="เบอร์โทรศัพท์" value="{{ old('phone_num') }}" class="text-white outline-none bg-transparent border-0 border-b-2 border-yellow-50">
                    @error('phone_num')
                        <span class="text-red-600 mt-3" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mx-auto w-4/5 flex flex-col px-5 py-3 phone:w-full">
                    <label class="text-lightcream text-[24px] phone:text-[16px] tablet:text-l">เวลา</label>
                    <input type="time" name="time" value="{{ old('time') }}" class="text-white border-b-2 border-yellow-50 peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0">
                    @error('time')
                        <span class="text-red-600 mt-3" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mx-auto w-4/5 flex flex-col px-5 py-3 phone:w-full">
                    <label class="text-lightcream text-[24px] phone:text-[16px] tablet:text-l">จำนวนคน</label>
                    <input type="text" name="people_num" placeholder="จำนวน" value="{{ old('phone_num') }}" class="text-white outline-none bg-transparent border-0 border-b-2 border-yellow-50">
                    @error('people_num')
                        <span class="text-red-600 mt-3" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                
            
                <button type="submit" class="mx-auto mt-3 flex items-center justify-end px-5 py-3 text-[24px] bg-lightcream hover:bg-darkgreen hover:text-lightcream hover:transition duration-400 ease-out tablet:text-l" >ยืนยันการจอง</button>
            </form>
        </div>
    </div>
</body>
</html>
