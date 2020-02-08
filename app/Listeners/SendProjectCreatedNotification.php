<?php

namespace App\Listeners;

use App\Events\ProjectCreated;
use App\Mail\ProjectCreated as ProjectCreatedMail;
use Illuminate\Support\Facades\Mail;

class SendProjectCreatedNotification
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
    }

    /**
     * Handle the event.
     */
    public function handle(ProjectCreated $event)
    {
        Mail::to($event->project->owner->email)->send(
            new ProjectCreatedMail($event->project)
        );
    }
}
