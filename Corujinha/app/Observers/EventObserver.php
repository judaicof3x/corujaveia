<?php

namespace App\Observers;

use App\Models\Event;
use Illuminate\Support\Str;

class EventObserver
{
    /**
     * Handle the Event "creating" event.
     *
     * @param  \App\Models\Event  $event
     * @return void
     */
    public function creating(Event $event)
    {
        $event->slug = Str::kebab($event->name);
        $event->created_by = auth()->user()->id;
    }

    /**
     * Handle the Event "updating" event.
     *
     * @param  \App\Models\Event  $event
     * @return void
     */
    public function updating(Event $event)
    {
        $event->slug = Str::kebab($event->name);
    }

    /**
     * Handle the Event "deleted" event.
     *
     * @param  \App\Models\Event  $event
     * @return void
     */
    public function deleted(Event $event)
    {
        //
    }

    /**
     * Handle the Event "restored" event.
     *
     * @param  \App\Models\Event  $event
     * @return void
     */
    public function restored(Event $event)
    {
        //
    }

    /**
     * Handle the Event "force deleted" event.
     *
     * @param  \App\Models\Event  $event
     * @return void
     */
    public function forceDeleted(Event $event)
    {
        //
    }
}
