<?php

namespace App\Livewire\Chef;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Illuminate\Support\Carbon;

class CookingList extends Component
{

    public $open = false, $getlists, $gettableid, $gettime;
    function showOrder($id) {
        // change order status
        // DB::table('orderdetails')->where('order_id', $id)->update([
        //     'order_status' => 'in-process'
        // ]);
        $this->open = true;
        DB::table('order')->where('order_id', $id)->update([ 'status' => 'cooking' ]);
        $orderfromid = DB::table('orderdetails')
                    ->join('order', 'order.order_id', '=', 'orderdetails.order_id')
                    ->join('menu', 'menu.menu_id', '=', 'orderdetails.menu_id')
                    ->where('order.order_id', $id)
                    ->get();
        $this->getlists = $orderfromid;
        $this->gettableid = $orderfromid->pluck('table_id')->first();
        $this->gettime = Carbon::parse($orderfromid->pluck('order_time')->first())->locale('th')->format('H:i:s');
        // $this->getorderid = $orderfromid->pluck('order_id')->first();
        // dd($this->getlists, $this->open); // , $this->getorderid
        // return redirect()->route('chef.neworder', compact('getlists'));
    }
    public function placeholder() {
        return view('loading');
    }
    public function render()
    {
        $getorder = DB::table('order')
            ->whereIn('status', ['pending', 'cooking'])
            ->get()
            ->map(function ($order) {
                $order->formattedOrderTime = Carbon::parse($order->order_time)->locale('th')->format('H:i:s');
                return $order;
        });
        return view('livewire.chef.cooking-list', compact('getorder'));
    }
}
