
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
<body class="bg-lightcream grid grid-cols-2 ">
    <div class="my-24 mx-24 text-3xl flex justify-between flex-col">
        <div class="">
            <h2 class="mb-4">ติดต่อ : </h2>
            <div class="inline-flex gap-2 hover:underline duration-200">
                <i class='bx bx-envelope'></i><p>email@xxx.com</p>
            </div><br>
            <div class="inline-flex gap-2 hover:underline duration-200">
                <i class='bx bx-phone'></i>
                <p>xxx-xxx-xxx</p>
            </div>
        </div>
        <div class="">
            <i class='bx bxl-instagram' class="text-darkgreen"></i>
            <i class='bx bxl-facebook-circle' class="text-darkgreen"></i>
        </div>
    </div>
    <div class="mt-5 bg-darkgreen rounded-3xl px-30 py-32">
        <div>
            <h2 class="text-[32px] text-lightcream font-bold text-center">จองโต๊ะอาหาร</h2>
        </div>
        <div class="">
            <form action="/customer/reserving" method="POST">
                @csrf
                <div class="mx-auto w-4/5 flex flex-col px-5 py-3">
                    <label class="text-lightcream text-[24px]">ชื่อ</label>
                    <input type="text" name="name" placeholder="ชื่อ" value="{{ old('name') }}" class="text-white bg-transparent bg-transparent border-0 border-b-2 border-yellow-50">
                    @error('name')
                        <span class="text-red-600" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class=" mx-auto w-4/5 flex flex-col px-5 py-3">
                    <label class="text-lightcream text-[24px]">เบอร์โทรศัพท์</label>
                    <input type="text" name="phone_num" placeholder="เบอร์โทรศัพท์" value="{{ old('phone_num') }}" class="text-white bg-transparent border-0 border-b-2 border-yellow-50">
                    @error('phone_num')
                        <span class="text-red-600" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mx-auto w-4/5 flex flex-col px-5 py-3">
                    <label class="text-lightcream text-[24px]">เวลา</label>
                    <input type="time" name="time" value="{{ old('time') }}" class="text-white bg-transparent border-0 border-b-2 border-yellow-50 peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0">
                    @error('time')
                        <span class="text-red-600" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mx-auto w-4/5 flex flex-col px-5 py-3">
                    <label class="text-lightcream text-[24px]">จำนวน</label>
                    <input type="text" name="people_num" placeholder="จำนวน" value="{{ old('phone_num') }}" class="text-white bg-transparent border-0 border-b-2 border-yellow-50">
                    @error('people_num')
                        <span class="text-red-600" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            
                <button type="submit" class="mx-auto mt-3 flex items-center justify-end px-5 py-3 text-[24px] bg-lightcream" >ยืนยันการจอง</button>
            </form>
        </div>
    </div>
</body>
</html>
