<?php

namespace App\Observers;

use App\Models\Footer;
use Illuminate\Support\Facades\Storage;

class FooterObserver
{
    /**
     * Handle the Footer "created" event.
     */
    public function created(Footer $footer): void
    {
        //
    }

    /**
     * Handle the Footer "updated" event.
     */
    public function updated(Footer $footer): void
    {
        //
    }

    /**
     * Handle the Footer "deleted" event.
     */
    public function deleted(Footer $footer): void
    {
        if (Storage::disk('public')->exists($footer->image)) {
            Storage::disk('public')->delete($footer->image);
        }
    }

    /**
     * Handle the Footer "restored" event.
     */
    public function restored(Footer $footer): void
    {
        //
    }

    /**
     * Handle the Footer "force deleted" event.
     */
    public function forceDeleted(Footer $footer): void
    {
        //
    }
}
