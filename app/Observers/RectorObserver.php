<?php

namespace App\Observers;

use App\Models\Rector;
use Illuminate\Support\Facades\Storage;

class RectorObserver
{
    /**
     * Handle the Rector "created" event.
     */
    public function created(Rector $rector): void
    {
        //
    }

    /**
     * Handle the Rector "updated" event.
     */
    public function updated(Rector $rector): void
    {
        //
    }

    /**
     * Handle the Rector "deleted" event.
     */
    public function deleted(Rector $rector): void
    {
        if (Storage::disk('public')->exists($rector->image)) {
            Storage::disk('public')->delete($rector->image);
        }
    }

    /**
     * Handle the Rector "restored" event.
     */
    public function restored(Rector $rector): void
    {
        //
    }

    /**
     * Handle the Rector "force deleted" event.
     */
    public function forceDeleted(Rector $rector): void
    {
        //
    }
}
