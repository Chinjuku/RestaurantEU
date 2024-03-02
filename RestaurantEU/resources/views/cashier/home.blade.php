@extends('layouts.app')
@section('page_name', 'cashier')
@section('content')
<div class="flex">
    <!-- @livewire('reservation-list' , ['lazy' => true]) -->
    <!-- left -->
    <div class="bg-[#E9DDCD] w-1/2">
        <div class="h-screen">
            <div class="grid grid-cols-3 grid-rows-5 h-[86%] m-[4%] gap-10">
                <div class="bg-[#FFF9F1] text-center text-6xl border-black border-2 leading-[2.2em]">โต๊ะที่1 </div>
                <div class="bg-[#FFF9F1] text-center text-6xl border-black border-2 leading-[2.2em]">โต๊ะที่1 </div>
                <div class="bg-[#FFF9F1] text-center text-6xl border-black border-2 leading-[2.2em]">โต๊ะที่1 </div>
                <div class="bg-[#FFF9F1] text-center text-6xl border-black border-2 leading-[2.2em]">โต๊ะที่1 </div>
                <div class="bg-[#FFF9F1] text-center text-6xl border-black border-2 leading-[2.2em]">โต๊ะที่1 </div>
                <div class="bg-[#FFF9F1] text-center text-6xl border-black border-2 leading-[2.2em]">โต๊ะที่1 </div>
                <div class="bg-[#FFF9F1] text-center text-6xl border-black border-2 leading-[2.2em]">โต๊ะที่1 </div>
                <div class="bg-[#FFF9F1] text-center text-6xl border-black border-2 leading-[2.2em]">โต๊ะที่1 </div>
                <div class="bg-[#FFF9F1] text-center text-6xl border-black border-2 leading-[2.2em]">โต๊ะที่1 </div>
                <div class="bg-[#FFF9F1] text-center text-6xl border-black border-2 leading-[2.2em]">โต๊ะที่1 </div>
                <div class="bg-[#FFF9F1] text-center text-6xl border-black border-2 leading-[2.2em]">โต๊ะที่1 </div>
                <div class="bg-[#FFF9F1] text-center text-6xl border-black border-2 leading-[2.2em]">โต๊ะที่1 </div>
                <div class="bg-[#FFF9F1] text-center text-6xl border-black border-2 leading-[2.2em]">โต๊ะที่1 </div>
                <div class="bg-[#FFF9F1] text-center text-6xl border-black border-2 leading-[2.2em]">โต๊ะที่1 </div>
                <div class="bg-[#FFF9F1] text-center text-6xl border-black border-2 leading-[2.2em]">โต๊ะที่1 </div>
            </div>
        </div>
    </div>
    <!-- right -->
    <div class=" w-1/2">

        <!-- bill -->
        <div class="block w-3/5 bg-white mx-auto h-4/6 mt-[7%] p-[4%] border-2 border-black">
            <div class=" text-center text-6xl ">โต๊ะที่1</div>
            <div class="flex justify-between  mt-[4%] text-lg">
                <div>รหัสรายการคำสั่ง</div>
                <div>เวลา 20.00 น.</div>
            </div>

            <hr class="border-black">
            <!-- รายการ -->
            <div class=" overflow-scroll max-h-[70%] min-h-[70%] my-[2%]">
                <div class="flex justify-between px-[15%] text-xl ">
                    <div>x1 รายการที่ 1</div>
                    <div>200</div>
                </div>
                <div class="flex justify-between  px-[15%] text-xl">
                    <div>x1 รายการที่ 1</div>
                    <div>200</div>
                </div>
                <div class="flex justify-between  px-[15%] text-xl">
                    <div>x1 รายการที่ 1</div>
                    <div>200</div>
                </div>
                <div class="flex justify-between  px-[15%] text-xl">
                    <div>x1 รายการที่ 1</div>
                    <div>200</div>
                </div>
                <div class="flex justify-between  px-[15%] text-xl">
                    <div>x1 รายการที่ 1</div>
                    <div>200</div>
                </div>
                <div class="flex justify-between  px-[15%] text-xl">
                    <div>x1 รายการที่ 1</div>
                    <div>200</div>
                </div>
                <div class="flex justify-between  px-[15%] text-xl">
                    <div>x1 รายการที่ 1</div>
                    <div>200</div>
                </div>
                <div class="flex justify-between  px-[15%] text-xl">
                    <div>x1 รายการที่ 1</div>
                    <div>200</div>
                </div>
                <div class="flex justify-between  px-[15%] text-xl">
                    <div>x1 รายการที่ 1</div>
                    <div>200</div>
                </div>
                <div class="flex justify-between  px-[15%] text-xl">
                    <div>x1 รายการที่ 1</div>
                    <div>200</div>
                </div>
                <div class="flex justify-between  px-[15%] text-xl">
                    <div>x1 รายการที่ 1</div>
                    <div>200</div>
                </div>
                <div class="flex justify-between  px-[15%] text-xl">
                    <div>x1 รายการที่ 1</div>
                    <div>200</div>
                </div>
                <div class="flex justify-between  px-[15%] text-xl">
                    <div>x1 รายการที่ 1</div>
                    <div>200</div>
                </div>
                <div class="flex justify-between  px-[15%] text-xl">
                    <div>x1 รายการที่ 1</div>
                    <div>200</div>
                </div>
                <div class="flex justify-between  px-[15%] text-xl">
                    <div>x1 รายการที่ 1</div>
                    <div>200</div>
                </div>
                <div class="flex justify-between  px-[15%] text-xl">
                    <div>x1 รายการที่ 1</div>
                    <div>200</div>
                </div>
                <div class="flex justify-between  px-[15%] text-xl">
                    <div>x1 รายการที่ 1</div>
                    <div>200</div>
                </div>
                <div class="flex justify-between  px-[15%] text-xl">
                    <div>x1 รายการที่ 1</div>
                    <div>200</div>
                </div>
    <hr class="border-black">
            </div>
            <!-- ยอดรวมจ้า -->
            <div class="flex justify-between bottom-0 py-[4%]">
                <div class="text-2xl ">ยอดรวมทั้งหมด</div>
                <div class="text-2xl">12302993.00 บาท</div>
            </div>

        </div>
        <button class="flex bg-[#0D4F4E] mx-auto p-[4%] text-4xl  mt-[4%] text-white">ยืนยันการชำระเงิน</button>
    </div>

</div>
@endsection