<?php

namespace App\Livewire;
use Livewire\WithPagination;
use Livewire\Component;

class CustomPagination extends Component
{
    use WithPagination;
    protected $paginationTheme = 'custom';

    public function paginationView()
    {
        return view('livewire.custom-pagination');
    }
}
