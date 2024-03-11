<div class="" >
    <div wire:loading class="w-full justify-center text-white flex mt-[-140px] z-[120]">
        @include('loading')
    </div>
    <table class="bg-transparent w-full text-left rtl:text-righ">
        <thead class="bg-transparent border-white border-b-[4px] uppercase">
            <tr class="text-[22px] pc:text-[26px] text-wrap bg-transparent">
                <th scope="col" class="px-6 laptop:px-4 py-[12px] laptop:py-[8px] w-[130px] laptop:w-[90px]">
                    รหัส
                </th>
                <th scope="col" class="px-6 laptop:px-4 py-[12px] laptop:py-[8px]">
                    ชื่อ
                </th>
                <th scope="col" class="px-6 laptop:px-4 py-[12px] laptop:py-[8px]">
                    จำนวน
                </th>
                <th scope="col" class="px-6 laptop:px-4 py-[12px] laptop:py-[8px] max-[1441px]:opacity-0">
                    เบอร์โทร
                </th>
                <th scope="col" class="px-6 laptop:px-4 py-[12px] laptop:py-[8px]">
                    เวลา
                </th>
                <th scope="col" class="px-6 laptop:px-4 py-[12px] laptop:py-[8px]">
                    เวลากำหนด
                </th>
                <th scope="col" class="px-6 laptop:px-4 py-[12px] laptop:py-[8px]">
                    ลบ
                </th>
            </tr>
        </thead>
        <tbody>
            @forelse ($reservations as $item)
            <tr class="bg-transparent text-wrap text-lg laptop:text-md border-b dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-600">
                <th scope="row" class="px-6 laptop:px-4 py-[10px] pc:text-[20px] pc:py-[12px] laptop:py-[8px] font-bold whitespace-nowrap dark:text-white">
                    {{$item->reserveid}}
                </th>
                <td class="px-6 laptop:px-4 py-[10px] pc:py-[12px] laptop:py-[8px]">
                    {{$item->name}}
                </td>
                <td class="px-6 laptop:px-4 py-[10px] pc:py-[12px] laptop:py-[8px]">
                    {{$item->people_num}}
                </td>
                <td class="px-6 laptop:px-4 py-[10px] pc:py-[12px] laptop:py-[8px] max-[1441px]:opacity-0">
                    {{$item->phonenum}}
                </td>
                <td class="px-6 laptop:px-4 py-[10px] pc:py-[12px] laptop:py-[8px]">
                    {{$item->time}}
                </td>
                <td class="px-6 laptop:px-4 py-[10px] pc:py-[12px] laptop:py-[8px]">
                    {{$item->end_time}}
                </td>
                <td class="px-6 laptop:px-4 py-[10px] pc:py-[12px] laptop:py-[8px]">
                    {{-- <a href="{{ route('reserve.delete', $item->reserveid) }}"> --}}
                    <button 
                        wire:click="deleteReserve({{$item->reserveid}})" 
                        wire:confirm="คุณต้องการลบ {{$item->name}} ใช่ไหม">
                        <svg width="24" height="24" viewBox="0 0 44 44" fill="#FFECBC" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.3335 12.8333H36.6668" stroke="#FFECBC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M11 18.3333L14.1193 35.4892C14.4363 37.2327 15.9547 38.4999 17.7268 38.4999H26.2731C28.0452 38.4999 29.5638 37.2325 29.8808 35.4892L33 18.3333" stroke="yellow" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M16.5 9.16667C16.5 7.14162 18.1416 5.5 20.1667 5.5H23.8333C25.8584 5.5 27.5 7.14162 27.5 9.16667V12.8333H16.5V9.16667Z" stroke="yellow" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                    {{-- </a> --}}
                </td>
            </tr>
            @empty
            <tr class="text-5xl w-full text-wrap text-center ">
                <td colspan="8" class="py-[70px]">
                    ไม่มีข้อมูลการจอง
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>
    <div wire:click class="mt-[20px]">
        {{ $reservations->links() }}
    </div>
</div>
