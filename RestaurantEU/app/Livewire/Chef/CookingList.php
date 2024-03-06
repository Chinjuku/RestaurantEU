<?php

namespace App\Livewire\Chef;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Illuminate\Support\Carbon;

class CookingList extends Component
{

    public $open = false, $getlists, $gettableid, $gettime, $getstatus, $getid;
    public $settrue;
    function showOrder($id) {
        // change order status
        $this->open = true;
        $this->settrue = true;
        DB::table('order')->where('order_id', $id)->update([ 'status' => 'cooking' ]);
        $orderfromid = DB::table('orderdetails')
                    ->join('order', 'order.order_id', '=', 'orderdetails.order_id')
                    ->join('menu', 'menu.menu_id', '=', 'orderdetails.menu_id')
                    ->where('order.order_id', $id)
                    ->get();
        $this->getlists = $orderfromid;
        $this->gettableid = $orderfromid->pluck('table_id')->first();
        $this->getid = $orderfromid->pluck('order_id')->first();
        $this->getstatus = $orderfromid->pluck('order_status')->first();
        $this->gettime = Carbon::parse($orderfromid->pluck('order_time')->first())->locale('th')->format('H:i');
        // $this->getorderid = $orderfromid->pluck('order_id')->first();
    }
    public function clickToDone($orderid, $menuid) {
        // change orderdetails order_status
        $this->settrue = false;
        DB::table('orderdetails')
            ->where('order_id', $orderid)
            ->where('menu_id', $menuid)
            ->update(['order_status' => 'serving' ]);
        $orderfromid = DB::table('orderdetails')
            ->join('order', 'order.order_id', '=', 'orderdetails.order_id')
            ->join('menu', 'menu.menu_id', '=', 'orderdetails.menu_id')
            ->where('order.order_id', $orderid)
            ->get();
        $this->getlists = $orderfromid;
        $this->gettableid = $orderfromid->pluck('table_id')->first();
        $this->getid = $orderfromid->pluck('order_id')->first();
        $this->getstatus = $orderfromid->pluck('order_status')->first();
        $this->gettime = Carbon::parse($orderfromid->pluck('order_time')->first())->locale('th')->format('H:i');
    }
    public function placeholder() {
        return view('loading');
    }
    public function render()
    {
        sleep(0.5);
        $getorder = DB::table('order')
            ->whereIn('status', ['pending', 'cooking'])
            ->get()
            ->map(function ($order) {
                $order->formattedOrderTime = Carbon::parse($order->order_time)->locale('th')->format('H:i');
                return $order;
        });
        DB::table('orderdetails')->where('order_status', 'in-queue')->update([
            'order_status' => 'in-process'
        ]);
        return view('livewire.chef.cooking-list', compact('getorder'));
    }
}
