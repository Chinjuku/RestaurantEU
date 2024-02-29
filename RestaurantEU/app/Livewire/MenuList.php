<?php

namespace App\Livewire;

use Livewire\Component;

class MenuList extends Component
{
    public $menu_id, $menu_name, $price, $menu_img, $detail, $category_id;

    public $isModalOpen = false, $isModalOpen2 = false;

    public function toggleModal()
    {
        $this->isModalOpen = !$this->isModalOpen;
    }
    public function toggleModal2($id)
    {
        $this->isModalOpen2 = !$this->isModalOpen2;
        $showupdate = DB::table('menu')->where('menu_id' , $id)->first();
        if ($showupdate) {
            $this->menu_id = $showupdate->menu_id;
            $this->menu_name = $showupdate->menu_name;
            $this->price = $showupdate->price;
            $this->menu_img = $showupdate->menu_img;
            $this->detail = $showupdate->detail;
            $this->category_id = $showupdate->category_id;
            if($showupdate->roles == "manager") {
                $this->thairoles = "ผู้จัดการ";
            }
            elseif ($showupdate->roles == "cashier"){
                $this->thairoles = "แคชเชียร์";
            }
            elseif ($showupdate->roles == "waiter"){
                $this->thairoles = "พนักงานเสิร์ฟ";
            }
            elseif ($showupdate->roles == "chef"){
                $this->thairoles = "เชฟ";
            }
        }
    }
    public function placeholder() {
        return view('loading');
    }
    public function render()
    {
        sleep(1);
        $menus = DB::table('menu')->paginate(10);
        return view('livewire.menu-list', compact('menus'));
    }
}
