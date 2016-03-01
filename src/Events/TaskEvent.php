<?php

namespace Jeylabs\BroadcastNotifier\Events;

use App\Events\Event;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class TaskEvent extends Event
{
    use SerializesModels;

    public $data;
    public function __construct($data)
    {
        $this->data = $data;
    }

    public function broadcastOn()
    {
        return ['task-event'];
    }
}