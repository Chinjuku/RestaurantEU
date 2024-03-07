<?php

namespace App\Livewire\Cashier;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class BillList extends Component
{
    public $open = false;
    public $table_id, $order_id, $totalprice, $order_time, $bill_id, $showbill, $allprice;
    public function showBill($id) {
        // change order status
        $this->open = true;
        $showbill = DB::table('bill')
                    ->join('order', 'bill.order_id', '=' ,'order.order_id')
                    ->join('orderdetails', 'order.order_id', '=' ,'orderdetails.order_id')
                    ->join('menu', 'orderdetails.menu_id', '=' ,'menu.menu_id')
                    ->where('bill_id', $id)
                    ->get();
        // dd($showbill);
        $this->showbill = $showbill;
        $this->table_id = $showbill->pluck('table_id')->first();
        $this->bill_id = $showbill->pluck('bill_id')->first();
        $this->order_id = $showbill->pluck('order_id')->first();
        $this->allprice = $showbill->pluck('allprice')->first();
        $this->totalprice = $showbill->pluck('totalprice')->first();
        $this->order_time = Carbon::parse($showbill->pluck('order_time')->first())->locale('th')->format('H:i');
    }
    public function setPaid($id) {
        DB::table('bill')
            ->where('bill_id', $id)
            ->update([
             'isPaid' => true
            ]);
        $this->open = false;
    }
    public function placeholder() {
        return view('loading');
    }
    public function render()
    {
        sleep(0.5);
        $bills = DB::table('bill')->where('isPaid', false)->get();
        // dd($bills);
        return view('livewire.cashier.bill-list', compact('bills'));
    }
}
