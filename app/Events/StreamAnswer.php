<?php

namespace App\Events;

<<<<<<< Updated upstream
use Illuminate\Broadcasting\InteractsWithSockets;
=======
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
>>>>>>> Stashed changes
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

<<<<<<< Updated upstream
class StreamAnswer implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $data;
=======
class StreamAnswer
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

>>>>>>> Stashed changes
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
<<<<<<< Updated upstream
=======
        //return new PrivateChannel('channel-name');
>>>>>>> Stashed changes
        return  new PrivateChannel('stream-signal-channel.' . $this->data['broadcaster']);
    }
}
