<div class="show relative" >
    <div wire:loading class="w-full justify-center flex mt-[-40px]">
        @include('loading')
    </div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    
    <div class=" flex justify-between items-center h-[120px]">
        <h1 class="text-5xl pb-4 font-bold">พนักงาน</h1>
        <div class="mb-[25px] scale-[1.2] flex flex-column sm:flex-row flex-wrap space-y-4 sm:space-y-0 items-center justify-around">
            <label for="table-search" class="sr-only">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 rtl:inset-r-0 rtl:right-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                </div>
                <input wire:model.lazy="search" class="block p-2 ps-10 text-sm text-gray-900 outline-none border-b border-black bg-lightcream w-80 dark:bg-gray-700 focus:border-b-2 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" placeholder="ค้นหาชื่อพนักงาน">
            </div>
        </div>
        <div x-data="{ open: false }">
            <button @click="open = ! open" class="text-white scale-[1.4] bg-darkgreen hover:bg-green-900 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">+ เพิ่มพนักงาน</button>
            @teleport('.show')
                <div x-show="open" class="h-[95%] scale-[1.2] transition-all laptop:scale-x-[1.2] laptop:scale-y-[1.1] rounded-lg w-full bg-darkgreen absolute top-0 ">
                    <button @click="open = false" class="text-white">close</button>
                </div>
            @endteleport
        </div>
    </div>
    <table class="bg-transparent text-sm w-full text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-gray-700 border-b bg-transparent border-black uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr class="text-2xl text-wrap bg-transparent">
                <th scope="col" class="px-6 py-3 w-[140px]">
                    รหัส
                </th>
                <th scope="col" class="px-6 py-3">
                    ชื่อ
                </th>
                <th scope="col" class="px-6 py-3">
                    นามสกุล
                </th>
                <th scope="col" class="px-6 py-3">
                    เบอร์โทร
                </th>
                <th scope="col" class="px-6 py-3">
                    ตำแหน่ง
                </th>
                <th scope="col" class="px-6 py-3">
                    วันที่สมัคร
                </th>
                <th scope="col" class="px-6 py-3">
                    แก้ไข
                </th>
                <th scope="col" class="px-6 py-3">
                    ลบ
                </th>
            </tr>
        </thead>
        <tbody>
            @forelse ($employees as $item)
            <tr class="bg-transparent text-wrap text-lg laptop:text-md border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="px-6 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$item->employee_id}}
                </th>
                <td class="px-6 py-3">
                    {{$item->firstname}}
                </td>
                <td class="px-6 py-3">
                    {{$item->lastname}}
                </td>
                <td class="px-6 py-3">
                    {{$item->phone}}
                </td>
                <td class="px-6 py-3">
                    {{$item->roles}}
                </td>
                <td class="px-6 py-3">
                    {{$item->createdAt}}
                </td>
                <td class="pl-[28px] py-3 laptop:text-center">
                    <div x-data="{ open: false }">
                        <button @click="open = ! open"">
                            <svg width="24" height="24" viewBox="0 0 35 35" fill="none" class="hover:fill-red-600 xmlns="http://www.w3.org/2000/svg">
                                <path d="M29.3851 11.5792L12.0747 28.8896C10.5289 30.4501 5.90599 31.1645 4.78308 30.1291C3.66016 29.0937 4.4768 24.4709 6.02263 22.9105L23.3331 5.60005C24.1324 4.83882 25.1977 4.42022 26.3014 4.43366C27.405 4.44712 28.4597 4.89157 29.2402 5.67207C30.0207 6.45255 30.4652 7.50728 30.4786 8.61097C30.4922 9.71468 30.0735 10.7799 29.3122 11.5792H29.3851Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M30.625 30.625H17.5" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                        @teleport('.show')
                            <div x-show="open" class="h-[95%] scale-[1.2] transition-all laptop:scale-x-[1.2] laptop:scale-y-[1.1] rounded-lg w-full bg-darkgreen absolute top-0 ">
                                <button @click="open = false" class="text-white">close</button>
                            </div>
                        @endteleport
                    </div>
                </td>
                <td class="px-6 py-3">
                    <a href="">
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
                    ไม่มีข้อมูลพนักงาน
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>
    <div wire:click class="mt-[20px]">
        {{ $employees->links() }}
    </div>
</div>
