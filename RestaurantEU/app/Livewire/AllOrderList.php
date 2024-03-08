<?php

namespace App\Livewire;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class AllOrderList extends Component
{
    public function render()
    {
        $allorder = DB::table('bill')
            ->join('order', 'bill.order_id', '=', 'order.order_id')
            ->select('bill.*', 'order.order_time')
            ->orderBy('order.order_time', 'desc') // Assuming you want to order by order time
            ->paginate(10);

        // Format the order time for each item in the paginated result
        $allorder->getCollection()->transform(function ($item) {
            $item->formatDate = Carbon::parse($item->order_time)->locale('th')->format('d-m-Y');
            return $item;
        });
        // $allorder->items($allorder->getCollection());
        // dd($allorder);
        return view('livewire.all-order-list', compact('allorder'));
    }
}
