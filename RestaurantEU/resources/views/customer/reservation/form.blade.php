
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
<body class="bg-lightcream grid grid-cols-2">
    <div class="mt-5 text-3xl">
        <h2>ติดต่อ : </h2>
        <div class="">
            <i class='bx bx-envelope'></i><p>email@xxx.com</p>
        </div>
        <i class='bx bx-phone'></i><p>xxx-xxx-xxx</p>
    </div>
    <div class="mt-5 bg-darkgreen rounded-3xl px-30 py-32">
        <div>
            <h2 class="text-[32px] text-lightcream font-bold text-center">จองโต๊ะอาหาร</h2>
        </div>
        <div class="">
            <form action="/customer/reserving" method="POST" class="">
                @csrf
                <div class="mx-auto w-4/5 flex flex-col px-5 py-3">
                    <label class="text-lightcream text-[20px]">ชื่อ</label>
                    <input type="text" name="name" placeholder="ชื่อ" value="{{ old('name') }}" class="text-white bg-transparent border-b-2 border-yellow-50">
                    @error('name')
                        <span class="text-red-600" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class=" mx-auto w-4/5 flex flex-col px-5 py-3">
                    <label class="text-lightcream text-[24px]">เบอร์โทรศัพท์</label>
                    <input type="text" name="phone_num" placeholder="เบอร์โทรศัพท์" value="{{ old('phone_num') }}" class="text-white bg-transparent border-b-4 border-yellow-50">
                    @error('phone_num')
                        <span class="text-red-600" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mx-auto w-4/5 flex flex-col px-5 py-3">
                    <label class="text-lightcream text-[24px]">เวลา</label>
                    <input type="time" name="time" value="{{ old('time') }}" class="text-white bg-transparent border border-b border-yellow-50">
                    @error('time')
                        <span class="text-red-600" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mx-auto w-4/5 flex flex-col px-5 py-3">
                    <label class="text-lightcream text-[24px]">จำนวน</label>
                    <input type="text" name="people_num" placeholder="จำนวน" value="{{ old('phone_num') }}" class="text-white bg-transparent border border-b border-yellow-50">
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
