<div class="show relative" >
    <div wire:loading class="w-full justify-center flex mt-[-40px] z-[120]">
        @include('loading')
    </div>
    
    <div class=" flex justify-between items-center h-[120px]">
        <div class="relative z-0 w-[18%] group">
            <select wire:model.live="setCategory" name="category_id" class="text-lightcream py-3 border font-bold text-center bg-darkgreen border-gray-300 text-xl rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value="" selected>เลือกหมวดหมู่</option>
                <option value="อาหารทานเล่น">อาหารทานเล่น</option>   
                <option value="อาหารจานหลัก">อาหารจานหลัก</option>
                <option value="เครื่องดื่ม">เครื่องดื่ม</option>
            </select>
        </div>
        <div class="mb-[25px] scale-[1.2] flex flex-column sm:flex-row flex-wrap space-y-4 sm:space-y-0 items-center justify-around">
            <label for="table-search" class="sr-only">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 rtl:inset-r-0 rtl:right-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                </div>
                <input wire:model.lazy="search" class="block p-2 ps-10 text-sm text-gray-900 outline-none border-b border-black bg-lightcream w-80 dark:bg-gray-700 focus:border-b-3 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" placeholder="ค้นหาชื่อเมนู">
            </div>
        </div>

        {{-- <livewire:add-employee /> --}}
        <div>
            <button type="button" wire:click="toggleModal" class="text-white scale-[1.4] bg-darkgreen hover:bg-green-900 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">+ เพิ่มเมนู</button>

            @if($isModalOpen)
                <div id="createEmployeeModal" tabindex="-1" aria-hidden="true" class="fixed inset-0 z-50 overflow-y-auto bg-gray-500 bg-opacity-75">
                    <div class="flex items-center justify-center min-h-screen">
                        <div class="relative z-10 w-full max-w-3xl p-6 bg-lightcream rounded-lg shadow-xl">
                            {{-- <button wire:click="$set('showModal', false)" class="absolute top-0 right-0 p-2 text-gray-500 hover:text-gray-700 focus:outline-none">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                            </button> --}}
                            <form action="{{ route('manager.addmenu') }}" method="POST" class="max-w-2xl mx-auto py-[50px] text-darkgreen flex flex-col gap-[45px]">
                                <h1 class="text-5xl text-center font-bold">เพิ่มเมนู</h1>
                                @csrf
                                <div class="flex md:gap-6 gap-8">
                                    <div class="w-1/2">
                                        <div class="relative z-0 w-full mb-5 group">
                                            <input type="text" name="menu_name" id="first_name" class="block py-2.5 px-0 w-full text-xl text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-darkgreen peer" value="{{$menu_name}}" placeholder=" " required />
                                            <label for="first_name" class="peer-focus:font-medium absolute text-xl text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-8 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-darkgreen peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-8">ชื่อเมนู</label>
                                        </div>
                                        <div class="relative z-0 w-full mb-5 group">
                                            <input type="text" name="price" id="last_name" class="block py-2.5 px-0 w-full text-xl text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-darkgreen peer" value="{{$price}}" placeholder=" " required />
                                            <label for="last_name" class="peer-focus:font-medium absolute text-xl text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-8 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-darkgreen peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-8">ราคา</label>
                                        </div>
                                        
                                        <div class="relative z-0 w-full mb-5 group">
                                            <label for="countries" class="block mb-2 text-xl font-medium text-gray-900 ">หมวดหมู่</label>
                                            <select wire:model.live="setTypes" name="category_id" class="bg-lightcream border border-gray-300 text-gray-900 text-xl rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                <option selected>เลือกหมวดหมู่</option>
                                                <option value="1">อาหารทานเล่น</option>   
                                                <option value="2">อาหารจานหลัก</option>
                                                <option value="3">เครื่องดื่ม/ของหวาน</option>
                                            </select>
                                        </div>
                                        @if ($setTypes == 2)
                                            <div class="relative z-0 w-full mb-5 group">
                                                <label for="countries" class="block mb-2 text-xl font-medium text-gray-900 ">ประเภท</label>
                                                <select name="types" class="bg-lightcream border border-gray-300 text-gray-900 text-xl rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                    <option selected>เลือกประเภท</option>
                                                    <option value="เมนูเส้น">เมนูเส้น</option>   
                                                    <option value="ข้าว/อื่นๆ">ข้าว/อื่นๆ</option>
                                                    <option value="สเต๊ก">สเต๊ก</option>
                                                </select>
                                            </div>
                                        @elseif ($setTypes == 3)
                                            <div class="relative z-0 w-full mb-5 group">
                                                <label for="countries" class="block mb-2 text-xl font-medium text-gray-900 ">ประเภท</label>
                                                <select name="types" class="bg-lightcream border border-gray-300 text-gray-900 text-xl rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                    <option selected>เลือกประเภท</option>
                                                    <option value="กาแฟ/ชา">กาแฟ/ชา</option>   
                                                    <option value="ไวน์">ไวน์</option>
                                                    <option value="อื่นๆ">อื่นๆ</option>
                                                    <option value="ของหวาน">ของหวาน</option> 
                                                </select>
                                            </div>
                                        @endif
                                    </div>
                                    
                                    <div class="w-1/2 h-full gap-6">
                                        <div class="">
                                            <label for="message" class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">คำอธิบาย</label>
                                            <textarea id="message" name="detail" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="ใส่คำอธิบาย">{{$detail}}</textarea>
                                        </div>
                                        <div class="">
                                            <label for="message" class="block mb-2 text-start text-lg font-medium text-gray-900 dark:text-white">ภาพอาหาร</label>
                                            <div>
                                                <div class="w-[30%]"></div>
                                                <img src="{{$setPic}}" width="120" alt="">
                                                <div class="w-[30%]"></div>
                                            </div>
                                            <input wire:model.live="setPic" type="text" name="menu_img" id="last_name" class="block py-2.5 px-0 w-full text-xl text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-darkgreen peer" placeholder=" " required />
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="flex justify-between">
                                    <button type="button" wire:click="toggleModal" class="text-white scale-[1.3] bg-darkgreen hover:bg-green-900 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">ยกเลิก</button>
                                    <button type="submit" class="text-white scale-[1.3] bg-darkgreen hover:bg-green-900 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">ยืนยัน</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
    <table class="bg-transparent w-full text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-gray-700 border-b bg-transparent border-black uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr class="text-[22px] text-wrap bg-transparent">
                <th scope="col" class="px-6 py-[10px] laptop:py-[8px] w-[130px]">
                    รหัส
                </th>
                <th scope="col" class="px-6 py-[10px] laptop:py-[8px]">
                    ชื่อเมนู
                </th>
                <th scope="col" class="px-6 py-[10px] laptop:py-[8px]">
                    ราคา
                </th>
                <th scope="col" class="px-6 py-[10px] laptop:py-[8px]">
                    หมวดหมู่
                </th>
                <th scope="col" class="px-6 py-[10px] laptop:py-[8px]">
                    ประเภท
                </th>
                <th scope="col" class="px-6 py-[10px] laptop:py-[8px]">
                    แก้ไข
                </th>
                <th scope="col" class="px-6 py-[10px] laptop:py-[8px]">
                    ลบ
                </th>
            </tr>
        </thead>
        <tbody>
            @forelse ($menus as $item)
            <tr class="bg-transparent text-wrap text-lg laptop:text-md border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="px-6 py-[10px] laptop:py-[8px] font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$item->menu_id}}
                </th>
                <td class="px-6 py-[10px] laptop:py-[8px]">
                    {{$item->menu_name}}
                </td>
                <td class="px-6 py-[10px] laptop:py-[8px]">
                    {{$item->price}}
                </td>
                <td class="px-6 py-[10px] laptop:py-[8px]">
                    {{$item->category_name}}
                </td>
                <td class="px-6 py-[10px] laptop:py-[8px]">
                    @if ($item->types == null)
                    {{ "-" }}
                    @else
                    {{$item->types}}
                    @endif
                </td>
                <td class="pl-[28px] py-[10px] laptop:py-[8px] laptop:text-center">
                    {{-- wire:click="editStudent({{$item->employee_id}})" --}}
                    <button type="button" wire:click="toggleModal2({{$item->menu_id}})"  class="popupButton">
                        <svg width="24" height="24" viewBox="0 0 35 35" fill="none" class="hover:fill-red-600 xmlns="http://www.w3.org/2000/svg">
                            <path d="M29.3851 11.5792L12.0747 28.8896C10.5289 30.4501 5.90599 31.1645 4.78308 30.1291C3.66016 29.0937 4.4768 24.4709 6.02263 22.9105L23.3331 5.60005C24.1324 4.83882 25.1977 4.42022 26.3014 4.43366C27.405 4.44712 28.4597 4.89157 29.2402 5.67207C30.0207 6.45255 30.4652 7.50728 30.4786 8.61097C30.4922 9.71468 30.0735 10.7799 29.3122 11.5792H29.3851Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M30.625 30.625H17.5" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                    @if($isModalOpen2)
                    <div id="updateEmployeeModal" tabindex="-1" aria-hidden="true" class="fixed inset-0 z-50 overflow-y-auto bg-gray-500 bg-opacity-75">
                        <div class="flex items-center justify-center min-h-screen">
                            <div class="relative z-10 w-full max-w-[1100px] p-3 bg-lightcream rounded-lg shadow-xl">
                                <form action="{{ route('manager.updatemenu', $item->menu_id) }}" method="POST" class="max-w-[890px] mx-auto py-[50px] text-darkgreen flex flex-col gap-[45px]">
                                    <h1 class="text-5xl text-center font-bold">แก้ไขเมนู</h1>
                                    @csrf
                                    <div class="flex md:gap-6 gap-8">
                                        <div class="w-1/2">
                                            <div class="relative z-0 w-full mb-5 group">
                                                <input type="text" name="menu_name" id="first_name" class="block py-2.5 px-0 w-full text-xl text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-darkgreen peer" value="{{$menu_name}}" placeholder=" " required />
                                                <label for="first_name" class="peer-focus:font-medium absolute text-xl text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-8 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-darkgreen peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-8">ชื่อเมนู</label>
                                            </div>
                                            <div class="relative z-0 w-full mb-5 group">
                                                <input type="text" name="price" id="last_name" class="block py-2.5 px-0 w-full text-xl text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-darkgreen peer" value="{{$price}}" placeholder=" " required />
                                                <label for="last_name" class="peer-focus:font-medium absolute text-xl text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-8 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-darkgreen peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-8">ราคา</label>
                                            </div>
                                            
                                            <div class="relative z-0 w-full mb-5 group">
                                                <label for="countries" class="block mb-2 text-xl font-medium text-gray-900 ">หมวดหมู่</label>
                                                <select name="category_id" class="bg-lightcream border border-gray-300 text-gray-900 text-xl rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                    <option value="{{ $category_id_id }}" selected>{{ $category_id }}</option>
                                                    <option value="1">อาหารทานเล่น</option>   
                                                    <option value="2">อาหารจานหลัก</option>
                                                    <option value="3">เครื่องดื่ม</option>
                                                </select>
                                            </div>
                                            @if( $category_id == 'อาหารจานหลัก' )
                                            <div class="relative z-0 w-full mb-5 group">
                                                <label for="countries" class="block mb-2 text-xl font-medium text-gray-900 ">ประเภท</label>
                                                <select name="types" class="bg-lightcream border border-gray-300 text-gray-900 text-xl rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                    <option value="{{ $types }}" selected>{{ $types }}</option>
                                                    <option value="เมนูเส้น">เมนูเส้น</option>   
                                                    <option value="ข้าว/อื่นๆ">ข้าว/อื่นๆ</option>
                                                    <option value="สเต๊ก">สเต๊ก</option>
                                                </select>
                                            </div>
                                            @elseif ( $category_id == 'เครื่องดื่ม' )
                                            <div class="relative z-0 w-full mb-5 group">
                                                <label for="countries" class="block mb-2 text-xl font-medium text-gray-900 ">ประเภท</label>
                                                <select name="types" class="bg-lightcream border border-gray-300 text-gray-900 text-xl rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                    <option value="{{ $types }}" selected>{{ $types }}</option>
                                                    <option value="กาแฟ/ชา">กาแฟ/ชา</option>   
                                                    <option value="ไวน์">ไวน์</option>
                                                    <option value="อื่นๆ">อื่นๆ</option>
                                                    <option value="ของหวาน">ของหวาน</option>                                                    
                                                </select>
                                            </div>
                                            @endif
                                        </div>
                                        
                                        <div class="w-1/2 h-full gap-6">
                                            <div class="">
                                                <label for="message" class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">คำอธิบาย</label>
                                                <textarea id="message" name="detail" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="ใส่คำอธิบาย">{{$detail}}</textarea>
                                            </div>
                                            <div class="">
                                                <label for="message" class="block mb-2 text-start text-lg font-medium text-gray-900 dark:text-white">ภาพอาหาร</label>
                                                <div>
                                                    <div class="w-[30%]"></div>
                                                    <img src="{{$menu_img}}" width="120" alt="">
                                                    <div class="w-[30%]"></div>
                                                </div>
                                                <input type="text" name="menu_img" id="last_name" class="block py-2.5 px-0 w-full text-xl text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-darkgreen peer" value="{{$menu_img}}" placeholder=" " required />
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="flex justify-between">
                                        <button type="button" wire:click="toggleModal2({{$item->menu_id}})" class="text-white scale-[1.3] bg-darkgreen hover:bg-green-900 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">ยกเลิก</button>
                                        <button type="submit" class="text-white scale-[1.3] bg-darkgreen hover:bg-green-900 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">ยืนยัน</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                @endif
                </td>
                <td class="px-6 py-[10px] laptop:py-[8px]">
                    <a href="{{ route('manager.deletemenu', $item->menu_id) }}">
                        <svg width="24" height="24" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.3335 12.8333H36.6668" stroke="#B93636" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M11 18.3333L14.1193 35.4892C14.4363 37.2327 15.9547 38.4999 17.7268 38.4999H26.2731C28.0452 38.4999 29.5638 37.2325 29.8808 35.4892L33 18.3333" stroke="#B93636" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M16.5 9.16667C16.5 7.14162 18.1416 5.5 20.1667 5.5H23.8333C25.8584 5.5 27.5 7.14162 27.5 9.16667V12.8333H16.5V9.16667Z" stroke="#B93636" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>
                </td>
            </tr>
            @empty
            <tr class="text-5xl w-full text-wrap text-center ">
                <td colspan="8" class="py-[70px]">
                    ไม่มีข้อมูลเมนู
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>
    <div wire:click class="mt-[20px]">
        {{ $menus->links() }}
    </div>
</div>
