<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ReservationList extends Component
{
    use WithPagination;

    protected $paginationTheme = 'tailwind';

    public function placeholder() {
        return view('loading');
    }
    public function render()
    {
        sleep(1);
        $reservations = DB::table('reservation')->paginate(20);
        return view('livewire.reservation-list', compact('reservations'));
    }
}
