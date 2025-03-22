<?php

namespace App\Observers;

use App\Models\Facility;
use Illuminate\Support\Facades\Storage;

class FacilityObserver
{
    /**
     * Handle the Facility "created" event.
     */
    public function created(Facility $facility): void
    {
        //
    }

    /**
     * Handle the Facility "updated" event.
     */
    public function updated(Facility $facility): void
    {
        //
    }

    /**
     * Handle the Facility "deleted" event.
     */
    public function deleted(Facility $facility): void
    {
        if (Storage::disk('public')->exists($facility->image)) {
            Storage::disk('public')->delete($facility->image);
        }
    }

    /**
     * Handle the Facility "restored" event.
     */
    public function restored(Facility $facility): void
    {
        //
    }

    /**
     * Handle the Facility "force deleted" event.
     */
    public function forceDeleted(Facility $facility): void
    {
        //
    }
}
