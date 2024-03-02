@extends('layouts.app')
@section('title', 'Waiter')
@section('page_name', 'หน้าเสิร์ฟอาหาร')

@section('content')
{{-- @livewire('reservation-list' , ['lazy' => true]) --}}
{{-- กรอบนอกสุด --}}
<div class="h-seceen">

    {{-- ปุ่ม --}}
    <div class="flex space-x-4 py-[20px] px-[60px]">
        <a href="{{ route('waiter.readytoserve') }}" class="text-3xl text-center  font-bold p-5 border-solid border-2 border-black hover:bg-green-400">ออร์เดอร์ใหม่</a>
        <a href="{{ route('waiter.servedone') }}" class="text-3xl text-center font-bold p-5 border-solid border-2 border-black hover:bg-green-400">เสร็จสิ้น</a>
    </div>

    {{-- กรอบกรอบสีครีม --}}
    <div class="w-full justify-center h-[90%] flex flex-wrap gap-[30px] px-[60px]">

        {{-- กรอบซ้าย --}}
        <div class="w-[48%] h-[1000px] bg-cream rounded-[32px] flex flex-col items-center gap-[20px] py-[2%]">
            <button class="text-4xl w-[90%] border border-black flex justify-between p-6">
                <p>โต๊ะที่ 1</p>
                <p>เวลา</p>
            </button>
            <button class="text-4xl w-[90%] border border-black flex justify-between p-6">
                <p>โต๊ะที่ 1</p>
                <p>เวลา</p>
            </button>
        </div>

        {{-- กรอบขขวา --}}
        <div class="w-[48%] h-[1000px] bg-cream rounded-[32px]">

            {{-- หัวโต๊ะส่วนที่ 1 --}}
            <div class="text-4xl pt-[50px] px-[10%]">
                <div class="flex justify-between">
                    <div>โต๊ะที่ 1</div>
                    <div>เวลา</div>
                </div>
                <hr class="h-[2px] w-[700px] bg-black mx-auto mt-[10px]">
            </div>

            {{-- ส่วนรายการอาหาร --}}
            <div class="overflow-scroll m-[4%] max-h-[60%]">

                {{-- food1 --}}
                <div class="flex justify-between px-[10%] mt-[1%] mb-[4%]">
                    <div><p class="text-[32px] font-bold">1. ข้าวผัด</p></div>
                    <div class="flex justify-between space-x-[140px]">
                        <div><button><svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_144_704)">
                            <path d="M41.3682 10.7368C41.8916 10.7368 42.3156 10.3127 42.3156 9.78949V0.947344C42.3156 0.423984 41.8916 0 41.3682 0C40.8449 0 40.4209 0.424102 40.4209 0.947344V9.78949C40.4209 10.3129 40.845 10.7368 41.3682 10.7368Z" fill="black"/>
                            <path d="M57.1579 32.8422H52.1415C52.2295 31.8775 51.9083 30.9144 51.2578 30.1956C50.6006 29.4693 49.6618 29.0527 48.6823 29.0527H44.6287C44.2733 28.3066 43.5117 27.7896 42.6315 27.7896H36.3157C35.0968 27.7896 34.1052 28.7813 34.1052 30.0001V36.2583C34.1052 38.088 35.452 39.599 37.2382 39.7729C37.4585 39.7944 37.6782 39.7952 37.8947 39.7751V40.0447C37.8947 41.9583 39.3653 43.5099 41.2426 43.5766C42.1965 43.6086 43.0962 43.2653 43.7805 42.6049C44.4652 41.9443 44.8422 41.0563 44.8422 40.1053V30.9474H48.6821C49.134 30.9474 49.5498 31.132 49.8529 31.4668C50.156 31.8019 50.2983 32.2339 50.2533 32.6834L50.1532 33.6844C50.1525 33.6908 50.1518 33.6971 50.1512 33.7035L48.9146 46.069C48.4445 50.7704 44.5269 54.3157 39.8021 54.3157H20.1979C15.473 54.3157 11.5555 50.7704 11.0855 46.069L9.74684 32.6835C9.70184 32.234 9.8441 31.8018 10.1473 31.4669C10.4504 31.132 10.8662 30.9475 11.318 30.9475H31.2633C31.7866 30.9475 32.2106 30.5234 32.2106 30.0002C32.2106 29.4768 31.7866 29.0528 31.2633 29.0528H11.318C10.3384 29.0528 9.39961 29.4694 8.74242 30.1958C8.09191 30.9146 7.7707 31.8776 7.85871 32.8423H2.84215C1.275 32.8422 0 34.1172 0 35.6842V36.9474C0 38.5144 1.275 39.7896 2.84215 39.7896H6C6.52336 39.7896 6.94734 39.3655 6.94734 38.8422C6.94734 38.319 6.52324 37.8949 6 37.8949H2.84215C2.31973 37.8949 1.8948 37.4699 1.8948 36.9475V35.6844C1.8948 35.1619 2.31973 34.737 2.84215 34.737H8.04797L9.19992 46.2577C9.76734 51.9318 14.4954 56.2107 20.1977 56.2107H39.8021C45.5044 56.2107 50.2325 51.9318 50.8 46.2577L51.9519 34.737H57.1577C57.6802 34.737 58.1051 35.1619 58.1051 35.6844V36.9475C58.1051 37.4699 57.6802 37.8949 57.1577 37.8949H54C53.4766 37.8949 53.0527 38.319 53.0527 38.8422C53.0527 39.3655 53.4768 39.7896 54 39.7896H57.1579C58.7249 39.7896 60 38.5146 60 36.9474V35.6842C60 34.1172 58.725 32.8422 57.1579 32.8422ZM42.9473 40.1055C42.9473 40.5379 42.7759 40.9415 42.4646 41.2419C42.1536 41.5421 41.7442 41.6976 41.3099 41.6834C40.4715 41.6535 39.7894 40.9184 39.7894 40.0449V38.5015C39.7894 38.1628 39.6084 37.85 39.3152 37.6808C39.1687 37.5964 39.0054 37.5542 38.842 37.5542C38.6781 37.5542 38.514 37.5967 38.3672 37.6818C38.0795 37.8485 37.7525 37.9192 37.4216 37.8874C36.6244 37.8097 35.9999 37.0942 35.9999 36.2586V30.0001C35.9999 29.8259 36.1414 29.6842 36.3157 29.6842H42.6315C42.8057 29.6842 42.9473 29.8258 42.9473 30.0001V40.1055Z" fill="black"/>                                <path d="M45.1578 10.7368C45.6812 10.7368 46.1051 10.3127 46.1051 9.78949V0.947344C46.1051 0.423984 45.6812 0 45.1578 0C44.6344 0 44.2104 0.424102 44.2104 0.947344V9.78949C44.2104 10.3129 44.6345 10.7368 45.1578 10.7368Z" fill="black"/>
                            <path d="M52.7369 58.1052H6.00008C5.47672 58.1052 5.05273 58.5293 5.05273 59.0526C5.05273 59.5759 5.47684 59.9999 6.00008 59.9999H52.7369C53.2603 59.9999 53.6843 59.5759 53.6843 59.0526C53.6843 58.5292 53.2603 58.1052 52.7369 58.1052Z" fill="black"/>
                            <path d="M10.7126 25.3838C10.832 25.3838 10.9525 25.3786 11.0736 25.368L50.0823 21.9553C52.3374 21.7578 54.0115 19.7629 53.8142 17.5077C53.6167 15.2527 51.6216 13.5782 49.3667 13.7759L37.0976 14.8493L36.96 13.2763C36.793 11.3683 35.1014 9.95265 33.1968 10.1187L25.6468 10.7792C23.7386 10.9462 22.3221 12.6344 22.489 14.5424L22.6267 16.1153L10.3578 17.1887C9.26535 17.2844 8.27559 17.7996 7.5707 18.6396C6.86582 19.4796 6.53031 20.5438 6.62582 21.6364C6.81297 23.7702 8.60934 25.3839 10.7126 25.3838ZM9.02219 19.8575C9.40176 19.4051 9.93484 19.1276 10.5229 19.0762L23.7289 17.9208C23.7312 17.9207 23.7334 17.9205 23.7357 17.9203C23.7381 17.9201 23.7404 17.9199 23.7426 17.9198L26.2929 17.6965C26.8142 17.6509 27.1996 17.1914 27.1541 16.6702C27.1086 16.1491 26.6477 15.7648 26.1278 15.809L24.5143 15.9502L24.3767 14.3773C24.3399 13.9571 24.4689 13.5478 24.74 13.2246C25.011 12.9016 25.3918 12.7035 25.8119 12.6667L33.3619 12.0062C34.2296 11.9309 34.9964 12.574 35.0725 13.4414L35.2102 15.0144L29.9173 15.4776C29.3961 15.5232 29.0106 15.9827 29.0561 16.5039C29.1017 17.0252 29.5615 17.4108 30.0824 17.3651L49.5319 15.6634C50.748 15.5583 51.8205 16.4587 51.9268 17.6728C52.033 18.887 51.1315 19.9614 49.9173 20.0677L10.9083 23.4804C10.3207 23.532 9.74723 23.3513 9.29488 22.9718C8.84254 22.5923 8.56504 22.0592 8.51359 21.4711C8.46215 20.8828 8.64262 20.3098 9.02219 19.8575Z" fill="black"/>
                            </g>
                            <defs>
                            <clipPath id="clip0_144_704">
                            <rect width="60" height="60" fill="white"/>
                            </clipPath>
                            </defs>
                            </svg>
                        </button></div>
                        <div><button><svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_144_745)">
                            <path d="M29.9994 0C13.457 0 0 13.458 0 30C0 46.542 13.457 60 29.9994 60C46.5419 60 60 46.542 60 30C60 13.458 46.5419 0 29.9994 0ZM29.9994 56.0655C15.627 56.0655 3.9345 44.3724 3.9345 30C3.9345 15.6274 15.6269 3.93465 29.9994 3.93465C44.372 3.93465 56.0651 15.6276 56.0651 30C56.0652 44.3724 44.3718 56.0655 29.9994 56.0655Z" fill="black"/>
                            <path d="M40.8611 20.179L25.3914 35.6479L19.1381 29.3959C18.3696 28.6284 17.1248 28.6279 16.3563 29.3964C15.5876 30.1651 15.5876 31.4101 16.3563 32.1786L24.0008 39.8218C24.3849 40.2055 24.8882 40.3975 25.3914 40.3975C25.8947 40.3975 26.3993 40.2055 26.7833 39.8212C26.7845 39.8196 26.7854 39.8179 26.7873 39.816L43.6427 22.9608C44.4114 22.1928 44.4114 20.9469 43.6427 20.1789C42.8744 19.4104 41.6286 19.4104 40.8611 20.179Z" fill="black"/>
                            </g>
                            <defs>
                            <clipPath id="clip0_144_745">
                            <rect width="60" height="60" fill="white"/>
                            </clipPath>
                            </defs>
                            </svg>
                        </button></div>
                    </div>
                </div>

                {{-- food2 --}}
                <div class="flex justify-between px-[10%] mt-[1%] mb-[4%]">
                    <div><p class="text-[32px] font-bold">1. ข้าวผัด</p></div>
                    <div class="flex justify-between space-x-[140px]">
                        <div><button><svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_144_704)">
                            <path d="M41.3682 10.7368C41.8916 10.7368 42.3156 10.3127 42.3156 9.78949V0.947344C42.3156 0.423984 41.8916 0 41.3682 0C40.8449 0 40.4209 0.424102 40.4209 0.947344V9.78949C40.4209 10.3129 40.845 10.7368 41.3682 10.7368Z" fill="black"/>
                            <path d="M57.1579 32.8422H52.1415C52.2295 31.8775 51.9083 30.9144 51.2578 30.1956C50.6006 29.4693 49.6618 29.0527 48.6823 29.0527H44.6287C44.2733 28.3066 43.5117 27.7896 42.6315 27.7896H36.3157C35.0968 27.7896 34.1052 28.7813 34.1052 30.0001V36.2583C34.1052 38.088 35.452 39.599 37.2382 39.7729C37.4585 39.7944 37.6782 39.7952 37.8947 39.7751V40.0447C37.8947 41.9583 39.3653 43.5099 41.2426 43.5766C42.1965 43.6086 43.0962 43.2653 43.7805 42.6049C44.4652 41.9443 44.8422 41.0563 44.8422 40.1053V30.9474H48.6821C49.134 30.9474 49.5498 31.132 49.8529 31.4668C50.156 31.8019 50.2983 32.2339 50.2533 32.6834L50.1532 33.6844C50.1525 33.6908 50.1518 33.6971 50.1512 33.7035L48.9146 46.069C48.4445 50.7704 44.5269 54.3157 39.8021 54.3157H20.1979C15.473 54.3157 11.5555 50.7704 11.0855 46.069L9.74684 32.6835C9.70184 32.234 9.8441 31.8018 10.1473 31.4669C10.4504 31.132 10.8662 30.9475 11.318 30.9475H31.2633C31.7866 30.9475 32.2106 30.5234 32.2106 30.0002C32.2106 29.4768 31.7866 29.0528 31.2633 29.0528H11.318C10.3384 29.0528 9.39961 29.4694 8.74242 30.1958C8.09191 30.9146 7.7707 31.8776 7.85871 32.8423H2.84215C1.275 32.8422 0 34.1172 0 35.6842V36.9474C0 38.5144 1.275 39.7896 2.84215 39.7896H6C6.52336 39.7896 6.94734 39.3655 6.94734 38.8422C6.94734 38.319 6.52324 37.8949 6 37.8949H2.84215C2.31973 37.8949 1.8948 37.4699 1.8948 36.9475V35.6844C1.8948 35.1619 2.31973 34.737 2.84215 34.737H8.04797L9.19992 46.2577C9.76734 51.9318 14.4954 56.2107 20.1977 56.2107H39.8021C45.5044 56.2107 50.2325 51.9318 50.8 46.2577L51.9519 34.737H57.1577C57.6802 34.737 58.1051 35.1619 58.1051 35.6844V36.9475C58.1051 37.4699 57.6802 37.8949 57.1577 37.8949H54C53.4766 37.8949 53.0527 38.319 53.0527 38.8422C53.0527 39.3655 53.4768 39.7896 54 39.7896H57.1579C58.7249 39.7896 60 38.5146 60 36.9474V35.6842C60 34.1172 58.725 32.8422 57.1579 32.8422ZM42.9473 40.1055C42.9473 40.5379 42.7759 40.9415 42.4646 41.2419C42.1536 41.5421 41.7442 41.6976 41.3099 41.6834C40.4715 41.6535 39.7894 40.9184 39.7894 40.0449V38.5015C39.7894 38.1628 39.6084 37.85 39.3152 37.6808C39.1687 37.5964 39.0054 37.5542 38.842 37.5542C38.6781 37.5542 38.514 37.5967 38.3672 37.6818C38.0795 37.8485 37.7525 37.9192 37.4216 37.8874C36.6244 37.8097 35.9999 37.0942 35.9999 36.2586V30.0001C35.9999 29.8259 36.1414 29.6842 36.3157 29.6842H42.6315C42.8057 29.6842 42.9473 29.8258 42.9473 30.0001V40.1055Z" fill="black"/>                                <path d="M45.1578 10.7368C45.6812 10.7368 46.1051 10.3127 46.1051 9.78949V0.947344C46.1051 0.423984 45.6812 0 45.1578 0C44.6344 0 44.2104 0.424102 44.2104 0.947344V9.78949C44.2104 10.3129 44.6345 10.7368 45.1578 10.7368Z" fill="black"/>
                            <path d="M52.7369 58.1052H6.00008C5.47672 58.1052 5.05273 58.5293 5.05273 59.0526C5.05273 59.5759 5.47684 59.9999 6.00008 59.9999H52.7369C53.2603 59.9999 53.6843 59.5759 53.6843 59.0526C53.6843 58.5292 53.2603 58.1052 52.7369 58.1052Z" fill="black"/>
                            <path d="M10.7126 25.3838C10.832 25.3838 10.9525 25.3786 11.0736 25.368L50.0823 21.9553C52.3374 21.7578 54.0115 19.7629 53.8142 17.5077C53.6167 15.2527 51.6216 13.5782 49.3667 13.7759L37.0976 14.8493L36.96 13.2763C36.793 11.3683 35.1014 9.95265 33.1968 10.1187L25.6468 10.7792C23.7386 10.9462 22.3221 12.6344 22.489 14.5424L22.6267 16.1153L10.3578 17.1887C9.26535 17.2844 8.27559 17.7996 7.5707 18.6396C6.86582 19.4796 6.53031 20.5438 6.62582 21.6364C6.81297 23.7702 8.60934 25.3839 10.7126 25.3838ZM9.02219 19.8575C9.40176 19.4051 9.93484 19.1276 10.5229 19.0762L23.7289 17.9208C23.7312 17.9207 23.7334 17.9205 23.7357 17.9203C23.7381 17.9201 23.7404 17.9199 23.7426 17.9198L26.2929 17.6965C26.8142 17.6509 27.1996 17.1914 27.1541 16.6702C27.1086 16.1491 26.6477 15.7648 26.1278 15.809L24.5143 15.9502L24.3767 14.3773C24.3399 13.9571 24.4689 13.5478 24.74 13.2246C25.011 12.9016 25.3918 12.7035 25.8119 12.6667L33.3619 12.0062C34.2296 11.9309 34.9964 12.574 35.0725 13.4414L35.2102 15.0144L29.9173 15.4776C29.3961 15.5232 29.0106 15.9827 29.0561 16.5039C29.1017 17.0252 29.5615 17.4108 30.0824 17.3651L49.5319 15.6634C50.748 15.5583 51.8205 16.4587 51.9268 17.6728C52.033 18.887 51.1315 19.9614 49.9173 20.0677L10.9083 23.4804C10.3207 23.532 9.74723 23.3513 9.29488 22.9718C8.84254 22.5923 8.56504 22.0592 8.51359 21.4711C8.46215 20.8828 8.64262 20.3098 9.02219 19.8575Z" fill="black"/>
                            </g>
                            <defs>
                            <clipPath id="clip0_144_704">
                            <rect width="60" height="60" fill="white"/>
                            </clipPath>
                            </defs>
                            </svg>
                        </button></div>
                        <div><button><svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_144_745)">
                            <path d="M29.9994 0C13.457 0 0 13.458 0 30C0 46.542 13.457 60 29.9994 60C46.5419 60 60 46.542 60 30C60 13.458 46.5419 0 29.9994 0ZM29.9994 56.0655C15.627 56.0655 3.9345 44.3724 3.9345 30C3.9345 15.6274 15.6269 3.93465 29.9994 3.93465C44.372 3.93465 56.0651 15.6276 56.0651 30C56.0652 44.3724 44.3718 56.0655 29.9994 56.0655Z" fill="black"/>
                            <path d="M40.8611 20.179L25.3914 35.6479L19.1381 29.3959C18.3696 28.6284 17.1248 28.6279 16.3563 29.3964C15.5876 30.1651 15.5876 31.4101 16.3563 32.1786L24.0008 39.8218C24.3849 40.2055 24.8882 40.3975 25.3914 40.3975C25.8947 40.3975 26.3993 40.2055 26.7833 39.8212C26.7845 39.8196 26.7854 39.8179 26.7873 39.816L43.6427 22.9608C44.4114 22.1928 44.4114 20.9469 43.6427 20.1789C42.8744 19.4104 41.6286 19.4104 40.8611 20.179Z" fill="black"/>
                            </g>
                            <defs>
                            <clipPath id="clip0_144_745">
                            <rect width="60" height="60" fill="white"/>
                            </clipPath>
                            </defs>
                            </svg>
                        </button></div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>
@endsection
