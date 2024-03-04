<?php

namespace App\Livewire\Customer;
use Illuminate\Support\Facades\Cookie;
use Livewire\Component;
use Illuminate\Support\Facades\Route;

class CountCartMenu extends Component
{
    public $count; 
    public $price;
    public $key;
    public $tableid;

    public function mount($count, $price)
    {
        $this->count = $count;
        $this->price = $price;
    }
    // public function setCookie($name, $value, $minutes)
    // {
    //     cookie()->put($name, $value, $minutes);
    // }
    // public function clearCookieIfCountIsZero()
    // {
    //     if ($this->count === 0) {
    //         $cookieValue = request()->cookie('menu_cookie');
    //         $values = json_decode($cookieValue, true);
    //         foreach ($values as $keys => $value) {
    //             if ($keys == $this->key) {
    //                 unset($values[$keys]);
    //             }
    //         }
    //         // dd($values);
    //         $updatedCookieValue = json_encode($values);
    //         // Set the updated cookie value
    //         $this->setCookie('menu_cookie', $updatedCookieValue, 10);
    //         // Redirect to the cart page with the updated cookie
    //         // return redirect(route('customer.table.cart', ['id' => $this->tableid]))->with('cookie', $cookie);
    //     }
    // }
    public function increment() {
        $this->count++;
        // $this->clearCookieIfCountIsZero();
    }
    public function decrement() {
        $this->count--;
        if ($this->count == 0) {
            $this->count = 1;
        }
        
    }
    public function render()
    {
        return view('livewire.customer.count-cart-menu');
    }
}
