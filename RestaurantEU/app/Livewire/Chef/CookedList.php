<?php

namespace App\Livewire\Chef;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Illuminate\Support\Carbon;

class CookedList extends Component
{
    public $open = false, $getlists, $gettableid, $gettime, $getstatus, $getid;
    public $settrue;
    function showOrder($id) {
        // change order status
        $this->open = true;
        $this->settrue = true;
        $orderfromid = DB::table('orderdetails')
                    ->join('order', 'order.order_id', '=', 'orderdetails.order_id')
                    ->join('menu', 'menu.menu_id', '=', 'orderdetails.menu_id')
                    ->where('order.order_id', $id)
                    ->get();
        $this->getlists = $orderfromid;
        $this->gettableid = $orderfromid->pluck('table_id')->first();
        $this->getid = $orderfromid->pluck('order_id')->first();
        $this->getstatus = $orderfromid->pluck('order_status')->first();
        $this->gettime = Carbon::parse($orderfromid->pluck('order_time')->first())->locale('th')->format('H:i:s');
        // $this->getorderid = $orderfromid->pluck('order_id')->first();
    }
    public function placeholder() {
        return view('loading');
    }
    public function render()
    {
        sleep(0.5);
        $getorder = DB::table('order')
            ->where('status', 'serving')
            ->get()
            ->map(function ($order) {
                $order->formattedOrderTime = Carbon::parse($order->order_time)->locale('th')->format('H:i:s');
                return $order;
        });
        // DB::table('orderdetails')->where('order_status', 'in-queue')->update([
        //     'order_status' => 'in-process'
        // ]);
        return view('livewire.chef.cooked-list', compact('getorder'));
    }
}
