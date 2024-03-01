<?php

namespace App\Livewire;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;
use Livewire\Component;

class MenuList extends Component
{
    use WithPagination;

    public $menu_id, $menu_name, $types, $price, $menu_img, $detail, $category_id, $category_id_id;
    public $isModalOpen = false, $isModalOpen2 = false;
    public $setTypes = 0;
    public $search = "";
    public $setPic = "";
    public $setCategory = "";
    protected $paginationTheme = 'tailwind';

    public function toggleModal()
    {
        $this->isModalOpen = !$this->isModalOpen;
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

        return view('livewire.menu-list', compact('menus'));
    }
}
