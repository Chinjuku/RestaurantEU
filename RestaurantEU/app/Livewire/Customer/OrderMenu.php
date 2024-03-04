<?php

namespace App\Livewire\Customer;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Route;
// use Livewire\WithPagination;

class OrderMenu extends Component
{
    public function placeholder() {
        return view('loading');
    }
    public $isModalOpen2 = false;
    //show at popup menu
    public $menu_id, $menu_name, $types, $price, $menu_img, $detail, $category_id, $category_id_id;
    //Count Order
    public $count = 1;

    public $tableid;

    public function __construct()
    {
        $this->tableid = Route::current()->parameter('id');
    }
    public function toggleModal2($id)
    {
        $this->isModalOpen2 = !$this->isModalOpen2;
        // $showupdate = DB::table('menu')->where('menu_id' , $id)->first();
        $showupdate = DB::table('menu')
        ->join('category', 'menu.category_id', '=', 'category.category_id')
        ->where('menu.menu_id', $id)
        ->first();
        if ($showupdate) {
            $this->menu_id = $showupdate->menu_id;
            $this->menu_name = $showupdate->menu_name;
            $this->price = $showupdate->price;
            $this->menu_img = $showupdate->menu_img;
            $this->detail = $showupdate->detail;
            $this->category_id_id = $showupdate->category_id;
            $this->category_id = $showupdate->category_name;
            $this->types = $showupdate->types;
        }
    }
    // public function chooseMenu() {
    //     $minutes = 1;
    //     $values = [
    //         'menu_ID' => $this->menu_id,
    //         'menu_Name' => $this->menu_name,
    //         'prices' => $this->price,
    //         'count' => $this->count, 
    //     ];
    //     $cookie = Cookie::make('menu_cookie', json_encode($values), $minutes);
    //     $tableid = Route::current()->parameter('id');
    //     return redirect()->route('customer.table', $tableid)->withCookie($cookie)->with('success', 'เลือกอาหารละจ้า');
    // }
    public function render()
    {
        // sleep(0.5);
        $menus = DB::table('menu')
            ->join('category', 'menu.category_id', '=', 'category.category_id')
            ->get();
            // ->where('menu_name', 'like', '%' . $this->search . '%')
            // ->where('category_name', 'like', '%' . $this->setCategory . '%')
            // ->paginate(10);
        return view('livewire.customer.order-menu', compact('menus'));
    }
}
