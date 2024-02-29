<?php

namespace App\Livewire;

use Livewire\Component;

class MenuList extends Component
{
    public function placeholder() {
        return view('loading');
    }
    public function render()
    {
        sleep(1);
        return view('livewire.menu-list');
    }
}
