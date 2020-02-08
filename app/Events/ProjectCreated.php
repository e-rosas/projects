<?php

namespace App\Events;

use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ProjectCreated
{
    use Dispatchable;
    use SerializesModels;

    public $project;

    /**
     * Create a new event instance.
     *
     * @param mixed $project
     */
    public function __construct($project)
    {
        $this->project = $project;
    }

    /*
     * Get the channels the event should broadcast on.
     *
     * @return array|\Illuminate\Broadcasting\Channel
     */
}
