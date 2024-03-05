<div class="h-seceen bg-lightcream">

    {{-- ปุ่ม --}}
    <div class="flex space-x-4 py-[20px] px-[60px]">
        <a href="{{ route('waiter.readytoserve') }}"
            class="text-3xl text-center  font-bold p-5 border-solid border-2 border-black hover:bg-lgreen hover:text-lightcream duration-500">ออร์เดอร์ที่ต้องเสิร์ฟ</a>
        <a href="{{ route('waiter.servedone') }}"
            class="text-3xl text-center font-bold p-5 border-solid border-2 border-black hover:bg-lgreen hover:text-lightcream duration-500">ออร์เดอร์เสร็จสิ้น</a>
    </div>

    {{-- กรอบกรอบสีครีม --}}
    <div class="w-full justify-center h-[90%] flex flex-wrap gap-[30px] px-[60px]">

        {{-- กรอบซ้าย --}}
        <div class="w-[48%] h-[1000px] bg-cream rounded-[32px] py-[2%]">
            <h1 class="text-5xl text-center font-bold mb-6">ออร์เดอร์ที่ต้องเสิร์ฟ</h1>
            <div class="overflow-y-scroll h-[700px] w-full flex flex-col items-center gap-[20px] ">
                @foreach ($getorder as $item)
                    @if ($item->status === 'serving')
                        <button type="button" wire:click.live="showOrder({{ $item->order_id }})"
                            class="text-4xl bg-lgreen w-[90%] border border-black hover:font-semibold hover:bg-cream flex justify-between p-6">
                            <p>โต๊ะที่ {{ $item->table_id }}</p>
                            <p>เวลา {{ $item->formattedOrderTime }}</p>
                        </button>
                    @endif
                @endforeach
            </div>
        </div>

        {{-- กรอบขขวา --}}
        <div class="w-[48%] h-[1000px] bg-cream rounded-[32px]">
            {{-- หัวโต๊ะส่วนที่ 1 --}}
            @if ($open == true)
                <div class="text-4xl pt-[50px] px-[10%]">
                    <div class="flex justify-between">
                        <div>โต๊ะที่ {{ $gettableid }}</div>
                        <div>เวลา {{ $gettime }}</div>
                    </div>
                    <hr class="h-[2px] w-[100%] bg-black mx-auto mt-[15px] laptop:w-[500px]">
                </div>

                {{-- ส่วนรายการอาหาร --}}
                <div class="overflow-y-scroll overflow-x-hidden m-[4%] min-h-[60%] max-h-[60%]">

                    {{-- food1 --}}
                    @foreach ($getlists as $index => $list)
                        <div class="flex justify-between px-[10%] mt-[1%] mb-[4%]">
                            <p class="text-[26px] w-[25%]">{{ $index + 1 }}. {{ $list->menu_name }}</p>
                            <p class="text-[26px] w-[20%]">x{{ $list->quantity }}</p>
                            <div class="flex justify-between space-x-[140px]">
                                <div>
                                    <svg fill="black" width="40" height="40" viewBox="0 -1.73 51.467 51.467"
                                        xmlns="http://www.w3.org/2000/svg">

                                        <g id="SVGRepo_bgCarrier" stroke-width="0" />

                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" />

                                        <g id="SVGRepo_iconCarrier">
                                            <g id="_7" data-name="7" transform="translate(-289.267 -251.5)">
                                                <path id="Path_211" data-name="Path 211"
                                                    d="M311.593,254.752a30.771,30.771,0,0,1,5.363-.091,1.778,1.778,0,0,0,.109-1.579,3.029,3.029,0,0,0-2.331-1.549,3.417,3.417,0,0,0-3.547,1.507,1.913,1.913,0,0,0,.173,1.742C311.446,254.812,311.515,254.83,311.593,254.752Z" />
                                                <path id="Path_212" data-name="Path 212"
                                                    d="M336.39,265.913c-5.174-7.442-13.544-10.629-22.336-10.494a26.3,26.3,0,0,0-17.418,6.884,17.894,17.894,0,0,0-5.886,13.572h48.541A17.056,17.056,0,0,0,336.39,265.913Z" />
                                                <path id="Path_213" data-name="Path 213"
                                                    d="M340.722,277.678a1.51,1.51,0,0,0-.982-1.009H290.609c-.28.088-.551,0-.812.169-.83.488-.448,1.666-.4,2.441a1.371,1.371,0,0,0,1.116.857h48.8a1.5,1.5,0,0,0,1-.249c.1-.1.221-.3.28-.3A5.56,5.56,0,0,0,340.722,277.678Z" />
                                                <path id="Path_214" data-name="Path 214"
                                                    d="M300.158,282.365a.7.7,0,0,0-.132.63c.469.86,1.446.643,2.327.706a.671.671,0,0,0,.071.533c.409.743,1.261.6,2,.65a.556.556,0,0,0-.036.416,1.276,1.276,0,0,0,.951.6h11.251l.022-3.932H301.23A1.561,1.561,0,0,0,300.158,282.365Z" />
                                                <path id="Path_215" data-name="Path 215"
                                                    d="M332.139,281.963h-6.623V297.59h6.614Z" />
                                                <path id="Path_216" data-name="Path 216"
                                                    d="M317.421,289.628H322.5v-7.665h-5.078Zm1-1.747a.761.761,0,0,1,1.094-.025.812.812,0,0,1,.167.7.844.844,0,0,1-.414.467.785.785,0,0,1-.677-.046.893.893,0,0,1-.332-.531A.76.76,0,0,1,318.425,287.881Z" />
                                                <path id="Path_217" data-name="Path 217"
                                                    d="M332.972,298.488H329.44V299.5h9.573V281.963h-6.042Z" />
                                            </g>
                                        </g>

                                    </svg>
                                </div>
                                <div>
                                    @if ($list->order_status === 'serving')
                                        {{-- @if ($settrue == true) --}}
                                        <button wire:click="clickToDone({{ $list->order_id }}, {{ $list->menu_id }})">
                                            <svg width="40" height="40"
                                                class="laptop:w-[55px] laptop:h-[55px] hover:bg-gray-200 duration-300 rounded-[50%]"
                                                viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_144_745)">
                                                    <path
                                                        d="M29.9994 0C13.457 0 0 13.458 0 30C0 46.542 13.457 60 29.9994 60C46.5419 60 60 46.542 60 30C60 13.458 46.5419 0 29.9994 0ZM29.9994 56.0655C15.627 56.0655 3.9345 44.3724 3.9345 30C3.9345 15.6274 15.6269 3.93465 29.9994 3.93465C44.372 3.93465 56.0651 15.6276 56.0651 30C56.0652 44.3724 44.3718 56.0655 29.9994 56.0655Z"
                                                        fill="black" />
                                                    <path
                                                        d="M40.8611 20.179L25.3914 35.6479L19.1381 29.3959C18.3696 28.6284 17.1248 28.6279 16.3563 29.3964C15.5876 30.1651 15.5876 31.4101 16.3563 32.1786L24.0008 39.8218C24.3849 40.2055 24.8882 40.3975 25.3914 40.3975C25.8947 40.3975 26.3993 40.2055 26.7833 39.8212C26.7845 39.8196 26.7854 39.8179 26.7873 39.816L43.6427 22.9608C44.4114 22.1928 44.4114 20.9469 43.6427 20.1789C42.8744 19.4104 41.6286 19.4104 40.8611 20.179Z"
                                                        fill="black" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_144_745">
                                                        <rect width="60" height="60" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </button>
                                    @elseif($list->order_status === 'done')
                                        <svg width="40" height="40"
                                            class="laptop:w-[55px] laptop:h-[55px] bg-green-200 rounded-[50%]"
                                            viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_144_745)">
                                                <path
                                                    d="M29.9994 0C13.457 0 0 13.458 0 30C0 46.542 13.457 60 29.9994 60C46.5419 60 60 46.542 60 30C60 13.458 46.5419 0 29.9994 0ZM29.9994 56.0655C15.627 56.0655 3.9345 44.3724 3.9345 30C3.9345 15.6274 15.6269 3.93465 29.9994 3.93465C44.372 3.93465 56.0651 15.6276 56.0651 30C56.0652 44.3724 44.3718 56.0655 29.9994 56.0655Z"
                                                    fill="black" />
                                                <path
                                                    d="M40.8611 20.179L25.3914 35.6479L19.1381 29.3959C18.3696 28.6284 17.1248 28.6279 16.3563 29.3964C15.5876 30.1651 15.5876 31.4101 16.3563 32.1786L24.0008 39.8218C24.3849 40.2055 24.8882 40.3975 25.3914 40.3975C25.8947 40.3975 26.3993 40.2055 26.7833 39.8212C26.7845 39.8196 26.7854 39.8179 26.7873 39.816L43.6427 22.9608C44.4114 22.1928 44.4114 20.9469 43.6427 20.1789C42.8744 19.4104 41.6286 19.4104 40.8611 20.179Z"
                                                    fill="black" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_144_745">
                                                    <rect width="60" height="60" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                    {{-- ส่วนที่ 3 ปุ่มเสร็จสิ้น --}}
                    <div class="flex justify-center mt-[5%]">
                        <div class="flex justify-center">
                            <a href="{{ route('waiter.served', ['id' => $getid]) }}"
                                class="bg-lightcream text-3xl text-darkgreen font-bold px-6 py-4  hover:bg-darkgreen hover:text-cream duration-500">เสร็จสิ้น</a>
                        </div>
                    </div>
                @else
                    <div></div>
            @endif
        </div>
    </div>

</div>
</div>
