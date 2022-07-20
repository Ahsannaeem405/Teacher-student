<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class MyEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public $msg;
    public $name;
    public $role;
    public $public_img;
    public $date;
    public $id;
    
    
    public function __construct($msg,$name,$role,$public_img,$date,$id)
    {
        $this->msg = $msg;
        $this->name = $name;
        $this->role = $role;
        $this->public_img=$public_img;
        $this->date=$date;
        $this->id=$id;


    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
      public function broadcastOn()
      {

          return ['Techer_student'];
      }

      public function broadcastAs()
      {
       
          return 'Notification';
      }
}
