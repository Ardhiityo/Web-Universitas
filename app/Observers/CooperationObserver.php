<?php

namespace App\Observers;

use App\Models\Cooperation;
use Illuminate\Support\Facades\Storage;

class CooperationObserver
{
    /**
     * Handle the Cooperation "created" event.
     */
    public function created(Cooperation $cooperation): void
    {
        //
    }

    /**
     * Handle the Cooperation "updated" event.
     */
    public function updated(Cooperation $cooperation): void
    {
        //
    }

    /**
     * Handle the Cooperation "deleted" event.
     */
    public function deleted(Cooperation $cooperation): void
    {
        if (Storage::disk('public')->exists($cooperation->image)) {
            Storage::disk('public')->delete($cooperation->image);
        }
    }

    /**
     * Handle the Cooperation "restored" event.
     */
    public function restored(Cooperation $cooperation): void
    {
        //
    }

    /**
     * Handle the Cooperation "force deleted" event.
     */
    public function forceDeleted(Cooperation $cooperation): void
    {
        //
    }
}
