<div>
    <nav class="navbar phone:px-[30px] w-full h-[60px] flex items-center top-[80px] fixed bg-lgreen z-50">
        <div class="crop bg-white rounded-3xl flex text-lgreen w-full">
            <a href="#playeat" class="z-10 phone:py-[10px] phone:px-[5px] phone:text-[14px] rounded-l-3xl text-center w-1/3"><p class="z-11">อาหารทานเล่น</p></a>
            <a href="#main" class="z-10 phone:py-[10px] phone:px-[5px] phone:text-[14px] text-center w-1/3"><p class="z-11">อาหารจานหลัก</p></a>
            <a href="#drink" class="z-10 phone:py-[10px] phone:px-[5px] phone:text-[14px] rounded-r-3xl text-center w-1/3"><p class="z-11">เครื่องดื่ม/อื่นๆ</p></a>
            <div id="marker" class="z-9 phone:py-[15px] rounded-3xl phone:px-[5px] border-b top-[15px] left-[35px] absolute bg-darkgreen w-[27%] duration-300 transition-all"></div>
        </div>
    </nav>
    {{-- @if ()  --}}
    <div id="playeat" class="mb-4 mt-[60px] scroll-mt-[200px]">
        <div
            class="w-[130px] h-[38px] phone:mb-4 phone:mx-[40px] text-[18px] drop-shadow-lg bg-white border flex justify-center items-center border-black">
            <p class="font-bold">อาหารทานเล่น</p>
        </div>
        <div class="grid phone:grid-cols-2 largephone:grid-cols-2 tablet:grid-cols-3 phone:gap-6 gap-7 phone:px-[40px]">
            @foreach ($menus as $item)
                @if ($item->category_id == 1)
                    <button wire:click="toggleModal2({{$item->menu_id}})"
                        class="bg-white w-full phone:h-[227px] tablet:h-[459px] rounded-2xl phone:p-[10px] phone:gap-3 flex flex-col items-center ">
                        <img class="phone:h-[130px] phone:w-[133px]  bg-cover rounded-lg" src="{{ $item->menu_img }}"
                            alt="">
                        <div class="phone:w-[24px] h-[5px] rounded-xl bg-darkgreen"></div>
                        <div class="text-center">
                            <h3 class="text-[18px] font-bold">{{ $item->menu_name }}</h3>
                            <h5 class="text-[14px]">{{ $item->price }}</h5>
                        </div>
                    </button>
                @endif
            @endforeach
        </div>
    </div>
    {{-- @endif --}}
    {{-- @if () --}}
    <div id="main" class="mb-4 scroll-mt-[200px]" >   
        <div
            class="w-[130px] h-[38px] phone:mb-4 phone:mx-[40px] text-[18px] drop-shadow-lg bg-white border flex justify-center items-center border-black">
            <p class="font-bold">เมนูเส้น</p>
        </div>
        <div class="grid phone:grid-cols-2 largephone:grid-cols-2 tablet:grid-cols-3 phone:gap-6 gap-7 phone:px-[40px]">
            @foreach ($menus as $item)
                @if ($item->types == 'เมนูเส้น')
                    <button wire:click="toggleModal2({{$item->menu_id}})"
                        class="bg-white w-full phone:h-[227px] tablet:h-[459px] rounded-2xl phone:p-[10px] phone:gap-3 flex flex-col items-center ">
                        <img class="phone:h-[130px] phone:w-[133px]  bg-cover rounded-lg" src="{{ $item->menu_img }}"
                            alt="">
                        <div class="phone:w-[24px] h-[5px] rounded-xl bg-darkgreen"></div>
                        <div class="text-center">
                            <h3 class="text-[18px] font-bold">{{ $item->menu_name }}</h3>
                            <h5 class="text-[14px]">{{ $item->price }}</h5>
                        </div>
                    </button>
                @endif
            @endforeach
        </div>
    </div>
    <div class="mb-4">
        <div
            class="w-[130px] h-[38px] phone:mb-4 phone:mx-[40px] text-[18px] drop-shadow-lg bg-white border flex justify-center items-center border-black">
            <p class="font-bold">สเต็ก</p>
        </div>
        <div class="grid phone:grid-cols-2 largephone:grid-cols-2 tablet:grid-cols-3 phone:gap-6 gap-7 phone:px-[40px]">
            @foreach ($menus as $item)
                @if ($item->types == 'สเต็ก')
                    <button wire:click="toggleModal2({{$item->menu_id}})"
                        class="bg-white w-full phone:h-[227px] tablet:h-[459px] rounded-2xl phone:p-[10px] phone:gap-3 flex flex-col items-center ">
                        <img class="phone:h-[130px] phone:w-[133px]  bg-cover rounded-lg" src="{{ $item->menu_img }}"
                            alt="">
                        <div class="phone:w-[24px] h-[5px] rounded-xl bg-darkgreen"></div>
                        <div class="text-center">
                            <h3 class="text-[18px] font-bold">{{ $item->menu_name }}</h3>
                            <h5 class="text-[14px]">{{ $item->price }}</h5>
                        </div>
                    </button>
                @endif
            @endforeach
        </div>
    </div>
    <div class="mb-4">
        <div
            class="w-[130px] h-[38px] phone:mb-4 phone:mx-[40px] text-[18px] drop-shadow-lg bg-white border flex justify-center items-center border-black">
            <p class="font-bold">ข้าว/อื่นๆ</p>
        </div>
        <div class="grid phone:grid-cols-2 largephone:grid-cols-2 tablet:grid-cols-3 phone:gap-6 gap-7 phone:px-[40px]">
            @foreach ($menus as $item)
                @if ($item->types == 'ข้าว/อื่นๆ')
                    <button wire:click="toggleModal2({{$item->menu_id}})"
                        class="bg-white w-full phone:h-[227px] tablet:h-[459px] rounded-2xl phone:p-[10px] phone:gap-3 flex flex-col items-center ">
                        <img class="phone:h-[130px] phone:w-[133px]  bg-cover rounded-lg" src="{{ $item->menu_img }}"
                            alt="">
                        <div class="phone:w-[24px] h-[5px] rounded-xl bg-darkgreen"></div>
                        <div class="text-center">
                            <h3 class="text-[18px] font-bold">{{ $item->menu_name }}</h3>
                            <h5 class="text-[14px]">{{ $item->price }}</h5>
                        </div>
                    </button>
                @endif
            @endforeach
        </div>
    </div>
    {{-- @endif --}}
    {{-- @if () --}}
    <div id="drink" class="mb-4 scroll-mt-[200px]" >
        <div
            class="w-[130px] h-[38px] phone:mb-4 phone:mx-[40px] text-[18px] drop-shadow-lg bg-white border flex justify-center items-center border-black">
            <p class="font-bold">ของหวาน</p>
        </div>
        <div class="grid phone:grid-cols-2 largephone:grid-cols-2 tablet:grid-cols-3 phone:gap-6 gap-7 phone:px-[40px]">
            @foreach ($menus as $item)
                @if ($item->types == 'ของหวาน')
                    <button wire:click="toggleModal2({{$item->menu_id}})"
                        class="bg-white w-full phone:h-[227px] tablet:h-[459px] rounded-2xl phone:p-[10px] phone:gap-3 flex flex-col items-center ">
                        <img class="phone:h-[130px] phone:w-[133px]  bg-cover rounded-lg" src="{{ $item->menu_img }}"
                            alt="">
                        <div class="phone:w-[24px] h-[5px] rounded-xl bg-darkgreen"></div>
                        <div class="text-center">
                            <h3 class="text-[18px] font-bold">{{ $item->menu_name }}</h3>
                            <h5 class="text-[14px]">{{ $item->price }}</h5>
                        </div>
                    </button>
                @endif
            @endforeach
        </div>
    </div>
    <div class="mb-4">
        <div
            class="w-[130px] h-[38px] phone:mb-4 phone:mx-[40px] text-[18px] drop-shadow-lg bg-white border flex justify-center items-center border-black">
            <p class="font-bold">กาแฟ/ชา</p>
        </div>
        <div class="grid phone:grid-cols-2 largephone:grid-cols-2 tablet:grid-cols-3 phone:gap-6 gap-7 phone:px-[40px]">
            @foreach ($menus as $item)
                @if ($item->types == 'กาแฟ/ชา')
                    <button wire:click="toggleModal2({{$item->menu_id}})"
                        class="bg-white w-full phone:h-[227px] tablet:h-[459px] rounded-2xl phone:p-[10px] phone:gap-3 flex flex-col items-center ">
                        <img class="phone:h-[130px] phone:w-[133px]  bg-cover rounded-lg" src="{{ $item->menu_img }}"
                            alt="">
                        <div class="phone:w-[24px] h-[5px] rounded-xl bg-darkgreen"></div>
                        <div class="text-center">
                            <h3 class="text-[18px] font-bold">{{ $item->menu_name }}</h3>
                            <h5 class="text-[14px]">{{ $item->price }}</h5>
                        </div>
                    </button>
                @endif
            @endforeach
        </div>
    </div>
    <div class="mb-4">
        <div
            class="w-[130px] h-[38px] phone:mb-4 phone:mx-[40px] text-[18px] drop-shadow-lg bg-white border flex justify-center items-center border-black">
            <p class="font-bold">ไวน์</p>
        </div>
        <div class="grid phone:grid-cols-2 largephone:grid-cols-2 tablet:grid-cols-3 phone:gap-6 gap-7 phone:px-[40px]">
            @foreach ($menus as $item)
                @if ($item->types == 'ไวน์')
                    <button wire:click="toggleModal2({{$item->menu_id}})"
                        class="bg-white w-full phone:h-[227px] tablet:h-[459px] rounded-2xl phone:p-[10px] phone:gap-3 flex flex-col items-center ">
                        <img class="phone:h-[130px] phone:w-[133px]  bg-cover rounded-lg" src="{{ $item->menu_img }}"
                            alt="">
                        <div class="phone:w-[24px] h-[5px] rounded-xl bg-darkgreen"></div>
                        <div class="text-center">
                            <h3 class="text-[18px] font-bold">{{ $item->menu_name }}</h3>
                            <h5 class="text-[14px]">{{ $item->price }}</h5>
                        </div>
                    </button>
                @endif
            @endforeach
        </div>
    </div>
    <div class="mb-4">
        <div
            class="w-[130px] h-[38px] phone:mb-4 phone:mx-[40px] text-[18px] drop-shadow-lg bg-white border flex justify-center items-center border-black">
            <p class="font-bold">อื่นๆ</p>
        </div>
        <div class="grid phone:grid-cols-2 largephone:grid-cols-2 tablet:grid-cols-3 phone:gap-6 gap-7 phone:px-[40px]">
            @foreach ($menus as $item)
                @if ($item->types == 'อื่นๆ')
                    <button wire:click="toggleModal2({{$item->menu_id}})"
                        class="bg-white w-full phone:h-[227px] tablet:h-[459px] rounded-2xl phone:p-[10px] phone:gap-3 flex flex-col items-center ">
                        <img class="phone:h-[130px] phone:w-[133px]  bg-cover rounded-lg" src="{{ $item->menu_img }}"
                            alt="">
                        <div class="phone:w-[24px] h-[5px] rounded-xl bg-darkgreen"></div>
                        <div class="text-center">
                            <h3 class="text-[18px] font-bold">{{ $item->menu_name }}</h3>
                            <h5 class="text-[14px]">{{ $item->price }}</h5>
                        </div>
                    </button>
                @endif
            @endforeach
        </div>
    </div>
    {{-- @endif --}}
    @if($isModalOpen2)
        <div id="updateEmployeeModal" tabindex="-1" aria-hidden="true" class="fixed inset-0 z-[100] overflow-y-auto bg-gray-500 bg-opacity-75">
            <div class="flex items-center justify-center min-h-screen">
                <div class="relative z-10 w-full phone:max-w-[340px] p-6 bg-lightcream rounded-lg shadow-xl">
                        <form action="{{route('customer.table.choose', $tableid)}}" method="post">
                    {{-- <form wire:submit.prevent="chooseMenu"> --}}
                        @csrf
                        <input name="menu_id" wire:model="menu_id" type="hidden" value="{{ $menu_id }}">
                        <input name="menu_name" wire:model="menu_name" type="text" value="{{ $menu_name }}" readonly>
                        <input name="price" wire:model="price" type="text" value="{{ $price }}" readonly>
                        <input type="text" value="{{ $types }}" readonly>
                        <input type="text" value="{{ $detail }}" readonly>
                        <img src="{{ $menu_img }}">
                        <div class="flex">
                            <button>-</button>
                                <input name="count" wire:model="count" value="count">
                            <button>+</button>
                        </div>
                        <button type="submit">สั่ง{{ $menu_name }}</button>
                    </form>
                    <button wire:click="toggleModal2({{ $menu_id }})">
                        close
                    </button>
                </div>
            </div>
        </div>
    @endif
    <script>
        const marker = document.querySelector('#marker');
        const items = document.querySelectorAll('.navbar .crop a');

        const indicator = (element) => {
            marker.style.left = element.offsetLeft + 'px';
            marker.style.width = element.offsetWidth + 'px';
        };

        indicator(items[0]);

        items.forEach(link => {
            link.addEventListener('click', (e) => {
                e.preventDefault();
                indicator(link);
                const targetSectionId = link.getAttribute('href').substring(1);
                scrollingTo(targetSectionId)
            });
        });

    </script>

</div>
