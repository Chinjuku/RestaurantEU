@extends('layouts.customer')
@section('name_nav', 'รายการอาหารที่สั่ง')
@section('content')
    <!-- <div class="phone:text-3xl text-6xl">kuaykuaykuay</div> -->
    <!-- รายการทั้งหมด -->

    <div class="h-screen gap-1">
        <!-- แต่ละรายการ1 -->
        @foreach ($orderlists as $item)
            @if ($item->status == 'complete')
                <div class="mt-10 text-2xl flex h-full w-full justify-center items-center flex-col gap-4">
                    <p>ออเดอร์ของลูกค้าถูกเสิร์ฟเสร็จสิ้นแล้ว</p>
                    <a class="bg-darkgreen py-3 px-4 text-white rounded-lg"
                        href="{{ route('customer.table', $item->table_id) }}">กลับสู่หน้าหลัก</a>
                </div>
            @break

        @else
            <div class="group flex flex-col bg-[#FFF9F1] mx-[7%] my-[4%] px-[5%] py-[2%] border border-black rounded-2xl"
                tabindex="1">
                <div class=" flex justify-between  ">
                    <!-- left -->
                    <div>
                        <!-- lefttop -->
                        <div class="py-[2%] text-xl">{{ $item->menu_name }}</div>
                        <!-- leftbot -->
                        <div class="flex items-center">
                            @if ($item->order_status == 'in-queue')
                                <div><svg fill="#B93636" width="30px" height="30px" viewBox="0 0 24 24"
                                        id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M24,12a1,1,0,0,1-2,0A10.011,10.011,0,0,0,12,2a1,1,0,0,1,0-2A12.013,12.013,0,0,1,24,12Zm-8,1a1,1,0,0,0,0-2H13.723A2,2,0,0,0,13,10.277V7a1,1,0,0,0-2,0v3.277A1.994,1.994,0,1,0,13.723,13ZM1.827,6.784a1,1,0,1,0,1,1A1,1,0,0,0,1.827,6.784ZM2,12a1,1,0,1,0-1,1A1,1,0,0,0,2,12ZM12,22a1,1,0,1,0,1,1A1,1,0,0,0,12,22ZM4.221,3.207a1,1,0,1,0,1,1A1,1,0,0,0,4.221,3.207ZM7.779.841a1,1,0,1,0,1,1A1,1,0,0,0,7.779.841ZM1.827,15.216a1,1,0,1,0,1,1A1,1,0,0,0,1.827,15.216Zm2.394,3.577a1,1,0,1,0,1,1A1,1,0,0,0,4.221,18.793Zm3.558,2.366a1,1,0,1,0,1,1A1,1,0,0,0,7.779,21.159Zm14.394-5.943a1,1,0,1,0,1,1A1,1,0,0,0,22.173,15.216Zm-2.394,3.577a1,1,0,1,0,1,1A1,1,0,0,0,19.779,18.793Zm-3.558,2.366a1,1,0,1,0,1,1A1,1,0,0,0,16.221,21.159Z" />
                                    </svg></div>
                                <div class="ml-[10%] w-[110px] text-[#B93636]">อยู่ในคิว</div>
                            @elseif ($item->order_status == 'in-process')
                                <div class="p-[4%]"><svg width="30px" height="30px" class="stroke-orangee"
                                        viewBox="0 0 64 64" enable-background="new 0 0 64 64" id="Layer_1"
                                        version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink">

                                        <g>

                                            <path
                                                d="M58.606,31.687c-0.364-0.567-0.903-0.975-1.521-1.255C56.466,30.152,55.755,30.001,55,30H41.375   c-0.111,0-0.213,0.029-0.313,0.063C40.963,30.029,40.861,30,40.75,30H6c-0.552,0-1,0.447-1,1v7c0.004,2.207,1.793,3.996,4,4h28.75   c2.207-0.004,3.996-1.793,4-4v-2H55c1.007-0.003,1.935-0.267,2.673-0.756c0.368-0.246,0.692-0.553,0.933-0.931   C58.848,33.938,59.001,33.481,59,33C59.001,32.519,58.848,32.062,58.606,31.687z M39.162,39.412C38.794,39.777,38.299,40,37.75,40   H9c-0.549,0-1.044-0.223-1.412-0.588C7.223,39.045,7,38.55,7,38v-6h32.75v6C39.75,38.55,39.527,39.045,39.162,39.412z    M56.92,33.239c-0.093,0.15-0.316,0.354-0.657,0.507C55.925,33.899,55.482,34.001,55,34H41.75v-2H55   c0.643-0.003,1.215,0.184,1.564,0.42c0.175,0.116,0.293,0.241,0.356,0.341C56.983,32.863,56.999,32.932,57,33   C56.999,33.068,56.983,33.137,56.92,33.239z"
                                                fill="#231F20" />

                                            <path
                                                d="M10,34c-0.552,0-1,0.447-1,1v2c0,0.553,0.448,1,1,1s1-0.447,1-1v-2C11,34.447,10.552,34,10,34z"
                                                fill="#231F20" />

                                            <path
                                                d="M11.524,16.687c-1.128,1.549-1.528,3.164-1.524,4.569c0.015,2.819,1.472,4.789,1.524,4.876   c0.324,0.447,0.95,0.547,1.397,0.223c0.446-0.323,0.545-0.946,0.224-1.394h0l-0.002-0.003l0,0   c-0.036-0.036-1.157-1.693-1.143-3.702c0.004-1.046,0.271-2.188,1.143-3.396c1.128-1.549,1.528-3.165,1.524-4.57   c-0.015-2.819-1.472-4.79-1.524-4.877c-0.324-0.447-0.949-0.547-1.396-0.223c-0.446,0.323-0.545,0.946-0.224,1.394h0l0.002,0.003   l0,0c0.036,0.036,1.157,1.694,1.143,3.703C12.663,14.336,12.396,15.479,11.524,16.687z"
                                                fill="#231F20" />

                                            <path
                                                d="M32.524,16.687c-1.128,1.549-1.528,3.164-1.524,4.569c0.015,2.819,1.472,4.789,1.524,4.876   c0.324,0.447,0.95,0.547,1.397,0.223c0.446-0.323,0.545-0.946,0.224-1.394h0l-0.002-0.003l0,0   c-0.036-0.036-1.157-1.693-1.143-3.702c0.004-1.046,0.271-2.188,1.143-3.396c1.128-1.549,1.528-3.165,1.524-4.57   c-0.015-2.819-1.472-4.79-1.524-4.877c-0.324-0.447-0.949-0.547-1.396-0.223c-0.446,0.323-0.545,0.946-0.224,1.394h0l0.002,0.003   l0,0c0.036,0.036,1.157,1.694,1.143,3.703C33.663,14.336,33.396,15.479,32.524,16.687z"
                                                fill="#231F20" />

                                            <path
                                                d="M22.024,16.688c-1.128,1.549-1.528,3.164-1.524,4.568c0.015,2.819,1.472,4.789,1.524,4.876   c0.324,0.447,0.95,0.547,1.397,0.223c0.446-0.323,0.545-0.946,0.224-1.394h0l-0.002-0.003l0,0   c-0.036-0.036-1.157-1.693-1.143-3.702c0.004-1.045,0.271-2.187,1.143-3.395c1.128-1.55,1.528-3.166,1.524-4.571   c-0.015-2.819-1.472-4.79-1.524-4.877c-0.324-0.447-0.95-0.547-1.396-0.223c-0.446,0.323-0.545,0.946-0.224,1.394h0l0.002,0.003   l0,0c0.036,0.036,1.156,1.693,1.143,3.703C23.163,14.336,22.896,15.479,22.024,16.688z"
                                                fill="#231F20" />

                                            <path
                                                d="M38,51h-3.765c0.041-0.075,0.087-0.146,0.125-0.224c0.333-0.693,0.515-1.495,0.515-2.35   c-0.001-0.691-0.221-1.306-0.507-1.82c-0.435-0.773-1.024-1.36-1.506-1.778C32.38,44.413,32,44.173,31.97,44.154   c-0.326-0.206-0.739-0.206-1.065,0c-0.04,0.025-0.701,0.44-1.399,1.148c-0.349,0.356-0.709,0.787-0.998,1.304   c-0.287,0.515-0.506,1.129-0.507,1.82c0.001,0.951,0.236,1.831,0.646,2.573h-2.412c0.041-0.075,0.087-0.146,0.125-0.224   c0.333-0.693,0.515-1.495,0.515-2.35c-0.001-0.691-0.221-1.306-0.507-1.82c-0.435-0.773-1.024-1.36-1.506-1.778   C24.38,44.413,24,44.173,23.97,44.154c-0.326-0.206-0.739-0.206-1.065,0c-0.04,0.025-0.701,0.44-1.399,1.148   c-0.349,0.356-0.709,0.787-0.998,1.304c-0.287,0.515-0.506,1.129-0.507,1.82c0.001,0.951,0.236,1.831,0.646,2.573h-2.205   c0.013-0.026,0.03-0.051,0.043-0.078C18.817,50.229,19,49.427,19,48.573c-0.001-0.691-0.221-1.306-0.507-1.821   c-0.435-0.773-1.024-1.36-1.506-1.778c-0.482-0.415-0.862-0.655-0.892-0.674c-0.326-0.206-0.739-0.206-1.065,0   c-0.04,0.025-0.701,0.44-1.399,1.149c-0.349,0.355-0.709,0.786-0.998,1.303c-0.287,0.516-0.506,1.13-0.507,1.821   c0.001,0.888,0.201,1.716,0.561,2.427H9c-0.552,0-1,0.447-1,1s0.448,1,1,1h29c0.552,0,1-0.447,1-1S38.552,51,38,51z M30.254,47.58   c0.251-0.456,0.689-0.916,1.065-1.237c0.042-0.036,0.078-0.063,0.117-0.096c0.174,0.143,0.365,0.309,0.556,0.508   c0.251,0.261,0.486,0.561,0.645,0.854c0.16,0.295,0.239,0.571,0.239,0.818c0.002,0.754-0.225,1.42-0.529,1.844   c-0.151,0.213-0.317,0.364-0.471,0.455c-0.156,0.091-0.292,0.128-0.438,0.129c-0.145-0.001-0.282-0.038-0.438-0.129   c-0.23-0.135-0.49-0.412-0.682-0.815C30.124,49.509,30,48.992,30,48.427C29.999,48.172,30.084,47.886,30.254,47.58z M22.254,47.58   c0.251-0.456,0.689-0.916,1.065-1.237c0.042-0.036,0.078-0.063,0.117-0.096c0.174,0.143,0.365,0.309,0.556,0.508   c0.251,0.261,0.486,0.561,0.645,0.854c0.16,0.295,0.239,0.571,0.239,0.818c0.002,0.754-0.225,1.42-0.529,1.844   c-0.151,0.213-0.317,0.364-0.471,0.455c-0.156,0.091-0.292,0.128-0.438,0.129c-0.145-0.001-0.282-0.038-0.438-0.129   c-0.23-0.135-0.49-0.412-0.682-0.815C22.124,49.509,22,48.992,22,48.427C21.999,48.172,22.084,47.886,22.254,47.58z M15.125,50.871   c-0.23-0.135-0.49-0.412-0.683-0.815c-0.193-0.401-0.318-0.917-0.317-1.482c-0.001-0.255,0.084-0.542,0.254-0.848   c0.251-0.456,0.689-0.916,1.065-1.237c0.042-0.036,0.078-0.063,0.117-0.097c0.174,0.144,0.365,0.31,0.555,0.509   c0.251,0.261,0.486,0.561,0.645,0.854C16.921,48.05,17,48.326,17,48.573c0.002,0.754-0.224,1.42-0.529,1.843   C16.32,50.629,16.154,50.78,16,50.871c-0.156,0.091-0.292,0.128-0.438,0.129C15.417,50.999,15.281,50.962,15.125,50.871z"
                                                fill="#231F20" />

                                        </g>

                                    </svg></div>
                                <div class="ml-[10%] w-[110px] text-orangee">เตรียมอาหาร</div>
                            @elseif ($item->order_status == 'serving')
                                <div class="p-[4%]"><svg width="30px" height="30px" class="stroke-yellow-300"
                                        viewBox="0 0 64 64" enable-background="new 0 0 64 64" id="Layer_1"
                                        version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink">

                                        <g>

                                            <path
                                                d="M58.923,50.382c0.102-0.244,0.102-0.52,0-0.764c-0.102-0.245-0.296-0.439-0.541-0.541   C58.26,49.026,58.13,49,58,49h-2.5c-0.001-12.645-9.988-22.952-22.505-23.475c0-0.009,0.005-0.017,0.005-0.025v-2.663   c1.442-0.433,2.499-1.753,2.5-3.337c-0.001-1.934-1.566-3.499-3.5-3.5c-1.934,0.001-3.499,1.566-3.5,3.5   c0.001,1.584,1.058,2.904,2.5,3.337V25.5c0,0.009,0.005,0.017,0.005,0.025C18.488,26.048,8.501,36.355,8.5,49H6   c-0.13,0-0.26,0.026-0.382,0.077c-0.245,0.102-0.439,0.296-0.541,0.541c-0.102,0.244-0.102,0.52,0,0.764   c0.051,0.123,0.124,0.234,0.217,0.326l5.878,5.878c0.72,0.715,1.679,1.287,2.703,1.715C14.902,58.723,15.985,58.996,17,59h30   c1.015-0.004,2.098-0.277,3.125-0.699c1.024-0.428,1.983-1,2.703-1.715l5.878-5.878C58.799,50.616,58.872,50.505,58.923,50.382z    M30.5,19.5c0.002-0.828,0.672-1.498,1.5-1.5c0.828,0.002,1.498,0.672,1.5,1.5c-0.002,0.828-0.672,1.498-1.5,1.5   C31.172,20.998,30.502,20.328,30.5,19.5z M16.798,33.798C20.691,29.905,26.061,27.5,32,27.5s11.309,2.405,15.202,6.298   C51.095,37.691,53.499,43.061,53.5,49h-43C10.5,43.061,12.905,37.691,16.798,33.798z M51.414,55.172   c-0.446,0.451-1.223,0.939-2.055,1.281C48.53,56.8,47.636,57.004,47,57H17c-0.636,0.004-1.53-0.2-2.359-0.547   c-0.832-0.342-1.608-0.83-2.055-1.281L8.414,51h47.172L51.414,55.172z"
                                                fill="#231F20" />

                                            <path
                                                d="M24.684,32.052c-3.209,1.068-5.364,2.95-6.702,4.558c-1.34,1.61-1.882,2.95-1.91,3.02   c-0.205,0.513,0.045,1.095,0.558,1.3s1.095-0.045,1.3-0.558V40.37c0.032-0.078,0.534-1.251,1.7-2.611   c1.168-1.361,2.983-2.908,5.688-3.811c0.523-0.174,0.807-0.74,0.632-1.265C25.774,32.16,25.208,31.877,24.684,32.052z"
                                                fill="#231F20" />

                                        </g>

                                    </svg></div>
                                <div class="ml-[10%] w-[110px] text-yellow-300">รอเสิร์ฟ</div>
                            @elseif ($item->order_status == 'done')
                                <svg fill="#000000" width="30px" height="30px" class="stroke-green-500"
                                    viewBox="0 0 50 50" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M25 42c-9.4 0-17-7.6-17-17S15.6 8 25 8s17 7.6 17 17-7.6 17-17 17zm0-32c-8.3 0-15 6.7-15 15s6.7 15 15 15 15-6.7 15-15-6.7-15-15-15z" />
                                    <path d="M23 32.4l-8.7-8.7 1.4-1.4 7.3 7.3 11.3-11.3 1.4 1.4z" />
                                </svg>
                                <div class="ml-[10%] w-[110px] text-green-500">เสร็จสิ้น</div>
                            @endif
                        </div>
                    </div>
                    <!-- right -->
                    <div class="flex right-0">
                        <div class="text-2xl my-auto mr-[5%] ">x{{ $item->quantity }}</div>

                        <div class="my-auto">
                            <svg class="group-focus:-rotate-180" width="40px" height="40px" viewBox="0 0 24 24"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M5.70711 9.71069C5.31658 10.1012 5.31658 10.7344 5.70711 11.1249L10.5993 16.0123C11.3805 16.7927 12.6463 16.7924 13.4271 16.0117L18.3174 11.1213C18.708 10.7308 18.708 10.0976 18.3174 9.70708C17.9269 9.31655 17.2937 9.31655 16.9032 9.70708L12.7176 13.8927C12.3271 14.2833 11.6939 14.2832 11.3034 13.8927L7.12132 9.71069C6.7308 9.32016 6.09763 9.32016 5.70711 9.71069Z"
                                    fill="#0F0F0F" />
                            </svg>
                        </div>


                    </div>
                </div>
                <!-- readmore -->
                <div
                    class=" invisible h-auto max-h-0 items-center opacity-0 transition-all group-focus:visible group-focus:max-h-screen group-focus:opacity-100 group-focus:duration-1000">
                    <hr class="border-black mt-[2%]">
                    <!-- allstatus -->
                    <div class="p-[4%]">
                        <!-- status1 -->
                        <div class="flex mx-auto justify-center items-center">
                            @if ($item->order_status == 'in-queue')
                                <div class=" p-[4%]"><svg fill="#B93636" width="30px" height="30px"
                                        viewBox="0 0 24 24" id="Layer_1" data-name="Layer 1"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M24,12a1,1,0,0,1-2,0A10.011,10.011,0,0,0,12,2a1,1,0,0,1,0-2A12.013,12.013,0,0,1,24,12Zm-8,1a1,1,0,0,0,0-2H13.723A2,2,0,0,0,13,10.277V7a1,1,0,0,0-2,0v3.277A1.994,1.994,0,1,0,13.723,13ZM1.827,6.784a1,1,0,1,0,1,1A1,1,0,0,0,1.827,6.784ZM2,12a1,1,0,1,0-1,1A1,1,0,0,0,2,12ZM12,22a1,1,0,1,0,1,1A1,1,0,0,0,12,22ZM4.221,3.207a1,1,0,1,0,1,1A1,1,0,0,0,4.221,3.207ZM7.779.841a1,1,0,1,0,1,1A1,1,0,0,0,7.779.841ZM1.827,15.216a1,1,0,1,0,1,1A1,1,0,0,0,1.827,15.216Zm2.394,3.577a1,1,0,1,0,1,1A1,1,0,0,0,4.221,18.793Zm3.558,2.366a1,1,0,1,0,1,1A1,1,0,0,0,7.779,21.159Zm14.394-5.943a1,1,0,1,0,1,1A1,1,0,0,0,22.173,15.216Zm-2.394,3.577a1,1,0,1,0,1,1A1,1,0,0,0,19.779,18.793Zm-3.558,2.366a1,1,0,1,0,1,1A1,1,0,0,0,16.221,21.159Z" />
                                    </svg>
                                </div>
                                <div class="px-[4%]">
                                    <div class="text-[#B93636]">อยู่ในคิว</div>
                                    {{-- <div class="text-[#B93636]">เวลา 20.00 น.</div> --}}
                                </div>
                            @else
                                <div class="p-[4%]"><svg width="30px" height="30px" viewBox="0 0 24 24"
                                        id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M24,12a1,1,0,0,1-2,0A10.011,10.011,0,0,0,12,2a1,1,0,0,1,0-2A12.013,12.013,0,0,1,24,12Zm-8,1a1,1,0,0,0,0-2H13.723A2,2,0,0,0,13,10.277V7a1,1,0,0,0-2,0v3.277A1.994,1.994,0,1,0,13.723,13ZM1.827,6.784a1,1,0,1,0,1,1A1,1,0,0,0,1.827,6.784ZM2,12a1,1,0,1,0-1,1A1,1,0,0,0,2,12ZM12,22a1,1,0,1,0,1,1A1,1,0,0,0,12,22ZM4.221,3.207a1,1,0,1,0,1,1A1,1,0,0,0,4.221,3.207ZM7.779.841a1,1,0,1,0,1,1A1,1,0,0,0,7.779.841ZM1.827,15.216a1,1,0,1,0,1,1A1,1,0,0,0,1.827,15.216Zm2.394,3.577a1,1,0,1,0,1,1A1,1,0,0,0,4.221,18.793Zm3.558,2.366a1,1,0,1,0,1,1A1,1,0,0,0,7.779,21.159Zm14.394-5.943a1,1,0,1,0,1,1A1,1,0,0,0,22.173,15.216Zm-2.394,3.577a1,1,0,1,0,1,1A1,1,0,0,0,19.779,18.793Zm-3.558,2.366a1,1,0,1,0,1,1A1,1,0,0,0,16.221,21.159Z" />
                                    </svg></div>
                                <div class="block py-[1%] px-[4%]">
                                    <div class="">อยู่ในคิว</div>
                                </div>
                            @endif
                        </div>

                        <!-- status2 -->
                        <div class="flex justify-center items-center ">
                            <!-- left -->
                            @if ($item->order_status == 'in-process')
                                <div class="p-[4%] phone:ml-[13%]"><svg width="30px" height="30px" class="stroke-orangee"
                                        viewBox="0 0 64 64" enable-background="new 0 0 64 64" id="Layer_1"
                                        version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <g>
                                            <path
                                                d="M58.606,31.687c-0.364-0.567-0.903-0.975-1.521-1.255C56.466,30.152,55.755,30.001,55,30H41.375   c-0.111,0-0.213,0.029-0.313,0.063C40.963,30.029,40.861,30,40.75,30H6c-0.552,0-1,0.447-1,1v7c0.004,2.207,1.793,3.996,4,4h28.75   c2.207-0.004,3.996-1.793,4-4v-2H55c1.007-0.003,1.935-0.267,2.673-0.756c0.368-0.246,0.692-0.553,0.933-0.931   C58.848,33.938,59.001,33.481,59,33C59.001,32.519,58.848,32.062,58.606,31.687z M39.162,39.412C38.794,39.777,38.299,40,37.75,40   H9c-0.549,0-1.044-0.223-1.412-0.588C7.223,39.045,7,38.55,7,38v-6h32.75v6C39.75,38.55,39.527,39.045,39.162,39.412z    M56.92,33.239c-0.093,0.15-0.316,0.354-0.657,0.507C55.925,33.899,55.482,34.001,55,34H41.75v-2H55   c0.643-0.003,1.215,0.184,1.564,0.42c0.175,0.116,0.293,0.241,0.356,0.341C56.983,32.863,56.999,32.932,57,33   C56.999,33.068,56.983,33.137,56.92,33.239z"
                                                fill="#231F20" />
                                            <path
                                                d="M10,34c-0.552,0-1,0.447-1,1v2c0,0.553,0.448,1,1,1s1-0.447,1-1v-2C11,34.447,10.552,34,10,34z"
                                                fill="#231F20" />

                                            <path
                                                d="M11.524,16.687c-1.128,1.549-1.528,3.164-1.524,4.569c0.015,2.819,1.472,4.789,1.524,4.876   c0.324,0.447,0.95,0.547,1.397,0.223c0.446-0.323,0.545-0.946,0.224-1.394h0l-0.002-0.003l0,0   c-0.036-0.036-1.157-1.693-1.143-3.702c0.004-1.046,0.271-2.188,1.143-3.396c1.128-1.549,1.528-3.165,1.524-4.57   c-0.015-2.819-1.472-4.79-1.524-4.877c-0.324-0.447-0.949-0.547-1.396-0.223c-0.446,0.323-0.545,0.946-0.224,1.394h0l0.002,0.003   l0,0c0.036,0.036,1.157,1.694,1.143,3.703C12.663,14.336,12.396,15.479,11.524,16.687z"
                                                fill="#231F20" />

                                            <path
                                                d="M32.524,16.687c-1.128,1.549-1.528,3.164-1.524,4.569c0.015,2.819,1.472,4.789,1.524,4.876   c0.324,0.447,0.95,0.547,1.397,0.223c0.446-0.323,0.545-0.946,0.224-1.394h0l-0.002-0.003l0,0   c-0.036-0.036-1.157-1.693-1.143-3.702c0.004-1.046,0.271-2.188,1.143-3.396c1.128-1.549,1.528-3.165,1.524-4.57   c-0.015-2.819-1.472-4.79-1.524-4.877c-0.324-0.447-0.949-0.547-1.396-0.223c-0.446,0.323-0.545,0.946-0.224,1.394h0l0.002,0.003   l0,0c0.036,0.036,1.157,1.694,1.143,3.703C33.663,14.336,33.396,15.479,32.524,16.687z"
                                                fill="#231F20" />

                                            <path
                                                d="M22.024,16.688c-1.128,1.549-1.528,3.164-1.524,4.568c0.015,2.819,1.472,4.789,1.524,4.876   c0.324,0.447,0.95,0.547,1.397,0.223c0.446-0.323,0.545-0.946,0.224-1.394h0l-0.002-0.003l0,0   c-0.036-0.036-1.157-1.693-1.143-3.702c0.004-1.045,0.271-2.187,1.143-3.395c1.128-1.55,1.528-3.166,1.524-4.571   c-0.015-2.819-1.472-4.79-1.524-4.877c-0.324-0.447-0.95-0.547-1.396-0.223c-0.446,0.323-0.545,0.946-0.224,1.394h0l0.002,0.003   l0,0c0.036,0.036,1.156,1.693,1.143,3.703C23.163,14.336,22.896,15.479,22.024,16.688z"
                                                fill="#231F20" />

                                            <path
                                                d="M38,51h-3.765c0.041-0.075,0.087-0.146,0.125-0.224c0.333-0.693,0.515-1.495,0.515-2.35   c-0.001-0.691-0.221-1.306-0.507-1.82c-0.435-0.773-1.024-1.36-1.506-1.778C32.38,44.413,32,44.173,31.97,44.154   c-0.326-0.206-0.739-0.206-1.065,0c-0.04,0.025-0.701,0.44-1.399,1.148c-0.349,0.356-0.709,0.787-0.998,1.304   c-0.287,0.515-0.506,1.129-0.507,1.82c0.001,0.951,0.236,1.831,0.646,2.573h-2.412c0.041-0.075,0.087-0.146,0.125-0.224   c0.333-0.693,0.515-1.495,0.515-2.35c-0.001-0.691-0.221-1.306-0.507-1.82c-0.435-0.773-1.024-1.36-1.506-1.778   C24.38,44.413,24,44.173,23.97,44.154c-0.326-0.206-0.739-0.206-1.065,0c-0.04,0.025-0.701,0.44-1.399,1.148   c-0.349,0.356-0.709,0.787-0.998,1.304c-0.287,0.515-0.506,1.129-0.507,1.82c0.001,0.951,0.236,1.831,0.646,2.573h-2.205   c0.013-0.026,0.03-0.051,0.043-0.078C18.817,50.229,19,49.427,19,48.573c-0.001-0.691-0.221-1.306-0.507-1.821   c-0.435-0.773-1.024-1.36-1.506-1.778c-0.482-0.415-0.862-0.655-0.892-0.674c-0.326-0.206-0.739-0.206-1.065,0   c-0.04,0.025-0.701,0.44-1.399,1.149c-0.349,0.355-0.709,0.786-0.998,1.303c-0.287,0.516-0.506,1.13-0.507,1.821   c0.001,0.888,0.201,1.716,0.561,2.427H9c-0.552,0-1,0.447-1,1s0.448,1,1,1h29c0.552,0,1-0.447,1-1S38.552,51,38,51z M30.254,47.58   c0.251-0.456,0.689-0.916,1.065-1.237c0.042-0.036,0.078-0.063,0.117-0.096c0.174,0.143,0.365,0.309,0.556,0.508   c0.251,0.261,0.486,0.561,0.645,0.854c0.16,0.295,0.239,0.571,0.239,0.818c0.002,0.754-0.225,1.42-0.529,1.844   c-0.151,0.213-0.317,0.364-0.471,0.455c-0.156,0.091-0.292,0.128-0.438,0.129c-0.145-0.001-0.282-0.038-0.438-0.129   c-0.23-0.135-0.49-0.412-0.682-0.815C30.124,49.509,30,48.992,30,48.427C29.999,48.172,30.084,47.886,30.254,47.58z M22.254,47.58   c0.251-0.456,0.689-0.916,1.065-1.237c0.042-0.036,0.078-0.063,0.117-0.096c0.174,0.143,0.365,0.309,0.556,0.508   c0.251,0.261,0.486,0.561,0.645,0.854c0.16,0.295,0.239,0.571,0.239,0.818c0.002,0.754-0.225,1.42-0.529,1.844   c-0.151,0.213-0.317,0.364-0.471,0.455c-0.156,0.091-0.292,0.128-0.438,0.129c-0.145-0.001-0.282-0.038-0.438-0.129   c-0.23-0.135-0.49-0.412-0.682-0.815C22.124,49.509,22,48.992,22,48.427C21.999,48.172,22.084,47.886,22.254,47.58z M15.125,50.871   c-0.23-0.135-0.49-0.412-0.683-0.815c-0.193-0.401-0.318-0.917-0.317-1.482c-0.001-0.255,0.084-0.542,0.254-0.848   c0.251-0.456,0.689-0.916,1.065-1.237c0.042-0.036,0.078-0.063,0.117-0.097c0.174,0.144,0.365,0.31,0.555,0.509   c0.251,0.261,0.486,0.561,0.645,0.854C16.921,48.05,17,48.326,17,48.573c0.002,0.754-0.224,1.42-0.529,1.843   C16.32,50.629,16.154,50.78,16,50.871c-0.156,0.091-0.292,0.128-0.438,0.129C15.417,50.999,15.281,50.962,15.125,50.871z"
                                                fill="#231F20" />

                                        </g>

                                    </svg></div>
                                <!-- right -->
                                <div class="block py-[1%] px-[4%] phone:mr-[2.5%]">
                                    <div class="text-orangee">เตรียมอาหาร</div>
                                </div>
                            @else
                                <div class="p-[4%] phone:ml-[13%]"><svg width="30px" height="30px" viewBox="0 0 64 64"
                                        enable-background="new 0 0 64 64" id="Layer_1" version="1.1"
                                        xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <g>
                                            <path
                                                d="M58.606,31.687c-0.364-0.567-0.903-0.975-1.521-1.255C56.466,30.152,55.755,30.001,55,30H41.375   c-0.111,0-0.213,0.029-0.313,0.063C40.963,30.029,40.861,30,40.75,30H6c-0.552,0-1,0.447-1,1v7c0.004,2.207,1.793,3.996,4,4h28.75   c2.207-0.004,3.996-1.793,4-4v-2H55c1.007-0.003,1.935-0.267,2.673-0.756c0.368-0.246,0.692-0.553,0.933-0.931   C58.848,33.938,59.001,33.481,59,33C59.001,32.519,58.848,32.062,58.606,31.687z M39.162,39.412C38.794,39.777,38.299,40,37.75,40   H9c-0.549,0-1.044-0.223-1.412-0.588C7.223,39.045,7,38.55,7,38v-6h32.75v6C39.75,38.55,39.527,39.045,39.162,39.412z    M56.92,33.239c-0.093,0.15-0.316,0.354-0.657,0.507C55.925,33.899,55.482,34.001,55,34H41.75v-2H55   c0.643-0.003,1.215,0.184,1.564,0.42c0.175,0.116,0.293,0.241,0.356,0.341C56.983,32.863,56.999,32.932,57,33   C56.999,33.068,56.983,33.137,56.92,33.239z"
                                                fill="#231F20" />
                                            <path
                                                d="M10,34c-0.552,0-1,0.447-1,1v2c0,0.553,0.448,1,1,1s1-0.447,1-1v-2C11,34.447,10.552,34,10,34z"
                                                fill="#231F20" />

                                            <path
                                                d="M11.524,16.687c-1.128,1.549-1.528,3.164-1.524,4.569c0.015,2.819,1.472,4.789,1.524,4.876   c0.324,0.447,0.95,0.547,1.397,0.223c0.446-0.323,0.545-0.946,0.224-1.394h0l-0.002-0.003l0,0   c-0.036-0.036-1.157-1.693-1.143-3.702c0.004-1.046,0.271-2.188,1.143-3.396c1.128-1.549,1.528-3.165,1.524-4.57   c-0.015-2.819-1.472-4.79-1.524-4.877c-0.324-0.447-0.949-0.547-1.396-0.223c-0.446,0.323-0.545,0.946-0.224,1.394h0l0.002,0.003   l0,0c0.036,0.036,1.157,1.694,1.143,3.703C12.663,14.336,12.396,15.479,11.524,16.687z"
                                                fill="#231F20" />

                                            <path
                                                d="M32.524,16.687c-1.128,1.549-1.528,3.164-1.524,4.569c0.015,2.819,1.472,4.789,1.524,4.876   c0.324,0.447,0.95,0.547,1.397,0.223c0.446-0.323,0.545-0.946,0.224-1.394h0l-0.002-0.003l0,0   c-0.036-0.036-1.157-1.693-1.143-3.702c0.004-1.046,0.271-2.188,1.143-3.396c1.128-1.549,1.528-3.165,1.524-4.57   c-0.015-2.819-1.472-4.79-1.524-4.877c-0.324-0.447-0.949-0.547-1.396-0.223c-0.446,0.323-0.545,0.946-0.224,1.394h0l0.002,0.003   l0,0c0.036,0.036,1.157,1.694,1.143,3.703C33.663,14.336,33.396,15.479,32.524,16.687z"
                                                fill="#231F20" />

                                            <path
                                                d="M22.024,16.688c-1.128,1.549-1.528,3.164-1.524,4.568c0.015,2.819,1.472,4.789,1.524,4.876   c0.324,0.447,0.95,0.547,1.397,0.223c0.446-0.323,0.545-0.946,0.224-1.394h0l-0.002-0.003l0,0   c-0.036-0.036-1.157-1.693-1.143-3.702c0.004-1.045,0.271-2.187,1.143-3.395c1.128-1.55,1.528-3.166,1.524-4.571   c-0.015-2.819-1.472-4.79-1.524-4.877c-0.324-0.447-0.95-0.547-1.396-0.223c-0.446,0.323-0.545,0.946-0.224,1.394h0l0.002,0.003   l0,0c0.036,0.036,1.156,1.693,1.143,3.703C23.163,14.336,22.896,15.479,22.024,16.688z"
                                                fill="#231F20" />

                                            <path
                                                d="M38,51h-3.765c0.041-0.075,0.087-0.146,0.125-0.224c0.333-0.693,0.515-1.495,0.515-2.35   c-0.001-0.691-0.221-1.306-0.507-1.82c-0.435-0.773-1.024-1.36-1.506-1.778C32.38,44.413,32,44.173,31.97,44.154   c-0.326-0.206-0.739-0.206-1.065,0c-0.04,0.025-0.701,0.44-1.399,1.148c-0.349,0.356-0.709,0.787-0.998,1.304   c-0.287,0.515-0.506,1.129-0.507,1.82c0.001,0.951,0.236,1.831,0.646,2.573h-2.412c0.041-0.075,0.087-0.146,0.125-0.224   c0.333-0.693,0.515-1.495,0.515-2.35c-0.001-0.691-0.221-1.306-0.507-1.82c-0.435-0.773-1.024-1.36-1.506-1.778   C24.38,44.413,24,44.173,23.97,44.154c-0.326-0.206-0.739-0.206-1.065,0c-0.04,0.025-0.701,0.44-1.399,1.148   c-0.349,0.356-0.709,0.787-0.998,1.304c-0.287,0.515-0.506,1.129-0.507,1.82c0.001,0.951,0.236,1.831,0.646,2.573h-2.205   c0.013-0.026,0.03-0.051,0.043-0.078C18.817,50.229,19,49.427,19,48.573c-0.001-0.691-0.221-1.306-0.507-1.821   c-0.435-0.773-1.024-1.36-1.506-1.778c-0.482-0.415-0.862-0.655-0.892-0.674c-0.326-0.206-0.739-0.206-1.065,0   c-0.04,0.025-0.701,0.44-1.399,1.149c-0.349,0.355-0.709,0.786-0.998,1.303c-0.287,0.516-0.506,1.13-0.507,1.821   c0.001,0.888,0.201,1.716,0.561,2.427H9c-0.552,0-1,0.447-1,1s0.448,1,1,1h29c0.552,0,1-0.447,1-1S38.552,51,38,51z M30.254,47.58   c0.251-0.456,0.689-0.916,1.065-1.237c0.042-0.036,0.078-0.063,0.117-0.096c0.174,0.143,0.365,0.309,0.556,0.508   c0.251,0.261,0.486,0.561,0.645,0.854c0.16,0.295,0.239,0.571,0.239,0.818c0.002,0.754-0.225,1.42-0.529,1.844   c-0.151,0.213-0.317,0.364-0.471,0.455c-0.156,0.091-0.292,0.128-0.438,0.129c-0.145-0.001-0.282-0.038-0.438-0.129   c-0.23-0.135-0.49-0.412-0.682-0.815C30.124,49.509,30,48.992,30,48.427C29.999,48.172,30.084,47.886,30.254,47.58z M22.254,47.58   c0.251-0.456,0.689-0.916,1.065-1.237c0.042-0.036,0.078-0.063,0.117-0.096c0.174,0.143,0.365,0.309,0.556,0.508   c0.251,0.261,0.486,0.561,0.645,0.854c0.16,0.295,0.239,0.571,0.239,0.818c0.002,0.754-0.225,1.42-0.529,1.844   c-0.151,0.213-0.317,0.364-0.471,0.455c-0.156,0.091-0.292,0.128-0.438,0.129c-0.145-0.001-0.282-0.038-0.438-0.129   c-0.23-0.135-0.49-0.412-0.682-0.815C22.124,49.509,22,48.992,22,48.427C21.999,48.172,22.084,47.886,22.254,47.58z M15.125,50.871   c-0.23-0.135-0.49-0.412-0.683-0.815c-0.193-0.401-0.318-0.917-0.317-1.482c-0.001-0.255,0.084-0.542,0.254-0.848   c0.251-0.456,0.689-0.916,1.065-1.237c0.042-0.036,0.078-0.063,0.117-0.097c0.174,0.144,0.365,0.31,0.555,0.509   c0.251,0.261,0.486,0.561,0.645,0.854C16.921,48.05,17,48.326,17,48.573c0.002,0.754-0.224,1.42-0.529,1.843   C16.32,50.629,16.154,50.78,16,50.871c-0.156,0.091-0.292,0.128-0.438,0.129C15.417,50.999,15.281,50.962,15.125,50.871z"
                                                fill="#231F20" />

                                        </g>

                                    </svg></div>
                                <!-- right -->
                                <div class="block py-[1%] px-[4%] phone:mr-[2.5%]">
                                    <div>เตรียมอาหาร</div>
                                </div>
                            @endif
                        </div>
                        <!-- status3 -->
                        <div class="flex mx-auto justify-center items-center ">
                            <!-- left -->
                            @if ($item->order_status == 'serving')
                                <div class="p-[4%]"><svg width="30px" height="30px" viewBox="0 0 64 64"
                                        class="stroke-yellow-300" enable-background="new 0 0 64 64" id="Layer_1"
                                        version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink">

                                        <g>

                                            <path
                                                d="M58.923,50.382c0.102-0.244,0.102-0.52,0-0.764c-0.102-0.245-0.296-0.439-0.541-0.541   C58.26,49.026,58.13,49,58,49h-2.5c-0.001-12.645-9.988-22.952-22.505-23.475c0-0.009,0.005-0.017,0.005-0.025v-2.663   c1.442-0.433,2.499-1.753,2.5-3.337c-0.001-1.934-1.566-3.499-3.5-3.5c-1.934,0.001-3.499,1.566-3.5,3.5   c0.001,1.584,1.058,2.904,2.5,3.337V25.5c0,0.009,0.005,0.017,0.005,0.025C18.488,26.048,8.501,36.355,8.5,49H6   c-0.13,0-0.26,0.026-0.382,0.077c-0.245,0.102-0.439,0.296-0.541,0.541c-0.102,0.244-0.102,0.52,0,0.764   c0.051,0.123,0.124,0.234,0.217,0.326l5.878,5.878c0.72,0.715,1.679,1.287,2.703,1.715C14.902,58.723,15.985,58.996,17,59h30   c1.015-0.004,2.098-0.277,3.125-0.699c1.024-0.428,1.983-1,2.703-1.715l5.878-5.878C58.799,50.616,58.872,50.505,58.923,50.382z    M30.5,19.5c0.002-0.828,0.672-1.498,1.5-1.5c0.828,0.002,1.498,0.672,1.5,1.5c-0.002,0.828-0.672,1.498-1.5,1.5   C31.172,20.998,30.502,20.328,30.5,19.5z M16.798,33.798C20.691,29.905,26.061,27.5,32,27.5s11.309,2.405,15.202,6.298   C51.095,37.691,53.499,43.061,53.5,49h-43C10.5,43.061,12.905,37.691,16.798,33.798z M51.414,55.172   c-0.446,0.451-1.223,0.939-2.055,1.281C48.53,56.8,47.636,57.004,47,57H17c-0.636,0.004-1.53-0.2-2.359-0.547   c-0.832-0.342-1.608-0.83-2.055-1.281L8.414,51h47.172L51.414,55.172z"
                                                fill="#231F20" />

                                            <path
                                                d="M24.684,32.052c-3.209,1.068-5.364,2.95-6.702,4.558c-1.34,1.61-1.882,2.95-1.91,3.02   c-0.205,0.513,0.045,1.095,0.558,1.3s1.095-0.045,1.3-0.558V40.37c0.032-0.078,0.534-1.251,1.7-2.611   c1.168-1.361,2.983-2.908,5.688-3.811c0.523-0.174,0.807-0.74,0.632-1.265C25.774,32.16,25.208,31.877,24.684,32.052z"
                                                fill="#231F20" />

                                        </g>

                                    </svg></div>
                                <!-- right -->
                                <div class="block py-[1%] px-[4%]">
                                    <div class="text-yellow-300">รอเสิร์ฟ</div>
                                </div>
                            @else
                                <div class="p-[4%]"><svg width="30px" height="30px" viewBox="0 0 64 64"
                                        enable-background="new 0 0 64 64" id="Layer_1" version="1.1"
                                        xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink">

                                        <g>

                                            <path
                                                d="M58.923,50.382c0.102-0.244,0.102-0.52,0-0.764c-0.102-0.245-0.296-0.439-0.541-0.541   C58.26,49.026,58.13,49,58,49h-2.5c-0.001-12.645-9.988-22.952-22.505-23.475c0-0.009,0.005-0.017,0.005-0.025v-2.663   c1.442-0.433,2.499-1.753,2.5-3.337c-0.001-1.934-1.566-3.499-3.5-3.5c-1.934,0.001-3.499,1.566-3.5,3.5   c0.001,1.584,1.058,2.904,2.5,3.337V25.5c0,0.009,0.005,0.017,0.005,0.025C18.488,26.048,8.501,36.355,8.5,49H6   c-0.13,0-0.26,0.026-0.382,0.077c-0.245,0.102-0.439,0.296-0.541,0.541c-0.102,0.244-0.102,0.52,0,0.764   c0.051,0.123,0.124,0.234,0.217,0.326l5.878,5.878c0.72,0.715,1.679,1.287,2.703,1.715C14.902,58.723,15.985,58.996,17,59h30   c1.015-0.004,2.098-0.277,3.125-0.699c1.024-0.428,1.983-1,2.703-1.715l5.878-5.878C58.799,50.616,58.872,50.505,58.923,50.382z    M30.5,19.5c0.002-0.828,0.672-1.498,1.5-1.5c0.828,0.002,1.498,0.672,1.5,1.5c-0.002,0.828-0.672,1.498-1.5,1.5   C31.172,20.998,30.502,20.328,30.5,19.5z M16.798,33.798C20.691,29.905,26.061,27.5,32,27.5s11.309,2.405,15.202,6.298   C51.095,37.691,53.499,43.061,53.5,49h-43C10.5,43.061,12.905,37.691,16.798,33.798z M51.414,55.172   c-0.446,0.451-1.223,0.939-2.055,1.281C48.53,56.8,47.636,57.004,47,57H17c-0.636,0.004-1.53-0.2-2.359-0.547   c-0.832-0.342-1.608-0.83-2.055-1.281L8.414,51h47.172L51.414,55.172z"
                                                fill="#231F20" />

                                            <path
                                                d="M24.684,32.052c-3.209,1.068-5.364,2.95-6.702,4.558c-1.34,1.61-1.882,2.95-1.91,3.02   c-0.205,0.513,0.045,1.095,0.558,1.3s1.095-0.045,1.3-0.558V40.37c0.032-0.078,0.534-1.251,1.7-2.611   c1.168-1.361,2.983-2.908,5.688-3.811c0.523-0.174,0.807-0.74,0.632-1.265C25.774,32.16,25.208,31.877,24.684,32.052z"
                                                fill="#231F20" />

                                        </g>

                                    </svg></div>
                                <!-- right -->
                                <div class="block py-[1%] px-[4%]">
                                    <div>รอเสิร์ฟ</div>
                                </div>
                            @endif
                        </div>

                        <!-- status4 -->
                        <div class="flex mx-auto justify-center items-center ">
                            <!-- left -->
                            @if ($item->order_status == 'done')
                                <div class="p-[4%]">

                                    <svg fill="#000000" width="30px" height="30px" class="stroke-green-500"
                                        viewBox="0 0 50 50" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M25 42c-9.4 0-17-7.6-17-17S15.6 8 25 8s17 7.6 17 17-7.6 17-17 17zm0-32c-8.3 0-15 6.7-15 15s6.7 15 15 15 15-6.7 15-15-6.7-15-15-15z" />
                                        <path d="M23 32.4l-8.7-8.7 1.4-1.4 7.3 7.3 11.3-11.3 1.4 1.4z" />
                                    </svg>
                                </div>
                                <!-- right -->
                                <div class="block py-[1%] px-[4%]">
                                    <div class="text-green-500">เสร็จสิ้น</div>
                                </div>
                            @else
                                <div class="p-[4%]">

                                    <svg fill="#000000" width="30px" height="30px" viewBox="0 0 50 50"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M25 42c-9.4 0-17-7.6-17-17S15.6 8 25 8s17 7.6 17 17-7.6 17-17 17zm0-32c-8.3 0-15 6.7-15 15s6.7 15 15 15 15-6.7 15-15-6.7-15-15-15z" />
                                        <path d="M23 32.4l-8.7-8.7 1.4-1.4 7.3 7.3 11.3-11.3 1.4 1.4z" />
                                    </svg>
                                </div>
                                <!-- right -->
                                <div class="block py-[1%] px-[4%]">
                                    <div>เสร็จสิ้น</div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        @endif
    @endforeach
</div>
@endsection
