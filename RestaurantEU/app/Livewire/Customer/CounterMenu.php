<?php

namespace App\Livewire\Customer;

use Livewire\Component;

class CounterMenu extends Component
{

    public $count = 1;

    public function increment() {
        $this->count++;
    }
    public function decrement() {
        $this->count--;
    }

    public function render()
    {
        sleep(0);
        return view('livewire.customer.counter-menu');
    }
}
