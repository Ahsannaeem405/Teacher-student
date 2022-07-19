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
class StreamOffer implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $data;
=======
class StreamOffer
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
        // stream offer can broadcast on a private channel
        return  new PrivateChannel('stream-signal-channel.' . $this->data['receiver']['id']);
    }
}
=======
        //return new PrivateChannel('channel-name');

        // stream offer can broadcast on a private channel
        return  new PrivateChannel('stream-signal-channel.' . $this->data['receiver']['id']);
    }
}
>>>>>>> Stashed changes
