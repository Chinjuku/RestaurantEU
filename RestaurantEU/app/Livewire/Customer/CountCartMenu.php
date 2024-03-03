<?php

namespace App\Livewire\Customer;

use Livewire\Component;

class CountCartMenu extends Component
{
    public $count; 
    public $price;

    public function mount($count, $price)
    {
        $this->count = $count;
        $this->price = $price;
    }

    public function increment() {
        $this->count++;
    }
    public function decrement() {
        $this->count--;
    }
    public function render()
    {
        return view('livewire.customer.count-cart-menu');
    }
}
