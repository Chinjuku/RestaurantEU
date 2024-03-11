<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class ReservationList extends Component
{
    use WithPagination;

    protected $paginationTheme = 'tailwind';

    public function deleteReserve($id) 
    {
        sleep(0);
        DB::table('reservation')->where('reserveid', $id)->delete();
        $notification = array(
            'message' => 'ยกเลิกรายการเรียบร้อย!',
            'alert-type' => 'success'
        );
        return redirect()->route('showreserve')->with($notification);
    }
    public function placeholder()
    {
        return view('loading');
    }
    public function render()
    {
        sleep(0.8);
        $reservations = DB::table('reservation')
            // ->get()
            // ->map(function ($reservation) {
            //     $reservation->time = Carbon::parse($reservation->time)->locale('th')->format('H:i');
            //     $reservation->end_time = Carbon::parse($reservation->end_time)->locale('th')->format('H:i');
            //     return $reservation;})
            ->paginate(10);
        DB::table('reservation')->where('end_time', now()->format('H:i:s'))->delete();
        return view('livewire.reservation-list', compact('reservations'));
    }
}
