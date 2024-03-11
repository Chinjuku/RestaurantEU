<div class="flex pc:">
    <!-- left -->
    <div class="bg-[#E9DDCD] w-1/2">
        <div class="h-screen">
            <div class="grid grid-cols-3 grid-rows-5 h-[86%] m-[4%] gap-10">
                @foreach ($bills as $key => $item)
                    <button wire:click="showBill({{ $item->bill_id }})"
                        class="flex bg-[#FFF9F1] hover:bg-darkgreen hover:text-lightcream focus:bg-lgreen focus:text-white duration-150 text-center text-6xl border-black border-2 justify-center items-center laptop:text-5xl">โต๊ะที่
                        {{ $item->table_id }} </button>
                @endforeach
            </div>
        </div>
    </div>
    <!-- right -->
    <div class=" w-1/2 h-screen">
        <!-- bill -->
        @if ($open == true)
            <div class="relative block w-3/5 bg-white mx-auto h-4/6 mt-[7%] p-[4%] border-2 border-black ">
                <p class="absolute top-1 right-1">ใบเสร็จที่ # {{ $bill_id }}</p>
                <div class=" text-center text-6xl laptop:text-5xl">โต๊ะที่ {{ $table_id }}</div>
                <div class="flex justify-between  mt-[4%] text-lg">

                    <div class="flex justify-between laptop:block">
                        <div class="text-left">รหัสรายการคำสั่ง</div>
                        <div class="text-left"> #{{ $order_id }}</div>
                    </div>

                    <div class="flex justify-between laptop:block">
                        <div class="text-right mx-1">เวลา</div>
                        <div class="text-right"> {{ $order_time }} น.</div>
                    </div>

                </div>

                <hr class="border-black">
                <!-- รายการ -->
                <div class="overflow-y-scroll h-[55%] laptop:h-[45%] my-[2%] ">
                    @foreach ($showbill as $index => $item)
                        <div class="flex px-[7%] laptop:px-[5%] text-2xl py-[2.5%]">
                            <div class="w-[50%]">{{ $item->menu_name }}</div>
                            <div class="w-[25%]">x{{ $item->quantity }} </div>
                            <div class="w-[25%] text-right">{{ $item->price * $item->quantity }} บาท</div>
                        </div>
                    @endforeach
                </div>

                <!-- ยอดรวมจ้า -->
                <div class="absolute bottom-[15px] w-[87%]">
                    <hr class="border-black">
                    <div class="flex justify-between py-[2%]">
                        <div class="text-2xl ">ยอดรวม</div>
                        <div class="text-2xl text-right">{{ $allprice }} บาท</div>
                    </div>
                    <div class="flex justify-between py-[1%]">
                        <div class="text-2xl ">ภาษี</div>
                        <div class="text-2xl text-right">7 %</div>
                    </div>
                    <div class="flex justify-between py-[1%]">
                        <div class="text-2xl ">ค่าบริการ</div>
                        <div class="text-2xl text-right">10 %</div>
                    </div>
                    <div class="flex justify-between py-[1%]">
                        <div class="text-2xl ">ยอดรวมทั้งหมด</div>
                        <div class="text-2xl text-right">{{ $totalprice }} บาท</div>
                    </div>
                </div>
            </div>
            <button 
                wire:click="setPaid({{ $bill_id }})"
                wire:confirm="ยืนยันการจ่ายเงิน";
                class="flex bg-[#0D4F4E] mx-auto p-[4%] text-4xl scale-[0.75] mt-[4%] hover:bg-green-900 hover:font-bold duration-150 text-white">ยืนยันการชำระเงิน
            </button>
            
        @else
            <div class="w-full h-full flex justify-center items-center">
                <h1 class="text-3xl laptop:text-2xl font-bold">คลิกที่โต๊ะเพื่อแสดงใบเสร็จ</h1>
            </div>
        @endif
    </div>
