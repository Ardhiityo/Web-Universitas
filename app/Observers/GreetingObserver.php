<?php

namespace App\Observers;

use App\Models\Greeting;
use Illuminate\Support\Facades\Storage;

class GreetingObserver
{
    /**
     * Handle the Greeting "created" event.
     */
    public function created(Greeting $greeting): void
    {
        //
    }

    /**
     * Handle the Greeting "updated" event.
     */
    public function updated(Greeting $greeting): void
    {
        //
    }

    /**
     * Handle the Greeting "deleted" event.
     */
    public function deleted(Greeting $greeting): void
    {
        if (Storage::disk('public')->exists($greeting->image)) {
            Storage::disk('public')->delete($greeting->image);
        }
    }

    /**
     * Handle the Greeting "restored" event.
     */
    public function restored(Greeting $greeting): void
    {
        //
    }

    /**
     * Handle the Greeting "force deleted" event.
     */
    public function forceDeleted(Greeting $greeting): void
    {
        //
    }
}
