<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\DB;

class OrderListEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    
    public $order_status;
    /**
     * Create a new event instance.
     */
    public function __construct($order_id, $menu_id) // $order_status, 
    {
        // $this->order_status = DB::table('orderdetails')->find($order_status);
        $this->order_status = DB::table('orderdetails')->where(['order_id' => $order_id, 'menu_id' => $menu_id])->get();
        // dd($this->order_status);
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn()
    {
        return 'my-channel';
    }
    public function broadcastAs()
    {
        return 'order-status';
    }
}
