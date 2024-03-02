<?php

namespace App\Livewire\Customer;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
// use Livewire\WithPagination;

class OrderMenu extends Component
{
    public function placeholder() {
        return view('loading');
    }
    public function render()
    {
        sleep(0.5);
        $menus = DB::table('menu')
            ->join('category', 'menu.category_id', '=', 'category.category_id')
            ->where('menu_name', 'like', '%' . $this->search . '%')
            ->where('category_name', 'like', '%' . $this->setCategory . '%')
            ->paginate(10);
        return view('livewire.customer.order-menu');
    }
}
