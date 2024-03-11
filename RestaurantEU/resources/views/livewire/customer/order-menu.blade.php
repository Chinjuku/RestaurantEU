<div class="tablet:pt-[120px]">
    <nav
        class="navbar phone:px-[30px] tablet:px-[70px] tablet:h-[100px] w-full h-[60px] flex items-center top-[80px] tablet:pt-[20px] fixed bg-lgreen z-50">
        <div class="crop font-bold bg-white rounded-3xl items-center flex text-darkgreen w-full">
            <a href="#playeat"
                class="z-10 phone:py-[10px] tablet:py-[20px] tablet:text-[24px] phone:px-[5px] phone:text-[14px] rounded-l-3xl text-center w-1/3">
                <p class="z-11">อาหารทานเล่น</p>
            </a>
            <a href="#main"
                class="z-10 phone:py-[10px] tablet:py-[20px] tablet:text-[24px] phone:px-[5px] phone:text-[14px] text-center w-1/3">
                <p class="z-11">อาหารจานหลัก</p>
            </a>
            <a href="#drink"
                class="z-10 phone:py-[10px] tablet:py-[20px] tablet:text-[24px] phone:px-[5px] phone:text-[14px] rounded-r-3xl text-center w-1/3">
                <p class="z-11">เครื่องดื่ม/อื่นๆ</p>
            </a>
            {{-- <div id="marker" class="z-9 phone:py-[15px] rounded-3xl phone:px-[5px] border-b top-[15px] left-[35px] absolute bg-darkgreen w-[27%] duration-300 transition-all"></div> --}}
        </div>
    </nav>
    <div id="playeat" class="mb-4 mt-[58px] phone:pt-[10px] scroll-mt-[200px] tablet:px-[80px]">
        <div
            class="w-[130px] h-[38px] tablet:w-[180px] tablet:h-[62px] tablet:text-[24px] phone:mb-4 phone:mx-[40px] tablet:mb-7 text-[18px] tablet:p-[10px] drop-shadow-lg bg-white border flex justify-center items-center border-black">
            <p class="font-bold">อาหารทานเล่น</p>
        </div>
        <div class="grid phone:grid-cols-2 largephone:grid-cols-2 tablet:grid-cols-3 phone:gap-[17.5px] gap-7 phone:px-[40px]">
            @foreach ($menus as $item)
                @if ($item->category_id == 1)
                    <button wire:click="toggleModal2({{ $item->menu_id }})"
                        class="bg-white w-full phone:h-[227px] tablet:h-[340px] tablet:p-[14px] tablet:gap-5 rounded-2xl phone:p-[10px] phone:gap-3 flex flex-col items-center ">
                        <img class="phone:h-[130px] phone:w-[133px] tablet:w-[225px] object-cover tablet:h-[180px]  bg-cover rounded-lg"
                            src="{{ $item->menu_img }}" alt="">
                        <div class="phone:w-[24px] h-[5px] tablet:w-[32px] tablet:h-[10px] rounded-xl bg-darkgreen">
                        </div>
                        <div class="text-center">
                            <h3 class="text-[16px] tablet:text-[22px] font-bold">{{ $item->menu_name }}</h3>
                            <h5 class="text-[14px] tablet:text-[18px]">{{ $item->price }} บาท</h5>
                        </div>
                    </button>
                @endif
            @endforeach
        </div>
    </div>
    <div id="main" class="mb-4 scroll-mt-[200px] tablet:px-[80px]">
        <div
            class="w-[130px] h-[38px] tablet:w-[180px] tablet:h-[62px] tablet:text-[24px] phone:mb-4 phone:mx-[40px] tablet:mb-7 text-[18px] tablet:p-[10px] drop-shadow-lg bg-white border flex justify-center items-center border-black">
            <p class="font-bold">เมนูเส้น</p>
        </div>
        <div class="grid phone:grid-cols-2 largephone:grid-cols-2 tablet:grid-cols-3 phone:gap-[17.5px] gap-7 phone:px-[40px]">
            @foreach ($menus as $item)
                @if ($item->types == 'เมนูเส้น')
                    <button wire:click="toggleModal2({{ $item->menu_id }})"
                        class="bg-white w-full phone:h-[227px] tablet:h-[340px] tablet:p-[14px] tablet:gap-5 rounded-2xl phone:p-[10px] phone:gap-3 flex flex-col items-center ">
                        <img class="phone:h-[130px] phone:w-[133px] tablet:w-[225px] object-cover tablet:h-[180px]  bg-cover rounded-lg"
                            src="{{ $item->menu_img }}" alt="">
                        <div class="phone:w-[24px] h-[5px] tablet:w-[32px] tablet:h-[10px] rounded-xl bg-darkgreen">
                        </div>
                        <div class="text-center">
                            <h3 class="text-[16px] tablet:text-[22px] font-bold">{{ $item->menu_name }}</h3>
                            <h5 class="text-[14px] tablet:text-[18px]">{{ $item->price }} บาท</h5>
                        </div>
                    </button>
                @endif
            @endforeach
        </div>
    </div>
    <div class="mb-4 tablet:px-[80px]">
        <div
            class="w-[130px] h-[38px] tablet:w-[180px] tablet:h-[62px] tablet:text-[24px] phone:mb-4 phone:mx-[40px] tablet:mb-7 text-[18px] tablet:p-[10px] drop-shadow-lg bg-white border flex justify-center items-center border-black">
            <p class="font-bold">สเต็ก</p>
        </div>
        <div class="grid phone:grid-cols-2 largephone:grid-cols-2 tablet:grid-cols-3 phone:gap-[17.5px] gap-7 phone:px-[40px]">
            @foreach ($menus as $item)
                @if ($item->types == 'สเต็ก')
                    <button wire:click="toggleModal2({{ $item->menu_id }})"
                        class="bg-white w-full phone:h-[227px] tablet:h-[340px] tablet:p-[14px] tablet:gap-5 rounded-2xl phone:p-[10px] phone:gap-3 flex flex-col items-center ">
                        <img class="phone:h-[130px] phone:w-[133px] tablet:w-[225px] object-cover tablet:h-[180px]  bg-cover rounded-lg"
                            src="{{ $item->menu_img }}" alt="">
                        <div class="phone:w-[24px] h-[5px] tablet:w-[32px] tablet:h-[10px] rounded-xl bg-darkgreen">
                        </div>
                        <div class="text-center">
                            <h3 class="text-[16px] tablet:text-[22px] font-bold">{{ $item->menu_name }}</h3>
                            <h5 class="text-[14px] tablet:text-[18px]">{{ $item->price }} บาท</h5>
                        </div>
                    </button>
                @endif
            @endforeach
        </div>
    </div>
    <div class="mb-4 tablet:px-[80px]">
        <div
            class="w-[130px] h-[38px] tablet:w-[180px] tablet:h-[62px] tablet:text-[24px] phone:mb-4 phone:mx-[40px] tablet:mb-7 text-[18px] tablet:p-[10px] drop-shadow-lg bg-white border flex justify-center items-center border-black">
            <p class="font-bold">ข้าว</p>
        </div>
        <div class="grid phone:grid-cols-2 largephone:grid-cols-2 tablet:grid-cols-3 phone:gap-[17.5px] gap-7 phone:px-[40px]">
            @foreach ($menus as $item)
                @if ($item->types == 'ข้าว')
                    <button wire:click="toggleModal2({{ $item->menu_id }})"
                        class="bg-white w-full phone:h-[227px] tablet:h-[340px] tablet:p-[14px] tablet:gap-5 rounded-2xl phone:p-[10px] phone:gap-3 flex flex-col items-center ">
                        <img class="phone:h-[130px] phone:w-[133px] tablet:w-[225px] object-cover tablet:h-[180px]  bg-cover rounded-lg"
                            src="{{ $item->menu_img }}" alt="">
                        <div class="phone:w-[24px] h-[5px] tablet:w-[32px] tablet:h-[10px] rounded-xl bg-darkgreen">
                        </div>
                        <div class="text-center">
                            <h3 class="text-[16px] tablet:text-[22px] font-bold">{{ $item->menu_name }}</h3>
                            <h5 class="text-[14px] tablet:text-[18px]">{{ $item->price }} บาท</h5>
                        </div>
                    </button>
                @endif
            @endforeach
        </div>
    </div><div class="mb-4 tablet:px-[80px]">
        <div
            class="w-[130px] h-[38px] tablet:w-[180px] tablet:h-[62px] tablet:text-[24px] phone:mb-4 phone:mx-[40px] tablet:mb-7 text-[18px] tablet:p-[10px] drop-shadow-lg bg-white border flex justify-center items-center border-black">
            <p class="font-bold">อื่นๆ</p>
        </div>
        <div class="grid phone:grid-cols-2 largephone:grid-cols-2 tablet:grid-cols-3 phone:gap-[17.5px] gap-7 phone:px-[40px]">
            @foreach ($menus as $item)
                @if ($item->types == 'อื่นๆ')
                    <button wire:click="toggleModal2({{ $item->menu_id }})"
                        class="bg-white w-full phone:h-[227px] tablet:h-[340px] tablet:p-[14px] tablet:gap-5 rounded-2xl phone:p-[10px] phone:gap-3 flex flex-col items-center ">
                        <img class="phone:h-[130px] phone:w-[133px] tablet:w-[225px] object-cover tablet:h-[180px]  bg-cover rounded-lg"
                            src="{{ $item->menu_img }}" alt="">
                        <div class="phone:w-[24px] h-[5px] tablet:w-[32px] tablet:h-[10px] rounded-xl bg-darkgreen">
                        </div>
                        <div class="text-center">
                            <h3 class="text-[16px] tablet:text-[22px] font-bold">{{ $item->menu_name }}</h3>
                            <h5 class="text-[14px] tablet:text-[18px]">{{ $item->price }} บาท</h5>
                        </div>
                    </button>
                @endif
            @endforeach
        </div>
    </div>
    <div id="drink" class="mb-4 scroll-mt-[200px] tablet:px-[80px]">
        <div
            class="w-[130px] h-[38px] tablet:w-[180px] tablet:h-[62px] tablet:text-[24px] phone:mb-4 phone:mx-[40px] tablet:mb-7 text-[18px] tablet:p-[10px] drop-shadow-lg bg-white border flex justify-center items-center border-black">
            <p class="font-bold">ของหวาน</p>
        </div>
        <div class="grid phone:grid-cols-2 largephone:grid-cols-2 tablet:grid-cols-3 phone:gap-[17.5px] gap-7 phone:px-[40px]">
            @foreach ($menus as $item)
                @if ($item->types == 'ของหวาน')
                    <button wire:click="toggleModal2({{ $item->menu_id }})"
                        class="bg-white w-full phone:h-[227px] tablet:h-[340px] tablet:p-[14px] tablet:gap-5 rounded-2xl phone:p-[10px] phone:gap-3 flex flex-col items-center ">
                        <img class="phone:h-[130px] phone:w-[133px] tablet:w-[225px] object-cover tablet:h-[180px]  bg-cover rounded-lg"
                            src="{{ $item->menu_img }}" alt="">
                        <div class="phone:w-[24px] h-[5px] tablet:w-[32px] tablet:h-[10px] rounded-xl bg-darkgreen">
                        </div>
                        <div class="text-center">
                            <h3 class="text-[16px] tablet:text-[22px] font-bold">{{ $item->menu_name }}</h3>
                            <h5 class="text-[14px] tablet:text-[18px]">{{ $item->price }} บาท</h5>
                        </div>
                    </button>
                @endif
            @endforeach
        </div>
    </div>
    <div class="mb-4 tablet:px-[80px]">
        <div
            class="w-[130px] h-[38px] tablet:w-[180px] tablet:h-[62px] tablet:text-[24px] phone:mb-4 phone:mx-[40px] tablet:mb-7 text-[18px] tablet:p-[10px] drop-shadow-lg bg-white border flex justify-center items-center border-black">
            <p class="font-bold">กาแฟ/ชา</p>
        </div>
        <div class="grid phone:grid-cols-2 largephone:grid-cols-2 tablet:grid-cols-3 phone:gap-[17.5px] gap-7 phone:px-[40px]">
            @foreach ($menus as $item)
                @if ($item->types == 'กาแฟ/ชา')
                    <button wire:click="toggleModal2({{ $item->menu_id }})"
                        class="bg-white w-full phone:h-[227px] tablet:h-[340px] tablet:p-[14px] tablet:gap-5 rounded-2xl phone:p-[10px] phone:gap-3 flex flex-col items-center ">
                        <img class="phone:h-[130px] phone:w-[133px] tablet:w-[225px] object-cover tablet:h-[180px]  bg-cover rounded-lg"
                            src="{{ $item->menu_img }}" alt="">
                        <div class="phone:w-[24px] h-[5px] tablet:w-[32px] tablet:h-[10px] rounded-xl bg-darkgreen">
                        </div>
                        <div class="text-center">
                            <h3 class="text-[16px] tablet:text-[22px] font-bold">{{ $item->menu_name }}</h3>
                            <h5 class="text-[14px] tablet:text-[18px]">{{ $item->price }} บาท</h5>
                        </div>
                    </button>
                @endif
            @endforeach
        </div>
    </div>
    <div class="mb-4 tablet:px-[80px]">
        <div
            class="w-[130px] h-[38px] tablet:w-[180px] tablet:h-[62px] tablet:text-[24px] phone:mb-4 phone:mx-[40px] tablet:mb-7 text-[18px] tablet:p-[10px] drop-shadow-lg bg-white border flex justify-center items-center border-black">
            <p class="font-bold">ไวน์</p>
        </div>
        <div class="grid phone:grid-cols-2 largephone:grid-cols-2 tablet:grid-cols-3 phone:gap-[17.5px] gap-7 phone:px-[40px]">
            @foreach ($menus as $item)
                @if ($item->types == 'ไวน์')
                    <button wire:click="toggleModal2({{ $item->menu_id }})"
                        class="bg-white w-full phone:h-[227px] tablet:h-[340px] tablet:p-[14px] tablet:gap-5 rounded-2xl phone:p-[10px] phone:gap-3 flex flex-col items-center ">
                        <img class="phone:h-[130px] phone:w-[133px] tablet:w-[225px] object-cover tablet:h-[180px]  bg-cover rounded-lg"
                            src="{{ $item->menu_img }}" alt="">
                        <div class="phone:w-[24px] h-[5px] tablet:w-[32px] tablet:h-[10px] rounded-xl bg-darkgreen">
                        </div>
                        <div class="text-center">
                            <h3 class="text-[16px] tablet:text-[22px] font-bold">{{ $item->menu_name }}</h3>
                            <h5 class="text-[14px] tablet:text-[18px]">{{ $item->price }} บาท</h5>
                        </div>
                    </button>
                @endif
            @endforeach
        </div>
    </div>
    <div class="tablet:px-[80px]">
        <div
            class="w-[130px] h-[38px] tablet:w-[180px] tablet:h-[62px] tablet:text-[24px] phone:mb-4 phone:mx-[40px] tablet:mb-7 text-[18px] tablet:p-[10px] drop-shadow-lg bg-white border flex justify-center items-center border-black">
            <p class="font-bold">อื่นๆ</p>
        </div>
        <div
            class="grid phone:grid-cols-2 largephone:grid-cols-2 tablet:grid-cols-3 phone:gap-[17.5px] gap-7 phone:px-[40px]">
            @foreach ($menus as $item)
                @if ($item->types == 'เครื่องดื่มอื่นๆ')
                    <button wire:click="toggleModal2({{ $item->menu_id }})"
                        class="bg-white w-full phone:h-[227px] tablet:h-[340px] tablet:p-[14px] tablet:gap-5 rounded-2xl phone:p-[10px] phone:gap-3 flex flex-col items-center ">
                        <img class="phone:h-[130px] phone:w-[133px] tablet:w-[225px] object-cover tablet:h-[180px]  bg-cover rounded-lg"
                            src="{{ $item->menu_img }}" alt="">
                        <div class="phone:w-[24px] h-[5px] tablet:w-[32px] tablet:h-[10px] rounded-xl bg-darkgreen">
                        </div>
                        <div class="text-center">
                            <h3 class="text-[16px] tablet:text-[22px] font-bold">{{ $item->menu_name }}</h3>
                            <h5 class="text-[14px] tablet:text-[18px]">{{ $item->price }} บาท</h5>
                        </div>
                    </button>
                @endif
            @endforeach
        </div>
    </div>
    @if ($isModalOpen2)
        {{-- นอกสุด --}}
        <div id="updateEmployeeModal" tabindex="-1" aria-hidden="true"
            class="fixed inset-0 z-[100] overflow-y-auto bg-gray-500 bg-opacity-75">
            <div class="flex items-center justify-center min-h-screen">
                {{-- กรอบสีครีม --}}
                <div
                    class="relative z-10 w-full phone:max-w-[340px] max-w-[550px] p-6 bg-darkgreen shadow-xl">
                    <form action="{{ route('customer.table.choose', $tableid) }}" method="post" class="flex flex-col gap-5 items-center">
                        @csrf
                        <img src="{{ $menu_img }}" class="w-[200px] h-[150px] bg-cover rounded-xl">
                        <input class=""  name="menu_id" wire:model="menu_id" type="hidden" value="{{ $menu_id }}">
                        <input class="" name="menu_name" wire:model="menu_name" type="hidden" value="{{ $menu_name }}"
                            readonly>
                        <input class="" name="price" wire:model="price" type="hidden" value="{{ $price }}"
                            readonly>
                        <input class="" type="hidden" value="{{ $types }}" readonly>
                        <input class="" type="hidden" class="text-[16px]" value="{{ $detail }}" readonly>

                        <div class="flex w-full justify-between py-2 px-[15px] tablet:px-[25px]">
                            <div>
                                <p class="text-lightcream phone:text-3xl tablet:text-4xl">{{ $menu_name }}</p>
                                <p class="text-lightcream phone:text-xl tablet:text-2xl">{{ $price }} บาท</p>
                            </div>
                            @livewire('customer.counter-menu')
                        </div>
                        <div class="bg-lightcream rounded-lg">
                            <p class="phone:text-sm tablet:text-xl px-3 py-3">{{ $detail }}</p>
                        </div>
                        <div class="flex justify-evenly w-full">
                            {{-- ปุ่มปิด --}}
                            <button type="button" wire:click="toggleModal2({{ $menu_id }})" class="bg-none border-white border rounded-[32px] tablet:text-[28px] px-7 py-1 mt-2 font-bold text-white">
                                ยกเลิก
                            </button>
                            <button type="submit" class="bg-lgreen rounded-[32px] px-7 py-1  mt-2 font-bold tablet:text-[28px] text-darkgreen  hover:bg-lightcream duration-700">สั่ง {{ $menu_name }}</button>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    @endif
    {{-- <img src="{{asset('images/อาหารจานหลัก/คาโบนาร่า.png')}}" alt=""> --}}
</div>
