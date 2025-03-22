<?php

namespace App\Observers;

use App\Models\History;
use Illuminate\Support\Facades\Storage;

class HistoryObserver
{
    /**
     * Handle the History "created" event.
     */
    public function created(History $history): void
    {
        //
    }

    /**
     * Handle the History "updated" event.
     */
    public function updated(History $history): void
    {
        //
    }

    /**
     * Handle the History "deleted" event.
     */
    public function deleted(History $history): void
    {
        if (Storage::disk('public')->exists($history->image)) {
            Storage::disk('public')->delete($history->image);
        }
    }

    /**
     * Handle the History "restored" event.
     */
    public function restored(History $history): void
    {
        //
    }

    /**
     * Handle the History "force deleted" event.
     */
    public function forceDeleted(History $history): void
    {
        //
    }
}
