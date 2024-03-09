<div class="bg-lightcream flex justify-start items-start my-1 h-full">
    <div class="border border-black rounded-3xl m-10 px-20 py-7 w-full">
        <table class="w-full text-center table-auto min-w-max text-3xl laptop:text-[20px] ">
            <thead>
                <tr>
                    <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50 mb-2">ลำดับ</th>
                    <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50 mb-2">รหัสคำสั่ง</th>
                    <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50 mb-2">ยอดรวม</th>
                    <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50 mb-2">วันที่ (ว-ด-ป)</th>
                </tr>
            </thead>
            <hr>
            <tbody>
                @foreach ($allorder as $index => $item)
                <tr>
                    <th class="py-2">{{ $index+1 }}</th>
                    <th class="py-2"># {{ $item->order_id }}</th>
                    <th class="py-2">{{ $item->totalprice }}</th>
                    <th class="py-2">{{ $item->formatDate }}</th>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div wire:click class="mt-[20px]">
            {{ $allorder->links() }}
        </div>
        {{-- <div class="flex justify-between items-center">
            <i class='bx bx-chevrons-left bx-md'></i>
            <i class='bx bx-chevrons-right bx-md'></i>
        </div> --}}
    </div>
</div>
